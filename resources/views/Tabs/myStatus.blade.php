@extends('layouts.appLayout')

@section('content')

<div class="col-md-10 control-label">
	<h3>User Name :  {{$userStatusData->username}}</h3>
     <h3>Your Blance:   {{$userStatusData->giventk}}</h3>
     <h3>Your  Khawa Mill:  {{$userStatusData->meal}} </h3>
     <h3>Your  available balance :  {{$userStatusData->availabletk}} </h3>  
</div>
 
@endsection