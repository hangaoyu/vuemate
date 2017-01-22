<template >
    <div class="content-wrapper">
        <div class="content-wrapper__inner">
            <div class="main-post-list">
                <ol class="post-list">
                    <li>
                        <h2 class="post-list__post-title post-title"><a href="/2016/12/concurrency/"
                                                                        title="访问 Swift 并行编程现状和展望 - async/await 和参与者模式">Swift
                            并行编程现状和展望 - async/await 和参与者模式</a></h2>
                        <p class="excerpt">这篇文章不是针对当前版本 Swift 3 的，而是对预计于 2018 年发布的 Swift 5
                            的一些特性的猜想。如果两年后我还记得这篇文章，可能会回来更新一波。在此之前，请当作一篇对现代语言并行编程特性的不太严谨科普文来看待。CPU
                            速度已经很多年没有大的突破了，硬件行业更多地将重点放在多核心技术上，而与之对应，软件中并行编程的概念也越来越重要。如何利用多核心 CPU，以及拥有密集计算单元的
                            GPU，来进行快速的处理和计算，是很多开发者十分感兴趣的事情。在今年年初 Swift 4 的展望...…</p>
                        <div class="post-list__meta">
                            <time datetime="2016-12-20 12:53:11 +0900" class="post-list__meta--date date">2016-12-20
                            </time>
                            • <span class="post-list__meta--tags tags">能工巧匠集</span><router-link to="/article">继续阅读</router-link>
                        </div>
                        <hr class="post-list__divider">
                    </li>
                </ol>
                <hr class="post-list__divider "/>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                items: []
            };
        },
        methods: {
        }
    }
</script>
