<?php
require 'require/databaseconnection.php';
$query2 = $conn->query("SELECT * FROM `bldg_construct` order by ir_no DESC limit 1") or die(mysqli_error());
$fetch2 = $query->fetch_array();

$month = date("m");
$year = date('Y');
$ir_no = $fetch2['ir_no'] + 1;
$io_schedule = $fetch2['io_schedule'] + 1;
?>
        <!--Start Modal Building Construction-->
        <div id="Bldg_Const" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Building Construction</h4>
                </div>
                <form method="post" action="actions/addBldgConst.php" onsubmit="return confirm('Are you sure you want to add this Building Construction?');"  >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="hidden" class="form-control" id="ir_no" name="ir_no" readonly value="<?php echo $io_schedule?>"/>
                                <input type="hidden" class="form-control" id="ir_no" name="ir_no" readonly value="<?php echo 'IR' . '-' . $year . '-' . $month . '-' .$ir_no ?>"/>
                                 <label for="beams" class="col-md-3 control-label">Beams</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="beams" name="beams">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="columns" class="col-md-3 control-label">Columns</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="columns" name="columns">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="flooring" class="col-md-3 control-label">Flooring</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="floor" name="floor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ex_walls" class="col-md-3 control-label">Exterior Walls</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="exterior" name="exterior">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cor_walls" class="col-md-3 control-label">Corridor Walls</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="corridor" name="corridor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="room_part" class="col-md-3 control-label">Room Partitions</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="partition_no" name="partition_no" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="main_stair" class="col-md-3 control-label">Main Stair</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="stair" name="stair" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="windows" class="col-md-3 control-label">Windows</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="windows" name="windows" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ceiling" class="col-md-3 control-label">Ceiling</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="ceiling" name="ceiling" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="main_door" class="col-md-3 control-label">Main Door</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="door" name="door" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="trusses" class="col-md-3 control-label">Trusses</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="trusses" name="trusses" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="roof" class="col-md-3 control-label">Roof</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="roof" name="roof" >
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="modal-footer">
                    <div class="col-md-6">
                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div>
                    <button type="submit" class="btn btn-info" name="save_bldgconstruction"><span class="fa fa-check"></span>Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
                </form>
                </div>
                </div>
        </div>
    </div>
    <!--End Modal Building Construction-->
