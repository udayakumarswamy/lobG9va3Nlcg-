<div id="page-wrapper" style="min-height: 291px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product Categories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            DataTables Advanced Tables
                        </div> -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pcategories as $key => $pcategory) {
                                            ?>
                                        <tr class="gradeX">
                                            <td><?php echo $pcategory->pc_id; ?></td>
                                            <td><?php echo $pcategory->pc_name; ?></td>
                                            <td class="center"><?php echo ($pcategory->pc_status) ? 'Active' : 'InActive'; ?></td>
                                        </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>