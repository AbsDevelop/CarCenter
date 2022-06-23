<div class="container p">
    <div class="row">
        <div class="col">
            <h1 class="center"><img src="<?=base_URL()?>/css/cars.png" width="55px" height="45px"></h1>
            <h2 class="center">Cadastro de Carros</h2>
        </div>
    </div>

    <form method="post" action="inscreverC">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Modelo" name="modelo" value="<?= isset($carro['modelo']) ? $carro['modelo'] : "" ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Marca" name="marca" value="<?= isset($carro['marca']) ? $carro['marca'] : "" ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Cor" name="cor" value="<?= isset($carro['cor']) ? $carro['cor'] : "" ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Placa" name="placa" maxlength="7" value="<?= isset($carro['placa']) ? $carro['placa'] : "" ?>">
                </div>
                <input type="hidden" name="id" value="<?= isset($carro['id']) ? $carro['id'] : "" ?>">
            </div> 
            <br> 
            <div class="form-floating">
                <textarea class="form-control" name="obs" value="<?= isset($carro['obs']) ? $carro['obs'] : "" ?>" ></textarea>
                <label for="floatingTextarea">Observações</label>
            </div>    
        </div><br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-outline-secondary">Enviar</button>
        </div>
    </form>
</div>



