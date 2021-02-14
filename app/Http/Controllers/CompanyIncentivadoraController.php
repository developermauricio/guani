<?php

namespace App\Http\Controllers;

use App\User;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Repositories\HostnameRepository;
use Hyn\Tenancy\Repositories\WebsiteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyIncentivadoraController extends Controller
{
    public function index(){
        return view('guani.emincentivadora.createemincentivadora');
    }

    public function storeCompanyIncentivadora(Request $request){
        $fqdn = sprintf('%s.%s', request('fqdn'), env('APP_DOMAIN'));

        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->fqdn = $request->fqdn;
            $user->type = "incentivadora";
            $user->password = bcrypt("password");
            $user->save();

            $website = new Website;
            $website->uuid = $user->fqdn;
            $website->type = "incentivadora";
            $website->logo = $request->logo;
            app(WebsiteRepository::class)->create($website);

            $hostname = new Hostname;
            $hostname->fqdn = $fqdn;
            $hostname->user_id = $user->id;
            $hostname->type = "incentivadora";
            $hostname = app(HostnameRepository::class)->create($hostname);
            app(HostnameRepository::class)->attach($hostname, $website);

            return back()->with('success', 'Empresa Incentivadora Creada Correctamente');
        }catch (\Exception $exception){
            DB::rollBack();
            dd($exception->getMessage());
        }
    }
}