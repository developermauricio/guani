<template>
    <button class="btn btn-primary waves-effect waves-float waves-light float-right"
            type="submit">
            {{ text }}
    </button>
</template>

<script>
    export default {
        name: "SubmitButton",
        props: [ "text", "class" ]
    }
</script>
