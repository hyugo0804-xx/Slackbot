<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('/css/inquiry.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/reset.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/menu.js"></script>
    <title>RING TECH INC</title>
    @section('script')
    @show
  </head>
  
    <div class="main">
              @yield('content')
    </div>
   
</html>