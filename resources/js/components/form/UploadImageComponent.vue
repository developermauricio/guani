<template>
  <vs-upload ref="upload" :text="text"  :limit="limit" :data="data" :show-upload-button="show-upload-button" :multiple="multiple" @change="addImage($event)" />
</template>

<script>
export default {
    props: {
      text: {
        type: String,
        default: "Subir Imagen"
      },
      limit: {
        type: Number,
        default: 1
      },
      data: {
        type: Object
      },
      multiple: {
        type: Boolean,
        default: false
      },
      'show-upload-button': {
          type: Boolean,
          default: false
      }
    },
    methods: {
        addImage( data ) {
            const input = this.$refs.upload;

            setTimeout(() => {
                this.$emit('changeImage', {
                    file: input.filesx[input.filesx.length-1],
                    src: input.srcs[input.filesx.length-1].src
                });
            }, 500);
        }
    }
}
</script>
<style>
.con-img-upload{
    width: fit-content;
}
</style>
