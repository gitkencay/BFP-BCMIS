<!--Start MODAL-->
<!--Start Modal View FSEC-REG-->
<div class="modal fade" id="View-FSEC-Reg" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Pending List(Assessment)</h3>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class=col-md-4>
                                        <input type="text" class="form-control" id="assessSearch" placeholder="Search">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Application No.</th>
                                            <th>Owner Name</th>
                                            <th>Date Applied</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
                                        <?php
                                        require 'require/databaseconnection.php';
                                        $query = $conn->query("select * from `application` where status = 'Complete' && application_type = 'FSEC' ") or die(mysqli_error());
                                        while($fetch = $query->fetch_array()){
                                        $month = date("m", strtotime($fetch['month']));
                                        ?>
                                            <tr>
                                                <td><?php echo $fetch['year']. '-' .$month. '-' .$fetch['application_no']?></td>
                                                <td><?php echo $fetch['owner_name']?></td>
                                                <td><?php echo $fetch['date_applied']?></td>
                                                <td>
                                                    <a href="Transaction-AssessFormCopy.php?id=<?php echo $fetch['application_no'];?>" class="btn btn-info btn-sm">Assess</a>
                                                    </td>
                                            </tr>
                                                <?php
                                                    }
                                                    $conn->close();
                                                ?>  
                                    </tbody>
                                    </tbody>
                                </table>                      
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                </div>
                            </div>                                                              
                        </div>                                                            
                    </div> 
                </div>
                <!--End Modal View FSEC REG-->

                <!--End MODAL-->
