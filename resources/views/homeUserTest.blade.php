<!--
@license
        Copyright (c) 2015 The Polymer Project Authors. All rights reserved.
        This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
        The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
        The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
        Code distributed by Google as part of the polymer project is also
        subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
        -->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta id="token" value="{{csrf_token()}}">
    <title>app-header demo</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: arial;
            background-color: #eee;
        }

        app-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 212px;
            color: #fff;
            background-color: #3f51b5;
        --app-header-background-front-layer: {
             background-image: url(//app-layout-assets.appspot.com/assets/bg1.jpg);
             background-position: left center;
         };
        }

        paper-icon-button {
            --paper-icon-button-ink-color: white;
        }

        app-toolbar.tall {
            height: 148px;
        }

        sample-content {
            padding-top: 212px;
        }

        [main-title] {
            font-weight: lighter;
            margin-left: 108px;
        }

        [condensed-title] {
            font-weight: lighter;
            margin-left: 30px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        [condensed-title] i {
            font-weight: 100;
            font-style: normal;
        }

        @media (max-width: 639px) {
            [main-title] {
                margin-left: 50px;
                font-size: 30px;
            }
            [condensed-title] {
                font-size: 15px;
            }
        }

    </style>

</head>
<body class="fullbleed" unresolved>

<app-header condenses reveals effects="waterfall resize-title blend-background parallax-background">
    <app-toolbar>
        <paper-icon-button icon="menu"></paper-icon-button>
        <h4 condensed-title>What is material? &mdash; Environment</h4>
        <paper-icon-button icon="search"></paper-icon-button>
    </app-toolbar>
    <app-toolbar class="tall">
        <h1 main-title>What is material?</h1>
    </app-toolbar>
</app-header>

<sample-content size="100"></sample-content>

</body>
</html>
