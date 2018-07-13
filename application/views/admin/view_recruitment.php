
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-box1"></i>
                            </div>
                            <div class="header-title">
                                <h1>View Recruitment Details</h1>
                                <br>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>

                                    <li class="active">View Recruitment</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>View Recruitment</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                    <form method="get" action="<?php echo base_url() ?>admin/view_recruitment">
                                    <div class="form-group row">

                                    <div class="panel-heading">
                                    <div class="panel-title">
                                            <h4>Filters</h4>
                                        </div>
                                        </div>
                                        <hr>
            <label for="example-text-input" class="col-sm-2 col-form-label">Exprience:
            </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="experience_period" placeholder="Search By Experience">
            </div>

            <label for="example-text-input" class="col-sm-2 col-form-label">Qualification:
            </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="qualification_title" placeholder="Search By Qualification"><br>
            </div>

            <label for="example-text-input" class="col-sm-2 col-form-label">Institution:
            </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="institution" placeholder="Search By Institution">
            </div>

             <label for="example-text-input" class="col-sm-2 col-form-label">Company:
            </label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="company_name" placeholder="Search By Company">
            </div>
            <br>
            <div class="col-sm-12">
            <br>
            <input type="submit" value="Filter" name="filter" class="btn btn-primary pull-right">
            </div>

        </div>
</form>
        <br>
        <hr>

                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Full Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Expected salary</th>
                                                        <th>Qualification</th>
                                                        <th>Institution</th>
                                                        <th>Grade</th>
                                                        <th>View Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

<?php
if ($_GET['filter']) {





$this->db->select("recruitment.recruitmentID,
	recruitment.first_name,recruitment.phone_number,
	recruitment.expected_salary_innumber,
	recruitment_qualification.qualification_title,
	recruitment_qualification.institution,
	recruitment_qualification.grade");
$this->db->from("recruitment");
$this->db->join("recruitment_qualification","recruitment.recruitmentID=recruitment_qualification.recruitmentID");
$this->db->join("recruitment_past_experience","recruitment.recruitmentID=recruitment_past_experience.recruitmentID");

if ($_GET['experience_period'] && $_GET['experience_period']!="") {
$this->db->like("recruitment_past_experience.experience_period",$_GET['experience_period']);
}

if ($_GET['company_name'] && $_GET['company_name']!="") {
$this->db->like("recruitment_past_experience.company_name",$_GET['company_name']);
}
if ($_GET['qualification_title'] && $_GET['qualification_title']!="") {
$this->db->like("recruitment_qualification.qualification_title",$_GET['qualification_title']);
}
if ($_GET['institution'] && $_GET['institution']!="") {
$this->db->like("recruitment_qualification.institution",$_GET['institution']);
}
$recruitments=$this->db->get()->result_array();


}

?>
                                                <?php foreach ($recruitments as $recruitment): ?>
                                                	    <tr>
                                                        <td><?php echo $recruitment['first_name'] ?></td>
                                                        <td><?php echo $recruitment['phone_number'] ?></td>
                                                        <td><?php echo $recruitment['expected_salary_innumber'] ?></td>
                                                        <td><?php echo $recruitment['qualification_title'] ?></td>
                                                        <td><?php echo $recruitment['institution'] ?></td>
                                                        <td><?php echo $recruitment['grade'] ?></td>
                                                        <td><a href="<?php echo base_url() ?>admin/show_recruitment/<?php echo $recruitment['recruitmentID'] ?>"><i class="fa fa-edit"></i></a></td>
                                                    </tr>
                                                <?php endforeach ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->

        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url() ?>assets/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/bootsnav/js/bootsnav.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="<?php echo base_url() ?>assets/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- dataTables js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="<?php echo base_url() ?>assets/assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "iDisplayLength": 10
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });

        </script>


    </body>

</html>
