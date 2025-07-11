@push('styles')
<link rel="stylesheet" href="{{ asset('assest/style4.css') }}">
@endpush

@extends('layouts.app')
@section('title', 'Inscription - Église Méthodiste')
@section('content')

  <!-- SECTION D'INSCRIPTION -->
  <section class="inscription-section">
    <h1>Inscription</h1>
    <form class="inscription-form">
      <label for="nom">Nom complet</label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom" required />

      <label for="email">Adresse email</label>
      <input type="email" id="email" name="email" placeholder="exemple@email.com" required />

      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" placeholder="Mot de passe" required />

      <label for="confirm-password">Confirmer le mot de passe</label>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmez le mot de passe" required />

      <button type="submit">S'inscrire</button>
    </form>
  </section>

@endsection 