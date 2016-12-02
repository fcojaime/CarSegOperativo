<?php
//BindEvents Method @1-D40060DD
function BindEvents()
{
    global $CCSEvents;
    $CCSEvents["BeforeShow"] = "Page_BeforeShow";
}
//End BindEvents Method

//Page_BeforeShow @1-203434AB
function Page_BeforeShow(& $sender)
{
    $Page_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $rep_seg_operativo; //Compatibility
//End Page_BeforeShow

//Custom Code @9-2A29BDB7
// -------------------------
    
	$ldaprdn  = 'sharepoint@capcmc.itera';     // ldap rdn or dn
	$ldappass = 'itera.2012';  // associated password
	// connect to ldap server
	$ldapconn = ldap_connect("capcmc.itera")
    or die("No es posible conectarse con el servidor de dominio.");

	if ($ldapconn) {
    	// binding to ldap server
    	$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
    	// verify binding
    	if ($ldapbind) {
    		
    	} else {
        	echo "No es posible autenticarse con el AD...";
    	}
	}


			$REPORT = "/AnalyticsReports/SeguimientoOperativo/00_VistaPrincipal.rdl";
		                                     
					global $lReportContent;
					//$lReportContent->SetValue("<div style='overflow:auto; width:1000px; height:700px' >" . $result_html . "</div>");
					$lReportContent->SetValue("<center><iframe  id='rep_metri'   width='100%' height='950px' scrolling='no'  frameborder=0 style='BACKGROUND-COLOR: rgb(242,242,243)' src=VerReporteVistaLogin.aspx?urlreporte=" . $REPORT . "&fullscreen=1></iframe></center>");
    
// -------------------------
//End Custom Code

//Close Page_BeforeShow @1-4BC230CD
    return $Page_BeforeShow;
}
//End Close Page_BeforeShow


?>
