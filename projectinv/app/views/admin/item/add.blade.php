$labelStyles = 'col-sm-2 control-label';
$containerSize = 'col-sm-10';
$errorMessageContainer = '

:message

';
?>
{{– Page template –}}
@extends('templates.admin')

{{– Page title –}}
@section('title')
Add item
@stop

{{– Page specific CSS files –}}
{{– {{ HTML::style('–Path to css–') }} –}}
@section('css')

@stop

{{– Page specific JS files –}}
{{– {{ HTML::script('–Path to js–') }} –}}
@section('scripts')

@stop

{{– Page content –}}
@section('content')

{{ Form::open(array('url' => 'admin/items/add' , 'role' => 'form' ,'class' => 'form-horizontal')) }}
{{ Form::label('name', 'Name' , array( 'class' => $labelStyles ) ) }}
{{ Form::text('name', Input::old('name') , array('style' => ”) ); }}
{{ $errors->first('name', $errorMessageContainer ) }}

{{ Form::label('description', 'Description' , array( 'class' => $labelStyles ) ) }}
{{ Form::textarea('description', Input::old('description') , array() ); }}
{{ $errors->first('description', $errorMessageContainer ) }}

{{ Form::submit('Add item' , array('class' => 'btn btn-default') ) }}
{{ Form::close() }}

@stop