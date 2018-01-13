<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h3>Welcome <?= $this->session->userdata('ma_username') ?></h3>
        </div>
    </div>
</section>