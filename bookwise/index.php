<?php
$livros = [
    ['id' =>1, 'titulo' => 'A arte da gestão', 'autor' => 'Camille Fournier', 'descricao' => 'Um guia prático oara integrar liderança e recursos humanos no setor de tecnologia'],
    ['id' =>2, 'titulo' => 'Como falar em público e influenciar pessoas', 'autor' => 'Dale Carnegie', 'descricao' => 'O poder transformador da comunicação na vida do homem.'],
    ['id' =>3, 'titulo' => 'A coragem para liderar', 'autor' => 'Brené Brown', 'descricao' => 'Trabalho duro, conversas difíceis e corações plenos.'],
    ['id' =>4, 'titulo' => 'Comece pelo porque', 'autor' => 'Simon Sinek', 'descricao' => 'Como grandes líderes inspiram pessoas e equipes a agir'],
    ['id' =>5, 'titulo' => 'O poder do hábito', 'autor' => 'Charles Duhigg', 'descricao' => 'Por que fazemos o que fazemos na vida e nos negócios'],
    ['id' =>6, 'titulo' => 'Pipeline de liderança', 'autor' => 'Ram Charan', 'descricao' => 'O desenvolvimento de líderes como diferencial competitivo'],
    ['id' =>7, 'titulo' => 'Morra sem nada', 'autor' => 'Bill Perkins', 'descricao' => 'Aproveite ao máximo sua vida e seu dinheiro e morra zerado'],
    ['id' =>8, 'titulo' => 'Hábitos Atômicos', 'autor' => 'James Clear', 'descricao' => 'um Método Fácil e Comprovado de Criar Bons Hábitos e se Livrar dos Maus'],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book Wise</title>
</head>
<body class="bg-stone-950 text-stone-200">
<body>
    <header class="bg-stone-900" border-b-stone-900>
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8">
            <div class="font-bold text-xl tracking-wide"> Book Wise </div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline" >Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
            <form class="w-full flex space-x-2 mt-6">
                <input 
                type="text" 
                class="border-stone-900 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 " 
                placeholder="Pesquisar..."
                name=""
                />
                <button type="submit"> :mag_right: </button>
            </form>

            <!-- Lista de Livros -->
            <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Livro -->

                <?php foreach($livros as $livro): ?>
                 <div class="p-2 rounded border-stone-900 border-2">
                    <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div class="space-y-1">
                        <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['titulo']?></a>
                        <div class="text-xs italic"><?=$livro['autor']?></div>
                        <div class="text-xs italic"> :star: (3 Avaliações)</div>
                    </div>
                 </div>
                 <div class="text-sm mt-2">
                    <?=$livro['descricao']?>
                 </div>
            </div> 
            <?php endforeach; ?>
            </section>

    </main>
</body>
</html>