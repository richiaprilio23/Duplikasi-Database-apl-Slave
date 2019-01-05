angular.module("myApplication", []).controller("Controller", function ($scope, $http, $interval) {

          /*Hotel Bahagia*/
    //$scope.ReloadBahagia = function(){ 
        $scope.LoadDelBahagia = function(){
           $http.get(baseURL + "EmptyTblBahagia")
            .success(function (data)
            {
              $scope.loadDeleteBahagia = (data);    
            }); 
          };
        $scope.LoadJsontoDBBahagia = function(){
          $http.get(baseURL + "APItodbBahagia")  
            .success(function (data)
            {
              $scope.loadJsonBahagia = (data);
              //$scope.push($scope.loadJsonBahagia);
            });
        };
       $interval($scope.LoadDelBahagia, 24595);
       $interval($scope.LoadJsontoDBBahagia, 25000);
   // };
   // $interval($scope.ReloadBahagia, 26000);

        /*Hotel Camplong*/
       $scope.LoadDelCamplong = function(){
           $http.get(baseURL + "EmptyTblCamplong")  
            .success(function (data)
            {
              $scope.loadDeleteCamplong = (data);
            });
          };
        $scope.LoadJsontoDBCamplong = function(){
            $http.get(baseURL+"APItodbCamplong")
            .success(function (data)
            {
              $scope.loadJsonCamplong = (data); 
            });
        
        };
       $interval($scope.LoadDelCamplong, 26595);
       $interval($scope.LoadJsontoDBCamplong, 27000);


        /*Hotel Panglima*/
       $scope.LoadDelPanglima = function(){
          $http.get(baseURL+"EmptyTblPanglima")  
            .success(function (data)
            {
              $scope.loadDeletePanglima = (data);
            });
          };
        $scope.LoadJsontoDBPanglima = function(){
          $http.get(baseURL+"APItodbPanglima")
            .success(function (data)
            {
              $scope.loadJsonPanglima = (data); 
            });
        
        };
       $interval($scope.LoadDelPanglima, 20595);
       $interval($scope.LoadJsontoDBPanglima, 21000);



         /*Hotel PKPRI*/
         $scope.LoadDelPKPRI = function(){
            $http.get(baseURL+"EmptyTblPKPRI")
            .success(function (data)
            {
              $scope.loadDeletePKPRI = (data);
            });
          };
        $scope.LoadJsontoDBPKPRI = function(){
            $http.get(baseURL+"APItodbPKPRI")
            .success(function (data)
            {
              $scope.loadJsonPKPRI = (data); 
            });
        
        };
       $interval($scope.LoadDelPKPRI, 28595);
       $interval($scope.LoadJsontoDBPKPRI, 29000);
       

         /*Hotel Rahmat*/
       $scope.LoadDelRahmat = function(){
            $http.get(baseURL+"EmptyTblRahmat")
            .success(function (data)
            {
              $scope.loadDeleteRahmat = (data);
            });
          };
        $scope.LoadJsontoDBRahmat = function(){
            $http.get(baseURL+"APItodbRahmat")
            .success(function (data)
            {
              $scope.loadJsonRahmat = (data); 
            });
        
        };
       $interval($scope.LoadDelRahmat, 22595);
       $interval($scope.LoadJsontoDBRahmat, 23000);

}); 