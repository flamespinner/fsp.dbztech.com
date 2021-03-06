<!doctype html>
<!-- This site was written and developed by Brendan Boyle of DBZ Technology -->
<html>
    <head>
        <link rel="stylesheet" href="CSS/styles.css" />
        <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 1100px)' href='CSS/tablet.css' />
        <link rel='stylesheet' media='screen and (max-width: 700px)' href='CSS/phone.css' />
        
        
        <?php #color::set('blue'); ?>
        <script src="scripts.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>FSP | Home</title>
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-21351328-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>
    </head>
    <body>
    
    
    
        <div class="view" id="view1">
            <div style="position: relative; top: 30%;">
                <div class="logo">
                    <h1>Flamespinner</h1>
                    <h2>Tech</h2>
                </div>
                
                <!--<p><a href="#">Nav1</a> &#8226 <a href="#">Nav2</a> &#8226 <a href="#">Nav3</a> &#8226 <a href="#">Nav4</a> &#8226 <a href="#">Nav5</a> &#8226 <a href="#games">Games</a></p>
                -->
                
                <img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />
            </div>
        </div>
        
        
        
        
        
        
        <div class="view" id="view2">
            <div class="panel">
                <div class="panelrect" style="border-bottom-right-radius: 0px;">
                    <div class="panelpadding">
                        <h1>Compelling Design</h1>
                        <h2>Simple. Flexible. Elegant.</h2>
                        <p>Design is at the core of what we do at DBZ Technology. We focus heavily on user experience and interaction to make sure your organization's new website is easy to understand and use both on a user and administrator standpoint. Once you purchase a DBZ Technology designed website we update it for free. We strive to make your organization known and we strongly and thoroughly incorporate your brand in everything we create. Don't have a brand? No problem! DBZ Technology is more than happy to work with your organization to develop strong branding and design elements for future products. Once we create a brand we make sure you get the vector files, colors, and logos so that you can develop your brand later with no haste.</p>
                        <a href="/Design" class="link"><img src="/Resources/Images/Link.svg" alt="Link" /></a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner.svg" class="panelcorner" alt="Corner" />
            </div>
            <div class="ribbon"></div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <div class="view" id="games">
            <div class="panel panelleft" style="">
                <div class="panelrect" style="border-bottom-left-radius: 0px;">
                    <div class="panelpadding">
                        <h1>Consulting</h1>
                        <h2>Affordable Consulting for Computing Solutions</h2>
                        <p>DBZ Technology also specializes in end to end product solutions. Weather your computer needs a quick tune up or you need a web application designed to handle massive amounts of data, DBZ Technology is always there for support. We work with you one on one to ensure that our solution fits your needs perfectly. Let's say that you need a new IT infrastructure as cheaply as possible. No Problem! DBZ Technology can analyze your current situation, make a plan, build new computers for almost 50% off retail, make the switch in under 3 days, and transfer all of your information to the new system.</p>
                        <a href="/Consulting" class="link"><img src="/Resources/Images/Link.svg" alt="Link" /></a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner2.svg" class="panelcorner panelcornerleft" alt="Corner" />
            </div>
            <div class="ribbon" style="height:50px;"></div>
            <div class="ribbon" style="left: 0px; margin-top: 250px;"></div>
            <div class="ribbon horizontal" style=""><div class="block" style="width: 283px;"><img src="Resources/Images/FoldDown.svg" alt="Fold Down" style="margin-left: 83px" /></div><div class="block" style="width: 283px; float: right; margin-top: -200px;"><img src="Resources/Images/FoldLeft.svg" alt="Fold Left" style="margin-right: 83px" /></div></div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <div class="view" id="view4">
            <div class="ribbon" style="left: 0px; height: 50px;"></div>
            <div class="ribbon horizontal"><div class="block" style="width: 283px; background: white;"><img src="Resources/Images/FoldRight.svg" alt="Fold Right" style="margin-left: 83px" /></div></div>
            <div class="buttonholder">
                <a class="button smallbutton" href="/Profile"><p id="profilebutton">Profile</p></a>
                <a class="button smallbutton" href="/Repair"><p id="repairbutton">Computer Repair</p></a>
                <a class="button smallbutton" href="/Apps"><p id="appsbutton">Apps</p></a>
                <a class="button bigbutton" href="mailto:brendan@dbztech.com"><p>@Contact</p></a>
            </div>
            <div class="info" itemscope itemtype="http://schema.org/Organization">
                <h1><span itemprop="name">DBZ Technology</span></h1>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                  <i>Location: <span itemprop="addressLocality">Woodbury</span>,
                  <span itemprop="addressRegion">MN</span></i>
                </div>
                <br />
                <i>Tel: <span itemprop="telephone"><a href="tel:6513469760">(651)-346-9760</a></span></i>
                <br />
                <i>Email: <span itemprop="email"><a href="mailto:brendan@dbztech.com">brendan@dbztech.com</a></span></i>
            </div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <?php include('mobilead.php'); ?>
    </body>
</html>