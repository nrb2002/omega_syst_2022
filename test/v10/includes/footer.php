            <div class="d-flex flex-wrap justify-content-between align-items-center p-4 mt-4 mt-md-4 mt-sm-2 border-top bg-dark mb-0" >                
                <div class="col col-md d-flex align-items-center">
                    <a href="/" class="me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <span class="mb-0 mb-md-0 text-muted">&copy; Copyright 2022 <a href="https://omegasystem.biz/"></a>Tous droits réservés.</span>
                </div>
                <div class="col col-md-3">                    
                    <ul class="social-networks nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li><a href="http://twitter.com" target="_blank" rel="nofollow noopener"><i class="fab fa-twitter-square"></i></a></li>    	   
                        <li><a href="http://facebook.com" target="_blank" rel="nofollow noopener"><i class="fab fa-facebook ml-2"></i></a></li>    	   
                        <li><a href="http://linkedin.com" target="_blank" rel="nofollow noopener"><i class="linkedin"></i></a></li>    	   
                    </ul>
                </div>
            </div>

            <div id="colophon" class="site-footer d-flex flex-wrap justify-content-between py-3 border-top bg-dark mb-0" itemscope itemtype="https://schema.org/WPFooter">
                <div class="footer-b">
                    <div class="container">
                        <div class="site-info me-2 text-muted text-decoration-none lh-1">            
                            Développé par <a href="https://congoempire.org" target="_blank">Congo Empire</a>.               
                        </div>
                        
                    </div>
                </div>
            </div> 

            


        </div><!-- #acc-content -->
    </div><!-- #page -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="script/Js/script.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>

    <!--Scripts related to table pagination-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


    <!--Script for filters-->
    <script>

        $(document).ready(function(){
            //Filter via the search box
            $("#searchOffer1").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#searchOffer2").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable2 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            //Filter via the select element
            $("#selectStatus1").on("change", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#selectStatus2").on("change", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable2 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            }); 

            //Table pagination                
            $('#myTable').DataTable( {
                responsive: true,
                "pageLength": 10
            } );
        });

        
    
    </script>
    <!--Script for filters-->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
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
