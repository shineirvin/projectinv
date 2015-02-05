@extends('layout1')

@section('content')

<center>
    <table class="table-common" bgcolor="#999999">
    <tr>
      <td width="0" align="center"  bgcolor="#FFFFFF"></td>
      <h2>Database Table</h2>
    </tr>
    </table>
</center>

<div class="container">
	<table id="data" class="table-common" cellspacing="0" width="100%">
		<thead>
		<tr>	
			<td> First Name </td>
			<td> Roles </td>
			<td> Action </td>
		</tr>
		</thead>
	<tbody>
		 <tr>
			<th></th>
			<th></th>
			<th></th>

		</tr>
    </tbody>

	</table>
</div>
<script type="text/javascript" charset="utf8" src="js/data.js"></script>

@stop