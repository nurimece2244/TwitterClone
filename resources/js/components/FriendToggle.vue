<template>

    <div>
<button v-if="!friend" class="btn btn-primary" @click="addFriend()" :disabled="saving">Takip Et</button>

<button v-else class="btn btn-default" @click="removeFriend()" :disabled="saving">Takibi Bırak</button>
    </div>

</template>
<script>

    export default {

        name : "FriendToggle",
        props : ['userId', 'isFriend'],
        mounted() {

            if(this.isFriend != undefined)
            {
                this.friend = this.isFriend;
            }
        },
        data: function () {
            return {
                saving: false,
                friend: false,
            }
        },
        methods:
        {
            addFriend()
            {
                
                this.saving = true;
                axios.get('/user/' +  this.userId +  '/addFriend')
                .then(response => {
                    this.friend=true;
                    this.saving = false;
                })
                .catch(error => {
                    this.saving =false; 
                })

            },
            removeFriend()
            {
                this.saving = true;
                axios.get('/user/' +  this.userId +  '/removeFriend')
                .then(response => {
                    this.friend=false;
                    this.saving = false;
                })
                .catch(error => {
                    this.saving =false; 
                })

            }

        }


    }
</script>


