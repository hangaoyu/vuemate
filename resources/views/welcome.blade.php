<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('/css/vue-material.css')}}"  type="text/css" />
        <!-- Styles -->
        <style>


            .main-content {
                padding: 16px;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


    <div id="app">
        <div class="phone-viewport complete-example">
            <md-whiteframe md-tag="md-toolbar" md-elevation="2" md-theme="light-blue" class="md-large">
                <div class="md-toolbar-container">
                    <md-button class="md-icon-button" @click="$refs.sidenav.toggle()">
                    <md-icon>menu</md-icon>
                    </md-button>

                    <span style="flex: 1"></span>

                    <md-button class="md-icon-button">
                        <md-icon>search</md-icon>
                    </md-button>

                    <md-button class="md-icon-button">
                        <md-icon>view_module</md-icon>
                    </md-button>
                </div>

                <div class="md-toolbar-container">
                    <h2 class="md-title">My Files</h2>

                    <md-button class="md-fab md-mini">
                        <md-icon>add</md-icon>
                    </md-button>
                </div>
            </md-whiteframe>

            <md-list class="md-double-line">
                <md-subheader class="md-inset">Folders</md-subheader>

                <md-list-item>
                    <md-avatar class="md-avatar-icon">
                        <md-icon>folder</md-icon>
                    </md-avatar>

                    <div class="md-list-text-container">
                        <span>Photos</span>
                        <p>Jan 9, 2014</p>
                    </div>

                    <md-button class="md-icon-button md-list-action">
                        <md-icon>info</md-icon>
                    </md-button>
                </md-list-item>

                <md-list-item>
                    <md-avatar class="md-avatar-icon">
                        <md-icon>folder</md-icon>
                    </md-avatar>

                    <div class="md-list-text-container">
                        <span>Recipes</span>
                        <p>Jan 17, 2014</p>
                    </div>

                    <md-button class="md-icon-button md-list-action">
                        <md-icon>info</md-icon>
                    </md-button>
                </md-list-item>

                <md-list-item>
                    <md-avatar class="md-avatar-icon">
                        <md-icon>folder</md-icon>
                    </md-avatar>

                    <div class="md-list-text-container">
                        <span>Work</span>
                        <p>Jan 28, 2014</p>
                    </div>

                    <md-button class="md-icon-button md-list-action">
                        <md-icon>info</md-icon>
                    </md-button>

                    <md-divider class="md-inset"></md-divider>
                </md-list-item>

                <md-subheader class="md-inset">Files</md-subheader>

                <md-list-item>
                    <md-avatar md-theme="blue" class="md-avatar-icon md-primary">
                        <md-icon>insert_drive_file</md-icon>
                    </md-avatar>

                    <div class="md-list-text-container">
                        <span>Vacation Itinerary</span>
                        <p>Jan 20, 2014</p>
                    </div>

                    <md-button class="md-icon-button md-list-action">
                        <md-icon>info</md-icon>
                    </md-button>
                </md-list-item>

                <md-list-item>
                    <md-avatar md-theme="orange" class="md-avatar-icon md-primary">
                        <md-icon>collections</md-icon>
                    </md-avatar>

                    <div class="md-list-text-container">
                        <span>Kitchen Remodel</span>
                        <p>Jan 10, 2014</p>
                    </div>

                    <md-button class="md-icon-button md-list-action">
                        <md-icon>info</md-icon>
                    </md-button>
                </md-list-item>

                <md-list-item>
                    <md-avatar md-theme="green" class="md-avatar-icon md-primary">
                        <md-icon>view_list</md-icon>
                    </md-avatar>

                    <div class="md-list-text-container">
                        <span>Grocery Shop</span>
                        <p>Jan 10, 2014</p>
                    </div>

                    <md-button class="md-icon-button md-list-action">
                        <md-icon>info</md-icon>
                    </md-button>
                </md-list-item>

                <md-list-item>
                    <md-avatar md-theme="orange" class="md-avatar-icon md-primary">
                        <md-icon>collections</md-icon>
                    </md-avatar>

                    <div class="md-list-text-container">
                        <span>Weekend Pictures</span>
                        <p>Jan 10, 2014</p>
                    </div>

                    <md-button class="md-icon-button md-list-action">
                        <md-icon>info</md-icon>
                    </md-button>
                </md-list-item>
            </md-list>

            <md-sidenav md-theme="blue" class="md-left" ref="sidenav">
                <md-toolbar class="md-account-header">
                    <md-list class="md-transparent">
                        <md-list-item class="md-avatar-list">
                            <md-avatar class="md-large">
                                <img src="https://placeimg.com/64/64/people/8" alt="People">
                            </md-avatar>

                            <span style="flex: 1"></span>

                            <md-avatar>
                                <img src="https://placeimg.com/40/40/people/3" alt="People">
                            </md-avatar>

                            <md-avatar>
                                <img src="https://placeimg.com/40/40/people/4" alt="People">
                            </md-avatar>
                        </md-list-item>

                        <md-list-item>
                            <div class="md-list-text-container">
                                <span>John Doe</span>
                                <span>johndoe@email.com</span>
                            </div>

                            <md-button class="md-icon-button md-list-action">
                                <md-icon>arrow_drop_down</md-icon>
                            </md-button>
                        </md-list-item>
                    </md-list>
                </md-toolbar>

                <md-list>
                    <md-list-item @click="$refs.sidenav.toggle()" class="md-primary">
                    <md-icon>insert_drive_file</md-icon> <span>My files</span>
                    </md-list-item>

                    <md-list-item @click="$refs.sidenav.toggle()">
                    <md-icon>people</md-icon> <span>Shared with me</span>
                    </md-list-item>

                    <md-list-item @click="$refs.sidenav.toggle()">
                    <md-icon>access_time</md-icon> <span>Recent</span>
                    </md-list-item>

                    <md-list-item @click="$refs.sidenav.toggle()">
                    <md-icon>start</md-icon> <span>Starred</span>
                    </md-list-item>

                    <md-list-item @click="$refs.sidenav.toggle()">
                    <md-icon>delete</md-icon> <span>Trash</span>
                    </md-list-item>
                </md-list>
            </md-sidenav>
        </div>
    </div>


    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
