<div id="global">
<div class="container-fluid">
                <div class="row cm-fix-height">
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">Button colors</div> -->
                            <div class="panel-body demo-btn" style="min-height: 250px;">
                                <div class="row">
                                <div class="col-md-6"> 
                                <button type="button" class="btn btn-default" disabled><span class="badge">8</span> Requests</button>
                                <a type="button" class="btn btn-primary" href="<?php echo base_url(); ?>vft/new_lac">New Request</a>
                                </div>
                                <div class="col-md-6">
                                <div class="input-group">
                                    <input type="date" id="datepicker" class="form-control" placeholder="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="button">Go to Date!</button>
                                    </span>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cm-fix-height">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Today's Requests</div>
                            <div class="panel-body" style="min-height: 460px;">

                            <!-- Table -->
                            <div class="">

                            <table class="table table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Change Initiator(CI)</th>
                                        <th>Change Manager(CM)</th>
                                        <th>Change Sponsor(CS)</th>
                                        <th>Implementers</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td>1</td>
                                        <td>active</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                            </div>

                            <!-- End Table -->
                            
                            </div>
                        </div>
                    </div>
                </div>
</div>
