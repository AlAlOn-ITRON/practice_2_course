<template>
    <div class="flex-column justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Название статьи</th>
                        <th scope="col">Дата</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="article in table">
                        <td scope="row">{{article.id}}</td>
                        <td><a :href="'articles/' + article.id">{{article.name}}</a></td>
                        <td>{{ article.created_at }}</td>
                    </tr>
                </tbody>
            </table>
            <button id="add-more" class="btn button-primary bg-primary" @click="add">Показать еще</button>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                tmp: []
            }
        },
        props: [
            'table',
        ],
        mounted() {
            this.update();
        },
        methods: {
            update: function() {
                console.log(this.table);
            },
            add: function() {
                axios.get('/add').then((response) => {
                    this.table = response.data;
                });
                //console.log(this.tmp);
            }
        }
    }
</script>
