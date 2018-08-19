@extends("layout")

@section('title') Portfolio - Drawings @stop

@section('content')
  <div class="page-title" style="background-image: url({{asset('image/2.jpg')}});">
    <div class="overlay"></div>
    <h1>Victor's Drawings</h1>
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
          <figure><a href="{{asset('image/art/drawings/1.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-01">
            <div class="text-overlay">
              <div class="info">Nibh Egestas Amet</div>
            </div>
            <img src="{{asset('image/art/drawings/1.jpg')}}" alt="" /> </a></figure>
          <div id="title-01" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb black-white">
          <figure><a href="{{asset('image/art/drawings/2.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-02">
            <div class="text-overlay">
              <div class="info">Vulputate Nullam Pellentesque</div>
            </div>
            <img src="{{asset('image/art/drawings/2.jpg')}}" alt="" /> </a></figure>
          <div id="title-02" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/drawings/3.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-03">
            <div class="text-overlay">
              <div class="info">Condimentum Tristique Porta</div>
            </div>
            <img src="{{asset('image/art/drawings/3.jpg')}}" alt="" /> </a></figure>
          <div id="title-03" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/drawings/4.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-04">
            <div class="text-overlay">
              <div class="info">Amet Sollicitudin Adipiscing</div>
            </div>
            <img src="{{asset('image/art/drawings/4.jpg')}}" alt="" /> </a></figure>
          <div id="title-04" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="{{asset('image/art/drawings/5.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-05">
            <div class="text-overlay">
              <div class="info">Sollicitudin Lorem Tortor</div>
            </div>
            <img src="{{asset('image/art/drawings/5.jpg')}}" alt="" /> </a></figure>
          <div id="title-05" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="{{asset('image/art/drawings/6.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-06">
            <div class="text-overlay">
              <div class="info">Ullamcorper Tellus</div>
            </div>
            <img src="{{asset('image/art/drawings/6.jpg')}}" alt="" /> </a></figure>
          <div id="title-06" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="{{asset('image/art/drawings/7.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-07">
            <div class="text-overlay">
              <div class="info">Fermentum Ultricies Inceptos</div>
            </div>
            <img src="{{asset('image/art/drawings/7.jpg')}}" alt="" /> </a></figure>
          <div id="title-07" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/drawings/8.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-08">
            <div class="text-overlay">
              <div class="info">Bibendum Egestas Ipsum</div>
            </div>
            <img src="{{asset('image/art/drawings/8.jpg')}}" alt="" /> </a></figure>
          <div id="title-08" class="info hidden">
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