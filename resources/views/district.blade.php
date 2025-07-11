@push('styles')
<link rel="stylesheet" href="{{ asset('assest/style2.css') }}">
@endpush

@extends('layouts.app')
@section('title', 'Actualités du District')
@section('content')

  <section>
    <div class="info-row">
    <img src="{{ asset('images/fidèlede temple.jpeg') }}" alt="Image info 1" class="info-image" />
    <div class="info-content">
      <div class="title-box">
        <h1 class="info-title">Titre de l'information 1</h1>
      </div>
      <p class="info-description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut eros a neque dictum.
      </p>
    </div>
  </div>

  <div class="info-row">
    <img src="{{ asset('images/bishop Séraphin Moudé.jpg') }}" alt="Image info 2" class="info-image" />
    <div class="info-content">
      <div class="title-box">
        <h1 class="info-title">Titre de l'information 2</h1>
      </div>
      <p class="info-description">
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
      </p>
    </div>
  </div>

  <div class="info-row">
    <img src="{{ asset('assest/images/actu1.jpg') }}" alt="Image info 3" class="info-image" />
    <div class="info-content">
      <div class="title-box">
        <h1 class="info-title">Titre de l'information 3</h1>
      </div>
      <p class="info-description">
        Donec mollis, sapien a fermentum tincidunt, justo ligula faucibus ipsum, in rutrum lorem purus.
      </p>
    </div>
  </div>

  <div class="info-row">
    <img src="{{ asset('assest/images/actu2.jpg') }}" alt="Image info 4" class="info-image" />
    <div class="info-content">
      <div class="title-box">
        <h1 class="info-title">Titre de l'information 4</h1>
      </div>
      <p class="info-description">
        Aliquam erat volutpat. Sed tincidunt ex a turpis viverra, a fringilla purus vestibulum.
      </p>
    </div>
  </div>

  <div class="info-row">
    <img src="{{ asset('assest/images/actu3.jpg') }}" alt="Image info 5" class="info-image" />
    <div class="info-content">
      <div class="title-box">
        <h1 class="info-title">Titre de l'information 5</h1>
      </div>
      <p class="info-description">
        Nam non diam sit amet enim feugiat varius. Ut vehicula ipsum nec diam varius, non efficitur est finibus.
      </p>
    </div>
  </div>

  <div class="info-row">
    <img src="{{ asset('assest/images/photo du pasteur.png') }}" alt="Image info 6" class="info-image" />
    <div class="info-content">
      <div class="title-box">
        <h1 class="info-title">Titre de l'information 6</h1>
      </div>
      <p class="info-description">
        Sed sit amet sem at quam tristique ultrices. Fusce porta lectus a tincidunt pharetra.
      </p>
    </div>
  </div>
  </section>

@endsection
