<h1 class="text-primary">Create Student</h1>

<form method="POST" action="<?= controller('StudentController/create.php') ?>">
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