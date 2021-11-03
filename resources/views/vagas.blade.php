<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="icon" href="Public/imagens/favicon.png" sizes="32x32">-->
    <meta property="og:locale" content="pt_BR">
    <meta name="description" content="Site Oficial da Belezzaria Nails and Hair">
    <meta name="keywords"
          content="Salão de Beleza, Beleza, belezzaria, salão, nails, hair, unha, cabelo, Rio Verde, Goiás">
    <meta name="copyright" content="Salão de Beleza - 2021">

    <title>Belezzaria Nails and Hair</title>

    <link href="materialize-css/sass/materialize.css" rel="stylesheet">
    <link href="css/vagas.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G7WWPX012X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-G7WWPX012X');
    </script>

</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a target="_blank" href="http://www.belezzaria.com.br"><img src="images/logo.png" alt=""
                                                                        class="Belezzaria"></a>
        </div>

        <form class="center" action="#" method="post" enctype="multipart/form-data">
            <h3>Insira seu currículo abaixo!</h3>
            <div class="row">
                <div class="input-field col s6 m6">
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Nome Completo</label>
                </div>
                <div class="input-field col s6 m6">
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone">telefone</label>
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" name="file" type="text">
                </div>
            </div>
            <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar</button>
        </form>

    </div>


</header>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="materialize-css/js/bin/materialize.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>

<script>
    $(document).ready(function () {
        $("html").niceScroll();
    });
</script>


</body>
</html>
