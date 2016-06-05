app.controller('ChallengeController', function($scope, $http) {

  $http.get('/?a=details').then(function(response) {
    $scope.challenges = response.data;
  });

  console.log(search.category);
});
