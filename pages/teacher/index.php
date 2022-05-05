<?php
  include __DIR__ . "/../../app/Models/DB.php";
  include __DIR__ . "/../../app/Models/Teacher.php";
  
  $teacher = new Teacher();
  $teachers = $teacher->all();

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
      <th scope="col">Action</th>
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
      <td>
        <form method="post" action="/teacher/edit">
          <input type="hidden" name="id" value="<?= $teacher['id'] ?>">
          <button class="btn btn-primary" type="submit">Edit</button>
        </form>

        <form method="post" action="<?= controller('TeacherController/delete.php') ?>">
          <input type="hidden" name="id" value="<?= $teacher['id'] ?>">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
