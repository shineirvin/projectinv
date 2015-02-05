<!doctype html>

@yield('title')

{{ HTML::style('assets/css/bootstrap.min.css') }}
{{ HTML::style('assets/css/bootstrap-theme.min.css') }}
@yield('css')

{{ HTML::script('assets/js/jquery.js') }}
@yield('scripts')

@yield('content')

On the template file I already added the common CSS and JS file that we will be needing. Now back to our add.blade.php content.

We have use bootstrap's horizontal form. Then I added


$labelStyles = 'col-sm-2 control-label';
$containerSize = 'col-sm-10';
$errorMessageContainer = '

:message

';