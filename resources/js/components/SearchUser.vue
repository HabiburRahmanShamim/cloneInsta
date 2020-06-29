<template>
    <div class="container">
        <input class="form-control w-100 card-body" type="text" placeholder="Search"
               aria-label="Search" v-model="text" v-on:keyup="SearchUser">
        <div class="collapse card-footer w-100 mt-5" style="max-height: 200px; overflow: auto" v-if="matches.length">
            <p v-for="user in matches">
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
                        console.log(this.matches);
                    })
            }
        },
    }
</script>
