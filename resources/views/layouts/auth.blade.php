

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href=" {{asset('assets/css/main/app.css')}} ">

</head>

<body>

            
            <div id="main-content " class= " mt-5"  >
                  @yield('content') 
            </div>
 
      

    
</body>

</html>
 