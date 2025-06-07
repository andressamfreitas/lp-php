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
<? foreach ($projetos as $projetos) : ?>


<div class="bg-slate-800 rounded-lg px-4 py-3 flex items-center">
                    <div class="w-1/5 flex items-center justify-middle">
                        <img src="<?=$projeto['img']?>" class="h-10" />
                        
                    </div>
                    <div class="w-4/5 space-y-3">
                        <div class="flex gap-3 justify-between">
                            <h3 class="font-semibold text-xl">
                                <?php if($projeto['finalizado']): ?>ok<? endif; ?>
                                <?=$projeto['titulo']?> 
                                <?php if($projeto['finalizado']): ?>
                                <spam class="text-sm opacity-50">(Finalizado em <?=$projeto['ano']?>)</spam>
                                <?php else: ?>
                                     <spam class="text-sm opacity-50">(em desenvolvimento)</spam>
                                <?php endif; ?>
                            </h3>
                            <div class="space-x-1">
                                <?php 
                                $colors = ['fuchsia', 'lime', 'sky', 'yellow'];
                                foreach ($colors as $posicao => $language):
                                foreach ($projetos['stack'] as $language): ?>                            
                            <spam class="bg-<?=$colors[$posicao]?>yellow-500 text-<?=$colors[$posicao]?>yellow-900 rounded-md px-3 py-2 "> 
                                <?=$language?>
                            </spam>                            
                            <? endforeach; ?>
                        </div>
                </div>
                <p class="leading-6">
                    <?=$projeto['descricao']?>                    
                </p>
            </section>
        </main>