<?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
      <?php foreach ($errors as $error): ?>
        <div><?php echo $error ?></div>
      <?php endforeach; ?>
  </div>
<?php endif; ?>

<form action="" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="John Doe" value="<?php echo $name ?>">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="text" name="email" class="form-control" placeholder="John@Doe.com" value="<?php echo $email ?>">
  </div>
  <div class="form-group">
    <label >School</label>
    <select class="form-control" type="text" name="school_id" value="<?php echo $school_id ?>">
       <option selected disabled>Please select</option>
       <?php foreach ($schools as $i => $school):  ?>
      <option><?php echo $school['school'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn sm btn-primary">Submit</button>
</form>