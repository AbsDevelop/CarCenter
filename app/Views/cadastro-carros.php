<div class="container p">
    <div class="row">
        <div class="col">
            <h1 class="center"><i class="fa-solid fa-car-rear"></i></h1>
            <h2 class="center">Cadastro de Carros</h2>
        </div>
    </div>

    <form method="post" action="inscrever">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Modelo" name="modelo" value="<?= isset($pessoa['nome']) ? $pessoa['nome'] : "" ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Marca" name="marca" value="<?= isset($pessoa['profissao']) ? $pessoa['profissao'] : "" ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Placa" name="placa" maxlength="7" value="<?= isset($pessoa['idade']) ? $pessoa['idade'] : "" ?>">
                </div>
                <input type="hidden" name="id" value="<?= isset($pessoa['id']) ? $pessoa['id'] : "" ?>">
            </div>      
        </div><br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn disabled btn-outline-secondary">Enviar</button>
        </div>
    </form>
</div>



