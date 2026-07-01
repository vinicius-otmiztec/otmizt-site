<?php
$pageTitle = "Política de Privacidade | OTMiz Tech";
$pageDescription = "Política de privacidade da OTMiz Tech.";
include 'partials/head.php';
include 'partials/header.php';

$lorem = "Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
$sections = [
  "Aplicabilidade desta política de privacidade",
  "Informações pessoais que coletamos",
  "Como usamos suas informações pessoais",
  "Bases legais para o processamento",
  "Como compartilhamos suas informações pessoais",
  "Processamento transfronteiriço de dados pessoais",
  "Suas escolhas",
  "Retenção de dados",
  "Outros sites, aplicativos móveis e serviços",
  "Práticas de segurança",
  "Alterações a esta política de privacidade",
  "Como entrar em contato conosco",
];
?>

<main>
  <section class="legal">
    <div class="container legal__inner">
      <p class="eyebrow" data-reveal>Legal</p>
      <h1 data-split>Política de Privacidade</h1>
      <?php foreach ($sections as $i => $title): ?>
      <section data-reveal>
        <h2><?= ($i + 1) . '. ' . $title ?></h2>
        <p><?= $lorem ?></p>
      </section>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php include 'partials/footer.php'; include 'partials/scripts.php'; ?>
