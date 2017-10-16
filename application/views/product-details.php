<?php $this->view('inc/header.php'); ?>

<?php $this->view('inc/pdetails-head.php'); ?>


<!-- Banner Section
================================= -->

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-01 subbanner-type-2 subbanner-type-2-btn">
    <div class="container">
        <div class="subbanner-content banner-content">
            <div class="skew-effect fadeInLeft animated">
                <span class="fw-normal"><?= $details->ProductTitle ?></span>  Details       </div>
            <ol class="breadcrumb text-left fadeInRight animated">
                <li><a href="/">Home</a></li>
                <li><a href="<?= base_url('Products/') ?>"> Product</a></li>
                <li><a href="javascript: void (0)">Product Detail</a></li>
            </ol>
        </div>
    </div>

</section>

<!-- // Banner Section
================================= -->



<!-- before after Section
================================= -->

<section class="before-after-gallery top-bottom-spacing-full bg-wh">
    <div id="content-wrapper">
        <div class="container">

                <div class="row clearfix animatedParent animateOnce">
                    <div class="col-md-6 marbot30-md-xs fadeInLeft animated">


                            <div class="sp-wrap">
                                <a href="<?= UP . $details->Image ?>"><img src="<?= UP . $details->Image ?>" alt=""></a>
                                <?php $MoreImage = (array) json_decode($details->MoreImage ); ?>
                                <?php foreach ( $MoreImage as $img): ?>
                                <a href="<?= UP. $img ?>"><img src="<?= UP. $img ?>" alt=""></a>
                                <?php endforeach; ?>
                            </div>


                    </div>

                    <div class="col-md-6 fadeInRight animated _fg">
                        <h3><?= $details->ProductTitle ?></h3>
                        <p class="fontresize"><?= $details->ShortDescription ?></p>



                        <ul class="list-type1-small fontresize">
                            <li> <strong>Price :</strong> <?= $details->PriceRangeTo ?></li>

                        </ul>

                    </div>
                </div>

        </div>
    </div>
</section>

<!-- // before after Section
================================= -->

<?php $this->view('inc/pdetails-footer.php'); ?>
<?php $this->view('inc/footer.php'); ?>

