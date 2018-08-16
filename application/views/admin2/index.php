
            <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon>
                            <i class=pe-7s-tools></i>
                        </div>
                        <div class=header-title>
                            <h1>Dashboard</h1>
                            <small></small>
                            <ol class=breadcrumb>
                               <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class=row>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-3 border">
                                <h2><span class="slight">Create Lead</span></h2>
                                <div class="small"></div>
                                <i class="ti-world statistic_icon"></i>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-1 border">
                                <h2><span class="slight">View Lead</span></h2>
                                <div class="small"></div>
                                <i class="ti-server statistic_icon"></i>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-2 border">
                                <h2><span class="slight">Create RFQ</span></h2>
                                <div class="small"></div>
                                <i class="ti-user statistic_icon"></i>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="statistic-box statistic-filled-4 border">
                               <h2><span class="slight">View RFQ</span></h2>
                                <div class="small"></div>
                                <i class="ti-bag statistic_icon"></i>

                            </div>
                        </div>
                    </div>
                    <div class=row>
                       
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="panel panel-bd ">
                                <div class=panel-heading>
                                    <div class=panel-title>
                                        <i class=ti-email></i>
                                        <h4>Memos</h4>
                                    </div>
                                </div>
                                <div class=panel-body style="height:250px; overflow: scroll;">
                                    <div class=message_inner>
                                        <div class=message_widgets>
                                          <?php foreach ($memos as $memo): ?>
                                            <a href="#">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img>
                                                      <?php if ($memo['file']): ?><img src="<?php echo base_url().'uploads/memo/'.$memo['file'] ?>" class=img-circle alt="">
                                                    <?php else: ?>
                                                      No File
                                                    <?php endif ?>
                                                    </div>
                                                    <strong class=inbox-item-author><?php echo $memo['title'] ?></strong></br>
                                                    <span class=inbox-item-date><strong>Assigned By</strong> - <?php echo $memo['assigned_by'] ?></span>
                                                    <span class=inbox-item-date><strong>Assigned To</strong> - <?php echo $memo['assigned_to'] != NULL ? $memo['assigned_to'] : "All"; ?></span>
                                                    <p class=inbox-item-text><strong>Memo Date</strong> - <?php echo $memo['date_time'] ?></p>
                                                   <!--  <span class="profile-status available pull-right"></span> -->
                                                </div>
                                            </a>
                                            <?php endforeach ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                     
                        
                    </div>
                     <div style="height: 290px;"></div>
                </div>
<div id="chartContainer" style="height: 300px; width: 100%;">
	</div>
               <!--  <div class="row" id="chartdiv">
                   <div class="col-lg-12">
                       <div class="ibox float-e-margins">
                           <div class="ibox-content">
                                   <div>
                                       <span class="pull-right text-right">

                                           <br/>
                                           All Leads: <?php echo $total_request; ?>                                        </span>
                                       <h3 class="font-bold no-margins">
                                           Fuill Year Leads
                                       </h3>
                                       <small>Leads</small>
                                   </div>

                               <div>
                                   <canvas id="lineChart" height="70"></canvas>
                               </div>

                               <div class="m-t-md">

                               </div>

                           </div>
                       </div>
                   </div>
               </div> -->
</div>

            </div>

