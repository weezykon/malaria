<?php
    $from = '';
    $to = '';
    if(isset($_GET)){
        if(isset($_GET['from'])){
            $from =  urldecode($_GET['from']);
            
        }
        if(isset($_GET['to'])){
            $to =  urldecode($_GET['to']);
        }
    }
?>
<div class="main-content">

    <!-- Filter Results -->
    <div class"row">
        <div class="col-md-8 col-md-offset-2">
            <h3 style="text-align:center;">Filter Results</h3>
            <form method="get" action="?">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label class="">From</label>
                    <div data-pick-time="false" class="datetimepicker input-group date mb-lg">
                        <input name="from" type="text" required="" placeholder="From" class="form-control" value="<?= $from ?>">
                        <span class="input-group-addon">
                            <span class="fa-calendar fa"></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label class="">To</label>
                    <div data-pick-time="false" class="datetimepicker input-group date mb-lg">
                        <input name="to" type="text" required="" placeholder="To" class="form-control" value="<?= $to ?>">
                        <span class="input-group-addon">
                            <span class="fa-calendar fa"></span>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <p></p><br/>
                    <button type="submit" class="mb-sm btn btn-success">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <br>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body bl-info">
                            <h3 class="text-thin mt0 margin-bottom-0 ng-binding"><?=  number_format($metrics['number']); ?></h3>
                            <div class="text-right text-sm text-muted">
                                <b>Total Number of Transactions</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-primary ">
                        <div class="panel-body bl-inverse">
                            <h3 class="text-thin mt0 margin-bottom-0 ng-binding">₦<?= number_format($metrics['volume']); ?></h3>
                            <div class="text-right text-sm text-muted">
                                <b>Total Volume of Transactions</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-primary" style="height:85.5px;">
                        <div class="panel-body bl-inverse">
                            <h3 class="text-thin mt0 margin-bottom-0 ng-binding"><?= $metrics['requests'] ?></h3>
                            <div class="text-right text-sm text-muted">
                                <b>Total Number of Demo Requests</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Results -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Merchants</div>
                <?php if(count($merchants) > 0) {?>
                    <div class="panel-body" style="padding:10px">
                        <table id="datatable2" class="table table-striped table-hover" data-page-length='7'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Business Name</th>
                                    <th>Contact Name</th>
                                    <th>Contact Phone</th>
                                    <th>Contact Email</th>
                                    <th>No of Transactions Made</th>
                                    <th>Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($merchants as $key => $value) { ?>
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
                                        <td><?= $value['transactions_count'] ?></td>
                                        <td>
                                            <?php if(!$value['rep_name']){ ?>
                                                <button class="btn btn-default" id="assign<?= $value['prm_rand'];?>" data-prm_rand="<?php echo $value['prm_rand']; ?>" data-toggle="modal" data-target="#assignModal">Assign To Rep</button>
                                            <?php }else{ ?>
                                                <span data-toggle="tooltip" title="Assigned To <?= $value['rep_name']; ?>">
                                                    <button class="btn btn-info" id="assign<?= $value['prm_rand'];?>" data-prm_rand="<?php echo $value['prm_rand']; ?>" data-toggle="modal" data-target="#assignModal">Reassign</button>
                                                </span>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php }else{ ?>
                    <div class="panel-body" style="padding:10vh 0" >
                        <h3 class="text-center" style="color:#ddd"> No Merchants.</h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>