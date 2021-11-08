<?php
$pdo = require_once '../../database.php';

$search = $_GET['search'] ?? null;

if ($search) {
    $statement = $pdo->prepare('SELECT * FROM members JOIN schools on schools.id = members.school_id WHERE school LIKE :school');
    $statement->bindValue(':school', "%$search%" );
} else {
    $statement = $pdo->prepare('SELECT * FROM schools JOIN members on members.school_id = schools.id ORDER BY school DESC');
  }
  $statement->execute();
   $members = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<?php require_once '../../views/partials/header.php'; ?>
<h1>Search</h1>

<form action="">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search by school" aria-label="Search by school" name="search" value="<?php echo $search ?>">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit">Search</button>
    </div>
  </div>
</form>

<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">School</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($members as $i => $member):  ?>
      <tr>
        <th scope="row"><?php echo $i + 1 ?></th>
        <td><?php echo $member['name'] ?></td>
        <td><?php echo $member['email'] ?></td>
        <td><?php echo $member['school'] ?></td>
        <td>
          <form method="post" action="delete.php" style="display: inline-block">
            <input  type="hidden" name="id" value="<?php echo $member['id'] ?>"/>
            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>