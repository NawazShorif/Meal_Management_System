@extends('layouts.appLayout')

@section('content')
<div class="col-md-10 control-label">
	
	<table class="table "> 
		<tr>
			<th>Meal ID</th> 
			<th>Name</th>
			<th>Lunch</th>
			<th>Diner</th>
			<th>Date</th>
		</tr>
		@foreach ($userMealInfo as $user)
		<div class=" control-label"><tr >
			<td>{{$user->id}}</td>
			<td>{{$user->uzzerKarirnam}} </td>
			<td>{{$user->lunch}}</td>
			<td>{{$user->diner}}</td>
			<td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}
</td>

			</tr></div>
		
		@endforeach
	</table>

</div>

@endsection