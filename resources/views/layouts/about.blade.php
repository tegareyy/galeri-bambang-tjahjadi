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

    <!-- Hero 2 -->
    <div class="grid grid-cols-2 mt-32 py-36 bg-blackDrop">
        {{-- left content --}}
        <div class="text-8xl tracking-wider font-serif text-justify font-semibold">
            <div class="ml-24">
                <h1 class="text-abuCoklat">Who is</h1>
                <h1 class="text-abuCoklat">Bambang</h1>
                <h1 class="text-abuCoklat">Tjahjadi?</h1>
            </div>

            <div class="font-serif tracking-wide ml-24 mt-14">
                <h1 class="text-brownLight text-4xl">Perjalanan sebagai pelukis</h1>
                <div class="text-lg leading-loose font-inter tracking-normal mt-2 ml-12 text-abuCoklat">
                    <p>with superhub collab, organize and prioritize feature request to</p>
                    <p>better understand with you any with superhub collab, organize</p>
                    <p>and prioritize feature request to better understand with you</p>
                    <p>any</p>

                    <button type="submit" class="py-2 px-12 bg-brownSemiLight text-white rounded-full mt-10">More
                    </button>
                </div>
            </div>
        </div>

        {{-- right content --}}
        <div class="flex flex-col items-center align-middle leading-relaxed font-serif text-justify mt-32 -ml-10">
            <div class=" font-serif font-semibold tracking-wider">
                <h1 class="text-4xl text-brownLight tracking-widest">Story</h1>
                <div class="text-lg leading-relaxed font-inter tracking-normal ml-10 mt-4 text-abuCoklat">
                    <p>Nama asli saya awalnya BAMBANG KOEN TJAHJO ADI. Karena</p>
                    <p>sakit sakitan, menurut kepercayaan orang jaw, nama itu</p>
                    <p>dipandang terlalu berat sehingga diubah menjadi Bambang</p>
                    <p>Tjajadi. Lahir di Probolinggo dan masa sekolah saya habiskan</p>
                    <p>disana. Saat kecil saya bercita cita menjadi seorang pelukis,</p>
                    <p>tetapi orang tua saya tidak suka jika anaknya menjadi pelukis</p>
                    <p>"Kata dadi opo le" itulah kata bapak ketika saya minta izin</p>
                    <p>untuk berkuliah di ASRI (Akademi Seni Rupa Indonesia) di</p>
                    <p>Jogjakarta.</p>
                </div>
            </div>

            <div class=" font-serif font-semibold tracking-wider mt-7">
                <h1 class="text-4xl text-brownLight tracking-widest">Awards</h1>
                <div class="text-lg leading-relaxed font-inter tracking-normal ml-10 mt-4 text-abuCoklat">
                    <p>with superhub collab, organize and prioritize feature request to</p>
                    <p>better understand with you any with superhub collab, organize</p>
                    <p>and prioritize feature request to better understand with you</p>
                    <p>any</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end Hero 2 -->

    {{-- section 3 --}}
    <section class="container mx-auto py-28">
        <div class="font-serif text-7xl font-semibold tracking-wider text-abuCoklat">
            <h1 class="">Artist Of Inspiring</h1>
            <h1 class=""> Visionaries</h1>
        </div>
        <div class="mt-6 font-inter text-lg">
            <p class="">Famous artist who are able to transform all their works into</p>
            <p class="">high-value art</p>
        </div>

        {{-- card --}}
        <div class="row flex justify-center gap-x-7 mt-7 text-blackDrop">
            <div class="col bg-abuCard w-auto h-auto justify-center p-5 rounded-2xl">
                <img src="../img/hero2.jpeg" alt="" class="w-[350px] h-[350px] object-cover rounded-2xl">
                {{-- icon card --}}
                <div class="flex items-center mt-4">
                    <img src="../img/hero2.jpeg" alt="" class="w-[70px] h-[70px] rounded-full">
                    <div class="col font-semibold justify-items-center mx-auto text-lg">
                        <p class="font-inter">with superhub collab, orgnize</p>
                        <p class="font-inter">and prioritize feature request</p>
                    </div>
                </div>
            </div>

            <div class="col bg-abuCard w-auto h-auto justify-center p-5 rounded-2xl">
                <img src="../img/hero2.jpeg" alt="" class="w-[350px] h-[350px] object-cover rounded-2xl">

                {{-- icon card --}}
                <div class="flex items-center mt-4">
                    <img src="../img/hero2.jpeg" alt="" class="w-[70px] h-[70px] rounded-full">
                    <div class="col font-semibold justify-items-center mx-auto text-lg">
                        <p class="font-inter">with superhub collab, orgnize</p>
                        <p class="font-inter">and prioritize feature request</p>
                    </div>
                </div>
            </div>


            <div class="col bg-abuCard w-auto h-auto justify-center p-5 rounded-2xl">
                <img src="../img/hero2.jpeg" alt="" class="w-[350px] h-[350px] object-cover rounded-2xl">

                {{-- icon card --}}
                <div class="flex items-center mt-4">
                    <img src="../img/hero2.jpeg" alt="" class="w-[70px] h-[70px] rounded-full">
                    <div class="col font-semibold justify-items-center mx-auto text-lg">
                        <p class="font-inter">with superhub collab, orgnize</p>
                        <p class="font-inter">and prioritize feature request</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card --}}
    </section>
    {{-- end section 3 --}}

    <!-- Hero 4 -->
    <section class="pb-24">
        <div class="container justify-items-end px-24 text-8xl font-serif text-abuCoklat font-semibold tracking-wide">
            <h1>Koleksi yang</h1>
            <h1>menakjubkan</h1>
        </div>
        <div class="grid grid-cols-4 px-24 mx-auto auto-cols-max gap-x-5 -mt-20">
            <div class="grid grid-rows-2 gap-y-5">
                <img src="../img/hero2.jpeg" alt="Foto 1" class="w-[450px] h-72 rounded-2xl object-cover">
                <img src="../img/hero2.jpeg" alt="Foto 2" class="w-[450px] h-72 rounded-2xl object-cover">
            </div>
            <div class="flex align-middle items-center justify-center">
                <img src="../img/hero2.jpeg" alt="Foto 2" class="w-[450px] h-72 rounded-2xl object-cover">
            </div>
        </div>
    </section>
    <!-- end Hero 4 -->

    {{-- NB : IF WANT TO USE THIS AGAIN!!! --}}
    {{-- section 3 --}}
    {{-- <div class="container mt-20">
        <div class="row">
            <h1 class="font-serif text-5xl font-bold tracking-widest">Perjalanan Karir</h1>
        </div>
    </div> --}}
    {{-- content section 3 --}}
    {{-- <div class="flex justify-center relative mt-16"> --}}
    {{-- garis tengah --}}
    {{-- <div class="absolute h-full border-l-2 border-blue-500 left-1/2 transform -translate-x-1/2"></div> --}}
    {{-- konten kiri --}}
    {{-- <div class="w-1/2 pr-3 flex justify-end mt-5"> --}}
    {{-- kiri 1 --}}
    {{-- <div
                class="bg-white p-4 rounded-xl w-auto max-h-fit justify-items-start shadow-2xl mb-8 font-serif absolute">
                <h3 class="text-blue-600 font-bold text-xl">1980</h3>
                <div class="py-4 justify-items-start">
                    <p>Memulai perjalanan sebagai kolektor wayang kulit dan keris</p>
                    <p>tradisional.</p>
                </div>
            </div> --}}

    {{-- kiri 2 --}}
    {{-- <div class="relative mt-[410px]">
                <div class="bg-white p-4 rounded-xl w-auto max-h-fit justify-items-start shadow-2xl mb-8 font-serif">
                    <h3 class="text-blue-600 font-bold text-xl">2010</h3>
                    <div class="py-4 justify-items-start">
                        <p>Menerima penghargaan nasional atas kontribusinya dalam</p>
                        <p>pelestarian budaya.</p>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- konten kanan --}}
    {{-- <div class="w-1/2 pl-3 flex justify-start mt-56"> --}}
    {{-- kanan 1 --}}
    {{-- <div class="bg-white p-4 max-h-fit rounded-lg mb-8 justify-items-start shadow-2xl absolute">
                <h3 class="text-blue-600 font-bold text-xl font-serif">1995</h3>
                <div class="justify-items-start font-serif py-4">
                    <p>Mendirikan museum pribadi untuk memamerkan koleksi seni</p>
                    <p>tradisional.</p>
                </div>
            </div> --}}
    {{-- kanan 2 --}}
    {{-- <div class="relative mt-[410px]">
                <div class="bg-white px-4 pt-3 pb-2 max-h-fit rounded-lg mb-8 justify-items-start shadow-2xl">
                    <h3 class="text-blue-600 font-bold text-xl font-serif">Sekarang</h3>
                    <div class="justify-items-start font-serif py-4">
                        <p>Aktif mengadakan pameran dan workshop untuk generasi muda.</p>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
    {{-- end section 3 --}}

</body>

</html>
