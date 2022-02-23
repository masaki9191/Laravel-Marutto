@extends('frontend.layouts.app')

@section('content')
<div class="p-signup l-auth">
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
                <img src="{{ asset('assets/img/common/logo.svg') }}" alt="">
            </a>
            <div class="step">
                <p>基本情報</p>
            </div>
            <div class="step">
                <p>SMS確認</p>
            </div>
            <div class="step">
                <p>Complete</p>
            </div>
            @include('frontend.components.topGo')
        </div>
        <div class="content complete">
            <h3 class="title sp-hidden">新規登録</h3>
            <form action="" id="regForm" class="register-form">
                <div class="u-alert" id="alert">
                    
                </div>
                <div class="form-1 tab">
                    <div class="row columns">
                        <div class="form-group">
                            <p>お名前（姓）</p>
                            <input type="text" name="firstname" id="firstname" />
                        </div>
                        <div class="form-group">
                            <p>お名前（名）</p>
                            <input type="text" name="lastname" id="lastname" />
                        </div>
                    </div>
                    <div class="form-group">
                        <p>メールアドレス</p>
                        <input type="email" name="email" id="email" />
                    </div>
                    <div class="form-group">
                        <p>住所（都道府県のみ）</p>
                        <input type="text" name="address" id="address" />
                    </div>
                </div>
                <div class="form-2 tab">
                    <div class="form-group">
                        <p>電話番号</p>
                        <input type="text" name="phone" id="phone" />
                    </div>
                    <div class="row columns">
                        <div class="form-group">
                            <p>パスワード</p>
                            <input type="password" name="password" id="password" />
                        </div>
                        <div class="form-group">
                            <p>パスワード（確認用）</p>
                            <input type="password" name="passwordconfirm" id="passwordconfirm" />
                        </div>
                    </div>
                </div>
                <div class="form-3 tab">
                    <div class="form-name">
                        <div class="form-group sms">
                            <p>SMSで届いた番号を入力してください</p>
                            <input type="text" name="sms" id="sms" />
                        </div>
                    </div>
                </div>
                <div class="form-4 tab">
                    <div class="u-center">
                        <p>新規登録完了</p>
                        <img src="{{ asset('assets/img/common/icon_complete.png') }}" alt="" />
                    </div>
                </div>
            </form>
            <div class="btns">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="u-btn u-btn-gray">戻る</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)" class="u-btn u-btn-black">次へ</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/signup.js') }}"></script>
@endsection