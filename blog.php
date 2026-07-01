<?php
$pageTitle = "Blog | OTMiz Tech";
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
      <p class="eyebrow" data-reveal>Blog</p>
      <h1 class="page-hero__title" data-split>Blog OTMiz Tech</h1>
      <p class="page-hero__subtitle" data-reveal>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="page-hero__actions" data-reveal>
        <a href="index.php#contato" class="btn btn--primary">Fale com a gente</a>
        
      </div>
    </div>
  </section>

  <section class="grid-section">
    <div class="container">
      <p class="eyebrow" data-reveal>Posts</p>
      <h2 class="section-title" data-split>Últimas publicações</h2>
      <div class="card-grid">
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Post</span><h3>Post Placeholder 1</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Post</span><h3>Post Placeholder 2</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Post</span><h3>Post Placeholder 3</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Post</span><h3>Post Placeholder 4</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Post</span><h3>Post Placeholder 5</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
        <a href="#" class="info-card" data-reveal><span class="info-card__tag">Post</span><h3>Post Placeholder 6</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p></a>
      </div>
    </div>
  </section>

</main>

<?php include 'partials/footer.php'; include 'partials/scripts.php'; ?>
