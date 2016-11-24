<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<script src="assets/js/cards.js"></script>


<div class="container">

    <style scoped>
        @import "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css";
        @import "assets/css/cards.css";
    </style>

    <div ng-controller="AppCtrl" ng-cloak ng-app="cardDemo1">
        <md-content class="md-padding" layout-xs="column" layout="row">
            <div flex-xs flex-gt-xs="50" layout="column">
                <md-card md-theme="{{ showDarkTheme ? 'dark-grey' : 'default' }}" md-theme-watch>
                    <md-card-title>
                        <md-card-title-text>
                            <span class="md-headline">Card with image</span>
                            <span class="md-subhead">Large</span>
                        </md-card-title-text>
                        <md-card-title-media>
                            <div class="md-media-lg card-media"></div>
                        </md-card-title-media>
                    </md-card-title>
                    <md-card-actions layout="row" layout-align="end center">
                        <md-button>Action 1</md-button>
                        <md-button>Action 2</md-button>
                    </md-card-actions>
                </md-card>
                <md-card md-theme="{{ showDarkTheme ? 'dark-orange' : 'default' }}" md-theme-watch>
                    <md-card-title>
                        <md-card-title-text>
                            <span class="md-headline">Card with image</span>
                            <span class="md-subhead">Extra Large</span>
                        </md-card-title-text>
                    </md-card-title>
                    <md-card-content layout="row" layout-align="space-between">
                        <div class="md-media-md card-media"></div>

                        <md-card-actions layout="column">
                            <md-button class="md-icon-button" aria-label="Favorite">
                                <md-icon md-svg-icon="img/icons/favorite.svg"></md-icon>
                            </md-button>
                            <md-button class="md-icon-button" aria-label="Settings">
                                <md-icon md-svg-icon="img/icons/menu.svg"></md-icon>
                            </md-button>
                            <md-button class="md-icon-button" aria-label="Share">
                                <md-icon md-svg-icon="img/icons/share-arrow.svg"></md-icon>
                            </md-button>
                        </md-card-actions>
                    </md-card-content>
                </md-card>
            </div>
            <div flex-xs flex-gt-xs="50" layout="column">
                <md-card md-theme="{{ showDarkTheme ? 'dark-purple' : 'default' }}" md-theme-watch>
                    <md-card-title>
                        <md-card-title-text>
                            <span class="md-headline">Card with image</span>
                            <span class="md-subhead">Small</span>
                        </md-card-title-text>
                        <md-card-title-media>
                            <div class="md-media-sm card-media"></div>
                        </md-card-title-media>
                    </md-card-title>
                    <md-card-actions layout="row" layout-align="end center">
                        <md-button>Action 1</md-button>
                        <md-button>Action 2</md-button>
                    </md-card-actions>
                </md-card>
                <md-card md-theme="{{ showDarkTheme ? 'dark-blue' : 'default' }}" md-theme-watch>
                    <md-card-title>
                        <md-card-title-text>
                            <span class="md-headline">Card with image</span>
                            <span class="md-subhead">Medium</span>
                        </md-card-title-text>
                        <md-card-title-media>
                            <div class="md-media-md card-media"></div>
                        </md-card-title-media>
                    </md-card-title>
                    <md-card-actions layout="row" layout-align="end center">
                        <md-button>Action 1</md-button>
                        <md-button>Action 2</md-button>
                    </md-card-actions>
                </md-card>
                <md-card md-theme="{{ showDarkTheme ? 'dark-grey' : 'default' }}" md-theme-watch>
                    <md-card-title>
                        <md-card-title-text>
                            <span class="md-headline">Card with image</span>
                            <span class="md-subhead">ultimo</span>
                        </md-card-title-text>
                        <md-card-title-media>
                            <div class="md-media-lg card-media"></div>
                        </md-card-title-media>
                    </md-card-title>
                    <md-card-actions layout="row" layout-align="end center">
                        <md-button>Action 1</md-button>
                        <md-button>Action 2</md-button>
                    </md-card-actions>
                </md-card>

            </div>
        </md-content>
    </div>




    </<div>