<div class="container p">
    <row>
        <h1 style="text-align: center"> <?=$title?> </h1>
        <h4 style="text-align: center"> Listagem de controle </h4>

        <table class="table table-hover table-bordered">
            <thead class="">
                <tr>
                    <th scope="col"><i class="fa-solid fa-arrow-down-short-wide"></i></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Profissão</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                </tr>
            </thead>

            <?php
            foreach($usuario as $usuario_item)
            {
            ?>

            <tr>
                <th><?=  $usuario_item['id']  ?></th>
                <td><?=  $usuario_item['nome']  ?></td>
                <td><?=  $usuario_item['profissao']  ?></td>
                <td><?=  $usuario_item['idade']  ?></td>
                <td> <a href="editar/<?=$usuario_item['id']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> </td>
                <td> <a href="excluir/<?=$usuario_item['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a> </td>
            </tr>

            <?php
            }
            ?>

            <caption>Lista de funcionários cadastrados • CarCenter, Inc.</caption>
        </table>
    </row><br>
    <div class="row center">
        <div class="col">
                <a href="home" class="btn btn-secondary btn-xl">Home</a>
                
                <a href="cadastro-pessoas" class="btn btn-secondary btn-xl">Cadastros</a>
                
                <a href="login" class="btn btn-secondary btn-xl">Login</a>
            </div>
        </div>  
    </div>
</div>
