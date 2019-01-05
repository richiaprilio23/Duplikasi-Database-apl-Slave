<div class="content-wrapper">
            <section class="content-header">
                <h1>
                  <i class="fa fa-database" aria-hidden="true"></i>Master Database
                  <small>Control panel</small>
                </h1> 
            </section>
        <section class="content">
            <div class="row" >
<!-- START CONTENT -->
    		<div class=" ">
          <!-- <meta http-equiv="refresh" content="10" /> -->
            <div class="tabcontrol2" id="tab-control"> 

                <ul class="tabs">
                  <?php
                    $nama = array('Hotel Bahagia', 'Hotel Camplong', 'Hotel Panglima','Hotel PKPRI','Hotel Rahmat');
                    $arrlength = count($nama); 
                  ?>
                  <?php for($y = 0; $y < $arrlength; $y++) { ?>
                    <li><a href="#<?php echo $y+1 ?>"><?php echo $nama[$y]; ?></a></li>
                    <?}?> 
                </ul>
                <div class="frames">