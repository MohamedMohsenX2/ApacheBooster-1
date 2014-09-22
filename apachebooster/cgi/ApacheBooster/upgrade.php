<?php
$RVERSION = `/usr/bin/curl -s https://raw.githubusercontent.com/itseasy21/ApacheBooster/master/version.txt`;
$LVERSION = `/bin/cat /usr/local/cpanel/whostmgr/cgi/ApacheBooster/version.txt`;
?>
<!DOCTYPE html>
<html>
<head>
<link href="styleu.css" rel="stylesheet" type="text/css" media="screen" />
<meta charset="utf-8" />
</head>
<body>
<div id="contentMain" class="contentPadding">
<?php
                          if ($LVERSION==$RVERSION){
               echo "<div class=\"success\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are using the Latest version of ApacheBooster </div>";
                          
                          }else{
echo "<div class=\"error\">
                                Version $RVERSION is now available. Please refer the below docs to upgrade.
                          </div>";
						  }
                          ?>


        <div id="main">
        <div id="clearzone2"></div>

        <div id="mainindexcontect">
            <div id="clearzone1"></div>
            <div id="welcomemessage">
        <p><pre>Please upgrade the ApacheBooster package only from Terminal. 
You can simply upgrade it by running  predefined script: /scripts/updateapachebooster
For Support please contact at <a href="https://github.com/itseasy21/" target="_blank">Github</a>
        </div>
        </div>

        </div>

<?php 
include('footer.php');
?>
    </div>

