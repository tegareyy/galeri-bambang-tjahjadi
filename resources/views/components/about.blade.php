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

    {{-- section 1 --}}
    <section class="container mx-auto mt-32">
        <div class="row">
            <h1 class="text-7xl font-bold tracking-widest">The Story Of Bambang Tjahjadi</h1>
        </div>
        <div class="row flex justify-center gap-x-5 mt-32">
            <div class="col">
                <img src="../img/hero1.jpg" alt="" class="w-52 h-[500px] object-cover rounded-3xl">
            </div>
            <div class="col">
                <img src="../img/hero1.jpg" alt="" class="w-52 h-[500px] object-cover rounded-3xl">
            </div>
            <div class="col">
                <img src="../img/hero1.jpg" alt="" class="w-52 h-[500px] object-cover rounded-3xl">
            </div>
            <div class="col">
                <img src="../img/hero1.jpg" alt="" class="w-52 h-[500px] object-cover rounded-3xl">
            </div>
        </div>
    </section>
    {{-- end section 1 --}}

    {{-- section 2 --}}
    <section class="container mx-auto mt-20 bg-orange-400 border-2 border-solid border-blackDrop">
        <div class="row mt-20">
            <h1 class="text-5xl font-serif font-semibold tracking-wider">Mengenal Bambang Tjahjadi</h1>
        </div>
        <div class="row justify-items-center font-serif  leading-loose mt-10">
            <p>Nama asli saya awalnya BAMBANG KOEN TJAHJO ADI. Karena sakit sakitan, menurut kepercayaan orang jawa,
                nama itu dipandang terlalu berat sehingga diubah menjadi</p>
            <p>BAMBANG TJAHJADI. Saya lahir di Probolinggo, sebuah kota yang terkenal dengan kota angin, mangga dan
                anggur di dekat Gunung Bromo. Masa sekolah saya habiskan di sekolah</p>
            <p>dasar <span class="font-semibold">(SD)</span> sampai dengan Sekolah Menengah Atas <span
                    class="font-semibold">(SMA)</span> Katolik MATER DEI Probolinggo. Meskipun bercita cita sebagai
                pelukis sejak kecil, orang tua saya tidak suka anaknya</p>
            <p>menjadi pelukis, "Kate dadi opo le" itulah kata bapak ketika saya meminta izin untuk kuliah di ASRI
                (Akademi Seni Rupa Indonesia) di Jokjakarta, ketika lulus sekolah di tahun <span
                    class="font-semibold">1975</span>.</p>
        </div>

        {{-- card --}}
        <div class="row flex justify-center mt-16">
            <div class="grid grid-cols-3 gap-x-20 ">
                <div class="border-2 border-solid border-blackDrop p-8 mx-auto bg-cream2">
                    <h1 class="text-xl font-serif font-semibold tracking-wider text-blue-700">Pendidikan Bambang</h1>
                    <div class="mt-4 font-serif">
                        <p>Memiliki koleksi wayang kulit langka dari</p>
                        <p>berbagai daerah di Indonesia, beberapa di</p>
                        <p>antaranya berusia ratusan tahun.</p>
                    </div>
                </div>
                <div class="border-2 border-solid border-blackDrop p-8 mx-auto bg-cream2">
                    <h1 class="text-xl font-serif font-semibold tracking-wider text-blue-700">Perjalanan Melukis</h1>
                    <div class="mt-4 font-serif">
                        <p>Aktif dalam upaya pelestarian dan edukasi</p>
                        <p>tentang seni tradisional Indonesia melalui</p>
                        <p>pameran dan workshop.</p>
                    </div>
                </div>
                <div class="border-2 border-solid border-blackDrop p-8 mx-auto bg-cream2">
                    <h1 class="text-xl font-serif font-semibold tracking-wider text-blue-700">Penghargaan</h1>
                    <div class="mt-4 font-serif">
                        <p>Menerima berbagai penghargaan atas</p>
                        <p>dedikasinya dalam melestarikan warisan</p>
                        <p>budaya Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="font-serif bg-blue-600 p-5 rounded-3xl my-20 text-white mx-auto">
            Pelajari Lebih Lanjut
        </button>
    </section>
    {{-- end section 2 --}}

    {{-- section 3 --}}
    <div class="flex justify-center relative mt-16">
        {{-- garis tengah --}}
        <div class="absolute h-full border-l-2 border-blue-500 left-1/2 transform -translate-x-1/2"></div>

        {{-- konten kiri --}}
        <div class="w-1/2 pr-3 flex justify-end">
            <div class="bg-white p-4 rounded-xl w-auto max-h-fit justify-items-start shadow-2xl mb-8 font-serif">
                <h3 class="text-blue-600 font-bold text-xl">1980</h3>
                <div class="py-4 justify-items-start">
                    <p>Memulai perjalanan sebagai kolektor wayang kulit dan keris</p>
                    <p>tradisional.</p>
                </div>
            </div>
        </div>

        {{-- konten kanan --}}
        <div class="w-1/2 pl-3 flex justify-start mt-52">
            <div class="bg-white p-4 rounded-lg shadow-md mb-8">
                <h3 class="text-blue-600 font-bold">1995</h3>
                <p>Mendirikan museum pribadi untuk memamerkan koleksi seni tradisional.</p>
            </div>
        </div>
    </div>
    {{-- end section 3 --}}


    {{-- section 4 --}}
    <section class="container mx-auto mt-20 bg-blackDrop text-white">
        <div class="row">
            <p class="font-serif text-5xl font-semibold tracking-widest">Artist Of Inspiring Visionaries</p>
        </div>
        <div class="row mt-10">
            <p class="font-inter font-semibold text-lg">Famous artist who are able to transform all their works into</p>
            <p class="font-inter font-semibold text-lg">high-value art</p>
        </div>

        {{-- card --}}
        <div class="row flex justify-center gap-x-7 mt-10 text-blackDrop">
            <div class="col bg-abuCard w-auto h-auto justify-center p-5 rounded-2xl">
                <img src="../img/hero1.jpg" alt=""
                    class="w-[350px] h-[350px] object-cover rounded-2xl border-2 border-black">
                {{-- icon card --}}
                <div class="flex items-center mt-4">
                    <img src="../img/hero1.jpg" alt="" class="w-[70px] h-[70px] rounded-full">
                    <div class="col font-semibold justify-items-center mx-auto text-lg">
                        <p class="font-inter">with superhub collab, orgnize</p>
                        <p class="font-inter">and prioritize feature request</p>
                    </div>
                </div>
            </div>

            <div class="col bg-abuCard w-auto h-auto justify-center p-5 rounded-2xl">
                <img src="../img/hero1.jpg" alt=""
                    class="w-[350px] h-[350px] object-cover rounded-2xl border-2 border-black">

                {{-- icon card --}}
                <div class="flex items-center mt-4">
                    <img src="../img/hero1.jpg" alt="" class="w-[70px] h-[70px] rounded-full">
                    <div class="col font-semibold justify-items-center mx-auto text-lg">
                        <p class="font-inter">with superhub collab, orgnize</p>
                        <p class="font-inter">and prioritize feature request</p>
                    </div>
                </div>
            </div>


            <div class="col bg-abuCard w-auto h-auto justify-center p-5 rounded-2xl">
                <img src="../img/hero1.jpg" alt=""
                    class="w-[350px] h-[350px] object-cover rounded-2xl border-2 border-black">

                {{-- icon card --}}
                <div class="flex items-center mt-4">
                    <img src="../img/hero1.jpg" alt="" class="w-[70px] h-[70px] rounded-full">
                    <div class="col font-semibold justify-items-center mx-auto text-lg">
                        <p class="font-inter">with superhub collab, orgnize</p>
                        <p class="font-inter">and prioritize feature request</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card --}}
    </section>
    {{-- end section 4 --}}

</body>

</html>
