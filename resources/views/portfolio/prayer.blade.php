@extends("layout")

@section('title') Prayer Room @stop

@section('content')
  <div class="page-title" style="background-image: url({{asset('image/art/installations/9.jpg')}});">
    <div class="overlay"></div>
    <h1>Prayer Room</h1>
  </div>

 <div class="black-wrapper inner">
    <div class="container">
      <p>The Prayer Room is a space where people can come and feel art almost physically, be calm and spend some time to reflect, hence using the mirror as part of the installation.
I work from a standpoint of history and memory, my inspiration for the prayer room is what we call “okoughele” in Esan, where elders meet and decide on community matters, coronate the village chief and it is also a place where elders pray for individuals and the community every now and then. It should not be mistaken for a shrine. Shrines are different from “elders community room”, usually situated in the middle of the village.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="{{asset('image/art/installations/9.jpg')}}" alt="Prayer Room" title="Prayer Room"></li>
        <li><img src="{{asset('image/art/installations/10.jpg')}}" alt="Prayer Room" title="Prayer Room"></li>
        <li><img src="{{asset('image/art/installations/11.jpg')}}" alt="Prayer Room" title="Prayer Room"></li>
        <li><img src="{{asset('image/art/installations/12.jpg')}}" alt="Prayer Room" title="Prayer Room"></li>
        <li><img src="{{asset('image/art/installations/13.jpg')}}" alt="Prayer Room" title="Prayer Room"></li>
        <li><img src="{{asset('image/20160501_144444.jpg')}}" alt="Prayer Room" title="Prayer Room"></li>
    </div>
  </div>

  @stop