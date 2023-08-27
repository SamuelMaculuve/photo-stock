<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light custom-background"  >
        <div class="container-fluid">
            <a class="navbar-brand clearfix" href="/">
                <i class="fa fa-camera-retro" aria-hidden="true"></i>
                <span>StockSnap.io</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">CATEGORIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">TODAS AS FOTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TENDENDO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            OPCOES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item linknav" href="#">FAQ</a></li>
                            <li><a class="dropdown-item linknav" href="#">Licença</a></li>
                            <li><a class="dropdown-item linknav" href="#">Acerca</a></li>
                            <li><a class="dropdown-item linknav" href="#">Termos</a></li>
                            <li><a class="dropdown-item linknav" href="#">Privacidade</a></li>
                          
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right ">
                    <li class="ultimos"><a data-toggle="modal" data-target="#login-signup-modal" data-tab-select="login-tab"
                            href="#">Entrar</a></li>
                    <li class="ultimos"><a data-toggle="modal" data-target="#login-signup-modal" data-tab-select="signup-tab"
                            href="#">Junte-se a nós!</a></li>
                    <li class="splint"></li>
                    <li class="ultimos ">
                        <a class="submit-photos" data-toggle="modal" data-target="#login-signup-modal"
                            data-tab-select="login-tab"><i class="fa fa-upload" aria-hidden="true"></i> Enviar
                            fotos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="homepage">
        <div class="jumbo clearfix darken-image"
            style="background-image: url(https://cdn.stocksnap.io/img-thumbs/960w/HMM2DZNEFK.jpg ); ">
            <div class="container">
                <h1>Lindas fotos gratuitas</h1>
                <p class="newadds">Novas imagens CC0 adicionadas diariamente, <a href="/license">livre de restrições de direitos autorais.</a>
                </p>
                <form id="main-search-form" class="input-group">
                    <input type="text" class="form-control main-search" name="main-search"
                        placeholder="Procurar Fotos..." value autocomplete="off" required>
                    <span class="input-group-btn">
                        <button class="btn btn-default main-search-btn" type="submit" aria-label="Search"><i
                                class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </form>
                <div class="popular-tags">
                    <h5>Tendendo:</h5>
                    <a href="/search/business">negocio</a>
                    <a href="/search/nature">natureza</a>
                    <a href="/search/flower">flor</a>
                    <a href="/search/beach">praia</a>
                    <a href="/search/wallpaper">papel de parede</a>
                    <a href="/search/love">Amor</a>
                    <a href="/search/technology">tecnologia</a>
                    <a href="/search/food">comida</a>
                </div>
            </div>
            <p class="featured-photographer">Foto apresentada por <a href="/photo/sunflower-field-HMM2DZNEFK">Samuel
                    Maculuve</a></p>
            <p class="featured-partner"><a
                    href="https://adobe.prf.hn/click/camref:1011ltUe2/pubref:stocksnap/destination:https://stock.adobe.com/"
                    target="_blank" rel="nofollow noopener noreferrer">Obtenha 10 imagens grátis<i class="fa fa-chevron-right"
                        aria-hidden="true"></i></a></p>
        </div>
        <div id="default_stocksnapio"></div>

    </div> 
    <div class="title-container clearfix afternav">
        <nav id="popular-categories" role="navigation">
        <div>
        <ul>
        <li><a href="/view-photos/sort/trending/desc" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/ZLVYU3BHJD.jpg);"><strong>Popular</strong></a></li>
        <li><a href="/search/wallpaper+background" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/PN7RVGLUUD.jpg);"><strong>papel de parede</strong></a></li>
        <li><a href="/search/nature" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/EHHEBY5VZ3.jpg);"><strong>Natureza</strong></a></li>
        <li><a href="/search/beach" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/LTCEBVMNFQ.jpg);"><strong>Praia</strong></a></li>
        <li><a href="/search/business" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/JNCZKJ7AIR.jpg);"><strong>Negocio</strong></a></li>
        <li><a href="/search/flower" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/CCZZWJJWAQ.jpg);"><strong>Flor</strong></a></li>
        <li><a href="/search/technology" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/FUL7CILDYQ.jpg);"><strong>Tecnologia</strong></a></li>
        <li><a href="/search/galaxy" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/274C0Z588R.jpg);"><strong>Galaxia</strong></a></li>
        <li><a href="/search/people" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/SENOHVDSLQ.jpg);"><strong>Pessoas</strong></a></li>
        <li><a href="/search/love+heart" style="background-image: url(https://cdn.stocksnap.io/img-thumbs/280h/BLPBTN727L.jpg);"><strong>Amor</strong></a></li>
        </ul>
        </div>
        </nav>
        </div>

</body>

</html>
<script src="{{ asset('js/footer.js') }}"></script>