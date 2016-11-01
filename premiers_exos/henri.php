<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$questions = [
    [
        "question" => 'De quelle couleur est le cheval blanc d\'Henri ?',
        "reponse" => 'blanc'
    ], [
        "question" => 'Combien y a t il de 7 nains ?',
        "reponse" => 7
    ], [
        "question" => 'Combien y a t il de 40 voleurs ?',
        "reponse" => 40
    ]
];
$pageId = isset($_GET['pageId']) ? intval($_GET['pageId']) : 0;
if ($pageId == count($questions) ) {
    echo "<h1>Terminé</h1>";
} else {
    if( isset($_GET['reply'])){
        $reponseDonnee = $_GET['reply'];
        echo "<p>Réponse donnée à la question $pageId : ".$reponseDonnee."</p>";
        $reponseAttendue = $questions[$pageId]['reponse'];
        $succes = ($reponseAttendue == $reponseDonnee) ? true : false;
        echo $succes ? "Bravo" : "Faux";
    } else
        $succes = false;
    $currentQuestion = $questions[$pageId];
    echo "<h1>" . $currentQuestion['question'] . "</h1>";
    $nextPageId = $pageId + 1;
    if( $succes ){ // reponse juste
        echo "<a href=\"q.php?pageId=$nextPageId\">Question suivante</a>";
    } else {
    ?>

    <form action="q.php" method="get">
        <input type="text" name="reply"/>
        <input type="hidden" name="pageId"
               value="<?php echo $pageId; ?>">
        <button>Valider</button>
    </form>
    <?php
    }
}
?>

</body>
</html>
