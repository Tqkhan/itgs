<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js" type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js" type="text/javascript">
</script>
<script src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js" type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js" type="text/javascript">
</script>
<script src="libs/Blob.js/BlobBuilder.js" type="text/javascript">
</script>
<script src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js" type="text/javascript">
</script>
<script src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js" type="text/javascript">
</script>
<script src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js" type="text/javascript">
</script>
<script src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js" type="text/javascript">
</script>

<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-news-paper"></i>
            </div>
            <div class="header-title">
                <h1>Job Offer Letter</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="pe-7s-home"></i> Home</a>
                    </li>
                    
                    <li class="active">Job Offer Letter</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url('admin/create_offer_latter') ?>">
                            <div class="row">
                                <div class="col-sm-12">
                                    <address>
                                            <center>
                                                <strong></strong>
                                                <h3><strong>Offer Letter</strong></h3>
                                            </center><br>
                                        </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <address>
                                            <br>
                                            <br>
                                            <strong>Dear <?php echo $recruitment[0]['first_name'] ?></strong><br>
                                        </address>
                                        <input type="hidden" name="recruitment_id" value="<?php echo $id ?>">
                                </div>
                                <div class="col-sm-6">
                                    <address>
                                            <strong class="pull-right"><?php echo date('F d, Y') ?></strong><br>
                                        </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>We are delighted to inform you that you are being offered an employee position at Ingenioustribe Global Solutions (Pvt.) Ltd. as <input type="text" name="designation" placeholder="Designation">. Your date of joining should not be later than <input type="date" name="joining_date" placeholder="Joining Date">. On your date of joining please report to Human Resource Department for orientation purpose.</p>
                                    
                                    <p>Information related to the position and company policies shall be explained to you on the joining along with the appointment letter after documentation.</p>

                                    <p>On joining, your total emoluments payable monthly shall be PKR. <input type="number" name="salary" placeholder="Salary">/</p>

                                    <p>We look forward to you to join us and we expect that our relationship will be mutually rewarding. To confirm your acceptance of this offer, please return a signed copy of this document.</p>
                                    
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-sm-12">
                                   
                                    
                                    <br>
                                    <p>Sincerely,</p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <hr style="border-top: 1px solid #3e454c;  width: 158px;margin-left: 2px;">
                                            <p style="margin-top: -15px;">Ammarah Shakir
                                                <br>HR Department <br>Ingenioustribe Global Solutions (Pvt.) Ltd</p>
                                        </div>
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-3">
                                            <br><br><br>
                                            <center>
                                                <p style="margin-top: -15px;">Acknowledged and agreed by
                                                    <br> Chief Executive Officer</p>
                                                    <p>Signature <strong>:</strong> ______________<br>
                                                    Name <strong>:</strong> _________________<br>Date <strong>:</strong>  _________________</p>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right" type="submit">Create</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.main content -->
<!-- /#page-wrapper -->
<!-- /#wrapper -->
<script type="text/javascript">
    $(function() {

        var specialElementHandlers = {
            '#editor': function(element, renderer) {
                return true;
            }
        };
        $('#cmd').click(function() {
            var doc = new jsPDF();
            doc.fromHTML($('#page-wrapper').html(), 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
            });
            doc.save('sample-file.pdf');
        });
    });
</script>