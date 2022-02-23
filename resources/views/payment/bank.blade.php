@extends('layouts.main')
@section('css')

@endsection
@section('content')
<div class="p-paymentIndex">
        <div class="container">            
            @include('layouts.sidebar', ['active' => 'payment'])
            <div class="content">
                <h2 class="title">
                    お支払い
                </h2>
                <div class="u-inner-800 inner">
                    <p class="total u-red">お支払金額 : 3,980¥</p>
                    <div class="row">
                        <div class="left">
                            <div class="btns">
                            <a href="{{ route('card.index') }}" class="btn">
                                    <img src="{{ asset('img/common/card_pay.png') }}" alt="">
                                </a>
                                <a href="{{ route('bank.index') }}" class="btn active">
                                    <img src="{{ asset('img/common/bank_pay.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="right">
                            <form action="">
                                <div class="panel">
                                    <div class="form-group number">
                                        <p>クレジットカード番号</p>
                                        <input type="text" placeholder="0000 0000 0000 0000">
                                    </div>
                                    <div class="form-group date">
                                        <p>有効期限</p>
                                        <input type="date">
                                    </div>
                                    <div class="form-group code">
                                        <p>セキュリティコード</p>
                                        <input type="text" placeholder="000">
                                    </div>
                                </div>
                                <div class="btn u-right">
                                    <a href="#" class="u-btn u-btn-black">確認する</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function() {

    });
</script>
@endsection