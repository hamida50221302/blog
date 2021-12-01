<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
<h1>les commentaires des billets du blog</h1>
<?php
include ("connexion.php");
$x=$pdo->prepare('SELECT titre,date_creation, contenue,commentaire, auteur ,date_commentaire   FROM billets, commentaires WHERE billets.id = commentaires.id_billet');
$x->execute();
$d=$x->fetch();
?>
   <h3> <?php echo htmlspecialchars($d['titre']).'le'.htmlspecialchars($d['date_creation']); ?></h3>
    <?php echo htmlspecialchars($d['contenu']).'</br>'; ?>
<h4>commentaire:</h4>
    <?php
    echo htmlspecialchars($d['auteur']);
    echo htmlspecialchars($d['commentaire']);
$x->closeCursor();
?>
</body>
</html>