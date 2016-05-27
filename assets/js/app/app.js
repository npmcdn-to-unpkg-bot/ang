'use strict';

var stats = angular.module('stats', [
	'ui.router',
	'statsConfig',
	'statsService',
	'statsDirective',
	'statsController',
	'oc.lazyLoad'
]);

stats.run(function($rootScope, $templateCache) {
   $rootScope.$on('$viewContentLoaded', function() {
      $templateCache.removeAll();
   });
});

