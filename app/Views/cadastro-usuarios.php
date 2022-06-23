<div class="container p">
    <div class="row">
        <div class="col">
            <h1 class="center"><i class="fa-solid fa-users"></i></h1>
            <h2 class="center">Cadastro de Usuários</h2>
        </div>
    </div>

    <form method="post" action="inscreverU">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?= isset($usuario['nome']) ? $usuario['nome'] : "" ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Profissão" name="profissao" value="<?= isset($usuario['profissao']) ? $usuario['profissao'] : "" ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Idade" name="idade" value="<?= isset($usuario['idade']) ? $usuario['idade'] : "" ?>">
                </div>
                <input type="hidden" name="id" value="<?= isset($usuario['id']) ? $usuario['id'] : "" ?>">
            </div>      
        </div><br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-outline-secondary">Enviar</button>
        </div>
    </form>
</div>



