<?php
$pageTitle = "Sobre a OTMiz Tech";
$pageDescription = "Lorem ipsum dolor sit amet consectetur adipiscing elit.";
include 'partials/head.php';
include 'partials/header.php';
?>

<main>

  <section class="page-hero">
    <div class="hero__bg" aria-hidden="true">
      <div class="hero__glow hero__glow--1"></div>
      <div class="hero__grid"></div>
    </div>
    <div class="container page-hero__inner">
      <p class="eyebrow" data-reveal>Sobre</p>
      <h1 class="page-hero__title" data-split>Estamos construindo o futuro dos agentes</h1>
      <p class="page-hero__subtitle" data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="page-hero__actions" data-reveal>
        <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
        
      </div>
    </div>
  </section>

  <section class="feature-block">
    <div class="container feature-block__inner">
      <div class="feature-block__copy">
        <p class="eyebrow" data-reveal>Nossa missão</p>
        <h2 class="section-title" data-split>Nossa missão</h2>
        <p data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="feature-block__media" data-reveal aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M12 2l2.5 7H22l-6 5 2.5 7L12 16.5 5.5 21 8 14 2 9h7.5z"/></svg>
      </div>
    </div>
  </section>

  <section class="feature-block feature-block--reverse">
    <div class="container feature-block__inner">
      <div class="feature-block__media" data-reveal aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M3 12h18M12 3v18"/></svg>
      </div>
      <div class="feature-block__copy">
        <p class="eyebrow" data-reveal>Nossa história</p>
        <h2 class="section-title" data-split>A história da OTMiz Tech</h2>
        <p data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </section>

  <section class="grid-section">
    <div class="container">
      <p class="eyebrow" data-reveal>Como trabalhamos</p>
      <h2 class="section-title" data-split>Nossos princípios operacionais</h2>
      <div class="card-grid">
        <div class="info-card" data-reveal><h3>Princípio 01</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></div>
        <div class="info-card" data-reveal><h3>Princípio 02</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></div>
        <div class="info-card" data-reveal><h3>Princípio 03</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></div>
      </div>
    </div>
  </section>

  <section class="cta-banner-wrap">
    <div class="container">
      <div class="cta-banner" data-reveal>
        <h2 data-split>Estamos contratando em todos os times</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <div class="cta-banner__actions">
          <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
          <a href="index.php#solucoes" class="btn btn--ghost">Ver nossas soluções</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'partials/footer.php'; include 'partials/scripts.php'; ?>
