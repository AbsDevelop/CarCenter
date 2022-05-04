<div class="container p">
    <row>
        <h1> <?=$title?> </h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"><i class="fa-solid fa-arrow-down-short-wide"></i></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Profissão</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>

            <?php
            foreach($pessoas as $pessoa_item)
            {
            ?>

            <tr>
                <th><?=  $pessoa_item['id']  ?></th>
                <td><?=  $pessoa_item['nome']  ?></td>
                <td><?=  $pessoa_item['profissao']  ?></td>
                <td><?=  $pessoa_item['idade']  ?></td>
            </tr>

            <?php
            }
            ?>

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
