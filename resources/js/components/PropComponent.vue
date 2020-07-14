<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Example Component</div>

                <div class="card-body">
                    <ul>
                        <li>id: {{ urldata.id }}</li>
                        <li>name: {{ urldata.name }}</li>
                    </ul>
                    {{ urldata.text }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'urldata'
        ],
        mounted() {
            this.update();
        },
        methods: {
            update: function() {
                console.log(this.urldata);
            }
        }
    }
</script>
