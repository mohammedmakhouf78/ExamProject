<?php
include __DIR__ . "/../../app/Models/Teacher.php";
if (isset($_POST['id'])) {
  $teacher = new Teacher($_POST['id']);
  $teacher = $teacher->find();
  var_dump($teacher);
}
?>

<h1 class="text-primary">Update Teacher</h1>

<form method="POST" action="<?= controller('TeacherController/update.php') ?>">
  <input type="hidden" name="id" value="<?= $_POST['id'] ?? "" ?>">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" value="<?= $teacher['email'] ?>">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?= $teacher['name'] ?>">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?= $teacher['phone'] ?>">
  </div>
  <div class="form-group">
    <label for="birthday">BirthDay</label>
    <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $teacher['birthday'] ?>">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>