'use strict';

var statsController = angular.module('statsController', []);

var IdoptCampaign = angular.element(document.getElementsByName('IdoptCampaign')).val();

statsController.controller('statsIndexController', ['$scope', '$state', function ($scope, $state) {
	$scope.title = 'From Stats Index Controller';
	$state.go('Index.details');
}]);

statsController.controller('statsIndexLeftController', ['statsIndexService', '$scope', function (statsIndexService, $scope) {
	$scope.title = 'From Stats Index Left Controller';
	statsIndexService.GetCountForRemuneration(IdoptCampaign).then(function (data) {
		$scope.remuneration = data.data;
	});
}]);

statsController.controller('statsIndexCenterController', ['statsIndexService', '$scope', '$state', function (statsIndexService, $scope, $state) {
	$scope.title = 'From Stats Index Center Controller';
}]);

statsController.controller('statsIndexRightController', ['statsIndexService', '$scope', '$state', function (statsIndexService, $scope, $state) {
	$scope.title = 'From Stats Index Right Controller';
}]);