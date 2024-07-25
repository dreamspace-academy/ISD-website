<!-- header -->
<?php
$pageTitle = "Bungalow";
$metaTitle = "Ideal Staging and Design";
$metaDescription = "Transforming properties into stunning, market-ready spaces that captivate potential buyers and drive successful sales.";
?>
<?php include 'components/layout/header.php'; ?>
<?php include 'components/layout/navbar.php'; ?>
<section class="padding">
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
                ["before" => "images/Project/bungalow/3 Before.jpg", "after" => "images/Project/bungalow/3 After.jpg"],
                ["before" => "images/Project/bungalow/10 Before.jpg", "after" => "images/Project/bungalow/10 After.jpg"],
                ["before" => "images/Project/bungalow/6 Before.jpg", "after" => "images/Project/bungalow/6 After.jpg"],
                ["before" => "images/Project/bungalow/7 Before.jpg", "after" => "images/Project/bungalow/7 After.jpg"],
                ["before" => "images/Project/bungalow/9 Before.jpg", "after" => "images/Project/bungalow/9 After.jpg"],
                ["before" => "images/Project/bungalow/8 Before.jpg", "after" => "images/Project/bungalow/8 After.jpg"]
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