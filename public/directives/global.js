'use strict';

angular.module('pam.directives')
.directive("scrollBar", function () {
    return {
        restrict: 'A',
        replace: true,
        link: function (scope, element, attrs) {
            $("html").niceScroll({cursorborder:"", bouncescroll: true, disableoutline: true});
        }
    };
})
.directive("odometer", ['$window', function ($window) {
    return {
        restrict: 'E',
        replace: true,
        scope: {
            start: '=',
            end: '=',
            duration: '=',
            scroll: '='
        },
        link: function (scope, element, attrs) {
            if(scope.scroll) {
                angular.element($window).bind("scroll", function() {
                    if ((this.pageYOffset >= element.offset().top - 920) && !element.hasClass('isScrolled')) {
                        element.addClass('isScrolled');
                        scroll();
                    }
                });
            }
            else {  
                scroll();
            }

            function scroll() {
                var start = scope.start,
                    end = scope.end,
                    duration = scope.duration,
                    range = end - start,
                    current = start,
                    increment = end > start? 1 : -1,
                    stepTime = Math.abs(Math.floor(duration / range)),
                    timer = setInterval(function() {
                        current += increment;
                        element[0].innerHTML = current;
                        if (current == end) {
                            clearInterval(timer);
                        }
                    }, stepTime);
            };
        }
    };
}]);