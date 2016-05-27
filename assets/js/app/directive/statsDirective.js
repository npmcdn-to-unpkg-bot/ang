'use strict';

var statsDirective = angular.module('statsDirective', []);


statsDirective.directive('iCheck', function ($timeout) {
	return {
        restrict: 'E',
		require: 'ngModel',
		link: function ($scope, element, $attrs, ngModel) {
			return $timeout(function () {
				var value = $attrs.value;
                var $element = $(element);

                $element.iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                    increaseArea: '20%'
                });

				$scope.$watch($attrs.ngModel, function (newValue) {
                    $element.iCheck('update');
                });

                $element.on('ifChanged', function (event) {
                    if ($element.attr('type') === 'radio' && $attrs.ngModel) {
                        $scope.$apply(function () {
                            ngModel.$setViewValue(value);
                        });
                    }
                });
			});
		},
	    template: '<input type="checkbox">'
	};
});