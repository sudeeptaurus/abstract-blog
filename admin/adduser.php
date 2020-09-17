<?php include("includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1>Add a New User</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <form action="adduser.php" method="post">
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="passwordConf" class="form-control" placeholder="Password" required>
                </div>
                <div>
                    <label>Role</label>
                    <select name="role" class="form-control form-control-lg mb-3 text-input">
                        <option value="Author">Author</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" class="btn btn-big btn-info">
                </div>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>

<?php include("includes/_footer.php"); ?>