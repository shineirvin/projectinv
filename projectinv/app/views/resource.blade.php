@extends('layout1')

@section('content')

<center>
    <table class="table-common" bgcolor="#999999">
    <tr>
      <td width="1" align="center"  bgcolor="#FFFFFF"></td>
      <h2>User Profile</h2>
    </tr>
    </table>
</center>

<div class="container">

<h1>Showing {{ $user->firstname }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $user->firstname }} {{ $user->lastname }}</h2>
        <p>
            <strong>Username : </strong> {{ $user->username }}<br>
            <strong>Roles : </strong> {{ $user->roles }}
</div>


@stop