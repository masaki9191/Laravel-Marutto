<div class="sidebar sp-hidden">
    <div class="list">
        <a class="{{ $active == 'dashboard' ? 'active' : '' }}" href="dashboad.html" ><span><img src="{{ asset('img/common/icon_dashboad.svg') }}" alt=""></span><span>ホーム画面</span></a>
        <a class="{{ $active == 'product' ? 'active' : '' }}" href="{{ route('product.index') }}" ><span><img src="{{ asset('img/common/icon_list.svg') }}" alt=""></span><span>製品一覧</span></a>
        <a class="{{ $active == 'exhibit' ? 'active' : '' }}" href="{{ route('exhibit.index') }}"><span><img src="{{ asset('img/common/icon_list.svg') }}" alt=""></span><span>出品一覧</span></a>
        <a class="{{ $active == 'payment' ? 'active' : '' }}" href="{{ route('card.index') }}"><span><img src="{{ asset('img/common/icon_list.svg') }}" alt=""></span><span>お支払い</span></a>
        <a class="{{ $active == 'logout' ? 'active' : '' }}" onclick="logout()"><span><img src="{{ asset('img/common/icon_help.svg') }}" alt=""></span><span>ログアウト</span></a>
        <a class="{{ $active == 'exit' ? 'active' : '' }}" href=""><span><img src="{{ asset('img/common/icon_help.svg') }}" alt=""></span><span>退会</span></a>
    </div>
    @include('components.topGo')
</div>