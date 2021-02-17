<template>
    <div class="form-group">
        <label class="form-label" :for="name">{{ label }}</label>

        <input
            :value="model"
            :id="name"
            type="text"
            class="form-control"
            :placeholder="placeholder"
            aria-label="Name"
            aria-describedby="basic-addon-name">

        <!-- <div class="valid-feedback">Looks good!</div> -->

        <!-- <div v-if="$store.state.form.form_errors[name]" class="invalid-feedback">
            {{ $store.state.form.form_errors[name] }}
        </div> -->
    </div>
</template>

<script>
    export default {
        name: "TextInput",
        //props: [ "name", "model", "label", "placeholder" ],
        data() {
            return {
                validator: null,
                validate: true,
                valorActual: ""
            }
        },
        props: {
            label: String,
            id: String,
            pattern: String,
            errorMsg: String,
            requiredMsg: String,
            required: Boolean,
            modelo: [String, Number],
            clases: String,
            textArea: Boolean
        },
        methods: {
            change(val) {
                this.validate = this.validator.test(val);
                this.valorActual = val;
                if (!this.required && val.trim().length < 1) {
                    this.validate = true;
                }
                this.$emit("changeinput", val);
            },
            changeFocus() {
                this.validate = this.validator.test(this.valorActual);
                if (!this.required && val.trim().length < 1) {
                    this.validate = true;
                }
            }
        },
        mounted() {
            console.log('Component Text Input.')

            eventBus.$on( 'validateForm', () => { this.changeFocus(); });

            switch (this.pattern) {
                case "num":
                    this.validator = RegExp("^[0-9 ]+[0-9]+$");
                    break;
                case "alf":
                    this.validator = RegExp(
                    "^[ a-zA-ZÀ-ÿ\u00f1\u00d1]+(s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$"
                    );
                    break;
                case "email":
                    this.validator = RegExp(
                    "^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$"
                    );
                    break;
                case "all":
                    this.validator = RegExp(".+");
                    break;
                case "url":
                    this.validator = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/;
                    break;
                default:
                    this.validator = RegExp(this.pattern);
            }
        }
    }
</script>
