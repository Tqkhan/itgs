<?php 
$app = $appointment[0];
?>
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
                <h1>Appointment Letter</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="pe-7s-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="#">Appointments</a>
                    </li>
                    <li class="active">Appointment Letter</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <address>
                                        <center>
                                            <strong></strong>
                                            <h3><strong>Appointment Letter</strong></h3>
                                        </center><br>
                                    </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <address>
                                        <br>
                                        <br>
                                        <strong><?php echo $app['full_name'] ?></strong><br>
                                    </address>
                            </div>
                            <div class="col-sm-6">
                                <address>
                                        <strong class="pull-right"><?php echo date('F d, Y') ?></strong><br>
                                    </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>We are delighted to inform you that you are being appointed as an employee at “Ingenioustribe Global Solutions Pvt. Ltd”. This letter will describe the terms and conditions of your employment.</p>
                                <p>Title: Your title will be as a “<strong><?php echo $app['designation'] ?></strong>” in “<strong><?php echo $app['department'] ?></strong>”.</p>
                                <p>Duties: All the work related to Screening Department will be dealt by you including co-ordination with concerned Departments.</p>
                                <p>Commencement of Appointment: Your appointment will commence from <strong><?php $date = $app['appointment_date']; echo date('F d, Y', strtotime($date)); ?></strong>. Your appointment will be subjected to you being found medically fit, to the satisfaction of the company, and your antecedents being verified and found to be satisfactory.</p>
                                <p><strong>Probation:</strong> You will be on probation for a period of three (3) month in the first instance or until such time as the company at its sole discretion confirms in writing that you have successfully completed your probationary period. Your confirmation is subject to satisfactory completion of a minimum of (03) Three months probationary period and issuance of Confirmation Letter from HR Department. The Company reserves the right to extend the probationary period(s) at its discretion. During the probationary period, the Company may terminate the employment without cause and at any time by giving (1) one day notice in writing to the other party.</p>
                                <p>Liability of Service: You may be required, as the company may decide from time to time, to serve anywhere in Pakistan or Abroad. Your designation, responsibilities or duties, may be changed from time to time by the company, as it may deem necessary.</p>
                                <p><strong>Salary:</strong> Your total emoluments, payable monthly in arrears, shall be <strong>Rs. <?php echo $app['basic_salary'] ?></strong> <strong>(</strong>Rupees <?php echo $in_word ?> Only<strong>)</strong> as per details given below</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="table-responsive m-b-20">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        Basic Salary
                                                    </div>
                                                </td>
                                                <td><?php echo $app['basic_salary'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        House Rent Allowance
                                                    </div>
                                                </td>
                                                <td><?php echo $app['house_rent_allowance'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        Medical Allowance
                                                    </div>
                                                </td>
                                                <td><?php echo $app['medical_allowance'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        Conveyance Allowance
                                                    </div>
                                                </td>
                                                <td><?php echo $app['conveyance_allowance'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        Utility Allowance
                                                    </div>
                                                </td>
                                                <td><?php echo $app['utility_allowance'] ?></td>
                                            </tr>
                                            <tr style="background-color: #83bcec;">
                                                <td>
                                                    <div>
                                                        <strong>Total</strong>
                                                    </div>
                                                </td>
                                                <td><strong><?php echo $app['total'] ?></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>You will be paid in accordance with the company’s prevailing payroll practices.</p>
                                <p><strong>Increments & Benefits:</strong> The increments will be as per decision of management upon performance and on the annual basis as per policy of the Company. As an employee you will be entitled to staff bonuses which will be decided by Management</p>
                                <p><strong>Effective Timings and Days:</strong> Timings are from 9.00 A.M sharp to 6.00 P.M and working days are from Monday till Friday while Saturday will be the half day or off as per work load.</p>
                                <p><strong>Confidentiality:</strong> During your probation and (if your training is discontinued for any reason whatsoever) thereafter, you agree to keep strictly confidential all trade secrets and information that the Company holds proprietary or confidential. You further agree to follow the Company’s strict policy that employees must not disclose, either directly or indirectly, any information, including any of the terms of this letter, regarding compensation to any person, including other employees of the Company; provided, however, that you may discuss the terms of this letter with members of your immediate family and any legal, tax or accounting specialists who provide you with individual legal, tax or accounting advice.</p>
                                <p>You further agree to not to disclose confidential information about company, its practices, or any information meant to be shared only with fellow employees. Any rumors, slander, or confidential information shared via social media and/or online offline discussion forums which may have a significant negative impact on this company and its reputation within and after the employment. Legal action may be brought against the individual responsible for the publication of such information.</p>
                                <p>You understand and agree that any breach by you of the provisions in this section could cause the Company to suffer irreparable harm and no adequate remedy at law would be available in respect thereof. Accordingly, you agree that upon any such breach, the Company shall be entitled to seek equitable relief, as well as such further relief as may be granted by a court of competent jurisdiction.</p>
                                <p><strong>At-Will Employment:</strong> Your employment with the Company is “At-Will.” This means that we have the right to terminate your employment at any time and for any reason. Accordingly, this letter is not to be construed or interpreted as containing any guarantee of continued employment.</p>
                                <p>As such, the recitation of certain time period in this letter is solely for the purpose of defining your compensation. It is also not to be construed or interpreted as containing any guarantee of any particular level or nature of compensation.</p>
                                <p>This letter (together with the NDA) reflects the entire agreement regarding the terms and conditions of your employment. Accordingly, it supersedes and completely replaces any prior oral or written communication on this subject. This letter may not be modified or amended except by a written agreement, signed by the Company officials and by you. The offer described above is contingent upon the results of your reference/background check.</p>
                                <p><strong>Rules and Regulations:</strong> In all respects, your services will be governed by the rules of the company and as per management’s decisions.</p>
                                <p>You will not divulge either directly or indirectly, to any person or body any knowledge or information, which you may acquire concerning the affairs, property enterprise and undertaking of ITGS, its associate or subsidiaries. Furthermore you shall not take or remove from the premises of the company without the consent of management, any date, tables, calculations, letters, papers, diskette, tape, CD, optical or magnetic device and or other documents or items of property or confidential information pertaining to the company’s business and or affairs, in any form.</p>
                                <p>You are required to notify HR Department immediately of any change in your residential address, phones numbers or in your civil status.</p>
                                <p>You will be responsible for the safe custody and return in good condition and order of all the companys property, which may be in your use, custody, care or charge. The company shall have the right to deduct the money value of all such things from your dues and take such other actions as deems proper in the event of your failure to account for such property to the company’s satisfaction.</p>
                                <p>We look forward to you to join us and we expect that our relationship will be mutually rewarding. To confirm your acceptance of this offer, please return a signed copy of this document.</p>
                                <br>
                                <p>Sincerely,</p>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <hr style="border-top: 1px solid #3e454c;">
                                        <p style="margin-top: -15px;">Ammarah Shakir
                                            <br> Human Resource Departmen</p>
                                    </div>
                                    <div class="col-lg-6"></div>
                                    <div class="col-lg-3">
                                        <hr style="border-top: 1px solid #3e454c;">
                                        <center>
                                            <p style="margin-top: -15px;">Sadaqat Arif
                                                <br> Chief Executive Officer</p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-left">
                    <button class="btn btn-info" id="cmd" type="button"><span class="fa fa-print"></span></button>
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