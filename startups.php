<?php
$pageTitle = "Soluções para Startups | OTMiz Tech";
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
      <p class="eyebrow" data-reveal>Startups</p>
      <h1 class="page-hero__title" data-split>Itere mais rápido, vença em maior escala</h1>
      <p class="page-hero__subtitle" data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="page-hero__actions" data-reveal>
        <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
        
      </div>
    </div>
  </section>

  <section class="trusted-by">
    <div class="container">
      <p data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
      <div class="trusted-by__logos" data-reveal>
        <span>Cliente A</span><span>Cliente B</span><span>Cliente C</span><span>Cliente D</span><span>Cliente E</span>
      </div>
    </div>
  </section>

  <section class="grid-section">
    <div class="container">
      <p class="eyebrow" data-reveal>Planos</p>
      <h2 class="section-title" data-split>Conheça os níveis</h2>
      <div class="card-grid card-grid--2">
        <div class="info-card" data-reveal><span class="info-card__tag">Plano</span><h3>Build</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
        <div class="info-card" data-reveal><span class="info-card__tag">Plano</span><h3>Scale</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
      </div>
    </div>
  </section>

  <section class="how">
    <div class="how__pin">
      <div class="container how__inner">
        <div class="how__side">
          <p class="eyebrow" data-reveal>Como funciona</p>
          <h2 class="section-title" data-split>Um processo simples, do início à ativação</h2>
          <div class="how__progress">
            <span class="how__dot" data-dot></span>
            <span class="how__dot" data-dot></span>
            <span class="how__dot" data-dot></span>
          </div>
        </div>
        <div class="how__stage">
          <div class="how-step" data-step>
            <span class="how-step__number">01</span>
            <h3>Preparação & inscrição</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
          </div>
          <div class="how-step" data-step>
            <span class="how-step__number">02</span>
            <h3>Revisão & notificação</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
          </div>
          <div class="how-step" data-step>
            <span class="how-step__number">03</span>
            <h3>Ativação & crescimento</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq">
    <div class="container">
      <p class="eyebrow" data-reveal>FAQ</p>
      <h2 class="section-title" data-split>Perguntas frequentes</h2>
      <div class="faq__list">
        <div class="faq-item">
          <button class="faq-item__q" type="button" aria-expanded="false">
            <span>Lorem ipsum dolor sit amet?</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
          </button>
          <div class="faq-item__a"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-item__q" type="button" aria-expanded="false">
            <span>Consectetur adipiscing elit sed do?</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
          </button>
          <div class="faq-item__a"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-item__q" type="button" aria-expanded="false">
            <span>Eiusmod tempor incididunt ut labore?</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg>
          </button>
          <div class="faq-item__a"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-banner-wrap">
    <div class="container">
      <div class="cta-banner" data-reveal>
        <h2 data-split>Pronto para começar?</h2>
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
