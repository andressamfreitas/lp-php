<?php 
$projetos = [
    [
        "titulo" => "Meu Portfólio",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "Meu primeiro portfolio escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => ""
    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" => "Lista de tarefas escrita em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => ""
    ],
    [
        "titulo" => "Controle de Leitura de livros",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Lista de livros escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => ""
    ],
    [
        "titulo" => "Mais um projeto",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" => "Projeto secreto em andamento, também escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => ""
    ]
]
?>
<?php foreach ($projetos as $projeto) : ?>
    <div class="bg-slate-800 rounded-lg px-4 py-3 flex items-center mb-4">
        <div class="w-1/5 flex items-center justify-center">
            <img src="<?= $projeto['img'] ?>" class="h-10" alt="Imagem do projeto" />
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between items-center">
                <h3 class="font-semibold text-xl text-white">
                    <?= $projeto['titulo'] ?>
                    <?php if ($projeto['finalizado']) : ?>
                        <span class="text-sm opacity-50">(Finalizado em <?= $projeto['ano'] ?>)</span>
                    <?php else : ?>
                        <span class="text-sm opacity-50">(Em desenvolvimento)</span>
                    <?php endif; ?>
                </h3>
                <div class="flex space-x-1">
                    <?php
                    $colors = ['fuchsia', 'lime', 'sky', 'yellow'];
                    foreach ($projeto['stack'] as $index => $language) :
                        $color = $colors[$index % count($colors)];
                    ?>
                        <span class="bg-<?= $color ?>-500 text-<?= $color ?>-900 rounded-md px-3 py-1 text-sm">
                            <?= $language ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6 text-white">
                <?= $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>