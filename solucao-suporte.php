<?php
$pageTitle = "Manutenção & suporte contínuo | OTMiz Tech";
$pageDescription = "Acompanhamento contínuo pós-entrega, correção e evolução do sistema.";
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
        <h1 class="page-hero__title" data-split>Manutenção & suporte contínuo</h1>
        <p class="page-hero__subtitle" data-reveal>Sistema no ar não é o fim do projeto. Acompanhamos, corrigimos e evoluímos cada entrega enquanto ela estiver em uso.</p>
        <div class="page-hero__actions" data-reveal>
          <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
          <a href="clientes.php" class="btn btn--ghost">Ver cases</a>
        </div>
      </div>
      <div class="page-hero__media" data-reveal>
        <div class="hero-chart">
          <div class="hero-chart__dots"></div>
          <div class="hero-chart__bars">
            <span style="--h:50%"></span>
            <span style="--h:65%"></span>
            <span style="--h:45%"></span>
            <span style="--h:60%"></span>
            <span style="--h:80%"></span>
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
        <p class="eyebrow" data-reveal>No dia a dia</p>
        <h2 class="section-title" data-split>Suporte que mantém o sistema relevante</h2>
        <p data-reveal>Monitoramento de erros, ajustes de performance e pequenas evoluções contínuas — meses e anos depois do lançamento.</p>
      </div>
      <div class="feature-block__media" data-reveal aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M14.7 6.3a4 4 0 10-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 005.4-5.4z"/></svg>
      </div>
    </div>
  </section>

  <section class="feature-block feature-block--reverse">
    <div class="container feature-block__inner">
      <div class="feature-block__copy">
        <p class="eyebrow" data-reveal>Para quem</p>
        <h2 class="section-title" data-split>Times sem estrutura interna de TI</h2>
        <p data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="feature-block__media" data-reveal aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M14.7 6.3a4 4 0 10-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 005.4-5.4z"/></svg>
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
