<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="width-limit">
        <!-- 左上方 Logo -->
        <a class="logo" href="/"><img src="http://cdn-qn0.jianshu.io/assets/web/logo-58fd04f6f0de908401aa561cda6a0688.png" alt="Logo"></a>
        <!-- 右上角 -->
        <!-- 登录显示写文章 -->
        <a class="btn write-btn" target="_blank" href="/writer#/">
            <i class="iconfont ic-write"></i>写文章
        </a>
        <!-- 如果用户登录，显示下拉菜单 -->
        <div class="user">
            <div data-hover="dropdown">
                <a class="avatar" href="/u/de547fe7dad4"><img src="http://upload.jianshu.io/users/upload_avatars/4302516/0b58c4e42c8a?imageMogr/thumbnail/120x120/quality/100" alt="100"></a>
            </div>
            <ul class="dropdown-menu">
                <li>
                    <a href="/u/de547fe7dad4">
                        <i class="iconfont ic-navigation-profile"></i><span>我的主页</span>
                    </a>          </li>
                <li>
                    <!-- TODO bookmarks_path -->
                    <a href="/bookmarks">
                        <i class="iconfont ic-navigation-mark"></i><span>收藏的文章</span>
                    </a>          </li>
                <li>
                    <a href="/users/de547fe7dad4/liked_notes">
                        <i class="iconfont ic-navigation-like"></i><span>喜欢的文章</span>
                    </a>          </li>
                <li>
                    <a href="/wallet">
                        <i class="iconfont ic-navigation-wallet"></i><span>我的钱包</span>
                    </a>          </li>
                <li>
                    <a href="/settings">
                        <i class="iconfont ic-navigation-settings"></i><span>设置</span>
                    </a>          </li>
                <li>
                    <a href="/contact">
                        <i class="iconfont ic-navigation-feedback"></i><span>帮助与反馈</span>
                    </a>          </li>
                <li>
                    <a rel="nofollow" data-method="delete" href="/sign_out">
                        <i class="iconfont ic-navigation-signout"></i><span>退出</span>
                    </a>          </li>
            </ul>
        </div>

        <div class="style-mode" id="view-mode-ctrl"> <a class="style-mode-btn"><i class="iconfont ic-navigation-mode"></i></a> <div class="popover-modal" style="left: 0px; display: none;"> <div class="meta"> <i class="iconfont ic-navigation-night"></i><span>夜间模式</span> </div> <div class="switch day-night-group"> <a class="switch-btn">开</a> <a class="switch-btn active">关</a> </div> <hr> <div class="switch font-family-group"> <a class="switch-btn font-song">宋体</a> <a class="switch-btn font-hei active">黑体</a> </div> <div class="switch"> <a class="switch-btn active">简</a> <a class="switch-btn">繁</a> </div> </div> </div>
        <div class="container">
            <div class="row">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/">
                            <span class="menu-text">发现</span><i class="iconfont ic-navigation-discover menu-icon"></i>
                        </a>            </li>
                    <li class="">
                        <a href="/subscriptions">
                            <span class="menu-text">关注</span><i class="iconfont ic-navigation-follow menu-icon"></i>
                        </a>            </li>
                    <li class="notification " data-n-cat="total">
                        <a class="notification-btn" data-hover="dropdown" href="/notifications"> <span class="menu-text">消息</span> <i class="iconfont ic-navigation-notification menu-icon"></i>   </a> <ul class="dropdown-menu"> <li> <a href="/notifications#!/comments"> <i class="iconfont ic-comments"></i> <span>评论</span>  </a> </li><li> <a href="/notifications#!/chats"> <i class="iconfont ic-chats"></i> <span>简信</span>  </a> </li><li> <a href="/notifications#!/requests"> <i class="iconfont ic-requests"></i> <span>投稿请求</span>  </a> </li><li> <a href="/notifications#!/likes"> <i class="iconfont ic-likes"></i> <span>喜欢和赞</span>  </a> </li><li> <a href="/notifications#!/follows"> <i class="iconfont ic-follows"></i> <span>关注</span>  </a> </li><li> <a href="/notifications#!/money"> <i class="iconfont ic-money"></i> <span>打赏</span>  </a> </li><li> <a href="/notifications#!/others"> <i class="iconfont ic-others"></i> <span>其他消息</span>  </a> </li> </ul>
                    </li>
                    <li class="">
                        <a class="app-download-btn" href="/apps"><span class="menu-text">下载App</span><i class="iconfont ic-navigation-download menu-icon"></i></a>
                    </li>
                    <li class="search">
                        <form target="_blank" action="/search" accept-charset="UTF-8" method="get"><input name="utf8" value="✓" type="hidden">
                            <input name="q" id="q" value="" placeholder="搜索" class="search-input" type="text">
                            <a class="search-btn" href="javascript:void(null)"><i class="iconfont ic-search"></i></a>
                            <!-- <div id="navbar-trending-search"></div> -->
                        </form>          </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
