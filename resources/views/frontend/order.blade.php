<table class="table table-bordered">
    <thead>
    <tr>
        <th>User</th>
        <th>Order_Total</th>
        <th>is_paid</th>
        <th>payment_method</th>
        <th>order_status</th>
        <th>updated_at</th>
        <th>created_at</th>
    </tr>
    </thead>
    @foreach($order as $item)
        <form method="post" action="{{route('Adminorder',$item->id)}}">
            @csrf
            <tr>
                <td>{{$item->user->name}}</td>
                <td>{{$item->order_total}}</td>
                <td>{{$item->is_paid}}</td>
                <td>{{$item->payment_method}}</td>

                <td><select class="target" name="order_status">
                        <option value="1" {{$item->order_status == '1' ? 'selected' : ''}}>Order Placed</option>
                        <option value="2" {{$item->order_status == '2' ? 'selected' : ''}}>Delivery On the way</option>
                        <option value="3" {{$item->order_status == '3' ? 'selected' : ''}}>Delivered</option>
                    </select></td>

                <td>{{$item->updated_at}}</td>
                <td>{{$item->created_at}}</td>
                <td> <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> </td>
            </tr>
        </form>
    @endforeach
</table>
