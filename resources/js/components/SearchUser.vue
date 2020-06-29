<template>
    <div class="row col-6">
        <input class="form-control h-100 w-100 position-relative" type="text" placeholder="Search"
               aria-label="Search" v-model="text" v-on:keyup="SearchUser">
        <div class="w-100 position-absolute rounded-top" style="background: white; top: 40px; max-height: 200px; overflow: auto; z-index: 1000" v-if="matches.length">
            <p class="" v-for="user in matches">
                <img :src="'/storage/' + user.profile.image" style="max-width: 40px;" class="rounded-circle "/>
                <a :href="'/profile/' + user.id"><span class="pl-2 font-weight-bold text-dark">{{  user.username }}</span></a>
            </p>
        </div>
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
                matches : [],
            }
        },

        methods :{
            SearchUser: function () {
                axios.post('/search/'+this.text)
                    .then(response => {
                        this.matches = response.data;
                        //console.log(this.matches);
                    })
            }
        },
    }
</script>
