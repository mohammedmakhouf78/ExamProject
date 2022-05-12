<h1 class="text-primary">Update Subject</h1>

<form method="POST" action="<?= controller('SubjectController/update.php') ?>">
    <input type="hidden" name="id" value="<?= $_POST['id'] ?? "" ?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>