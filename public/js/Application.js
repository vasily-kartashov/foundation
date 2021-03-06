///<reference path="Environment"/>
///<reference path="vendor/jquery-2.0.3.d"/>
///<reference path="vendor/facebook.d"/>
///<reference path="Views"/>
///<reference path="HomePage"/>
///<reference path="Container"/>
var Application = (function () {
    function Application(environment) {
        var _this = this;
        this.environment = environment;
        this.loadFacebookSDK(function () {
            return _this.initFacebook();
        });
        $(document).ready(function () {
            return _this.onReady();
        });
    }
    Application.prototype.loadFacebookSDK = function (callback) {
        window.fbAsyncInit = callback;
        var d = document;
        var js, id = 'facebook-jssdk';
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement('script');
        js.id = id;
        js.async = true;
        js.src = "//connect.facebook.net/es_LA/all.js";
        d.getElementsByTagName('head')[0].appendChild(js);
    };

    Application.prototype.onReady = function () {
    };

    Application.prototype.initFacebook = function () {
        FB.init({
            appId: this.environment.getFacebookAppId(),
            status: true,
            cookie: true
        });
        FB.login(function (response) {
            if (response.authResponse) {
                var scope = Container.load(document.documentElement);
                var documentView = scope.getFirstInstance('pageView');
                documentView.init(response.authResponse.accessToken);
            } else {
                console.log('not authorized');
            }
        });
    };
    return Application;
})();
//# sourceMappingURL=Application.js.map
