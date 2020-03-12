
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="tpcss.css">
    <title>Blog</title>

  </head>

<body>
<?php
  if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "chalimo")
   {
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" > Blog </a>
  <div id='menu'class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./tphtml.html"> Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./categorie1.html"> Categorie 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./categorie2.html"> Categorie 2</a>
      </li>
    </ul>
  </div>
</nav>
  <header> <h1 id='head'> Acceuil </h1> </header>
  <div class="container">
    <div class="row align-items-start">
      <div class="col">
        <h3> <strong> Article 1 </strong></h3>
        <span class="badge badge-pill badge-primary">Primary</span>
        <span class="badge badge-pill badge-secondary">Secondary</span>
        <span class="badge badge-pill badge-success">Success</span>
      </div>
      <div class="col">
        <h3> <strong> Article 1 </strong></h3>
        <span class="badge badge-pill badge-primary">Primary</span>
        <span class="badge badge-pill badge-secondary">Secondary</span>
        <span class="badge badge-pill badge-success">Success</span>
      </div>
      <div class="col">
        <h3> <strong> Article 1 </strong></h3>
        <span class="badge badge-pill badge-primary">Primary</span>
        <span class="badge badge-pill badge-secondary">Secondary</span>
        <span class="badge badge-pill badge-success">Success</span>
    </div>
    <div class="row align-items-center">
      <div class="col">
        <h3> <strong> Article 1 </strong></h3>
        <span class="badge badge-pill badge-primary">Primary</span>
        <span class="badge badge-pill badge-secondary">Secondary</span>
        <span class="badge badge-pill badge-success">Success</span> </div>
      <div class="col">
        <h3> <strong> Article 1 </strong></h3>
        <span class="badge badge-pill badge-primary">Primary</span>
        <span class="badge badge-pill badge-secondary">Secondary</span>
        <span class="badge badge-pill badge-success">Success</span></div>
      <div class="col">
        <h3> <strong> Article 1 </strong></h3>
        <span class="badge badge-pill badge-primary">Primary</span>
         <span class="badge badge-pill badge-secondary">Secondary</span>
        <span class="badge badge-pill badge-success">Success</span>      </div>
    </div>
  </div>
<?php
    }
else
{ echo "<p>  mot de passe incorrect  </p>"; }
?>
</body>
</html>
?>
