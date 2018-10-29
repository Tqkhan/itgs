<?php 
// print_r($list);
// $key = array_search("A6",$list); 
// print_r($key);
// echo '<br>';
// print_r(array_key_exists($key,$list));die;
//error_reporting('-1');
//$cinema=($show['cinema_name']);
$cinema=explode("_",$_GET['time']);
//echo array_search("red",$a);

//print_r($list);die();

 ?>
 <br>
 
                       <style type="text/css">
                           .old {
    display: none;
}
                       </style>
        <!-- Main content -->
        <div class="place-form-area">
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                        <a href="#" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step">2. Choose a seat</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price sits-price--cheap">Available</li>
                        
                    </ul>
                </div>
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-state sits-state--not">Not available</li>
                        
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        
                        <li class="sits-state sits-state--your">Your choice</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">

                <?php if ($cinema[0]=="Cinema 1"): ?>
                     <div class="sits-area hidden-xs">
                    
   
                    <div class="sits">
                        <aside class="sits__line"><br><br><br>
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">I</span>
                            <span class="sits__indecator additional-margin">J</span>
                            <span class="sits__indecator">K</span>
                            <span class="sits__indecator">L</span>
                            <span class="sits__indecator">M</span>
                            <span class="sits__indecator">N</span>
                        </aside>
                                           
    <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                            <span class="sits__indecator">10</span>
                            <span class="sits__indecator">11</span>
                        </footer>
                        <br>
                            <div class="sits__row">
                                 <?php 
                                    $key = array_search("A1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" style="<?php  echo "color:$seatColor;" ?>" data-place='A1' data-price='10'>A1</span>
                                 <?php 
                                    $key = array_search("A2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" style="<?php  echo "color:$seatColor;" ?>" data-place='A2' data-price='10'>A2</span>
                                <?php 
                                    $key = array_search("A3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A3' data-price='10'>A3</span>
                                 <?php 
                                    $key = array_search("A4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A4' data-price='10'>A4</span>
                                 <?php 
                                    $key = array_search("A5",$list); 
                                    print_r(array_key_exists($key,$list));
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A5' data-price='10'>A5</span>
                                <?php 
                                    $key = array_search("A6",$list); 
                                    $class = '';
                                    echo $key;
                                    if($key > -1){
                                        if (array_key_exists($key,$list)){
                                            $class = 'sits-state--not';
                                        }
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A6' data-price='10'>A6</span>
                                <?php 
                                    $key = array_search("A7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap  <?php echo $class ?>" data-place='A7' data-price='10'>A7</span>
                                <?php 
                                    $key = array_search("A8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A8' data-price='10'>A8</span>
                                <?php 
                                    $key = array_search("A9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A9' data-price='10'>A9</span>
                                <?php 
                                    $key = array_search("A10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A10' data-price='10'>A10</span>
                                <?php 
                                    $key = array_search("A11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A11' data-price='10'>A11</span>
                            </div>
                            
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("B1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B1' data-price='10'>B1</span>
                                <?php 
                                    $key = array_search("B2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B2' data-price='10'>B2</span>
                                <?php 
                                    $key = array_search("B3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B3' data-price='10'>B3</span>
                                <?php 
                                    $key = array_search("B4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B4' data-price='10'>B4</span>
                                <?php 
                                    $key = array_search("B5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B5' data-price='10'>B5</span>
                                <?php 
                                    $key = array_search("B6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B6' data-price='10'>B6</span>
                                <?php 
                                    $key = array_search("B7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B7' data-price='10'>B7</span>
                                <?php 
                                    $key = array_search("B8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B8' data-price='10'>B8</span>
                                <?php 
                                    $key = array_search("B9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B9' data-price='10'>B9</span>
                                <?php 
                                    $key = array_search("B10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B10' data-price='10'>B10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("C1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C1' data-price='10'>C1</span>
                                <?php 
                                    $key = array_search("C2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C2' data-price='10'>C2</span>
                                <?php 
                                    $key = array_search("C3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C3' data-price='10'>C3</span>
                                <?php 
                                    $key = array_search("C4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C4' data-price='10'>C4</span>
                                <?php 
                                    $key = array_search("C5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C5' data-price='10'>C5</span>
                                <?php 
                                    $key = array_search("C6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C6' data-price='10'>C6</span>
                                <?php 
                                    $key = array_search("C7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C7' data-price='10'>C7</span>
                                <?php 
                                    $key = array_search("C8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C8' data-price='10'>C8</span>
                                <?php 
                                    $key = array_search("C9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C9' data-price='10'>C9</span>
                                <?php 
                                    $key = array_search("C10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C10' data-price='10'>C10</span>
                                <?php 
                                    $key = array_search("C11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C11' data-price='10'>C11</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("D1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D1' data-price='10'>D1</span>
                                <?php 
                                    $key = array_search("D2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D2' data-price='10'>D2</span>
                                <?php 
                                    $key = array_search("D3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D3' data-price='10'>D3</span>
                                <?php 
                                    $key = array_search("D4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D4' data-price='10'>D4</span>
                                <?php 
                                    $key = array_search("D5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D5' data-price='10'>D5</span>
                                <?php 
                                    $key = array_search("D6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D6' data-price='10'>D6</span>
                                <?php 
                                    $key = array_search("D7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D7' data-price='10'>D7</span>
                                <?php 
                                    $key = array_search("D8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D8' data-price='10'>D8</span>
                                <?php 
                                    $key = array_search("D9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D9' data-price='10'>D9</span>
                                <?php 
                                    $key = array_search("D10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D10' data-price='10'>D10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("E1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E1' data-price='20'>E1</span>
                                <?php 
                                    $key = array_search("E2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E2' data-price='20'>E2</span>
                                <?php 
                                    $key = array_search("E3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E3' data-price='20'>E3</span>
                                <?php 
                                    $key = array_search("E4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E4' data-price='20'>E4</span>
                                <?php 
                                    $key = array_search("E5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E5' data-price='20'>E5</span>
                                <?php 
                                    $key = array_search("E6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E6' data-price='20'>E6</span>
                                <?php 
                                    $key = array_search("E7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E7' data-price='20'>E7</span>
                                <?php 
                                    $key = array_search("E8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E8' data-price='20'>E8</span>
                                <?php 
                                    $key = array_search("E9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E9' data-price='20'>E9</span>
                                <?php 
                                    $key = array_search("E10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E10' data-price='20'>E10</span>
                                <?php 
                                    $key = array_search("E11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E11' data-price='20'>E11</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("F1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F1' data-price='20'>F1</span>
                                <?php 
                                    $key = array_search("F2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F2' data-price='20'>F2</span>
                                <?php 
                                    $key = array_search("F3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F3' data-price='20'>F3</span>
                                <?php 
                                    $key = array_search("F4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F4' data-price='20'>F4</span>
                                <?php 
                                    $key = array_search("F5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F5' data-price='20'>F5</span>
                                <?php 
                                    $key = array_search("F6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F6' data-price='20'>F6</span>
                                <?php 
                                    $key = array_search("F7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F7' data-price='20'>F7</span>
                                <?php 
                                    $key = array_search("F8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F8' data-price='20'>F8</span>
                                <?php 
                                    $key = array_search("F9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F9' data-price='20'>F9</span>
                                <?php 
                                    $key = array_search("F10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F10' data-price='20'>F10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("G1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G1' data-price='20'>G1</span>
                                <?php 
                                    $key = array_search("G2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G2' data-price='20'>G2</span>
                                <?php 
                                    $key = array_search("G3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G3' data-price='20'>G3</span>
                                <?php 
                                    $key = array_search("G4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G4' data-price='20'>G4</span>
                                <?php 
                                    $key = array_search("G5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G5' data-price='20'>G5</span>
                                <?php 
                                    $key = array_search("G6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G6' data-price='20'>G6</span>
                                <?php 
                                    $key = array_search("G7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G7' data-price='20'>G7</span>
                                <?php 
                                    $key = array_search("G8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G8' data-price='20'>G8</span>
                                <?php 
                                    $key = array_search("G9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G9' data-price='20'>G9</span>
                                <?php 
                                    $key = array_search("G10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G10' data-price='20'>G10</span>
                                <?php 
                                    $key = array_search("G11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G11' data-price='20'>G11</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("I1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I1' data-price='20'>I1</span>
                                <?php 
                                    $key = array_search("I2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I2' data-price='20'>I2</span>
                                <?php 
                                    $key = array_search("I3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I3' data-price='20'>I3</span>
                                <?php 
                                    $key = array_search("I4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I4' data-price='20'>I4</span>
                                <?php 
                                    $key = array_search("I5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I5' data-price='20'>I5</span>
                                <?php 
                                    $key = array_search("I6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I6' data-price='20'>I6</span>
                                <?php 
                                    $key = array_search("I7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I7' data-price='20'>I7</span>
                                <?php 
                                    $key = array_search("I8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I8' data-price='20'>I8</span>
                                <?php 
                                    $key = array_search("I9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I9' data-price='20'>I9</span>
                                <?php 
                                    $key = array_search("I10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap" data-place='I10' data-price='20'>I10</span>
                            </div>

                            <div class="sits__row additional-margin">
                                <?php 
                                    $key = array_search("J1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J1' data-price='30'>J1</span>
                                <?php 
                                    $key = array_search("J2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J2' data-price='30'>J2</span>
                                <?php 
                                    $key = array_search("J3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J3' data-price='30'>J3</span>
                                <?php 
                                    $key = array_search("J4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J4' data-price='30'>J4</span>
                                <?php 
                                    $key = array_search("J5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J5' data-price='30'>J5</span>
                                <?php 
                                    $key = array_search("J6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J6' data-price='30'>J6</span>
                                <?php 
                                    $key = array_search("J7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J7' data-price='30'>J7</span>
                                <?php 
                                    $key = array_search("J8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J8' data-price='30'>J8</span>
                                <?php 
                                    $key = array_search("J9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J9' data-price='30'>J9</span>
                                <?php 
                                    $key = array_search("J10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J10' data-price='30'>J10</span>
                                <?php 
                                    $key = array_search("J11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J11' data-price='30'>J11</span>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("K1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K1' data-price='30'>K1</span>
                                <?php 
                                    $key = array_search("K2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K2' data-price='30'>K2</span>
                                <?php 
                                    $key = array_search("K3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K3' data-price='30'>K3</span>
                                <?php 
                                    $key = array_search("K4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K4' data-price='30'>K4</span>
                                <?php 
                                    $key = array_search("K5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K5' data-price='30'>K5</span>
                                <?php 
                                    $key = array_search("K6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K6' data-price='30'>K6</span>
                                <?php 
                                    $key = array_search("K7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K7' data-price='30'>K7</span>
                                <?php 
                                    $key = array_search("K8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K8' data-price='30'>K8</span>
                                <?php 
                                    $key = array_search("K9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K9' data-price='30'>K9</span>
                                <?php 
                                    $key = array_search("K10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K10' data-price='30'>K10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("L1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L1' data-price='30'>L1</span>
                                <?php 
                                    $key = array_search("L2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L2' data-price='30'>L2</span>
                                <?php 
                                    $key = array_search("L3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L3' data-price='30'>L3</span>
                                <?php 
                                    $key = array_search("L4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L4' data-price='30'>L4</span>
                                <?php 
                                    $key = array_search("L5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L5' data-price='30'>L5</span>
                                <?php 
                                    $key = array_search("L6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L6' data-price='30'>L6</span>
                                <?php 
                                    $key = array_search("L7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L7' data-price='30'>L7</span>
                                <?php 
                                    $key = array_search("L8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L8' data-price='30'>L8</span>
                                <?php 
                                    $key = array_search("L9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L9' data-price='30'>L9</span>
                                <?php 
                                    $key = array_search("L10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L10' data-price='30'>L10</span>
                                <?php 
                                    $key = array_search("L11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L11' data-price='30'>L11</span>
                            </div>
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("M1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M1' data-price='30'>M1</span>
                                <?php 
                                    $key = array_search("M2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M2' data-price='30'>M2</span>
                                <?php 
                                    $key = array_search("M3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M3' data-price='30'>M3</span>
                                <?php 
                                    $key = array_search("M4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M4' data-price='30'>M4</span>
                                <?php 
                                    $key = array_search("M5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M5' data-price='30'>M5</span>
                                <?php 
                                    $key = array_search("M6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M6' data-price='30'>M6</span>
                                <?php 
                                    $key = array_search("M7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M7' data-price='30'>M7</span>
                                <?php 
                                    $key = array_search("M8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M8' data-price='30'>M8</span>
                                <?php 
                                    $key = array_search("M9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M9' data-price='30'>M9</span>
                                <?php 
                                    $key = array_search("M10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M10' data-price='30'>M10</span>
                            </div>
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("N1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N1' data-price='30'>N1</span>
                                <?php 
                                    $key = array_search("N2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N2' data-price='30'>N2</span>
                                <?php 
                                    $key = array_search("N3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N3' data-price='30'>N3</span>
                                <?php 
                                    $key = array_search("N4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N4' data-price='30'>N4</span>
                                <?php 
                                    $key = array_search("N5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N5' data-price='30'>N5</span>
                                <?php 
                                    $key = array_search("N6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N6' data-price='30'>N6</span>
                                <?php 
                                    $key = array_search("N7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N7' data-price='30'>N7</span>
                                <?php 
                                    $key = array_search("N8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N8' data-price='30'>N8</span>
                                <?php 
                                    $key = array_search("N9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N9' data-price='30'>N9</span>
                                <?php 
                                    $key = array_search("N10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N10' data-price='30'>N10</span>
                                <?php 
                                    $key = array_search("N11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='N11' data-price='30'>N11</span>
                            </div>

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result old">
                                $0
                            </div>
                        </aside>
                       
                    </div>
                </div>
            </div>
                <?php endif ?>
               
                <?php if ($cinema[0]=="Cinema 2"): ?>
                     <div class="sits-area hidden-xs">
                    
                    
                    <div class="sits">
                        <aside class="sits__line"><br><br><br>
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">I</span>
                            <span class="sits__indecator additional-margin">J</span>
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            
                        </footer>
                        <br>

                            <div class="sits__row">
                                 <?php 
                                    $key = array_search("A1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" style="<?php  echo "color:$seatColor;" ?>" data-place='A1' data-price='10'>A1</span>
                                <?php 
                                    $key = array_search("A2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A2' data-price='10'>A2</span>
                                 <?php 
                                    $key = array_search("A3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A3' data-price='10'>A3</span>
                                <?php 
                                    $key = array_search("A4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A4' data-price='10'>A4</span>
                                <?php 
                                    $key = array_search("A5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A5' data-price='10'>A5</span>
                                <?php 
                                    $key = array_search("A6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A6' data-price='10'>A6</span>
                                <?php 
                                    $key = array_search("A7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A7' data-price='10'>A7</span>
                                <?php 
                                    $key = array_search("A8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A8' data-price='10'>A8</span>
                            </div>
                            
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("B1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B1' data-price='10'>B1</span>
                                <?php 
                                    $key = array_search("B2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B2' data-price='10'>B2</span>
                                <?php 
                                    $key = array_search("B3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B3' data-price='10'>B3</span>
                                <?php 
                                    $key = array_search("B4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B4' data-price='10'>B4</span>
                                <?php 
                                    $key = array_search("B5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B5' data-price='10'>B5</span>
                                <?php 
                                    $key = array_search("B6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B6' data-price='10'>B6</span>
                                <?php 
                                    $key = array_search("B7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B7' data-price='10'>B7</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("C1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C1' data-price='10'>C1</span>
                                <?php 
                                    $key = array_search("C2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C2' data-price='10'>C2</span>
                                <?php 
                                    $key = array_search("C3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C3' data-price='10'>C3</span>
                                <?php 
                                    $key = array_search("C4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C4' data-price='10'>C4</span>
                                <?php 
                                    $key = array_search("C5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C5' data-price='10'>C5</span>
                                <?php 
                                    $key = array_search("C6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C6' data-price='10'>C6</span>
                                <?php 
                                    $key = array_search("C7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C7' data-price='10'>C7</span>
                                <?php 
                                    $key = array_search("C8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C8' data-price='10'>C8</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("D1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D1' data-price='10'>D1</span>
                                <?php 
                                    $key = array_search("D2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D2' data-price='10'>D2</span>
                                <?php 
                                    $key = array_search("D3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D3' data-price='10'>D3</span>
                                <?php 
                                    $key = array_search("D4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D4' data-price='10'>D4</span>
                                <?php 
                                    $key = array_search("D5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D5' data-price='10'>D5</span>
                                <?php 
                                    $key = array_search("D6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D6' data-price='10'>D6</span>
                                <?php 
                                    $key = array_search("D7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D7' data-price='10'>D7</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("E1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E1' data-price='20'>E1</span>
                                <?php 
                                    $key = array_search("E2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E2' data-price='20'>E2</span>
                                <?php 
                                    $key = array_search("E3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E3' data-price='20'>E3</span>
                                <?php 
                                    $key = array_search("E4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E4' data-price='20'>E4</span>
                                <?php 
                                    $key = array_search("E5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E5' data-price='20'>E5</span>
                                <?php 
                                    $key = array_search("E6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E6' data-price='20'>E6</span>
                                <?php 
                                    $key = array_search("E7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E7' data-price='20'>E7</span>
                                <?php 
                                    $key = array_search("E8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E8' data-price='20'>E8</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("F1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F1' data-price='20'>F1</span>
                                <?php 
                                    $key = array_search("F2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F2' data-price='20'>F2</span>
                                <?php 
                                    $key = array_search("F3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F3' data-price='20'>F3</span>
                                <?php 
                                    $key = array_search("F4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F4' data-price='20'>F4</span>
                                <?php 
                                    $key = array_search("F5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F5' data-price='20'>F5</span>
                                <?php 
                                    $key = array_search("F6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F6' data-price='20'>F6</span>
                                <?php 
                                    $key = array_search("F7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F7' data-price='20'>F7</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("G1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G1' data-price='20'>G1</span>
                                <?php 
                                    $key = array_search("G2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G2' data-price='20'>G2</span>
                                <?php 
                                    $key = array_search("G3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G3' data-price='20'>G3</span>
                                <?php 
                                    $key = array_search("G4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G4' data-price='20'>G4</span>
                                <?php 
                                    $key = array_search("G5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G5' data-price='20'>G5</span>
                                <?php 
                                    $key = array_search("G6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G6' data-price='20'>G6</span>
                                <?php 
                                    $key = array_search("G7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G7' data-price='20'>G7</span>
                                <?php 
                                    $key = array_search("G8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G8' data-price='20'>G8</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("I1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I1' data-price='20'>I1</span>
                                <?php 
                                    $key = array_search("I2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I2' data-price='20'>I2</span>
                                <?php 
                                    $key = array_search("I3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I3' data-price='20'>I3</span>
                                <?php 
                                    $key = array_search("I4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I4' data-price='20'>I4</span>
                                <?php 
                                    $key = array_search("I5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I5' data-price='20'>I5</span>
                                <?php 
                                    $key = array_search("I6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I6' data-price='20'>I6</span>
                                <?php 
                                    $key = array_search("I7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I7' data-price='20'>I7</span>
                            </div>

                            <div class="sits__row additional-margin">
                                <?php 
                                    $key = array_search("J1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J1' data-price='30'>J1</span>
                                <?php 
                                    $key = array_search("J2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J2' data-price='30'>J2</span>
                                <?php 
                                    $key = array_search("J3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J3' data-price='30'>J3</span>
                                <?php 
                                    $key = array_search("J4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J4' data-price='30'>J4</span>
                                <?php 
                                    $key = array_search("J5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J5' data-price='30'>J5</span>
                                <?php 
                                    $key = array_search("J6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J6' data-price='30'>J6</span>
                                <?php 
                                    $key = array_search("J7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J7' data-price='30'>J7</span>
                                <?php 
                                    $key = array_search("J8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J8' data-price='30'>J8</span>

                     
                       

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result old">
                                $0
                            </div>
                        </aside>
                        
                    </div>
                </div>
            </div>
                <?php endif ?>
               
            
        <!--     <div class="col-sm-12 visible-xs"> 
                <div class="sits-area--mobile">
                    <div class="sits-area--mobile-wrap">
                        <div class="sits-select">
                            <select name="sorting_item" class="sits__sort sit-row" tabindex="0">
                                    <option value="1" selected='selected'>A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                            </select>
 
                            <select name="sorting_item" class="sits__sort sit-number" tabindex="1">
                                    <option value="1" selected='selected'>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                            </select>

                            <a href="#" class="btn btn-md btn--warning toogle-sits">Choose sit</a>
                        </div>
                    </div>

                    <a href="#" class="watchlist add-sits-line">Add new sit</a>

                    <aside class="sits__checked">
                            <div class="checked-place">
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result">
                                $0
                            </div>
                    </aside>

                    <img alt="" src="images/components/sits_mobile.png">
                </div>
            </div> -->   
            <br> <br>
                
                    <img style="width: 422px;     z-index: 999;
    margin-top: -10px;" src="<?php echo base_url() ?>assets/images/seatlayout-bg.png"><br><br><div class="sits-anchor" style="font-size: 25px; margin-top: -20px; ">screen</div>
             </div>

            </div>
        </section>
        </div>
        
        

        <div class="clearfix"></div>
        <form id='film-and-time' method='post' action='<?php echo base_url() ?>web/step3'>
     <input type="hidden" name="productID" value="<?php echo $_GET['productID'] ?>">
     <input type="hidden" name="movie_name" value="<?php echo $_GET['movie_name'] ?>">
        <input type="hidden" name="date_time" value="<?php echo $_GET['date_time'] ?>">
        <input type="hidden" name="cinema_name" value="<?php echo $cinema[0] ?>">
        <input type="hidden" name="show_time" value="<?php echo $cinema[1] ?>"> 
            <input type='hidden' name='choosen-cost' class="choosen-cost">
            <input type='hidden' name='choosen-sits' class="choosen-sits">


            <div class="booking-pagination booking-pagination--margin">
                    <button type="button" onclick="window.history.back()" class="booking-pagination__prev">
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </button>
                    <button type="submit" id="check" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">checkout</span>
                    </button>
            </div>
        </form>
        
        <div class="clearfix"></div>

    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                        <div class="social social--colored">
                                <a href='#' class="social__variant fa fa-facebook"></a>
                                <a href='#' class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>



<?php include 'footer.php'; ?>

        <script type="text/javascript">
            $(document).ready(function() {
                init_BookingTwo();
            });

        </script>
