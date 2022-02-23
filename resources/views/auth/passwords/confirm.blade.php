@extends('layouts.app')

@section('content')
<div class="p-login l-auth">
    <div class="container">
        <div class="topbar pc-hidden">
            <h3>パスワード確認</h3>
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
            <h3 class="title sp-hidden">パスワード確認</h3>
            <form method="POST" action="{{ route('password.confirm') }}">
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
                    <p>パスワード</p>
                    <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" required/>
                </div>   
                <div class="form-group">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('パスワードをお忘れですか？') }}
                        </a>
                    @endif    
                </div>        
                <div class="btns">
                    <button type="submit" id="nextBtn" class="u-btn u-btn-black">パスワード確認</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection