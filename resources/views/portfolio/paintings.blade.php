@extends('layout')

@section('title') Portfolio - Paintings @stop

@section('content')
  <div class="page-title" style="background-image: url({{asset('image/art/page-title-3.jpg')}});">
    <div class="overlay"></div>
    <h1>Victor's Paintings</h1>
  </div>
  <div class="grid-portfolio fix-portfolio">
    <div class="filter dark-wrapper container">
      <ul>
        <li><a class="active" href="#" data-filter="*">All</a></li>
        <li><a href="#" data-filter=".conceptual">Conceptual</a></li>
        <li><a href="#" data-filter=".black-white">Black & White</a></li>
        <li><a href="#" data-filter=".portrait">Portrait</a></li>
        <li><a href="#" data-filter=".landscape">Landscape</a></li>
      </ul>
    </div>
    <!-- /filter -->
    <div class="container inner">
      <ul class="items">
        <li class="item thumb conceptual">
          <figure><a href="portfolio-post.html">
            <div class="text-overlay">
              <div class="info">Nibh Egestas Amet</div>
            </div>
            <img src="{{asset('image/art/pp1.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb black-white">
          <figure><a href="portfolio-post2.html">
            <div class="text-overlay">
              <div class="info">Vulputate Nullam Pellentesque</div>
            </div>
            <img src="{{asset('image/art/pp2.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb conceptual">
          <figure><a href="portfolio-post3.html">
            <div class="text-overlay">
              <div class="info">Condimentum Tristique Porta</div>
            </div>
            <img src="{{asset('image/art/pp3.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb conceptual">
          <figure><a href="portfolio-post4.html">
            <div class="text-overlay">
              <div class="info">Amet Sollicitudin Adipiscing</div>
            </div>
            <img src="{{asset('image/art/pp4.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb portrait">
          <figure><a href="portfolio-post.html">
            <div class="text-overlay">
              <div class="info">Sollicitudin Lorem Tortor</div>
            </div>
            <img src="{{asset('image/art/pp5.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb landscape">
          <figure><a href="portfolio-post2.html">
            <div class="text-overlay">
              <div class="info">Ullamcorper Tellus</div>
            </div>
            <img src="{{asset('image/art/pp6.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb portrait">
          <figure><a href="portfolio-post3.html">
            <div class="text-overlay">
              <div class="info">Fermentum Ultricies Inceptos</div>
            </div>
            <img src="{{asset('image/art/pp7.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb conceptual">
          <figure><a href="portfolio-post4.html">
            <div class="text-overlay">
              <div class="info">Bibendum Egestas Ipsum</div>
            </div>
            <img src="{{asset('image/art/pp8.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb black-white">
          <figure><a href="portfolio-post.html">
            <div class="text-overlay">
              <div class="info">Parturient Tristique Pellentesque</div>
            </div>
            <img src="{{asset('image/art/pp9.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb conceptual">
          <figure><a href="portfolio-post2.html">
            <div class="text-overlay">
              <div class="info">Vestibulum Sem Condimentum</div>
            </div>
            <img src="{{asset('image/art/pp10.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb landscape">
          <figure><a href="portfolio-post3.html">
            <div class="text-overlay">
              <div class="info">Pellentesque Malesuada Elit</div>
            </div>
            <img src="{{asset('image/art/pp11.jpg')}}" alt="" /> </a></figure>
        </li>
        <li class="item thumb landscape">
          <figure><a href="portfolio-post4.html">
            <div class="text-overlay">
              <div class="info">Tristique Fusce Quam</div>
            </div>
            <img src="{{asset('image/art/pp12.jpg')}}" alt="" /> </a></figure>
        </li>
      </ul>
      <!-- /.items --> 
    </div>
  </div>
  <!-- /.portfolio -->
  @stop