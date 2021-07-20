<template>
    <div>
        <button
            v-if="!like"
            style="border-radius: 12px; height: 30px; width: 100px;"
            @click="likeMethod()"
            :disabled="saving"
            alt="Submit"
            width="24"
            height="24"
        >
            Beğen
        </button>

        <button
            v-else
            style="border-radius: 12px; height: 30px; width: 100px;"
            @click="dislikeMethod()"
            :disabled="saving"
            alt="Submit"
            width="24"
            height="24"
        >
            Vazgeç
        </button>
    </div>
</template>
<script>
export default {
    name: "LikeToggle",
    props: ["tweetId", "isLike"],
    mounted() {
        if (this.isLike != undefined) {
            this.like = this.isLike;
        }
    },
    data: function() {
        return {
            saving: false,
            like: false
        };
    },
    methods: {
        likeMethod() {
            this.saving = true;
            axios
                .get("/tweets/" + this.tweetId + "/like")
                .then(response => {
                    this.like = true;
                    this.saving = false;
                })
                .catch(error => {
                    this.saving = false;
                });
        },

        dislikeMethod() {
            this.saving = true;
            axios
                .get("/tweets/" + this.tweetId + "/dislike")
                .then(response => {
                    this.like = false;
                    this.saving = false;
                })
                .catch(error => {
                    this.saving = false;
                });
        }
    }
};
</script>
