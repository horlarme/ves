@extends("layout")

@section('title') Portfolio - Drawings @stop

@section('content')
  <div class="page-title" style="background-image: url({{asset('image/art/page-title-3.jpg')}});">
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
<!--        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/pp1-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-01">
            <div class="text-overlay">
              <div class="info">Nibh Egestas Amet</div>
            </div>
            <img src="{{asset('image/art/pp1.jpg')}}" alt="" /> </a></figure>
          <div id="title-01" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>
        <li class="item thumb black-white">
          <figure><a href="{{asset('image/art/pp2-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-02">
            <div class="text-overlay">
              <div class="info">Vulputate Nullam Pellentesque</div>
            </div>
            <img src="{{asset('image/art/pp2.jpg')}}" alt="" /> </a></figure>
          <div id="title-02" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>
        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/pp3-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-03">
            <div class="text-overlay">
              <div class="info">Condimentum Tristique Porta</div>
            </div>
            <img src="{{asset('image/art/pp3.jpg')}}" alt="" /> </a></figure>
          <div id="title-03" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
           /.info .hidden  
        </li>-->
        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/pp4-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-04">
            <div class="text-overlay">
              <div class="info">Amet Sollicitudin Adipiscing</div>
            </div>
            <img src="{{asset('image/art/pp4.jpg')}}" alt="" /> </a></figure>
          <div id="title-04" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="{{asset('image/art/pp5-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-05">
            <div class="text-overlay">
              <div class="info">Sollicitudin Lorem Tortor</div>
            </div>
            <img src="{{asset('image/art/pp5.jpg')}}" alt="" /> </a></figure>
          <div id="title-05" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="{{asset('image/art/pp6-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-06">
            <div class="text-overlay">
              <div class="info">Ullamcorper Tellus</div>
            </div>
            <img src="{{asset('image/art/pp6.jpg')}}" alt="" /> </a></figure>
          <div id="title-06" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="{{asset('image/art/pp7-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-07">
            <div class="text-overlay">
              <div class="info">Fermentum Ultricies Inceptos</div>
            </div>
            <img src="{{asset('image/art/pp7.jpg')}}" alt="" /> </a></figure>
          <div id="title-07" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/pp8-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-08">
            <div class="text-overlay">
              <div class="info">Bibendum Egestas Ipsum</div>
            </div>
            <img src="{{asset('image/art/pp8.jpg')}}" alt="" /> </a></figure>
          <div id="title-08" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb black-white">
          <figure><a href="{{asset('image/art/pp9-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-09">
            <div class="text-overlay">
              <div class="info">Parturient Tristique Pellentesque</div>
            </div>
            <img src="{{asset('image/art/pp9.jpg')}}" alt="" /> </a></figure>
          <div id="title-09" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb conceptual">
          <figure><a href="{{asset('image/art/pp10-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-10">
            <div class="text-overlay">
              <div class="info">Vestibulum Sem Condimentum</div>
            </div>
            <img src="{{asset('image/art/pp10.jpg')}}" alt="" /> </a></figure>
          <div id="title-10" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="{{asset('image/art/pp11-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-11">
            <div class="text-overlay">
              <div class="info">Pellentesque Malesuada Elit</div>
            </div>
            <img src="{{asset('image/art/pp11.jpg')}}" alt="" /> </a></figure>
          <div id="title-11" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="{{asset('image/art/pp12-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-12">
            <div class="text-overlay">
              <div class="info">Tristique Fusce Quam</div>
            </div>
            <img src="{{asset('image/art/pp12.jpg')}}" alt="" /> </a></figure>
          <div id="title-12" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb portrait">
          <figure><a href="{{asset('image/art/pp13-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-13">
            <div class="text-overlay">
              <div class="info">Bibendum Sit Tellus</div>
            </div>
            <img src="{{asset('image/art/pp13.jpg')}}" alt="" /> </a></figure>
          <div id="title-13" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb black-white">
          <figure><a href="{{asset('image/art/pp14-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-14">
            <div class="text-overlay">
              <div class="info">Commodo Elit Tristique</div>
            </div>
            <img src="{{asset('image/art/pp14.jpg')}}" alt="" /> </a></figure>
          <div id="title-14" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb landscape">
          <figure><a href="{{asset('image/art/pp15-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-15">
            <div class="text-overlay">
              <div class="info">Dapibus Ultricies Fusce</div>
            </div>
            <img src="{{asset('image/art/pp15.jpg')}}" alt="" /> </a></figure>
          <div id="title-15" class="info hidden">
            <h2>Vulputate Cursus Mollis</h2>
            <div class="fancybody">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus commodo.</div>
          </div>
          <!-- /.info .hidden --> 
        </li>
        <li class="item thumb black-white">
          <figure><a href="{{asset('image/art/pp16-full.jpg')}}" class="fancybox-media" data-rel="portfolio" data-title-id="title-16">
            <div class="text-overlay">
              <div class="info">Condimentum Venenatis Justo</div>
            </div>
            <img src="{{asset('image/art/pp16.jpg')}}" alt="" /> </a></figure>
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