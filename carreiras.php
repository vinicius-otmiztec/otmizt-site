<?php
$pageTitle = "Carreiras na OTMiz Tech";
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
      <p class="eyebrow" data-reveal>Carreiras</p>
      <h1 class="page-hero__title" data-split>Um time em crescimento causando um impacto fora da curva</h1>
      <p class="page-hero__subtitle" data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="page-hero__actions" data-reveal>
        <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
        
      </div>
    </div>
  </section>

  <section class="grid-section">
    <div class="container">
      <p class="eyebrow" data-reveal>Princípios</p>
      <h2 class="section-title" data-split>Nossos princípios operacionais</h2>
      <div class="card-grid">
        <div class="info-card" data-reveal><h3>Princípio 01</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></div>
        <div class="info-card" data-reveal><h3>Princípio 02</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></div>
        <div class="info-card" data-reveal><h3>Princípio 03</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></div>
      </div>
    </div>
  </section>

  <section class="grid-section">
    <div class="container">
      <p class="eyebrow" data-reveal>Vagas</p>
      <h2 class="section-title" data-split>Explore nossas oportunidades</h2>
      <div class="card-grid">
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Engenharia</span><h3>Vaga Placeholder 01</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Produto</span><h3>Vaga Placeholder 02</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Vendas</span><h3>Vaga Placeholder 03</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
      </div>
    </div>
  </section>

  <section class="cta-banner-wrap">
    <div class="container">
      <div class="cta-banner" data-reveal>
        <h2 data-split>Pronto para construir com a gente?</h2>
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
