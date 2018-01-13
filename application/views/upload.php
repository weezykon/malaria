<div class="main-content" style="min-height:700px;">
    <!-- Filter Results -->
    <div class"row">
        <div class="col-md-8 col-md-offset-2">
            <?php if($this->session->flashdata('errors')){ ?>
                <div class="alert alert-danger col-md-8" role="alert">
                    <?php foreach ($this->session->flashdata('errors') as $key => $value) { ?>
                        <h6 style="text-align:center;"><?= $value; ?></h6>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if($this->session->flashdata('success')){ ?>
                <div class="alert alert-success col-md-8" role="alert">
                        <h4 style="text-align:center;"><?= $this->session->flashdata('success'); ?></h4>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3 style="text-align:center;">Upload Products</h3>
            <form method="POST" action="?" enctype="multipart/form-data">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label class="">Select Merchants</label>
                    <select name="prm_rand" class="form-control selectpicker" data-live-search="true" required="">
                        <option value="">Choose...</option>
                        <?php foreach ($merchants as $key => $value) { ?>
                            <option value="<?= $value['prm_rand']; ?>"><?= $value['prm_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label class="">Select File</label>
                    <input type="file" class="form-control" name="file" />
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <p></p><br/>
                    <button type="submit" class="mb-sm btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>