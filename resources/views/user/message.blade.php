@extends('layouts.main')
@section('title','私信页面')
@section('content')
    <div class="pet_content pet_content_list">
        <div class="pet_sixin">

            <div class="pet_sixin_nr">
                @foreach($my_msg as $item)
                    @if($item->sender->id != auth()->id())
                <div class="pet_sixin_to">
                    <div class="pet_sixin_to_l">
                        <img src="{{ $item->sender->avatar }}" alt="">
                    </div>
                    <div class="pet_sixin_to_r">
                        <div class="pet_sixin_to_r_nr">
                            <div class="pet_sixin_to_r_nr_sj"></div>
                            {{ $item->body }}
                        </div>
                    </div>
                    <div class="pet_sixin_shijian">{{ $item->created_at->diffForHumans() }}</div>
                </div>
                @else
                <div class="pet_sixin_form">
                    <div class="pet_sixin_form_l">
                        <img src="{{ $item->sender->avatar }}" alt="">
                    </div>
                    <div class="pet_sixin_form_r">
                        <div class="pet_sixin_form_r_nr">
                            <div class="pet_sixin_form_r_nr_sj"></div>
                            {{ $item->body }}
                        </div>
                    </div>
                    <div class="pet_sixin_shijian">{{ $item->created_at->diffForHumans() }}</div>
                </div>
                @endif
            @endforeach
            </div>
            <div>
                <input type="text" id="msg" name="msg" class="am-form-field am-round" placeholder="说点什么....."/>
                {{--<input type="hidden" id="to_id" name="to" value="{{ $to->id }}">--}}
                <button type="button" onclick="send_msg({{ $to->id }})" class="am-btn am-btn-success am-round">发送</button>
            </div>

            <div class="pet_article_dowload">
                <div class="pet_article_dowload_title">关于Amaze UI</div>
                <div class="pet_article_dowload_content"><div class="pet_article_dowload_triangle"></div>
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
@section('my-script')
    <script>
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        function send_msg(to_id){
            $.ajax({
                url: "{{ url('user/message/send/'.$conversation->id) }}",
                type: 'post',
                data: {
                    msg: $('#msg').val()
                },
                success: function(data) {
                    console.log(data)
                }
            })
        }
    </script>
@endsection

