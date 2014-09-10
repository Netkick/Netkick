<!-- Carousel ==================================================== -->
	<script src="<?php echo site_url('js/jssor.core.js'); ?>"></script>
	<script src="<?php echo site_url('js/jssor.utils.js'); ?>"></script>
	<script src="<?php echo site_url('js/jssor.slider.js'); ?>"></script>
	<script>
		var _CaptionTransitions = [{$Duration:900,$Easing:$JssorEasing$.$EaseInCubic,$Opacity:2}];
		//Left to Right
		_CaptionTransitions["L-R"] = { $Duration: 1000, $FlyDirection: $JssorDirection$.$TO_LEFT, $Easing: $JssorEasing$.$EaseOutCubic };
		//Right to Left
		_CaptionTransitions["R-L"] = { $Duration: 1000, $FlyDirection: $JssorDirection$.$TO_RIGHT, $Easing: $JssorEasing$.$EaseOutCubic };
		//Top to Bottom
		_CaptionTransitions["T-B"] = { $Duration: 1000, $FlyDirection: $JssorDirection$.$TO_TOP, $Easing: $JssorEasing$.$EaseOutCubic };
		//Bottom to Top
		_CaptionTransitions["B-T"] = { $Duration: 1000, $FlyDirection: $JssorDirection$.$TO_BOTTOM, $Easing: $JssorEasing$.$EaseOutCubic };
		//Zoom In
		_CaptionTransitions["ZoomIn"] = {$Duration:1500,$Zoom:1,$Easing:$JssorEasing$.$EaseInCubic,$Opacity:2};
		//Zoom Out
		_CaptionTransitions["ZoomOut"] = {$Duration:1500,$Zoom:11,$Easing:{$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2};
		//Zoom Out
		_CaptionTransitions["Fade"] = {$Duration:1200,$Easing:$JssorEasing$.$EaseInCubic,$Opacity:2};

		var _SlideshowTransitions = [{ $Duration:1000,$Opacity:2 }];
	</script>
	<script>
        jssor_slider1_starter = function (containerId) {
            var jssor_slider1 = new $JssorSlider$(containerId, {
                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },
				$SlideshowOptions: {								//Options which specifies enable slideshow or not
						$Class: $JssorSlideshowRunner$,				//Class to create instance of slideshow
						$Transitions: _SlideshowTransitions,		//Transitions to play slide, see jssor slideshow transition builder
						$TransitionsOrder: 1,						//The way to choose transition to play slide, 1 Sequence, 0 Random
						$ShowLink: true,							//0 After Slideshow, 2 Always
						$ContentMode: false     	                //Whether to trait content as slide, otherwise trait an image as slide

				},
				$ShowLoading: true,                                 //Show loading screen or not
				$AutoPlay: true,                    	            //Whether to auto play
				$AutoPlaySteps: 1,                                  //Steps to go of every play (this options applys only when slideshow disabled), the default value is 1
				$AutoPlayInterval: 12000,                            //Interval to play next slide since the previous stopped if a slideshow is auto playing
				$HoverToPause: true,                            	//Whether to pause when mouse over if a slideshow is auto playing
				$ArrowKeyNavigation: true,                  		//Allows arrow key to navigate or not
				$SlideDuration: 300,                                //Specifies default duration (swipe) for slide in milliseconds
				$MinDragOffsetToSlide: 20,                          //Minimum drag offset that trigger slide
				//$SlideWidth: 600,                               	//[Optional] Width of every slide in pixels, the default is width of 'slides' container
				//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, the default is width of 'slides' container
				$SlideSpacing: 0,                      		    	//Space between each slide in pixels
				$DisplayPieces: 1,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
				$ParkingPosition: 0,                                //The offset position to park slide (this options applys only when slideshow disabled).
				$UISearchMode: 1,                                   //The way (0 parellel, 1 recursive, default value is recursive) to search UI components (slides container, loading screen, navigator container, direction navigator container, thumbnail navigator container etc.
				$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
				$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 both, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            });
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {

                //reserve blank width for margin+padding: margin+padding-left (10) + margin+padding-right (10)
                var paddingWidth = 0;

                //minimum width should reserve for text
                var minReserveWidth = 225;

                var parentElement = jssor_slider1.$Elmt.parentNode;

                //evaluate parent container width
                var parentWidth = parentElement.clientWidth;

                if (parentWidth) {

                    //exclude blank width
                    var availableWidth = parentWidth - paddingWidth;

                    //calculate slider width as 100% of available width
                    var sliderWidth = availableWidth * 1;

                    //slider width is maximum 600
                    sliderWidth = Math.min(sliderWidth, 1600);

                    //slider width is minimum 200
                    sliderWidth = Math.max(sliderWidth, 100);
                    var clearFix = "none";

                    //evaluate free width for text, if the width is less than minReserveWidth then fill parent container
                    if (availableWidth - sliderWidth < minReserveWidth) {

                        //set slider width to available width
                        sliderWidth = availableWidth;

                        //slider width is minimum 200
                        sliderWidth = Math.max(sliderWidth, 100);

                        clearFix = "both";
                    }

                    //clear fix for safari 3.1, chrome 3
                    var toClearElment = $JssorUtils$.$GetElement("clearFixDiv");
                    toClearElment && $JssorUtils$.$SetStyleClear(toClearElment, clearFix);

                    jssor_slider1.$SetScaleWidth(sliderWidth);
                }
                else
                    $JssorUtils$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $JssorUtils$.$AddEvent(window, "load", ScaleSlider);

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $JssorUtils$.$OnWindowResize(window, ScaleSlider);
            }
            //responsive code end
        };
	</script>
	<div id="slider1_container" class="visible-xs visible-sm visible-md visible-lg" style="position: relative; top: 8px; left: 0px; width: 1600px; height: 500px;">
		<!-- Slides Container -->
		<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1600px; height: 500px;">
			<div>
				<img u="image" src="<?php echo site_url('images/testimonials/jenny.jpg'); ?>" />
				<div u=caption t="Fade" t2="ZoomOut" class="slider-testimonial" d="800" style="position: absolute; left:0px; top: 180px; width:1600px; height:260px;">
					If you require a painless process to creating a responsive website that you are proud of and that attracts more customers, I would highly recommend Netkick for their expertise, listening skills, project management, patience, affordability and professionalism.
				</div>
				<div u=caption t="Fade" class="slider-author" style="position: absolute; left:900px; top: 450px; width:1600px; height:100px;">
					Jenny Garrett, Executive Coach & Author
				</div>
			</div>
			<div>
				<img u="image" src="<?php echo site_url('images/testimonials/yawara.jpg'); ?>" />
				<div u=caption t="Fade" t2="ZoomOut" class="slider-testimonial" d="800" style="position: absolute; left:0px; top: 180px; width:1600px; height:260px;">
					Since the new website was created business is really busy due to people looking on the website and finding out about the clubs. In the past I've relied mainly on paper flyers for promotion, but the new website gives me a great new marketing channel.
				</div>
				<div u=caption t="Fade" class="slider-author" style="position: absolute; left:950px; top: 450px; width:1600px; height:100px;">
					Sensei Dave Clarke, Yawara Martial Arts
				</div>
			</div>
		</div>
	</div>
	<!-- Trigger -->
	<script>jssor_slider1_starter('slider1_container');</script>

	<div id="slider2_container" class="visible-xs visible-sm visible-md visible-lg" style="position: relative; top: 8px; left: 0px; width: 1500px; height: 1500px;">
		<!-- Slides Container -->
		<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1500px; height: 1500px;">
			<div>
				<img u="image" src="<?php echo site_url('images/testimonials/jenny1000.jpg'); ?>" />
				<div u=caption t="Fade" t2="ZoomOut" class="slider-testimonial-p" d="800" style="position: absolute; left:0px; top: 450px; width:1500px; height:875px;">
					If you require a painless process to creating a responsive website that you are proud of and that attracts more customers, I would highly recommend Netkick for their expertise, listening skills, project management, patience, affordability and professionalism.
				</div>
				<div u=caption t="Fade" class="slider-author-p" style="position: absolute; left:500px; top: 1350px; width:1500px; height:100px;">
					Jenny Garrett, Executive Coach & Author
				</div>
			</div>
			<div>
				<img u="image" src="<?php echo site_url('images/testimonials/yawara1000.jpg'); ?>" />
				<div u=caption t="Fade" t2="ZoomOut" class="slider-testimonial-p" d="800" style="position: absolute; left:0px; top: 450px; width:1500px; height:875px;">
					Since the new website was created business is really busy due to people looking on the website and finding out about the clubs. In the past I've relied mainly on paper flyers for promotion, but the new website gives me a great new marketing channel.
				</div>
				<div u=caption t="Fade" class="slider-author-p" style="position: absolute; left:500px; top: 1350px; width:1500px; height:100px;">
					Sensei Dave Clarke, Yawara Martial Arts
				</div>
			</div>
		</div>
	</div>
	<!-- Trigger -->
	<script>jssor_slider1_starter('slider2_container');</script>
	<?php  if (detect_ie()) : ?>
		<script>$("#slider2_container").attr('class', 'hidden-xs hidden-sm hidden-md hidden-lg');</script>
	<?php endif ?>

	<script>
	// Listen for orientation changes
	window.addEventListener("orientationchange", function() {
		if(window.innerHeight > window.innerWidth){
	//		window.location.replace("<?php echo site_url('/home-p/'); ?>");
			$("#slider1_container").attr('class', 'hidden-xs hidden-sm hidden-md hidden-lg');
			$("#slider2_container").attr('class', 'visible-xs visible-sm visible-md visible-lg');
		}
		else {
			$("#slider1_container").attr('class', 'visible-xs visible-sm visible-md visible-lg');
			$("#slider2_container").attr('class', 'hidden-xs hidden-sm hidden-md hidden-lg');
		}
	}, false);
	</script>

	<script>
	
		// Create the event
		var event = new CustomEvent("orientationchange", { "detail": "Example of an event" });

		// Dispatch/Trigger/Fire the event
		window.dispatchEvent(event);	
	</script>

	<!-- Jssor Slider End -->
