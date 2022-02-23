@extends('layouts.app')

@section('content')
<div class="p-top">
    <header class="l-header pc-hidden">
        <div class="top">
            <figure class="logo">
                <img src="{{ asset('img/common/logo.svg') }}" alt="">
            </figure>
            <div class="btns">
                <a href="#" class="btn"><img src="{{ asset('img/common/icon_sign-in.png') }}" alt=""></a>
                <a href="#" class="btn"><img src="{{ asset('img/common/icon_sign-up.png') }}" alt=""></a>
            </div>
        </div>
        <div class="bottom">
            <form action="#">
                <div class="c-search">
                    <input type="text" placeholder="なにをお探しですか？">
                </div>
                <button type="submit" class="btn">出品する</button>
            </form>
        </div>
    </header>
    <section class="fv">
        <div class="inner">
            <div class="left pl-100">
                <div class="logo sp-hidden">
                    <img src="{{ asset('img/common/logo.svg') }}" alt="">
                </div>
                <div class="txtarea">
                    <div class="txtarea__inner">
                        <h2 class="title">
                            引っ越しや移転で不要になった<br> 住宅家具や店舗オフィス什器を
                            <br> 直接売買できる新サービスです！
                        </h2>
                        <p class="lead first">今だけ手数料ゼロ！（※１２月までに登録したアイテム限定）</p>
                        <p class="lead">アイテムはバラバラでも一括でも売買できます！</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <figure class="imgarea">
                    <img src="{{ asset('img/top/fv_bg.jpg') }}" alt="">
                </figure>
            </div>
        </div>
    </section>
    <div class="follow u-mt165 sp-hidden">
    </div>    
    @include('layouts.header')
    <section class="about u-mt240">
        <div class="u-inner-1440">
            <div class="title">
                <div class="title__inner">
                    <h2 class="c-sec__title">
                        ABOUT
                    </h2>
                    <h3 class="c-sec__lead">
                        本事業について
                    </h3>
                </div>
            </div>
            <div class="c-sec1__row">
                <div class="c-sec1__column">
                    <figure>
                        <img src="{{ asset('img/top/about_img1.jpg') }}" alt="" class="c-sec1__img">
                    </figure>
                </div>
                <div class="c-sec1__column u-pl80">
                    <div class="c-sec1__txtarea u-pt100">
                        <p class="c-sec1__desc">本事業について</p>
                        <p class="c-sec1__txt u-mt40">
                            事業内容について述べています。事業内容について述べています。事業内容について述べています。<br> 事業内容について述べています。事業内容について述べています。事業内容について述べています。
                            <br> 事業内容について述べています。事業内容について述べています。事業内容について述べています。
                            <br> 事業内容について述べています。事業内容について述べています。事業内容について述べています。
                        </p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/top/about_bg.svg') }}" alt="" class="c-sec1__bg">
        </div>
    </section>
    <section class="merit u-mt350">
        <div class="u-inner-1440">
            <div class="title">
                <div class="title__inner">
                    <h2 class="c-sec__title">
                        MERIT
                    </h2>
                    <h3 class="c-sec__lead">
                        メリット
                    </h3>
                </div>
            </div>
            <div class="c-sec1__row">
                <div class="c-sec1__column u-pr80">
                    <div class="c-sec1__txtarea u-pt100">
                        <p class="c-sec1__desc">メリット</p>
                        <p class="c-sec1__txt u-mt40">
                            事業内容について述べています。事業内容について述べています。事業内容について述べています。<br> 事業内容について述べています。事業内容について述べています。事業内容について述べています。
                            <br> 事業内容について述べています。事業内容について述べています。事業内容について述べています。
                            <br> 事業内容について述べています。事業内容について述べています。事業内容について述べています。
                        </p>
                    </div>
                </div>
                <div class="c-sec1__column">
                    <figure>
                        <img src="{{ asset('img/top/about_img1.jpg') }}" alt="" class="c-sec1__img">
                    </figure>
                </div>
            </div>
            <img src="{{ asset('img/top/merit_bg.svg') }}" alt="" class="c-sec1__bg">
        </div>
    </section>
    <section class="popular u-mt350">
        <div class="c-sec2__inner">
            <div class="title">
                <h2 class="c-sec2__title">
                    人気商品一覧
                </h2>
            </div>
            <div class="c-sec2__list">
                <div class="c-product">
                    <div class="avatar">
                        <figure>
                            <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                        </figure>
                        <div class="owner">
                            <p class="owner__name">出品者名</p>
                            <p class="owner__address">場所</p>
                        </div>
                    </div>
                    <p class="name">
                        商品名
                    </p>
                    <div class="property">
                        <dl>
                            <dt>出品日</dt>
                            <dd>1/10/2021（金）</dd>
                        </dl>
                        <dl>
                            <dt>価格</dt>
                            <dd>¥3,000〜</dd>
                        </dl>
                        <dl>
                            <dt>出品日</dt>
                            <dd>1,000</dd>
                        </dl>
                    </div>
                    <figure>
                        <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                    </figure>
                    <div class="icons">
                        <span class="icon__txt">
                            応募する
                        </span>
                        <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                        <span class="icon__txt">
                            お気に入り
                        </span>
                        <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                    </div>
                </div>
                <div class="c-product">
                    <div class="avatar">
                        <figure>
                            <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                        </figure>
                        <div class="owner">
                            <p class="owner__name">出品者名</p>
                            <p class="owner__address">場所</p>
                        </div>
                    </div>
                    <p class="name">
                        商品名
                    </p>
                    <div class="property">
                        <dl>
                            <dt>出品日</dt>
                            <dd>1/10/2021（金）</dd>
                        </dl>
                        <dl>
                            <dt>価格</dt>
                            <dd>¥3,000〜</dd>
                        </dl>
                        <dl>
                            <dt>出品日</dt>
                            <dd>1,000</dd>
                        </dl>
                    </div>
                    <figure>
                        <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                    </figure>
                    <div class="icons">
                        <span class="icon__txt">
                            応募する
                        </span>
                        <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                        <span class="icon__txt">
                            お気に入り
                        </span>
                        <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                    </div>
                </div>
                <div class="c-product">
                    <div class="avatar">
                        <figure>
                            <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                        </figure>
                        <div class="owner">
                            <p class="owner__name">出品者名</p>
                            <p class="owner__address">場所</p>
                        </div>
                    </div>
                    <p class="name">
                        商品名
                    </p>
                    <div class="property">
                        <dl>
                            <dt>出品日</dt>
                            <dd>1/10/2021（金）</dd>
                        </dl>
                        <dl>
                            <dt>価格</dt>
                            <dd>¥3,000〜</dd>
                        </dl>
                        <dl>
                            <dt>出品日</dt>
                            <dd>1,000</dd>
                        </dl>
                    </div>
                    <figure>
                        <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                    </figure>
                    <div class="icons">
                        <span class="icon__txt">
                            応募する
                        </span>
                        <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                        <span class="icon__txt">
                            お気に入り
                        </span>
                        <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                    </div>
                </div>
                <div class="c-product">
                    <div class="avatar">
                        <figure>
                            <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                        </figure>
                        <div class="owner">
                            <p class="owner__name">出品者名</p>
                            <p class="owner__address">場所</p>
                        </div>
                    </div>
                    <p class="name">
                        商品名
                    </p>
                    <div class="property">
                        <dl>
                            <dt>出品日</dt>
                            <dd>1/10/2021（金）</dd>
                        </dl>
                        <dl>
                            <dt>価格</dt>
                            <dd>¥3,000〜</dd>
                        </dl>
                        <dl>
                            <dt>出品日</dt>
                            <dd>1,000</dd>
                        </dl>
                    </div>
                    <figure>
                        <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                    </figure>
                    <div class="icons">
                        <span class="icon__txt">
                            応募する
                        </span>
                        <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                        <span class="icon__txt">
                            お気に入り
                        </span>
                        <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                    </div>
                </div>
                <div class="c-product">
                    <div class="avatar">
                        <figure>
                            <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                        </figure>
                        <div class="owner">
                            <p class="owner__name">出品者名</p>
                            <p class="owner__address">場所</p>
                        </div>
                    </div>
                    <p class="name">
                        商品名
                    </p>
                    <div class="property">
                        <dl>
                            <dt>出品日</dt>
                            <dd>1/10/2021（金）</dd>
                        </dl>
                        <dl>
                            <dt>価格</dt>
                            <dd>¥3,000〜</dd>
                        </dl>
                        <dl>
                            <dt>出品日</dt>
                            <dd>1,000</dd>
                        </dl>
                    </div>
                    <figure>
                        <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                    </figure>
                    <div class="icons">
                        <span class="icon__txt">
                            応募する
                        </span>
                        <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                        <span class="icon__txt">
                            お気に入り
                        </span>
                        <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                    </div>
                </div>
                <div class="c-product">
                    <div class="avatar">
                        <figure>
                            <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                        </figure>
                        <div class="owner">
                            <p class="owner__name">出品者名</p>
                            <p class="owner__address">場所</p>
                        </div>
                    </div>
                    <p class="name">
                        商品名
                    </p>
                    <div class="property">
                        <dl>
                            <dt>出品日</dt>
                            <dd>1/10/2021（金）</dd>
                        </dl>
                        <dl>
                            <dt>価格</dt>
                            <dd>¥3,000〜</dd>
                        </dl>
                        <dl>
                            <dt>出品日</dt>
                            <dd>1,000</dd>
                        </dl>
                    </div>
                    <figure>
                        <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                    </figure>
                    <div class="icons">
                        <span class="icon__txt">
                            応募する
                        </span>
                        <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                        <span class="icon__txt">
                            お気に入り
                        </span>
                        <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('img/top/popular_bg.svg') }}" alt="" class="c-sec2__bg">
    </section>
    <section class="new u-mt350">
        <div class="inner">
            <div class="c-sec2__inner">
                <div class="title">
                    <h2 class="c-sec2__title">
                        新商品一覧
                    </h2>
                </div>
                <div class="c-sec2__list">
                    <div class="c-product">
                        <div class="avatar">
                            <figure>
                                <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                            </figure>
                            <div class="owner">
                                <p class="owner__name">出品者名</p>
                                <p class="owner__address">場所</p>
                            </div>
                        </div>
                        <p class="name">
                            商品名
                        </p>
                        <div class="property">
                            <dl>
                                <dt>出品日</dt>
                                <dd>1/10/2021（金）</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd>¥3,000〜</dd>
                            </dl>
                            <dl>
                                <dt>出品日</dt>
                                <dd>1,000</dd>
                            </dl>
                        </div>
                        <figure>
                            <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                        </figure>
                        <div class="icons">
                            <span class="icon__txt">
                            応募する
                        </span>
                            <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                            <span class="icon__txt">
                            お気に入り
                        </span>
                            <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                        </div>
                    </div>
                    <div class="c-product">
                        <div class="avatar">
                            <figure>
                                <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                            </figure>
                            <div class="owner">
                                <p class="owner__name">出品者名</p>
                                <p class="owner__address">場所</p>
                            </div>
                        </div>
                        <p class="name">
                            商品名
                        </p>
                        <div class="property">
                            <dl>
                                <dt>出品日</dt>
                                <dd>1/10/2021（金）</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd>¥3,000〜</dd>
                            </dl>
                            <dl>
                                <dt>出品日</dt>
                                <dd>1,000</dd>
                            </dl>
                        </div>
                        <figure>
                            <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                        </figure>
                        <div class="icons">
                            <span class="icon__txt">
                            応募する
                        </span>
                            <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                            <span class="icon__txt">
                            お気に入り
                        </span>
                            <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                        </div>
                    </div>
                    <div class="c-product">
                        <div class="avatar">
                            <figure>
                                <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                            </figure>
                            <div class="owner">
                                <p class="owner__name">出品者名</p>
                                <p class="owner__address">場所</p>
                            </div>
                        </div>
                        <p class="name">
                            商品名
                        </p>
                        <div class="property">
                            <dl>
                                <dt>出品日</dt>
                                <dd>1/10/2021（金）</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd>¥3,000〜</dd>
                            </dl>
                            <dl>
                                <dt>出品日</dt>
                                <dd>1,000</dd>
                            </dl>
                        </div>
                        <figure>
                            <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                        </figure>
                        <div class="icons">
                            <span class="icon__txt">
                            応募する
                        </span>
                            <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                            <span class="icon__txt">
                            お気に入り
                        </span>
                            <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                        </div>
                    </div>
                    <div class="c-product">
                        <div class="avatar">
                            <figure>
                                <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                            </figure>
                            <div class="owner">
                                <p class="owner__name">出品者名</p>
                                <p class="owner__address">場所</p>
                            </div>
                        </div>
                        <p class="name">
                            商品名
                        </p>
                        <div class="property">
                            <dl>
                                <dt>出品日</dt>
                                <dd>1/10/2021（金）</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd>¥3,000〜</dd>
                            </dl>
                            <dl>
                                <dt>出品日</dt>
                                <dd>1,000</dd>
                            </dl>
                        </div>
                        <figure>
                            <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                        </figure>
                        <div class="icons">
                            <span class="icon__txt">
                            応募する
                        </span>
                            <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                            <span class="icon__txt">
                            お気に入り
                        </span>
                            <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                        </div>
                    </div>
                    <div class="c-product">
                        <div class="avatar">
                            <figure>
                                <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                            </figure>
                            <div class="owner">
                                <p class="owner__name">出品者名</p>
                                <p class="owner__address">場所</p>
                            </div>
                        </div>
                        <p class="name">
                            商品名
                        </p>
                        <div class="property">
                            <dl>
                                <dt>出品日</dt>
                                <dd>1/10/2021（金）</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd>¥3,000〜</dd>
                            </dl>
                            <dl>
                                <dt>出品日</dt>
                                <dd>1,000</dd>
                            </dl>
                        </div>
                        <figure>
                            <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                        </figure>
                        <div class="icons">
                            <span class="icon__txt">
                            応募する
                        </span>
                            <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                            <span class="icon__txt">
                            お気に入り
                        </span>
                            <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                        </div>
                    </div>
                    <div class="c-product">
                        <div class="avatar">
                            <figure>
                                <img src="{{ asset('img/top/avatar.jpg') }}" alt="" class="avatar__pic">
                            </figure>
                            <div class="owner">
                                <p class="owner__name">出品者名</p>
                                <p class="owner__address">場所</p>
                            </div>
                        </div>
                        <p class="name">
                            商品名
                        </p>
                        <div class="property">
                            <dl>
                                <dt>出品日</dt>
                                <dd>1/10/2021（金）</dd>
                            </dl>
                            <dl>
                                <dt>価格</dt>
                                <dd>¥3,000〜</dd>
                            </dl>
                            <dl>
                                <dt>出品日</dt>
                                <dd>1,000</dd>
                            </dl>
                        </div>
                        <figure>
                            <img src="{{ asset('img/top/product_img1.jpg') }}" alt="" class="pic">
                        </figure>
                        <div class="icons">
                            <span class="icon__txt">
                            応募する
                        </span>
                            <img src="{{ asset('img/common/icon_message.svg') }}" alt="" class="icon__pic">
                            <span class="icon__txt">
                            お気に入り
                        </span>
                            <img src="{{ asset('img/common/icon_heart.svg') }}" alt="" class="icon__pic">
                        </div>
                    </div>
                </div>
                <div class="u-center">
                    <a href="{{ route('product.index') }}" class="u-btn c-sec2__btn">商品リストに行く</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('img/top/new_bg.svg') }}" alt="" class="c-sec2__bg">
    </section>
    <section class="faq">
        <div class="inner">
            <div class="u-center">
                <h2 class="c-sec__title">
                    FAQ
                </h2>
                <h3 class="c-sec__lead">
                    よくある質問
                </h3>
            </div>
            <div class="list">
                <div class="item">
                    <p class="lead">タイトルを入力します。タイトルを入力します。タイトルを入力し</p>
                    <p class="txt">
                        内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。<br> 内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。
                    </p>
                </div>
                <div class="item">
                    <p class="lead">タイトルを入力します。タイトルを入力します。タイトルを入力し</p>
                    <p class="txt">
                        内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。<br> 内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。
                    </p>
                </div>
                <div class="item">
                    <p class="lead">タイトルを入力します。タイトルを入力します。タイトルを入力し</p>
                    <p class="txt">
                        内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。<br> 内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。
                    </p>
                </div>
                <div class="item">
                    <p class="lead">タイトルを入力します。タイトルを入力します。タイトルを入力し</p>
                    <p class="txt">
                        内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。<br> 内容を入力します。内容を入力します。内容を入力します。内容を入力します。内容を入力します。
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="contact">
        <div class="inner">
            <div class="u-center">
                <h2 class="c-sec__title">
                    Contact
                </h2>
                <h3 class="c-sec__lead">
                    お問い合わせ
                </h3>
                <form action="">
                    <div class="list">
                        <div class="row">
                            <div class="label"><span>名前</span><span class="required">必須</span></div>
                            <div class="control">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="label"><span>メールアドレス</span><span class="required">必須</span></div>
                            <div class="control">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="label"><span>内容</span><span class="required">必須</span></div>
                            <div class="control">
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="u-center">
                        <a href="#" class="u-btn btn">送信</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p class="u-center">copyright (c) Marutto all rights reserved.</p>
    </footer>
</div>
@endsection