 <div class="content-wrapper" >

  <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1> 
    </section>
 
    <section class="content" ng-app="myApplication"> 
      <div class="cell auto-size padding20 bg-white" id="cell-content" ng-controller="Controller">
        <div class="row">
         <meta http-equiv="refresh" content="150" /> 

            <!-- <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-aqua ">
                  <div style="display: none;" id="loadDeleteBahagia">loading empty tables..</div>
                  <div class="inner" >
                    <center>
                    <h3 class="countBahagia" idBahagia="20" id="loadJsonBahagia"> </h3>
                    <p> Hotel Bahagia </p></center> 
                  </div>
                  <div class="icon">
                       <i class="fa fa-database"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>DetailPages/DetailTableSlave/chooseBahagia/" target="_blank" class="small-box-footer" >More Table <i class="fa fa-arrow-circle-right"></i></a>
              </div> 
            </div> -->

          <div class="clock row">
            <div class="col-lg-3 col-xs-6"> 
              <div class="small-box bg-aqua" >
                  <div style="display: none;">{{loadDeleteBahagia}}</div>
                  <div class="inner" id="ideal_form">
                    <center>
                    <h3 id="countBahagia"></h3>
                    <h2 style="display: none;">{{loadJsonBahagia}}</h2>
                    <p><b> Hotel Bahagia</b></p></center> 
                  </div>
                  <div class="icon">
                       <i class="fa fa-database"></i>
                  </div>
                  <a href="<?php echo base_url(); ?>DetailPages/DetailTableSlave/chooseBahagia/" target="_blank" class="small-box-footer" >More Table <i class="fa fa-arrow-circle-right"></i></a>
              </div> 
            </div>