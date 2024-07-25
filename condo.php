<!-- header -->
<?php
$pageTitle = "Condo";
$metaTitle = "Ideal Staging and Design";
$metaDescription = "Transforming properties into stunning, market-ready spaces that captivate potential buyers and drive successful sales.";
?>
<?php include 'components/layout/header.php'; ?>
<?php include 'components/layout/navbar.php'; ?>
<section class="padding">
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
            $images = [
                ["before" => "images/Project/condo/1 before.jpg", "after" => "images/Project/condo/1 after.jpg"],
                ["before" => "images/Project/condo/6 before.jpg", "after" => "images/Project/condo/6 after.jpg"],
                ["before" => "images/Project/condo/3 before.jpg", "after" => "images/Project/condo/3 after.jpg"],
                ["before" => "images/Project/condo/5 before.jpg", "after" => "images/Project/condo/5 after.jpg"],
                ["before" => "images/Project/condo/2 before.jpg", "after" => "images/Project/condo/2 after.jpg"],
                ["before" => "images/Project/condo/4 before.jpg", "after" => "images/Project/condo/4 after.jpg"],
                ["before" => "images/Project/condo/10 before.jpg", "after" => "images/Project/condo/10 after.jpg"],
                ["before" => "images/Project/condo/7 before.jpg", "after" => "images/Project/condo/7 after.jpg"],
                ["before" => "images/Project/condo/9 before.jpg", "after" => "images/Project/condo/9 after.jpg"],
                ["before" => "images/Project/condo/8 before.jpg", "after" => "images/Project/condo/8 after.jpg"]
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