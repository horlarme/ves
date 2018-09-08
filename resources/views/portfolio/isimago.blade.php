@extends("layout")

@section('title') Isimagodo @stop

@section('content')
  <div class="page-title" style="background-image: url({{asset('image/2.jpg')}});">
    <div class="overlay"></div>
    <h1>ISIMAGODO – The Unknowable, Nirox Foundation Sculpture Park, South Africa, 2016</h1>
  </div>

 <div class="black-wrapper inner">
    <div class="container">
      <p>Isimagodo – The Unknowable is the mystery and core essence of an ancient masquerade that is only known to the initiates of Esanland in Edo State, Nigeria. Growing up, Isimagodo as a masquerade was a complex enigmatic phenomenon for me to understand. The sculpture is a metaphor of that childhood larger than life phantasmagoric memory. I have also come to see my successive governments as Isimagodo, something I cannot quite understand despite their existence.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="{{asset('image/art/installations/3.jpg')}}" alt="Isimagodo" title="Isimagodo"></li>
        <li><img src="{{asset('image/2.jpg')}}" alt="Isimagodo" title="Isimagodo"></li>
        <li><img src="{{asset('image/art/installations/7.jpg')}}" alt="Isimagodo" title="Isimagodo"></li>
        <li><img src="{{asset('image/art/installations/2.jpg')}}" alt="Isimagodo" title="Isimagodo"></li>
      </ul>
    </div>
  </div>

  @stop