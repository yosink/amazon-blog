@extends('layouts.main')
@section('title',  $user->name . '的个人主页')

@section('content')

    <div class="pet_content pet_content_list">
        <div class="pet_grzx">

            <div class="pet_grzx_nr">
                <div class="pet_grzx_ico">
                    <img src="{{ $user->avatar }}" alt="">
                </div>
                <div class="pet_grzx_name">{{ $user->name }}</div>
                <div class="pet_grzx_map">{{ $user->address }}</div>
                <div class="pet_grzx_num_font">
                    {{ $user->description }}
                </div>
                <div class="pet_grzx_name">
                    {{--<button type="button" class="am-btn am-btn-default am-round">取消关注</button>--}}
                    <button type="button" class="am-btn am-btn-primary am-round">关注</button>
                    <a href="{{ url('user/message/'. $user->id) }}" class="am-btn am-btn-success am-round">发私信</a>
                </div>
                <div class="pet_grzx_num">
                    <span>{{ $zan_count }}<i>喜欢</i></span>
                    <span>{{ $user->fans->count() }}<i>关注</i></span>
                    <span>{{ $user->articles->count() }}<i>文章</i></span>
                </div>

            </div>

            <div class="pet_grzx_list">
                <div class="pet_content_main pet_article_like_delete">
                    <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                        <div class="am-list-news-bd">
                            <ul class="am-list">
                                <!--缩略图在标题右边-->
                                @foreach($user->articles as $article)
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">

                                    <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="{{ url('articles/'.$article->id) }}" class="">{{ $article->title }}</a>
                                        </h3>
                                        <div class="am-list-item-text pet_list_one_text">
                                            {{ str_limit($article->content) }}
                                        </div>

                                    </div>
                                    <div class="am-u-sm-4 am-list-thumb">
                                        <a href="{{ url('articles/'.$article->id) }}" class="">
                                            <img src="{{ $article->cover }}" class="pet_list_one_img" alt=""/>
                                        </a>
                                    </div>
                                </li>
                                @endforeach


                                <li class="am-g am-list-item-desced pet_list_one_block">

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

                                <li class="am-g am-list-item-desced pet_list_one_block" style="border-bottom:none">

                                    <div class=" am-list-main">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="###" class="">“你的旅行，是什么颜色？”
                                                晒照片，换北欧梦幻极光之旅！</a></h3>


                                        <div class="am-list-item-text pet_list_two_text">
                                            狗狗会天天的跟着我们生活在一起，它们的一切都会影响着主人，尤其是狗狗身上散发的味道，会无时无刻的对主人有影响，如果狗狗身体有异味，主人就会用过于香喷喷的洗漱品帮狗狗洗澡，这样不仅对狗狗身体有伤害，还会容易患上皮肤病，其实，我们知道一些小技巧，就会改善狗狗身上存在的味道。
                                        </div>

                                    </div>
                                </li>


                            </ul>
                        </div>

                    </div>

                </div>

            </div>
            <div class="pet_article_dowload">
                <div class="pet_article_dowload_title">关于Amaze UI</div>
                <div class="pet_article_dowload_content">
                    <div class="pet_article_dowload_triangle"></div>
                    <div class="pet_article_dowload_ico"><img src="/img/footdon.png" alt=""></div>
                    <div class="pet_article_dowload_content_font">
                        Amaze UI 以移动优先（Mobile first）为理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
                    </div>
                    <div class="pet_article_dowload_all">
                        <a href="###" class="pet_article_dowload_Az am-icon-apple"> App store</a>
                        <a href="###" class="pet_article_dowload_Pg am-icon-android"> Android</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pet_article_footer_info">Copyright(c)2015 PetShow All Rights Reserved</div>
    </div>
@endsection
