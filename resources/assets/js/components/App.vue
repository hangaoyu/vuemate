<template>
    <div id="app">
        <blog-header class="article-header"></blog-header>
        <router-view transition="fade" transition-mode="out-in"></router-view>
    </div>
</template>

<style>
    .fade-transition {
        transition: opacity 0.2s ease;
    }
    .fade-enter, .fade-leave {
        opacity: 0;
    }
</style>
<script>
    export default {
        data(){
            return {

                items: []

            };
        },
        mounted() {

        },
        methods: {}
    }
</script>
