<div class="pet_head">
    <header data-am-widget="header"
            class="am-header am-header-default pet_head_block">
        <div class="am-header-left am-header-nav ">
            <a href="javascript:history.go(-1)" class="iconfont pet_head_jt_ico">&#xe601;</a>
        </div>
        @if(\Route::currentRouteName() == 'article-detail')
        <h1 class="am-header-title pet_article_user">
            <div class="pet_article_user_info_tab">
                <div class="pet_article_user_info_tab_font">
                    <div class="pet_article_user_info_tab_font_triangle"></div>
                    <div class="pet_article_user_info_tab_font_center"><i>文章</i><span>16篇</span></div>
                    <!--         <div class="pet_article_user_info_tab_font_center"><i>涂鸦</i><span>89张</span></div>
                            <div class="pet_article_user_info_tab_font_center_line"></div>
                            <div class="pet_article_user_info_tab_font_center"><a href="###">查看全部资料</a></div> -->
                </div>
            </div>
            <span class="pet_article_user_ico"><img src="/img/a1.png" alt="" class=""></span>
            <span class="pet_article_user_name">EGOIST</span>
        </h1>
            @elseif(\Route::currentRouteName() == 'user-center')
            <div class="pet_news_list_tag_name">小萌萌</div>
        @endif
        <div class="am-header-right am-header-nav">
            <a href="javascript:;" class="iconfont pet_head_gd_ico">&#xe600;</a>
        </div>
    </header>
</div>