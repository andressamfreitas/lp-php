<?php
$id = $_REQUEST['id'];
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
        ID do Livro <?=$id?>

    </main>
</body>
</html>