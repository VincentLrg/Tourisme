<?php
$current = "contact";
$title = "Contact - Office du tourisme Biscarosse";
?>
<?php include_once('_inc/header.php')  ?>
<section class="contact">
    <h2>
        Contactez-nous
    </h2>
    <form>
    <div class="container">
        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Nom</label>
      <input type="text" class="form-control" id="inputName" placeholder="Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputFirstName">Prénom</label>
      <input type="text" class="form-control" id="inputFirstName" placeholder="Prénom" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" required>
  </div>
  <div class="form-group">
    <label for="inputSubject">Objet</label>
    <input type="text" class="form-control" id="inputSubject" placeholder="Objet" required>
  </div>
  <div class="form-group">
    <label for="inputMessage">Votre message</label>
    <textarea class="form-control" id="inputMessage" placeholder="Ecrire votre message ici" required>
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer votre message</button>
    </div>
  
</form>
</section>

<?php include_once('_inc/footer.php')  ?>
