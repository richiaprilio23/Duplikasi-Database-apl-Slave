
<div class="content-wrapper" ng-app="myApp">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-refresh" aria-hidden="true"></i>Compile Database
        <small>Control panel</small>
      </h1>
    </section> 
    <section class="content" >
    	<div class="cell auto-size padding20 bg-white" id="cell-content">
        	<div class="row" ng-controller="Ctrl">


       <!-- debugging json angularjs $http.get -->
        	<!-- {{jsonMasterBahagia}}  -->
        	<!-- {{jsonSlaveBahagia}} -->

			<!--{{jsonMasterCamplong}} -->
			<!-- {{jsonSlaveCamplong}} -->

			<!-- {{jsonMasterPanglima}} --> 
			<!-- {{jsonSlavePanglima}} -->

			<!-- {{jsonMasterPKPRI}} -->
			<!-- {{jsonSlavePKPRI}} -->

			<!-- {{jsonMasterRahmat}} --> 
			<!-- {{jsonSlaveRahmat}} -->

			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="icon">{{equalsBahagia}}</i></span>
				<div class="info-box-content">
				  <center><span class="info-box-number">Hotel Bahagia</span></center>
				</div>
			  </div>
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box">
				<span class="info-box-icon bg-green"><i class="icon">{{equalsCamplong}}</i></span>
				<div class="info-box-content">
				 <center> <span class="info-box-number">Hotel Camplong</span></center>
				</div>
			  </div>
			</div>
			<!-- fix for small devices only -->
			<div class="clearfix visible-sm-block"></div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box">
				<span class="info-box-icon bg-orange"><i class="icon">{{equalsPanglima}}</i></span>
				<div class="info-box-content">
				  <center><span class="info-box-number">Hotel Panglima</span></center>
				</div>
			  </div>
			</div>

			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box">
				<span class="info-box-icon bg-red"><i class="icon">{{equalsPKPRI}}</i></span>
				<div class="info-box-content">
				  <center><span class="info-box-number">Hotel PKPRI</span></center>
				</div>
			  </div>
			</div>

			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="icon">{{equalsRahmat}}</i></span>		
				<div class="info-box-content">
				  <center><span class="info-box-number">Hotel Rahmat</span></center>
				</div>
			  </div>
			</div>
</div>
		</div>
    </section>
</div>