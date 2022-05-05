<?php include('session.php'); ?>
<?php include('header.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Todo List </title>
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <body>
<div class="container">
	<div style="height:50px;">
	</div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
           <h2>Bienvenido, <?php echo $user; ?>!</h2>
           <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a>
        </div>
        <div class="wrapper">
      <div class="task-input">
        <img src="bars-icon.svg" alt="icon">
        <input type="text" placeholder="Agregar Tareas">
      </div>
      <div class="controls">
        <div class="filters">
          <span class="active" id="all">Tareas</span>
          <span id="pending">Pendiente</span>
          <span id="completed">Completados</span>
        </div>
        <button class="clear-btn">Borrar Todo</button>
      </div>
      <ul class="task-box"></ul>
    </div>

    <script src="script.js"></script>
    </div>
</div>
</body>
</html>