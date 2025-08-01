<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RadioConnect - Digitalisez vos services radio</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900">

  <!-- HEADER -->
  <header class="bg-white shadow">
    <div class="flex justify-between items-center mx-auto px-4 py-4 max-w-7xl">
      <h1 class="font-bold text-indigo-600 text-xl">RadioConnect</h1>
      <a href="#communique" class="font-medium text-indigo-600 text-sm hover:underline">Soumettre un communiqué</a>
    </div>
  </header>

  <!-- HERO -->
  <section class="bg-indigo-600 py-20 text-white">
    <div class="mx-auto px-4 max-w-3xl text-center">
      <h2 class="mb-4 font-bold text-3xl md:text-4xl">Digitalisez les services de votre radio</h2>
      <p class="mb-6 text-lg">Recevez des communiqués, gérez les paiements et programmez vos diffusions facilement.</p>
      <a href="#communique" class="bg-white hover:bg-gray-100 shadow px-6 py-3 rounded font-semibold text-indigo-600 transition">Soumettre un communiqué</a>
    </div>
  </section>

  <!-- COMMENT ÇA MARCHE -->
  <section class="mx-auto px-4 py-16 max-w-5xl">
    <h3 class="mb-10 font-bold text-2xl text-center">Comment ça fonctionne ?</h3>
    <div class="gap-8 grid md:grid-cols-3">
      <div class="bg-white shadow p-6 rounded text-center">
        <h4 class="mb-2 font-semibold text-lg">1. Soumettez votre message</h4>
        <p class="text-gray-600 text-sm">Remplissez un formulaire simple avec votre texte ou audio, et vos coordonnées.</p>
      </div>
      <div class="bg-white shadow p-6 rounded text-center">
        <h4 class="mb-2 font-semibold text-lg">2. Payez en ligne</h4>
        <p class="text-gray-600 text-sm">Payez votre message via Mobile Money (MTN, Moov…) ou carte bancaire.</p>
      </div>
      <div class="bg-white shadow p-6 rounded text-center">
        <h4 class="mb-2 font-semibold text-lg">3. La radio s’en occupe</h4>
        <p class="text-gray-600 text-sm">Votre message est transmis à la radio pour diffusion selon vos préférences.</p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="communique" class="bg-indigo-50 px-4 py-16 text-center">
    <h3 class="mb-4 font-bold text-2xl">Envoyer un communiqué à votre radio locale</h3>
    <p class="mb-6 text-gray-700">Simple, rapide et sans vous déplacer.</p>
    <a href="/soumettre" class="bg-indigo-600 hover:bg-indigo-700 shadow px-6 py-3 rounded font-medium text-white transition">Commencer</a>
  </section>

  <!-- FOOTER -->
  <footer class="py-6 text-gray-500 text-sm text-center">
    © 2025 RadioConnect — Tous droits réservés
  </footer>

</body>
</html>
