@extends('layout')

@section('title')
  Home
@endsection

@section('content')
<div class="container">
  
</div>
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url('images/slide_1.jpg');">
        <div class="overlay-gradient"></div>
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner">
              <h2>Start Your Startup With This Template</h2>
              <p><a href="/programs" class="btn btn-primary btn-lg">Get started</a></p>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url('images/slide_2.jpg');">
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner">
              <h2>Take Your Business To The Next Level</h2>
              <p><a href="/programs" class="btn btn-primary btn-lg">Get started</a></p>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url('images/slide_3.jpg');">
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner">
              <h2>We Think Different That Others Can't</h2>
              <p><a href="/programs" class="btn btn-primary btn-lg">Get started</a></p>
            </div>
          </div>
        </div>
      </li>
      </ul>
    </div>
</aside>
<div id="fh5co-work-section" class="fh5co-light-grey-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Latest Prorams</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$programs->get($programs->count()-1)->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$programs->get($programs->count()-1)->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$programs->get($programs->count()-1)->name}}</h3>
              <h5 class="category">{{$programs->get($programs->count()-1)->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$programs->get($programs->count()-2)->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$programs->get($programs->count()-2)->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$programs->get($programs->count()-2)->name}}</h3>
              <h5 class="category">{{$programs->get($programs->count()-2)->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$programs->get($programs->count()-3)->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$programs->get($programs->count()-3)->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$programs->get($programs->count()-3)->name}}</h3>
              <h5 class="category">{{$programs->get($programs->count()-3)->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$programs->get($programs->count()-4)->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$programs->get($programs->count()-4)->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$programs->get($programs->count()-4)->name}}</h3>
              <h5 class="category">{{$programs->get($programs->count()-4)->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$programs->get($programs->count()-5)->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$programs->get($programs->count()-5)->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$programs->get($programs->count()-5)->name}}</h3>
              <h5 class="category">{{$programs->get($programs->count()-5)->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 animate-box">
        <a href="/programs/{{$programs->get($programs->count()-6)->id}}" class="item-grid text-center">
          <div class="image" style="background-image: url({{$programs->get($programs->count()-6)->images}})"></div>
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$programs->get($programs->count()-6)->name}}</h3>
              <h5 class="category">{{$programs->get($programs->count()-6)->content}}</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-12 text-center">
        <p><a href="#" class="btn btn-primary with-arrow">View More Projects <i class="icon-arrow-right"></i></a></p>
      </div>
    </div>
  </div>
</div>
<div id="fh5co-testimony-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>Clients Feedback</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-offset-0 to-animate">
        <div class="wrap-testimony">
          <div class="owl-carousel-fullwidth">
            <div class="item">
              <div class="testimony-slide active text-center">
                <figure>
                  <img src="images/person.jpg" alt="user">
                </figure>
                <blockquote>
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                </blockquote>
                <span>Athan Smith, via <a href="#" class="twitter">Twitter</a></span>
              </div>
            </div>
            <div class="item">
              <div class="testimony-slide active text-center">
                <figure>
                  <img src="images/person2.jpg" alt="user">
                </figure>
                <blockquote>
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                </blockquote>
                <span>Nathalie Kosley, via <a href="#" class="twitter">Twitter</a></span>
              </div>
            </div>
            <div class="item">
              <div class="testimony-slide active text-center">
                <figure>
                  <img src="images/person3.jpg" alt="user">
                </figure>
                <blockquote>
                  <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                </blockquote>
                <span>Yanna Kuzuki, via <a href="#" class="twitter">Twitter</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="col-md-12 text-center">
      <h3>We Try To Update The Site Everyday</h3>
      <p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started now! <i class="icon-arrow-right"></i></a></p>
    </div>
  </div>
</div>
@endsection
