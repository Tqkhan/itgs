<style type="text/css">
  li.slide.fading-slide{
     width: 100%;
     height: 100%;
     overflow: hidden;
     visibility: visible;
     left: 0px;
     top: -5px !important;
     z-index: 20;
     background-image: url('https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg');
     opacity: 1;
  }
 
  .btn-primary {
    color: #fff;

    background-color: #fe505a !important;
    border-color: #2e6da4 !important;
  }
   .btn-primary:hover {
    
 
    border-color: #204d74;
    background-color: #f42a36 !important;
    border: solid 1px #fe505a !important;
      
  }
  .post .post__date:before{
      color:#ffffff !important;
  }
  #slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 80px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}


@media screen and (min-width: 1080px) {
    .mobile_res {
       display: none;
    }
}
@media screen and (max-width: 1100px) {
    .mobile_res {
         display: none;
    }
}
@media screen and (max-width: 1024px) {
    .mobile_res {
        display: none;
    }
}
@media screen and (max-width: 767px) {
    .mobile_res {
         display: none;
        
    }
}
@media screen and (max-width: 700px) {
    .mobile_res {
        display: none;
    }
}
@media screen and (max-width: 699px) and (min-width: 490px) {
    .mobile_res {
        display: block;
    }
    .large_carousel{
        display: none;
    }
}
@media screen and (max-width: 487px) {
    .mobile_res {
       display: block;
    }
    .large_carousel{
        display: none;
    }
}
@media screen and (max-width: 360px) {
    .mobile_res {
       display: block;
    }
    .large_carousel{
        display: none;
    }
    .row {
    margin:  0;
}

.movie-best .movie-best__rating {
    width:  100%;
    margin: 0;
}

.change--col {
    padding:  0;
}

.change--col .container-fluid {
    padding:  0;
}

.change--col div {
    padding:  0;
}



.movie-best {
    max-width:  100%;
}
}


</style>
        <!-- Slider -->
<div class="bannercontainer">
    <div class="banner">
        <ul>
            <?php foreach ($sliders as $slider): ?>
                <?php if ($slider['is_video']==1): ?>
                    <li data-transition="fade" data-slotamount="7" class="slide fading-slide" data-slide=''>
                        <!-- <img alt='' src="<?php echo base_url() ?>uploads/slider/namaloom.jpg"> -->
                        <img alt='' src="">
                         <div class="caption slide__video" data-x="0" data-y="0" data-autoplay='true'>
                           <video class="media-element" width="1280" height="500"  style="margin-top: 1px;"  autoplay="autoplay" preload='none' loop="loop" muted="" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>" >
                                <source type="video/webm" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                                <source type="video/mp4" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                                <source type="video/ogg" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                            </video>
                        </div>

                         <div class="caption slide__name slide__name--smaller" 
                             data-x="left" 
                             data-y="160" 

                             data-splitin="chars"
                             data-elementdelay="0.1"

                             data-speed="700" 
                             data-start="1400" 
                             data-easing="easeOutBack"

                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                            data-frames="{ typ :lines;
                                         elementdelay :0.1;
                                         start:1650;
                                         speed:500;
                                         ease:Power3.easeOut;
                                         animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                         },
                                         { typ :lines;
                                         elementdelay :0.1;
                                         start:2150;
                                         speed:500;
                                         ease:Power3.easeOut;
                                         animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                         }
                                         "


                            data-splitout="lines"
                            data-endelementdelay="0.1"
                            data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                            data-endspeed="500"
                           
                            data-endeasing="Back.easeIn"
                             >
                            
                        </div>

                        <div class="caption slide__time position-center postion-place--one sfr stl" 
                             data-x="left" 
                              
                             data-y="242" 
                             data-speed="300" 
                             data-start="2100" 
                             data-easing="easeOutBack"
                             data-endspeed="300"
                             
                             data-endeasing="Back.easeIn">
                             
                         </div>
                        <div class="caption slide__date position-center postion-place--two lfb ltb" 
                             data-x="left"                                       
                             data-y="242" 
                             data-speed="500" 
                             data-start="2400" 
                             data-easing="Power4.easeOut"
                             data-endspeed="400"
                             
                             data-endeasing="Back.easeIn">
                             
                         </div>
                        <div class="caption slide__time position-center postion-place--three sfr stl" 
                             data-x="left" 
                             data-y="242" 
                             data-speed="300" 
                             data-start="2100" 
                             data-easing="easeOutBack"
                             data-endspeed="300"
                             
                             data-endeasing="Back.easeIn">
                             
                         </div>
                        <div class="caption slide__date position-center postion-place--four lfb ltb" 
                             data-x="left"
                             data-y="242" 
                             data-speed="500" 
                             data-start="2800" 
                             data-easing="Power4.easeOut" 
                             data-endspeed="400"
                             
                             data-endeasing="Back.easeIn">
                            
                         </div>

                         <div class="caption lfb slider-wrap-btn ltb" 
                             data-x="left"
                             data-y="310" 
                             data-speed="400" 
                             data-start="3300" 
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             
                             data-endeasing="Power4.easeOut" >
                             
                         </div>
                    </li>
                <?php endif ?>
            <?php if ($slider['is_video']==0): ?>
                    <li data-transition="fade" data-slotamount="7" class="slide" data-slide=''>
                    <img alt='' src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                    <?php endif ?>
                    </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

        <!--end slider -->
        
        
        <!-- Main content -->
<section class="container">
    <div class="movie-best large_carousel" id="">
       <div class="row">
            <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Movies of the month</div>
       </div>
        <div class="col-sm-12 change--col">
            <?php foreach ($best_choice as $movie): ?>
                <div class="movie-beta__item ">
                    <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>">
                    <img alt='' style="    height: 279px;
                    " src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                    </a>
                    <span class="best-rate"><?php echo $movie['imd_rating'] ?></span>
                    <ul class="movie-beta__info">
                        <li>
                            <p class="movie__time">169 min</p>
                            <p><?php echo $movie['categoryID'] ?> </p>
                            <p>38 comments</p>
                        </li>
                        <li class="last-block">
                            <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="slide__link">more</a>
                        </li>
                    </ul>
                </div>     
            <?php endforeach ?>
        </div>
    </div>
     <div class="movie-best mobile_res" id="" style="">
       <div class="row">
            <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Movies of the month</div>
       </div>
        <div class="col-sm-12 change--col">
           <div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider" style="height: 200px;">
        <div class="carousel-inner change--col" style="height: 379px; z-index: 999;">

          <div class="item active">
           <center><div class="col-xs-12 col-sm-12 col-md-2 movie-beta__item pull-center">
             
            <div class="col-md-6">
                        <div class="movie movie--test2 movie--test--dark movie--test--left" style="width: 332%;     margin-left: -29px; height: 279px;">
                            <div class="movie__images">
                                <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="movie-beta__link">
                                    <img alt=''  style="height: 279px;" src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                                </a>
                            </div>
                            <div class="movie__info">
                                <a href='<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>' class="movie__title"><?php echo $movie['title'] ?> (<?php echo $movie['year'] ?>)  </a>

                                <p class="movie__time"><?php echo $movie['length'] ?> min</p>

                                <p class="movie__option"><a href="#"><?php echo $movie['categoryID'] ?></a> </p>
                                
                                <div class="movie__rate">
                                    <span class="movie__rating"><?php echo $movie['imd_rating'] ?></span>
                                </div>               
                            </div>
                        </div>
                    </div>
                
              
            </div></center>
             
            
          </div>

            <?php foreach ($best_choice as $movie): ?>
          <div class="item">
          <center>  <div class="col-xs-12 col-sm-12 col-md-2 movie-beta__item pull-center">
             <div class="col-md-6">
                        <div class="movie movie--test2 movie--test--dark movie--test--left" style=" width: 332%;     margin-left: -29px;  height: 279px;">
                            <div class="movie__images">
                                <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="movie-beta__link">
                                    <img alt=''  style="height: 279px;" src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                                </a>
                            </div>
                            <div class="movie__info">
                                <a href='<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>' class="movie__title"><?php echo $movie['title'] ?> (<?php echo $movie['year'] ?>)  </a>

                                <p class="movie__time"><?php echo $movie['length'] ?> min</p>

                                <p class="movie__option"><a href="#"><?php echo $movie['categoryID'] ?></a> </p>
                                
                                <div class="movie__rate">
                                    <span class="movie__rating"><?php echo $movie['imd_rating'] ?></span>
                                </div>               
                            </div>
                        </div>
                    </div>
              
            </div></center>
          </div>
          <?php endforeach ?>

        </div>
<div class="clearfix"></div>
       
      </div>
    </div>
  </div><br><br><br>
</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12">
        <h2 class="page-heading">Book Tickets</h2>
        <div class="row" >
            <div class="col-sm-12">
                <div class="row" style="background-color: #ffd564; font: 14px 'aleobold', sans-serif; border-radius: 9px;">
                <div class="col-sm-12"><br>
                     <form action="<?php echo base_url() ?>web/come_page" method="get">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-3">
                                        <select class="form-control movies" name="productID" required="" type="text" id="example-text-input">
                                            <option value="">Select Movie</option>
                                            <?php 

                                                foreach ($movies as $m) {

                                                    echo '<option value="'.$m['productID'].'">'.$m['title'].'</option>';
                                                    
                                                }

                                            ?> 
                                            
                                            <!-- <option value="One">One</option>
                                            <option value="Two">Two</option> -->
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control date" name="date_time" required="" type="text" id="example-text-input">
                                            <option value="">Select Date</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control cinema" name="cinema" required="" type="text" id="example-text-input">
                                            <option value="">Select Cinema</option>
                                        </select> 
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control time" name="time" required="" type="text" id="example-text-input">
                                            <option value="">Select Time</option>
                                        </select>
                                    </div>
                                </div>
                               
                               
                              
                               

                                

                               

                                 <div class="form-group row col-md-12">
                                    <input type="submit" value="Book Tickets" class="btn btn-primary pull-right">
                                </div> 

                </form>
                </div>
          
                </div>
            </div>
        </div> 
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12">
        <h2 class="page-heading">Show Time</h2>
        <div class="row" >
            <div class="col-sm-12">
                <div class="row" style="background-color: #ffd564; font: 14px 'aleobold', sans-serif; border-radius: 9px;">
                    <h5><center><?php echo date('l d, F Y') ?></center></h5>
                    <div class="col-sm-6">
                        <table class="table " id="table1">
                           
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d') && $t['cinema_name'] == 'Cinema 1') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                            $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                               
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>
                                    <td style="display:none;"><?php echo strtotime($onetime[$j]) ?></td>

                                </tr>
                                            
                                <?php
                                    }
                                 }
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="table" id="table2" >
                           
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d') && $t['cinema_name'] == 'Cinema 2') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                                 $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                               
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>
                                     <td style="display:none;"><?php echo strtotime($onetime[$j]) ?></td>

                                </tr>
                                <?php 
                            }}

                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row" style="background-color: #ffd564; font: 14px 'aleobold', sans-serif; border-radius: 9px;">
                    <h5><center><?php echo date('l d, F Y', strtotime('+1 day')) ?></center></h5>
                    <div class="col-sm-6">
                        <table class="table"  id="table3">
                           
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d', strtotime('+1 day')) && $t['cinema_name'] == 'Cinema 1') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                                    $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>
                                     <td style="display:none;"><?php echo strtotime($onetime[$j]) ?></td>

                                </tr>
                                <?php }}
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="table"  id="table4">
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d', strtotime('+1 day')) && $t['cinema_name'] == 'Cinema 2') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                                   $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>
                                     <td style="display:none;"><?php echo strtotime($onetime[$j]) ?></td>

                                </tr>
                                <?php }}
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="col-sm-12">
        <div class="mega-select-present mega-select-top mega-select--full">
            <div class="mega-select-marker">
                <div class="marker-indecator film-category" style="display: block;">
                    <p class="select-marker"><span>find movie by</span> <br> Category</p>
                </div>

                <div class="marker-indecator actors" style="display: none;">
                    <p class="select-marker"><span> find movie by</span> <br>Actor</p>
                </div>

                <div class="marker-indecator director" style="display: none;">
                    <p class="select-marker"><span>find by </span> <br>director</p>
                </div>

                <div class="marker-indecator country" style="display: none;">
                    <p class="select-marker"><span>search for movie by </span> <br>country?</p>
                </div>
            </div>
            <div class="mega-select pull-right">
              <span class="mega-select__point">Search by</span>
              <ul class="mega-select__sort">
                  
                  
                  <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active" data-filter="film-category">Category</a></li>
                  <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter="actors">Actors</a></li>
                  <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter="director">Director</a></li>
                  <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter="country">Country</a></li>
              </ul>
<form method="post" action="<?php echo base_url('web/search') ?>">
              <input name="search" type="text" class="select__field">
              
              <div class="select__btn">
                <!-- <input type="submit" name="city" value="location" class="btn btn-md btn--danger location" style="display: none;"> -->
                <input type="submit" name="city" value="cinema" data-attr="cinema" class="btn btn-md btn--danger cinema" style="display: none;">
<input type="submit" name="city" value="categoryID" data-attr="film-category" class="btn btn-md btn--danger film-category" style="display: none;">
<input type="submit" name="city" value="actors" data-attr="actors" class="btn btn-md btn--danger actors" style="display: none;">
<input type="submit" name="city" value="director" data-attr="director" class="btn btn-md btn--danger director" style="display: none;">
<input type="submit" name="city" value="country" data-attr="country" class="btn btn-md btn--danger country" style="display: none;">

                <a href="#" class="btn btn-md btn--danger cinema" data-attr="cinema" style="display: none;">Search <span class="hidden-exrtasm">suitable cimema</span></a>
                <a href="#" class="btn btn-md btn--danger film-category" data-attr="film-category" style="display: inline-block;">Search <span class="hidden-exrtasm">best category</span></a>
                <a href="#" class="btn btn-md btn--danger actors" data-attr="actors" style="display: none;">Search <span class="hidden-exrtasm">talented actors</span></a>
                <a href="#" class="btn btn-md btn--danger director" data-attr="director" style="display: none;">Search <span class="hidden-exrtasm">favorite director</span></a>
                <a href="#" class="btn btn-md btn--danger country" data-attr="country" style="display: none;">Search <span class="hidden-exrtasm">produced country</span></a>
              </div>
</form>
             
            </div>
        </div>
    </div>
          
    <div class="clearfix"></div>
        <h2 id='target' class="page-heading heading--outcontainer">Now in the cinema</h2>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-8 col-md-9 large_carousel">
                <!-- Movie variant with time -->    
               <?php foreach ($movies as $movie): ?>
                    <div class="col-md-6">
                        <div class="movie movie--test2 movie--test--dark movie--test--left" style="height: 279px;">
                            <div class="movie__images">
                                <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="movie-beta__link">
                                    <img alt=''  style="height: 279px;" src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                                </a>
                            </div>
                            <div class="movie__info">
                                <a href='<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>' class="movie__title"><?php echo $movie['title'] ?> (<?php echo $movie['year'] ?>)  </a>

                                <p class="movie__time"><?php echo $movie['length'] ?> min</p>

                                <p class="movie__option"><a href="#"><?php echo $movie['categoryID'] ?></a> </p>
                                
                                <div class="movie__rate">
                                    <span class="movie__rating"><?php echo $movie['imd_rating'] ?></span>
                                </div>               
                            </div>
                        </div>
                    </div>
               <?php endforeach ?>
            </div>
            <div class="movie-best mobile_res" id="" style="">
                
                    <div class="col-sm-12 change--col">
                       <div class="container-fluid">

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="carousel carousel-showmanymoveone slide" id="itemslider2" style="height: 200px;">
                    <div class="carousel-inner change--col" style="height: 379px; z-index: 999;">

                      <div class="item active">
                       <center><div class="col-xs-12 col-sm-12 col-md-2 movie-beta__item pull-center">
                         
                        <div class="col-md-6">
                                    <div class="movie movie--test2 movie--test--dark movie--test--left" style="width: 332%;     margin-left: -29px; height: 279px;">
                                        <div class="movie__images">
                                            <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="movie-beta__link">
                                                <img alt=''  style="height: 279px;" src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                                            </a>
                                        </div>
                                        <div class="movie__info">
                                            <a href='<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>' class="movie__title"><?php echo $movie['title'] ?> (<?php echo $movie['year'] ?>)  </a>

                                            <p class="movie__time"><?php echo $movie['length'] ?> min</p>

                                            <p class="movie__option"><a href="#"><?php echo $movie['categoryID'] ?></a> </p>
                                            
                                            <div class="movie__rate">
                                                <span class="movie__rating"><?php echo $movie['imd_rating'] ?></span>
                                            </div>               
                                        </div>
                                    </div>
                                </div>
                            
                          
                        </div></center>
                         
                        
                      </div>

                        <?php foreach ($movies as $movie): ?>
                      <div class="item">
                      <center>  <div class="col-xs-12 col-sm-12 col-md-2 movie-beta__item pull-center">
                         <div class="col-md-6">
                                    <div class="movie movie--test2 movie--test--dark movie--test--left" style=" width: 332%;     margin-left: -29px;  height: 279px;">
                                        <div class="movie__images">
                                            <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="movie-beta__link">
                                                <img alt=''  style="height: 279px;" src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                                            </a>
                                        </div>
                                        <div class="movie__info">
                                            <a href='<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>' class="movie__title"><?php echo $movie['title'] ?> (<?php echo $movie['year'] ?>)  </a>

                                            <p class="movie__time"><?php echo $movie['length'] ?> min</p>

                                            <p class="movie__option"><a href="#"><?php echo $movie['categoryID'] ?></a> </p>
                                            
                                            <div class="movie__rate">
                                                <span class="movie__rating"><?php echo $movie['imd_rating'] ?></span>
                                            </div>               
                                        </div>
                                    </div>
                                </div>
                          
                        </div></center>
                      </div>
                      <?php endforeach ?>

                    </div>
            <div class="clearfix"></div>
                   
                  </div>
                </div>
              </div><br><br><br>
            </div>
                    </div>
                </div>
            <aside class="col-sm-4 col-md-3">
                <div class="sitebar first-banner--left">
                    <div class="banner-wrap first-banner--left">
                        <img alt='banner' src="<?php echo base_url() ?>assets/images/movie forfamily.jpg">
                    </div>

                     <div class="banner-wrap">
                        <img alt='banner' src="<?php echo base_url() ?>assets/images/lobby.jpg">
                    </div>

                     <div class="banner-wrap banner-wrap--last">
                        <img alt='banner' src="<?php echo base_url() ?>assets/images/advance booking.jpg">
                    </div>
                </div>
            </aside>
        </div>
    </div>
    
    <div class="col-sm-12">
        <h2 class="page-heading">Latest news</h2>
        <?php 
            $namespaces = $xml->getNamespaces(true);
            for($i = 0; $i < 6; $i++){
                
        ?>
        <div class="col-sm-4 similar-wrap col--remove">
            <div class="post post--preview post--preview--wide">
                <div class="post__image">
                    <?php $url = trim((string) $xml->channel->item[$i]->children($namespaces['media'])->thumbnail->attributes()->url); ?>
                    <img alt='' src="<?php echo $url ?>">
                    <!--<div class="social social--position social--hide">-->
                    <!--    <span class="social__name">Share:</span>-->
                    <!--    <a href='#' class="social__variant social--first fa fa-facebook"></a>-->
                    <!--    <a href='#' class="social__variant social--second fa fa-twitter"></a>-->
                    <!--    <a href='#' class="social__variant social--third fa fa-vk"></a>-->
                    <!--</div>-->
                </div>
                <p class="post__date" ><?php echo date('d M Y', strtotime($xml->channel->item[$i]->pubDate)) ?> </p>
                <a href="#" class="post__title" style="    margin-top: 13px;"><?php echo $xml->channel->item[$i]->title ?></a>
                <a href="#" class="btn read-more post--btn">read more</a>
            </div><br>
        </div>
        <?php } ?>
        <!--<?php foreach ($newss as $news): ?>-->
        <!--    <div class="col-sm-4 similar-wrap col--remove">-->
        <!--        <div class="post post--preview post--preview--wide">-->
        <!--            <div class="post__image">-->
        <!--                <img alt='' src="<?php echo base_url() ?>uploads/news/<?php echo $news['image'] ?>">-->
        <!--                <div class="social social--position social--hide">-->
        <!--                    <span class="social__name">Share:</span>-->
        <!--                    <a href='#' class="social__variant social--first fa fa-facebook"></a>-->
        <!--                    <a href='#' class="social__variant social--second fa fa-twitter"></a>-->
        <!--                    <a href='#' class="social__variant social--third fa fa-vk"></a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <p class="post__date"><?php echo $news['date_time'] ?> </p>-->
        <!--            <a href="#" class="post__title"><?php echo $news['title'] ?></a>-->
        <!--            <a href="<?php echo base_url() ?>/web/newspage" class="btn read-more post--btn">read more</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--<?php endforeach ?>-->
    </div>
</section>

<div class="clearfix"></div>

<?php include "footer.php"; ?>


<script type="text/javascript">
    function get_showing(productID) {
        $.ajax({
            url:"<?php echo base_url() ?>web/get_showing",
            type:"post",
            data:{productID:productID},
            success:function(resp){
               $('#showing_showtime').html(resp);
            }
        });
    }
</script>
<!--my Work-->
<!--<script src="<?php echo base_url() ?>assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>-->
<script type="text/javascript">
    $('.movies').change(function() {
        var id = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_dates/'+id,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                $('.date option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.date').append('<option value="'+response[i].showdate+'">'+response[i].showdate+'</option>')
                }
            }
        })
    })
    $('.date').change(function() {
        var id = $('.movies').val()
        var date = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_ciname/'+id+'/'+date,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                $('.cinema option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.cinema').append('<option value="'+response[i].cinema_name+'">'+response[i].cinema_name+'</option>')
                }
            }
        })
    })
    $('.cinema').change(function() {
        var id = $('.movies').val()
        var date = $('.date').val()
        var cinema = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_time/'+id+'/'+date+'/'+cinema,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                //console.log(response)
                //var times = response.split(',')
                ///console.log(times)
                $('.time option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.time').append('<option value="'+cinema+'_'+response[i]+'">'+response[i]+'</option>')
                }
            }
        })
    })
    $('.time').change(function() {
        var id = $('.movies').val()
        var date = $('.date').val()
        var cinema = $('.cinema').val()
        var time = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_seats/'+id+'/'+date+'/'+cinema+'/'+time,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                var res = response
                $('.seats option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.seats').append('<option value="'+response[i]+'">'+response[i]+'</option>')
                }
            }
        })
    })
</script>
<script type="text/javascript">
    $('.select__btn a').click(function(){
        var atr = $(this).attr('data-attr')
        $('input[data-attr="'+atr+'"]').click()
    })
</script>
<script type="text/javascript">
	function sortTable(table, order) {
    var asc   = order === 'asc',
        tbody = table.find('tbody');

    tbody.find('tr').sort(function(a, b) {
        if (asc) {
            return $('td:last', a).text().localeCompare($('td:last', b).text());
        } else {
            return $('td:last', b).text().localeCompare($('td:last', a).text());
        }
    }).appendTo(tbody);
}
sortTable($('#table1'),'asc');
sortTable($('#table2'),'asc');
sortTable($('#table3'),'asc');
sortTable($('#table4'),'asc');


</script>
<script type="text/javascript">
    $(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>
<script type="text/javascript">
    $(document).ready(function(){

$('#itemslider2').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>