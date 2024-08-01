<!-- header -->
<?php
$pageTitle = "Semi Dedutched";
$metaTitle = "Ideal Staging and Design";
$metaDescription = "Transforming properties into stunning, market-ready spaces that captivate potential buyers and drive successful sales.";
?>
<?php include 'components/layout/header.php'; ?>
<?php include 'components/layout/navbar.php'; ?>
<section>
    <div class="sub-header sub-header-1 sub-header-our-services fake-position">
        <div class="sub-header-content">
            <h2 class="text-cap white-text">Semi Dedutched</h2>
            <ol class="breadcrumb breadcrumb-arc text-cap">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="projects.php">Our Projects</a>
                </li>
                <li class="active">Semi Dedutched</li>
            </ol>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="title-block">
                <h2 class="title text-cap">Semi Dedutched</h2>
                <div class="divider divider-1">
                    <svg class="svg-triangle-icon-container">
                        <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                    </svg>
                </div>
            </div>
            <!-- End Title -->

            <?php
            $images = [
                ["before" => "images/Project/semidetached/1 Before.jpg", "after" => "images/Project/semidetached/1 After.jpg"],
                ["before" => "images/Project/semidetached/6 Before.jpg", "after" => "images/Project/semidetached/6 After.jpg"],
                ["before" => "images/Project/semidetached/2 Before.jpg", "after" => "images/Project/semidetached/2 After.jpg"],
                ["before" => "images/Project/semidetached/5 Before.jpg", "after" => "images/Project/semidetached/5 After.jpg"],
                ["before" => "images/Project/semidetached/4 Before.jpg", "after" => "images/Project/semidetached/4 After.jpg"],
                ["before" => "images/Project/semidetached/3 Before.jpg", "after" => "images/Project/semidetached/3 After.jpg"],
                ["before" => "images/Project/semidetached/7 Before.jpg", "after" => "images/Project/semidetached/7 After.jpg"],
                ["before" => "images/Project/semidetached/9 Before.jpg", "after" => "images/Project/semidetached/9 After.jpg"],
                ["before" => "images/Project/semidetached/8 Before.jpg", "after" => "images/Project/semidetached/8 After.jpg"]
            ];

for ($i = 0; $i < count($images); $i += 2) {
    echo '<div class="row">';
    for ($j = $i; $j < $i + 2 && $j < count($images); $j++) {
        echo '
                    <div class="col-md-6" style="margin-bottom: 3rem;"> 
                        <figure class="cd-image-container">
                            <img src="' . $images[$j]["after"] . '" alt="After">
                            <span class="cd-image-label" data-type="original"><mark>After</mark></span>
                            <div class="cd-resize-img">
                                <img src="' . $images[$j]["before"] . '" alt="Before">
                                <span class="cd-image-label" data-type="modified"><mark>Before</mark></span>
                            </div>
                            <span class="cd-handle"></span> <!-- slider handle -->
                        </figure>
                    </div>';
    }
    echo '</div>';
}
?>
        </div>
    </div>
</section>

<!-- footer -->
<?php include 'components/layout/footer.php'; ?>