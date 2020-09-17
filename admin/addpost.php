<?php include("../path.php"); ?>

<?php include(ROOT_PATH . "/controllers/posts.php"); ?>

<?php include(ROOT_PATH . "/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Post</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="addpost.php" method="post" class="add-new-post">
                <div>
                    <label>Title</label>
                    <input class="form-control form-control-lg mb-3 text-input" type="text" name="title" placeholder="Your Post Title">
                </div>
                <div>
                    <label>Body</label>
                    <textarea class="form-control form-control-lg mb-3 text-input" name="body" id="body"></textarea>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" id="" class="form-control form-control-lg mb-3 text-input">
                </div>
                <div>
                    <label>Topic</label>
                    <select name="topic_id" class="form-control form-control-lg mb-3 text-input">
                        <option value=""></option>

                        <?php foreach ($topics as $key => $topic) : ?>
                            <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div>
                    <button type="submit" name="add-post" class="btn btn-big btn-info">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/admin/includes/_footer.php"); ?>