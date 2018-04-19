@extends('layouts.appLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">MY Today Meal</div>
                    {!! Form::open(array('route'=>'mymc.store'))!!}
                        <div class="panel-body">
                        <form class="form-group" >

                        <div >
                            <label for="lunch" class="col-md-4 control-label">Lunch</label>

                            <div class="col-md-6">
                                <input id="lunch" type="text" class="form-control" name="lunch" required>
                            </div>
                        </div>

                        <div >
                            <label for="diner" class="col-md-4 control-label">	Diner</label>

                            <div class="col-md-6">
                                <input id="	diner" type="	text" class="form-control" name="diner" required>
                            </div>
                        </div>
                        <div>
                            
                            <label for="buzzerDetail" class="control-label"> 
                                {!! Form::submit('Update My Today Meal Status',$attributes=array('class'=>'btn btn-info'))!!}
                             </label>

                        </div>

                </div>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>

@endsection