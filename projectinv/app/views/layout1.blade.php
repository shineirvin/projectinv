<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shashank Shree Neupane">

	{{ HTML::style('css/grid.css') }}
	{{ HTML::style('css/layout.css') }}
	{{ HTML::style('css/text.css') }}
	{{ HTML::style('css/nav.css') }}
	{{ HTML::style('css/reset.css') }}
	{{ HTML::style('css/jquery.dataTables.css') }}

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/jquery.dataTable.bootstrap.css" rel="stylesheet" type="text/css" media="screen" />	
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />

	  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  		<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>



	<title>Inventory Management</title>
	
</head>
<body>
	<div class="container_12">
      <div class="grid_12 header-repeat">
            <div id="branding">
            	 <h5>{{ link_to_route('home', 'Sistem Manajemen Asset') }}</h5>
              		
            </div>
      </div>

<div class="grid_12">
					<ul class="nav main">	 				
				
				@if(Auth::check())
				
				{{-- ********show this if the user is superadmin******** --}}
				
				@if(Auth::user()->roles === "Owner")
					<li>{{ link_to_route('register', 'Register') }}</li>
					<li>{{ link_to_route('database', 'Database') }}</li>
				@endif
				
					<li>{{ HTML::link('profile', 'Profile' ) }}</li>
					<li>{{ link_to_route('logout', 'Logout ('.Auth::user()->username.') as ('.Auth::user()->roles.') ') }}</li>
				@else
					<li>{{ link_to_route('login', 'Login', $parameters = array(), $attributes = array());}}</li>
				@endif
					</ul>

</div>
<div class="clear">
        </div>
		<!-- check for flash notification message -->
		@if(Session::has('flash_notice'))
			<div id="flash_notice">
			<p>{{ Session::get('flash_notice') }}</p>
			</div>
		@endif
	
	<div class="grid_10">
        <div class="box round first">
            @yield('content')
        </div>
	</div>      

    			<div class="clear"> </div>
            		<div id="site_info">
        				<p>Copyright <a href="http://facebook.com/irvinjefferson" target="_blank">Life is beautiful</a>. All Rights Reserved.</p>
    				</div>


  </body>
  
</html>