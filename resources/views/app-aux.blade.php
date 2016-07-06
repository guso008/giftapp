<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" value="{{csrf_token()}}">
    <title>Regala Mejor!</title>

    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>


    <link rel="import" href="bower_components/iron-demo-helpers/demo-snippet.html">
    <link rel="import" href="bower_components/iron-demo-helpers/demo-pages-shared-styles.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/iron-flex-layout/iron-flex-layout.html">
    <link rel="import" href="bower_components/iron-media-query/iron-media-query.html">
    <link rel="import" href="bower_components/iron-pages/iron-pages.html">

    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/paper-styles/demo-pages.html">



</head>
<body class="fullbleed">
<template is="dom-bind">
    <style>
        .container {
            background-color: #ccc;
            padding: 0px;
            margin: 0;
        }

        .container[flex-layout] {
            background-color: #00cc27;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;

            -ms-flex-direction: row;
            -webkit-flex-direction: row;
            flex-direction: row;
        }

        .container > div {
            padding: 0px;
            margin: 0px;
            background-color: white;
            min-height: 20px;
        }

        .flex-1 {
            -ms-flex: 1 1 0.000000001px;
            -webkit-flex: 1;
            flex: 1;
            -webkit-flex-basis: 0.000000001px;
            flex-basis: 0.000000001px;
        }

        .flex-2{
            -ms-flex: 2;
            -webkit-flex: 2;
            flex: 2;
        }


    </style>

    <iron-media-query query="(min-width: 600px)" query-matches="@{{wide}}"></iron-media-query>

    <div class="container" flex-layout$="@{{wide}}" >
        <div class="flex-2">
            <style is="custom-style">
                iron-pages {
                    width: 100%;
                    /*height: 200px;*/
                    font-size: 50px;
                    color: white;
                    text-align: center;
                }
                iron-pages div {
                    width: 100%;
                    height: 100%;
                    padding: 80px 0;
                }
                iron-pages div:nth-child(1) {
                    background-color: var(--google-blue-500);
                }
                iron-pages div:nth-child(2) {
                    background-color: var(--google-red-500);
                }
                iron-pages div:nth-child(3) {
                    background-color: var(--google-green-500);
                }
            </style>
            <iron-pages selected="0">
                <div>Regala</div>
                <div>Mejor!</div>
                <div>Unite a la comunidad que Regala Mejor!</div>
            </iron-pages>

            <script>
                document.addEventListener('click', function(e) {
                    var pages = document.querySelector('iron-pages');
                    pages.selectNext();
                });
            </script>
        </div>
        <div class="flex-1">
            Unete gratis.
            Haz muchos amigos.
            Y comienza a regalar y a recibir los mejores REGAGALOS.

            <div class="signin">

                <a tabindex="-1">
                    <paper-button raised>Registrate ahora gratis<iron-icon icon="icons:arrow-drop-down"></iron-icon></paper-button>
                </a>


                <!--<a class="btn action" ng-click="expand = true">Sign up now for free<i class="action-btn-icon"></i></a>


                <a class="btn facebook" click-once="rightBar.loginFB(refferer.slug)" processing-text="Please wait...">Sign in with Facebook</a>
                <a class="btn twitter" click-once="rightBar.loginTwitter(refferer.slug)" processing-text="Please wait...">Sign in with Twitter</a>
                <a class="btn google" click-once="rightBar.loginGoogle(refferer.slug)" processing-text="Please wait...">Sign in with Google</a>
                <a class="btn email" href="/login?s=1">Sign in with Email</a>-->
            </div>
        </div>
    </div>
</template>
</body>
</html>
