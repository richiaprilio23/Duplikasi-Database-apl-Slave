angular.module("myApplication", []).controller("Controller", function ($scope, $http, $interval) {
 
          /*Hotel Bahagia*/
        $scope.LoadDelBahagia = function(){
           $http.get(baseURL + "EmptyTblBahagia")
            .success(function (data)
            {
              $scope.loadDeleteBahagia = (data);
               console.log(data);     
            }); 
          };
        $scope.LoadJsontoDBBahagia = function(){
          $http.get(baseURL + "APItodbBahagia")  
            .success(function (data)
            {
              $scope.loadJsonBahagia = (data);
              console.log(data); 
            });
        };
       
       $interval($scope.LoadDelBahagia, 22795);
       $interval($scope.LoadJsontoDBBahagia, 23000);


        /*Hotel Camplong*/
       $scope.LoadDelCamplong = function(){
           $http.get(baseURL + "EmptyTblCamplong")  
            .success(function (data)
            {
              $scope.loadDeleteCamplong = (data);
               console.log(data); 
            });
          };
        $scope.LoadJsontoDBCamplong = function(){
            $http.get(baseURL+"APItodbCamplong")
            .success(function (data)
            {
              $scope.loadJsonCamplong = (data);
              console.log(data);  
            });
        
        };
       $interval($scope.LoadDelCamplong, 25795);
       $interval($scope.LoadJsontoDBCamplong, 26000);


        /*Hotel Panglima*/
       $scope.LoadDelPanglima = function(){
          $http.get(baseURL+"EmptyTblPanglima")  
            .success(function (data)
            {
              $scope.loadDeletePanglima = (data);
               console.log(data); 
            });
          };
        $scope.LoadJsontoDBPanglima = function(){
          $http.get(baseURL+"APItodbPanglima")
            .success(function (data)
            {
              $scope.loadJsonPanglima = (data);
              console.log(data);  
            });
        
        };
       $interval($scope.LoadDelPanglima, 19795);
       $interval($scope.LoadJsontoDBPanglima, 20000);



         /*Hotel PKPRI*/
         $scope.LoadDelPKPRI = function(){
            $http.get(baseURL+"EmptyTblPKPRI")
            .success(function (data)
            {
              $scope.loadDeletePKPRI = (data);
               console.log(data); 
            });
          };
        $scope.LoadJsontoDBPKPRI = function(){
            $http.get(baseURL+"APItodbPKPRI")
            .success(function (data)
            {
              $scope.loadJsonPKPRI = (data);
              console.log(data);  
            });
        
        };
       $interval($scope.LoadDelPKPRI, 28795);
       $interval($scope.LoadJsontoDBPKPRI, 29000);
       

         /*Hotel Rahmat*/
       $scope.LoadDelRahmat = function(){
            $http.get(baseURL+"EmptyTblRahmat")
            .success(function (data)
            {
              $scope.loadDeleteRahmat = (data);
              console.log(data); 
            });
          };
        $scope.LoadJsontoDBRahmat = function(){
            $http.get(baseURL+"APItodbRahmat")
            .success(function (data)
            {
              $scope.loadJsonRahmat = (data);
              console.log(data);  
            });
        
        };
       $interval($scope.LoadDelRahmat, 16795);
       $interval($scope.LoadJsontoDBRahmat, 17000);

}); 