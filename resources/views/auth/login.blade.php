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
            <h3 class="title sp-hidden">ログイン</h3>
            <form action="{{ route('loginPost') }}" method="POST">
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
                    <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror" required />
                </div>
                <div class="form-group">
                    <p>パスワードを⼊⼒してください</p>
                    <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" required/>
                </div>
                <p><a href="{{ route('password.request')}}" class="link">パスワードを忘れた方は<span class="u-red">こちら</span></a></p>                
                <div class="btns">
                    <button type="submit" id="nextBtn" class="u-btn u-btn-black">ログイン</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection