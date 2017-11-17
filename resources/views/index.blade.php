@extends('layouts.master')

@section('content')
    @include('layouts.slider')
    @include('layouts.nav')
    <div class="pet_content_main">
        <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
            <div class="am-list-news-bd">
                <ul class="am-list">
                    <!--缩略图在标题右边-->
                    @foreach($articles as $article)
                        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                            <div class="pet_list_one_info">
                                <div class="pet_list_one_info_l">
                                    <div class="pet_list_one_info_ico"><img src="{{ $article->user->avatar }}" alt="">
                                    </div>
                                    <div class="pet_list_one_info_name">{{ $article->user->name }}</div>
                                </div>
                                <div class="pet_list_one_info_r">
                                    <div class="pet_list_tag {{ $article->category->color_class }}">{{ $article->category->name }}</div>
                                </div>
                            </div>
                            <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                <h3 class="am-list-item-hd pet_list_one_bt"><a href="###"
                                                                               class="">{{ $article->title }}</a></h3>
                                <div class="am-list-item-text pet_list_one_text">{{ str_limit($article->content) }}</div>

                            </div>
                            <div class="am-u-sm-4 am-list-thumb">
                                <a href="###" class="">
                                    <img src="{{ $article->cover }}" class="pet_list_one_img" alt=""/>
                                </a>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

        </div>

    </div>
@endsection

@section('my-script')
    <script>
        $(function(){

            // 动态计算新闻列表文字样式
            auto_resize();
            $(window).resize(function() {
                auto_resize();
            });
            $('.am-list-thumb img').load(function(){
                auto_resize();
            });

            $('.am-list > li:last-child').css('border','none');
            function auto_resize(){
                $('.pet_list_one_nr').height($('.pet_list_one_img').height());

            }
            $('.pet_nav_gengduo').on('click',function(){
                $('.pet_more_list').addClass('pet_more_list_show');
            });
            $('.pet_more_close').on('click',function(){
                $('.pet_more_list').removeClass('pet_more_list_show');
            });
        });

    </script>
@endsection