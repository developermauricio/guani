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
                            title="Datos para crear empresa incentivadora"
                            subtitle="Por favor diligencie todos los datos"
                            back-button-text="Atrás"
                            next-button-text="Siguiente"
                            finish-button-text="Guardar Empresa"
                            @on-change="cambioPagina"
                            @on-complete="onComplete">

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
                                                label="Dirección"
                                                id="txtAddres"
                                                pattern="all"
                                                errorMsg="Ingrese una dirección valida"
                                                requiredMsg="La dirección es requerida"
                                                :required="true"
                                                :modelo.sync="user.address"
                                                :msgServer.sync="errors.address" />
                                        </div>
                                    </div>
                                </section>
                            </tab-content>

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
                                    </div>
                                </section>
                            </tab-content>

                            <tab-content title="Confirmar">
                                <section style="width: 100%" v-if="currentTab===2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Datos del Representante</h3>
                                            <p>
                                                <strong>Tipo de Documento:</strong> {{ user.type_document.name }}
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
                                        </div>

                                        <div class="col-md-6">
                                            <h3>Datos de la Empresa</h3>
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
                },
                company: {
                    name: '',
                    fqdn: '',
                    nit: '',
                    email: '',
                    phone: '',
                    address: '',
                    logo: null,
                },
                documentType: [
                    { id: 1, name: "Cedula ciudadania" },
                    { id: 2, name: "Cedula Extrangeria" }
                ],
            }
        },
        methods: {
            validarTab() {
                eventBus.$emit("validarFormulario");
                setTimeout(() => {
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
            onComplete: function(){
                alert('Todo Bien listo para guardar...');
            },
            changeImage( data ) {
                this.company.logo = data.file;
                this.preview = data.src;
            },

            /************************************************
             * METODOS PARA CUNSULTAR INFORMACION DE LA DB
            *************************************************/
            /* getTypeDocumentIdentification() {
                axios.get("/api-web/company/type-document-user")
                .then( result => {
                    this.documentType = result.data;
                })
                .catch(error => {
                    this.$toast.error({
                        title: "Atención",
                        message: "Algo ha salido mal " + error,
                        showDuration: 1000,
                        hideDuration: 4000
                    });
                });
            } */
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
