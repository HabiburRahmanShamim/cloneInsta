<template>
    <div class="container">
        <form class="form-inline">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                   aria-label="Search" v-model="text" @keyup="SearchUser">
        </form>
    </div>
</template>

<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return{
                text : '',
            }
        },

        methods :{
            SearchUser: function () {
                axios.post('/search/'+this.text)
                    .then(response => {
                        console.log(response.data);
                    })
            }
        },
    }
</script>
