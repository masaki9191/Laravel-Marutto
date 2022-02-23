@extends('layouts.main')
@section('css')

@endsection
@section('content')
<div class="p-mypageExhibitIndex container">
    @include('layouts.sidebar', ['active' => 'exhibit'])
    <div class="content">
        <div class="content-top">
            <h2 class="title">
                出品リスト
            </h2>
            <div class="controls">
                <a class="u-btn u-btn-black sm" href="{{ route('exhibit.create') }}">追加</a>
            </div>
        </div>
        @if (session('status'))
            <div class="u-alert danger">
                {{ session('status') }}
            </div>
        @endif
        <div class="list">
            @forelse($exhibits as $exhibit)
                <a class="item" href="{{ route('exhibit.show',$exhibit->id) }}">
                    <img src="{{ $exhibit->thumbnail != null? $exhibit->thumbnail : '' }}" alt="">
                    <p class="item__txt">{{$exhibit->title}}</p>
                </a>
            @empty
                資料がありません。
            @endforelse            
        </div>
        <div class="d-flex justify-content-center">
            {!! $exhibits->links('vendor.pagination') !!}
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection