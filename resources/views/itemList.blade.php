
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-3Wiw5zC39JZ5r5P5j6f5+qLtuX7y5p6U2V7yzeQ44RK0EWO1ZprJowUKMU0P+oLd" crossorigin="anonymous"> --}}

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Research Management Centre</title>
    <style>

    </style>
</head>

<body>
  @include('header')
    <main>
       
        <div class="row">
            <div class="col-3">
                @include('folderSystem')
              
            </div>
            <div class="col-9 divider">
            @include('table')
            </div>
       
    </main>
</body>

</html>