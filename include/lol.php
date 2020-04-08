<link rel="stylesheet" type="text/css" href="css/styleform.css" />

<div class="container">
  <form action="include/form.php" method="post">

    <div class="form-group">
      <input type="name" class="form-control" required="required" name="Nom" id="NameInputEmail1" placeholder="Nom">
      <br>
    </div>
    <div class="form-group">
      <input type="name" class="form-control" required="required" name="Prenom" id="exampleInputEmail1" placeholder="Prenom">
      <br>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" required="required" name="Email" id="Email" placeholder="Email">
      <br>
    </div>

    <label for="subject">Message</label>
    <textarea id="Texte" name="Texte" placeholder="Texte" style="height:200px"></textarea>

    <input type="submit" value="Envoyer">

  </form>
</div>