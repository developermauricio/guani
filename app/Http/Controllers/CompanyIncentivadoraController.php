<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyType;
use App\Manager;
use App\Position;
use App\User;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Repositories\HostnameRepository;
use Hyn\Tenancy\Repositories\WebsiteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyIncentivadoraController extends Controller
{
    public function index(){
        return view('guani.emincentivadora.createemincentivadora');
    }

    public function storeCompanyIncentivadora( Request $request ){
        $newUser = json_decode( $request->user );
        $newCompany = json_decode( $request->company );
        $newCompany->fqdn = str_replace(' ', '', $newCompany->fqdn);

        try {
            //DB::beginTransaction();

            $user = new User;
            $user->documentype_id = $newUser->type_document->id;
            $user->document = $newUser->identification;
            $user->name = $newUser->name;
            $user->last_name = $newUser->lastName;
            $user->email = $newUser->email;
            $user->phone = $newUser->phone;
            $user->address = $newUser->address;
            $user->fqdn = $newCompany->fqdn;
            $user->state = User::ACTIVE;
            $user->companytype_id = CompanyType::INCENTIVADORA;
            $user->slug = Str::slug( $newUser->name . '-' . $newUser->lastName . '-' . Str::random(10), '-' );
            $user->picture = '/images/user-profile.png';
            $user->city_id = $newUser->city->id;
            $user->position_id = Position::ADMINISTRADOR;
            $user->password = bcrypt("password");
            $user->save();

            $manager = new Manager;
            $manager->position = $newUser->position;
            $manager->user_id = $user->id;
            $manager->save();

            $path = '/images/company-logo.jpg';
            if ( $request->hasFile('logo') ) $path = '/storage/' . $request->file( 'logo' )->store( 'companies' );

            $company = new Company;
            $company->nit = $newCompany->nit;
            $company->name = $newCompany->name;
            $company->email = $newCompany->email;
            $company->phone = $newCompany->phone;
            $company->address = $newCompany->address;
            $company->slug = Str::slug( $newCompany->name . '-' . Str::random(10), '-' );
            $company->companytype_id = CompanyType::INCENTIVADORA;
            $company->manager_id = $manager->id;
            $company->picture = $path;
            $company->categorycompany_id = $newCompany->categoryCompany->id;
            $company->user_id = auth()->user()->id;
            $company->save();

            Config::set( 'tenancy.db.tenant-migrations-path', database_path('migrations/incentivadora') );
            $fqdn = sprintf('%s.%s', $newCompany->fqdn, 'guani.test');

            $website = new Website;
            $website->uuid = $newCompany->fqdn;
            $website->type = Website::INCENTIVADORA;
            $website->logo = $path;
            app(WebsiteRepository::class)->create($website);

            $hostname = new Hostname;
            $hostname->user_id = $user->id;
            $hostname->fqdn = $fqdn;
            $hostname->type = Website::INCENTIVADORA;
            $hostname = app(HostnameRepository::class)->create($hostname);
            app(HostnameRepository::class)->attach($hostname, $website);

            //DB::commit();

            return response()->json( $company );
        }catch (\Exception $exception){
            //DB::rollBack();
            dd($exception->getMessage());
        }
    }

    public function allIndex(){
        return view('guani.emincentivadora.allemincentivadora');
    }
}
