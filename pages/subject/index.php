<?php
  include __DIR__ . "/../../app/Models/Subject.php";
  
  $subjects = Subject::all();

?>
<div class="container mt-5 mb-5">
    <a href="subject/create" class="btn btn-primary">Create</a>
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($subjects as $subject): ?>
    <tr>
      <th scope="row"><?= $subject->id ?></th>
      <td><?= $subject->name ?></td>
      <td>
        <form method="post" action="/subject/edit">
          <input type="hidden" name="id" value="<?= $subject->id ?>">
          <button class="btn btn-primary" type="submit">Edit</button>
        </form>

        <form method="post" action="<?= controller('SubjectController/delete.php') ?>">
          <input type="hidden" name="id" value="<?= $subject->id ?>">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
