<template>
    <div class="row pt-2">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="body">
                    <form method="post" class="pt-2 pr-4 pl-4 pb-4">
                        <form-wizard
                            color="#F15F7E"
                            error-color="#ff4949"
                            ref="wizard"
                            shape="tab"
                            title="Datos para crear empresa redentora"
                            subtitle="Por favor diligencie todos los datos"
                            back-button-text="Atrás"
                            next-button-text="Siguiente"
                            finish-button-text="Guardar Empresa"
                            @on-change="cambioPagina"
                            @on-complete="onComplete">

                            <!--=====================================
                                TAB: DATOS DEL REPRESENTANTE
                            ======================================-->
                            <tab-content :beforeChange="validarTab" title="Representante">
                                <section style="width: 100%;">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Tipo de Documento"
                                                id="txtTypeDocument"
                                                errorMsg
                                                requiredMsg="Seleccionar Tipo de Documento"
                                                :required="true"
                                                :modelo.sync="user.type_document"
                                                :msgServer.sync="errors.type_document"
                                                type="multiselect"
                                                :multiselect="{
                                                    options: documentType,
                                                    selectLabel:'Seleccionar',
                                                    selectedLabel:'Seleccionado',
                                                    deselectLabel:'Remover',
                                                    placeholder:'Selecciona Tipo de Documento',
                                                    'track-by':'id',
                                                    label: 'name',
                                                    'custom-label': documentType => documentType.name
                                                }" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Número de Identificación"
                                                id="txtNumIdentification"
                                                pattern="num"
                                                errorMsg="Ingrese un número de identificación valido"
                                                requiredMsg="El número de identificación es requerido"
                                                :required="true"
                                                :modelo.sync="user.identification"
                                                :msgServer.sync="errors.identification" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Nombres"
                                                id="txtName"
                                                pattern="alf"
                                                errorMsg="Ingrese un nombre valido"
                                                requiredMsg="El nombre es requerido"
                                                :required="true"
                                                :modelo.sync="user.name"
                                                :msgServer.sync="errors.name" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Apellidos"
                                                id="txtLastName"
                                                pattern="alf"
                                                errorMsg="Ingrese un apellido valido"
                                                requiredMsg="El apellido es requerido"
                                                :required="true"
                                                :modelo.sync="user.lastName"
                                                :msgServer.sync="errors.lastName" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Email"
                                                id="txtEmail"
                                                pattern="email"
                                                errorMsg="Ingrese un email valido"
                                                requiredMsg="El email es requerido"
                                                :required="true"
                                                @keyup="ValidationEmailUser( user.email )"
                                                :modelo.sync="user.email"
                                                :msgServer.sync="errors.email" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Teléfono"
                                                id="txtPhone"
                                                pattern="num"
                                                errorMsg="Ingrese un teléfono valido"
                                                requiredMsg="El teléfono es requerido"
                                                :required="true"
                                                :modelo.sync="user.phone"
                                                :msgServer.sync="errors.phone" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="País"
                                                pattern="all"
                                                requiredMsg="El país es requerido"
                                                :required="true"
                                                :modelo.sync="user.country"
                                                @updatedValue="getListCitiesForCountryCode( user.country.alpha2Code )"
                                                type="multiselect"
                                                :multiselect="{
                                                    options : listCountries,
                                                    'custom-label': showCustomLabelCountry,
                                                    'deselectLabel': 'Remover',
                                                    'selectedLabel': 'Seleccionado',
                                                    'placeholder' : 'Seleccione el país',
                                                    'track-by':'id',
                                                }" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Ciudad"
                                                pattern="all"
                                                requiredMsg="La ciudad es requerida"
                                                :required="true"
                                                :modelo.sync="user.city"
                                                type="multiselect"
                                                :multiselect="{
                                                    'disabled': !user.country,
                                                    options : listCities,
                                                    'custom-label': showCustomLabelCity,
                                                    'deselectLabel': 'Remover',
                                                    'selectedLabel': 'Seleccionado',
                                                    'placeholder' : 'Seleccione la ciudad',
                                                }" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Dirección"
                                                id="txtAddres"
                                                pattern="all"
                                                errorMsg="Ingrese una dirección valida"
                                                requiredMsg="La dirección es requerida"
                                                :required="true"
                                                :modelo.sync="user.address"
                                                :msgServer.sync="errors.address" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Cargo en la empresa"
                                                id="txtPosition"
                                                pattern="all"
                                                errorMsg="Ingrese un cargo valido"
                                                requiredMsg="El cargo en la empresa es requerido"
                                                :required="true"
                                                :modelo.sync="user.position"
                                                :msgServer.sync="errors.position" />
                                        </div>
                                    </div>
                                </section>
                            </tab-content>

                            <!--=====================================
                                TAB: DATOS DE LA EMPRESA
                            ======================================-->
                            <tab-content :beforeChange="validarTab" title="Empresa">
                                <section style="width: 100%" v-if="currentTab===1">
                                     <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Nombre"
                                                id="txtNameCompany"
                                                pattern="all"
                                                errorMsg="Ingrese un nombre valido"
                                                requiredMsg="El nombre es requerido"
                                                :required="true"
                                                :modelo.sync="company.name"
                                                :msgServer.sync="errors.name" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Dominio"
                                                id="txtDomain"
                                                pattern="all"
                                                errorMsg="Ingrese un dominio valido"
                                                requiredMsg="El dominio es requerido"
                                                @keyup="ValidationDomainCompany( company.fqdn )"
                                                :required="true"
                                                :modelo.sync="company.fqdn"
                                                :msgServer.sync="errors.fqdn" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Nit"
                                                id="txtNit"
                                                pattern="alf_num"
                                                errorMsg="Ingrese un nit valido"
                                                requiredMsg="El nit es requerido"
                                                :required="true"
                                                :modelo.sync="company.nit"
                                                :msgServer.sync="errors.nit" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Email"
                                                id="txtEmailCompany"
                                                pattern="email"
                                                errorMsg="Ingrese un email valido"
                                                requiredMsg="El email es requerido"
                                                @keyup="ValidationEmailCompany( company.email )"
                                                :required="false"
                                                :modelo.sync="company.email"
                                                :msgServer.sync="errors.email" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Teléfono"
                                                id="txtPhoneCompany"
                                                pattern="num"
                                                errorMsg="Ingrese un teléfono valido"
                                                requiredMsg="El teléfono es requerido"
                                                :required="true"
                                                :modelo.sync="company.phone"
                                                :msgServer.sync="errors.phone" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Dirección"
                                                id="txtAddres"
                                                pattern="all"
                                                errorMsg="Ingrese una dirección valida"
                                                requiredMsg="La dirección es requerida"
                                                :required="true"
                                                :modelo.sync="company.address"
                                                :msgServer.sync="errors.address" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Logo</label>
                                            <upload-image @changeImage="changeImage($event)"></upload-image>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input-form
                                                label="Categoría de la empresa"
                                                pattern="all"
                                                requiredMsg="La categoría es requerida"
                                                :required="true"
                                                :modelo.sync="company.categoryCompany"
                                                type="multiselect"
                                                :multiselect="{
                                                    options : listCategoryCompanies,
                                                    'custom-label': showCustomLabelCategoryCompanies,
                                                    'deselectLabel': 'Remover',
                                                    'selectedLabel': 'Seleccionado',
                                                    'placeholder' : 'Seleccione la categoría',
                                                    'track-by':'id',
                                                }" />
                                        </div>
                                    </div>
                                </section>
                            </tab-content>

                            <!--=====================================
                                TAB: DATOS DE  CONFIRMACIÓN
                            ======================================-->
                            <tab-content title="Confirmar">
                                <section style="width: 100%" v-if="currentTab===2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Datos del Representante</h3>
                                            <div class="card mt-3">
                                                <p>
                                                    <strong>Tipo de Documento</strong> {{ user.type_document.name }}
                                                </p>
                                                <p>
                                                    <strong>identificación:</strong> {{ user.identification }}
                                                </p>
                                                <p>
                                                    <strong>Nombre:</strong> {{ user.name }}
                                                </p>
                                                <p>
                                                    <strong>Apellido:</strong> {{ user.lastName }}
                                                </p>
                                                <p>
                                                    <strong>Correo:</strong> {{ user.email }}
                                                </p>
                                                <p>
                                                    <strong>Teléfono:</strong> {{ user.phone }}
                                                </p>
                                                <p>
                                                    <strong>Dirección:</strong> {{ user.address }}
                                                </p>
                                                <p>
                                                    <strong>País:</strong> {{ user.country ? user.country.name : 'Indefinido' }}
                                                </p>
                                                <p>
                                                    <strong>Ciudad:</strong> {{ user.city ? user.city.name : 'Indefinido' }}
                                                </p>
                                                <p>
                                                    <strong>Cargo:</strong> {{ user.position }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <h3>Datos de la Empresa</h3>
                                            <div class="card mt-3">
                                                <p>
                                                    <strong>Nit:</strong> {{ company.nit }}
                                                </p>
                                                <p>
                                                    <strong>Nombre:</strong> {{ company.name }}
                                                </p>
                                                <p>
                                                    <strong>Dominio:</strong> {{ company.fqdn }}
                                                </p>
                                                <p>
                                                    <strong>Correo:</strong> {{ company.email }}
                                                </p>
                                                <p>
                                                    <strong>Teléfono:</strong> {{ company.phone }}
                                                </p>
                                                <p>
                                                    <strong>Dirección:</strong> {{ company.address }}
                                                </p>
                                                <p>
                                                    <strong>Categoría:</strong> {{ company.categoryCompany.name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </tab-content>
                        </form-wizard>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Multiselect from "vue-multiselect";
    import Swal from "sweetalert2";

    export default {
        name: "WizardCreateCompany",

        components: {
            Multiselect
        },

        data() {
            return {
                currentTab: 0,
                errors: {},
                user: {
                    type_document: '',
                    identification: '',
                    name: '',
                    lastName: '',
                    email: '',
                    phone: '',
                    address: '',
                    country: '',
                    city: '',
                    position: '',
                },
                company: {
                    name: '',
                    fqdn: '',
                    nit: '',
                    email: '',
                    phone: '',
                    address: '',
                    categoryCompany: '',
                },
                logoCompany: null,
                documentType: [],
                listCountries: [],
                listCities: [],
                listCategoryCompanies: [],
            }
        },

        methods: {
            validarTab() {
                eventBus.$emit("validarFormulario");

                setTimeout( () => {
                    const validated = document.querySelectorAll(".is-invalid").length < 1;

                    if ( validated ) {
                        this.$refs.wizard.tabs[this.currentTab].validationError = null;
                        this.$refs.wizard.changeTab(this.currentTab, this.currentTab + 1);
                    }
                }, 200);

                return false;
            },
            cambioPagina(prevIndex, nextIndex) {
                this.currentTab = nextIndex;
            },
            changeImage( data ) {
                this.logoCompany = data.file;
                this.preview = data.src;
            },
            showCustomLabelCountry( country ) {
                return `${ country.name } (${ country.alpha2Code })`;
            },
            showCustomLabelCity( city ) {
                if ( city && city.name ) return city.canonical_name ? city.canonical_name : city.name;
                return "Seleccione una ciudad";
            },
            showCustomLabelCategoryCompanies( category ) {
                return category.name;
            },
            showAlertError( msg ) {
                this.$toast.error({
                    title: "Atención",
                    message: msg,
                    showDuration: 1000,
                    hideDuration: 4000
                });
            },
            showMessageConsole(msg = 'data: ', data) {
                console.log( msg, data)
            },

            /*===================================================
                METODOS PARA GUARDAR LA INFORMACION EN LA DB
            ===================================================*/
            onComplete: function(){
                eventBus.$emit('validarFormulario');

                setTimeout( () => {
                    if ( document.querySelectorAll(".form-control.is-invalid").length > 0 ) {
                        this.showAlertError( 'Todos los campos son requeridos.' );
                        return;
                    }

                    var data = new FormData();
                    let domain = this.company.fqdn;
                    this.company.fqdn = domain.toLowerCase();
                    console.log('fqdn: ', this.company),
                    data.append( "user", JSON.stringify( this.user ) );
                    data.append( "company", JSON.stringify( this.company ) );
                    data.append( "logo", this.logoCompany );

                    axios.post( "/company-redentora-store", data )
                        .then( (resp) => {
                            console.log('result: ', resp);
                            Swal.fire( "¡Empresa creada correctamente!", "", "success", {
                                confirmButtonText: "Aceptar",
                                confirmButtonColor: "#009BD9",
                                reverseButtons: true,
                                allowOutsideClick: false
                            }).then( resultOk => {
                                //window.location.href = "/redentoras/all-companies";
                                window.location.href = "/incentivadoras/all-companies";
                            });
                        }).catch( error => {
                            console.log('Error: ', error);
                        });
                });
            },

            /*==================================================
                METODOS PARA CUNSULTAR INFORMACION DE LA DB
            ==================================================*/
            getListTypeDocumentIdentification() {
                axios.get("/api/identification-types")
                .then( result => {
                    this.documentType = result.data;
                }).catch( error => {
                    this.showAlertError( 'Algo salio mal getListTypeDocumentIdentification: ' + error );
                });
            },
            getListCountries() {
                axios.get("/api/countries")
                .then( result => {
                    this.listCountries = result.data;
                }).catch( error => {
                    this.showAlertError( 'Algo salio mal getListCountries: ' + error );
                });
            },
            getListCitiesForCountryCode( country_code ) {
                this.user.city = '';
                this.listCities = [];

                if ( !country_code ) return;

                axios.get(`/api/list-cities?country_code=${ country_code }`)
                .then( result => {
                    this.listCities = result.data;
                }).catch( error => {
                    this.showAlertError( 'Algo salio mal getListCitiesForCountryCode: ' + error );
                });
            },
            getListCategoryCompanies() {
                axios.get("/api/category-companies")
                .then( result => {
                    this.listCategoryCompanies = result.data;
                }).catch( error => {
                    this.showAlertError( 'Algo salio mal getListCategoryCompanies: ' + error );
                });
            },

            /*=========================================
                METODOS PARA REALIZAR VALIDACIONES
            ==========================================*/
            ValidationEmailUser( email ) {
                if ( email === '' ) return;
                axios.get(`/api/validation-email-user?email=${ email }`)
                .then( result => {
                    if ( result.data ){
                        alert( `El email: ${ email } ya se encuentra registrado.` );
                        this.user.email = '';
                    }
                }).catch( error => {
                    this.showAlertError( 'Algo salio mal ValidationEmailUser: ' + error );
                });
            },
            ValidationEmailCompany( email ) {
                if ( email === '' ) return;
                axios.get(`/api/validation-email-company?email=${ email }`)
                .then( result => {
                    if ( result.data ){
                        alert( `El email: ${ email } ya se encuentra registrado.` );
                        this.company.email = '';
                    }
                }).catch( error => {
                    this.showAlertError( 'Algo salio mal ValidationEmailCompany: ' + error );
                });
            },
            ValidationDomainCompany( domain ) {
                if ( domain === '' ) return;
                axios.get(`/api/validation-domain-company?domain=${ domain }`)
                .then( result => {
                    if ( result.data ){
                        alert( `El Dominio: ${ domain } ya se encuentra registrado.` );
                        this.company.fqdn = '';
                    }
                }).catch( error => {
                    this.showAlertError( 'Algo salio mal ValidationDomainCompany: ' + error );
                });
            },
        },

        created() {
            this.getListCountries();
            this.getListTypeDocumentIdentification();
            this.getListCategoryCompanies();
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .vue-form-wizard .wizard-header {
        border-bottom: 1px dotted #d8d6de;
        margin-bottom: 0.5rem;
    }
    .multiselect__option--highlight {
        background: #172737 !important;
        outline: none !important;
        color: #fff;
    }
</style>
