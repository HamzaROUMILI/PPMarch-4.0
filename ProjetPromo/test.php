<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet de Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" >
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Marchée 4.0</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="view.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Ajouter un client</a>
              </li>
          
            </ul>
            <span class="navbar-text">
              Profil Admin
            </span>
          </div>
        </div>
      </nav>

    
    
  <!--?php   
  include 'navbar.php';
 ?-->

<div class="container">
  <div class="row pt-4">
    <h2>Marche 4.0</h2>

    <a href="index.php">
      <button class="btn btn-primary" type="">
        Ajouter un actionnaire
      </button>
    </a>
  </div>

  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th>Nom complet</th>
        <th>email</th>
        <th>Rôle dans le projet</th>
        <th>Domaine</th>
      </tr>
    </thead>

    <tbody>
      <?php while ($r = mysqli_fetch_assoc($res)) {
      ?>

      <tr>
        <th scope="row"><?php echo $r['id']; ?></th>
        <td><?php echo $r['first_name'] ." ". $r['last_name']; ?></td>
        <td><?php echo $r['email']; ?></td>
        <td><?php echo $r['age']; ?></td>
        <td><?php echo $r['gender']; ?></td>

        <td>
          <a href="update.php?id=<?php echo $r['id']; ?>" class="m-2">
            <i class="fa fa-edit fa-2x"></i>
          </a>
          <i class="fa fa-trash fa-2x red-icon"
           data-bs-toggle="modal"
           data-bs-target="#exampleModal<?php echo $r['id']; ?>">
            
           </i>

           <div class="modal fade" id="exampleModal<?php echo $r['id']; ?>" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <p>etes vous sur de vouloir supprimer cette etudiant ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary"
                  data-bs-dismiss="modal">Annuler</button>
                  <a href="delete.php?id=<?php echo $r['id']; ?>">
                    <button class="btn btn-danger" type="button">Confirmer</button>
                  </a>
                </div>
              </div>
            </div>
           </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>