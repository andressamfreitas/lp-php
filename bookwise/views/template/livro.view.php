
<?php
$livro['titulo'];
?>
        <div class="p-2 rounded border-stone-900 border-2">
                    <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div class="space-y-1">
                        <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['titulo']?></a>
                        <div class="text-xs italic"><?=$livro['autor']?></div>
                        <div class="text-xs italic"> ⭐ (3 Avaliações)</div>
                    </div>
                 </div>
                 <div class="text-sm mt-2">
                    <?=$livro['descricao']?>
                 </div>
            </div> 