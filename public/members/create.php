<?php
$pdo = require_once '../../database.php';

$statement = $pdo->prepare('SELECT * FROM schools ORDER BY school DESC');
$statement->execute();
$schools = $statement->fetchAll(PDO::FETCH_ASSOC);

$errors = [];

$name = '';
$email = '';
$school_id = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  require_once '../../validate_member.php';
 
  if (empty($errors)) {
    $query = $pdo->query("SELECT id FROM schools WHERE school = '$school_id'");
    $query->execute();
    $id = $query->fetchAll(PDO::FETCH_ASSOC);

    

    $statement = $pdo->prepare('INSERT INTO members (name, email, school_id) VALUES (:name, :email, :school_id)');

    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':school_id', (int)$id[0]["id"]);
    $statement->execute();
    header('Location: index.php');
  }
}

?>

<?php require_once '../../views/partials/header.php'; ?>
<h1>Add a new member</h1>

<?php require_once '../../views/members/form.php' ?>

</body>
</html>