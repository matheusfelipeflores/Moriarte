<!doctype html>
<html lang="pt-BR">

<head>
    <!-- TAGS META NECESSÁRIAS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!---------- CSS ----------->
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <link rel="stylesheet" type="text/css" href="css/lightslider.css" />
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 768px)" />
    
    <!--ICONES DO FONTAWESOME -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    <!---------- CSS ----------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- ICONES PARA NAVEGADOR -->
    <link rel="shortcut icon" href="images/logo.ico" />
    <link rel="shortcut icon" href="images/logodark.ico" />

    <!-- TITULO PARA NAVEGADOR -->
    <title>Moriarte</title>
</head>
<body id="users-body">
        <!-- CABEÇALHO -->
        <header>
            <div class="container">
                <?php require_once("config/db.php");?>
                <div class="menu-section">
                    <div class="menu-toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                    <nav>
                        <ul class="nav-links">
                            <li class="nav-item">
                               <a href="index.php" class=" btn effect01">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="send.php" class=" btn effect01">Enviar Newsletter</a>
                            </li>
                        </ul>
                        <button id="dark-mode-toggle" class="dark-mode-toggle">
                            <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496">
                                <path fill="currentColor"
                                    d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z"
                                    transform="translate(-8 -8)" 
                                />
                            </svg>
                        </button>
                    </nav>
                </div>
            </div>
        </header>
    
    <?php 

    $stmt = "SELECT * FROM newsletter";
    $query = mysqli_query($conn, $stmt);

    // remember to create a video on already subscribe user in db
    ?>
    <?php if(isset($_GET['err'])){?>
            <div class="alert alert-danger"><?php echo $_GET['err']; ?></div>
        <?php }else if(isset($_GET['msg'])){?>
            <div class="alert alert-success"><?php echo $_GET['msg']; ?></div>
    <?php }?>
    <section id="table-cont">
        <table class="table table-stripe bd-dark table-hover">
            <thead>
                <th>Nome</th><th>E-Mail</th><th>Data</th><th>Ação</th>
            </thead>
            <tbody>
            <?php while($res = mysqli_fetch_assoc($query)){?>
                <tr>
                    <td>
                        <?php echo $res['nome']; ?>
                    </td>
                    <td>
                        <?php echo $res['email']; ?>
                    </td>
                    <td>
                        <?php echo $res['data']; ?>
                    </td>
                    <td>
                        <a href="delete_user.php?id=
                            <?php 
                                echo $res['id']; 
                            ?>
                        " class="text-danger"> Deletar
                    </a>
                    </td>
                </tr>
            <?php 
            }?>
            </tbody>
        </table>
    </section>
</body>
    <script src="js/menu.js" type="text/javascript"></script>
    <script src="js/menuScroll.js" type="text/javascript"></script>
    <script src="js/darkmode.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</html>