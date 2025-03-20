<?php
declare(strict_types=1);



function config(){
    return json_decode(file_get_contents('config.json'));
}

function connexion(){
    $config = config();
    try{
        return new PDO('mysql:host='.$config->bdd->hote.';dbname='.$config->bdd->name, $config->bdd->user, $config->bdd->pass);
    }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
}



/**
 * Insere des données dans n'importe quelle table
 * 
 * @args (string) $table // Nom de la table où récupérer les données
 * @args (array) $datas // Tableau de données à insérer
 * 
 * @return (string) dernier ID inséré dans la base;
 * 
 * ex: create("users", ["fname"=>"nicolas", "lname"=>"Fréret","password"=>"12345","email"=>"sds@sdd.fr"]);
 * 
 * @url https://phpdelusions.net/pdo_examples/insert
 */
function create(string $table, array $datas):string{
    $bdd = connexion();
    $tableauDesColonnes = array_keys($datas);
    $convertTableauIntoString = join(',', $tableauDesColonnes);
    $duplicateQuestionMarks = str_repeat('?,', count($datas));
    $removeLastComa = rtrim($duplicateQuestionMarks,',');
    $sql = "INSERT INTO ".$table." (".$convertTableauIntoString.") VALUES (".$removeLastComa.")";
    $bdd->prepare($sql)->execute(array_values($datas));
    return $bdd->lastInsertId();
}

/**
 * Va chercher les données dans une table
 * @args (string) $table // Nom de la table où récupérer les données
 * @args (string) $columns (optionnel) //type de colonne à aller chercher
 * @args (string) $condition (optionnel) //pour les requêtes spécifiques (WHERE, ORDER,...)
 * @return (array) tableau de données
 */
function read(string $table, string $columns = "*", string $condition = ""):array{
    $bdd = connexion();
    return $bdd->query("SELECT ".$columns." FROM ".$table." ".$condition)->fetchAll();
}


function update(){
    $sql = "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$name, $surname, $sex, $id]);
    
}


function delete(string $table, array $conditions):void{
    $bdd = connexion();
    $conditionQuery = "WHERE ";
    $i = 0;
    foreach ($conditions as $key => $value) {
        $conditionQuery .= $key."= ? ".(++$i != count($conditions) ? "AND " : ""  );
    }
    $sql = "DELETE FROM ".$table." ".$conditionQuery;
    //exit($sql);
    $bdd->prepare($sql)->execute(array_values($conditions));
    //return $bdd->rowCount();
}
