<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Gym Supplements</title>
    </style>
  </head>
  <body>
    @include('includes.navbar')
<div class="container">
  @if(Request::is('/'))
@include('includes.showcase')
@endif
  <div class="row">
    <div class="col-md-8 col-lg-8">
        @yield('content')
    </div>
        <div class="col-md-4 col-lg-4">
          @include('includes.sidebar')
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
