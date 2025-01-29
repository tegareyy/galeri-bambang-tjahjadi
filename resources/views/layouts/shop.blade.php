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
            <p>Lukisan ini lahir dari teknik unik menggunakan lidi sebagai alat utama. Dengan ketelitian, kesabaran, dan
                kreativitas</p>
            <p>tinggi, terciptalah karya seni yang memukau. Setiap sapuan lidi menghadirkan tekstur dan pola khas,
                membuktikan</p>
            <p>bahwa keindahan bisa muncul dari kesederhanaan alat yang digunakan.</p>
        </div>
        <button class="py-3 px-7 bg-brownSemiLight text-white rounded-3xl mt-9">Shop Now</button>
    </section>
    <!-- Hero 1 -->

    <!-- shop 2 -->
    <section class="grid grid-cols-3 min-h-screen px-28 gap-7 justify-center text-justify border-2 border-black">
        <div class="flex flex-col justify-center font-semibold font-serif">
            <p class="text-xl tracking-wider">2024, January 2024</p>
            <h1 class="text-3xl">Lukisan Gunung</h1>
            <div class="relative">
                <img src="../img/hero2.jpeg" alt="" class="w-full max-h-[350px] rounded-3xl py-2 object-cover">
                <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-5 top-7">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                    </svg>
                </button>
            </div>
            <p>$20.00</p>
        </div>
        <div class="flex flex-col justify-center font-semibold font-serif">
            <p class="text-xl tracking-wider">2024, January 2024</p>
            <h1 class="text-3xl">Lukisan Gunung</h1>
            <div class="relative">
                <img src="../img/hero2.jpeg" alt="" class="w-full max-h-[350px] rounded-3xl py-2 object-cover">
                <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-5 top-7">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                    </svg>
                </button>
            </div>
            <p>$20.00</p>
        </div>
        <div class="flex flex-col justify-center font-semibold font-serif">
            <p class="text-xl tracking-wider">2024, January 2024</p>
            <h1 class="text-3xl">Lukisan Gunung</h1>
            <img src="../img/hero2.jpeg" alt="" class="w-full max-h-[500px] rounded-3xl py-2 object-cover">
            <p class="text-3xl">$20.00</p>
        </div>
    </section>
    <!-- end shop 2 -->

    <!-- shop 3 -->
    <section class="py-5 px-32">
        <div class="text-justify text-6xl mt-20">
            <p class="font-serif font-semibold">20 Best seller in 2024</p>
        </div>
        <div class="flex flex-col gap-y-10">
            <div class="grid grid-cols-3 justify-items-stretch mt-8 gap-7 relative">
                <div class="flex flex-col text-justify text-xl">
                    <div class="relative">
                        <img src="../img/landingPage/section-1/img-bottom-1.jpeg" alt=""
                            class="rounded-lg w-full max-h-[350px] object-cover">
                        <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-3 top-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                        </button>
                    </div>

                    <p class="mt-3">Lukisan Gunung</p>
                    <p class="text-lg">$20.00</p>

                    <div class="mt-3 flex gap-2">
                        <button class="btn-buy">Buy</button>
                        <button class="btn-shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-7">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col text-justify text-xl">
                    <div class="relative">
                        <img src="../img/landingPage/section-1/img-bottom-1.jpeg" alt=""
                            class="rounded-lg w-full max-h-[350px] object-cover">
                        <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-3 top-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                        </button>
                    </div>

                    <p class="mt-3">Lukisan Gunung</p>
                    <p class="text-lg">$20.00</p>

                    <div class="mt-3 flex gap-2">
                        <button class="btn-buy">Buy</button>
                        <button class="btn-shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-7">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col text-justify text-xl">
                    <div class="relative">
                        <img src="../img/landingPage/section-1/img-bottom-1.jpeg" alt=""
                            class="rounded-lg w-full max-h-[350px] object-cover">
                        <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-3 top-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                        </button>
                    </div>

                    <p class="mt-3">Lukisan Gunung</p>
                    <p class="text-lg">$20.00</p>

                    <div class="mt-3 flex gap-2">
                        <button class="btn-buy">Buy</button>
                        <button class="btn-shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-7">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 justify-items-stretch mt-8 gap-7 relative">
                <div class="flex flex-col text-justify text-xl">
                    <div class="relative">
                        <img src="../img/landingPage/section-1/img-bottom-1.jpeg" alt=""
                            class="rounded-lg w-full max-h-[350px] object-cover">
                        <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-3 top-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                        </button>
                    </div>

                    <p class="mt-3">Lukisan Gunung</p>
                    <p class="text-lg">$20.00</p>

                    <div class="mt-3 flex gap-2">
                        <button class="btn-buy">Buy</button>
                        <button class="btn-shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-7">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col text-justify text-xl">
                    <div class="relative">
                        <img src="../img/landingPage/section-1/img-bottom-1.jpeg" alt=""
                            class="rounded-lg w-full max-h-[350px] object-cover">
                        <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-3 top-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                        </button>
                    </div>

                    <p class="mt-3">Lukisan Gunung</p>
                    <p class="text-lg">$20.00</p>

                    <div class="mt-3 flex gap-2">
                        <button class="btn-buy">Buy</button>
                        <button class="btn-shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-7">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col text-justify text-xl">
                    <div class="relative">
                        <img src="../img/landingPage/section-1/img-bottom-1.jpeg" alt=""
                            class="rounded-lg w-full max-h-[350px] object-cover">
                        <button type="submit" class="absolute bg-creamLight px-4 py-3 rounded-3xl right-3 top-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.2" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                        </button>
                    </div>

                    <p class="mt-3">Lukisan Gunung</p>
                    <p class="text-lg">$20.00</p>

                    <div class="mt-3 flex gap-2">
                        <button class="btn-buy">Buy</button>
                        <button class="btn-shopping-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-7">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end shop 3 -->
    <div class="mb-96"></div>

</body>

</html>
