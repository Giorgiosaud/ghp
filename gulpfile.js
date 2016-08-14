var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');
elixir.config.publicPath='compiled';
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir(function(mix) {
 	mix.copy('bower_components/Responsive-Multi-Level-Menu-Plugin-Dlmenu/fonts','compiled/fonts')
		.copy('bower_components/font-awesome-sass/assets/fonts','compiled/fonts')
		.sass('sass.scss', 'resources/assets/css',
 	{
 		includePaths:[
 		__dirname + '/bower_components',
 		]

 	})
 	.stylus('app.styl','resources/assets/css')
	.styles(['sass.css'],'compiled/css/assets.css')
	.styles(['app.css'],'compiled/css/main.css')
 	.scripts(['jquery/jquery.js','tether/dist/js/tether.js','bootstrap/dist/js/bootstrap.js','Responsive-Multi-Level-Menu-Plugin-Dlmenu/js/modernizr.custom.js','Responsive-Multi-Level-Menu-Plugin-Dlmenu/js/jquery.dlmenu.js','fancybox-scss/source/jquery.fancybox.pack.js'],'compiled/js/assets.js','bower_components/')
	.scripts(['main.js'],'compiled/js/main.js');
 });

