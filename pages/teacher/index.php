<?php
  include __DIR__ . "/../../app/Models/DB.php";

  $db = new DB('teachers');
  $teachers = $db->select("*")->where("id = 3")->or("id = 5")->get();

?>
<div class="container mt-5 mb-5">
    <a href="teacher/create" class="btn btn-primary">Create</a>
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">BirthDay</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($teachers as $teacher): ?>
    <tr>
      <th scope="row"><?= $teacher['id'] ?></th>
      <td><?= $teacher['name'] ?></td>
      <td><?= $teacher['email'] ?></td>
      <td><?= $teacher['phone'] ?></td>
      <td><?= $teacher['birthday'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
