<?php
include("path.php");
include(ROOT_PATH . "/controllers/topics.php");

$posts = array();

// $posts = selectAll('posts', ['published' => 1]);
// dd($posts);

if (isset($_POST['search-term'])) {
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}

?>

<?php include(ROOT_PATH . "/includes/_header.php"); ?>


<?php include(ROOT_PATH . "/includes/_navigation.php"); ?>
<?php include(ROOT_PATH . "/includes/_messages.php"); ?>

<!-- masonry
    ================================================== -->
<section class="s-bricks">

    <div class="masonry">
        <div class="bricks-wrapper h-group">

            <div class="grid-sizer"></div>

            <div class="brick entry featured-grid animate-this">
                <div class="entry__content">

                    <div class="featured-post-slider">

                        <?php foreach ($posts as $post) : ?>

                            <div class="featured-post-slide">
                                <div class="f-slide">

                                    <div class="f-slide__background" style="background-image:url('<?php echo BASE_URL . '/images/' . $post['image']; ?>');"></div>
                                    <div class="f-slide__overlay"></div>

                                    <div class="f-slide__content">
                                        <ul class="f-slide__meta">
                                            <li><?php echo date('F j, Y', strtotime($post['created_at'])); ?></li>
                                            <li><i class="fa fa-user"><?php echo $post['username']; ?></i></li>
                                        </ul>

                                        <h1 class="f-slide__title"><a href="single-standard.html" title=""><?php echo $post['title']; ?></a></h1>
                                    </div>

                                </div> <!-- f-slide -->
                            </div> <!-- featured-post-slide -->

                        <?php endforeach; ?>

                    </div> <!-- end feature post slider -->

                    <div class="featured-post-nav">
                        <button class="featured-post-nav__prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                                </path>
                            </svg>
                        </button>
                        <button class="featured-post-nav__next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z">
                                </path>
                            </svg>
                        </button>
                    </div> <!-- featured-post-nav -->

                </div> <!-- end entry content -->
            </div> <!-- end entry, featured grid -->

            <?php foreach ($posts as $post) : ?>


                <article class="brick entry format-standard animate-this">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="thumb-link">
                            <img src="<?php echo BASE_URL . '/images/' . $post['image']; ?>" alt="">
                        </a>
                    </div> <!-- end entry__thumb -->

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__meta">
                                <span class="entry__cat-links">
                                    <i class="fa fa-user"><?php echo $post['username']; ?></i>
                                    <i class="fa fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                                </span>
                            </div>

                            <div class="entry__meta">
                                <span class="entry__cat-links">
                                    <a href="#">Design</a>
                                    <a href="#">Photography</a>
                                </span>
                            </div>

                            <h1 class="entry__title"><a href="single-standard.html"><?php echo $post['title']; ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
                                proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
                                incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
                            </p>
                        </div>
                    </div> <!-- end entry__text -->

                </article> <!-- end entry -->



            <?php endforeach; ?>





        </div> <!-- end brick-wrapper -->

    </div> <!-- end masonry -->

    <div class="row">
        <div class="column large-12">
            <nav class="pgn">
                <ul>
                    <li>
                        <a class="pgn__prev" href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li><a class="pgn__num" href="#0">1</a></li>
                    <li><span class="pgn__num current">2</span></li>
                    <li><a class="pgn__num" href="#0">3</a></li>
                    <li><a class="pgn__num" href="#0">4</a></li>
                    <li><a class="pgn__num" href="#0">5</a></li>
                    <li><span class="pgn__num dots">…</span></li>
                    <li><a class="pgn__num" href="#0">8</a></li>
                    <li>
                        <a class="pgn__next" href="#0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav> <!-- end pgn -->
        </div> <!-- end column -->
    </div> <!-- end row -->

</section> <!-- end s-bricks -->


<?php include(ROOT_PATH . "/includes/_footer.php"); ?>