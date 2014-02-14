
<html ng-app="sideMenuTest">
  <head>
    <meta charset="utf-8">
    <title>Side Menus</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/ionic.css">
    <script src="js/ionic.js"></script>
    <script src="js/angular.js"></script>
    <script src="js/angular-animate.js"></script>
    <script src="js/angular-route.js"></script>
    <script src="js/angular-touch.js"></script>
    <script src="js/angular-sanitize.js"></script>
    <script src="js/ionic-angular.js"></script>
    <script type="text/javascript">
      angular.module('LoadingApp', ['ionic'])

      .controller('LoadingCtrl', ['$scope', 'Loading', function($scope, Loading) {

        // Trigger the loading indicator
        $scope.show = function() {

          // Show the loading overlay and text
          $scope.loading = Loading.show({

            // The text to display in the loading indicator
            content: 'Loading',

            // The animation to use
            animation: 'fade-in',

            // Will a dark overlay or backdrop cover the entire view
            showBackdrop: true,

            // The maximum width of the loading indicator
            // Text will be wrapped if longer than maxWidth
            maxWidth: 200,

            // The delay in showing the indicator
            showDelay: 500
          });
        };
        // Hide the loading indicator
        $scope.hide = function(){
          $scope.loading.hide();
        };
      }]);
    </script>

    </script>
  </head>
  <body>

    <div ng-controller="MenuCtrl">
      <side-menus>
        <pane side-menu-content>
          <header class="bar bar-header bar-assertive">
            <div class="title">  <img src="img/logo.png"/></div>
          </header>
          <div class="content has-header">
            <div class="list list-inset">
              <label class="item item-input">
                <input type="text" placeholder="Username">
              </label>
              <label class="item item-input">
                <input type="password" placeholder="Password">
              </label>
                            <label class="item item-input">
                <input type="text" placeholder="Username">
              </label>
              <label class="item item-input">
                <input type="password" placeholder="Password">
              </label>
                            <label class="item item-input">
                <input type="text" placeholder="Username">
              </label>
              <label class="item item-input">
                <input type="password" placeholder="Password">
              </label>
                            <label class="item item-input">
                <input type="text" placeholder="Username">
              </label>
              <label class="item item-input">
                <input type="password" placeholder="Password">
              </label>
            </div>
            <div class="padding">
              <button class="button button-block button-positive" onClick="location.href='landing.html';">Login</button>
            </div>
          </div>
        </pane>
      </side-menus>
    </div>
  </body>
</html>

