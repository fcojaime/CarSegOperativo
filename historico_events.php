<?php
//BindEvents Method @1-78C284D0
function BindEvents()
{
    global $SO_Fact_Sabana_new;
    global $Panel2;
    global $Panel1;
    global $CCSEvents;
    $SO_Fact_Sabana_new->ds->CCSEvents["AfterExecuteSelect"] = "SO_Fact_Sabana_new_ds_AfterExecuteSelect";
    $Panel2->CCSEvents["BeforeShow"] = "Panel2_BeforeShow";
    $Panel1->CCSEvents["BeforeShow"] = "Panel1_BeforeShow";
    $CCSEvents["BeforeShow"] = "Page_BeforeShow";
    $CCSEvents["AfterInitialize"] = "Page_AfterInitialize";
    $CCSEvents["BeforeOutput"] = "Page_BeforeOutput";
    $CCSEvents["BeforeUnload"] = "Page_BeforeUnload";
}
//End BindEvents Method

//SO_Fact_Sabana_new_ds_AfterExecuteSelect @3-F407E94E
function SO_Fact_Sabana_new_ds_AfterExecuteSelect(& $sender)
{
    $SO_Fact_Sabana_new_ds_AfterExecuteSelect = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $SO_Fact_Sabana_new; //Compatibility
//End SO_Fact_Sabana_new_ds_AfterExecuteSelect

//Custom Code @130-2A29BDB7
// -------------------------
    // Write your own code here.
    //echo $SO_Fact_Sabana_new->DataSource->SQL;
// -------------------------
//End Custom Code

//Close SO_Fact_Sabana_new_ds_AfterExecuteSelect @3-64D4C76E
    return $SO_Fact_Sabana_new_ds_AfterExecuteSelect;
}
//End Close SO_Fact_Sabana_new_ds_AfterExecuteSelect

//Panel2_BeforeShow @53-96696C3D
function Panel2_BeforeShow(& $sender)
{
    $Panel2_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Panel2; //Compatibility
//End Panel2_BeforeShow

//Close Panel2_BeforeShow @53-AE7F9FB3
    return $Panel2_BeforeShow;
}
//End Close Panel2_BeforeShow

//Panel1_BeforeShow @2-AAD8AF72
function Panel1_BeforeShow(& $sender)
{
    $Panel1_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $Panel1; //Compatibility
//End Panel1_BeforeShow

//Panel1UpdatePanel1 Page BeforeShow @76-546243CA
    global $CCSFormFilter;
    if ($CCSFormFilter == "Panel1") {
        $Component->BlockPrefix = "";
        $Component->BlockSuffix = "";
    } else {
        $Component->BlockPrefix = "<div id=\"Panel1\">";
        $Component->BlockSuffix = "</div>";
    }
//End Panel1UpdatePanel1 Page BeforeShow

//Close Panel1_BeforeShow @2-D21EBA68
    return $Panel1_BeforeShow;
}
//End Close Panel1_BeforeShow

//Page_BeforeShow @1-8D70AF7E
function Page_BeforeShow(& $sender)
{
    $Page_BeforeShow = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $historico; //Compatibility
//End Page_BeforeShow

//Custom Code @124-2A29BDB7
// -------------------------
    // Write your own code here.
// -------------------------

global $SO_Fact_Sabana_newSearch;
	if(CCGetSession("capc_cds")=="CDS"){
		$SO_Fact_Sabana_newSearch->s_id_usuario->SetValue(CCGetSession("id_usuario"));
	}
	//poner la fecha de registro y tipo de periodo de carga
	$id_usuario=$SO_Fact_Sabana_newSearch->s_id_usuario->GetValue();
	$id_periodo=$SO_Fact_Sabana_newSearch->s_id_periodo->GetValue();
	   
	// $SO_Fact_Sabana_new->Label1->SetValue(" id prov ".$id_usuario);	
	/*
	if ($id_usuario>0 &&  $id_periodo>0) {		
		$ssql=" SELECT distinct a.fecha_carga,  
		a.num_carga, u.usuario
		FROM SO_Fact_Sabana a,  periodos_hist p, SO_usuario u
		WHERE a.id_periodo=p.id_periodo and u.id_usuario=a.id_usuario and
		a.id_usuario =  $id_usuario
		AND a.id_periodo = $id_periodo	
		and  a.num_carga=(
		SELECT max(b.num_carga)
		FROM SO_Fact_Sabana_new b
		WHERE b.id_usuario = $id_usuario
		AND b.id_periodo =$id_periodo ) ";
	    
	    global $db;
		$db=new clsDBConnCarga;
		$num_max_incidentes=0;
		$n_error=0;
		$fecha_carga="0";
		$db->query($ssql);
		while ($db->next_record() ) {  		         
	        $fecha_carga=$db->f(0);
	        $nom_periodo=$db->f(1);	 	     
	        $num_carga=$db->f(2);	
	        $usuario_carga=$db->f(3);	
		}  
		if ($fecha_carga!="0"){
			$date=date_create($fecha_carga);	
			$fecha_carga=date_format($date, 'd/m/Y H:i:s');	
		    //$SO_Fact_Sabana_new->lb_periodo_fecha_carga2->SetValue($fecha_carga);
		    //$SO_Fact_Sabana_newSearch->lb_nom_periodo->SetValue("<font color=green size=3><strong> <h3>Periodo : $nom_periodo ,  Fecha de Carga : $fecha_carga,  Usuario que cargó : $usuario_carga, Intento número : $num_carga</h3></strong></font>");
		}
	    else {
	    	//$SO_Fact_Sabana_newSearch->lb_nom_periodo->SetValue("");
	    }
	}*/

//End Custom Code

//Panel1UpdatePanel1 Page BeforeShow @76-9F5F0EA1
    global $CCSFormFilter;
    if (CCGetFromGet("FormFilter") == "Panel1") {
        $CCSFormFilter = CCGetFromGet("FormFilter");
        unset($_GET["FormFilter"]);
        if (isset($_GET["IsParamsEncoded"])) unset($_GET["IsParamsEncoded"]);
    }
//End Panel1UpdatePanel1 Page BeforeShow

//Close Page_BeforeShow @1-4BC230CD
    return $Page_BeforeShow;
}
//End Close Page_BeforeShow

//Page_BeforeInitialize @1-37065F96
function Page_BeforeInitialize(& $sender)
{
    $Page_BeforeInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $historico; //Compatibility
//End Page_BeforeInitialize

//Panel1UpdatePanel1 PageBeforeInitialize @76-B4F71FC5
    if (CCGetFromGet("FormFilter") == "Panel1" && CCGetFromGet("IsParamsEncoded") != "true") {
        global $TemplateEncoding, $CCSIsParamsEncoded;
        CCConvertDataArrays("UTF-8", $TemplateEncoding);
        $CCSIsParamsEncoded = true;
    }
//End Panel1UpdatePanel1 PageBeforeInitialize

//Close Page_BeforeInitialize @1-23E6A029
    return $Page_BeforeInitialize;
}
//End Close Page_BeforeInitialize

//Page_AfterInitialize @1-36B2874A
function Page_AfterInitialize(& $sender)
{
    $Page_AfterInitialize = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $historico; //Compatibility
//End Page_AfterInitialize

//Close Page_AfterInitialize @1-379D319D
    return $Page_AfterInitialize;
}
//End Close Page_AfterInitialize

//Page_BeforeOutput @1-DB96F900
function Page_BeforeOutput(& $sender)
{
    $Page_BeforeOutput = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $historico; //Compatibility
//End Page_BeforeOutput

//Panel1UpdatePanel1 PageBeforeOutput @76-0DFF2749
    global $CCSFormFilter, $Tpl, $main_block;
    if ($CCSFormFilter == "Panel1") {
        $main_block = $_SERVER["REQUEST_URI"] . "|" . $Tpl->getvar("/Panel Panel1");
    }
//End Panel1UpdatePanel1 PageBeforeOutput

//Close Page_BeforeOutput @1-8964C188
    return $Page_BeforeOutput;
}
//End Close Page_BeforeOutput

//Page_BeforeUnload @1-F8F18CC7
function Page_BeforeUnload(& $sender)
{
    $Page_BeforeUnload = true;
    $Component = & $sender;
    $Container = & CCGetParentContainer($sender);
    global $historico; //Compatibility
//End Page_BeforeUnload

//Panel1UpdatePanel1 PageBeforeUnload @76-483BFCB6
    global $Redirect, $CCSFormFilter, $CCSIsParamsEncoded;
    if ($Redirect && $CCSFormFilter == "Panel1") {
        if ($CCSIsParamsEncoded) $Redirect = CCAddParam($Redirect, "IsParamsEncoded", "true");
        $Redirect = CCAddParam($Redirect, "FormFilter", $CCSFormFilter);
    }
//End Panel1UpdatePanel1 PageBeforeUnload

//Close Page_BeforeUnload @1-CFAEC742
    return $Page_BeforeUnload;
}
//End Close Page_BeforeUnload


?>
