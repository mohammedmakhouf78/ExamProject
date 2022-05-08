<?php
  include __DIR__ . "/../../app/Models/DB.php";
  include __DIR__ . "/../../app/Models/Model.php";
  include __DIR__ . "/../../app/Models/Student.php";
  include __DIR__ . "/../../app/Models/DBConnection.php";
  
  $students = Student::all();

?>
<div class="container mt-5 mb-5">
    <a href="student/create" class="btn btn-primary">Create</a>
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">BirthDay</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($students as $student): ?>
    <tr>
      <th scope="row"><?= $student['id'] ?></th>
      <td><?= $student['name'] ?></td>
      <td><?= $student['phone'] ?></td>
      <td><?= $student['birthday'] ?></td>
      <td>
        <form method="post" action="/student/edit">
          <input type="hidden" name="id" value="<?= $student['id'] ?>">
          <button class="btn btn-primary" type="submit">Edit</button>
        </form>

        <form method="post" action="<?= controller('StudentController/delete.php') ?>">
          <input type="hidden" name="id" value="<?= $student['id'] ?>">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
