<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap">
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
            <div class="row mt-[65px] font-serif text-6xl font-semibold">
                <span class="font-light">SELAMAT DATANG DI GALERI</span>
                <div class="font-light">
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
                <div class="col text-5xl font-serif text-justify pt-24">
                    <p class="uppercase">all type of</p>
                    <p class="uppercase">projects</p>
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
            <div class="row text-6xl font-serif font-extrabold text-justify mt-20 ml-[159px]">
                <p class="font-light">Coming up</p>
                <p class="font-light">events</p>
            </div>

            {{-- image --}}
            <div class="w-[1200px] h-[550px] mx-auto mt-[42px] bg-cover bg-object rounded-3xl relative"
                style="background-image: url(../img/hero1.jpg)"> <!-- make center image -->

                {{-- text in image --}}
                <div class="text-justify bottom-10 left-7 p-4 absolute">
                    <h1 class="text-white text-6xl font-serif">Surabaya Gallery</h1>
                    <h1 class="text-white text-6xl font-serif">exhbition</h1>
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


    <div class="mb-96"></div>

</body>

</html>
