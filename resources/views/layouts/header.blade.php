<div class="l-header">
    <div class="top">
        <div class="left">
            <form action="{{route('product.index')}}" id="searchForm" name="searchForm">
                <a class="logo" href="{{route('welcome')}}">
                    <img src="{{ asset('img/common/logo.svg') }}" alt="">
                </a>
                <div class="c-search sp-hidden">
                    <input type="text" placeholder="なにをお探しですか？" id="search_title"  name="search_title">
                </div>
                <button type="submit" class="sp-hidden">検索する</button>
            </form>
        </div>
        <div class="right">
            @if(Auth::check())
            <div class="cart dropdown">
                <img src="{{ asset('img/common/icon_shipping_out.svg') }}" alt="" class="icon">
                @php $total_price = 0; $cart=(array) session('cart'); @endphp
                @foreach( $cart as $id => $details)
                    @php $total_price += $details['price'] * $details['quantity'] @endphp
                @endforeach
                <span>{{ count($cart); }}</span>
                <div class="dropdown__content">
                    <div class="dropdown__lead">
                        <p><span>Cart</span><span class="u-red">合計 ¥{{$total_price}}¥</span></p>
                    </div>
                    <div class="cart__list">
                        @foreach( $cart as $id => $details)
                            <a href="{{ route('product.show',$id) }}" class="cart__item">
                                <img src="{{ $details['image'] }}" alt="">
                                <p>{{ $details['name'] }}</p>
                            </a>
                        @endforeach
                    </div>
                    <div class="dropdown__bottom">
                        <a href="{{ route('cart'); }}"> カートに行く</a>
                    </div>
                </div>
            </div>
            <!-- <div class="notification dropdown">
                <img src="{{ asset('img/common/icon_ring.svg') }}" alt="" class="icon">
                <span>1</span>
                <div class="dropdown__content">
                    <div class="dropdown__lead">
                        <p>お知らせ</p>
                    </div>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                    <a href="" class="dropdown__item">サイトリニューアルしました！</a>
                </div>
            </div> -->
            <div class="profile dropdown">
                <img src="{{ asset('img/common/avatar.jpg') }}" alt="">
                <div class="dropdown__content">
                    <a href="dashboad.html" class="dropdown__item">ホーム画面</a>
                    <a href="{{ route('product.index') }}" class="dropdown__item">製品一覧</a>
                    <a href="{{ route('exhibit.index') }}" class="dropdown__item">出品一覧</a>
                    <a onclick="logout()" class="dropdown__item">ログアウト</a>
                    <a href="" class="dropdown__item">退会</a>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <a href="{{ route('login') }}" class="u-btn first">ログイン</a>
            <a href="{{ route('register') }}"  class="u-btn">新規登録</a>
            @endif
        </div>
    </div>
    <div class="bottom pc-hidden">
        <form action="#">
            <div class="c-search">
                <input type="text" placeholder="なにをお探しですか？">
            </div>
            <button type="submit" class="btn">出品する</button>
        </form>
    </div>
</div>