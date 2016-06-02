(function(angular) {
  "use strict";

  angular.module('diwit', [])
  .controller('ChallengeController', function($scope) {
    var imgPath = '../assets/img/';
    $scope.challenges = [
      {
        title: "Subway bag",
        img: imgPath + "image1.png",
        author: "Jean Bon",
        date: "28/05/2016"
      },
      {
        title: "GIF",
        img: imgPath + "image2.gif",
        author: "Jean Bon",
        date: "29/05/2016"
      },
      {
        title: "Yann's head",
        img: imgPath + "image3.png",
        author: "Jean Bon",
        date: "23/05/2016"
      }
    ];
  });

})(angular);
