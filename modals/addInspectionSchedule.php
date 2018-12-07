<!--Start MODAL-->
<!--Start Modal Add Schedule-->
<?php
require 'require/databaseconnection.php';
$query = $conn->query("SELECT * FROM `application`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    // convert ang month nga name format to number format;
    $month = date("m", strtotime($fetch['month']));
    // plus 1 siya kay tungod ang pinaka latest na application no gna add 1 pra sa next na ma apply sa registration
    $application_no = $fetch['application_no'] + 1;
    // gina merge ang month, year kag ang application no;
?>
<!--Start Modal Add Schedule-->
<div class="modal fade" id="add_inspection<?php echo $fetch['application_no'];?>" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Inspection Schedule</h3>
        </div>
        <form method="post" action="actions/addInspection.php" onsubmit="return confirm('Are you sure you want to edit this FSIC application?');"  >
        <div class="modal-body">
            <div class="row">
            <div class="col-lg-12">
            <div class="form-group">
                <div class=col-md-4>
                <input type="text" class="form-control" id="inspectSearch" placeholder="Search">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label class="col-md-4 control-label">Inspector :</label>
                <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" />
                </div>
                </div>
                </div>

                <div class="cold-md-4">
                <div class="form-group">
                <label for="date" class="col-sm-4 control-label">Date of Inspection</label>
                <div class="col-sm-4">
                    <input type="date"class="form-control datepicker" id="inspection_date" name="inspection_date">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-group">
                <label class="col-md-4 control-label">Time of Inspection :</label>
                <div class="col-md-4">
                <div class="input-group">
                    <input type="time" class="form-control"  id="inspection_time" name="inspection_time" />
                </div>
                </div>
                </div>
            </div>
                    <table class="table table-hover">
                    <br>
                    <br>
                    <h3>List of Inspectors Schedule</h3>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Business Name</th>
                            <th>Location</th>
                            <th>Expected Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>21/9/2018</td>
                            <td>9:00 AM</td>
                            <td>Joey Express</td>
                            <td>Regent, Brgy Alijis</td>
                            <td>9:00 AM - 12:00 PM</td>
                        </tr>
                        <tr>
                            <td>21/10/2018</td>
                            <td>9:00 AM</td>
                            <td>Puat Kalan-an</td>
                            <td>Regent, Brgy Alijis</td>
                            <td>9:00 AM - 12:00 PM</td>
                        </tr>
                        <tr>
                            <td>21/10/2018</td>
                            <td>2:00 PM</td>
                            <td>Gamotin Kapehan</td>
                            <td>Magsungay, Brgy Singcang</td>
                            <td>2:00 PM - 5:00 PM</td>
                        </tr>
                    </tbody>
                    </table>
                <div class="modal-footer">
                        <button type="button" class="btn btn-info" name="Save" data-dismiss="modal"><span class="fa fa-times"></span>Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-check"></span>Close</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<!--End modal Add Schedule-->
<!--End MODAL-->
<?php
}
$conn->close();
?> 