@extends('layouts.appLayout')

@section('content')
<div class="col-md-10 control-label">
	
	<table class="table ">
		<tr>
			<th >Buzzer_ID</th>
			<th>Item</th>
			<th>Taka</th>
			<th>Date</th>
		</tr> 
		@foreach ($userBazzerInfo as $user)
		<tr >
			<td>{{$user->id}}</td>
			<td>{{$user->item}}</td>
			<td>{{$user->price}}</td>
			<td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}
</td>

		</tr>
		
		@endforeach
	</table>

</div>

@endsection