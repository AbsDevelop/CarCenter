<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CarCenter</title>
     <!-- CSS & JS -->      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/412c8816f1.js" crossorigin="anonymous"></script>
    <link rel="icon" type="imagem/png" href="https://www.outbackcarwash.ca/outback/wp-content/uploads/2017/09/favicon.png"/>
    <link rel="stylesheet" href="<?=base_url()?>/css/style.css"> 

</head>
<body>
    <!-- Header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand"><i class="fa-solid fa-car-rear v"></i> CarCenter</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="nossaHistoria">Nossa História</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="contato">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="login">Login</a>
                            </li>                       
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                </nav>  
            </div>
        </div>
    </div><br>
    <!-- Fim do Header -->