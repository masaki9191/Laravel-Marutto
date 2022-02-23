@extends('layouts.app')

@section('content')
<div class="p-login l-auth">
    <div class="container">
        <div class="topbar pc-hidden">
            <h3>ログイン</h3>
        </div>
        <div class="sidebar sp-hidden">
            <a href="#" class="logo">
                <img src="{{ asset('img/common/logo.svg') }}" alt="">
            </a>
            <h2 class="title">
                引っ越しや移転で不要になった<br> 住宅家具や店舗オフィス什器を
                <br> 直接売買できる新サービスです！
            </h2>
            <p class="lead first">今だけ手数料ゼロ！（※１２月までに登録したアイテム限定）</p>
            <p class="lead">アイテムはバラバラでも一括でも売買できます！</p>
            @include('components.topGo')
        </div>
        <div class="content">
            <h3 class="title sp-hidden">ンクを送信する</h3>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                @if ($errors->any())
                <div class="u-alert danger" id="alertElement">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group">
                    <p>登録済みメールアドレスを入力してください</p>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="btns">
                    <button type="submit" id="nextBtn" class="u-btn u-btn-black">ンクを送信する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection