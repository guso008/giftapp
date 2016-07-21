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
    <meta id="token" value="{{csrf_token()}}">
    {{--<title>demo1</title>

    <script src="../../webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components/font-roboto/roboto.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: 'Roboto', 'Noto', sans-serif;
            background-color: #eee;
        }

        #startDrawer {
        --app-drawer-content-container: {
             box-shadow: 1px 0 2px 1px rgba(0,0,0,0.18);
         }
        }

        #endDrawer {
        --app-drawer-content-container: {
             box-shadow: -1px 0 2px 1px rgba(0,0,0,0.18);
         }
        }

        app-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #4285f4;
            color: #fff;
        }

        app-header paper-icon-button {
            --paper-icon-button-ink-color: white;
        }

        sample-content {
            padding-top: 192px;
        }

    </style>

</head>
<body>

<template is="dom-bind" id="app">

    <app-header condenses reveals effects="waterfall">
        <app-toolbar>
            <paper-icon-button icon="menu" on-tap="toggleLeft"></paper-icon-button>
            <div main-title></div>
            <paper-icon-button icon="shopping-cart" on-tap="toggleRight"></paper-icon-button>
        </app-toolbar>
        <app-toolbar></app-toolbar>
        <app-toolbar>
            <div spacer main-title>My App</div>
        </app-toolbar>
    </app-header>

    <app-drawer id="startDrawer" align="start"></app-drawer>

    <app-drawer id="endDrawer" align="end"></app-drawer>

    <sample-content size="100"></sample-content>

</template>

<script>

    (function(scope) {
        scope.toggleLeft = function() {
            this.$.startDrawer.toggle();
        };

        scope.toggleRight = function() {
            this.$.endDrawer.toggle();
        };
    })(document.querySelector('#app'));

</script>--}}

    {{--<title>demo2</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components//font-roboto/roboto.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: 'Roboto', 'Noto', sans-serif;
            background-color: #eee;
        }

        app-header {
            background-color: #4285f4;
            color: #fff;
        }

        app-header paper-icon-button {
            --paper-icon-button-ink-color: white;
        }

    </style>

</head>
<body unresolved>

<app-drawer-layout>

    <app-drawer>
        <app-toolbar>App name</app-toolbar>
    </app-drawer>

    <app-header-layout>

        <app-header fixed effects="waterfall">
            <app-toolbar>
                <paper-icon-button icon="menu" drawer-toggle></paper-icon-button>
                <div spacer main-title>My Drive</div>
            </app-toolbar>
        </app-header>

        <sample-content size="100"></sample-content>

    </app-header-layout>

</app-drawer-layout>--}}
    {{--<title>demo3</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components/font-roboto/roboto.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: 'Roboto', 'Noto', sans-serif;
            background-color: #eee;
        }

        app-header {
            background-color: #4285f4;
            color: #fff;
        }

        app-header paper-icon-button {
            --paper-icon-button-ink-color: white;
        }

    </style>

</head>
<body unresolved>

<app-drawer-layout fullbleed>

    <app-drawer>
        <app-toolbar>App name</app-toolbar>
    </app-drawer>

    <app-header-layout has-scrolling-region>

        <app-header condenses reveals effects="waterfall">
            <app-toolbar>
                <paper-icon-button icon="menu" drawer-toggle></paper-icon-button>
            </app-toolbar>
            <app-toolbar></app-toolbar>
            <app-toolbar>
                <div spacer main-title>My Drive</div>
            </app-toolbar>
        </app-header>

        <sample-content size="100"></sample-content>

    </app-header-layout>

</app-drawer-layout>--}}

   <title>demo4</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components/iron-flex-layout/iron-flex-layout.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/iron-list/iron-list.html">
    <link rel="import" href="bower_components/iron-ajax/iron-ajax.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: 'Roboto', 'Noto', sans-serif;
            background-color: #eee;
        }

        app-header {
            background-color: #0b8043;
            color: white;

        --app-header-background-front-layer: {
             background-color: #4285f4;
         };
        }

        app-header paper-icon-button {
            --paper-icon-button-ink-color: white;
        }

        iron-list {
            background-color: var(--paper-grey-200, #eee);
            padding-bottom: 16px;
        @apply(--layout-flex);
        }

        .item {
        @apply(--layout-horizontal);

            margin: 16px 16px 0 16px;
            padding: 20px;

            border-radius: 8px;
            background-color: white;
            border: 1px solid #ddd;
        }

        .avatar {
            height: 40px;
            width: 40px;
            border-radius: 20px;
            box-sizing: border-box;
            background-color: #DDD;
        }

        .pad {
            padding: 0 16px;
        @apply(--layout-flex);
        @apply(--layout-vertical);
        }

        .primary {
            font-size: 16px;
            font-weight: bold;
        }

        .secondary {
            font-size: 14px;
        }

        .dim {
            color: gray;
        }

        .mainHeader [main-title] {
            font-weight: 400;
            margin: 0 0 0 50px;
        }

        .mainHeader [condensed-title] {
            font-weight: 400;
            margin-left: 30px;
        }

        .mainHeader [condensed-title] i {
            font-style: normal;
            font-weight: 100;
        }

        app-toolbar.tall {
            height: 148px;
        }
    </style>

</head>
<body unresolved>
<template is="dom-bind" id="app">
    {{--<app-drawer-layout>--}}
        {{--<app-drawer swipe-open>
            <app-toolbar class="navToolbar">App name</app-toolbar>
        </app-drawer>--}}

        <app-header-layout>
            <app-header class="mainHeader" condenses fixed effects="resize-title blend-background waterfall">
                <app-toolbar>
                    {{--<paper-icon-button icon="menu" drawer-toggle on-tap="toggleLeft"></paper-icon-button>--}}
                    <paper-icon-button icon="menu" on-tap="toggleLeft"></paper-icon-button>
                    <h4 condensed-title>Contacts <i>&mdash; Summary</i></h4>
                    <paper-icon-button icon="search"></paper-icon-button>
                    <paper-icon-button icon="shopping-cart" on-tap="toggleRight"></paper-icon-button>
                </app-toolbar>
                <app-toolbar class="tall">
                    <h1 main-title>Contacts</h1>
                </app-toolbar>
            </app-header>
            <iron-list items="[[data]]" as="item" scroll-target="document">
                <template>
                    <div>
                        <div class="item" tabindex$="[[tabIndex]]">
                            <img class="avatar" src="[[item.image]]">
                            <div class="pad">
                                <div class="primary">[[item.name]]</div>
                                <div class="secondary">[[item.shortText]]</div>
                                <div class="secondary dim">[[item.longText]]</div>
                            </div>
                            <iron-icon icon$="[[iconForItem(item)]]"></iron-icon>
                        </div>
                    </div>
                </template>
            </iron-list>

            <iron-ajax url="data/contacts.json" last-response="@{{data}}" auto></iron-ajax>

        </app-header-layout>
        <app-drawer id="startDrawer" align="start"></app-drawer>
        <app-drawer id="endDrawer" align="end"></app-drawer>
    {{--</app-drawer-layout>--}}

</template>

<script>
    (function(scope) {

        scope.iconForItem = function(item) {
            return item ? (item.integer < 50 ? 'star-border' : 'star') : '';
        };

        scope.toggleLeft = function() {
            this.$.startDrawer.toggle();
        };

        scope.toggleRight = function() {
            this.$.endDrawer.toggle();
        };
    })(document.querySelector('#app'));
</script>

   {{-- <title>demo5</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components/font-roboto/roboto.html">
    <link rel="import" href="bower_components/paper-styles/paper-styles.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/paper-item/paper-icon-item.html">
    <link rel="import" href="bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: 'Roboto', 'Noto', sans-serif;
            background-color: #eee;
        }

        .blueHeader {
            background-color: #4285f4;
            color: #fff;
        }

        .blueHeader paper-icon-button {
            --paper-icon-button-ink-color: white;
        }

        .whiteHeader {
            font-weight: bold;
            background-color: white;
        }

        .iconItem {
            color: #666;
        }

    </style>

</head>
<body unresolved>

<template is="dom-bind">
    <app-drawer-layout>

        <app-drawer swipe-open>
            <app-header-layout has-scrolling-region>

                <app-header class="whiteHeader" waterfall fixed>
                    <app-toolbar>
                        <div main-title>Inbox</div>
                    </app-toolbar>
                </app-header>

                <template is="dom-repeat" id="menu" items="[[items]]">
                    <paper-icon-item class="iconItem">
                        <iron-icon class="grayIcon" icon="[[_randomIcon()]]" item-icon></iron-icon> <span>[[item]]</span>
                    </paper-icon-item>
                </template>

            </app-header-layout>
        </app-drawer>

        <app-header-layout>

            <app-header class="blueHeader" condenses reveals effects="waterfall">
                <app-toolbar>
                    <paper-icon-button icon="menu" drawer-toggle></paper-icon-button>
                    <div main-title></div>
                    <paper-icon-button icon="search"></paper-icon-button>
                    <paper-icon-button icon="more-vert"></paper-icon-button>
                </app-toolbar>
                <app-toolbar></app-toolbar>
                <app-toolbar>
                    <div spacer main-title>My Drive</div>
                </app-toolbar>
            </app-header>

            <sample-content size="100"></sample-content>

        </app-header-layout>

    </app-drawer-layout>
</template>

<script>
    (function(scope) {
        var items = [];
        var icons = ['inbox', 'favorite', 'polymer', 'question-answer', 'send', 'archive', 'backup', 'dashboard'];

        while (items.length < 100) {
            items.push('Option Name');
        }

        scope._randomIcon = function() {
            return icons[parseInt(icons.length * Math.random())];
        };

        scope.items = items;

    })(document.querySelector('template[is=dom-bind]'));
</script>--}}

    {{--<title>demo6</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components/font-roboto/roboto.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-item/paper-icon-item.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: 'Roboto', 'Noto', sans-serif;
            background-color: #eee;
        }

        app-header {
            background-color: #4285f4;
            color: #fff;
        }

        app-header paper-icon-button {
            --paper-icon-button-ink-color: #fff;
        }

        app-drawer-layout {
            --app-drawer-layout-content-transition: margin 0.2s;
        }

        app-drawer {
        --app-drawer-content-container: {
             background-color: #eee;
         }
        }

        .drawer-content {
            margin-top: 80px;
            height: calc(100% - 80px);
            overflow: auto;
        }

    </style>

</head>
<body unresolved>

<app-header-layout>

    <app-header fixed effects="waterfall">
        <app-toolbar>
            <paper-icon-button id="toggle" icon="menu"></paper-icon-button>
            <div main-title>Inbox</div>
        </app-toolbar>
    </app-header>

    <app-drawer-layout id="drawerLayout">

        <app-drawer>
            <div class="drawer-content">
                <paper-icon-item>
                    <iron-icon icon="inbox" item-icon></iron-icon> <span>Inbox</span>
                </paper-icon-item>
                <paper-icon-item>
                    <iron-icon icon="query-builder" item-icon></iron-icon> <span>Snoozed</span>
                </paper-icon-item>
                <paper-icon-item>
                    <iron-icon icon="done" item-icon></iron-icon> <span>Done</span>
                </paper-icon-item>
                <paper-icon-item>
                    <iron-icon icon="drafts" item-icon></iron-icon> <span>Drafts</span>
                </paper-icon-item>
                <paper-icon-item>
                    <iron-icon icon="send" item-icon></iron-icon> <span>Sent</span>
                </paper-icon-item>
                <paper-icon-item>
                    <iron-icon icon="delete" item-icon></iron-icon> <span>Trash</span>
                </paper-icon-item>
                <paper-icon-item>
                    <iron-icon icon="report" item-icon></iron-icon> <span>Spam</span>
                </paper-icon-item>
            </div>
        </app-drawer>

        <sample-content size="100"></sample-content>

    </app-drawer-layout>

</app-header-layout>

<script>
    var drawerLayout = document.getElementById('drawerLayout');
    document.getElementById('toggle').addEventListener('tap', function() {
        if (drawerLayout.forceNarrow || !drawerLayout.narrow) {
            drawerLayout.forceNarrow = !drawerLayout.forceNarrow;
        } else {
            drawerLayout.drawer.toggle();
        }
    });
</script>--}}

   {{-- <title>demo7</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>

    <link rel="import" href="bower_components/font-roboto/roboto.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="bower_components/app-layout/demo/sample-content.html">

    <style is="custom-style">

        body {
            margin: 0;
            font-family: 'Roboto', 'Noto', sans-serif;
            background-color: #eee;
        }

        app-header {
            background-color: #4285f4;
            color: #fff;
        }

        app-header paper-icon-button {
            --paper-icon-button-ink-color: white;
        }

    </style>

</head>
<body unresolved>

<app-drawer-layout fullbleed>

    <app-header-layout fullbleed>

        <app-header fixed effects="waterfall">
            <app-toolbar>
                <div spacer main-title>My Drive</div>
                <paper-icon-button icon="menu" drawer-toggle></paper-icon-button>
            </app-toolbar>
        </app-header>

        <sample-content size="100"></sample-content>

    </app-header-layout>

    <app-drawer align="end">
        <app-toolbar>App name</app-toolbar>
    </app-drawer>

</app-drawer-layout>--}}

</body>
</html>


