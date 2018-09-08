@extends("layout")

@section('title') Ogoni Nine @stop

@section('content')
  <div class="page-title" style="background-image: url({{asset('image/4.jpg')}});">
    <div class="overlay"></div>
    <h1>Ogoni Nine</h1>
  </div>

 <div class="black-wrapper inner">
    <div class="container">
      <p>What is viscerally unpleasant about The Wealth of Nations? Is it the cumulative effect of the towering drums in front of the museum, as high as the eye can see? Or the surfeit of shapes on the walls of the room? Perhaps. But in a wider sense, presenting viscerally unpleasant artwork could refer to how Nigeria has attempted to reconcile with its past—a past in which the commercialization of crude oil is bound up with violence.</p>
      <p>The most insidious example of this was the judicial murder of Kenule Saro-Wiwa. Saro-Wiwa, a talented, prolific, and acclaimed writer, threatened the power structure in the last decade of his life. He protested the “ecological war” in Ogoniland, his hometown, in the heart of the Niger Delta. On November 10, 1995, he was hanged for the alleged murder of pro-government Ogoni chiefs, alongside eight others, by the vicious, corrupt and insecure government of General Sani Abacha.</p>
      <div class="divide25"></div>
      <ul class="basic-gallery text-center">
        <li><img src="{{asset('image/Ogoni-Nine_WEALTH_OF_NATION.jpg')}}" alt="Ogoni Nine" title="Ogoni Nine"></li>
        <li><img src="{{asset('image/art/installations/5.jpg')}}" alt="Ogoni Nine" title="Ogoni Nine"></li>
        <li><img src="{{asset('image/4.jpg')}}" alt="Ogoni Nine" title="Ogoni Nine"></li>
      </ul>
    </div>
  </div>

  @stop