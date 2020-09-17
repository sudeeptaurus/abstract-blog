<?php include("includes/_header.php"); ?>

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
                    <label>Topic</label>
                    <select name="topic" class="form-control form-control-lg mb-3 text-input">
                        <option value="Poetry">Poetry</option>
                        <option value="Life Lessons">Life Lessons</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-big btn-info">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    ClassicEditor.create(document.querySelector("#body"), {
        toolbar: [
            "heading",
            "|",
            "bold",
            "italic",
            "link",
            "bulletedList",
            "numberedList",
            "blockQuote",
        ],
        heading: {
            options: [{
                    model: "paragraph",
                    title: "Paragraph",
                    class: "ck-heading_paragraph"
                },
                {
                    model: "heading1",
                    view: "h1",
                    title: "Heading 1",
                    class: "ck-heading_heading1",
                },
                {
                    model: "heading2",
                    view: "h2",
                    title: "Heading 2",
                    class: "ck-heading_heading2",
                },
            ],
        },
    }).catch((error) => {
        console.log(error);
    });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<?php include("includes/_footer.php"); ?>