<template>
    <div class="image-upload">
        <label for="formFile" class="form-label">Image</label><br>
        
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <div class="img-box">
                    <img v-if="url" :src="url" class="rounded img-thumbnail">
                </div>
            </div>
        </div>
        <input class="form-control" type="file" name="image" id="formFile" @change="onFileChange">
    </div>
</template>

<script>
    export default {
        props: {
          defaultUrl: {
            default: 'https://via.placeholder.com/640x480',
            type: String
          }
        },
        data() {
            return {
                url: this.defaultUrl,
            }
        },
        methods: {
            onFileChange(e) {
                const file = e.target.files[0];
                this.url = URL.createObjectURL(file);
            }
        }
    }
</script>
