<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Profound Grid | A grid system for fixed and fluid layouts</title>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="title" content="Gana or Bazana" />
    <meta name="description" content="Gana or Bazana 4 u" />
    <meta name="keywords" content="Gana Bazana" />
    
    <meta property="og:url" content="http://www.mp3.com"/>
    <meta property="og:title" content="Gana Or Bazana"/> 
    <meta property="og:type" content="website"/> 
    <meta property="og:image" content="http://www.mp3.com/img/logo.png"/> 
    <meta property="og:site_name" content="Bana Bazana"/> 
    <meta property="og:description" content="Gana or Bazana 4 u"/>
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,width=device-width">


  <!-- CSS
  ================================================== -->
    

    {{ HTML::style('http://fonts.googleapis.com/css?family=Raleway:500,900,200') }}
    {{ HTML::style('/css/index.css') }}
    @section('headsection')
  

  <!-- Favicons -->

</head>
<body>

  


  <!-- Primary Page Layout
  ================================================== -->

  <!-- Delete everything in this .container and get started on your own site! -->
  
   <nav>
            <div class="center">
                <ul>
                    <li>
                        <a href='#' title="Show Grid" id="gridButton" onclick="return false;">Show Grid</a>
                    </li>
                    <li>
                        <a href="/" id="logo"><img src="/img/logo_top.png" /></a>
                    </li>
                    <li>
                        <a id="navDownload" title="Download .Zip File" href='https://github.com/artofrawr/profoundgrid/archive/master.zip'>Download .Zip File</a>
                        <a id="navGithub" title="Fork On Github" href='https://github.com/artofrawr/profoundgrid/'>Fork On Github</a>
                        <a id="navFacebook" title="Share On Facebook" href='http://www.facebook.com/sharer.php?u=http://www.profoundgrid.com'>Share on Facebook</a>
                        <a id="navTwitter" title="Share On Twitter" href='http://twitter.com/?status=http%3A%2F%2Fwww.profoundgrid.com+by+%40weareprofound'>Share on Twitter</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Header -->
        <header>
            <div class="center">
                <a href='fixedresponsive.html' title="Show Grid" id="example_prev"><i class="arrow-left"></i><span>previous</span></a>
                <h1>FLUID GRID</h1>
                <a href='fluidmaxwidth.html' title="Show Grid" id="example_next"><i class="arrow-right"></i><span>next</span></a>
            </div>
        </header>

    <article id="semantic">
            <div class="col1 push0">1</div>
            <div class="col1 push1">1</div>
            <div class="col1 push2">1</div>
            <div class="col1 push3">1</div>
            <div class="col1 push4">1</div>
            <div class="col1 push5">1</div>
            <div class="col1 push6">1</div>
            <div class="col1 push7">1</div>
            <div class="col1 push8">1</div>
            <div class="col1 push9">1</div>
            <div class="col1 push10">1</div>
            <div class="col1 push11">1</div>
        </article>

        <article>
            <div class="col2 push0">2</div>
            <div class="col2 push2">2</div>
            <div class="col2 push4">2</div>
            <div class="col3 push6">3</div>
            <div class="col3 push9">3</div>
        </article>

        <article>
          <div class="col4 push0">4</div>
          <div class="col4 push4">4</div>
          <div class="col4 push8">4</div>
        </article>

        <article>
            <div class="col6 push0">6</div>
            <div class="col6 push6">6</div>
        </article>

        <article>
            <div class="col12 push0">12</div>
        </article>

        <footer>
            <div class="center">
                <h3>BUILT BY</h3>
                <section id="company">
                    <a href="http://www.weareprofound.com">PROFOUND</a>
                </section>
                <section id="meta">
                    <div>Copyright &copy; 2009-2012 Profound Creative Studio LLC. All rights reserved. </div>
                    <div>
                        <a href="http://www.facebook.com/pages/Profound/174209019285677">Profound on Facebook</a>
                        <a href="https://twitter.com/weareprofound">Profound on Twitter</a>
                    </div>  
                </section>
            </div>
        </footer>
        
        

    <!-- javascript files -->
    {{-- HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') --}}
    {{-- HTML::script('//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.1/handlebars.min.js') --}}
    {{ HTML::script('js/libs/jquery-1.10.2.js') }}

    <!--[if lt IE 9]>
      {{ HTML::script('/js/html5shiv.js') }}
      {{ HTML::script('/js/selectivizr.js') }}
      {{ HTML::script('/js/respond.js') }}
    <![endif]-->

    <script type="text/javascript">
        $(function(){
            // TOGGLE GRID
            $('#gridButton').click(function(){
                if($('#grid').length == 0) {
                    var height = $('body').height();
                    var html = '<article id="grid"><div class="overlay"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></article>';
                    $('body').prepend(html);
                    $('#grid div').css('height', height);
                }else{
                    $('#grid').remove();
                }
            });

            $(window).resize(function() {
                if($('#grid').length > 0) {
                    var height = $('body').height();
                    $('#grid div').css('height', height);
                }
            });

            // CHANGE GRID OVERLAY BEHAVIOUR FOR BROWSERS
            // THAT DONT SUPPORT "pointer-events: none;" CSS
            // if ($.browser.msie || $.browser.opera) {
            //   $('#grid').live('click', function(){
            //     $('#grid').remove();
            //   });
            // }

            // TOOLTIP
            var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
            $('nav a').hover(function(){
                if (isMobile == false){
                    var pos = $(this).offset();
                    var title = $(this).attr('title');
                    if ($.trim(title) == ''){
                        return;
                    }
                    $(this).data('tipText', title).removeAttr('title');
                    if($('.tooltip').length == 0) {
                        var html = '<p class="tooltip"></p>';
                        $('body').append(html);
                    }
                    $('.tooltip').html('<div class="arrow"></div><div>'+title+'</div>');
                    $('.tooltip').css('top', pos.top+55).css('left', pos.left+25);
                    var width = $('.tooltip').outerWidth();
                    $('.tooltip').css('margin-left', 0-width*0.5);
                    $('.tooltip').addClass('show');
                }
            }, function() {
                if (isMobile == false){
                    $('.tooltip').removeClass('show');
                    $(this).attr('title', $(this).data('tipText'));
                }
            });
          }); //DOCUMENTEND
        </script>

    @yield('footsection')

    <!-- end of javascript files -->
  
<!-- End Document
================================================== -->

</body>
</html>
