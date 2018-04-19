@extends('layouts.appLayout')
@section('content')
@section('content')
<div class="container">
    <div class=" row-md-10"> 
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">MY Today Buzzer</div>
                {!! Form::open(array('route'=>'mtb.store'))!!}
                <div class="panel-body">
                    <div class="form-group">
                	   <label for="buzzerDetail" class="control-label">Buzzer Detail</label>
                	   <input id="buzzer_Item" type="text" class="col-md-4 form-control" name="item" required >
                    </div>
                
                    <div class="form-group">
                	   <label for="buzzer_Taka" class=" control-label">Buzzer Cost</label>
                	   <input id="buzzer_Taka" type="text" class="col-md-4 form-control" name="price" required >
                    </div>
                    <div>
                        <label for="buzzerDetail" class="control-label"> 
                            {!! Form::submit('Add Today Buzzer',$attributes=array('class'=>'btn btn-info'))!!}
                        </label>	
                    </div>
                </div>

                {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@endsection
