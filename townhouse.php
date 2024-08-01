<?php
$pageTitle = "Town House";
$metaTitle = "Ideal Staging and Design";
$metaDescription = "Transforming properties into stunning, market-ready spaces that captivate potential buyers and drive successful sales.";
include 'components/layout/header.php';
include 'components/layout/navbar.php';
?>

<section>
    <div class="sub-header sub-header-1 sub-header-our-services fake-position">
        <div class="sub-header-content">
            <h2 class="text-cap white-text">Town House</h2>
            <ol class="breadcrumb breadcrumb-arc text-cap">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="projects.php">Our Projects</a>
                </li>
                <li class="active">Town House</li>
            </ol>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="title-block">
                <h2 class="title text-cap">Town House</h2>
                <div class="divider divider-1">
                    <svg class="svg-triangle-icon-container">
                        <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                    </svg>
                </div>
            </div>
            <!-- End Title -->

            <?php
            $images = [
                ["before" => "images/Project/townhouse/1 before.jpg", "after" => "images/Project/townhouse/1 after.jpg"],
                ["before" => "images/Project/townhouse/6 before.jpg", "after" => "images/Project/townhouse/6 after.jpg"],
                ["before" => "images/Project/townhouse/3 before.jpg", "after" => "images/Project/townhouse/3 after.jpg"],
                ["before" => "images/Project/townhouse/5 before.jpg", "after" => "images/Project/townhouse/5 after.jpg"],
                ["before" => "images/Project/townhouse/4 before.jpg", "after" => "images/Project/townhouse/4 after.jpg"],
                ["before" => "images/Project/townhouse/2 before.jpg", "after" => "images/Project/townhouse/2 after.jpg"],
                ["before" => "images/Project/townhouse/7 before.jpg", "after" => "images/Project/townhouse/7 after.jpg"],
                ["before" => "images/Project/townhouse/9 before.jpg", "after" => "images/Project/townhouse/9 after.jpg"],
                ["before" => "images/Project/townhouse/8 before.jpg", "after" => "images/Project/townhouse/8 after.jpg"],
                ["before" => "images/Project/townhouse/4 before.jpg", "after" => "images/Project/townhouse/4 after.jpg"]
            ];

for ($i = 0; $i < count($images); $i += 2) {
    echo '<div class="row">';
    for ($j = $i; $j < $i + 2 && $j < count($images); $j++) {
        echo '
                    <div class="col-md-6" style="margin-bottom: 3rem;">
                        <figure class="cd-image-container">
                            <img src="' . $images[$j]["before"] . '" alt="Before">
                            <span class="cd-image-label" data-type="original"><mark>Before</mark></span>
                            <div class="cd-resize-img">
                                <img src="' . $images[$j]["after"] . '" alt="After">
                                <span class="cd-image-label" data-type="modified"><mark>After</mark></span>
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