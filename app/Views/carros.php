<div class="container p">
    <row>
        <h1 style="text-align: center"> <?=$title?> </h1>
        <h4 style="text-align: center"> Listagem de controle </h4>

        <table class="table table-hover table-bordered">
            <thead class="">
                <tr>
                    <th scope="col"><i class="fa-solid fa-arrow-down-short-wide"></i></th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Observação</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                </tr>
            </thead>

            <?php
            foreach($carro as $carro_item)
            {
            ?>

            <tr>
                <th><?=  $carro_item['id']  ?></th>
                <td><?=  $carro_item['modelo']  ?></td>
                <td><?=  $carro_item['marca']  ?></td>
                <td><?=  $carro_item['cor']  ?></td>
                <td><?=  $carro_item['obs']  ?></td>
                <td> <a href="editar/<?=$carro_item['id']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> </td>
                <td> <a href="excluir/<?=$carro_item['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a> </td>
            </tr>

            <?php
            }
            ?>

            <caption>Lista de carros cadastrados • CarCenter, Inc.</caption>
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
