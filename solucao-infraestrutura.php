<?php
$pageTitle = "Infraestrutura & DevOps | OTMiz Tech";
$pageDescription = "Deploy e monitoramento em VPS próprias, com Docker e Coolify.";
include 'partials/head.php';
include 'partials/header.php';
?>

<main>

  <section class="page-hero page-hero--split">
    <div class="hero__bg" aria-hidden="true">
      <div class="hero__glow hero__glow--1"></div>
      <div class="hero__grid"></div>
    </div>
    <div class="container page-hero__row">
      <div class="page-hero__inner">
        <p class="eyebrow" data-reveal>Soluções</p>
        <h1 class="page-hero__title" data-split>Infraestrutura & DevOps</h1>
        <p class="page-hero__subtitle" data-reveal>Deploy e monitoramento em VPS próprias, com Docker e Coolify — migração de hospedagens compartilhadas para infraestrutura sob nosso controle.</p>
        <div class="page-hero__actions" data-reveal>
          <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
          <a href="clientes.php" class="btn btn--ghost">Ver cases</a>
        </div>
      </div>
      <div class="page-hero__media" data-reveal>
        <div class="hero-chart hero-chart--infra">
          <div class="hero-chart__dots"></div>
          <div class="hero-chart__bars">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <button class="hero-chart__play" type="button" aria-label="Reproduzir vídeo"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="11" fill="#5b7cfa"/><path d="M10 8l6 4-6 4z" fill="#fff"/></svg></button>
        </div>
        <span class="hero-chart__label">Vídeo em breve</span>
      </div>
    </div>
  </section>

  <section class="feature-block">
    <div class="container feature-block__inner">
      <div class="feature-block__copy">
        <p class="eyebrow" data-reveal>Ambientes controlados</p>
        <h2 class="section-title" data-split>Homologação e produção isolados</h2>
        <p data-reveal>Pipelines de deploy simplificados e migração gradual de projetos que hoje vivem em hospedagem compartilhada.</p>
      </div>
      <div class="feature-block__media" data-reveal aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="3" y="4" width="18" height="6" rx="1.5"/><rect x="3" y="14" width="18" height="6" rx="1.5"/><path d="M7 7h.01M7 17h.01"/></svg>
      </div>
    </div>
  </section>

  <section class="feature-block feature-block--reverse">
    <div class="container feature-block__inner">
      <div class="feature-block__copy">
        <p class="eyebrow" data-reveal>Para quem</p>
        <h2 class="section-title" data-split>Sistemas que precisam de infraestrutura própria</h2>
        <p data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="feature-block__media" data-reveal aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="3" y="4" width="18" height="6" rx="1.5"/><rect x="3" y="14" width="18" height="6" rx="1.5"/><path d="M7 7h.01M7 17h.01"/></svg>
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
        <h2 data-split>Vamos conversar sobre o seu projeto?</h2>
        <p>A OTMiz Tech entende sua operação antes de propor qualquer solução.</p>
        <div class="cta-banner__actions">
          <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'partials/footer.php'; include 'partials/scripts.php'; ?>
