@extends('layouts.front')

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@section('content')
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab" action="{{route('updateProfile')}}" method="POST">
          @csrf
            <label>Username</label>
            <input type="text" name="name" value="{{$user->name}}" class="input-xlarge">
            <label>Email</label>
            <input type="text" name="email" value="{{$user->email}}" class="input-xlarge">
            <label>Address</label>
            <input type="text" name="address" value="{{$user->address}}" class="input-xlarge">
          	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
        </form>
      </div>
      
  </div>
</div>
 
  <table class="table table-bordered">
    <thead>
    <tr>
        <th>User</th>
        <th>Order_Total</th>
        <th>updated_at</th>
        <th>created_at</th>
    </tr>
    </thead>
    @foreach($order as $item)
       
        <tr>
            <td>{{$item->user->name}}</td>
            <td>{{$item->order_total}}</td>
            <td>{{$item->updated_at}}</td>
            <td>{{$item->created_at}}</td>
            <td>
               <form method="post" action="{{route('Cust')}}">
              @csrf
              <button>View Details</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>

    @endsection