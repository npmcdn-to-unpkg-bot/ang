'use strict';

var statsService = angular.module('statsService', []);

var BaseUrl = angular.element(document.getElementsByName('BaseUrl')).val();

statsService.run(['$http', function ($http) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
}]);

statsService.service('statsIndexService', ['$http', '$q', function ($http, $q) {
	this.GetCountForRemuneration = function (IdoptCampaign) {
		var data = 'id_opt_campaign=' + IdoptCampaign;
		var obj = $http(
			{
				method	: 	'POST',
				url 	: 	BaseUrl + 'GetRemunerationCount.html', 
				data	: 	data
			}
		);
		return obj;
	}

}]);