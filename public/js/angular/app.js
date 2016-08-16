// Define the `phonecatApp` module
var Calendar = angular.module('Calendar', []);

// Define the `PhoneListController` controller on the `phonecatApp` module
Calendar.controller('DaysController', function DaysController($scope,$http) {

  $scope.date = new Date();

  $scope.getWeeks = function(){
    $http.get('/ajax/month/'+($scope.date.getMonth()+1)+"-"+$scope.date.getFullYear() ).success(function(data) {
      $scope.weeks = data.weeks;
      $scope.month_text = data.month_text;
      $scope.year = data.year;
    });
  }

  $scope.getWeeks();

  $scope.nextMonth = function(){
    $scope.date.setMonth($scope.date.getMonth() + 1);
    $scope.getWeeks();
  }  

  $scope.prevMonth = function(){
    $scope.date.setMonth($scope.date.getMonth() - 1);
    $scope.getWeeks();
  }

  /*
  $scope.GetAllData = function () {
      $http.get('/ajax/month/')
      .success(function (data, status, headers, config) {
        console.log(data);
        $scope.Details = data;
      })
  };
  */

  
});