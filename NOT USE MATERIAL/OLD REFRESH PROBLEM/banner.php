<body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif" >

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works without jquery library. -->
    <script src="js/jssor.slider-21.1.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: false,//ALI SHAN AUTO PLAY STOP
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
        
    </script>
    <style>
        
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
        		
		.jssort11 .p {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 69px;    background: #999;}
		.jssort11 .tp {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}
		.jssort11 .i, .jssort11 .pav:hover .i {    position: absolute;    top: 10px;    left: 4px;    width: 60px;    height: 50px;    border: white 1px solid; }* html <!--@Ali Shan thubmnail image size--!>
		.jssort11 .i {    width /**/: 62px;    height /**/: 32px;}
		.jssort11 .pav .i { border: white 1px solid;}
		.jssort11 .t, .jssort11 .pav:hover .t {    position: absolute;    top: 8px;    left: 70px;    width: 122px;    height: 32px;    line-height: 19px;    text-align: left;    color: #fff;    font-size: 12px; }<!--@Ali Shan thubmail caption-->
		.jssort11 .pav .t, .jssort11 .p:hover .t {    color: #fff;}
		.jssort11 .c, .jssort11 .pav:hover .c {    position: absolute;    top: 38px;    left: 3px;    width: 194px;    height: 32px;    line-height: 32px;    color: #fff;    font-size: 11px;    font-weight: 400;    overflow: hidden;}
		.jssort11 .pav .c, .jssort11 .p:hover .c {    color: #fc9835;}
		.jssort11 .t, .jssort11 .c {    transition: color 2s;    -moz-transition: color 2s;    -webkit-transition: color 2s;    -o-transition: color 2s;}
		.jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}
		.jssort11 .p:hover, .jssort11 .pav:hover {background: #666;}
		.jssort11 .pav, .jssort11 .p.pdn {background: #666;}
        
    </style>
	
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 263px; overflow: hidden; visibility: hidden; background-color: #999; border: 3px solid #FFFFFF;border-bottom: 5px solid #FFFFFF;border-right: 5px solid #FFFFFF;border-left: 3px solid #FFFFFF;box-shadow: 0px 0px 10px 1px rgba(189, 185, 185, 0.75);
-moz-box-shadow: 0px 0px 10px 1px rgba(189, 185, 185, 0.75);
-webkit-box-shadow: 0px 0px 10px 1px rgba(189, 185, 185, 0.75);"> <!--@AliShan dimensions changes-->

        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 752px; height: 260px; overflow: hidden;"> <!--@AliShan images dimensions changes-->
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/bn1.png" />
                <div data-u="thumb">
                    <img class="i" src="img/bn1_thumb.png" />
                    <div class="t">Department of Economics</div>
                    <div class="c"></div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/bn2.png" />
                <div data-u="thumb">
                    <img class="i" src="img/bn2_thumb.png" />
                    <div class="t">Our Research</div>
                    <div class="c"></div>
                </div>
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">List Slider</a>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/bn3.png" />
				 
                <div data-u="thumb">
                    <img class="i" src="img/bn3_thumb.png" />
                    <div class="t">Study with us</div>
                    <div class="c"></div>
                </div>
            </div>
        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:-27px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:-18px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:-20px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
</body>