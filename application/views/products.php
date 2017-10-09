<?php include('inc/header.php'); ?>


    <!-- Banner Section
    ================================= -->

    <section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-01 subbanner-type-2 subbanner-type-2-btn">
        <div class="container">
            <div class="subbanner-content banner-content">
                <div class="skew-effect fadeInLeft animated">
                    <span class="fw-normal">Our</span> Products</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index.htm">Home</a></li>
                    <li><a href="#"> Products </a></li>

                </ol>
            </div>
        </div>

    </section>

    <!-- // Banner Section
    ================================= -->



    <!-- Before after Section
    ================================= -->

    <section class="top-bottom-spacing-full grey-bg">
        <div class="container">


            <div id="portfolio" class="clearfix">
                            <?php foreach ($products as $b_data): ?>
                <!-- Accura Item 1 -->
                <div class="element transition laser-eye-surgery" data-category="laser-eye-surgery">
                    <figure>
                        <div class="before-after">
                            <div><img src="<?= UP . $b_data->Image ?>" alt=" "/></div>
                            <div class="view-gallery-wrapper">
                                <a href="<?= UP . $b_data->Image ?>" data-toggle="lightbox" class="view-gallery trans-delay1"><i class="fa flaticon-symbols-1"></i></a>
                                <a href="#" class="view-gallery trans-delay2"></a>
                            </div>
                        </div>
                        <figcaption>
                            <h3> <a href="<?= base_url('Product/details') ?>"><?= $b_data->ProductTitle ?></a></h3>

                        </figcaption>
                    </figure>
                </div>
                <!-- // Accura Item 1 -->
                            <?php endforeach; ?>



            </div> <!-- #portfolio -->

            <!-- Pagination -->
            <nav class="text-center">
                <ul class="pagination pagination-lg">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- // Pagination -->
        </div>
    </section>
    <!-- // Before after Section
    ================================= -->
    <div style="margin-bottom: 200px"></div>


<?php include('inc/footer.php'); ?>