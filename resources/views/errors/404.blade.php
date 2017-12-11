   @extends('includes.header')

   @section('pagetitle')
   <title>FlyBoy Inc:: Page Not found </title>
   @endsection



    @section('pagelink')
    <link href="{{ URL::to('css/404.css') }}" rel="stylesheet" />
    @endsection


@section('pageContent')
  <section id="error404">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="cartoon">
            <img id="flyimage" src="img/flyer.png" class="img-responsive animated fadeInDown" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-side">
            <h2>Sorry, you just stopped flying with FLYBOY</h2>
            <p>The page you tried visiting does not exist</p>
            <a href="{{ route('user.index') }}" class="btn btn-primary btn-lg" id="flybutton">Continue flying</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('afterbodyContent')

  <script>
  $('document').ready(function(e){
    var url =  '{{ route('user.index') }}';
      $('#flybutton').click(function(event){
           console.log("fly clicked");
           $('#flyimage').addClass('fadeOutUp');
           window.location = url;
      })
  })
  </script>

@endsection

