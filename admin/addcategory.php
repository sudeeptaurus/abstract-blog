<?php include("includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Category</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="addcategory.php" method="post" class="add-new-post">
                <div>
                    <label>Name</label>
                    <input class="form-control form-control-lg mb-3 text-input" type="text" name="name">
                </div>
                <div>
                    <label>Description</label>
                    <textarea class="form-control form-control-lg mb-3 text-input" name="description" id="body"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-big btn-info">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include("includes/_footer.php"); ?>