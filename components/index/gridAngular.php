<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script src="assets/js/gridAngular.js"></script>

<div class="container">

    <style scoped>
        @import "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css";
        @import "assets/css/gridAngular.css";
    </style>

  <div ng-controller="gridListDemoCtrl as vm" flex="" ng-cloak="" class="gridListdemoDynamicTiles" ng-app="MyApp8">
    <md-grid-list md-cols="1" md-cols-sm="2" md-cols-md="3" md-cols-gt-md="6" md-row-height-gt-md="1:1" md-row-height="4:3" md-gutter="8px" md-gutter-gt-sm="4px">
        <md-grid-tile ng-repeat="tile in vm.tiles" md-rowspan="{{tile.span.row}}" md-colspan="{{tile.span.col}}" md-colspan-sm="1" md-colspan-xs="1" ng-class="tile.background">
            <md-icon md-svg-icon="{{tile.icon}}"></md-icon>
            <md-grid-tile-footer><h3>{{tile.title}}</h3></md-grid-tile-footer>
        </md-grid-tile>
    </md-grid-list>
   </div>

</div>
