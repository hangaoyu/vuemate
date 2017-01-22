<template>
    <div class="article">
        <div class="article-content">
            <div class="container" v-html="article.html">
            </div>
            <div class="container share-component">
            </div>
        </div>
    </div>
</template>

<style scoped>
    .article {
        display: inline-block;
        width: 100%;
    }

    .article-header {
        width: 31%;

    }

    .article-content {
        margin-left: 30%;
    }
    /*.share-component{*/
        /*margin-left: 10%;*/
    /*}*/
</style>
<script>
    export default {
        data(){
            return {
                article: []
            };
        },
        mounted() {
            this.fetchArticle();
        },
        methods: {
            fetchArticle(){
                console.log('ccc');
                let url = '/markdown';
                this.$http.get(url).then(function (response) {
                    // 響應成功回調
                    console.log(response.data);
                    this.article = (response.data);
                }, function (response) {
                    console.log('bbb');
                    console.log(response);
                    // 響應錯誤回調
                });
            }
        }
    }
</script>
