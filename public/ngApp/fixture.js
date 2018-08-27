

angular.module('fixture', [])
    .controller('fixtureController', function($scope, $http, $rootScope,restClientService){
restClientService.getFixture()
    .then(function(res){
        $scope.fixtures = res.data;           
    },function(err){
        console.log("Error:", err);
    });

//getTournament()
//    .then(function(res){
//        $scope.tournament = res.data; 
//        console.log(res);
//  
//    },function(err){
//        console.log("Error:", err);
//    });
//    $scope.viewPlayer = function(playerName){
//        console.log(playerName);
//    };
});






//angular.module('matchList',[])
//        .directive('matchList',function(){
//            return{
//                templateUrl:"ngApp/partials/fixture.html"
////                template:"<h3>Bikash</h3>"
//            };
//        });
//        
