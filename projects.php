<!-- header -->
<?php
$pageTitle = "Projects";
$metaTitle = "Ideal Staging and Design";
$metaDescription = "Transforming properties into stunning, market-ready spaces that captivate potential buyers and drive successful sales.";
?>
<?php include 'components/layout/header.php'; ?>
<?php include 'components/layout/navbar.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="title-block">
                <h2 class="title text-cap">Condo</h2>
                <div class="divider divider-1">
                    <svg class="svg-triangle-icon-container">
                        <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                    </svg>
                </div>
            </div>
            <!-- End Title -->

            <?php
            $condoImages = [
                ["before" => "images/Project/condo/1 before.jpg", "after" => "images/Project/condo/1 after.jpg"],
                ["before" => "images/Project/condo/6 before.jpg", "after" => "images/Project/condo/6 after.jpg"],
                ["before" => "images/Project/condo/3 before.jpg", "after" => "images/Project/condo/3 after.jpg"],
                ["before" => "images/Project/condo/5 before.jpg", "after" => "images/Project/condo/5 after.jpg"],
            ];

for ($i = 0; $i < count($condoImages); $i += 2) {
    echo '<div class="row">';
    for ($j = $i; $j < $i + 2 && $j < count($condoImages); $j++) {
        echo '
                    <div class="col-md-6" style="margin-bottom: 3rem;"> 
                        <figure class="cd-image-container">
                            <img src="' . $condoImages[$j]["after"] . '" alt="After">
                            <span class="cd-image-label" data-type="original"><mark>After</mark></span>
                            <div class="cd-resize-img">
                                <img src="' . $condoImages[$j]["before"] . '" alt="Before">
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
    <div class="container" style="display: flex; justify-content: flex-end;">
        <a href="condo.php" class="ot-btn btn-main-color text-cap">View More</a>
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
    <div class="container" style="display: flex; justify-content: flex-end;">
        <a href="townhouse.php" class="ot-btn btn-main-color text-cap">View More</a>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="title-block">
                <h2 class="title text-cap">Bungalow</h2>
                <div class="divider divider-1">
                    <svg class="svg-triangle-icon-container">
                        <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                    </svg>
                </div>
            </div>
            <!-- End Title -->

            <?php
            $images = [
                ["before" => "images/Project/bungalow/1 Before.jpg", "after" => "images/Project/bungalow/1 After.jpg"],
                ["before" => "images/Project/bungalow/2 Before.jpg", "after" => "images/Project/bungalow/2 After.jpg"],
                ["before" => "images/Project/bungalow/5 Before.jpg", "after" => "images/Project/bungalow/5 After.jpg"],
                ["before" => "images/Project/bungalow/4 Before.jpg", "after" => "images/Project/bungalow/4 After.jpg"],
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
    <div class="container" style="display: flex; justify-content: flex-end;">
        <a href="bungalow.php" class="ot-btn btn-main-color text-cap">View More</a>
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
    <div class="container" style="display: flex; justify-content: flex-end;">
        <a href="detached.php" class="ot-btn btn-main-color text-cap">View More</a>
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
    <div class="container" style="display: flex; justify-content: flex-end;">
        <a href="semi-detached.php" class="ot-btn btn-main-color text-cap">View More</a>
    </div>
</section>
<!-- End Section Isotop Lastest Project -->
<!-- footer -->
<?php include 'components/layout/footer.php'; ?>