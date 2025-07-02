<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <h2>Create a New Reminder</h2>
  <form method="post" action="/reminders/create">
    <div class="form-group">
      <label for="subject">Reminder Subject</label><br>
      <input type="text" id="subject" name="subject" required>
    </div>
    <br>
    <button type="submit">Create Reminder</button>
  </form>
</div>
<?php require_once 'app/views/templates/footer.php' ?>
