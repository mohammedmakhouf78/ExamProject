<h1 class="text-primary">Create Subject</h1>

<form method="POST" action="<?= controller('SubjectController/create.php') ?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>