<?php

/**
 * Google Analytics Class
 * Class to encapsulate Google Analytics Scripts in various websites.
 * @author Rolando Moreno <developer@rolandomoreno.com>
 * @copyright (c) 2015, rolandomoreno.com
 * @version 1.0
 */
class Analytics {

    private $analyticScript = "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57546949-4', 'auto');
  ga('send', 'pageview');

</script>
                        ";
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
