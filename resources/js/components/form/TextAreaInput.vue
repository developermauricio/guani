<template>
    <div class="mb-6 pt-3 rounded bg-gray-200">
        <div class="form-group">
            <label class="d-block" :for="name">{{ label }}</label>

            <textarea
                class="form-control"
                :id="name"
                :value="model"
                :rows="rows">
            </textarea>

            <div v-if="$store.state.form.form_errors[name]" class="invalid-feedback">
                {{ $store.state.form.form_errors[name] }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TextAreaInput",
        props: ["name", "model", "label", "rows"]
    }
</script>
