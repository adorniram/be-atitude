@extends('layouts.app')
@section('title', 'Menu Principal')
@section('content')

<section class="temple-section bg-temple-image">
  <h1>TEMPLE EN CONSTRUCTION</h1>
  <a href="#" class="don-button">Faire un don</a><!-- Bouton ajouté -->
</section>



  <section class="presentation">
  <div class="text-content slide-right">
    <h1>TEMPLE LES BÉATITUDES DE NIANGON NORD</h1>
    <p>
L'Église Les Béatitudes de Niangon Nord est située dans la ville d'Abidjan, plus précisément dans la commune de Yopougon. Initialement, elle était un champ de mission de l'Église Bethesda de Niangon Sud, avant de s'affirmer comme une communauté florissante. Aujourd'hui, elle rassemble plus de 350 membres qui participent activement à la vie spirituelle de l'église sous la direction du Révérend Hypolite Kassi, son pasteur principal. Forte de son engagement et de sa croissance, l'Église Les Béatitudes continue d'être un lieu de culte et de partage pour ses fidèles.    </p>
  </div>
  <div class="image-content slide-left">
    <img src="{{ asset('assest/images/photo du pasteur.png') }}" alt="Image du temple">
  </div>
</section>

<section class="actualites-section">
  <h1 class="actualites-title slide-left">Actualités</h1>

  <div class="actualite-cards">
    <!-- Actualité 1 -->
    <div class="actualite-card slide-up">
      <img src="{{ asset('assest/images/actu1.jpg') }}" alt="Image actualité 1">
      <div class="card-content">
        <h3>Visite pastorale du surintendant</h3>
        <p class="date">20 mai 2025</p>
        <p class="description">Une grande veillée de prière s'est tenue ce samedi, rassemblant plusieurs fidèles dans la joie et la foi...</p>
        <a href="district.html" class="read-more">Lire plus</a>
      </div>
    </div>

    <!-- Actualité 2 -->
    <div class="actualite-card slide-up">
      <img src="{{ asset('assest/images/actu2.jpg') }}" alt="Image actualité 2">
      <div class="card-content">
        <h3>Classe Méthodiste des enfants</h3>
        <p class="date">15 mai 2025</p>
        <p class="description">Retour en images sur la journée spéciale dédiée à la classe méthodiste des enfants.</p>
        <a href="local.html" class="read-more">Lire plus</a>
      </div>
    </div>

    <!-- Actualité 3 -->
    <div class="actualite-card slide-up">
      <img src="{{ asset('assest/images/actu3.jpg') }}" alt="Image actualité 3">
      <div class="card-content">
        <h3>Journée de solidarité paroissiale</h3>
        <p class="date">10 mai 2025</p>
        <p class="description">Une journée de partage et d’entraide a été organisée, réunissant jeunes et anciens autour d’activités caritatives.</p>
        <a href="#" class="read-more">Lire plus</a>
      </div>
    </div>
  </div>

  <!-- Bouton Voir plus -->
  <div class="voir-plus-container">
    <a href="local.html" class="voir-plus-btn">Voir plus</a>
  </div>
</section>

<section class="history-section slide-left" id="apropos">
  <div class="history-text">
    <h1>A PROPOS DE <br>La création de l'Église Méthodiste</h1>
    <p>
     L'Église méthodiste trouve ses origines au XVIIIe siècle, sous l'impulsion de John Wesley, un prédicateur anglais qui cherchait à revitaliser la foi chrétienne au sein de l'Église anglicane.

Les débuts du méthodisme
John Wesley et son frère Charles Wesley ont commencé à organiser des groupes de prière et d'étude biblique à l'Université d'Oxford. Ces groupes étaient surnommés "méthodistes" en raison de leur discipline rigoureuse et de leur approche méthodique de la foi.

L'évolution du mouvement
Rejeté par l'Église anglicane, Wesley a commencé à prêcher en plein air, attirant des foules nombreuses. Il insistait sur l'expérience religieuse personnelle, la conversion intérieure, et la préoccupation sociale, notamment en aidant les pauvres et en s'opposant à l'esclavage.

La structuration de l'Église méthodiste
En 1784, Wesley a officiellement organisé l'Église méthodiste en Angleterre, bien que lui-même soit resté membre de l'Église anglicane jusqu'à sa mort. Le méthodisme s'est rapidement répandu aux États-Unis et dans d'autres pays, devenant un mouvement influent du protestantisme.

Le méthodisme en Côte d'Ivoire
L'Église méthodiste a été introduite en Côte d'Ivoire grâce aux missionnaires africains et européens. Les premiers lieux de culte méthodistes ont été établis en 1872 dans la région d'Aboisso. En 1914, les communautés méthodistes ont été regroupées en secteur missionnaire, marquant la naissance officielle de l'Église méthodiste en Côte d'Ivoire.

Aujourd'hui, le méthodisme est un courant protestant majeur, prônant le salut par la foi, l'engagement social et une approche structurée de la spiritualité. Si tu veux explorer davantage ses fondements théologiques ou son impact historique, je peux approfondir certains aspects ! 
  </div>
  <div class="history-image">
    <img src="{{ asset('assest/images/statut john.jpg') }}" alt="Image historique de l'église méthodiste">
  </div>
</section>

<section class="president-section slide-right">
  <div class="president-text">
    <h1>Président de l'Église Méthodiste de Côte d'Ivoire</h1>
    <p>
Le Très Révérend Séraphin Anoh Moudé est le nouveau bishop de l'Église méthodiste de Côte d'Ivoire. Il a été investi le 18 mai 2025 lors d'un culte solennel au stade Félix Houphouët-Boigny, succédant à Bishop Benjamin Boni. Son mandat est unique et dure huit ans.

Bishop Moudé a annoncé la tenue des états généraux de l'Église méthodiste, visant à établir un plan stratégique pour renforcer l'organisation et la mission de l'Église. Il met l'accent sur la gouvernance, la digitalisation, la gestion des ressources humaines et financières, ainsi que sur l'expansion de l'Église dans les régions moins couvertes.

Avant son investiture, il était surintendant du district ordinaire de Yopougon et membre du cabinet de son prédécesseur. Il est également diplômé de l'École Normale Supérieure d'Abidjan et a étudié la sociologie à l'Université d'Abidjan-Cocody.    </p>
  </div>
  <div class="president-image">
    <img src="{{ asset('assest/images/bishop Séraphin Moudé.jpg') }}" alt="Photo du président de l'Église Méthodiste">
  </div>
</section>

@endsection
