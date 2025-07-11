<footer class="footer">
  <div class="footer-left">
    <img src="{{ asset('assest/images/Logo église Méthodiste.png') }}" alt="Logo" />
    <span>Temple Les Béatitudes de Niangon Nord</span>
  </div>
  <div class="footer-center">
    <h4>Liens rapides</h4>
    <ul style="list-style:none;padding:0;">
      <li><a href="{{ route('accueil') }}">Accueil</a></li>
      <li><a href="{{ route('nationale') }}">Actualités nationales</a></li>
      <li><a href="{{ route('don') }}">Faire un don</a></li>
      <li><a href="{{ route('inscription') }}">Inscription</a></li>
    </ul>
  </div>
  <div class="footer-right">
    <h4>Contact</h4>
    <p>Email : contact@eglise-beatitudes.ci</p>
    <p>Tél : +225 01 23 45 67 89</p>
    <div class="social-icons">
      <a href="#"><img src="{{ asset('assest/images/icons8-facebook-logo-48.png') }}" alt="Facebook" /></a>
      <a href="#"><img src="{{ asset('assest/images/icons8-whatsapp-48.png') }}" alt="WhatsApp" /></a>
    </div>
  </div>
</footer> 