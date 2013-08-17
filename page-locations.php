<?php


get_header();extract((array)$META)?>


<div class="content-area-wrap">
            <div class="heading"></div>

            <div class="appointment-wrap">
                <div class="appointment container-fluid">
                    <div class="form">
                    <?php if($_POST['submit']=='submit'){ ?>
                        <h2>Thanks! We'll be in touch</h2>
					<?php }else{ ?>
                    <h2>Ready to Request an Appointment?</h2>
                        <form action="/locations" method="post">
                    <input type="text" name="name" placeholder="Full Name" tabindex="1">
                    <input type="text" name="phoneNumber" placeholder="Phone Number" tabindex="2">
                    <select name="location">
                        <option value="" selected="selected">Appointment Location</option>
                        <option value="<?=$main->name?>"><?=$main->name?></option>
<?php $m=0; ?>
<?php foreach((array)$secondary as $local): $m++; ?>
                                <option value="<?=$local->name?>"><?=$local->name?></option>
                        
<?php endforeach; ?> 
                                                


                    </select>
                    <input type="submit" name="submit" value="submit" tabindex="4">
                </form>                    
                    
                    <?php } ?>
                        
                    </div>

                    <div class="ty-msg">
                        <h1>Thank you—we'll be in touch!</h1>
                        <p>If you need to get in touch before we do, call our main office at <a href="#">850.555.5555</a></p>
                    </div>
                </div>
            </div>

            
        <div id="tabs">
            <div class="gmap">
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?=$main->map ?>&amp;output=embed"></iframe>
                </div>                                
            <div class="content-area container-fluid">
                <div class="sidebar">
                    <nav>
                        <ul class="nav nav-tabs" id="myTab">
                            <h3>Locations</h3>
<<<<<<< HEAD
                            <li class="active" ><a href="#main" data-toggle="tab"><?= $META->main->name ?></a></li>
<?php $l=0; ?>
<?php foreach((array)$META->secondary as $location): $l++?>
                            <li><a href="#tabs-<?= $l ?>" data-toggle="tab" data-map="<?=$location->map?>&amp;output=embed"><?=$location->name ?></a></li>                            
=======
                            <li class="active" ><a href="#main" data-toggle="tab" data-map="<?=$main->map?>&amp;output=embed" data-providers="<?=implode(',',$main->providers)?>"><?= $main->name ?></a></li>
<?php $l=0; ?>
<?php foreach((array)$META->secondary as $location): $l++?>
                            <li><a href="#tabs-<?= $l ?>" data-toggle="tab" data-map="<?=$location->map?>&amp;output=embed" data-providers="<?=implode(',',$location->providers)?>"><?=$location->name ?></a></li>                            
>>>>>>> parent of 74e50f7... added provider for addition location on the front page
<?php endforeach; ?>
                        </ul>
                    </nav>
                </div>

                <div class="main-content" >
                
                <div id="main"  class="each_location_content active">
                    <h2><?= $META->main->name ?></h2>

                    <div class="contact">
                        <div class="address">
                            <div>
                                <p><strong>Address</strong></p>
                                <?= $META->main->address ?>
                            </div>

                            <div>
                                <p><strong>Tel:</strong> <?= $META->main->tel ?></p>
                                <p><strong>Fax:</strong> <?= $META->main->fax ?></p>
                            </div>
                        </div>

                        <div class="operation">
                            <p><strong>Hours of Operation</strong></p>
                            <p><?= $META->main->operation ?></p>
                        </div>
                    </div>
<<<<<<< HEAD
                    
                    <h3>Your Providers</h3>
        
                   <ul class="providers">
<?php 

    foreach($providers as $index => $provider):
	
?>

                        <li id="provider_<?=$index?>" class="<?=in_array($index, (array)$main->providers)?'show':'hide'?>">
                          <img src="<?=$provider->img?>" alt="<?=$provider->name?> : <?=$provider->degree?>">
                           <strong><?=$provider->name?></strong>
                        <em><?=$provider->degree?></em>
                       </li>
<?php 
    endforeach;
?>
                   </ul>
                        
                    
                    
                    
                    
                    
                    </div>
                    
<?php $m=0; ?>
<?php foreach((array)$secondary as $local): $m++;?>	
                    <div class="each_location_content"  <?php echo 'id="tabs-'.$m . '"'; ?> >
                        <h2><?= $local->name ?></h2>

                        <div class="contact">
                            <div class="address">
                                <div>
                                    <p><strong>Address</strong></p>
                                    <?= $local->address ?>
                                 </div>

=======
                    </div>
                    
<?php $m=0; ?>
<?php foreach((array)$secondary as $local): $m++;?>	
                    <div class="each_location_content"  <?php echo 'id="tabs-'.$m . '"'; ?> >
                        <h2><?= $local->name ?></h2>

                        <div class="contact">
                            <div class="address">
                                <div>
                                    <p><strong>Address</strong></p>
                                    <?= $local->address ?>
                                 </div>

>>>>>>> parent of 74e50f7... added provider for addition location on the front page
                                <div>
                                    <p><strong>Tel:</strong> <?= $local->tel ?></p>
                                    <p><strong>Fax:</strong> <?= $local->fax ?></p>
                                 </div>
                             </div>

                            <div class="operation">
                                <p><strong>Hours of Operation</strong></p>
                                <p><?= $local->operation ?></p>
                           </div>
                        </div>
<<<<<<< HEAD
=======
                    </div>
<?php endforeach; ?>                    
                           
>>>>>>> parent of 74e50f7... added provider for addition location on the front page
                    <h3>Your Providers</h3>
        
                   <ul class="providers">
<?php 

    foreach($providers as $index => $provider):
<<<<<<< HEAD
	
?>

                        <li id="provider_<?=$index?>" class="<?=in_array($index, (array)$local->providers)?'show':'hide'?>">
                          <img src="<?=$provider->img?>" alt="<?=$provider->name?> : <?=$provider->degree?>">
                           <strong><?=$provider->name?></strong>
                        <em><?=$provider->degree?></em>
=======
?>
                        <li id="provider_<?=$index?>" class="<?=in_array($index, (array)$main->providers)?'':'hide'?>">
                          <img src="<?=$provider->img?>" alt="<?=$provider->name?> : <?=$provider->degree?>">
                            <div><strong><?=$provider->name?></strong></div>
                            <div><em><?=$provider->degree?></em></div>
>>>>>>> parent of 74e50f7... added provider for addition location on the front page
                       </li>
<?php 
    endforeach;
?>
                   </ul>
<<<<<<< HEAD
                        
                        
                        
                        
                        
                        
                    </div>
                    
                                               

                    
                    
<?php endforeach; ?>                    
=======
>>>>>>> parent of 74e50f7... added provider for addition location on the front page
                </div>
            </div>
            
        </div>            
        </div>

<div class="quote-wrap">
            <div class="quote container-fluid">
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

                <span class="quote-author">John Doe, <em>patient for 13 years</em></span>
            </div>
        </div>
<?php get_footer(); ?>
