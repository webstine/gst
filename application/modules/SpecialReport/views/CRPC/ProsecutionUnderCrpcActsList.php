<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Prosecution Under Cr.Pc. Acts</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Data</a></li>
                            <li><a href="#">Special Report</a></li>
                            <li class="active">Prosecution Under Cr.Pc. Acts</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <h4 class="m-t-0 header-title"><b>Existing Records of <?php echo $this->session->userdata('PSNAME');?> on <span class="date"><?php echo $this->session->userdata('LAST_RECORD_DATE');?></span></b></h4>
                            <div class="text-right">
                                <a class="btn btn-primary btn-rounded waves-effect waves-light" href="<?php echo base_url(); ?>SpecialReport/ProsecutionUnderCrpcActs/addnew"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                        <hr/>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-colored table-teal">
                                <thead>
                                    <tr>
                                        <th>Report Date</th>
                                        <th>Sl No</th>
                                        <th>Name Prosecuted</th>
                                        <th>Father/Husband Name</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
</div> <!-- content -->
<?php $this->load->view('includes/contentFooter'); ?>