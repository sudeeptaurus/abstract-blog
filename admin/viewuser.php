<?php include("includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>View All Users</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>john@example.com</td>
                        <td>Admin</td>
                        <td><a href="#"><button class="btn btn-success btn-sm">Edit</button></a></td>
                        <td><a href="#"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>mary@example.com</td>
                        <td>Admin</td>
                        <td><a href="#"><button class="btn btn-success btn-sm">Edit</button></a></td>
                        <td><a href="#"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>july@example.com</td>
                        <td>Admin</td>
                        <td><a href="#"><button class="btn btn-success btn-sm">Edit</button></a></td>
                        <td><a href="#"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("includes/_footer.php"); ?>