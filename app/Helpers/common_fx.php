<?php
    function usdToBdt($usd){
        return $usd * 117.5;
    }

    function bdtToUsd($bdt){
        return $bdt / 117.5;
    }

    function domainChecker($domain){
        if (gethostbyname($domain) != $domain) {
            return "<h3 class='fail'>Domain Already Registered!</h3>";
        } else {
            return "<h3 class='success'>Hurry, your domain is available!, you can register it.</h3>";
        }
    }
?>