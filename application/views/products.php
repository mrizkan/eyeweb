<?php include('inc/header.php'); ?>


    <!-- Banner Section
    ================================= -->

    <section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-01 subbanner-type-2 subbanner-type-2-btn">
        <div class="container">
            <div class="subbanner-content banner-content">
                <div class="skew-effect fadeInLeft animated">
                    <span class="fw-normal">Our</span> Products</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="/">Home</a></li>
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


            <div class="col-md-12">
                            <?php foreach ($products as $b_data): ?>
                            <div class="col-md-3">
                <!-- Accura Item 1 -->
                <div class="element transition laser-eye-surgery" data-category="laser-eye-surgery" >
                    <figure>

                        <div class="before-after">
                            <div><img src="<?= UP . $b_data->Image ?>" alt=" "/></div>
                            <div class="view-gallery-wrapper">
                                <a href="<?= UP . $b_data->Image ?>" data-toggle="lightbox" class="view-gallery trans-delay1"><i class="fa flaticon-symbols-1"></i></a>
                                <a href="#" class="view-gallery trans-delay2"></a>
                            </div>
                        </div>
                        <figcaption>
                            <h3> <a href="<?= base_url('Product/detail') . '/' . $b_data->ProductId ?>"><?= $b_data->ProductTitle ?></a></h3>

                        </figcaption>

                    </figure>
                </div>
                <!-- // Accura Item 1 -->
                            </div>

                            <?php endforeach; ?>
</div>


          <!-- #portfolio -->

            <!-- Pagination -->
            <nav class="text-center">
                <ul class="pagination pagination-lg">
                <?= $links ?>
                    </ul>
<!--
            </nav>
            <!-- // Pagination -->
        </div>
    </section>
    <!-- // Before after Section
    ================================= -->
    <div ></div>


<?php include('inc/footer.php'); ?>