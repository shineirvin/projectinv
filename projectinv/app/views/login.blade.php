@extends('layout1')

@section('content')
<center>
    <table class="table-common" bgcolor="#999999">
    <tr>
      <td width="1" align="center"  bgcolor="#FFFFFF"></td>
      <h2>LOGIN USER</h2>
    </tr>
    </table>
</center>

    <!-- check for login error flash var -->
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif

    {{ Form::open(array('route' => 'login')) }}

    <!-- username field -->
    <center>
        {{ Form::label('username', 'Username') }}<br/>
        {{ Form::text('username', Input::old('username'),array('placeholder'=>'Username')) }}
    </center>
<br> 
    <!-- password field -->
    <center>
        {{ Form::label('password', 'Password') }}<br/>
        {{ Form::password('password',array('placeholder'=>'Password')) }}
    </center>

    <!-- submit button -->
     <p class="lead"> </p>
     <center>
              <button class="btn btn-success" type="Submit" value="Login">Login</button>
            </center>
  

    {{ Form::close() }} 

@stop