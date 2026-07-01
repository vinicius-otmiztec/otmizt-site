<?php
$pageTitle = "OTMiz Tech — Software sob medida para operações que não podem parar";
$pageDescription = "OTMiz Tech desenvolve sistemas sob medida, sites institucionais, integrações e infraestrutura para empresas que não podem parar.";
include 'partials/head.php';
include 'partials/header.php';
?>

<main id="topo">

  <!-- HERO -->
  <section class="hero">
    <div class="hero__pin">
      <div class="hero__bg" aria-hidden="true">
        <div class="hero__glow hero__glow--1"></div>
        <div class="hero__glow hero__glow--2"></div>
        <div class="hero__grid"></div>
      </div>

      <div class="hero__scene" aria-hidden="true">
        <svg class="hero-network" viewBox="0 0 800 600">
          <defs>
            <linearGradient id="hnLineGrad" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#5b7cfa"/>
              <stop offset="100%" stop-color="#7cf5c4"/>
            </linearGradient>
            <radialGradient id="hnGlow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#5b7cfa" stop-opacity=".55"/>
              <stop offset="100%" stop-color="#5b7cfa" stop-opacity="0"/>
            </radialGradient>
          </defs>

          <g class="hn-lines" fill="none" stroke="url(#hnLineGrad)" stroke-width="2" stroke-linecap="round">
            <path class="hn-line" d="M400,300 L400,80"/>
            <path class="hn-line" d="M400,300 L609,232"/>
            <path class="hn-line" d="M400,300 L529,478"/>
            <path class="hn-line" d="M400,300 L271,478"/>
            <path class="hn-line" d="M400,300 L191,232"/>
          </g>

          <circle class="hn-core-glow" cx="400" cy="300" r="90" fill="url(#hnGlow)"/>
          <circle class="hn-core" cx="400" cy="300" r="42" fill="#12141b" stroke="#5b7cfa" stroke-width="2"/>
          <path class="hn-core-icon" transform="translate(388,288)" fill="#7cf5c4" d="M12 2l2.5 7H22l-6 5 2.5 7L12 16.5 5.5 21 8 14 2 9h7.5z"/>

          <g class="hn-node-pos" transform="translate(400,80)">
            <g class="hn-node">
              <circle r="30" fill="#14161d" stroke="rgba(255,255,255,.14)"/>
              <g transform="translate(-12,-12)" fill="none" stroke="#f5f6f8" stroke-width="1.6"><path d="M9 18l-6-6 6-6M15 6l6 6-6 6"/></g>
            </g>
          </g>
          <g class="hn-node-pos" transform="translate(609,232)">
            <g class="hn-node">
              <circle r="30" fill="#14161d" stroke="rgba(255,255,255,.14)"/>
              <g transform="translate(-12,-12)" fill="none" stroke="#f5f6f8" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 010 18M12 3a15 15 0 000 18"/></g>
            </g>
          </g>
          <g class="hn-node-pos" transform="translate(529,478)">
            <g class="hn-node">
              <circle r="30" fill="#14161d" stroke="rgba(255,255,255,.14)"/>
              <g transform="translate(-12,-12)" fill="none" stroke="#f5f6f8" stroke-width="1.6"><path d="M9 3H5a2 2 0 00-2 2v4M15 3h4a2 2 0 012 2v4M9 21H5a2 2 0 01-2-2v-4M15 21h4a2 2 0 002-2v-4"/></g>
            </g>
          </g>
          <g class="hn-node-pos" transform="translate(271,478)">
            <g class="hn-node">
              <circle r="30" fill="#14161d" stroke="rgba(255,255,255,.14)"/>
              <g transform="translate(-12,-12)" fill="none" stroke="#f5f6f8" stroke-width="1.6"><rect x="3" y="4" width="18" height="6" rx="1.5"/><rect x="3" y="14" width="18" height="6" rx="1.5"/><path d="M7 7h.01M7 17h.01"/></g>
            </g>
          </g>
          <g class="hn-node-pos" transform="translate(191,232)">
            <g class="hn-node">
              <circle r="30" fill="#14161d" stroke="rgba(255,255,255,.14)"/>
              <g transform="translate(-12,-12)" fill="none" stroke="#f5f6f8" stroke-width="1.6"><path d="M14.7 6.3a4 4 0 10-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 005.4-5.4z"/></g>
            </g>
          </g>
        </svg>
      </div>

      <div class="container hero__inner">
        <p class="eyebrow" data-reveal>OTMiz Tech</p>
        <h1 class="hero__title" data-split>A tecnologia que sustenta sua operação, sob medida</h1>
        <p class="hero__subtitle" data-reveal>
          Desenvolvimento sob medida, integrações, infraestrutura e suporte contínuo — tudo em um só time, sem depender de múltiplos fornecedores.
        </p>
        <div class="hero__actions" data-reveal>
          <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
          <a href="index.php#solucoes" class="btn btn--ghost">Conhecer nossas soluções</a>
        </div>
      </div>
      <div class="scroll-hint" data-reveal>
        <span>role para explorar</span>
        <div class="scroll-hint__line"></div>
      </div>
    </div>
  </section>

  <!-- TRANSIÇÃO: raios convergentes entre hero e próxima seção -->
  <section class="transition-scene" aria-hidden="true">
    <div class="transition-words container">
      <span data-reveal>Diagnóstico</span>
      <span data-reveal>Desenvolvimento</span>
      <span data-reveal>Deploy</span>
      <span data-reveal>Suporte</span>
    </div>
    <svg class="transition-rays" viewBox="0 0 800 260" preserveAspectRatio="xMidYMin meet">
      <defs>
        <linearGradient id="trGrad" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-color="#5b7cfa" stop-opacity="0"/>
          <stop offset="100%" stop-color="#5b7cfa" stop-opacity=".8"/>
        </linearGradient>
      </defs>
      <g class="transition-rays__lines" fill="none" stroke="url(#trGrad)" stroke-width="1.5">
        <path class="transition-ray" d="M40,0 L400,220"/>
        <path class="transition-ray" d="M220,0 L400,220"/>
        <path class="transition-ray" d="M400,0 L400,220"/>
        <path class="transition-ray" d="M580,0 L400,220"/>
        <path class="transition-ray" d="M760,0 L400,220"/>
      </g>
      <circle class="transition-point" cx="400" cy="220" r="4" fill="#7cf5c4"/>
    </svg>
    <div class="transition-vline">
      <span class="transition-dot" data-transition-dot></span>
    </div>
  </section>

  <!-- MARQUEE (stack real) -->
  <section class="marquee" aria-hidden="true">
    <div class="marquee__track">
      <span>PHP</span><span>Laravel</span><span>WordPress</span><span>PostgreSQL</span>
      <span>MySQL</span><span>Docker</span><span>Coolify</span><span>n8n</span>
      <span>REST APIs</span><span>Vue.js</span>
      <span>PHP</span><span>Laravel</span><span>WordPress</span><span>PostgreSQL</span>
      <span>MySQL</span><span>Docker</span><span>Coolify</span><span>n8n</span>
      <span>REST APIs</span><span>Vue.js</span>
    </div>
  </section>

  <!-- TRUSTED BY -->
  <section class="trusted-by">
    <div class="container">
      <p data-reveal>A OTMiz Tech já apoia operações de diferentes segmentos</p>
      <div class="trusted-by__logos" data-reveal>
        <span>Cliente A</span><span>Cliente B</span><span>Cliente C</span><span>Cliente D</span><span>Cliente E</span><span>Cliente F</span>
      </div>
    </div>
  </section>

  <!-- FEATURE BLOCK 1: QUEM SOMOS -->
  <section class="feature-block">
    <div class="container feature-block__inner">
      <div class="feature-block__copy">
        <p class="eyebrow" data-reveal>Quem somos</p>
        <h2 class="section-title" data-split>Um só time por trás de toda a sua tecnologia</h2>
        <p data-reveal>A OTMiz Tech é uma equipe de desenvolvimento que assume sistemas, sites, integrações e infraestrutura como um único parceiro — sem terceirizar pedaços do seu projeto entre fornecedores diferentes.</p>
        <div class="hero__actions" data-reveal style="margin-top:24px;">
          <a href="sobre.php" class="btn btn--ghost">Conhecer a OTMiz Tech</a>
        </div>
      </div>
      <div class="feature-block__media" data-reveal aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v5"/></svg>
      </div>
    </div>
  </section>

  <!-- FEATURE BLOCK 2: SOLUÇÕES -->
  <section class="grid-section" id="solucoes">
    <div class="container">
      <p class="eyebrow" data-reveal>Soluções</p>
      <h2 class="section-title" data-split>O que fazemos</h2>
      <div class="card-grid" style="margin-top:48px;">
        <a href="solucao-desenvolvimento.php" class="info-card" data-reveal>
          <span class="info-card__tag">Solução</span>
          <h3>Desenvolvimento sob medida</h3>
          <p>Sistemas web em Laravel/PHP construídos em torno do processo real da sua operação.</p>
        </a>
        <a href="solucao-sites-wordpress.php" class="info-card" data-reveal>
          <span class="info-card__tag">Solução</span>
          <h3>Sites institucionais &amp; WordPress</h3>
          <p>Sites profissionais com manutenção contínua e suporte a plugins/temas.</p>
        </a>
        <a href="solucao-integracoes.php" class="info-card" data-reveal>
          <span class="info-card__tag">Solução</span>
          <h3>Integrações &amp; automações</h3>
          <p>Conectamos seus sistemas via API a prescrição digital, birôs de crédito e automações.</p>
        </a>
        <a href="solucao-infraestrutura.php" class="info-card" data-reveal>
          <span class="info-card__tag">Solução</span>
          <h3>Infraestrutura &amp; DevOps</h3>
          <p>Deploy e monitoramento em VPS próprias, com Docker e Coolify.</p>
        </a>
        <a href="solucao-suporte.php" class="info-card" data-reveal>
          <span class="info-card__tag">Solução</span>
          <h3>Manutenção &amp; suporte</h3>
          <p>Acompanhamento contínuo pós-entrega, correção e evolução do sistema.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- CASES (scroll horizontal) -->
  <section class="cases" id="cases">
    <div class="cases__pin">
      <div class="cases__intro container">
        <p class="eyebrow" data-reveal>Clientes</p>
        <h2 class="section-title" data-split>Sistemas reais, em produção</h2>
      </div>
      <div class="cases__track">
        <article class="case-card">
          <span class="case-card__index">01</span>
          <h3>Case A</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
          <div class="case-card__tags"><span>Lorem</span><span>Ipsum</span></div>
        </article>
        <article class="case-card">
          <span class="case-card__index">02</span>
          <h3>Case B</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
          <div class="case-card__tags"><span>Lorem</span><span>Ipsum</span></div>
        </article>
        <article class="case-card">
          <span class="case-card__index">03</span>
          <h3>Case C</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
          <div class="case-card__tags"><span>Lorem</span><span>Ipsum</span></div>
        </article>
        <article class="case-card">
          <span class="case-card__index">04</span>
          <h3>Case D</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
          <div class="case-card__tags"><span>Lorem</span><span>Ipsum</span></div>
        </article>
        <article class="case-card">
          <span class="case-card__index">05</span>
          <h3>Case E</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
          <div class="case-card__tags"><span>Lorem</span><span>Ipsum</span></div>
        </article>
      </div>
    </div>
  </section>

  <!-- STATS / COMUNIDADE -->
  <section class="stats container">
    <p class="eyebrow" data-reveal style="grid-column:1/-1;">Confiado por quem já opera com a gente</p>
    <div class="stat" data-reveal>
      <span class="stat__number" data-count="15" data-suffix="+">0</span>
      <span class="stat__label">lorem ipsum dolor</span>
    </div>
    <div class="stat" data-reveal>
      <span class="stat__number" data-count="8" data-suffix="+">0</span>
      <span class="stat__label">lorem ipsum dolor sit</span>
    </div>
    <div class="stat" data-reveal>
      <span class="stat__number" data-count="10" data-suffix="+">0</span>
      <span class="stat__label">lorem ipsum dolor sit amet</span>
    </div>
    <div class="stat" data-reveal>
      <span class="stat__number" data-count="24" data-suffix="/7">0</span>
      <span class="stat__label">lorem ipsum dolor</span>
    </div>
    <p class="stats__note">*conteúdo placeholder, em construção</p>
  </section>

  <!-- CTA final / CONTATO -->
  <section class="cta-banner-wrap" id="contato">
    <div class="container">
      <div class="cta-banner" data-reveal>
        <h2 data-split>Vamos conversar sobre o seu projeto?</h2>
        <p>A OTMiz Tech entende sua operação antes de propor qualquer solução.</p>
        <div class="cta-banner__actions">
          <a href="mailto:contato@otmiztech.com.br" class="btn btn--primary">Fale com a gente</a>
          <a href="index.php#solucoes" class="btn btn--ghost">Ver nossas soluções</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'partials/footer.php'; include 'partials/scripts.php'; ?>
