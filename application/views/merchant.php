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
        <div class="col-md-6 col-md-offset-3">
            <h3 style="text-align:center;">Add Merchant</h3>
            <form method="POST" action="?">
                <div class="form-group">
                    <label>Brand or Business Name</label>
                    <input name="prm_name" type="text" placeholder="e.g Bruno's Place" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input name="prm_contact_name" type="text" placeholder="e.g Jennifer Peters" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Your Business Email</label>
                    <input name="prm_contact_email" type="text" placeholder="e.g jeni@gmail.com" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input name="prm_contact_phone" type="number" placeholder="Your Business Contact Phone" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Your Password</label>
                    <input name="prm_contact_password" type="password" placeholder="Your password" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Merchant Unique Name (Short Name, No space please)</label>
                    <input name="prm_ulink" type="text" maxlength="10" placeholder="e.g JenniferPe" class="form-control" required="">
                </div>
                <button type="submit" id="signupBtn" class="btn btn-block btn-success mt-lg">Add Merchant</button>
            </form>
        </div>
    </div>
</div>