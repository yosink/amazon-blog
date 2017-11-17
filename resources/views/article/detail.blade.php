@extends('layouts.main')

@section('title', $article->title)
@section('content')
    <div class="pet_content">
        <div class="pet_content_block">
            <article data-am-widget="paragraph" class="am-paragraph am-paragraph-default pet_content_article"
                     data-am-paragraph="{ tableScrollable: true, pureview: true }">
                <h1 class="pet_article_title">{{ $article->title }}</h1>
                <div class="pet_article_user_time">发表于：{{ $article->created_at->toDateString() }}</div>
                <img src="{{ $article->cover }}">
                {{ $article->content }}

            </article>
            <ul class="like_share_block">
                <li><a class="link_share_button" href="###"><i class="iconfont share_ico_link">&#xe62f;</i>1460</a></li>
                <li><a class="link_share_button" href="###"><i class="iconfont share_ico_wx">&#xe630;</i>微信</a></li>
                <li><a class="link_share_button" href="###"><i class="iconfont share_ico_pyq">&#xe62e;</i>朋友圈</a></li>
            </ul>
            {{--<div class="pet_article_dowload">--}}
                {{--<div class="pet_article_dowload_title">关于Amaze UI</div>--}}
                {{--<div class="pet_article_dowload_content">--}}
                    {{--<div class="pet_article_dowload_triangle"></div>--}}
                    {{--<div class="pet_article_dowload_ico"><img src="/img/footdon.png" alt=""></div>--}}
                    {{--<div class="pet_article_dowload_content_font">--}}
                        {{--Amaze UI 以移动优先（Mobile first）为理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。--}}
                    {{--</div>--}}
                    {{--<div class="pet_article_dowload_all">--}}
                        {{--<a href="###" class="pet_article_dowload_Az am-icon-apple"> App store</a>--}}
                        {{--<a href="###" class="pet_article_dowload_Pg am-icon-android"> Android</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        @if($article->comments->count())
        <div class="pet_comment_list">
            <div class="pet_comment_list_wap">
                <div class="pet_comment_list_title">精彩评论</div>

                <div data-am-widget="tabs" class="am-tabs am-tabs-default pet_comment_list_tab">
                    <ul class="am-tabs-nav am-cf pet_comment_list_title_tab">
                        <li class="am-active"><a href="[data-tab-panel-0]">人气</a></li>
                        <li class=""><a href="[data-tab-panel-1]">最新</a></li>
                        <li class=""><a href="[data-tab-panel-2]">最早</a></li>
                    </ul>
                    <div class="am-tabs-bd pet_pl_list">
                        <div data-tab-panel-0 class="am-tab-panel am-active">
                            @foreach($article->comments as $comment)
                            <div class="pet_comment_list_block">
                                <div class="pet_comment_list_block_l"><img src="{{ $comment->user->avatar }}" alt=""></div>
                                <div class="pet_comment_list_block_r">
                                    <div class="pet_comment_list_block_r_info">{{ $comment->user->name }}</div>
                                    <div class="pet_comment_list_block_r_text">
                                        {{ $comment->content }}
                                    </div>
                                    <div class="pet_comment_list_block_r_bottom">
                                        <div class="pet_comment_list_bottom_info_l">{{ $comment->created_at->diffForHumans() }}</div>
                                        <div class="pet_comment_list_bottom_info_r">
                                            <span><i class="iconfont">&#xe631;</i>5 </span>
                                            <span> 回复</span></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>


                    </div>
                </div>


            </div>
        </div>
        @endif
        <div class="pet_article_like">
            <div class="pet_article_like_title">猜你喜欢</div>

            <div class="pet_content_main pet_article_like_delete">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                    <div class="am-list-news-bd">
                        <ul class="am-list">
                            <!--缩略图在标题右边-->
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_l">
                                        <div class="pet_list_one_info_ico"><img src="/img/a1.png" alt=""></div>
                                        <div class="pet_list_one_info_name">Super invincible 菁</div>
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_list_tag_xxs">新鲜事</div>
                                    </div>
                                </div>
                                <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                    <h3 class="am-list-item-hd pet_list_one_bt"><a href="###"
                                                                                   class="">十一长假哪也不去，宅在家里看电影！</a></h3>
                                    <div class="am-list-item-text pet_list_one_text">
                                        每逢长假，总有那么一群人选择远离人山人海，静静地呆在家，坐在电脑电视前。长时间的工作学习让他们感觉很疲惫，对什么都提不起劲，打开电脑却不知道干什么好…
                                    </div>

                                </div>
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="###" class="">
                                        <img src="/img/q1.jpg" class="pet_list_one_img" alt=""/>
                                    </a>
                                </div>
                            </li>
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_l">
                                        <div class="pet_list_one_info_ico"><img src="/img/a6.png" alt=""></div>
                                        <div class="pet_list_one_info_name">La Da Dee</div>
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_video_tag">视频</div>
                                    </div>
                                </div>
                                <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                    <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">不是说好做彼此的天使吗？连最后一口汉堡也不给我</a>
                                    </h3>
                                    <div class="am-list-item-text pet_list_one_text">
                                        国外网友waxiestapple在论坛Reddit贴出爱犬照片，指出“我的狗狗好像瘦了点”“因为我刚刚把最后一口汉堡吃掉”，只见这只哈士奇一脸惨遭背叛的样子，对主人露出相当不可思议的表情。
                                    </div>

                                </div>
                                <div class="am-u-sm-4 am-list-thumb pet_video_info">
                                    <div class="pet_video_info_tag"><i class="iconfont">&#xe62d;</i>03:50</div>
                                    <a href="###" class="">
                                        <img src="/img/q4.jpg" class="pet_list_one_img" alt="我很囧，你保重....晒晒旅行中的那些囧！"/>
                                    </a>
                                </div>
                            </li>
                            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_l">
                                        <div class="pet_list_one_info_ico"><img src="/img/a2.png" alt=""></div>
                                        <div class="pet_list_one_info_name">AbsScript</div>
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_list_tag_zzs">趣闻</div>
                                    </div>
                                </div>
                                <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                    <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">怦然心动！澳洲大眼宝宝逆天睫毛萌翻全球！</a>
                                    </h3>
                                    <div class="am-list-item-text pet_list_one_text">
                                        来自澳大利亚布里斯班的十个月大的萌宝Egypt拥有一双修长的睫毛、清澈的眼眸，可爱的模样让她在社交网站上爆红。
                                    </div>

                                </div>
                                <div class="am-u-sm-4 am-list-thumb">
                                    <a href="###" class="">
                                        <img src="/img/q5.jpg" class="pet_list_one_img" alt="我很囧，你保重....晒晒旅行中的那些囧！"/>
                                    </a>
                                </div>
                            </li>

                            <li class="am-g am-list-item-desced pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_l">
                                        <div class="pet_list_one_info_ico"><img src="/img/a3.png" alt=""></div>
                                        <div class="pet_list_one_info_name">养了猫的飞飞</div>
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_list_tag_stj">阅读</div>
                                    </div>
                                </div>
                                <div class=" am-list-main">
                                    <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">浣熊孤儿掉到树下，被一家人收养之后……</a>
                                    </h3>
                                    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-3
  am-avg-md-3 am-avg-lg-3 am-gallery-default pet_list_one_list">
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/qq1.jpg" alt="某天 也许会相遇 相遇在这个好地方"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/qq2.jpg" alt="不要太担心 只因为我相信"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/qq3.jpg" alt="终会走过这条遥远的道路"/>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="am-list-item-text pet_list_two_text">巴哈马拿骚的居民Rosie
                                        Kemp发现一个刚出生的浣熊，掉在了树下。因为找不到小浣熊的妈妈了，Rosie和她的女儿Laura Young决定收养这只小东西，并给她取名“小南瓜”。
                                    </div>
                                </div>
                            </li>

                            <li class="am-g am-list-item-desced pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_tytj"><i
                                                class="iconfont pet_nav_kantuya pet_more_list_block_line_ico pet_list_tytj_ico">&#xe607;</i>诺奖得主回忆通知获奖那一刻
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_list_tag_kty">图集</div>
                                    </div>
                                </div>
                                <div class=" am-list-main">
                                    <ul data-am-widget="gallery" class="am-gallery am-avg-sm-3
  am-avg-md-3 am-avg-lg-3 am-gallery-default pet_list_one_list pet_list_one_tytj">
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/w1.jpg" alt="某天 也许会相遇 相遇在这个好地方"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/w2.jpg" alt="不要太担心 只因为我相信"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/w3.jpg" alt="终会走过这条遥远的道路"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/w4.jpg" alt="终会走过这条遥远的道路"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/w5.jpg" alt="终会走过这条遥远的道路"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="am-gallery-item">
                                                <a href="###" class="">
                                                    <img src="/img/w6.jpg" alt="终会走过这条遥远的道路"/>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                            </li>
                            <li class="am-g am-list-item-desced pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_l">
                                        <div class="pet_list_one_info_ico"><img src="/img/a4.png" alt=""></div>
                                        <div class="pet_list_one_info_name">大兔</div>
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_list_tag_zzs">趣闻</div>
                                    </div>
                                </div>
                                <div class=" am-list-main">
                                    <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">“你的旅行，是什么颜色？”
                                            晒照片，换北欧梦幻极光之旅！</a></h3>


                                    <div class="am-list-item-text pet_list_two_text">
                                        狗狗会天天的跟着我们生活在一起，它们的一切都会影响着主人，尤其是狗狗身上散发的味道，会无时无刻的对主人有影响，如果狗狗身体有异味，主人就会用过于香喷喷的洗漱品帮狗狗洗澡，这样不仅对狗狗身体有伤害，还会容易患上皮肤病，其实，我们知道一些小技巧，就会改善狗狗身上存在的味道。
                                    </div>

                                </div>
                            </li>
                            <li class="am-g am-list-item-desced pet_list_one_block">
                                <div class="pet_list_one_info">
                                    <div class="pet_list_one_info_l">
                                        <div class="pet_list_one_info_ico"><img src="/img/a5.png" alt=""></div>
                                        <div class="pet_list_one_info_name">Hope</div>
                                    </div>
                                    <div class="pet_list_one_info_r">
                                        <div class="pet_list_tag pet_list_tag_mzt">萌专题</div>
                                    </div>
                                </div>
                                <div class=" am-list-main">
                                    <h3 class="am-list-item-hd pet_list_one_bt"><a href="###"
                                                                                   class="">心情不好了，就来看看这只狗！</a></h3>
                                    <div class="pet_list_zt_img"><img src="/img/c1.png" alt=""></div>

                                    <div class="am-list-item-text pet_list_two_text">
                                        猫咪不像人，猫咪的情绪不会写在脸上，反馈给我们的信息更多的应该是行为上肢体上的，当然从叫声中也会反应一些信息，那么要想“抓住它的心，就一定要抓住它的胃吗？”从它的行为和肢体语言当中我们可以读懂什么呢？
                                    </div>

                                </div>
                            </li>
                            <li class="am-g am-list-item-desced pet_list_one_block">
                                <div class="pet_article_user_block">
                                    <div class="pet_article_user_img">
                                        <div class="pet_article_user_shadow"></div>
                                        <div class="pet_article_user_title">一周在任意地点工作三天？</div>
                                        <img src="/img/c2.png" alt=""></div>
                                    <div class="pet_article_user_info">
                                        <div class="pet_article_user_info_ico"><img src="/img/c.png" alt=""></div>
                                        SeeYouAgain
                                    </div>
                                    <div class="am-list-item-text pet_article_user_nr">
                                        这是一家帮助客户在亚太地区找到适合的打折酒店的中介机构，在全球设立了9个办事处，老板克里斯蒂安·米施勒宣称要把它打造成世界上最棒的公司。
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>


        </div>


        @include('layouts.mini-foot')
    </div>
@endsection