<?php

/**
 * Google Analytics Class
 * Class to encapsulate Google Analytics Scripts in various websites.
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class Analytics {

    private $analyticScript = "<!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-5ZPC5M\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5ZPC5M');</script>
<!-- End Google Tag Manager -->";
    private $outboundClickScript = "<script>
/**
* Function that tracks a click on an outbound link in Google Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label.
*/
var trackOutboundLink = function(url) {
   ga('send', 'event', 'homeLoansSouthFlorida', 'click', url, {'hitCallback':
     function () {
     document.location = url;
     }
   });
}
</script>
";

    /**
     * 
     * @return type
     */
    public function getAnalyticScript() {
        return $this->analyticScript;
    }

    /**
     * 
     * @return type
     */
    public function getOutboundClickScript() {
        return $this->outboundClickScript;
    }

}
