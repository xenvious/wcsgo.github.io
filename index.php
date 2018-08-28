<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WCS:GO Server">
    <meta name="author" content="Leg[a]cy (STEAM_0:1:15645964)">

    <title>WCS:GO</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <!--
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>TKServers</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#rules" onclick=$("#menu-close").click();>Rules</a>
            </li>
            <li>
                <a href="#staff" onclick=$("#menu-close").click();>Staff List</a>
            </li>
            <!- -
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
            - ->
        </ul>
    </nav>
    -->

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center container-fluid">
          <div class="row">
            <div class="col-xs-4">
            </div>
            <div class="col-xs-4" style="text-shadow: 0px 0px 10px #007CFF">
            <h1>Preston High School</h1>
            <h3>Online Text Books</h3>
            <p id="loadfiles"></p>
            <p id="loadnumber"></p>
            <p id="loadstatus"></p>
            <script>
              //SetFilesTotal(69);
              var tehtotal;
              function SetFilesTotal(total){
                if(total > 0){
                  tehtotal = total;
                  document.getElementById("loadfiles").innerHTML = "You have "+total+" files to download! Most, if not all of them, are on <a href=\"http://steamcommunity.com/sharedfiles/filedetails/?id=799569912\">the workshop (799569912)</a>.";
                }
              }
              //SetFilesNeeded(0);
              function SetFilesNeeded(needed){
                var difference = tehtotal-needed;
                if(difference >= 0)
                  document.getElementById("loadnumber").innerHTML = " <div class=\"progress\"><div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:"+(Math.round((difference/tehtotal)*100))+"%\">"+difference+" files "+(Math.round((difference/tehtotal)*100))+"%</div></div>";
              }
              //SetStatusChanged("Sending client info...");
              function SetStatusChanged(status){
                document.getElementById("loadstatus").innerHTML = status;
              }
            </script>
            <br>
            <a href="#rules" class="btn btn-dark btn-lg">Read the Rules</a>
            </div>
            <div class="col-xs-4">
            </div>
          </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Please excuse us while we perfect some minor aspects of this server.</h2>
                    <p class="lead">We're sure you'll have fun, in the meantime!</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="rules" class="services bg-primary">
        <div class="container">
          <!--
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!- - /.row (nested) - ->
      </div>
                <!- - /.col-lg-10 - ->
            </div>
            <!- - /.row - ->
          -->

          <h1 id="the-rules-tkservers-darkrp">The Rules</h1>
          <h5 id="_all-players-and-admins-are-responsible-for-knowing-these-rules-before-playing-on-the-server_"><em>Please understand that, while these rules listed below are excellent guidelines, a warcraft server by nature differs in gameplay day-to-day: it is impossible to list every single rule to be followed. <br>
          If an administrative figure requests you to follow a temporary injunction, <strong>you must listen!</strong></em></h5>
          <ol>
          <li><em>The Basics</em><ol>
          <li>We try to be family friendly. You may swear to a civil extent. Swearing excessivly will be punished with a polite mention to behave.</li>
          <li>Instaban offenses
            <ol>
              <li>Any external program to give you an unfair advantage against other players. (Aimbot, Wallhacks, etc.)</li>
              <li>Extreme Racism</li>
              <li>DDoS (Direct Denial of Service) Threats, DoS Threats, or anything attack against the Server or a Player. (Instant Permanent Ban)          </li>
            </ol>
          </li>
          <li>As said above, <strong>do not</strong> argue with an admin. If you feel you have been wronged, there is an abuse report forum at wcsgo.github.io.<br>
          </li>
          <li>Begging admins for anything.<br>
          </li>
          <li>Hacking or Attempting to crash the server.<br>
          </li>
          <li>Ghosting.<br>
          </li>
          <li>Communications Spam (Chat, Voice, or Radio)<br>
          </li>
          <li>Dodging a mute, votekick, or voteban.<br>
          </li>
          <li>Farming XP.<br>
          </li>
          <li>Killing yourself to prevent XP gain.</li>
          <li>Finally and most importantly, play nice & have fun!         </li>
          </ol>
          </li>
          </ol>
          </li>
          <li><em>Guidelines (not rules):</em><ol>
          <li>Follow the guidelines to assure your experience on this server is enjoyable and snag-free.<ol>
          <li>Don&#39;t assume that any rules outside of the 2.x range are not rules.</li>
          </ol>
          </li>
          <li>Don&#39;t be a Richard.</li>
          <li>Be considerate of others in real life, we all want to have fun here.</li>
          <li>Check the rules often to ensure that you&#39;re up-to-date on any recent changes.</li>
          </ol>
          </li>
          <li><em>WCS:GO Rules</em>
            <ol>
              <li>Shooting at/Killing players while using Water Elementals Ultimate to attach to a non-solid texture/object.<br>
              </li>
              <li>Standing on an invisible texture (skywalking)<br>
              </li>
              <li>Looking through an invisible texture<br>
              </li>
              <li>Partially hiding inside a non-solid object (aka 'clipping')<br>
              </li>
              <li>On maps with teleport/fly disabled: using low-gravity races to access otherwise unreachable heights (teleport/fly is disabled for a reason!)<br>
              </li>
              <li>Flying or teleporting over illegal areas<br>
              </li>
              <li>Teleporting/flying/otherwise gaining access to the outside of any map. This includes going outside the map to exploit the open skybox (eg flying to spawns). If this happens accidentally, you may request an admin to teleport you to your spawn; you must otherwise kill yourself<br>
              </li>
              <li>Intentionally trapping or blocking of teammates with props is not allowed.</li>
            </ol>
      </li>
          <li><em>Misc:</em>
            <ol>
            <li>When the 1:30 mark is reached, the objective must be attempted or administrative action may be taken [basically a massive  slap is coming your way]<br>
              <ul>
                <li>Please note, however, that the objective can be attempted in any way the team sees fit. Blatant disregard for the objective, however, is disallowed</li>
              </ul>
            </li>
            <li>After the bomb has been planted, it is the CT's objective to attempt to defuse the bomb. This objective will be enforced like any other objective<br>
            </li>
            <li>On bomb, maps T's are not allowed to drop the bomb in an out-of-bounds place, and CT's are not allowed to push the bomb out-of-bounds<br>
            </li>
            <li>Do not defuse the bomb through floors or walls<br>
            </li>
          </ol>
          </li>
          <li><em>Rules for Admins:</em><ol>
          <li>Being an administrator doesn&#39;t mean being above the law. Administrators still need to follow the rules of this server, no matter what rank they are in this community.<ol>
          <li>If a player or another administrator finds that an administrator has been acting not within the bounds of these rules, then it should be reported to a higher-up or the owners.</li>
          </ol>
          </li>
          <li>Include the rule that the player broke in any kick/ban/warning messages.<ol>
          <li>A good way to do this is to cite the rule number and title.</li>
          </ol>
          </li>
          <li>It is strongly recommended, but not required, that all kicks and bans should be signed by the administrator who has assigned them. This is part of an effort to improve transparency to players.</li>
          <li>Abuse of one&#39;s administrative privileges will lead to immediate revocation of such privileges.</li>
          </ol>
          </li>
          </ol>


        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside id="staff" class="callout">
        <div class="text-vertical-center">
            <h1>List of Staff</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <!--
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!- - /.row (nested) - ->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!- - /.col-lg-10 - ->
            </div>
            <!- - /.row - ->
        </div>
        <!- - /.container - ->
    </section>
    -->

    <!-- Call to Action -->
    <!--
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>
    -->

    <!-- Map -->
    <!--
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>
    -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <!--
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    -->

                    <!--<h2 id="list-of-staff">List of Staff</h2>-->
                    <table class="table table-striped table-responsive">
                    <thead>
                    <tr>
                    <th style="text-align:left">Staff Member</th>
                    <th style="text-align:left">Rank</th>
                    <th style="text-align:left">SteamID</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td style="text-align:left">Leg[a]cy</td>
                    <td style="text-align:left">Owner</td>
                    <td style="text-align:left"><a href="http://steamcommunity.com/id/-ax/">STEAM_1:0:223639207</a></td>
                    </tr>
                    </tbody>
                    </table>

                    <hr class="small">
                    <p class="text-muted">Copyright &copy; WCS:GO 2018</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
