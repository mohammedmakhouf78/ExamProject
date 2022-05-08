<h1 class="text-primary">Update Student</h1>

<form method="POST" action="<?= controller('StudentController/update.php') ?>">
    <input type="hidden" name="id" value="<?= $_POST['id'] ?? "" ?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="birthday">BirthDay</label>
    <input type="date" class="form-control" id="birthday" name="birthday">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>