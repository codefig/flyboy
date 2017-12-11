@extends('includes.header')

    @section('title')
    <title>FlyBoy Inc :: Error </title>
    @endsection

    @section('pagelink')
        <link href="{{ URL::to('css/500.css') }}" rel="stylesheet" />
    @endsection
</head>

<body>
  <section id="error500">
    <div class="container">
      <div class="row">
        <h2>Sorry, we promised to fix this !</h2>
      </div>
      <div class="row">
        <a href="{{ route('user.index') }}" class="btn btn-primary btn-lg">Reload page</a>
      </div>
    </div>
  </section>
</body>

</html>
