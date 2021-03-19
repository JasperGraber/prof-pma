<div class="container-fluid">
    <div class="card" id="card" style="width: 18rem;">
        <div class="card-header" id="card-header">
            <a href="./index.php"><img src="./img/logo.png" class="card-img-top" alt="logo"></a>
        </div>
        <div class="card-body">
            <form action="./index.php?page=login_script" method="post">
                <div class="col-12">
                    <label for="exampleFormControlEmail1" class="form-label">E-mailadres</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlEmail1">
                </div>
                <div class="col-12 mt-3">
                    <label for="exampleFormControlPassword1" class="form-label">Wachtwoord</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlPassword1">
                </div>
                <div class="d-grid gap-3 col-6 mx-auto mt-3">
                    <button type="submit" class="btn btn-warning">Login</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <a href="./index.php?page=changepassword">wachtwoord vergeten?</a>
        </div>
    </div>
</div>