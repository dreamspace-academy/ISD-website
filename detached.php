<!-- header -->
<?php
$pageTitle = "Detached";
$metaTitle = "Ideal Staging and Design";
$metaDescription = "Transforming properties into stunning, market-ready spaces that captivate potential buyers and drive successful sales.";
?>
<?php include 'components/layout/header.php'; ?>
<?php include 'components/layout/navbar.php'; ?>
<section>
    <div class="sub-header sub-header-1 sub-header-our-services fake-position">
        <div class="sub-header-content">
            <h2 class="text-cap white-text">Detached</h2>
            <ol class="breadcrumb breadcrumb-arc text-cap">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="projects.php">Our Projects</a>
                </li>
                <li class="active">Detached</li>
            </ol>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="title-block">
                <h2 class="title text-cap">Detached</h2>
                <div class="divider divider-1">
                    <svg class="svg-triangle-icon-container">
                        <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                    </svg>
                </div>
            </div>
            <!-- End Title -->

            <?php
            $images = [
                ["before" => "images/Project/detached/1 before.jpg", "after" => "images/Project/detached/1 after.jpg"],
                ["before" => "images/Project/detached/2 before.jpg", "after" => "images/Project/detached/2 after.jpg"],
                ["before" => "images/Project/detached/5 before.jpg", "after" => "images/Project/detached/5 after.jpg"],
                ["before" => "images/Project/detached/4 before.jpg", "after" => "images/Project/detached/4 after.jpg"],
                ["before" => "images/Project/detached/3 before.jpg", "after" => "images/Project/detached/3 after.jpg"],
                ["before" => "images/Project/detached/6 before.jpg", "after" => "images/Project/detached/6 after.jpg"],
                ["before" => "images/Project/detached/9 before.jpg", "after" => "images/Project/detached/9 after.jpg"],
                ["before" => "images/Project/detached/10 before.jpg", "after" => "images/Project/detached/10 after.jpg"],
                ["before" => "images/Project/detached/7 before.jpg", "after" => "images/Project/detached/7 after.jpg"],
                ["before" => "images/Project/detached/8 before.jpg", "after" => "images/Project/detached/8 after.jpg"]
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