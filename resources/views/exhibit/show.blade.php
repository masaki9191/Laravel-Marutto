@extends('layouts.main')
@section('css')

@endsection
@section('content')
<div class="p-mypageExhibitDetail container">
    <div class="u-inner-1440">
        <div class="c-productWrapper">
            <div class="column ">
                <div class="imgarea">
                    <div class="slider-for">
                        @foreach($exhibit->photos as $key => $media)
                        <div class="item">
                            <figure>
                                <img src="{{ $media->getUrl('') }}" alt="">
                            </figure>
                        </div>
                        @endforeach                        
                    </div>
                    <div class="slider-nav">
                        @foreach($exhibit->photos as $key => $media)
                        <div class="item">
                            <figure>
                                <img src="{{ $media->getUrl('') }}" alt="">
                            </figure>
                        </div>
                        @endforeach                        
                    </div>
                </div>
            </div>
            <div class="column infos">
                <h2 class="title">
                    {{ $exhibit->title }}
                </h2>
                <p class="price">
                    <span class="u-red">¥{{ $exhibit->price }} </span>
                </p>
                <div class="panel desc">
                    <h3 class="sub-title">
                        商品説明
                    </h3>
                    <div class="panel__content">
                        <p>
                        {{ $exhibit->description }}
                        </p>
                    </div>
                </div>
                <div class="panel quantity">
                    <h3 class="sub-title">
                    数量
                    </h3>
                    <div class="panel__content">
                        <p>
                        {{ $exhibit->quantity }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-center btn">
            <a class="u-btn u-btn-black" href="{{ route('exhibit.index') }}">戻る</a>
            <a class="u-btn u-btn-gray" href="{{ route('exhibit.edit',$exhibit->id) }}">編集</a>
            <a class="u-btn u-btn-red" type="button" data-izimodal-open="#modal">消去</a>
        </div>
        <div id="modal">
            <div class="u-modal">
                <div class="u-modal__title">本当にこれを削除しますか?</div>
                <div class="u-modal__btns">
                    <button type="button" class="u-btn u-btn-black sm" id="okBtn">はい</button>
                    <button type="button" class="u-btn u-btn-gray sm" data-dismiss="modal" data-izimodal-close="">いいえ</button>
                    <form id="form" name="form" action="{{ route('exhibit.destroy',$exhibit->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')



<script src="{{ asset('js/detail.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#modal").iziModal({
            width: 400
        });
        $("#okBtn").click(function(){
            var form = document.getElementById("form");
            form.submit();
        });
    });
</script>
@endsection