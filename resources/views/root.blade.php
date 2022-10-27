<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="/assets/vendors/liquid-icon/liquid-icon.min.css" />
        <link rel="stylesheet" href="/assets/vendors/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/assets/css/theme-vendors.min.css" />
        <link rel="stylesheet" href="/assets/css/theme.min.css?ver=2" />
        <link rel="stylesheet" href="/assets/css/themes/opus.css" />
        <link rel="stylesheet" type="text/css" href="/assets/vendors/revolution/css/settings.css">

        @vite(['resources/js/app.js'])
        @spladeHead
    </head>
	<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="center" data-mobile-nav-style="minimal" data-mobile-nav-scheme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
        @splade




        <script src="/assets/vendors/jquery.min.js"></script>
        <script src="/assets/js/theme-vendors.js"></script>
        <script src="/assets/js/theme.min.js"></script>
        
		<script type="text/javascript" src="/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

	<style>
		#rev_slider_1_1 .metis.tparrows {
			background: rgba(10, 10, 10, 0.4);
			padding: 10px;
			transition: all 0.3s;
			-webkit-transition: all 0.3s;
			width: 60px;
			height: 60px;
			box-sizing: border-box;
		}
		#rev_slider_1_1 .metis.tparrows:before {
			color: rgb(255, 255, 255);
			transition: all 0.3s;
			-webkit-transition: all 0.3s;
		}
		#rev_slider_1_1 .metis.tparrows:hover {
			background: rgba(10, 10, 10, 0.66);
		}
		#rev_slider_1_1 .metis.tparrows:hover:before {
			transform: scale(1.5);
		}
	</style>
	<script type="text/javascript">
		var revapi1,
			tpj;
		(function () {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",
				onLoad);
			else onLoad();

			function onLoad() {
				if (tpj === undefined) {
					tpj = jQuery;
					if ("off" == "on") tpj.noConflict();
				}
				if (tpj("#rev_slider_1_1").revolution == undefined) {
					revslider_showDoubleJqueryError("#rev_slider_1_1");
				} else {
					revapi1 = tpj("#rev_slider_1_1").show().revolution({
						sliderType: "standard",
						jsFileLocation: "//virtusone.liquid-themes.com/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout: "fullscreen",
						dottedOverlay: "none",
						delay: 9000,
						navigation: {
							keyboardNavigation: "off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation: "off",
							mouseScrollReverse: "default",
							onHoverStop: "off",
							arrows: {
								style: "metis",
								enable: true,
								hide_onmobile: true,
								hide_under: 992,
								hide_onleave: false,
								tmp: '',
								left: {
									h_align: "left",
									v_align: "center",
									h_offset: 0,
									v_offset: 0
								},
								right: {
									h_align: "right",
									v_align: "center",
									h_offset: 0,
									v_offset: 0
								}
							}
						},
						responsiveLevels: [1240, 1024, 778, 480],
						visibilityLevels: [1240, 1024, 778, 480],
						gridwidth: [1240, 1024, 778, 480],
						gridheight: [868, 768, 960, 720],
						lazyType: "none",
						scrolleffect: {
							fade: "on",
							on_slidebg: "on",
							on_parallax_layers: "on",
						},
						parallax: {
							type: "mouse",
							origo: "enterpoint",
							speed: 400,
							speedbg: 0,
							speedls: 0,
							levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
						},
						shadow: 0,
						spinner: "spinner0",
						stopLoop: "off",
						stopAfterLoops: -1,
						stopAtSlide: -1,
						shuffle: "off",
						autoHeight: "off",
						fullScreenAutoWidth: "off",
						fullScreenAlignForce: "off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar: "on",
						hideThumbsOnMobile: "off",
						hideSliderAtLimit: 0,
						hideCaptionAtLimit: 0,
						hideAllCaptionAtLilmit: 0,
						debugMode: false,
						fallbacks: {
							simplifyAll: "off",
							nextSlideOnWindowFocus: "off",
							disableFocusListener: false,
						}
					});
				}; /* END OF revapi call */

			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */
	</script>


    </body>
</html>
