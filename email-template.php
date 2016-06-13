<?php
	$message = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">
			#outlook a{padding:0}.ExternalClass,.ReadMsgBody{width:100%}.ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td{line-height:100%}a,blockquote,body,li,p,table,td{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}table,td{mso-table-lspace:0;mso-table-rspace:0}img{-ms-interpolation-mode:bicubic}img{border:0;height:auto;line-height:100%;outline:0;text-decoration:none}table{border-collapse:collapse!important}#bodyCell,#bodyTable,body{height:100%!important;margin:0;padding:0;width:100%!important}#bodyCell{padding:20px}#templateContainer{width:600px}#bodyTable,body{background-color:#DEE0E2}#bodyCell{border-top:4px solid #BBB}#templateContainer{border:1px solid #BBB}h1{color:#202020!important;display:block;font-family:Helvetica;font-size:26px;font-style:normal;font-weight:700;line-height:100%;letter-spacing:normal;margin:0 0 10px;text-align:left}h2{color:#404040!important;display:block;font-family:Helvetica;font-size:20px;font-style:normal;font-weight:700;line-height:100%;letter-spacing:normal;margin:0 0 10px;text-align:left}h3{color:#606060!important;display:block;font-family:Helvetica;font-size:16px;font-style:italic;font-weight:400;line-height:100%;letter-spacing:normal;margin:0 0 10px;text-align:left}h4{color:gray!important;display:block;font-family:Helvetica;font-size:14px;font-style:italic;font-weight:400;line-height:100%;letter-spacing:normal;margin:0 0 10px;text-align:left}#templatePreheader{background-color:#ffffff;border-bottom:1px solid #CCC}.preheaderContent{color:gray;font-family:Helvetica;font-size:10px;line-height:125%;text-align:left}.preheaderContent a .yshortcuts,.preheaderContent a:link,.preheaderContent a:visited{color:#606060;font-weight:400;text-decoration:underline}#templateHeader{background-color:#ffffff;border-top:1px solid #FFF;border-bottom:1px solid #CCC}.headerContent{color:#505050;font-family:Helvetica;font-size:20px;font-weight:700;line-height:100%;padding:0;text-align:left;vertical-align:middle}.headerContent a .yshortcuts,.headerContent a:link,.headerContent a:visited{color:#EB4102;font-weight:400;text-decoration:underline}#headerImage{height:auto;max-width:600px}#templateBody{background-color:#ffffff;border-top:1px solid #FFF;border-bottom:1px solid #CCC}.bodyContent{color:#505050;font-family:Helvetica;font-size:14px;line-height:150%;padding:20px;text-align:left}.bodyContent a .yshortcuts,.bodyContent a:link,.bodyContent a:visited{color:#EB4102;font-weight:400;text-decoration:underline}.bodyContent img{display:inline;height:auto;max-width:560px}#templateFooter{background-color:#ffffff;border-top:1px solid #FFF}.footerContent{color:gray;font-family:Helvetica;font-size:10px;line-height:150%;padding:20px;text-align:left}.footerContent a .yshortcuts,.footerContent a span,.footerContent a:link,.footerContent a:visited{color:#606060;font-weight:400;text-decoration:underline}@media only screen and (max-width:480px){a,blockquote,body,li,p,table,td{-webkit-text-size-adjust:none!important}body{width:100%!important;min-width:100%!important}#bodyCell{padding:10px!important}#templateContainer{max-width:600px!important;width:100%!important}h1{font-size:24px!important;line-height:100%!important}h2{font-size:20px!important;line-height:100%!important}h3{font-size:18px!important;line-height:100%!important}h4{font-size:16px!important;line-height:100%!important}#templatePreheader{display:none!important}#headerImage{height:auto!important;max-width:600px!important;width:100%!important}.headerContent{font-size:20px!important;line-height:125%!important}.bodyContent{font-size:18px!important;line-height:125%!important}.footerContent{font-size:14px!important;line-height:115%!important}.footerContent a{display:block!important}}
		</style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            	<tr>
                	<td align="center" valign="top" id="bodyCell">
                    	<!-- BEGIN TEMPLATE // -->
                    	<table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent" mc:edit="body_content">
                                                <h1>Hey {$name},</h1>
                                                <p>You asked me to send you a copy of a recent conversation</p>
                                                {$table}
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
HTML;
