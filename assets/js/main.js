(function(angular) {
  "use strict";

  angular.module('diwit', [])
  .controller('ChallengeController', function($scope, $http) {

    $http.get('/?a=details').then(function(response) {
      $scope.challenges = response.data;
      $scope.challenges.map(function(item) {
        item['img'] = '../assets/img/image1.png';
      });
    });

  });

})(angular);
