@extends('layouts.app')

@section('content')

   
            <div class="all-title-box">

                <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
                    <header>
                
                
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                    </ol>
                
                
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/library.jpg" class="d-block w-100" alt="...">
                      </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </button>
                  </div>
                </div>
                    </header>
                
                
                
                <br>
                <br>
                <br>
                <br>
                
                <div class="flex-container">
                    <div class="flex-item">
                      <h3>Vision</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus neque. Nullam non ipsum non nibh sodales vestibulum. Fusce hendrerit odio eget nisi egestas.</p>
                    </div>
                    <div class="flex-item">
                      <h3>Mission</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus neque. Nullam non ipsum non nibh sodales vestibulum. Fusce hendrerit odio eget nisi egestas.</p>
                    </div>
                    <div class="flex-item">
                      <h3>History</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus neque. Nullam non ipsum non nibh sodales vestibulum. Fusce hendrerit odio eget nisi egestas.</p>
                    </div>
                  </div>
                
                  <br>
                  <br>
                  <br>
                  <br>
                
                <div class="section cl">
                    <div class="container">
                        <div class="row text-left stat-wrap">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                               <!--<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i>--></span>
                                <p class="stat_count">100</p>
                                <h3>Students</h3>
                            </div><!-- end col -->
                
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!--<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i>--></span>
                                <p class="stat_count">4</p>
                                <h3>Faculties</h3>
                            </div><!-- end col -->
                
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!--<a href="https://www.flaticon.com/free-icons/calendar" title="calendar icons">Calendar</a>
                                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i>--></span>
                                <p class="stat_count">1</p>
                                <h3>Years Completed</h3>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
                </div>
                </div>
            </div>
        </div>
        
        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-center">
                        <p class="footer-company-name">All Rights Reserved. &copy; 2023 </a> Design By Ian Mungai</a></p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->

@endsection
