<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Meu Portfolio </title>
        <script src="https://cdn.tailwindcss.com"></script>
        
    </head>
    <body class="bg-slate-950 text-gray-400">
        <?php include('./components/header.php'); ?>

        <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
            <section class="flex gap-x-3 mt-3 justify-between">
                <div class="w-2/3">
                    <h1 class="text-2xl font-bold"> Oi, meu nome é Andressa.</h1>
                        <p class="text-xl leading-6 mt-5">
                            Falando um pouco sobre mim, sou quality assurance enginner. Tenho pós graduação em liderança técnica e conhecimentos sólido em testes manuais.
                            Atualmente estou estudando programação voltado para PHP com laravel e html.
                        </p>
                       
                    <ul class="flex font-small gap-y-3 mt-10 text-slate-400">
                        <li><a href="">
                            <div class="flex gap-x-3 mt-3">
                                <li><a href="https://www.instagram.com/andressafreitaass?igsh=Ymd1a3FsMXYycTZ5&utm_source=qr" target="_blank">
                                    <img class="h-10 hover:animate-bounce rounded-md px-2 py-2" src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram logo" />
                                </a></li>
                                <li><a href="https://www.linkedin.com/in/andressafreitasqa?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank">
                                    <img class="h-10 hover:animate-bounce w-[45px] px-2 py-2" src="data:image/png;base64,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" alt="LinkedIn logo" />
                                </a></li>
                    </ul>
                     </div>
                </div>
                <div class="w-1/5 flex items-center"> 
                    <div>
                        <img class="rounded-lg -mt-6 hover:animate-pulse" src="https://lh3.googleusercontent.com/a/ACg8ocLqbtOSy-Snx4IhyP1R6do0Ap9gb0XyT_hgi3gNHd7EjRRVI2tV=s260-c-no" alt="foto de perfil" >
                    </div>
            </section>
            <section class="space-y-3 py-6" id="projetos"> 
                <h2 class="text-2xl font-bold">Meus projetos</h2>
                <div class="bg-slate-800 rounded-lg px-4 py-3 flex items-center">
                    <div class="w-1/5">Foto do projeto</div>
                    <div class="w-4/5 space-y-3">
                        <div class="flex gap-3 justify-between">
                            <h3 class="font-semibold text-xl">
                                Projeto 1 <spam class="text-sm opacity-50"> (Finalizado em 2025)</spam></h3>
                        <div class="flex gap-1 font-semibold text-xs">
                            <spam class="bg-yellow-500 text-yellow-900 rounded-md px-3 py-2 ">PHP </spam>
                            <spam class="bg-fuchsia-500 text-fuchsia-900 rounded-md px-3 py-2 ">JS </spam>
                            <spam class="bg-sky-500 text-sky-900 rounded-md px-3 py-2 ">CSS </spam>
                            <spam class="bg-lime-500 text-lime-900 rounded-md px-3 py-2 ">Tailwind </spam>
                        </div>
                </div>
                <p class="leading-6">
                    Lorem ipsum dolor, sit amet consectetur adipiscign elit.
                    Alias, quas! Nos voluptatem vero dignissimos nemo magnam iusto nam...
                </p>
            </section>
            <section class="space-y-3 py-6"> 
                <div class="bg-slate-800 rounded-lg px-4 py-3 flex items-center">
                    <div class="w-1/5">Foto do projeto</div>
                    <div class="w-4/5 space-y-3">
                        <div class="flex gap-3 justify-between">
                            <h3 class="font-semibold text-xl">
                                Projeto 2 <spam class="text-sm opacity-50"> (Finalizado em 2025)</spam></h3>
                        <div class="flex gap-1 font-semibold text-xs">
                            <spam class="bg-yellow-500 text-yellow-900 rounded-md px-3 py-2 ">PHP </spam>
                            <spam class="bg-fuchsia-500 text-fuchsia-900 rounded-md px-3 py-2 ">JS </spam>
                            <spam class="bg-sky-500 text-sky-900 rounded-md px-3 py-2 ">CSS </spam>
                            <spam class="bg-lime-500 text-lime-900 rounded-md px-3 py-2 ">Tailwind </spam>
                        </div>
                </div>
                <p class="leading-6">
                    Lorem ipsum dolor, sit amet consectetur adipiscign elit.
                    Alias, quas! Nos voluptatem vero dignissimos nemo magnam iusto nam...
                </p>
            </section>
             <section class="space-y-3 py-6"> 
                <div class="bg-slate-800 rounded-lg px-4 py-3 flex items-center">
                    <div class="w-1/5">Foto do projeto</div>
                    <div class="w-4/5 space-y-3">
                        <div class="flex gap-3 justify-between">
                            <h3 class="font-semibold text-xl">
                                Projeto 3 <spam class="text-sm opacity-50"> (Finalizado em 2025)</spam></h3>
                        <div class="flex gap-1 font-semibold text-xs">
                            <spam class="bg-yellow-500 text-yellow-900 rounded-md px-3 py-2 ">PHP </spam>
                            <spam class="bg-fuchsia-500 text-fuchsia-900 rounded-md px-3 py-2 ">JS </spam>
                            <spam class="bg-sky-500 text-sky-900 rounded-md px-3 py-2 ">CSS </spam>
                            <spam class="bg-lime-500 text-lime-900 rounded-md px-3 py-2 ">Tailwind </spam>
                        </div>
                </div>
                <p class="leading-6">
                    Lorem ipsum dolor, sit amet consectetur adipiscign elit.
                    Alias, quas! Nos voluptatem vero dignissimos nemo magnam iusto nam...
                </p>
            </section>
        </main>

        <footer class="mx-auto max-w-screen-lg min-h-20">
            <div class="border-t border-gray-600 px-3 pt-3 text-gray-400 text-sm">
                Copyright 2025. Construído por mim \o/ 

            </div>

        </footer>
    </body>
</html>