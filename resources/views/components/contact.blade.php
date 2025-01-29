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

<body class=" text-center">

    <section class="max-h-fit max-w-full">
        <div class="grid grid-cols-[2fr_1.7fr]"> <!-- grid-cols-[2fr_1.7fr] = grid 2:1.7 -->
            <!-- left -->
            <div class="py-10 px-20">
                <div class="flex flex-col font-serif text-justify">
                    <p class="bg-yellowSemidark w-fit py-3 px-12 text-xl rounded-3xl font-semibold tracking-wider">
                        Contact</p>
                    <h1 class="text-6xl py-4">Get in touch</h1>
                    <p class="text-xl">We're to help. Chat our team 24/7 and get set up and ready to go in just 10
                        minutes</p>
                    <!-- link social -->
                    <div class="flex flex-col py-5 leading-loose">
                        <!-- link Instagram -->
                        <a href="https://instagram.com" target="_blank"
                            class="flex items-center space-x-2 text-gray-600 hover:text-pink-500 transition-colors">
                            <!-- SVG Logo Instagram -->
                            <svg class="size-8 text-white border-2 border-blackDrop bg-blackDrop rounded-md"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                            <span class="text-blueOcean text-lg font-semibold tracking-wide">Chat with Instagram</span>
                        </a>

                        <!-- link WhatsApp -->
                        <a href="https://wa.me/123456789" target="_blank"
                            class="flex items-center space-x-2 text-gray-600 hover:text-green-500 transition-colors mt-4">
                            <!-- SVG Logo WhatsApp -->
                            <svg class="size-8 p-0.5 text-white border-2 border-blackDrop bg-blackDrop rounded-md"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            <span class="text-blueOcean text-lg font-semibold tracking-wide">Chat with Whatsapp</span>
                        </a>
                    </div>
                    <!-- end link social -->
                </div>
                <form action="#" class="mt-10">
                    <div class="grid grid-cols-2 font-serif text-2xl gap-4 tracking-wider">
                        <div class="flex flex-col text-justify">
                            <label for="first-name" class="font-semibold">
                                First
                            </label>
                            <input type="text" name="first-name" id="first-name" required
                                class="bg-InputForm px-4 py-5 rounded-2xl border-2 border-gray-400 text-xl">
                        </div>
                        <div class="flex flex-col text-justify">
                            <label for="last-name" class="font-semibold">
                                Last name
                            </label>
                            <input type="text" name="last-name" id="last-name" required
                                class="bg-InputForm px-4 py-5 rounded-2xl border-2 border-gray-400 text-xl">
                        </div>
                    </div>
                    <div class="flex flex-col font-serif text-2xl tracking-wider text-justify mt-4">
                        <label for="email" class="font-semibold">
                            Email
                        </label>
                        <input type="email" name="email" id="email" required
                            class="bg-InputForm px-4 py-5 rounded-2xl border-2 border-gray-400 text-xl">
                    </div>
                    <div class="flex flex-col font-serif text-2xl tracking-wider text-justify mt-4">
                        <label for="phone" class="font-semibold">
                            Phone Number
                        </label>
                        <input type="number" name="phone" id="phone" required
                            class="bg-InputForm px-4 py-5 rounded-2xl border-2 border-gray-400 text-xl">
                    </div>
                    <div class="flex flex-col font-serif text-2xl tracking-wider text-justify mt-4">
                        <label for="message" class="font-semibold">
                            Messsage
                        </label>
                        <textarea name="message" id="message" rows="5" maxlength="255" required
                            class="bg-InputForm px-4 py-5 rounded-2xl border-2 border-gray-400 text-xl resize-none text-start placeholder:text-start focus:text-start"
                            style="text-align: left"></textarea>
                    </div>

                    <button type="submit"
                        class="flex text-xl py-4 px-11 bg-blackDrop text-white rounded-full justify-items-start mt-6">Send</button>
                </form>
            </div>
            <!-- right -->
            <div>
                <img src="../img/hero2.jpeg" alt="Art Yunani" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

</body>

</html>
