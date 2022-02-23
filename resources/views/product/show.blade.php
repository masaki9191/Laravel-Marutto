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
                <div class="add-cart">
                    <a href="#" class="u-btn sm u-btn-red">カートに入れる</a>
                </div>
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
            </div>
        </div>
        <div class="u-center btn">
            <a class="u-btn u-btn-black" href="javascript:history.back()">戻る</a>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/detail.js') }}"></script>
@endsection