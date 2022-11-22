<template>
    <div class="col-md-3 mt-3">
        <div class="card" @click="clicked" style="cursor: pointer">
            <div class="img-box">
                <img :src="datum.image" :alt="datum.title" class="card-img-top img-fluid">
            </div>
            <div class="card-body">
                <h4 class="card-title">{{datum.title}}</h4>
                <p class="card-text">
                    Tags
                    <ul class="list-inline" >
                        <li class="list-inline-item" v-for="tag in datum.tags">
                            <a class="badge bg-secondary" :href="`?tag=${tag}`">{{tag}}</a>
                        </li>
                    </ul>
                </p>
                <p class="card-text">
                    Authors
                    <ul class="list-inline" >
                        <li class="list-inline-item" v-for="author in datum.authors">
                            <a class="badge bg-secondary" :href="`?author=${author}`">{{author}}</a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['datum'],
        methods: {
            clicked: function (event) {
                window.open(`/arts/${this.datum.id}`, '_self')
            }
        },
    }
</script>