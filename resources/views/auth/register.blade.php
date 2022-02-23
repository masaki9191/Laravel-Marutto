@extends('layouts.app')

@section('content')
<div class="p-register l-auth">
    <div class="container">
        <div class="topbar pc-hidden">
            <h3>新規登録</h3>
        </div>
        <div class="sp-step pc-hidden">
            <span class="sp-step__item" data-before="1"></span>
            <span class="sp-step__item" data-before="2"></span>
            <span class="sp-step__item" data-before="3"></span>
            <span class="sp-step__item" data-before="4"></span>
        </div>
        <div class="sidebar sp-hidden">
            <a href="#" class="logo">
                <img src="{{ asset('img/common/logo.svg') }}" alt="">
            </a>
            <div class="stepList">
                <div class="step active">
                    <p>基本情報</p>
                </div>
                <div class="step">
                    <p>メール確認</p>
                </div>
                <div class="step ">
                    <p>SMS確認</p>
                </div>
            </div>
            
            @include('components.topGo')
        </div>
        <div class="content">
            <h3 class="title sp-hidden">新規登録</h3>
            <form action="{{ route('registerPost') }}" method="POST" >
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
                <div class="row columns">
                    <div class="form-group">
                        <p>お名前（姓）</p>
                        <input type="text" name="firstname" id="firstname" class="@error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" required/>
                    </div>
                    <div class="form-group">
                        <p>お名前（名）</p>
                        <input type="text" name="lastname" id="lastname"  class="@error('lastname') is-invalid @enderror" value="{{ old('lastname') }}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <p>ユーザー名</p>
                    <input type="text" name="username" id="username"  class="@error('username') is-invalid @enderror" value="{{ old('username') }}" required/>
                </div>
                <div class="form-group">
                    <p>住所（都道府県のみ）</p>
                    <input type="text" name="address" id="address"  class="@error('address') is-invalid @enderror" value="{{ old('address') }}" required/>
                </div>  
                <div class="form-group">
                    <p>メールアドレス</p>
                    <input type="email" name="email" id="email"  class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required/>
                </div>            
                <div class="form-group">
                    <p>電話番号</p>
                    <input type="text" name="phone" id="phone"  class="@error('phone') is-invalid @enderror" value="{{ old('phone') }}" required/>
                </div>
                <div class="row columns">
                    <div class="form-group">
                        <p>パスワード</p>
                        <input type="password" name="password" id="password"   class="@error('password') is-invalid @enderror" required/>
                    </div>
                    <div class="form-group">
                        <p>パスワード（確認用）</p>
                        <input type="password" name="password_confirmation" id="password_confirmation"   class="@error('password_confirmation') is-invalid @enderror" required/>
                    </div>
                </div>
                <div class="btns">
                    <button type="submit" id="subBtn" class="u-btn u-btn-black">登録する</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection