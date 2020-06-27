<template>
    <div class="container">
        <button class="btn btn-primary ml-4" @click="FollowUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {

        props: ['userId', 'follows'], //user id and follow status from follow button

        mounted() {
            console.log('Component mounted.')
        },

        // When Follow button will be clicked
        // This function will return whether current follows status is true or false in a status variable
        //Which variable will use to set the text inside button
        data:function (){
            return {
                status : this.follows,
            }
        },

        methods :{
            FollowUser: function () {
                axios.post('/follow/'+this.userId)
                    .then(response => {
                        this.status = !this.status;
                        console.log(response.data);
                    });
            }
        },
        computed :{
            buttonText(){
                return (this.status) ? "Unfollow" : "Follow";
            }

        },
    }
</script>
