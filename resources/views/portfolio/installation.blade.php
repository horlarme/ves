@extends('layout')

@section('title') Portfolio - Paintings @stop

@section('content')
  <div class="page-title" style="background-image: url(images/2.jpg);">
    <div class="overlay"></div>
    <h1>Victor's Installations</h1>
  </div>
  <div class="grid-portfolio fix-portfolio">
    <div class="filter dark-wrapper container">
      <ul>
        <li><a class="active" href="#" data-filter="*">All</a></li>
<!--        <li><a href="#" data-filter=".conceptual">Drawings</a></li>
        <li><a href="#" data-filter=".black-white">Paintings</a></li>
        <li><a href="#" data-filter=".portrait">Installation</a></li>
        <li><a href="#" data-filter=".landscape">Photography</a></li>-->
    </div>
    <!-- /filter -->
    <div class="container inner">
      <ul class="items">
        <li class="item thumb conceptual">
          <figure><a href="style/images/art/installations/1.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-01">
            <div class="text-overlay">
              <div class="info">Nibh Egestas Amet</div>
            </div>
            <img src="style/images/art/installations/1.jpg" alt="" /> </a></figure>
          <div id="title-01" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb black-white">
          <figure><a href="style/images/art/installations/2.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-02">
            <div class="text-overlay">
              <div class="info">Vulputate Nullam Pellentesque</div>
            </div>
            <img src="style/images/art/installations/2.jpg" alt="" /> </a></figure>
          <div id="title-02" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb conceptual">
          <figure><a href="style/images/art/installations/3.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-03">
            <div class="text-overlay">
              <div class="info">Condimentum Tristique Porta</div>
            </div>
            <img src="style/images/art/installations/3.jpg" alt="" /> </a></figure>
          <div id="title-03" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb conceptual">
          <figure><a href="style/images/art/installations/4.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-04">
            <div class="text-overlay">
              <div class="info">Amet Sollicitudin Adipiscing</div>
            </div>
            <img src="style/images/art/installations/4.jpg" alt="" /> </a></figure>
          <div id="title-04" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="style/images/art/installations/5.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-05">
            <div class="text-overlay">
              <div class="info">Sollicitudin Lorem Tortor</div>
            </div>
            <img src="style/images/art/installations/5.jpg" alt="" /> </a></figure>
          <div id="title-05" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="style/images/art/installations/6.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-06">
            <div class="text-overlay">
              <div class="info">Ullamcorper Tellus</div>
            </div>
            <img src="style/images/art/installations/6.jpg" alt="" /> </a></figure>
          <div id="title-06" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="style/images/art/installations/7.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-07">
            <div class="text-overlay">
              <div class="info">Fermentum Ultricies Inceptos</div>
            </div>
            <img src="style/images/art/installations/7.jpg" alt="" /> </a></figure>
          <div id="title-07" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb conceptual">
          <figure><a href="style/images/art/installations/8.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-08">
            <div class="text-overlay">
              <div class="info">Bibendum Egestas Ipsum</div>
            </div>
            <img src="style/images/art/installations/8.jpg" alt="" /> </a></figure>
          <div id="title-08" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb black-white">
          <figure><a href="style/images/art/installations/9.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-09">
            <div class="text-overlay">
              <div class="info">Parturient Tristique Pellentesque</div>
            </div>
            <img src="style/images/art/installations/9.jpg" alt="" /> </a></figure>
          <div id="title-09" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          
        </li>
        <li class="item thumb conceptual">
          <figure><a href="style/images/art/installations/10.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-10">
            <div class="text-overlay">
              <div class="info">Vestibulum Sem Condimentum</div>
            </div>
            <img src="style/images/art/installations/10.jpg" alt="" /> </a></figure>
          <div id="title-10" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="style/images/art/installations/11.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-11">
            <div class="text-overlay">
              <div class="info">Pellentesque Malesuada Elit</div>
            </div>
            <img src="style/images/art/installations/11.jpg" alt="" /> </a></figure>
          <div id="title-11" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="style/images/art/installations/12.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-12">
            <div class="text-overlay">
              <div class="info">Tristique Fusce Quam</div>
            </div>
            <img src="style/images/art/installations/12.jpg" alt="" /> </a></figure>
          <div id="title-12" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="style/images/art/installations/13.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-13">
            <div class="text-overlay">
              <div class="info">Bibendum Sit Tellus</div>
            </div>
            <img src="style/images/art/installations/13.jpg" alt="" /> </a></figure>
          <div id="title-13" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb black-white">
          <figure><a href="style/images/art/installations/14.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-14">
            <div class="text-overlay">
              <div class="info">Commodo Elit Tristique</div>
            </div>
            <img src="style/images/art/installations/14.jpg" alt="" /> </a></figure>
          <div id="title-14" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="style/images/art/installations/15.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-15">
            <div class="text-overlay">
              <div class="info">Dapibus Ultricies Fusce</div>
            </div>
            <img src="style/images/art/installations/15.jpg" alt="" /> </a></figure>
          <div id="title-15" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb black-white">
          <figure><a href="style/images/art/installations/16.jpg" class="fancybox-media" data-rel="portfolio" data-title-id="title-16">
            <div class="text-overlay">
              <div class="info">Condimentum Venenatis Justo</div>
            </div>
            <img src="style/images/art/installations/16.jpg" alt="" /> </a></figure>
          <div id="title-16" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
      </ul>
      <!-- /.items --> 
    </div>
  </div>
  <!-- /.portfolio -->
  @stop