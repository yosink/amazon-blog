@extends('layouts.main')

@section('content')
    <div class="pet_content pet_content_list">
        <div class="pet_article_like">
            <div class="pet_content_main pet_article_like_delete">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                    <div class="am-list-news-bd">
                        <ul class="am-list">
                            <!--缩略图在标题右边-->
                            @foreach($articles as $article)
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                                    <div class="pet_list_one_info">
                                        <div class="pet_list_one_info_l">
                                            <div class="pet_list_one_info_ico"><img src="{{ $article->user->avatar }}" alt=""></div>
                                            <div class="pet_list_one_info_name">{{ $article->user->name }}</div>
                                        </div>
                                        <div class="pet_list_one_info_r">
                                            <div class="pet_list_tag {{ $article->category->color_class }}">{{ $article->category->name }}</div>
                                        </div>
                                    </div>
                                    <div class=" am-u-sm-8 am-list-main pet_list_one_nr">
                                        <h3 class="am-list-item-hd pet_list_one_bt"><a href="{{ url('/articles/'.$article->id) }}" class="">{{ $article->title }}</a></h3>
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

        </div>

        @include('layouts.mini-foot')
    </div>
    @endsection