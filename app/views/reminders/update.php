<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <h2>Update Reminder</h2>
  <form method="post" action="/reminders/update/<?= $data['reminder']['id'] ?>">
    <div class="form-group">
      <label for="subject">Reminder Subject</label><br>
      <input type="text" id="subject" name="subject" value="<?= ($data['reminder']['subject']) ?>" required>
    </div>
    <br>
    <button type="submit">Update Reminder</button>
  </form>
</div>
<?php require_once 'app/views/templates/footer.php' ?>