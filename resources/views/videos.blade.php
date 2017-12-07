@extends('includes.header')

    @section('title')
    <title>Flyboy Inc :: Videos </title>
    @endsection

    @section('pagelink')
    <link href="css/video.css" rel="stylesheet" />
    @endsection


  @section('pageContent')

  <section id="video-player">
    <div class="container-fluid">
      <div class="row">
        <h1>THE VIDEO PLAYER TAKES THIS DIV</h1>
      </div>
    </div>
  </section>
  <section id="videos">
    <div class="container">
      <div class="row">
          <h2>VIDEOS</h2>
      </div>
      <div class="row">
        <div class="grid-item col-md-4">
          <div class="video">
            {{-- <a href="#"><img class="img-responsive" src="img/sliders/slider-1.jpg" alt=""></a> --}}
            <iframe width="350" height="250" style="margin-bottom:50px;" src="https://www.youtube.com/embed/zW1Hu10ox7c" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen class="img-responsive"></iframe>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-4.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-1.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-6.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
        <div class="grid-item col-md-4">
          <div class="video">
            <a href="#"><img class="img-responsive" src="img/sliders/slider-4.jpg" alt=""></a>
            <div class="video-details">
              <h3>Song Title</h3>
              <p>ALBUM CATEGORY</p>
            </div>
            <div class="row play-video">
              <a href="#" class=" btn btn-primary"><i class="fa fa-play-circle-o"></i>Watch Video</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row load-more-videos">
        <a href="" class="btn btn-primary">Load more videos</a>
      </div>
    </div>
  </section>
@endsection
