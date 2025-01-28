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
    <section class="mt-36">
        <div class="container">
            <div class="text-6xl font-serif font-semibold leading-relaxed border-2 border-black">
                <h1>Keajaiban seni dari lidi:</h1>
                <h1>Lukisan memukau penuh detail!</h1>
            </div>
            <img src="../img/background/gallery.jpg" alt="" class="w-1 h-3 mx-auto rounded-3xl block">
        </div>
    </section>
    <!-- Hero 1 -->

    <!-- Hero 1 -->
    <div class="container mt-32">
        <div class="font-serif font-semibold">
            <h1 class="flex text-[50px] ml-80 justify-start tracking-widest">A Story Of</h1>
            <h1 class="text-7xl tracking-widest">Bambang Tjahjadi</h1>
        </div>

        {{-- image --}}
        <div class="grid grid-cols-4 justify-items-center mt-16 mx-auto h-[500px] max-w-max gap-x-4">
            <div class="flex items-center">
                <img src="../img/landingPage/section-1/img-bottom-2.jpeg" alt=""
                    class="w-60 h-[400px] rounded-2xl">
            </div>

            <div class="">
                <img src="../img/landingPage/section-1/img-top-2.jpeg" alt="" class="w-60 h-full rounded-2xl">
            </div>

            <div>
                <img src="../img/landingPage/section-1/img-top-1.jpeg" alt=""
                    class="w-60 h-full -mt-10 rounded-2xl">
            </div>

            <div class="flex items-center">
                <img src="../img/landingPage/section-2/img-3.jpeg" alt="" class="w-60 h-[400px] rounded-2xl">
            </div>
        </div>
        {{-- end image --}}
    </div>
    <!-- end Hero 1 -->

    <div class="mb-96"></div>

</body>

</html>
