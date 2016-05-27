'use strict';

var statsConfig = angular.module('statsConfig', []);

statsConfig.config(function ($stateProvider, $urlRouterProvider) {

	$urlRouterProvider.otherwise('/');

	$stateProvider.

	state(
		'Index',
		{
			url 		: 	'/',
			templateUrl	: 	'assets/js/app/view/statsIndex.html',
			controller 		: 'statsIndexController'
		}
	).
	
	state(
		'Index.details', 
		{
			views	: 	{
				'statsLeft' 	: 	{
					resolve			: {
						loadPlugin: ['$ocLazyLoad', function ($ocLazyLoad) {
							return $ocLazyLoad.load([
								{
									files: [
										'assets/plugins/theme/css/plugins/iCheck/custom.css',
										'assets/plugins/theme/js/plugins/iCheck/icheck.min.js'
									]
								}
							]);
						}]
					},
					templateUrl		: 'assets/js/app/view/statsIndexLeft.html',
					controller 		: 'statsIndexLeftController'
				},
				'statsCenter'	: 	{
					templateUrl		: 'assets/js/app/view/statsIndexCenter.html',
					controller 		: 'statsIndexCenterController'
				},
				'statsRight'	: 	{
					templateUrl		: 'assets/js/app/view/statsIndexRight.html',
					controller 		: 'statsIndexRightController'
				}
			}
		}
	);
});