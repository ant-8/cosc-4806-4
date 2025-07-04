    <?php require_once 'app/views/templates/headerPublic.php' ?>
    <main role="main" class="container">
        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Create a New Account</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-auto">
                <?php if (isset($_SESSION['create_error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($_SESSION['create_error']) ?>
                    </div>
                    <?php unset($_SESSION['create_error']); ?>
                <?php endif; ?>

                <form action="/create/submit" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input required type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input required type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input required type="password" class="form-control" name="confirm_password">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Create Account</button>
                    </fieldset>
                </form>
            </div>
            <p> <a href="/login">Have an account? Login here</a>
        </div>
    <?php require_once 'app/views/templates/footer.php' ?>
