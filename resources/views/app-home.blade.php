<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
    <meta id="token" value="{{csrf_token()}}">
    <title>Regala Mejor!</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>


    <link rel="import" href="bower_components/iron-demo-helpers/demo-snippet.html">
    <link rel="import" href="bower_components/iron-demo-helpers/demo-pages-shared-styles.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/iron-flex-layout/iron-flex-layout.html">
    <link rel="import" href="bower_components/iron-media-query/iron-media-query.html">
    <link rel="import" href="bower_components/iron-pages/iron-pages.html">

    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/iron-flex-layout/iron-flex-layout.html">
    <link rel="import" href="bower_components/paper-styles/typography.html">
    <link rel="import" href="bower_components/paper-styles/color.html">
    <link rel="import" href="bower_components/paper-styles/default-theme.html">
    <link rel="import" href="bower_components/neon-animation/neon-animated-pages.html">
    <link rel="import" href="bower_components/neon-animation/neon-animatable.html">
    <link rel="import" href="bower_components/neon-animation/neon-animations.html">

    <style is="custom-style">
        body{
            overflow: hidden;
        @apply(--layout-fullbleed);
        @apply(--layout-horizontal);
        }

        .container {
            overflow: hidden;
            @apply(--layout-fullbleed);
            @apply(--layout-vertival);
        }

        .column-left[flex-layout]{
            overflow: hidden;
            @apply(--layout-fullbleed);
            @apply(--layout-horizontal);
        }

        .column-left {
            overflow: hidden;
            @apply(--layout-fullbleed);
            @apply(--layout-horizontal);
        }

        .column-right {
            @apply(--layout-vertical);
            @apply(--layout-flex);
        }

        .text-home{
            @apply(--layout-vertical);
            @apply(--layout-center);
        }

        .container[flex-layout] {
        @apply(--layout-fullbleed);
        @apply(--layout-horizontal);
        @apply(--layout-flex-2);
        }

        .paper-font-display1 {
        @apply(--paper-font-display1);
        }

        .paper-font-display2 {
        @apply(--paper-font-display2);
        }

        paper-icon-button.giant {
            width: 100px;
            height: 100px;
        }

        neon-animated-pages {
        @apply(--layout-flex);
        }

        neon-animatable {
            color: white;
        @apply(--layout-horizontal);
        @apply(--layout-center-center);
        @apply(--paper-font-display3);
        }

        neon-animatable:nth-child(1) {
            background: var(--paper-red-500);
        }

        neon-animatable:nth-child(2) {
            background: var(--paper-blue-500);
        }

        neon-animatable:nth-child(3) {
            background: var(--paper-orange-500);
        }

        neon-animatable:nth-child(4) {
            background: var(--paper-green-500);
        }

        neon-animatable:nth-child(5) {
            background: var(--paper-purple-500);
        }

    </style>

</head>

<body>
<template is="dom-bind">
    <iron-media-query query="(min-width: 600px)" query-matches="@{{wide}}"></iron-media-query>

    <div class="container" flex-layout$="@{{wide}}">
    <!-- ==========================
       COLUMN LEFT - START
   =========================== -->
    <div class="column-left" >
        <neon-animated-pages id="pages" selected="[[selected]]" entry-animation="[[entryAnimation]]"
                             exit-animation="[[exitAnimation]]" style="width:900px;">
            <neon-animatable>
                REGALA
                </br>
                <paper-icon-button icon="expand-more" title="wake up" class="giant"
                                   on-click="_onDownClick"></paper-icon-button>
            </neon-animatable>
            <neon-animatable>
                SUMATE YA!
                </br>
                <paper-icon-button icon="expand-more" title="wake up" class="giant"
                                   on-click="_onDownClick"></paper-icon-button>
            </neon-animatable>
            </neon-animatable>
            <neon-animatable>EN REGALAR!
                </br>
                <paper-icon-button icon="expand-more" title="wake up" class="giant"
                                   on-click="_onDownClick"></paper-icon-button>
            </neon-animatable>
            </neon-animatable></neon-animatable>
            <neon-animatable>LA NUEVA EXPERIENCIA
                </br>
                <paper-icon-button icon="expand-more" title="wake up" class="giant"
                                   on-click="_onDownClick"></paper-icon-button>
            </neon-animatable>
            </neon-animatable></neon-animatable>
            <neon-animatable>MEJOR
                </br>
                <paper-icon-button icon="expand-more" title="wake up" class="giant"
                                   on-click="_onDownClick"></paper-icon-button>
            </neon-animatable>
            </neon-animatable>
        </neon-animated-pages>
    </div>
    <!-- ==========================
    COLUMN LEFT - END
    =========================== -->
    <!-- ==========================
       COLUMN RIGHT - START
   =========================== -->
    <div class="column-right">
        <div class="text-home">
            <div class="paper-font-display1">Unete gratis.</div>
            <div class="paper-font-display1">Haz muchos amigos.</div>
            <div class="paper-font-display1">Comienza a regalar</div>
            <div class="paper-font-display1">Y recibe tus mejores Regalos</div>
        </div>
        <div>
            <div class="text-home signin">
                <a tabindex="-1">
                    <paper-button raised>Registrate ahora gratis
                        <iron-icon icon="icons:arrow-drop-down"></iron-icon>
                    </paper-button>
                </a>
                <!--<a class="btn action" ng-click="expand = true">Sign up now for free<i class="action-btn-icon"></i></a>


                <a class="btn facebook" click-once="rightBar.loginFB(refferer.slug)" processing-text="Please wait...">Sign in with Facebook</a>
                <a class="btn twitter" click-once="rightBar.loginTwitter(refferer.slug)" processing-text="Please wait...">Sign in with Twitter</a>
                <a class="btn google" click-once="rightBar.loginGoogle(refferer.slug)" processing-text="Please wait...">Sign in with Google</a>
                <a class="btn email" href="/login?s=1">Sign in with Email</a>-->
            </div>
        </div>
    </div>
    <!-- ==========================
       COLUMN RIGHT - END
   =========================== -->
    </div>
</template>

<script>

    var scope = document.querySelector('template[is="dom-bind"]');
    scope.selected = 0;

    scope._onPrevClick = function () {
        this.entryAnimation = 'slide-from-left-animation';
        this.exitAnimation = 'slide-right-animation';
        this.selected = this.selected === 0 ? 4 : (this.selected - 1);
    }

    scope._onNextClick = function () {
        this.entryAnimation = 'slide-from-right-animation';
        this.exitAnimation = 'slide-left-animation';
        this.selected = this.selected === 4 ? 0 : (this.selected + 1);
    }

    scope._onUpClick = function () {
        this.entryAnimation = 'slide-from-top-animation';
        this.exitAnimation = 'slide-down-animation';
        this.selected = this.selected === 4 ? 0 : (this.selected + 1);
    }

    scope._onDownClick = function () {
        this.entryAnimation = 'slide-from-bottom-animation';
        this.exitAnimation = 'slide-up-animation';
        this.selected = this.selected === 0 ? 4 : (this.selected - 1);
    }

</script>

</body>
</html>
