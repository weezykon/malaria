<div class="main-content">

    <!-- Results -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Merchants</div>
                <?php if(count($calls) > 0) {?>
                    <div class="panel-body" style="padding:10px">
                        <table id="datatable2" class="table table-striped table-hover" data-page-length='7'>
                            <thead>
                                <tr>
                                    <th>Business Name</th>
                                    <th>Contact Name</th>
                                    <th>Contact Phone</th>
                                    <th>Contact Email</th>
                                    <th>Assigned To</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($calls as $key => $value) { ?>
                                    <tr>
                                        <td><?= $value['prm_name'] ?></td>
                                        <td><?= $value['prm_contact_name'] ?></td>
                                        <td><a href="tel:<?= $value['prm_contact_phone'] ?>"><?= $value['prm_contact_phone'] ?></a></td>
                                        <td><?= $value['prm_contact_email'] ?></td>
                                        <td><?= $value['prcr_name'] ?></td>
                                        <td>
                                            <?php if($value['prmc_status'] == '0'){ ?>
                                                <span class="label label-warning">Not Called</span>
                                            <?php }elseif($value['prmc_status'] == '1'){ ?>
                                                <span class="label label-info">Pending</span>
                                            <?php }else{ ?>
                                                <span class="label label-success">Called</span>
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
                        <h3 class="text-center" style="color:#ddd"> No Calls.</h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>