@extends('layout1')

@section('content')

<center>
    <table class="table-common" bgcolor="#999999">
    <tr>
      <td width="1" align="center"  bgcolor="#FFFFFF"></td>
      <h2>Register Form</h2>
    </tr>
    </table>
</center>

 @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif

   {{ Form::open(array('route' => 'register')) }}

   @if($errors->any())
   <ul>
   {{ implode ('', $errors->all('<li>:message</li>'))}}
   </ul>
   @endif

   	<center>
        {{ Form::label('firstname', 'First Name') }}<br/>
        {{ Form::text('regfirst', Input::old('First Name'),array('placeholder'=>'First Name')) }}
    </center>
    <br>

    <center>
        {{ Form::label('lastname', 'Last Name') }}<br/>
        {{ Form::text('reglast', Input::old('Last Name'),array('placeholder'=>'Last Name')) }}
    </center>
    <br>

   	<center>
        {{ Form::label('reguser', 'Username') }}<br/>
        {{ Form::text('reguser', Input::old('Username'),array('placeholder'=>'Username')) }}
    </center>
    <br>

    <center>
        {{ Form::label('regpass', 'Password') }}<br/>
        {{ Form::password('password',array('placeholder'=>'Password')) }}
    </center>
    <br>

    <center>
        {{ Form::label('cregpass', 'Re-Type Password') }}<br/>
        {{ Form::password('cpassword',array('placeholder'=>'Re-Type Password')) }}
    </center>
    <br/>

    <center>
    	{{ Form::label('roles', 'Roles') }}<br/>

     	{{ Form::select('roles', [
   		null => null ,
   		'Owner' => 'Owner',
   		'Supplier' => 'Supplier',
   		'Admin' => 'Admin']
		) }}


    </center>
    <br>

    <p class="lead"> </p>
    <center>
              <button class="btn btn-success" type="Summit" value="register">Register</button>
            </center>

       {{ Form::close() }}

       

@stop