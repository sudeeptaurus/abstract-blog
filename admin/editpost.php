<?php include("../path.php"); ?>

<?php include(ROOT_PATH . "/controllers/posts.php"); ?>

<?php include(ROOT_PATH . "/admin/includes/_header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Post</h1>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/helpers/formErrors.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="editpost.php" method="post" class="add-new-post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label>Title</label>
                    <input class="form-control form-control-lg mb-3 text-input" type="text" name="title" value="<?php echo $title; ?>" placeholder="Your Post Title">
                </div>

                <div>
                    <label>Body</label>
                    <textarea class="form-control form-control-lg mb-3 text-input" name="body" id="body"><?php echo $body; ?></textarea>
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
                            <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div>

                    <?php if (empty($published) && $published == 0) : ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                    <?php else : ?>
                        <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                        </label>
                    <?php endif; ?>

                </div>
                <div>
                    <button type="submit" name="update-post" class="btn btn-big btn-info">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(ROOT_PATH . "/admin/includes/_footer.php"); ?>