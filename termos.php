<?php
$pageTitle = "Termos de Uso | OTMiz Tech";
$pageDescription = "Termos de uso da OTMiz Tech.";
include 'partials/head.php';
include 'partials/header.php';

$lorem = "Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
$sections = [
  "Definições",
  "Acesso e uso da plataforma",
  "Taxas e pagamento",
  "Direitos de propriedade e licença",
  "Confidencialidade",
  "Representações, garantias e isenções de responsabilidade",
  "Indenização",
  "Limitação de responsabilidade",
  "Prazo e rescisão",
  "Disposições gerais",
];
?>

<main>
  <section class="legal">
    <div class="container legal__inner">
      <p class="eyebrow" data-reveal>Legal</p>
      <h1 data-split>Termos de Uso</h1>
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
