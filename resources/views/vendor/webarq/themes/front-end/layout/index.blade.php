<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>@yield('meta-title', $metaTitle )</title>

		<meta name="description" content="@yield('meta-description', $metaDescription )">
		<meta name="author" content="Danang IN">

		<!-- Devices Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Enable/Disabled browser system cache -->
        @if (1 === (int) Wa::config('system.site.cache'))
            <meta http-equiv="cache-control" content="max-age=0"/>
            <meta http-equiv="cache-control" content="no-cache"/>
            <meta http-equiv="expires" content="0"/>
            <meta http-equiv="expires" content="{{ date('D, d M Y H:i:s e') }}"/>
            <meta http-equiv="pragma" content="no-cache"/>
        @endif

		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
        <link rel="shortcut icon" type="images/x-icon" href="{{ URL::asset(Wa::config('system.favicon')) }}"/>

		<link href='https://fonts.googleapis.com/css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		<!-- Plugins CSS files -->
		<link rel="stylesheet" href="{{ asset('frontend') }}/css/assets.css">

		<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/section-scroll.css">

		<!-- REVOLUTION SLIDER STYLES -->
		<link rel="stylesheet" href="{{ asset('frontend') }}/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" type="text/css">
		<link rel="stylesheet" href="{{ asset('frontend') }}/revolution/css/settings.css" type="text/css">
		<link rel="stylesheet" href="{{ asset('frontend') }}/revolution/css/navigation.css" type="text/css">

		<!-- Template CSS files -->
		<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
		<link rel="stylesheet" href="{{ asset('frontend') }}/css/shortcodes.css">
		<link id="theme_css" rel="stylesheet" href="{{ asset('frontend') }}/css/light.css">
		<link id="skin_css" rel="stylesheet" href="{{ asset('frontend') }}/css/skins/default.css">

	</head>
	<body class="dark-one">

		<!-- site preloader start -->
		<!-- <div class="page-loader"></div> -->
		<!-- site preloader end -->

		<div class="pageWrapper">

		    <!-- Content start -->
	    	<div class="pageContent">
                @yield('content')
		    </div>
	    	<!-- Content end -->

            {!! Wa::getThemesView($shareThemes, 'common.footer') !!}

		</div>

		<!-- Back to top Link -->
	    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

		<!-- Load JS plugins -->
 		<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-1.12.0.min.js"></script>
 		<script type="text/javascript" src="{{ asset('frontend') }}/js/assets.js"></script>

 		<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.section-scroll.js"></script>

 		<!-- SLIDER REVOLUTION  -->
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/jquery.themepunch.revolution.min.js"></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
			(Load Extensions only on Local File Systems !  +
			The following part can be removed on Server for On Demand Loading) -->
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="{{ asset('frontend') }}/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->
		<script type="text/javascript">
			var tpj=jQuery;
			var revapi4;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_4_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_4_1");
				}else{
					revapi4 = tpj("#rev_slider_4_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"assets/revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "gyges",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: false,
                                hide_onmobile: false,
                                style: "gyges",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "top",
                                h_offset: 0,
                                v_offset: 20,
                                space: 5,
                                tmp: ''
                            }
                        },
                        parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50],
						},
						responsiveLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						shadow:0,
						spinner:"off",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>

 		<!-- general script file -->
		<script type="text/javascript" src="{{ asset('frontend') }}/js/script.js"></script>

		<script type="text/javascript">
			$(window).load(function(){
				$('body').sectionScroll();
			});
		</script>

	</body>
</html>
