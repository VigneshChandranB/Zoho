<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Admin</title>

       
	   
	   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
       <link href="{{ Module::asset('admin:Resources/assets/css/all.min.css') }}" rel="stylesheet" /> 
 	   <link href="{{ Module::asset('admin:Resources/assets/css/adminlte.min.css') }}" rel="stylesheet" /> 
 	   <link href="{{ Module::asset('admin:Resources/assets/css/icheck-bootstrap.min.css') }}" rel="stylesheet" /> 
 	   
  

    </head>
    <body>
        @yield('content')

       
		<script src="{{ Module::asset('admin:Resources/assets/js/jquery.min.js') }}"></script>
		<script src="{{ Module::asset('admin:Resources/assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ Module::asset('admin:Resources/assets/js/adminlte.min.js') }}"></script>
		


    </body>
</html>
