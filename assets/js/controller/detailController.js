app.controller('DetailController', function($scope, $http, $location) {

    function getUrlParameter(Param) {
        var PageURL = decodeURIComponent(window.location.search.substring(1)),
            URLVariables = PageURL.split('&'),
            ParameterName,
            i;

        for (i = 0; i < URLVariables.length; i++) {
            ParameterName = URLVariables[i].split('=');

            if (ParameterName[0] === Param) {
                return ParameterName[1] === undefined ? true : ParameterName[1];
            }
        }
    };

    var id = getUrlParameter('id');

    $http.get('/?a=details&id='+id).then(function(response) {
        $scope.details = response.data[0];
        $scope.details.map(function(item) {
        item['img'] = '../../assets/img/image1.png';
      });
    });

    $scope.addLike = function(){
        $http.post('/?a=like&id='+id).then(function(response) {
            $http.get('/?a=getlike&id='+id).then(function(response) {
            });
        });
    }
    $scope.addSuccess = function(){
        $http.post('/?a=success&id='+id).then(function(response) {
            $http.get('/?a=getsuccess&id='+id).then(function(response) {
                $scope.details.success = response.data['success'];
            });
        });
    }
    $scope.addFailed = function(){
        $http.post('/?a=failed&id='+id).then(function(response) {
            $http.get('/?a=getfailed&id='+id).then(function(response) {
                $scope.details.failed = response.data['failed']; 
            });
        });
    }


});
