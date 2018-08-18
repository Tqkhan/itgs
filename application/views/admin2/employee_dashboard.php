
            <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon>
                            <i class=pe-7s-tools style="margin-top: -5px;"></i>
                        </div>
                        <div class=header-title>
                            <h1 style="margin-top: 10px;" >Employee Dashboard</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                 <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                                <li class=active>Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <div class=row>
                        <a href="<?php echo base_url() ?>admin/screening_operation"><div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="statistic-box statistic-filled-3 border"  style=" box-shadow: 10px 10px 5px #888888;">
                                <h2><span class="slight">Screening / Research Operations</span></h2>
                                <div class="small"></div>
                                <i class="ti-world statistic_icon"></i>

                            </div>
                        </div></a>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="statistic-box statistic-filled-1 border"  style=" box-shadow: 10px 10px 5px #888888;">
                                <h2><span class="slight">Human Resources</span></h2>
                                <div class="small"></div>
                                <i class="ti-server statistic_icon"></i>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="statistic-box statistic-filled-2 border"  style=" box-shadow: 10px 10px 5px #888888;">
                                <h2><span class="slight">Information Technology</span></h2>
                                <div class="small"></div>
                                <i class="ti-user statistic_icon"></i>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="statistic-box statistic-filled-4 border"  style=" box-shadow: 10px 10px 5px #888888;">
                               <h2><span class="slight">Meetings Manager</span></h2>
                                <div class="small"></div>
                                <i class="ti-bag statistic_icon"></i>

                            </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="statistic-box statistic-filled-2 border"  style=" box-shadow: 10px 10px 5px #888888; background-color: #212eaf;">
                                <h2><span class="slight">Case Analysis / Invoice</span></h2>
                                <div class="small"></div>
                                <i class="ti-user statistic_icon"></i>

                            </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="statistic-box statistic-filled-4 border"  style=" box-shadow: 10px 10px 5px #888888; background-color: #af215e;">
                               <h2><span class="slight">ERP Query Suggestion</span></h2>
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
                                            <a href="<?php echo base_url() ?>admin/view_memo/<?php echo $memo['id'] ?>">
                                                <div class=inbox-item>
                                                    <div class=inbox-item-img>
                                                      <?php if ($memo['file']): ?><img src="<?php echo base_url().'uploads/memo/'.$memo['file'] ?>" class=img-circle alt="">
                                                    <?php else: ?>
                                                      No File
                                                    <?php endif ?>
                                                    </div>
                                                    <strong class=inbox-item-author><?php echo $memo['title'] ?></strong></br>

                                                    <span class=inbox-item-date><strong>Assigned By</strong> - HR
                                        
                                                    
 
                                                </span><br> 
                                                    <span class=inbox-item-date><strong>Assigned To</strong> - 
                                                        <?php if ($_SESSION['id']==$memo['assigned_to']): ?>
                                                            Me

                                                        <?php else: ?>
                                                            <?php echo $memo['employe_user'] ?>
                                                        <?php endif ?>


                                                    </span>
                                                    <br>
                                                    <p class=inbox-item-text><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Memo Date</strong> - <?php echo $memo['date_time'] ?></p>
                                                 
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


            </div>

