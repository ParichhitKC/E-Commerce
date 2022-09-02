<h1>Billing Details</h1>


    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <input type=radio name="payment-type" value="cash on delivery">Cash on Delivery</input>
    </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <input type=radio name="payment-type" value="khalti">Khalti</input>
    </div>
   
     <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-6">
            <input type="text" id="name" placeholder="Your Name" class="form-control" v-model="input.name">
        </div>
    </div>
    <div class="form-group row">
        <label for="Phone Number" class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-6">
                    <input type="text" id="name" placeholder="Phone-Number" class="form-control" v-model="input.name">
                </div>
            </div>
            <div class="form-group row">
                <label for="Phone Number" class="col-md-4 col-form-label text-md-right"> </label>
                <div class="col-md-6">
                    <input type="text" id="name" placeholder="Your Address" class="form-control" v-model="input.name">
                </div>
            </div>
            <div class="form-group row">
                <label for="details" class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-6">
                    <input type="text" id="comment" placeholder="Details"class="form-control" v-model="input.comment">
                </div>
            </div>
            <button id="payment-button"  type="submit" class="payment-button">Proceed Order</button>


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
        btn.onclick = function (e) {
            e.preventDefault();
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>

</section>
    

