<div class="main-content">
    <!-- Results -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Customer Representatives  <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#repModal"><i class="fa fa-plus"></i> Add</button></div>
                <?php if(count($reps) > 0) {?>
                    <div class="panel-body" style="padding:10px">
                        <table id="datatable2" class="table table-striped table-hover" data-page-length='7'>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>No of Merchants Assigned</th>
                                    <!-- <th></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($reps as $key => $value) { ?>
                                    <tr>
                                        <td><?= $value['prcr_name'] ?></td>
                                        <td><?= $value['prcr_email'] ?></td>
                                        <td><?= $value['prcr_phone'] ?></td>
                                        <td><?= $value['merchant_count'] ?></td>
                                        <!-- <td>
                                            <button class="btn btn-danger">Remove</button>
                                        </td> -->
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                <?php }else{ ?>
                    <div class="panel-body" style="padding:10vh 0" >
                        <h3 class="text-center" style="color:#ddd"> No Reps.</h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>