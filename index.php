<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Meu Portfolio </title>
        <script src="https://cdn.tailwindcss.com"></script>
        
    </head>
    <body class="bg-slate-950 text-gray-400">
        <?php include('./code/portfolio/components/header.php'); ?>
    
        <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
            <?php include('./code/portfolio/components/hero.php'); ?>

            
            <section class="space-y-3 py-6" id="projetos"> 
                <h2 class="text-2xl font-bold">Meus projetos</h2>

                <?php include('./code/portfolio/components/projetos.php'); ?>

        <footer class="mx-auto max-w-screen-lg min-h-20">
            <div class="border-t border-gray-600 px-3 pt-3 text-gray-400 text-sm">
                Copyright 2025. Construído por mim \o/ 

            </div>

        </footer>
    </body>
</html>