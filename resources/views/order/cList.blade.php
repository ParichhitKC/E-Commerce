@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<div class="app-title">
   
 <div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th> Placed By </th>
                        
                        <th class="text-center"> Payment Status </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ Auth::user()->name }}</td>


                            {{-- <td class="text-center">
                                @foreach ($order as $orders)
                                    
                                
                                @if ($orders->payment_status == 1)
                                    <span class="badge badge-success">Completed</span>
                                @else
                                    <span class="badge badge-danger">Not Completed</span>
                                @endif
                                @endforeach
                            </td>
                            {{-- <td class="text-center">
                                <span class="badge badge-success">{{ $order->status }}</span>
                            </td>
                             --}} 
                        </tr>
                     
                    </tbody>
                </table>
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th> Order Number </th>
                            <th class="text-center"> Total Amount </th>
                        <th class="text-center"> Items Qty </th>
                        
                        <th class="text-center">  Name </th>
                        
                    </tr>
                    </thead>
                <tbody>
                    @foreach ($order->OrderItem as $list)
                    <tr>
                    
                            <td>{{ $list->order_id }}</td>
                            <td class="text-center">{{ config('settings.currency_symbol') }}{{ $list->price}}</td>
                            <td class="text-center">{{ $list->quantity }}</td>    
                            <td class="text-center">{{ $list->product }}</td>    
                          
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
