<header class="navbar">
  <div class="logo slide-left">
    <img src="{{ asset('assest/images/Logo église Méthodiste.png') }}" alt="Logo du site" />
    <span class="logo-title">Temple Les Béatitudes de Niangon Nord</span>
  </div>
  <!-- Bouton hamburger (mobile uniquement) -->
  <button
    type="button"
    class="menu-toggle a-bottom-bar-link a-bottom-bar-link--active"
    id="menu-toggle"
    aria-label="Ouvrir le menu"
    aria-expanded="false"
    aria-controls="site-nav-menu"
    tabindex="0"
    data-nav-button-id="site-nav-menu"
    data-allow-active="false"
    data-site-nav-button=""
  >
    <span class="a-site-nav-link--wrapper">
      <span class="o-header__site-nav-label a-hover-content" data-hover-label="Menu">☰</span>
    </span>
  </button>
  <!-- Menu de navigation -->
  <nav class="menu slide-right" id="site-nav-menu">
    <ul class="menu-list" id="nav-list">
      <li><a href="{{ route('accueil') }}">Accueil</a></li>
      <li class="has-submenu">
        <a href="#">Actualités</a>
        <ul class="submenu">
          <li><a href="{{ route('local') }}">Église locale</a></li>
          <li><a href="{{ route('circuit') }}">Circuit</a></li>
          <li><a href="{{ route('district') }}">District</a></li>
          <li><a href="{{ route('nationale') }}">Nationale</a></li>
        </ul>
      </li>
      <li><a href="#apropos">À propos</a></li>
      <li><a href="{{ route('payement') }}">Paiement</a></li>
      <li><a href="{{ route('don') }}"><button class="don-btn">Faire un don</button></a></li>
    </ul>
  </nav>
</header> 