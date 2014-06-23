<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- AngularJS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-animate.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-cookies.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-sanitize.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-resource.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-route.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.min.js"></script>
<script src="//oss.maxcdn.com/angular.strap/2.0.0/angular-strap.min.js"></script>
<script src="//oss.maxcdn.com/angular.strap/2.0.0/angular-strap.tpl.min.js"></script>

<!-- Plugins -->
{{ HTML::script('js/jquery.nicescroll.min.js') }}

<!-- Initiate App -->
{{ HTML::script('app.js') }}
{{ HTML::script('config.js') }}
{{ HTML::script('directives/global.js') }}
{{ HTML::script('system/services/global.js') }}
{{ HTML::script('home/controllers/home.js') }}
{{ HTML::script('home/routes/home.js') }}
{{ HTML::script('init.js') }}

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->