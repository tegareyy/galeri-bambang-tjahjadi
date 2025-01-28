<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-cream2 text-center">

    @include('components.navbar')

    <!-- Hero 1 -->
    <section class="mt-36 justify-items-center">
        <div class="text-6xl font-serif font-semibold leading-relaxed border-2 border-black">
            <h1>Keajaiban seni dari lidi:</h1>
            <h1>Lukisan memukau penuh detail!</h1>
        </div>
        <div class="mt-24">
            <img src="../img/background/gallery.jpg" alt="" class="w-[1100px] h-[450px] rounded-3xl">
        </div>
        <div class="text-center text-xl mt-10 leading-relaxed">
            <p>Lukisan ini lahir dari teknik unik menggunakan lidi sebagai alat utama. Dengan ketelitian, kesabaran, dan kreativitas</p>
            <p>tinggi, terciptalah karya seni yang memukau. Setiap sapuan lidi menghadirkan tekstur dan pola khas, membuktikan</p>
            <p>bahwa keindahan bisa muncul dari kesederhanaan alat yang digunakan.</p>
        </div>
        <button class="py-3 px-7 bg-brownSemiLight text-white rounded-3xl mt-9">Shop Now</button>
    </section>
    <!-- Hero 1 -->

    <div class="mb-96"></div>

</body>

</html>
