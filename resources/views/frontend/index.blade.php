@extends('frontend.partials.master')
@section('content')

<!-- Slider Area Start -->
<section class="filmoja-slider-area fix">
    <div class="filmoja-slide owl-carousel">
       <div class="filmoja-main-slide slide-item-2">
          <div class="filmoja-main-caption">
             <div class="filmoja-caption-cell">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="slider-content-holder">
                            <div class="slider-text">
                               <h4>Action</h4>
                               <h2>Dareing Joker :  <br> Card</h2>
                               <p class="release-slider">release on: 20 Dec,2014</p>
                            </div>
                            <div class="slider-play">
                               <a class="popup-youtube" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY">
                               <i class="fa fa-play"></i> watch trailer
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="filmoja-main-slide slide-item-5">
          <div class="filmoja-main-caption">
             <div class="filmoja-caption-cell">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="slider-content-holder">
                            <div class="slider-text">
                               <h4>Science Fiction</h4>
                               <h2>Black Stone of the <br> Club</h2>
                               <p class="release-slider">release on: 20 Dec,2014</p>
                            </div>
                            <div class="slider-play">
                               <a class="popup-youtube" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY">
                               <i class="fa fa-play"></i> watch trailer
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="filmoja-main-slide slide-item-3">
          <div class="filmoja-main-caption">
             <div class="filmoja-caption-cell">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="slider-content-holder">
                            <div class="slider-text">
                               <h4>Commedy</h4>
                               <h2>Sunrisers : Fury <br> 2019</h2>
                               <p class="release-slider">release on: 20 Dec,2014</p>
                            </div>
                            <div class="slider-play">
                               <a class="popup-youtube" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY">
                               <i class="fa fa-play"></i> watch trailer
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Slider Area End -->
  
  
 <!-- Top Movies Area Start -->
 <section class="filmoja-top-movies-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="filmoja-heading">
                <h2>top movies :<span> 2019</span></h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="top-movie-slider owl-carousel">
                <div class="single-top-movie">
                   <div class="top-movie-wrap">
                      <div class="top-movie-img">
                         <a href="#">
                         <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                         </a>
                      </div>
                      <div class="thumb-hover">
                         <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                         <div class="thumb-date">
                            <span>05:30</span>
                         </div>
                      </div>
                   </div>
                   <div class="top-movie-details">
                      <h4><a href="#">Dareing Joker</a></h4>
                      <div class="movie-details-thumbs">
                         <ul>
                            <li>
                               <a href="#"><i class="fa fa-thumbs-up"></i>
                               256</a>
                            </li>
                            <li>
                               <a href="#"><i class="fa fa-eye"></i>45</a>
                            </li>
                            <li>
                               <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="single-top-movie">
                   <div class="top-movie-wrap">
                      <div class="top-movie-img">
                         <a href="#">
                         <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                         </a>
                      </div>
                      <div class="thumb-hover">
                         <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                         <div class="thumb-date">
                            <span>05:30</span>
                         </div>
                      </div>
                   </div>
                   <div class="top-movie-details">
                      <h4><a href="#">Furious race</a></h4>
                      <div class="movie-details-thumbs">
                         <ul>
                            <li>
                               <a href="#"><i class="fa fa-thumbs-up"></i>
                               256</a>
                            </li>
                            <li>
                               <a href="#"><i class="fa fa-eye"></i>45</a>
                            </li>
                            <li>
                               <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="single-top-movie">
                   <div class="top-movie-wrap">
                      <div class="top-movie-img">
                         <a href="#">
                         <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                         </a>
                      </div>
                      <div class="thumb-hover">
                         <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                         <div class="thumb-date">
                            <span>05:30</span>
                         </div>
                      </div>
                   </div>
                   <div class="top-movie-details">
                      <h4><a href="#">the walk</a></h4>
                      <div class="movie-details-thumbs">
                         <ul>
                            <li>
                               <a href="#"><i class="fa fa-thumbs-up"></i>
                               256</a>
                            </li>
                            <li>
                               <a href="#"><i class="fa fa-eye"></i>45</a>
                            </li>
                            <li>
                               <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="single-top-movie">
                   <div class="top-movie-wrap">
                      <div class="top-movie-img">
                         <a href="#">
                         <img src="{{asset('entertainment')}}/assets/img/top-slider-4.jpg" alt="top movies" />
                         </a>
                      </div>
                      <div class="thumb-hover">
                         <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                         <div class="thumb-date">
                            <span>05:30</span>
                         </div>
                      </div>
                   </div>
                   <div class="top-movie-details">
                      <h4><a href="#">Blood Day war</a></h4>
                      <div class="movie-details-thumbs">
                         <ul>
                            <li>
                               <a href="#"><i class="fa fa-thumbs-up"></i>
                               256</a>
                            </li>
                            <li>
                               <a href="#"><i class="fa fa-eye"></i>45</a>
                            </li>
                            <li>
                               <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
                <div class="single-top-movie">
                   <div class="top-movie-wrap">
                      <div class="top-movie-img">
                         <a href="#">
                         <img src="{{asset('entertainment')}}/assets/img/top-slider-5.jpeg" alt="top movies" />
                         </a>
                      </div>
                      <div class="thumb-hover">
                         <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                         <div class="thumb-date">
                            <span>05:30</span>
                         </div>
                      </div>
                   </div>
                   <div class="top-movie-details">
                      <h4><a href="#">mr.cartoon</a></h4>
                      <div class="movie-details-thumbs">
                         <ul>
                            <li>
                               <a href="#"><i class="fa fa-thumbs-up"></i>
                               256</a>
                            </li>
                            <li>
                               <a href="#"><i class="fa fa-eye"></i>45</a>
                            </li>
                            <li>
                               <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Top Movies Area End -->
  
  
 <!-- Theater Area Start -->
 <section class="filmoja-theater-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-5">
             <div class="theater-left">
                <div class="theater-box">
                   <div class="theater-text">
                      <h3>today in theater</h3>
                      <h4>Action, Adventure, Fantasy</h4>
                      <p>researved your seat,before you miss tomorrow.</p>
                      <a href="#" class="filmoja-btn">discover all</a>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-7">
             <div class="theater-slider slider-for">
                <div class="single-theater">
                   <img src="{{asset('entertainment')}}/assets/img/theater.jpeg" alt="theater thumb" />
                   <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY">
                   <i class="fa fa-play"></i>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Theater Area End -->
  
  
 <!-- Tv Movies Area Start -->
 <section class="filmoja-tv-movies-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="filmoja-heading">
                <h2>New <span>items</span></h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div class="tv-panel-list">
                <div class="tv-tab">
                   <ul class="nav nav-pills tv-tab-switch" id="pills-tab" role="tablist">
                      <li class="nav-item">
                         <a class="nav-link active" id="pills-popular-tab" data-toggle="pill" href="#pills-popular" role="tab" aria-controls="pills-popular" aria-selected="true">new releases</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" id="pills-upcoming-tab" data-toggle="pill" href="#pills-upcoming" role="tab" aria-controls="pills-upcoming" aria-selected="false">movies</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" id="pills-viewed-tab" data-toggle="pill" href="#pills-viewed" role="tab" aria-controls="pills-viewed" aria-selected="false">tv series</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" id="pills-rated-tab" data-toggle="pill" href="#pills-rated" role="tab" aria-controls="pills-rated" aria-selected="false">cartoons</a>
                      </li>
                   </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                   <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                      <div class="tab-movies">
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-4.jpg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Blood Day war</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-5.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">mr.cartoon</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                      </div>
                   </div>
                   <div class="tab-pane fade" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                      <div class="tab-movies">
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-4.jpg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Blood Day war</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-5.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">mr.cartoon</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                      </div>
                   </div>
                   <div class="tab-pane fade show " id="pills-viewed" role="tabpanel" aria-labelledby="pills-viewed-tab">
                      <div class="tab-movies">
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-4.jpg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Blood Day war</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-5.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">mr.cartoon</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                      </div>
                   </div>
                   <div class="tab-pane fade" id="pills-rated" role="tabpanel" aria-labelledby="pills-rated-tab">
                      <div class="tab-movies">
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                         <div class="row">
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-5.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">mr. cartoon</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-3.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">runnig shoot</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-1.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">Dareing Joker</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                               <div class="single-top-movie">
                                  <div class="top-movie-wrap">
                                     <div class="top-movie-img">
                                        <a href="#">
                                        <img src="{{asset('entertainment')}}/assets/img/top-slider-2.jpeg" alt="top movies" />
                                        </a>
                                     </div>
                                     <div class="thumb-hover">
                                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                        <div class="thumb-date">
                                           <span>05:30</span>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="top-movie-details">
                                     <h4><a href="#">racing field</a></h4>
                                     <div class="movie-details-thumbs">
                                        <ul>
                                           <li>
                                              <a href="#"><i class="fa fa-thumbs-up"></i>
                                              256</a>
                                           </li>
                                           <li>
                                              <a href="#"><i class="fa fa-eye"></i>45</a>
                                           </li>
                                           <li>
                                              <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- End Row -->
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Tv Movies Area End -->
  
  
  
 <!-- News Area Start -->
 <section class="filmoja-news-area section_70">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="filmoja-heading">
                <h2>latest <span>news</span></h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-6">
             <div class="single-news-item">
                <div class="news-image">
                   <a href="#">
                   <img src="{{asset('entertainment')}}/assets/img/big_news.jpg" alt="news" />
                   </a>
                   <div class="news-date">
                      <span class="date">12</span>
                      <span class="month">nov</span>
                   </div>
                </div>
                <div class="news-text">
                   <h3><a href="#">Win a Wizarding World holiday with Fantastic</a></h3>
                   <div class="post-meta">
                      <p><a href="#"><i class="fa fa-user"></i>David Cassidy</a></p>
                      <p><a href="#"><i class="fa fa-tags"></i>Cycling</a></p>
                   </div>
                   <div class="post-content">
                      <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-3">
             <div class="news-side-list">
                <div class="single-news-side">
                   <div class="news-side-img">
                      <a href="#"><img src="{{asset('entertainment')}}/assets/img/news-side-1.jpg" alt="side news" /></a>
                      <div class="news-date">
                         <span class="date">12</span>
                         <span class="month">nov</span>
                      </div>
                   </div>
                   <div class="news-side-text">
                      <h4><a href="#">Doctor Strange assembles with the Avengers</a></h4>
                      <div class="post-meta">
                         <p><a href="#"><i class="fa fa-user"></i>David Cassidy</a></p>
                         <p><a href="#"><i class="fa fa-tags"></i>Cycling</a></p>
                      </div>
                      <div class="post-content">
                         <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-3">
             <div class="news-side-list">
                <div class="single-news-side">
                   <div class="news-side-img">
                      <a href="#"><img src="{{asset('entertainment')}}/assets/img/news-side-2.jpg" alt="side news" /></a>
                      <div class="news-date">
                         <span class="date">12</span>
                         <span class="month">nov</span>
                      </div>
                   </div>
                   <div class="news-side-text">
                      <h4><a href="#">Doctor Strange assembles with the Avengers</a></h4>
                      <div class="post-meta">
                         <p><a href="#"><i class="fa fa-user"></i>David Cassidy</a></p>
                         <p><a href="#"><i class="fa fa-tags"></i>Cycling</a></p>
                      </div>
                      <div class="post-content">
                         <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- News Area End -->
@endsection