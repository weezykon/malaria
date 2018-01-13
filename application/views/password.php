<div class="main-content">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <?php
                    if ($this->session->flashdata('errormsg')) {
                        $message = $this->session->flashdata('errormsg');
                ?>
                    <div class="alert alert-warning col-md-6">
                        <h4 class="block"><?php echo $message; ?></h4>
                    </div>
                <?php
                    }
                ?>
                <?php
                    if ($this->session->flashdata('successmsg')) {
                        $message = $this->session->flashdata('successmsg');
                ?>
                    <div class="alert alert-success col-md-6">
                        <h4 class="block"><?php echo $message; ?></h4>
                    </div>
                <?php
                    }
                ?>
            </div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Change Password</div>
                    <div class="panel-body" style="padding:10px">
                        <form action="<?= base_url(); ?>password" method="POST">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="prcr_password" id="txtNewPassword" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="password" name="prcr_password" id="txtConfirmPassword" class="form-control" required>
                                <div id="divCheckPasswordMatch" style="color:red;"></div>
                            </div> 
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>