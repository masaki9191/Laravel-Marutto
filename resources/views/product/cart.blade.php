@extends('layouts.main')
@section('css')
@endsection
@section('content')
<div class="p-productCart">
    <div class="inner u-inner-1200">
        @if(session('cart_success'))
            <div class="u-alert success">
                {{ session('cart_success') }}
            </div>
        @endif
        @php $total = 0 @endphp
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <td>商品名</td>
                        <td>価格</td>
                        <td>数量</td>
                        <td>小計</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>                        
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr data-id="{{ $id }}">
                                <td data-th="Product">
                                    <div>
                                        <p class="product-img"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></p>
                                        <p class="product-name">
                                            {{ $details['name'] }}
                                        </p>
                                    </div>
                                </td>
                                <td data-th="Price">¥{{ $details['price'] }}</td>
                                <td data-th="Quantity">
                                    <input type="number" value="{{ $details['quantity'] }}" class="quantity update-cart" />
                                </td>
                                <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}¥</td>
                                <td class="actions" data-th="">
                                    <button class="remove-cart"><img src="{{ asset('img/common/icon_trash_white.svg') }}" alt="" width="15px"></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"><h3><strong>合計: ¥{{ $total }}</strong></h3></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="u-center btn">
            <a href="{{route('product.index')}}" class="u-btn u-btn-gray sm">ショッピングを続ける</a>
            @if( $total != 0)
            <a href="{{route('card.index')}}"  class="u-btn u-btn-black sm">チェックアウト</a>
            @endif
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: "{{ route('cart.update') }}",
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("削除してもよろしいですか?")) {
            $.ajax({
                url: "{{ route('cart.remove') }}",
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection