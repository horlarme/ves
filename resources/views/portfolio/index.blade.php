@extends('layout')

@section('title') Portfolio @stop

@section('content')
  <div class="page-title" style="background-image: url({{asset('image/art/page-title-1.jpg')}});">
    <div class="overlay"></div>
    <h1>Victors Works</h1>
  </div>
  <div class="stickyfilter">
    <div id="sticky-filter" class="filter dark-wrapper container">
      <ul>
<!--        <li><a href="{{route('drawings_page')}}">Drawings</a></li>
        <li><a href="{{route('paintings_page')}}">Paintings</a></li>-->
        <li><a href="#drawing">Drawings</a></li>
        <li><a href="#paintings">Paintings</a></li>
        <li><a href="#installations">Installations</a></li>
        <li><a href="#sculptings">Sculptings & Perforated Works</a></li>
      </ul>
    </div>
    <!-- /filter --> 
  </div>
  <section  id="drawing" class="black-wrapper inner">
    <div class="swiper-wrapper"> <a class="arrow-left" href="#"></a> <a class="arrow-right" href="#"></a>
      <div class="swiper-container gallery">
        <div class="swiper">
          <div class="item"> <img src="image/art/gc0.jpg" alt="" />
            <div class="details">
              <div class="content">
                <div class="wrap">
                  <div class="text">
                    <h2>Drawings</h2>
                    <div class="info">
                      <p>A Collection of Victor Ehikamenor's drawings.</p>
                    <div class="divide20"></div>
                      <a href="{{route('drawings_page')}}" class="btn">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="item"> <img src="image/art/portfolio/drawings/3.jpg" alt="" /><span class="caption">Donec ullamcorper nulla non metus auctor</span> </div>
            <div class="item"> <img src="image/art/portfolio/drawings/1.jpg" alt="" /><span class="caption">Charcoal on Canvas Drawings</span> </div>
            <div class="item"> <img src="image/art/portfolio/drawings/4.jpg" alt="" /><span class="caption">Acrylic and charcoal on canvas Drawings</span> </div>
          <!-- <div class="item"> <img src="image/art/gc4.jpg" alt="" /><span class="caption">Adipiscing ipsum dolor sit amet consectetur.</span> </div>
          <div class="item"> <img src="image/art/gc5.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gc6.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gc7.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gc8.jpg" alt="" /> </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->
  
    <section  id="paintings" class="black-wrapper inner">
    <div class="swiper-wrapper"> <a class="arrow-left" href="#"></a> <a class="arrow-right" href="#"></a>
      <div class="swiper-container gallery">
        <div class="swiper">
          <div class="item"> <img src="image/art/gb0.jpg" alt="" />
            <div class="details">
              <div class="content">
                <div class="wrap">
                  <div class="text">
                    <h2>Paintings</h2>
                    <div class="info">
                      <p>A Collection of Victor Ehikamenor's paintings</p>
                    <div class="divide20"></div>
                      <a href="{{route('paintings_page')}}" class="btn">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="item"> <img src="image/art/portfolio/paintings/4.jpg" alt="" /><span class="caption"> In need of writeup for this</span> </div>
            <div class="item"> <img src="image/art/portfolio/paintings/1.jpg" alt="" /><span class="caption"> In need of writeup for this</span> </div>
            <div class="item"> <img src="image/art/portfolio/paintings/3.jpg" alt="" /><span class="caption"> In need of writeup for this</span> </div>
            <div class="item"> <img src="image/art/portfolio/paintings/17.jpg" alt="" /><span class="caption"> In need of writeup for this</span> </div>
          
        </div>
      </div>
    </div>
  </section>

  
  <section  id="installations" class="black-wrapper inner">
    <div class="swiper-wrapper"> <a class="arrow-left" href="#"></a> <a class="arrow-right" href="#"></a>
      <div class="swiper-container gallery">
        <div class="swiper">
          <div class="item"> <img src="image/art/gp0.jpg" alt="" />
            <div class="details">
              <div class="content">
                <div class="wrap">
                  <div class="text">
                    <h2>Installations</h2>
                    <div class="info">
                      <p>A Collection of Victor's installations</p>
                    <div class="divide20"></div>
                      <a href="{{route('installation_page')}}" class="btn">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item"> <img src="image/art/portfolio/installations/1.jpg" alt="" /><span class="caption">Risus magna quam nibh vestibulum</span> </div>
          <div class="item"> <img src="image/art/portfolio/installations/2.jpg" alt="" /> <span class="caption">Donec ullamcorper nulla non metus auctor</span></div>
          <div class="item"> <img src="image/art/portfolio/installations/3.jpg" alt="" /><span class="caption">Donec ullamcorper nulla non metus auctor</span> </div>
          <div class="item"> <img src="image/art/portfolio/installations/4.jpg" alt="" /><span class="caption">Adipiscing ipsum dolor sit amet consectetur.</span> </div>
          <!-- <div class="item"> <img src="image/art/gp5.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gp6.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gp7.jpg" alt="" /> </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->
  
   <section  id="sculptings" class="black-wrapper inner">
    <div class="swiper-wrapper"> <a class="arrow-left" href="#"></a> <a class="arrow-right" href="#"></a>
      <div class="swiper-container gallery">
        <div class="swiper">
          <div class="item"> <img src="image/art/gl0.jpg" alt="" />
            <div class="details">
              <div class="content">
                <div class="wrap">
                  <div class="text">
                    <h2>Sculptings & Perforated works</h2>
                    <div class="info">
                      <p>A collection of Victor's Sculpted Works & Perforations</p>
                      <div class="divide20"></div>
                      <a href="paintings.html" class="btn">View</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="item"> <img src="image/art/portfolio/paintings/1.jpg" alt="" /> </div>-->
          <div class="item"> <img src="image/art/portfolio/sculptings/1.jpg" alt="" /><span class="caption">Cum sociis natoque penatibus et magnis dis</span> </div>
          <div class="item"> <img src="image/art/portfolio/sculptings/2.jpg" alt="" /><span class="caption">Cum sociis natoque penatibus et magnis dis</span> </div>
          <div class="item"> <img src="image/art/portfolio/sculptings/3.jpg" alt="" /><span class="caption">Cum sociis natoque penatibus et magnis dis</span> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->
    <!-- /section --> 
    @stop