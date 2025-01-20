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

    <section class="container mx-auto mt-20">
        <div class="row">
            <p class="font-serif text-5xl font-semibold">Artist Of Inspiring Visionaries</p>
        </div>
        <div class="row mt-10">
            <p class="font-inter font-semibold text-lg">Famous artist who are able to transform all their works into</p>
            <p class="font-inter font-semibold text-lg">high-value art</p>
        </div>

        {{-- card --}}
        <div class="row flex justify-center gap-x-7 mt-10">
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

</body>

</html>
