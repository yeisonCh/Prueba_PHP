<!DOCTYPE html>
<html lang="en">

<!--Es necesario linkear o descargar codigo fuente de bootstrap para que funcione-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

    <style>
.progress {
    height: 35px;
    width: 100%;
    border: 1px solid #428bca;
    border-radius: 5px;
    background-color: #e1f059;
    margin-bottom: 15px;
}
 
.progress-bar {
    height: 100%;
    background: rgb(224, 32, 64);
    display: flex;
    align-items: center;
    transition: width 0.25s;
    border-radius: 5px;
}
 
.progress-bar-text {
    margin-left: 10px;
    font-weight: bold;
    color: #cce7f5;
}

    </style>

</head>
<body class="w3-container">
    <h1>
        
        </h1>
        <h2>Progress Bar Labels</h2>

          <div class="progress">
    <div class="progress-bar" style="width:75%;">
        <span class="progress-bar-text">75%</span>
    </div>
</div>

<!--Boton para activar la ventana modal-->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Ver Contratos Asociados</button>

<!-- Contenido Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

 
    
</body>
</html> 

<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>

htmlspecialchars() -> se utiliza para darle seguridad a una pagina.
