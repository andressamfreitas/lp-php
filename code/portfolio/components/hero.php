<?php
    $itens = [
        ['href' => 'https://www.instagram.com/andressafreitaass?igsh=Ymd1a3FsMXYycTZ5&utm_source=qr', 'src' => '/img/instagram-icon.png', 'alt' => 'Instagram Logo'],
        ['href' => 'https://br.linkedin.com/in/andressafreitasqa', 'src' => '/img/instagram-icon.png', 'alt' => 'Linkedin Logo'],
    ];
?>

<main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
            <section class="flex gap-x-3 mt-3 justify-between">
                <div class="w-2/3">
                    <h1 class="text-2xl font-bold"> Oi, meu nome é Andressa.</h1>
                        <p class="text-xl leading-6 mt-5">
                            Falando um pouco sobre mim, sou quality assurance enginner. Tenho pós graduação em liderança técnica e conhecimentos sólido em testes manuais.
                            Atualmente estou estudando programação voltado para PHP com laravel e html.
                        </p>
                       
                    <ul class="flex font-small gap-y-3 mt-10 text-slate-400">
                        <?php foreach ($itens as $item): ?>
                            <li>
                                <a href="<?= $item['href'] ?> target="_blank">
                                <img class="h-10 hover:animate-bounce rounded-md px-2 py-2", src="<?=$item['src']?>" alt="<?=$item['alt']?>" />
                                </a>
                            </li>
                        <?php endforeach; ?>    

                <div class="w-1/5 flex items-center"> 
                    <div>
                        <img class="rounded-lg -mt-6 hover:animate-pulse" src="https://lh3.googleusercontent.com/a/ACg8ocLqbtOSy-Snx4IhyP1R6do0Ap9gb0XyT_hgi3gNHd7EjRRVI2tV=s260-c-no" alt="foto de perfil" >
                    </div>
            </section>