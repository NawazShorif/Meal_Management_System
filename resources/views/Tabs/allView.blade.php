@extends('layouts.appLayout')

@section('content')
<div class="col-md-10 control-label">
	
	<table class="table table-boarder">
		<tr>
			<th>User_Id</th>
			<th>User Name</th>
			<th>user_total_Meal</th>
			<th>user Given Balance</th>
			<th>user Avaible Balance</th>
		</tr>
		@foreach ($allUserTotalView as $user)
		<div class=" control-label"><tr >
			<td>{{$user->id}}</td>
			<td>{{$user->username}}</td> 
			<td>{{$user->meal}}</td>
			<td>{{$user->giventk}}</td>
			<td>{{$user->availabletk}}</td>

			</tr></div>
		
		@endforeach
	</table>

</div>
@endsection