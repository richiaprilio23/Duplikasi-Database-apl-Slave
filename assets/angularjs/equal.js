
 // https://stackoverflow.com/questions/33273054/angularjs-auto-reload-when-backend-change
  // http://www.angularjshub.com/examples/servercalls/httpservice/
  // https://www.c-sharpcorner.com/UploadFile/cd7c2e/compare-two-values-using-angular-equals/

angular.module("myApp", []).controller("Ctrl", function ($scope, $http, jsonFilter, $interval) {
      var config = {}; 
 
          /*Hotel Bahagia*/  
        $scope.ReloadBahagia = function(){ 
          $http.get(baseURL +"/CompAPIBahagia", config)
            .success(function (data)
            { 
              data = jsonFilter(data);
              $scope.jsonMasterBahagia = (data);
              $scope.equalsBahagia  = angular.equals($scope.jsonMasterBahagia, $scope.jsonSlaveBahagia);
            });

           $http.get(baseURL+"/CompdbBahagia", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonSlaveBahagia = (data);
            });
        };
       $interval($scope.ReloadBahagia, 4200);

        /*Hotel Camplong*/
        $scope.ReloadCamplong = function(){
  
          $http.get(baseURL+"/CompAPICamplong", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonMasterCamplong = (data);
              $scope.equalsCamplong  = angular.equals($scope.jsonMasterCamplong, $scope.jsonSlaveCamplong);
            });
   
         $http.get(baseURL+"/CompdbCamplong", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonSlaveCamplong = (data);
            });
        };
       $interval($scope.ReloadCamplong, 4400);

       /*Hotel Panglima*/
        $scope.ReloadPanglima = function(){
    
          $http.get(baseURL+"/CompAPIPanglima", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonMasterPanglima = (data);
              $scope.equalsPanglima  = angular.equals($scope.jsonMasterPanglima, $scope.jsonSlavePanglima);
            });
   
          $http.get(baseURL+"/CompdbPanglima", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonSlavePanglima = (data);
            });
        };
       $interval($scope.ReloadPanglima, 4600);
        
        /*Hotel PKPRI*/
        $scope.ReloadPKPRI = function(){
          $http.get(baseURL+"/CompAPIPKPRI", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonMasterPKPRI = (data);
              $scope.equalsPKPRI  = angular.equals($scope.jsonMasterPKPRI, $scope.jsonSlavePKPRI);
            });
   
          $http.get(baseURL+"/CompdbPKPRI", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonSlavePKPRI = (data);
            });
        };
       $interval($scope.ReloadPKPRI, 4800);

       /*Hotel Rahmat*/
        $scope.ReloadRahmat = function(){
  
          $http.get(baseURL+"/CompAPIRahmat", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonMasterRahmat = (data);
              $scope.equalsRahmat  = angular.equals($scope.jsonMasterRahmat, $scope.jsonSlaveRahmat);
            });
 
          $http.get(baseURL+"/CompdbRahmat", config)
            .success(function (data)
            {
              data = jsonFilter(data);
              $scope.jsonSlaveRahmat = (data);
            });
        };
       $interval($scope.ReloadRahmat, 4000);
  });   