<div class="main-content">

    <!-- Results -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Merchants  
                        <span class="label label-warning pull-right"><b>Note:</b> The Transaction Made is from the start of the current month</span></div>
                <?php if(count($calls) > 0) {?>
                    <div class="panel-body" style="padding:10px">
                        <table id="datatable2" class="table table-striped table-hover" data-page-length='7'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Business Name</th>
                                    <th>Contact Name</th>
                                    <th>Contact Phone</th>
                                    <th>Contact Email</th>
                                    <th>Transactions Made</th>
                                    <th>Registered On</th>
                                    <th>Call</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($calls as $key => $value) { ?>
                                    <tr>
                                        <td>
                                            <?php if($value['prm_cerve'] == '1'){ ?>
                                                <span class="label label-warning">Cerve</span>
                                            <?php }else{ ?>
                                                <span class="label label-primary">City Card</span>
                                            <?php } ?>
                                        </td>
                                        <td><?= $value['prm_name'] ?></td>
                                        <td><?= $value['prm_contact_name'] ?></td>
                                        <td><a href="tel:<?= $value['prm_contact_phone'] ?>"><?= $value['prm_contact_phone'] ?></a></td>
                                        <td><?= $value['prm_contact_email'] ?></td>
                                        <td><?= $value['transactions_count']; ?></td>
                                        <td><?= date('jS F, Y',$value['prm_date']); ?></td>
                                        <td>
                                            <?php if($value['prmc_status'] == '0'){ ?>
                                                <button class="btn btn-default" data-prmc_rand="<?php echo $value['prmc_rand']; ?>" data-prm_name="<?php echo $value['prm_name']; ?>" data-toggle="modal" data-target="#callRepModal">Call</button>
                                            <?php }elseif($value['prmc_status'] == '1'){ ?>
                                                <button class="btn btn-info" data-prmc_rand="<?php echo $value['prmc_rand']; ?>" data-prm_name="<?php echo $value['prm_name']; ?>" data-toggle="modal" data-target="#callRepModal">Call Again</button>
                                            <?php } ?>
                                        </td>
                                        <td><?= $value['prmc_note'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php }else{ ?>
                    <div class="panel-body" style="padding:10vh 0" >
                        <h3 class="text-center" style="color:#ddd"> No Merchants Assigned.</h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
<!-- END Page content-->
         <!-- START Page footer-->
         <footer>&copy; 2017 - Cerve</footer>
         <!-- END Page Footer-->
      </section>
      <!-- END Main section-->
   </div>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="assets/vendor/chosen/chosen.jquery.min.js"></script>
   <script src="assets/vendor/slider/js/bootstrap-slider.js"></script>
   <script src="assets/vendor/filestyle/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="assets/vendor/animo/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="assets/vendor/sparklines/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src="assets/vendor/slimscroll/jquery.slimscroll.min.js"></script>
   <!-- Store + JSON-->
   <script src="assets/vendor/store/store+json2.min.js"></script>
   <!-- Classyloader-->
   <script src="assets/vendor/classyloader/js/jquery.classyloader.min.js"></script>
   <!-- Data Tables -->
   <script src="assets/vendor/datatable/media/js/jquery.dataTables.min.js"></script>
   <script src="assets/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
   <script src="assets/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
   <script src="assets/vendor/datatable/extensions/ColVis/js/dataTables.colVis.min.js"></script>
   <!-- START Page Custom Script-->
   <script src="assets/vendor/moment/min/moment-with-langs.min.js"></script>
   <script src="assets/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
   <!--  Flot Charts-->
   <script src="assets/vendor/flot/jquery.flot.min.js"></script>
   <script src="assets/vendor/flot/jquery.flot.tooltip.min.js"></script>
   <script src="assets/vendor/flot/jquery.flot.resize.min.js"></script>
   <script src="assets/vendor/flot/jquery.flot.pie.min.js"></script>
   <script src="assets/vendor/flot/jquery.flot.time.min.js"></script>
   <script src="assets/vendor/flot/jquery.flot.categories.min.js"></script>
   <!--[if lt IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="assets/js/app.js"></script>
   <!-- END Scripts-->
</body>
<!-- Modal -->
<!-- Rep Call -->
<div class="modal fade" id="callRepModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Add Note</h5>
            </div>
            <form method="POST" action="<?= base_url(); ?>addnote">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Add Note</label>
                            <textarea name="prmc_note" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="prmc_status" class="form-control">
                                <option value="1">Pending</option>
                                <option value="2">Done</option>
                            </select>
                        </div>
                    <input type="hidden" class="form-control" name="prmc_rand" id="prmc_rand" />
                    <input type="hidden" class="form-control" name="prm_name" id="prm_name" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Call Modal
    $('#callRepModal').on('show.bs.modal', function(e) {
        var prmc_rand = $(e.relatedTarget).data('prmc_rand');
        $(e.currentTarget).find('input[name="prmc_rand"]').val(prmc_rand);

        var prm_name = $(e.relatedTarget).data('prm_name');
        $(e.currentTarget).find('input[name="prm_name"]').val(prm_name);
    });
</script>
</html>