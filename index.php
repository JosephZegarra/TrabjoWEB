
<?php
class database {
    private $hostname = "b6z2msq1b90i1zgp3tao-mysql.services.clever-cloud.com";
    private $username = "ubjlf2jejekablaf";
    private $password = "cwZnpAgXrkycv7CLhKeh";
    private $database = "b6z2msq1b90i1zgp3tao";
    private $charset = "utf8";
    
    public function conectar()
    {
        try {
            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => FALSE
            ];
            $pdo = new PDO($conexion, $this->username, $this->password, $options);

            return $pdo;
        } catch(PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }  
}

$db = new database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, marca, descripcion, precio, imagen FROM productos WHERE categoria = 1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>










<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RicoPan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
     crossorigin="anonymous">
     <link href="css/estilos.css" rel="stylesheet">

<Style>
/*productos-card*/
        .container-productos {
            width: 100%;
            max-width: 1200px;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
        }

        .container-productos .card {
            width: 260px;
            height: 390px;
            background: #171F1E;
            color: #f2f2f2;
            border-radius: 8px;
            border: 1px solid #DF691A;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.9);
            overflow: hidden;
            margin: 20px;
            text-align: center;
            align-items: center;
            transition: all 0.25s;
        }

        .container-productos .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }

        .container-productos .card img {
            width: 260px;
            height: 190px;
            cursor: pointer;
        }

        .container-productos .card h5 {
            font-weight: 600;
            padding: 5px;
        }

        .container-productos .card p {
            padding-top: 5px;
        }

        .container-productos .card a {
            padding: 10px;
            display: block;
            width: 50%;
            margin: 0 auto;
        }/*style="background-color: #5FA0FF;"*/
</Style>


    </head>
    <body style="background-color: #58B8D4;">

        <header>
    
        </div>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand">
                
                <image src="img/iconopan.png" width="80" height="80"/>
                    <strong>RicoPan</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
    
                <div class="collapse navbar-collapse" id="navbarheader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class ="nav-item">
                            <a href="index.php" class="nav-link active">Productos</a>
                        </li>
    
                        <li class ="nav-item">
                            <a href="nosotros.html" class="nav-link">Nosotros</a>
                
                        </li>
    
                        <li class ="nav-item">
                            <a href="servicios.html" class="nav-link">Servicios</a>
                
                        </li>
    
                        <li class ="nav-item">
                            <a href="contactenos.html" class="nav-link">Contactenos</a>
                
                        </li>
                    </ul>
    
    
                        <a href="login.html" class="btn btn-primary">Login</a>
                        <div id="loginicono">
                            <img src="img/login/login.png" id="imagen-clickeable" alt="Descripción de la imagen" style="height: 50px;width: 50px;">
                        </div> 
    
    
                </div>
            </div>
        </div>
        </header> 

       

        
        <main>
            <div class="container-productos" id="lista-productos">
                <?php foreach ($resultado as $producto) { ?>
                    <div class="card">
                        <img src="img/Panes/<?php echo basename($producto['imagen']); ?>" class="card-img">
                        <h5><?php echo $producto['marca']; ?></h5>
                        <p><?php echo $producto['descripcion']; ?></p>
                        <p>S/.<small class="precio"><?php echo $producto['precio']; ?></small></p>
                        <a href="#" class="button agregar-carrito" data-id="<?php echo $producto['id']; ?>">Comprar</a>
                    </div>
                <?php } ?>
            </div>
        </main>














        
        
        
            

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
            crossorigin="anonymous"></script>
 




            <script>
            window.addEventListener('mouseover', initLandbot, { once: true });
            window.addEventListener('touchstart', initLandbot, { once: true });
            var myLandbot;
            function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
                s.addEventListener('load', function() {
                var myLandbot = new Landbot.Livechat({
                    configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2071082-8T2HSSYFY1YN3HVR/index.json',
                });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
            }
            </script>
    </body>

    
</html>