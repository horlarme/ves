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
        <li><a href="{{route('drawings_page')}}">Drawings</a></li>
        <li><a href="{{route('paintings_page')}}">Paintings</a></li>
        <li><a href="#portrait">Installations</a></li>
        <li><a href="#black-white">Photography</a></li>
      </ul>
    </div>
    <!-- /filter --> 
  </div>
  <section  id="conceptual" class="black-wrapper inner">
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
                      <p>Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <div class="divide20"></div>
                      <a href="drawings.html" class="btn">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item"> <img src="image/art/portfolio/drawings/1.jpg" alt="" /><span class="caption">Risus magna quam nibh vestibulum</span> </div>
          <div class="item"> <img src="image/art/portfolio/drawings/2.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/portfolio/drawings/3.jpg" alt="" /><span class="caption">Donec ullamcorper nulla non metus auctor</span> </div>
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
  
  <section  id="landscape" class="black-wrapper inner">
    <div class="swiper-wrapper"> <a class="arrow-left" href="#"></a> <a class="arrow-right" href="#"></a>
      <div class="swiper-container gallery">
        <div class="swiper">
          <div class="item"> <img src="image/art/gl0.jpg" alt="" />
            <div class="details">
              <div class="content">
                <div class="wrap">
                  <div class="text">
                    <h2>Paintings</h2>
                    <div class="info">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet magna.</p>
                      <div class="divide20"></div>
                      <a href="paintings.html" class="btn">View</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item"> <img src="image/art/portfolio/paintings/1.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/portfolio/paintings/2.jpg" alt="" /><span class="caption">Cum sociis natoque penatibus et magnis dis</span> </div>
          <div class="item"> <img src="image/art/portfolio/paintings/3.jpg" alt="" /><span class="caption">Nulla vitae elit libero a pharetra augue</span> </div>
          <!-- <div class="item"> <img src="image/art/gl4.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gl5.jpg" alt="" /><span class="caption">Nullam id dolor nibh ultricies vehicula</span> </div>
          <div class="item"> <img src="image/art/gl6.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gl7.jpg" alt="" /> </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- /section -->
  
  <section  id="portrait" class="black-wrapper inner">
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
                      <p>Donec ullamcorper nulla non metus auctor fringilla, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper donec sed odio cum sociis natoque.</p>
                    <div class="divide20"></div>
                      <a href="#" class="btn">View</a>
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
    <!--</div>-->
  </section>
  <!-- /section -->
  
  <section  id="black-white" class="black-wrapper inner">
    <div class="swiper-wrapper"> <a class="arrow-left" href="#"></a> <a class="arrow-right" href="#"></a>
      <div class="swiper-container gallery">
        <div class="swiper">
          <div class="item"> <img src="image/art/gb0.jpg" alt="" />
            <div class="details">
              <div class="content">
                <div class="wrap">
                  <div class="text">
                    <h2>Photography</h2>
                    <div class="info">
                      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo amet.</p>
                    <div class="divide20"></div>
                      <a href="#" class="btn">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item"> <img src="image/art/gb1.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gb2.jpg" alt="" /><span class="caption">Cum sociis natoque penatibus et magnis dis</span> </div>
          <div class="item"> <img src="image/art/gb3.jpg" alt="" /><span class="caption">Nulla vitae elit libero a pharetra augue</span> </div>
          <div class="item"> <img src="image/art/gb4.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gb5.jpg" alt="" /><span class="caption">Nullam id dolor nibh ultricies vehicula</span> </div>
          <div class="item"> <img src="image/art/gb6.jpg" alt="" /> </div>
          <div class="item"> <img src="image/art/gb7.jpg" alt="" /> </div>
        </div>
      </div>
    <!--</div>-->
  </section>
  <!-- /section -->  @stop