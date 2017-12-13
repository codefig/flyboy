@extends('includes.header')

     @section('title')
        <title>FlyboyInc :: Albums </title>
     @endsection



     @section('pagelink')
        <link href="{{ URL::to('css/album.css')}}" rel="stylesheet" />
      @endsection

@section('pageContent')

      <header id="album-header">
        <div class="container-fluid">
          <div class="row">
            <h1 class="btn btn-lg">GALLERY</h1>
            <p>PERSONAL PHOTOS</p>
            <p><i class="fa fa-angle-double-down"></i></p>
          </div>
        </div>
      </header>

    <nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
      <ul class="main-nav">
        <li><a href="{{ route('user.bio') }}">Bio</a></li>
        <li><a href="{{ route('user.music') }}">Music</a></li>
        <li><a href="{{ route('user.photos') }}">Photos</a></li>
        <li><a href="{{ route('user.videos') }}">Videos</a></li>
        <li class="small-logo"><a href="{{ route('user.index') }}"><img src="{{ URL::to('img/flyboy70.png') }}" alt="logo" style="display: inline;"></a></li>
        <li><a href="{{ route('user.news') }}">News</a></li>
        <li><a href="{{ route('user.events') }}">Events</a></li>
        <li><a href="{{ route('user.contact') }}">Contact</a></li>
        <li><a href="#"></a></li>
      </ul>
      <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
  </nav>
  <!--main-nav-end-->

    <section>
      <div class="container photo-container">
         <div style="margin-top:50px;">
            <h2> Gallery </h2>
            <center><div style="background-color:#000;height:2px;width:25px;margin-top: -15px;margin-bottom: 20px;"></div></center>
         </div>
        <div class="row">
        <!-- <div class="col-md-8  photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#1">
              <img src="img/p-photos/pp-1.jpg">
            </a>
            <div class="modal fade" id="1" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-1.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#2">
              <img src="img/p-photos/pp-2.jpg">
            </a>
            <div class="modal fade" id="2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-2.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#2">
              <img src="img/p-photos/pp-2.jpg">
            </a>
            <div class="modal fade" id="2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-2.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#2">
              <img src="img/p-photos/pp-2.jpg">
            </a>
            <div class="modal fade" id="2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-2.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#3">
              <img src="img/p-photos/pp-3.jpg">
            </a>
            <div class="modal fade" id="3" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-3.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#4">
              <img src="img/p-photos/pp-4.jpg">
            </a>
            <div class="modal fade" id="4" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-4.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#5">
              <img src="img/p-photos/pp-5.jpg">
            </a>
            <div class="modal fade" id="5" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-5.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#6">
              <img src="img/p-photos/pp-6.jpg">
            </a>
            <div class="modal fade" id="6" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-6.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#7">
              <img src="img/p-photos/pp-7.jpg">
            </a>
            <div class="modal fade" id="7" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-7.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#8">
              <img src="img/p-photos/pp-8.jpg">
            </a>
            <div class="modal fade" id="8" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-8.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#9">
              <img src="img/p-photos/pp-9.jpg">
            </a>
            <div class="modal fade" id="9" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-9.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#9">
              <img src="img/p-photos/pp-9.jpg">
            </a>
            <div class="modal fade" id="9" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-9.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#9">
              <img src="img/p-photos/pp-9.jpg">
            </a>
            <div class="modal fade" id="9" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-9.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#11">
              <img src="img/p-photos/pp-11.jpg">
            </a>
            <div class="modal fade" id="11" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-11.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#12">
              <img src="img/p-photos/pp-12.jpg">
            </a>
            <div class="modal fade" id="12" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-12.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>This is the 12th one on my photolery</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 photo-item">
          <div class="box">
            <a href="#" data-toggle="modal" data-target="#13">
              <img src="img/p-photos/pp-1.jpg">
            </a>
            <div class="modal fade" id="13" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <img src="img/p-photos/pp-1.jpg">
                  </div>
                    <div class="col-md-12 description">
                      <h4>Where the picture was taken...</h4>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
@endsection
