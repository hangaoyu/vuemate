<template>
    <header class="panel-cover" id="panel-cover">
        <div class="panel-main">
            <div class="panel-main__inner panel-inverted">
                <div class="panel-main__content">

                    <a href="/#blog" title="前往 OneV's Den 的主页" class="blog-button"><img
                            src="/images/avatar.png" width="80" alt="OneV's Den logo"
                            class="panel-cover__logo logo"/></a>
                    <h1 class="panel-cover__title panel-title"><a href="/#blog" title="link to homepage for OneV's Den"
                                                                  class="blog-button">OneV's Den</a></h1>


                    <span class="panel-cover__subtitle panel-subtitle">上善若水，人淡如菊</span>

                    <hr class="panel-cover__divider"/>
                    <p class="panel-cover__description">嗨，我是王巍 (@onevcat)，一名来自中国的 iOS / Unity 开发者。现居日本，就职于
                        LINE。正在修行，探求创意之源。</p>
                    <hr class="panel-cover__divider panel-cover__divider--secondary"/>


                    <p class="panel-cover__description">ObjC 中国与 objc.io 合作最新作品<a href="https://objccn.io/products/"
                                                                                  target="_blank">《函数式 Swift》,《Core
                        Data》及《Swift 进阶》已经发布</a>，<a
                            href="https://www.boxueio.com/register/ec84c3dd183b0acc820d5eae474d499d">泊学网正在开展订阅赠书活动，也欢迎前往了解</a>
                    </p>


                    <div class="navigation-wrapper">
                        <div>
                            <nav class="cover-navigation cover-navigation--primary">
                                <ul class="navigation">
                                    <li class="navigation__item"><a href="/#blog" title="访问博客"
                                                                    @click="showArticle"  class="blog-button">博客</a></li>

                                    <li class="navigation__item"><a href="http://project.onevcat.com" target="_blank"
                                                                    title="我的项目">项目</a></li>

                                    <li class="navigation__item"><a href="http://about.onevcat.com/" target="_blank"
                                                                    title="了解更多关于我">关于</a></li>

                                    <li class="navigation__item"><a href="//store.objccn.io/subscribe" target="_blank"
                                                                    title="邮件订阅本站">订阅</a></li>

                                </ul>
                            </nav>
                        </div>

                        <div>
                            <nav class="cover-navigation navigation--social">
                                <ul class="navigation">


                                    <!-- Weibo -->
                                    <li class="navigation__item">
                                        <a href="http://weibo.com/onevcat" title="@onevcat 的微博" target="_blank">
                                            <i class='social fa fa-weibo'></i>
                                            <span class="label">Weibo</span>
                                        </a>
                                    </li>


                                    <!-- Github -->
                                    <li class="navigation__item">
                                        <a href="https://github.com/onevcat" title="@onevcat 的 Github" target="_blank">
                                            <i class='social fa fa-github'></i>
                                            <span class="label">Github</span>
                                        </a>
                                    </li>


                                    <!-- Twitter -->
                                    <li class="navigation__item">
                                        <a href="http://twitter.com/onevcat" title="@onevcat" target="_blank">
                                            <i class='social fa fa-twitter'></i>
                                            <span class="label">Twitter</span>
                                        </a>
                                    </li>


                                    <!-- Google Plus -->
                                    <li class="navigation__item">
                                        <a href="https://plus.google.com/107108267983477358170" rel="author"
                                           title="Google+" target="_blank">
                                            <i class='social fa fa-google-plus-square'></i>
                                            <span class="label">Google Plus</span>
                                        </a>
                                    </li>


                                    <!-- RSS -->
                                    <li class="navigation__item">
                                        <a href="/feed.xml" rel="author" title="RSS" target="_blank">
                                            <i class='social fa fa-rss'></i>
                                            <span class="label">RSS</span>
                                        </a>
                                    </li>


                                    <!-- Email -->
                                    <li class="navigation__item">
                                        <a href="mailto:onev@onevcat.com" title="Contact me">
                                            <i class='social fa fa-envelope'></i>
                                            <span class="label">Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-cover--overlay cover-disabled"></div>

        </div>
    </header>
</template>

<script>
    export default {
        data(){
            return {
                items: []
            };
        },
        methods: {
            showArticle(){
               var panel = document.getElementById('panel-cover');
                panel.style.width = 30 +'%';
            }
        }
    }
</script>
