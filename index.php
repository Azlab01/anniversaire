<?php include('inc/header.php') ?>

<?php $query =  $bdd->query('SELECT * FROM anniversaire ORDER BY id DESC'); ?>


<h1 align="center">Anniversaires</h1>
<ul>
    
    <?php while($data = $query->fetch(2)){ ?>
    <li><?= $data['nom'] ?> - <?= $data['date'] ?>
        <ul>
            <li>
                <a href="supprimer.php?id=<?= $data['id'] ?>" style="color:red;" onclick="if(!confirm('Voulez-vous supprimer?')){return false;}"> <ion-icon name="trash-outline"></ion-icon> </a>
                 <a href="formulaire_modifier.php?id=<?= $data['id'] ?>" style="color:green;"> <ion-icon name="create-outline"></ion-icon> </a>
                 Partagez : 
                 <a href="https://wa.me/?&text=<?= $data['message'] ?>" target="_blank"> <ion-icon name="logo-whatsapp"></ion-icon> </a>
                 <a href="https://www.facebook.com/sharer/sharer.php?u=&title=<?= $data['message'] ?>" target="_blank"> <ion-icon name="logo-facebook"></ion-icon> </a>
            </li>
        </ul>
    </li>
    
    
    <?php } ?>
</ul>
<a href="formulaire_ajouter.php" class="lnk_ajouter">Ajouter</a>

<?php include('inc/footer.php') ?>