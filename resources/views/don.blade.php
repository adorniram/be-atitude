@push('styles')
<link rel="stylesheet" href="{{ asset('assest/style4.css') }}">
@endpush

@extends('layouts.app')
@section('title', 'Faire un Don - Église Méthodiste')
@section('content')

  <!-- SECTION DE DON -->
  <section class="payment-section">
    <h1>Faire un don</h1>

    <form class="payment-form">
      <label for="nom">Nom complet</label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom" required />

      <label for="email">Adresse email</label>
      <input type="email" id="email" name="email" placeholder="exemple@email.com" required />

      <label for="montant">Montant du don</label>
      <input type="number" id="montant" name="montant" placeholder="Montant en FCFA" required />

      <label for="methode">Méthode de paiement</label>
      <select id="methode" name="methode" required>
        <option value="">Sélectionnez un moyen</option>
        <option value="mobile">Mobile Money</option>
        <option value="carte">Carte Bancaire</option>
        <option value="autre">Autre</option>
      </select>

      <label for="message">Message (facultatif)</label>
      <textarea id="message" name="message" rows="4" placeholder="Un petit mot..."></textarea>

      <button type="submit">Payer maintenant</button>
    </form>
  </section>

@endsection
