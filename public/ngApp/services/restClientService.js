angular.module('restClientService', ['ui.router'])
        .factory("restClientService", function ($q, $http, $httpParamSerializer) {

            return {

                getTeams: getTeams,
                getTournament: getTournament,
                getFixture: getFixture,
            };

            function getTeams() {
                var defer = $q.defer();
                $http({
                    method: 'GET',
                    cache: true,
                    url: '/api/teams'
                }).then(function successCallback(response) {
                    defer.resolve(response.data);
                }, function errorCallback(response) {
                    defer.reject(response);
                });

                return defer.promise;
            }

            function getTournament()
            {
                var defer = $q.defer();
                $http({
                    method: 'GET',
                    cache: true,
                    url: '/api/tournament'
                }).then(function successCallback(response) {
                    defer.resolve(response.data);
                }, function errorCallback(response) {
                    defer.reject(response);
                });

                return defer.promise;
            }
            
            function getFixture()
            {
                 var defer = $q.defer();
                $http({
                    method: 'GET',
                    cache: true,
                    url: 'api/fixture/create'
                }).then(function successCallback(response) {
                    defer.resolve(response.data);
                }, function errorCallback(response) {
                    defer.reject(response);
                });

                return defer.promise;
                
            }


        });
