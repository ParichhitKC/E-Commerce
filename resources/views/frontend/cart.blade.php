
@extends('layouts.front')
@section('content')
@foreach($products as $product)
<section id="cart" class="section-p1">
{{--    <form action="{{ route('cart.store',$product->id) }}" method="POST" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <input type="hidden" value="{{ $product->id }}" name="prod_id">--}}
{{--        <h4>${{$product->price}}</h4>--}}
{{--        <img src="{{asset('images/'.$product->file)}}" alt="" style="height: 30vh;">--}}
{{--        <input type="hidden" value="1" name="quantity">--}}
{{--        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>--}}
{{--    </form>--}}
{{--    <table width="100%">\--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <td>Remove</td>--}}
{{--            <td>Image</td>--}}
{{--            <td>Product</td>--}}
{{--            <td>Price</td>--}}
{{--            <td>Quantity</td>--}}
{{--            <td>SubTotal</td>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td><a href="#"><i class="fa fa-times-circle"></i></a></td>--}}
{{--            <td><img src="./assets/img/products/f1.jpg" alt=""></td>--}}
{{--            <td>Cartoon Astrounaut T-Shirt</td>--}}
{{--            <td>$118.19</td>--}}
{{--            <td><input type="number" value="1"></td>--}}
{{--            <td>$118.19</td>--}}
{{--        </tr>--}}

{{--        <tr>--}}
{{--            <td><a href="#"><i class="fa fa-times-circle"></i></a></td>--}}
{{--            <td><img src="./assets/img/products/f2.jpg" alt=""></td>--}}
{{--            <td>Cartoon Astrounaut T-Shirt</td>--}}
{{--            <td>$118.19</td>--}}
{{--            <td><input type="number" value="1"></td>--}}
{{--            <td>$118.19</td>--}}
{{--        </tr>--}}

{{--        <tr>--}}
{{--            <td><a href="#"><i class="fa fa-times-circle"></i></a></td>--}}
{{--            <td><img src="./assets/img/products/f3.jpg" alt=""></td>--}}
{{--            <td>Cartoon Astrounaut T-Shirt</td>--}}
{{--            <td>$118.19</td>--}}
{{--            <td><input type="number" value="1"></td>--}}
{{--            <td>$118.19</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
</section>
@endforeach
<section id="cart-add">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button class="button-normal">Apply</button>
        </div>
    </div>
    @if(isset($cart))
    <div id="subtotal">
        <h3>Cart</h3>

        <table>
            @php $total = 0 @endphp
            <thead>
            <tr>
                <th >Product</th>
                <th >Price</th>
                <th >Quantity</th>
                <th >Subtotal</th>
                <th> Remove</th>
            </tr>
            </thead>
            @foreach($cart as $product=>$b)
                @php $total += $b['price'] * $b['quantity'] @endphp

                <tr>
                <td>{{$b['name']}}</td>
                <td>${{$b['price']}}</td>
                <td>{{$b['quantity']}}</td>
                <td data-th="Subtotal" class="text-center">${{ $b['price'] * $b['quantity'] }}</td>

                <td>
                <form action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $product }}" name="product_id">
                    <button type="submit" class="px-4 py-2 text-white bg-red-600">x</button>
                </form>

                </td>
                </tr>

            @endforeach

<tfoot>
            <tr>
                <td colspan="5" class="text-left"><h3><strong>Total ${{ $total }}</strong></h3></td>
            </tr>
</tfoot>



            {{--            <tr>--}}
{{--                <td>Shipping</td>--}}
{{--                <td>Free</td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <td><strong>Total</strong></td>--}}
{{--                <td><strong>$335</strong></td>--}}
{{--            </tr>--}}
{{--                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>--}}

        </table>
        <form action="{{route('order.cust')}}" method="post">
            @csrf
            <input type="hidden" value="{{ $total }}" name="Total">
        <button class="button-normal">Proceed to checkout</button>
        </form>
    </div>@endif
    <div class="content">
        <form action="https://uat.esewa.com.np/epay/main" method="POST">
            <input value="{{$total}}" name="tAmt" type="hidden">
            <input value="{{$total}}" name="amt" type="hidden" >
            <input value="0" name="txAmt" type="hidden">
            <input value="0" name="psc" type="hidden">
            <input value="0" name="pdc" type="hidden">
            <input value="epay_payment" name="scd" type="hidden">
            <input value="123456789147" name="pid" type="hidden">
            <input value="http://127.0.0.1:8000/esewa/sucess" type="hidden" name="su">
            <input value="http://127.0.0.1:8000/cart" type="hidden" name="fu">
            <input value="Submit" type="submit">
        </form>

    </div>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <button id="payment-button">Pay with Khalti</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_190eb542e62b4ce18dd421d052d9544f",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    $.ajax({
                        type : 'POST',
                        url : "{{ route('khalti.verifyPayment') }}",
                        data: {
                            token : payload.token,
                            amount : payload.amount,
                            "_token" : "{{ csrf_token() }}"
                        },
                        success : function(res){
                            $.ajax({
                                type : "POST",
                                url : "{{ route('khalti.storePayment') }}",
                                data : {
                                    response : res,
                                    "_token" : "{{ csrf_token() }}"
                                },
                                success: function(res){
                                    console.log('transaction successfull');
                                }
                            });
                            console.log(res);
                        }
                    });
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };
        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>

</section>
    @endsection

@section('scripts')
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

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
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
