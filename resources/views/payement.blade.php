@push('styles')
<link rel="stylesheet" href="{{ asset('assest/style3.css') }}">
@endpush

@extends('layouts.app')
@section('title', 'Interface de Paiement')
@section('content')
  <!-- Section Paiement -->
  <section class="payment-section slide-up">
    <h1>Interface de Paiement</h1>
    <form class="payment-form">
      <label for="type">Type de Paiement :</label>
      <select id="type" required>
        <option value="">--Choisir--</option>
        <option value="moisson">Cibles de Moisson</option>
        <option value="fimeco">FIMECO</option>
        <option value="action">Actions Prophétiques</option>
      </select>

      <label for="nom">Nom complet :</label>
      <input type="text" id="nom" placeholder="Entrez votre nom" required />

      <label for="montant">Montant (FCFA) :</label>
      <input type="number" id="montant" placeholder="Montant à payer" required />

      <label for="methode">Méthode de Paiement :</label>
      <select id="methode" required>
        <option value="">--Sélectionner--</option>
        <option value="mobile">Mobile Money</option>
        <option value="carte">Carte Bancaire</option>
        <option value="virement">Virement Bancaire</option>
      </select>

      <button type="submit">Payer maintenant</button>
    </form>
  </section>

@endsection
