<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-cream2 text-center">

    <!-- Navbar -->
    <div class="col">
        <div class="row">
            <div class="flex justify-center mt-8">
                <ul class="flex gap-x-24">
                    <li>
                        <a href="" class="font-semibold font-inter text-2xl">Home</a>
                    </li>
                    <li>
                        <a href="" class="font-semibold font-inter text-2xl">Resource</a>
                    </li>
                    <li>
                        <a href="" class="font-semibold font-inter text-2xl">Support</a>
                    </li>
                    <li>
                        <a href="" class="font-semibold font-inter text-2xl">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end Navbar -->

    <!-- Hero 1 -->
    <div class="max-w-full max-h-full">
        <div class="container">
            <!-- foto atas -->
            <div class="flex row justify-between">
                <div class="col">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-36 top-32 -right-56 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-32 h-44 top-44 -right-40 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-52 h-36 mt-36 left-28 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-36 h-56 -left-10 relative object-cover rounded-md">
                </div>
            </div>
            <!-- foto atas -->

            <!-- text middle -->
            <div class="row mt-[65px] text-6xl ">
                <span class="font-serif font-semibold">SELAMAT DATANG DI GALERI</span>
                <div class="font-serif font-semibold">
                    BAMBANG TJAHJADI
                </div>
            </div>
            <!-- text middle -->

            <!-- foto bawah -->
            <div class="flex row justify-between">
                <div class="col">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-28 h-32 -top-5 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-[140px] h-32 left-6 -bottom-14 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-60 h-32 mt-36 -left-12 -bottom-9 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-40 h-36 -top-2 -left-28 relative object-cover rounded-md">
                </div>
            </div>
            <!-- foto bawah -->
        </div>


    </div>
    <!-- end Hero 1 -->


    <!-- Hero 2 -->
    <div class="w-full min-h-screen bg-blackDrop mt-10 pb-44 relative">
        <div class="container mx-auto text-white justify-items-center">
            <!-- text -->
            <div class="row flex">
                <div class="col text-5xl text-justify pt-24">
                    <p class="font-serif uppercase">all type of</p>
                    <p class="font-serif uppercase">projects</p>
                </div>
                <div class="col text-xl ml-8 text-justify pt-44">
                    <p>with superhub collab, organize and prioritize feature request to</p>
                    <p>better understand with you any with superhub collab, organize</p>
                    <p>and prioritize feature request to better understand with you</p>
                    <p>any</p>
                </div>
            </div>
            <!-- end text -->

            <!-- image -->
            <div class="flex row justify-between">
                <div class="col">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-56 -left-44 -bottom-16 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-48 h-72 -left-24 -bottom-64 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-56 h-96 -right-28 -top-3 relative object-cover rounded-md">
                </div>
                <div class="col ">
                    <img src="../img/hero1.jpg" alt=""
                        class="w-52 h-72 -right-[275px] -bottom-5 relative object-cover rounded-md">
                </div>
            </div>
            <!-- end image -->
        </div>
    </div>
    <!-- end Hero 2 -->

    {{-- hero 3 --}}
    <section class="w-full min-h-screen bg-cream2">
        <div class="container">
            <div class="row text-7xl text-justify mt-20 ml-[159px]">
                <p class="font-semibold font-serif">Coming up</p>
                <p class="font-semibold font-serif">events</p>
            </div>

            {{-- image --}}
            <div class="w-[1200px] h-[550px] mx-auto mt-[42px] bg-cover bg-object rounded-3xl relative"
                style="background-image: url(../img/hero1.jpg)"> <!-- make center image -->

                {{-- text in image --}}
                <div class="text-justify bottom-10 left-7 p-4 absolute">
                    <h1 class="text-white text-7xl font-serif">Surabaya Gallery</h1>
                    <h1 class="text-white text-7xl font-serif">exhbition</h1>
                </div>
            </div>

            <div class="container">
                <div class="row mt-7 flex">
                    <div class="col text-xl ml-[160px] text-justify font-semibold">
                        <p class="text-redDrop">Monday, 17 2025</p>
                        <div class="mt-2">
                            <p>with superhub collab, organize and prioritize feature request to</p>
                            <p>better understand with you any with superhub collab, organize</p>
                            <p>and prioritize feature request to better understand with you</p>
                            <p>any</p>
                        </div>

                        <div class="mt-9">
                            <button type="submit"
                                class="border-solid border-black border px-7 py-3 rounded-full bg-black text-white">Get
                                Ticket</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="col text-xl font-semibold justify-items-end mr-40 -mt-[110px]">
                            <p>with superhub collab, organize and prioritize feature request to</p>
                            <p>better understand with you any with superhub collab, organize</p>
                            <p>and prioritize feature request to better understand with you</p>
                            <p>any</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- end hero 3 --}}

    {{-- hero 4 --}}
    <section class="w-full min-h-screen bg-white mt-36">
        <div class="row">
            <div class="col text-[100px] pt-24 pl-24 text-abuCoklat justify-items-start font-serif font-semibold leading-[0.8]">
                <h1>Who is</h1>
                <h1>me?</h1>
            </div>
        </div>
        <div class="row flex justify-center">
            {{-- image --}}
            <div class="bg-cover bg-object">
                <img src="../img/hero1.jpg" alt="" class="rounded-2xl w-[400px] h-[450px] -top-10 -right-4 relative">
            </div>
            <div class="col text-6xl justify-items-start -right-14 leading-[4.5rem] relative">
                <p class="font-serif">Bambang Tjahjadi seorang</p>
                <p class="font-serif">pelukis yang mengganti</p>
                <p class="font-serif">namanya karena sakit</p>
                <p class="font-serif">sakitan</p>
            </div>
        </div>

            <button type="submit" class="border-solid border-black border px-7 py-3 rounded-full bg-black text-white text-xl font-semibold -left-8 -top-28 relative"><span class="font-inter">Get Ticket</span></button>
    </section>
    {{-- end hero 4 --}}

    {{-- hero 5 --}}
    <section class="w-full min-h-screen">
        <div class="container mt-28">
            <div class="row justify-items-center">
                <p class="font-serif text-6xl font-semibold">What's</p>
                <p class="font-serif text-6xl font-semibold">happening at the</p>
                <p class="font-serif text-6xl font-semibold">museum right</p>
                <p class="font-serif text-6xl font-semibold">now.</p>
            </div>

            <button type="submit" class="border-black border px-7 py-3 rounded-full bg-black text-white text-xl font-semibold mt-10">See more</button>

            <div class="row mt-36">
                <div class="grid grid-cols-4 justify-items-center justify-stretch px-20">
                    <div>
                        <img src="../img/hero1.jpg" alt="Foto 1" class="w-[310px] h-96 rounded-md object-cover">
                    </div>
                    <div>
                        <img src="../img/hero1.jpg" alt="Foto 1" class="w-[310px] h-96 rounded-md object-cover">
                    </div>
                    <div>
                        <img src="../img/hero1.jpg" alt="Foto 1" class="w-[310px] h-96 rounded-md object-cover">
                    </div>
                    <div>
                        <img src="../img/hero1.jpg" alt="Foto 1" class="w-[310px] h-96 rounded-md object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end hero 5 --}}


    <div class="mb-96"></div>

</body>

</html>
