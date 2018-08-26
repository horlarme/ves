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
        <li><a href="#" data-filter=".sculpture">Sculptures</a></li>
        <li><a href="#" data-filter=".sculptedcanvas">Sculted Canvas</a></li>
        <li><a href="#" data-filter=".peforations">Perforations</a></li>
        <!--<li><a href="#" data-filter=".landscape">Photography</a></li>-->
    </div>
    <!-- /filter -->
    <div class="container inner">
      <ul class="items">
        <li class="item thumb sculptedcanvas">
          <figure><a href="{{asset('image/art/sculptings/1.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-01">
            <div class="text-overlay">
              <div class="info">Nibh Egestas Amet</div>
            </div>
            <img src="{{asset('image/art/sculptings/1.jpg')}}" alt="" /> </a></figure>
          <div id="title-01" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb sculpture">
          <figure><a href="{{asset('image/art/sculptings/2.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-02">
            <div class="text-overlay">
              <div class="info">Vulputate Nullam Pellentesque</div>
            </div>
            <img src="{{asset('image/art/sculptings/2.jpg')}}" alt="" /> </a></figure>
          <div id="title-02" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
        <li class="item thumb peforations">
          <figure><a href="{{asset('image/art/sculptings/3.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-03">
            <div class="text-overlay">
              <div class="info">NOT THE FIRST TIME YOU ARE TELLING ME THIS STORY</div>
            </div>
            <img src="{{asset('image/art/sculptings/3.jpg')}}" alt="" /> </a></figure>
          <div id="title-03" class="info hidden">
            <h2>NOT THE FIRST TIME YOU ARE TELLING ME THIS STORY - 2014</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           <!-- /.info .hidden   -->
        </li>
<!--        <li class="item thumb charcoal">
          <figure><a href="{{asset('image/art/drawings/4.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-04">
            <div class="text-overlay">
              <div class="info">MULTIPLICITY</div>
            </div>
            <img src="{{asset('image/art/drawings/4.jpg')}}" alt="" /> </a></figure>
          <div id="title-04" class="info hidden">
            <h2>MULTIPLICITY - 2018</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>
        <li class="item thumb charcoal">
          <figure><a href="{{asset('image/art/drawings/5.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-05">
            <div class="text-overlay">
              <div class="info">TWENTY-ONE AGAIN</div>
            </div>
            <img src="{{asset('image/art/drawings/5.jpg')}}" alt="" /> </a></figure>
          <div id="title-05" class="info hidden">
            <h2>TWENTY-ONE AGAIN - 2018</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>
        <li class="item thumb charcoal">
          <figure><a href="{{asset('image/art/drawings/6.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-06">
            <div class="text-overlay">
              <div class="info">Ullamcorper Tellus</div>
            </div>
            <img src="{{asset('image/art/drawings/6.jpg')}}" alt="" /> </a></figure>
          <div id="title-06" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>
        <li class="item thumb charcoal">
          <figure><a href="{{asset('image/art/drawings/7.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-07">
            <div class="text-overlay">
              <div class="info">Fermentum Ultricies Inceptos</div>
            </div>
            <img src="{{asset('image/art/drawings/7.jpg')}}" alt="" /> </a></figure>
          <div id="title-07" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>
        <li class="item thumb charcoal">
          <figure><a href="{{asset('image/art/drawings/9.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-09">
            <div class="text-overlay">
              <div class="info">INSOMNIA</div>
            </div>
            <img src="{{asset('image/art/drawings/9.jpg')}}" alt="" /> </a></figure>
          <div id="title-09" class="info hidden">
            <h2>INSOMNIA - 2011</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
          <li class="item thumb charcoal">
          <figure><a href="{{asset('image/art/drawings/8.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-08">
            <div class="text-overlay">
              <div class="info">Bibendum Egestas Ipsum</div>
            </div>
            <img src="{{asset('image/art/drawings/8.jpg')}}" alt="" /> </a></figure>
          <div id="title-08" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>
        
        </li>
        <li class="item thumb acrylic">
          <figure><a href="{{asset('image/art/drawings/10.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-10">
            <div class="text-overlay">
              <div class="info">BEFORE YOU SISTER IDOTO NAKED I STAND</div>
            </div>
            <img src="{{asset('image/art/drawings/10.jpg')}}" alt="" /> </a></figure>
          <div id="title-10" class="info hidden">
            <h2>BEFORE YOU SISTER IDOTO NAKED I STAND - 2013</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>-->
       
      </ul>
      <!-- /.items --> 
    </div>
  </div>
  <!-- /.portfolio -->
@stop