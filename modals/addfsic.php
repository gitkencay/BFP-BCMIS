<div class="modal fade" id="FSIC-Reg" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">New FSIC Applicant</h3>
            </div>
            <form method="post" action="actions/addfsic.php" onsubmit="return confirm('Are you sure you want to add this FSEC application?');"  >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php 
                                require 'require/databaseconnection.php';
                                $query = $conn->query("select * from `application` order by application_no DESC limit 1") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                // convert ang month nga name format to number format;
                                $month = date("m", strtotime($fetch['month']));
                                // plus 1 siya kay tungod ang pinaka latest na application no gna add 1 pra sa next na ma apply sa registration
                                $application_no = $fetch['application_no'] + 1;
                                // gina merge ang month, year kag ang application no;
                                ?>
                                <label for="app-no" class="col-sm-5 control-label">Application No.&nbsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">

                                    <input readonly type="text" class="form-control text-primary" id="app-no" name="application_no" value="<?php echo $fetch['year']. '-' .$month. '-' .$application_no?>">
                                </div>
                                <!--
<div class="col-sm-1">
<input type="checkbox" id="chkAssociation" onclick="enableTextBox();" >
</div>
-->
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Applicant Name&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="app-nme" name="application_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="busi-name" class="col-sm-5 control-label">Business Name&nbsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="busi-nme" name="business_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="estab-add" class="col-sm-7 control-label">Establishment Address&emsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="estab-add" name="establishment_address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bldg-code" class="col-sm-5 control-label">Building Type&emsp;&nbsp;&nbsp;</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="bldg-code" name="building_type">
                                        <option value="0">Select</option>
                                        <option value="Assembly">Assembly</option>
                                        <option value="Business-Office">Business-Office</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Mercantile">Mercantile</option>
                                        <option value="Small-Business">Small-Business</option>
                                        <option value="Storage">Storage</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="brgy-no" class="col-sm-3 control-label">&nbsp;Barangay</label>
                                <div class="col-sm-10">
                                <select class="form-control select" data-live-search="true" name="barangay_name">
                                <option selected disabled>Select</option>
                                <?php
                               require 'require/databaseconnection.php';
                                $query = $conn->query("SELECT * FROM `barangay`") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                                                ?>
                                                <option value="<?php echo $fetch['barangay_name'];?>"><?php echo $fetch['barangay_name']?></option>
                                                <?php
                                }
                                ?> 
                            </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="brgy-no" class="col-sm-12 control-label">&nbsp;Type of Permit</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="type_of_permit" name="type_of_permit">
                                        <option value="0">Select</option>
                                        <option value="Building">Building</option>
                                        <option value="Occupancy">Occupancy</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="date" class="col-sm-4 control-label">Date Applied</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control datepicker"  name="date_applied" required/>
                        </div>
                        </div>
                        </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-id" class="col-sm-3 control-label">&nbsp;Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user-id" name="username" value="clarkcan2018">
                                </div>                                                                                            
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">&nbsp;Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user-id" name="password" value="8080">
                                </div>                                                                                            
                            </div>
                            <div class="form-group">
                            <label for="owner-name2" class="col-sm-5 control-label">Owner Name&emsp;</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value=" "id="owner-name2" name="owner_name">
                            </div>
                            <div class="col-sm-1">
                                <input type="checkbox" id="chkAssociation2" onclick="enableTextBox();" >
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="floor-number" class="col-sm-6 control-label">Number of Floors&emsp;&nbsp;&nbsp;&nbsp;</label>
                                <label for="lot-size" class="col-sm-3 control-label">Lot Size&nbsp;&nbsp;</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="floor-number" name="number_of_floors">
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lot-size" name="lot_size">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">&nbsp;Status</label>
                                <div class="col-sm-12">
                                    <select class="form-control select" id="status" name="status">
                                        <option value="0">Select</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-12 control-label"><br>Initial Requirements</label>
                                <div class="col-sm-12">
                                    <label><input type="checkbox" class="icheckbox" value="IniReq5" name="initial_requirements[]">Endorsement from Building Official (BO) / Business Permit Licensing Office (BPLO)</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq6" name="initial_requirements[]">&nbsp;Photocopy of Building Permit and Assessment of Occupancy Permit Fee / Asssessment of Business Permit Fee / BPLO Assessment / Tax Bill for Business Permit as the case maybe</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq7" name="initial_requirements[]">&nbsp;Copy of Fire Insurance Policy (If Any)</label> <br>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq8" name="initial_requirements[]">&nbsp;Copy of Latest Fire Safety Inspection Certificate Immediately Preceding this Application (If Any)</label>

                                    <label><input type="checkbox" class="icheckbox" value="IniReq9" name="initial_requirements[]">&nbsp;Three (3) sets of Fire and Life Safety Assessment Report-2 (FALAR-2) for Occupancy Permit or FALAR 3 for Business Permit (For Occupancy of at least 50 Persons)</label> <br>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <div class="col-sm-6">
                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div> 
                    <button type="submit" class="btn btn-info" name="submit"><span class="fa fa-check"></span>Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
            </form>
            <SCRIPT LANGUAGE="JavaScript">
                        function enableTextBox()
                        {
                            if (document.getElementById("chkAssociation2").checked == true)
                                document.getElementById("owner-name2").disabled = false;
                            else
                                document.getElementById("owner-name2").disabled = true;

                        }
                        </script>

        </div>                                                              
    </div>                                                            
</div> 