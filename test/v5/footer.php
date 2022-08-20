
    <footer id="colophon" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
        <div class="footer-b">
		<div class="container">
			<div class="site-info">            
            <span class="copyright">&copy; Copyright 2022 <a href="https://omegasystem.biz/">OMEGA System</a>. Tous droits réservés. </span>Digital Download | Développé par <a href="https://rarathemes.com/" rel="nofollow" target="_blank">Rara Theme</a>. Propulsé par <a href="https://fr.wordpress.org/" target="_blank">WordPress</a>.               
            </div>
                <ul class="social-networks">
                <li>
                <a href="http://twitter.com" target="_blank" rel="nofollow noopener">
                    <i class="fab fa-twitter-square"></i>
                </a>
            </li>    	   
                        <li>
                <a href="http://facebook.com" target="_blank" rel="nofollow noopener">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>    	   
                        <li>
                <a href="http://linkedin.com" target="_blank" rel="nofollow noopener">
                    <i class="linkedin"></i>
                </a>
            </li>    	   
            	</ul>
        		</div>
	</div>
        </footer><!-- #colophon -->
            </div><!-- #acc-content -->
    </div><!-- #page -->
    <script type="text/javascript">
        jQuery(function(){
        var arrLiveStats=[];
        var WSM_PREFIX="wsm";
		
        jQuery(".if-js-closed").removeClass("if-js-closed").addClass("closed");
                var wsmFnSiteLiveStats=function(){
                           jQuery.ajax({
                               type: "POST",
                               url: wsm_ajaxObject.ajax_url,
                               data: { action: 'liveSiteStats', requests: JSON.stringify(arrLiveStats), r: Math.random() }
                           }).done(function( strResponse ) {
                                if(strResponse!="No"){
                                    arrResponse=JSON.parse(strResponse);
                                    jQuery.each(arrResponse, function(key,value){
                                    
                                        $element= document.getElementById(key);
                                        oldValue=parseInt($element.getAttribute("data-value").replace(/,/g, ""));
                                        diff=parseInt(value.replace(/,/g, ""))-oldValue;
                                        $class="";
                                        
                                        if(diff>=0){
                                            diff="+"+diff;
                                        }else{
                                            $class="wmcRedBack";
                                        }

                                        $element.setAttribute("data-value",value);
                                        $element.innerHTML=diff;
                                        jQuery("#"+key).addClass($class).show().siblings(".wsmH2Number").text(value);
                                        
                                        if(key=="SiteUserOnline")
                                        {
                                            var onlineUserCnt = arrResponse.wsmSiteUserOnline;
                                            if(jQuery("#wsmSiteUserOnline").length)
                                            {
                                                jQuery("#wsmSiteUserOnline").attr("data-value",onlineUserCnt);   jQuery("#wsmSiteUserOnline").next(".wsmH2Number").html("<a target=\"_blank\" href=\"?page=wsm_traffic&subPage=UsersOnline&subTab=summary\">"+onlineUserCnt+"</a>");
                                            }
                                        }
                                    });
                                    setTimeout(function() {
                                        jQuery.each(arrResponse, function(key,value){
                                            jQuery("#"+key).removeClass("wmcRedBack").hide();
                                        });
                                    }, 1500);
                                }
                           });
                       }
                       if(arrLiveStats.length>0){
                          setInterval(wsmFnSiteLiveStats, 10000);
                       }});
        </script><script type='text/javascript' id='ce4wp_form_submit-js-extra'>
/* <![CDATA[ */
var ce4wp_form_submit_data = {"siteUrl":"https:\/\/omegasystem.biz","url":"https:\/\/omegasystem.biz\/wp-admin\/admin-ajax.php","nonce":"33d82c05bc","listNonce":"1145f7029e","activatedNonce":"7b6ab17d97"};
/* ]]> */
</script>
<script type='text/javascript' src='https://omegasystem.biz/wp-content/plugins/creative-mail-by-constant-contact/assets/js/block/submit.js?ver=1653861452' id='ce4wp_form_submit-js'></script>
<script type='text/javascript' src='https://omegasystem.biz/wp-content/plugins/jetpack/_inc/build/photon/photon.min.js?ver=20191001' id='jetpack-photon-js'></script>
<script type='text/javascript' src='https://omegasystem.biz/wp-content/themes/digital-download/js/all.min.js?ver=6.1.1' id='all-js'></script>
<script type='text/javascript' src='https://omegasystem.biz/wp-content/themes/digital-download/js/v4-shims.min.js?ver=6.1.1' id='v4-shims-js'></script>
<script type='text/javascript' src='https://omegasystem.biz/wp-content/themes/digital-download/js/modal-accessibility.min.js?ver=1.0.9' id='digital-download-modal-accessibility-js'></script>
<script type='text/javascript' id='digital-download-js-extra'>
/* <![CDATA[ */
var digital_download = {"is_rtc_active":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://omegasystem.biz/wp-content/themes/digital-download/js/custom.min.js?ver=1.0.9' id='digital-download-js'></script>
<script src='https://stats.wp.com/e-202233.js' defer></script>
<script>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:11.2',blog:'207447858',post:'113',tz:'1',srv:'omegasystem.biz'} ]);
	_stq.push([ 'clickTrackerInit', '207447858', '113' ]);
</script>

</body>
</html>
