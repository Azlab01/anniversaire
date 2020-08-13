<?php include('inc/header.php') ?>

<h1 align="center">AJOUTER</h1>
<form action="traitement_ajouter.php" method="POST">      
    <div>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" placeholder="Nom complet" id="nom">
    </div>
    <div>
        <label for="date">Date : </label>
        <input type="date" placeholder="Date d'anniversaire" name="date" id="date">
    </div>
    <div>
        <label for="description">Description : </label>
        <textarea name="description" id="description" placeholder="description" cols="30" rows="5"></textarea>
    </div>
    <div>
        <label for="message">Message : </label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Soumettre</button>    
    <a href="index.php" class="lnk_ajouter">Annuler</a>
</form>

<?php include('inc/footer.php') ?>