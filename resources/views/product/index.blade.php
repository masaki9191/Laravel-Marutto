@extends('layouts.main')
@section('css')

@endsection
@section('content')
<div class="p-productIndex">
    <div class="inner u-inner-1200">
        @if(session('cart_success'))
            <div class="u-alert success">
                {{ session('cart_success') }}
            </div>
        @endif
        <form action="{{route('product.index')}}" method="get" id="form" name="form">
            @if (session('category'))
                <div class="u-alert danger">
                    {{ session('category') }}
                </div>
            @endif
            <div class="form-panel">
                <label for="">カテゴリー</label>
                <select name="category" id="category">
                    <option value="all">全て</option>
                    <?php 
                        $categorys = config('myconfig.category');
                    ?>
                    @foreach( $categorys as $key => $value)
                        <option value="{{ $key }}" {{ (string)$key == $category ? "selected" : "" }}>{{ $value }}</option>
                    @endforeach
                </select>                
                <label for="">パターン</label>
                <select name="pattern" id="pattern">
                    <option value="">全て</option>
                    <option value="0">まるっと（単品も可）</option>
                    <option value="1">単品のみ</option>
                </select>
                <label for="">パタ価格ーン</label>
                <select name="price" id="price">
                    <option value="">全て</option>
                    <option value="0">高い順</option>
                    <option value="1">安い順</option>
                </select>
            </div>
        </form>
        <div class="c-product__list">
            @forelse($exhibits as $exhibit)
            <div class="c-product"  >
                <a href="{{ route('cart.add', $exhibit->id) }}" class="add-cart">
                    <img src="{{ asset('img/common/icon_shipping_red.svg') }}" alt="">
                </a>
                <div class="avatar">
                    <figure>
                        <img src="{{ asset('img/common/test_avatar.svg') }}" alt="" class="avatar__pic">
                    </figure>
                    <div class="owner">
                        <p class="owner__name">{{$exhibit->owner->username}}</p>
                    </div>
                </div>
                
                <a href="{{ route('product.show',$exhibit->id) }}" class="c-product__content">
                    <p class="name">
                        {{$exhibit->title}}
                    </p>
                    <div class="property">
                        <dl>
                            <dt>出品日</dt>
                            <dd>{{$exhibit->created_at->format('d/m/Y')}}</dd>
                        </dl>
                        <dl>
                            <dt>価格</dt>
                            <dd>¥{{$exhibit->price}}</dd>
                        </dl>
                    </div>
                    <figure>
                        <img src="{{ $exhibit->thumbnail != null? $exhibit->thumbnail : '' }}" alt="" class="pic">
                    </figure>
                </a>
            </div>
            @empty
                資料がありません。
            @endforelse  
            
        </div>
        <div class="u-pagenav">
            {!! $exhibits->withQueryString()->links('vendor.pagination') !!}
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $("#form select").change(function () {
            var form = document.getElementById("form");
            form.submit();
        });
    });
</script>
@endsection