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
                <div class="step finish">
                    <p>基本情報</p>
                </div>
                <div class="step active">
                    <p>メール確認</p>
                </div>
                <div class="step ">
                    <p>SMS確認</p>
                </div>
            </div>
            
            @include('components.topGo')
        </div>
        <div class="content">
            <h3 class="title sp-hidden">メール確認</h3>
            <div class="verify">
                <div class="lead">あなたのメールアドレスを確認してください</div>

                @if (session('resent'))
                    <div class="u-alert success" role="alert">
                        新しい確認リンクがあなたのメールアドレスに送信されました。
                    </div>
                @endif
                    
                <div class="txt">
                    メールが届かない場合,
                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="u-red">別のリクエストするには、ここをクリックしてください.</button>
                    </form>   
                </div>
            </div>
              
        </div>
    </div>
</div>
@endsection
@section('js')
   
@endsection