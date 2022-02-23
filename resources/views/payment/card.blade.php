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
                @if(session('success'))
                    <div class="u-alert success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="u-alert danger">
                        {{ session('error') }}
                    </div>
                @endif
                <p class="total u-red">お支払金額 : ¥{{ $total_price }}</p>
                <div class="row">
                    <div class="left">
                        <div class="btns">
                            <a href="{{ route('card.index') }}" class="btn active">
                                <img src="{{ asset('img/common/card_pay.png') }}" alt="">
                            </a>
                            <a href="{{ route('bank.index') }}" class="btn">
                                <img src="{{ asset('img/common/bank_pay.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="right">
                        <form action="{{ route('card.pay') }}" method="post" id="payment-form">
                            @csrf
                            <div class='form-group'>
                                <label class='control-label'>カード番号</label>
                                <div id="card-number-element" class="field"></div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label'>CVC</label>
                                <div id="card-cvc-element" class="field"></div>
                            </div>
                            <div class='form-group'>
                                <label class='control-label'>有効期限</label>
                                <div id="card-expiry-element" class="field"></div>
                            </div>
                            <div class="form-group">
                                <button class="u-btn u-btn-black sm" id="sendBtn" type="button" onclick="confirm_payment()" ><div class="spinner hidden" id="spinner"></div> 今払う</button>
                            </div>
                            <div class="form-group">
                                <div class="u-alert danger hide">
                                    正確に入力してください。
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div id="modal">
    <div class="u-modal u-modal-card u-center">
        <h4 class="u-modal__title">お支払いの確認</h4>
        <div class="u-modal-note">
            お支払内容が下記でお間違いないかご確認下さい。
        </div>
        <div class="u-modal__price">
           お支払金額 <span class="u-red">{{ $total_price }}</span>¥
        </div>
        <div class="u-modal__body u-left">
            <div>
                <dl>
                    <dt>決済方法:</dt>
                    <dd>クレジットカード払い</dd>
                </dl>
                <dl>
                    <dt>クレジットカード番号:</dt>
                    <dd>****-****-****-<span id="modal_card_number"></span> </dd>
                </dl>
                <!-- <dl>
                    <dt>CVC:</dt>
                    <dd><span id="modal_cvc"></span> </dd>
                </dl> -->
                <dl>
                    <dt>クレジットカード有効期限:</dt>
                    <dd><span id="modal_exp_year"></span>/<span id="modal_exp_month"></span></dd>
                </dl>
            </div>
        </div>
        <div class="u-modal__btns">
            <button type="button" class="u-btn sm" data-dismiss="modal" data-izimodal-close="">内容を修正する</button>
            <button type="button" class="u-btn sm" id="sendBtn" onclick="stripeTokenHandler()">確定する</button>
        </div>
    </div>
</div>



</div>
@endsection
@section('js')
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
var public_key =  "{{ env('STRIP_PUBLICKEY') }}";
var stripe = Stripe(public_key);
var elements = stripe.elements();
var style = {
  base: {
    iconColor: '#666EE8',
    color: '#31325F',
    lineHeight: '40px',
    fontWeight: 300,
    fontFamily: 'Helvetica Neue',
    fontSize: '15px',

    '::placeholder': {
      color: '#CFD7E0',
    },
  },
};

var cardNumberElement = elements.create('cardNumber', {
  style: style,
  placeholder: 'クレジットカード番号を入力してください。',
});
cardNumberElement.mount('#card-number-element');

var cardExpiryElement = elements.create('cardExpiry', {
  style: style,
  placeholder: '有効期限を入力してください。',
});
cardExpiryElement.mount('#card-expiry-element');

var cardCvcElement = elements.create('cardCvc', {
  style: style,
  placeholder: 'CVCを入力してください。',
});
cardCvcElement.mount('#card-cvc-element');


$("#modal").iziModal({
    width: 600,
    overlayClose: false
});

var token_id = "" ;
var total_price = {{ $total_price }};
function setOutcome(result) {
    var token = result.token;    
    setLoading(false);
    if (token) {
        token_id = token.id;
        $("#modal_card_number").html(token.card.last4);
        $("#modal_exp_year").html(token.card.exp_year);
        $("#modal_exp_month").html(token.card.exp_month);
        // $("#modal_cvc").html(token.card.cvc);
        $('#modal').iziModal('open');
    }
    else {
        $("form .u-alert").removeClass("hide");
    }
}

function confirm_payment(){
    if(total_price == 0)
    {
        alert("お支払いいただく商品はありません。カートに商品を入れてください。");
        return ;
    }    
    setLoading(true);
    stripe.createToken(cardNumberElement).then(setOutcome);
}

function stripeTokenHandler() {
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token_id);
  form.appendChild(hiddenInput);
  
  form.submit();
  setLoading(true);
}
// Show a spinner on payment submission
function setLoading(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    
    document.querySelector("#sendBtn").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
  } else {
    document.querySelector("#sendBtn").disabled = false;
    document.querySelector("#spinner").classList.add("hidden");
  }
}
</script>
@endsection