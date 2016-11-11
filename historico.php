<?php
//Include Common Files @1-B239DBE4
define("RelativePath", ".");
define("PathToCurrentPage", "/");
define("FileName", "historico.php");
include_once(RelativePath . "/Common.php");
include_once(RelativePath . "/Template.php");
include_once(RelativePath . "/Sorter.php");
include_once(RelativePath . "/Navigator.php");
//End Include Common Files

class clsGridSO_Fact_Sabana_new { //SO_Fact_Sabana_new class @3-FA572395

//Variables @3-B3B132AE

    // Public variables
    public $ComponentType = "Grid";
    public $ComponentName;
    public $Visible;
    public $Errors;
    public $ErrorBlock;
    public $ds;
    public $DataSource;
    public $PageSize;
    public $IsEmpty;
    public $ForceIteration = false;
    public $HasRecord = false;
    public $SorterName = "";
    public $SorterDirection = "";
    public $PageNumber;
    public $RowNumber;
    public $ControlsVisible = array();

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";
    public $Attributes;

    // Grid Controls
    public $StaticControls;
    public $RowControls;
    public $Sorter_ID_Proyecto;
    public $Sorter_Administracion;
    public $Sorter_Servicio_Negocio;
    public $Sorter_Nombre_Rape;
    public $Sorter_Nombre_AS;
    public $Sorter_Fabrica_Software;
    public $Sorter_Origen_requerimiento;
    public $Sorter_Fase_Real;
    public $Sorter_Semaforo_Fase_Real;
    public $Sorter_Dependencia;
    public $Sorter_Area_Responsable_Dependencia;
    public $Sorter_Responsable_Dependencia;
    public $Sorter_Comentarios_AS;
//End Variables

//Class_Initialize Event @3-5D88B34F
    function clsGridSO_Fact_Sabana_new($RelativePath, & $Parent)
    {
        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->ComponentName = "SO_Fact_Sabana_new";
        $this->Visible = True;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Grid SO_Fact_Sabana_new";
        $this->Attributes = new clsAttributes($this->ComponentName . ":");
        $this->DataSource = new clsSO_Fact_Sabana_newDataSource($this);
        $this->ds = & $this->DataSource;
        $this->PageSize = CCGetParam($this->ComponentName . "PageSize", "");
        if(!is_numeric($this->PageSize) || !strlen($this->PageSize))
            $this->PageSize = 20;
        else
            $this->PageSize = intval($this->PageSize);
        if ($this->PageSize > 100)
            $this->PageSize = 100;
        if($this->PageSize == 0)
            $this->Errors->addError("<p>Form: Grid " . $this->ComponentName . "<BR>Error: (CCS06) Invalid page size.</p>");
        $this->PageNumber = intval(CCGetParam($this->ComponentName . "Page", 1));
        if ($this->PageNumber <= 0) $this->PageNumber = 1;
        $this->SorterName = CCGetParam("SO_Fact_Sabana_newOrder", "");
        $this->SorterDirection = CCGetParam("SO_Fact_Sabana_newDir", "");

        $this->Administracion = new clsControl(ccsLabel, "Administracion", "Administracion", ccsText, "", CCGetRequestParam("Administracion", ccsGet, NULL), $this);
        $this->Servicio_Negocio = new clsControl(ccsLabel, "Servicio_Negocio", "Servicio_Negocio", ccsText, "", CCGetRequestParam("Servicio_Negocio", ccsGet, NULL), $this);
        $this->Nombre_Rape = new clsControl(ccsLabel, "Nombre_Rape", "Nombre_Rape", ccsText, "", CCGetRequestParam("Nombre_Rape", ccsGet, NULL), $this);
        $this->Nombre_AS = new clsControl(ccsLabel, "Nombre_AS", "Nombre_AS", ccsText, "", CCGetRequestParam("Nombre_AS", ccsGet, NULL), $this);
        $this->Fabrica_Software = new clsControl(ccsLabel, "Fabrica_Software", "Fabrica_Software", ccsText, "", CCGetRequestParam("Fabrica_Software", ccsGet, NULL), $this);
        $this->Origen_requerimiento = new clsControl(ccsLabel, "Origen_requerimiento", "Origen_requerimiento", ccsText, "", CCGetRequestParam("Origen_requerimiento", ccsGet, NULL), $this);
        $this->Fase_Real = new clsControl(ccsLabel, "Fase_Real", "Fase_Real", ccsText, "", CCGetRequestParam("Fase_Real", ccsGet, NULL), $this);
        $this->Semaforo_Fase_Real = new clsControl(ccsLabel, "Semaforo_Fase_Real", "Semaforo_Fase_Real", ccsText, "", CCGetRequestParam("Semaforo_Fase_Real", ccsGet, NULL), $this);
        $this->Dependencia = new clsControl(ccsLabel, "Dependencia", "Dependencia", ccsText, "", CCGetRequestParam("Dependencia", ccsGet, NULL), $this);
        $this->Area_Responsable_Dependencia = new clsControl(ccsLabel, "Area_Responsable_Dependencia", "Area_Responsable_Dependencia", ccsText, "", CCGetRequestParam("Area_Responsable_Dependencia", ccsGet, NULL), $this);
        $this->Responsable_Dependencia = new clsControl(ccsLabel, "Responsable_Dependencia", "Responsable_Dependencia", ccsText, "", CCGetRequestParam("Responsable_Dependencia", ccsGet, NULL), $this);
        $this->Comentarios_AS = new clsControl(ccsLabel, "Comentarios_AS", "Comentarios_AS", ccsText, "", CCGetRequestParam("Comentarios_AS", ccsGet, NULL), $this);
        $this->ID_Proyecto = new clsControl(ccsLabel, "ID_Proyecto", "ID_Proyecto", ccsInteger, "", CCGetRequestParam("ID_Proyecto", ccsGet, NULL), $this);
        $this->SO_Fact_Sabana_new_Insert = new clsControl(ccsLink, "SO_Fact_Sabana_new_Insert", "SO_Fact_Sabana_new_Insert", ccsText, "", CCGetRequestParam("SO_Fact_Sabana_new_Insert", ccsGet, NULL), $this);
        $this->SO_Fact_Sabana_new_Insert->Parameters = CCGetQueryString("QueryString", array("ID_Proyecto", "ccsForm"));
        $this->SO_Fact_Sabana_new_Insert->Page = "historico.php";
        $this->Sorter_ID_Proyecto = new clsSorter($this->ComponentName, "Sorter_ID_Proyecto", $FileName, $this);
        $this->Sorter_Administracion = new clsSorter($this->ComponentName, "Sorter_Administracion", $FileName, $this);
        $this->Sorter_Servicio_Negocio = new clsSorter($this->ComponentName, "Sorter_Servicio_Negocio", $FileName, $this);
        $this->Sorter_Nombre_Rape = new clsSorter($this->ComponentName, "Sorter_Nombre_Rape", $FileName, $this);
        $this->Sorter_Nombre_AS = new clsSorter($this->ComponentName, "Sorter_Nombre_AS", $FileName, $this);
        $this->Sorter_Fabrica_Software = new clsSorter($this->ComponentName, "Sorter_Fabrica_Software", $FileName, $this);
        $this->Sorter_Origen_requerimiento = new clsSorter($this->ComponentName, "Sorter_Origen_requerimiento", $FileName, $this);
        $this->Sorter_Fase_Real = new clsSorter($this->ComponentName, "Sorter_Fase_Real", $FileName, $this);
        $this->Sorter_Semaforo_Fase_Real = new clsSorter($this->ComponentName, "Sorter_Semaforo_Fase_Real", $FileName, $this);
        $this->Sorter_Dependencia = new clsSorter($this->ComponentName, "Sorter_Dependencia", $FileName, $this);
        $this->Sorter_Area_Responsable_Dependencia = new clsSorter($this->ComponentName, "Sorter_Area_Responsable_Dependencia", $FileName, $this);
        $this->Sorter_Responsable_Dependencia = new clsSorter($this->ComponentName, "Sorter_Responsable_Dependencia", $FileName, $this);
        $this->Sorter_Comentarios_AS = new clsSorter($this->ComponentName, "Sorter_Comentarios_AS", $FileName, $this);
        $this->Navigator = new clsNavigator($this->ComponentName, "Navigator", $FileName, 10, tpCentered, $this);
        $this->Navigator->PageSizes = array("1", "5", "10", "25", "50");
    }
//End Class_Initialize Event

//Initialize Method @3-90E704C5
    function Initialize()
    {
        if(!$this->Visible) return;

        $this->DataSource->PageSize = & $this->PageSize;
        $this->DataSource->AbsolutePage = & $this->PageNumber;
        $this->DataSource->SetOrder($this->SorterName, $this->SorterDirection);
    }
//End Initialize Method

//Show Method @3-7C78164F
    function Show()
    {
        $Tpl = CCGetTemplate($this);
        global $CCSLocales;
        if(!$this->Visible) return;

        $this->RowNumber = 0;

        $this->DataSource->Parameters["urls_id_usuario"] = CCGetFromGet("s_id_usuario", NULL);
        $this->DataSource->Parameters["urls_id_periodo"] = CCGetFromGet("s_id_periodo", NULL);

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $this->DataSource->Prepare();
        $this->DataSource->Open();
        $this->HasRecord = $this->DataSource->has_next_record();
        $this->IsEmpty = ! $this->HasRecord;
        $this->Attributes->Show();

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        if(!$this->Visible) return;

        $GridBlock = "Grid " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $GridBlock;


        if (!$this->IsEmpty) {
            $this->ControlsVisible["Administracion"] = $this->Administracion->Visible;
            $this->ControlsVisible["Servicio_Negocio"] = $this->Servicio_Negocio->Visible;
            $this->ControlsVisible["Nombre_Rape"] = $this->Nombre_Rape->Visible;
            $this->ControlsVisible["Nombre_AS"] = $this->Nombre_AS->Visible;
            $this->ControlsVisible["Fabrica_Software"] = $this->Fabrica_Software->Visible;
            $this->ControlsVisible["Origen_requerimiento"] = $this->Origen_requerimiento->Visible;
            $this->ControlsVisible["Fase_Real"] = $this->Fase_Real->Visible;
            $this->ControlsVisible["Semaforo_Fase_Real"] = $this->Semaforo_Fase_Real->Visible;
            $this->ControlsVisible["Dependencia"] = $this->Dependencia->Visible;
            $this->ControlsVisible["Area_Responsable_Dependencia"] = $this->Area_Responsable_Dependencia->Visible;
            $this->ControlsVisible["Responsable_Dependencia"] = $this->Responsable_Dependencia->Visible;
            $this->ControlsVisible["Comentarios_AS"] = $this->Comentarios_AS->Visible;
            $this->ControlsVisible["ID_Proyecto"] = $this->ID_Proyecto->Visible;
            while ($this->ForceIteration || (($this->RowNumber < $this->PageSize) &&  ($this->HasRecord = $this->DataSource->has_next_record()))) {
                $this->RowNumber++;
                if ($this->HasRecord) {
                    $this->DataSource->next_record();
                    $this->DataSource->SetValues();
                }
                $Tpl->block_path = $ParentPath . "/" . $GridBlock . "/Row";
                $this->Administracion->SetValue($this->DataSource->Administracion->GetValue());
                $this->Servicio_Negocio->SetValue($this->DataSource->Servicio_Negocio->GetValue());
                $this->Nombre_Rape->SetValue($this->DataSource->Nombre_Rape->GetValue());
                $this->Nombre_AS->SetValue($this->DataSource->Nombre_AS->GetValue());
                $this->Fabrica_Software->SetValue($this->DataSource->Fabrica_Software->GetValue());
                $this->Origen_requerimiento->SetValue($this->DataSource->Origen_requerimiento->GetValue());
                $this->Fase_Real->SetValue($this->DataSource->Fase_Real->GetValue());
                $this->Semaforo_Fase_Real->SetValue($this->DataSource->Semaforo_Fase_Real->GetValue());
                $this->Dependencia->SetValue($this->DataSource->Dependencia->GetValue());
                $this->Area_Responsable_Dependencia->SetValue($this->DataSource->Area_Responsable_Dependencia->GetValue());
                $this->Responsable_Dependencia->SetValue($this->DataSource->Responsable_Dependencia->GetValue());
                $this->Comentarios_AS->SetValue($this->DataSource->Comentarios_AS->GetValue());
                $this->ID_Proyecto->SetValue($this->DataSource->ID_Proyecto->GetValue());
                $this->Attributes->SetValue("rowNumber", $this->RowNumber);
                $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShowRow", $this);
                $this->Attributes->Show();
                $this->Administracion->Show();
                $this->Servicio_Negocio->Show();
                $this->Nombre_Rape->Show();
                $this->Nombre_AS->Show();
                $this->Fabrica_Software->Show();
                $this->Origen_requerimiento->Show();
                $this->Fase_Real->Show();
                $this->Semaforo_Fase_Real->Show();
                $this->Dependencia->Show();
                $this->Area_Responsable_Dependencia->Show();
                $this->Responsable_Dependencia->Show();
                $this->Comentarios_AS->Show();
                $this->ID_Proyecto->Show();
                $Tpl->block_path = $ParentPath . "/" . $GridBlock;
                $Tpl->parse("Row", true);
            }
        }
        else { // Show NoRecords block if no records are found
            $this->Attributes->Show();
            $Tpl->parse("NoRecords", false);
        }

        $errors = $this->GetErrors();
        if(strlen($errors))
        {
            $Tpl->replaceblock("", $errors);
            $Tpl->block_path = $ParentPath;
            return;
        }
        $this->Navigator->PageNumber = $this->DataSource->AbsolutePage;
        $this->Navigator->PageSize = $this->PageSize;
        if ($this->DataSource->RecordsCount == "CCS not counted")
            $this->Navigator->TotalPages = $this->DataSource->AbsolutePage + ($this->DataSource->next_record() ? 1 : 0);
        else
            $this->Navigator->TotalPages = $this->DataSource->PageCount();
        if (($this->Navigator->TotalPages <= 1 && $this->Navigator->PageNumber == 1) || $this->Navigator->PageSize == "") {
            $this->Navigator->Visible = false;
        }
        $this->SO_Fact_Sabana_new_Insert->Show();
        $this->Sorter_ID_Proyecto->Show();
        $this->Sorter_Administracion->Show();
        $this->Sorter_Servicio_Negocio->Show();
        $this->Sorter_Nombre_Rape->Show();
        $this->Sorter_Nombre_AS->Show();
        $this->Sorter_Fabrica_Software->Show();
        $this->Sorter_Origen_requerimiento->Show();
        $this->Sorter_Fase_Real->Show();
        $this->Sorter_Semaforo_Fase_Real->Show();
        $this->Sorter_Dependencia->Show();
        $this->Sorter_Area_Responsable_Dependencia->Show();
        $this->Sorter_Responsable_Dependencia->Show();
        $this->Sorter_Comentarios_AS->Show();
        $this->Navigator->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

//GetErrors Method @3-00C92709
    function GetErrors()
    {
        $errors = "";
        $errors = ComposeStrings($errors, $this->Administracion->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Servicio_Negocio->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Nombre_Rape->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Nombre_AS->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Fabrica_Software->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Origen_requerimiento->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Fase_Real->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Semaforo_Fase_Real->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Dependencia->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Area_Responsable_Dependencia->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Responsable_Dependencia->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Comentarios_AS->Errors->ToString());
        $errors = ComposeStrings($errors, $this->ID_Proyecto->Errors->ToString());
        $errors = ComposeStrings($errors, $this->Errors->ToString());
        $errors = ComposeStrings($errors, $this->DataSource->Errors->ToString());
        return $errors;
    }
//End GetErrors Method

} //End SO_Fact_Sabana_new Class @3-FCB6E20C

class clsSO_Fact_Sabana_newDataSource extends clsDBConnCarga {  //SO_Fact_Sabana_newDataSource Class @3-50DD0839

//DataSource Variables @3-3F98D2A7
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $CountSQL;
    public $wp;


    // Datasource fields
    public $Administracion;
    public $Servicio_Negocio;
    public $Nombre_Rape;
    public $Nombre_AS;
    public $Fabrica_Software;
    public $Origen_requerimiento;
    public $Fase_Real;
    public $Semaforo_Fase_Real;
    public $Dependencia;
    public $Area_Responsable_Dependencia;
    public $Responsable_Dependencia;
    public $Comentarios_AS;
    public $ID_Proyecto;
//End DataSource Variables

//DataSourceClass_Initialize Event @3-3B4112DE
    function clsSO_Fact_Sabana_newDataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Grid SO_Fact_Sabana_new";
        $this->Initialize();
        $this->Administracion = new clsField("Administracion", ccsText, "");
        
        $this->Servicio_Negocio = new clsField("Servicio_Negocio", ccsText, "");
        
        $this->Nombre_Rape = new clsField("Nombre_Rape", ccsText, "");
        
        $this->Nombre_AS = new clsField("Nombre_AS", ccsText, "");
        
        $this->Fabrica_Software = new clsField("Fabrica_Software", ccsText, "");
        
        $this->Origen_requerimiento = new clsField("Origen_requerimiento", ccsText, "");
        
        $this->Fase_Real = new clsField("Fase_Real", ccsText, "");
        
        $this->Semaforo_Fase_Real = new clsField("Semaforo_Fase_Real", ccsText, "");
        
        $this->Dependencia = new clsField("Dependencia", ccsText, "");
        
        $this->Area_Responsable_Dependencia = new clsField("Area_Responsable_Dependencia", ccsText, "");
        
        $this->Responsable_Dependencia = new clsField("Responsable_Dependencia", ccsText, "");
        
        $this->Comentarios_AS = new clsField("Comentarios_AS", ccsText, "");
        
        $this->ID_Proyecto = new clsField("ID_Proyecto", ccsInteger, "");
        

    }
//End DataSourceClass_Initialize Event

//SetOrder Method @3-13497B59
    function SetOrder($SorterName, $SorterDirection)
    {
        $this->Order = "";
        $this->Order = CCGetOrder($this->Order, $SorterName, $SorterDirection, 
            array("Sorter_ID_Proyecto" => array("ID_Proyecto", ""), 
            "Sorter_Administracion" => array("Administracion", ""), 
            "Sorter_Servicio_Negocio" => array("Servicio_Negocio", ""), 
            "Sorter_Nombre_Rape" => array("Nombre_Rape", ""), 
            "Sorter_Nombre_AS" => array("Nombre_AS", ""), 
            "Sorter_Fabrica_Software" => array("Fabrica_Software", ""), 
            "Sorter_Origen_requerimiento" => array("Origen_requerimiento", ""), 
            "Sorter_Fase_Real" => array("Fase_Real", ""), 
            "Sorter_Semaforo_Fase_Real" => array("Semaforo_Fase_Real", ""), 
            "Sorter_Dependencia" => array("Dependencia", ""), 
            "Sorter_Area_Responsable_Dependencia" => array("Area_Responsable_Dependencia", ""), 
            "Sorter_Responsable_Dependencia" => array("Responsable_Dependencia", ""), 
            "Sorter_Comentarios_AS" => array("Comentarios_AS", "")));
    }
//End SetOrder Method

//Prepare Method @3-292602F6
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urls_id_usuario", ccsInteger, "", "", $this->Parameters["urls_id_usuario"], 0, false);
        $this->wp->AddParameter("2", "urls_id_periodo", ccsInteger, "", "", $this->Parameters["urls_id_periodo"], 0, false);
    }
//End Prepare Method

//Open Method @3-AD128986
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->CountSQL = "SELECT COUNT(*) FROM (SELECT [Fecha_Corte]\n" .
        "      ,[id_periodo]\n" .
        "      ,[id_usuario]\n" .
        "      ,[num_carga]\n" .
        "      ,[num_renglon]\n" .
        "      ,[ID_Proyecto]\n" .
        "      ,[Administracion]\n" .
        "      ,[Servicio_Negocio]\n" .
        "      ,[Nombre_Rape]\n" .
        "      ,[Nombre_AS]\n" .
        "      ,[Fabrica_Software]\n" .
        "      ,[Origen_requerimiento]\n" .
        "      ,[Fase_Real]\n" .
        "      ,[Semaforo_Fase_Real]\n" .
        "      ,[Dependencia]\n" .
        "      ,[Area_Responsable_Dependencia]\n" .
        "      ,[Responsable_Dependencia]\n" .
        "      ,[Comentarios_AS]\n" .
        "FROM SO_Fact_Sabana\n" .
        "where  id_periodo=" . $this->SQLValue($this->wp->GetDBValue("2"), ccsInteger) . "\n" .
        "     and id_usuario=" . $this->SQLValue($this->wp->GetDBValue("1"), ccsInteger) . ") cnt";
        $this->SQL = "SELECT [Fecha_Corte]\n" .
        "      ,[id_periodo]\n" .
        "      ,[id_usuario]\n" .
        "      ,[num_carga]\n" .
        "      ,[num_renglon]\n" .
        "      ,[ID_Proyecto]\n" .
        "      ,[Administracion]\n" .
        "      ,[Servicio_Negocio]\n" .
        "      ,[Nombre_Rape]\n" .
        "      ,[Nombre_AS]\n" .
        "      ,[Fabrica_Software]\n" .
        "      ,[Origen_requerimiento]\n" .
        "      ,[Fase_Real]\n" .
        "      ,[Semaforo_Fase_Real]\n" .
        "      ,[Dependencia]\n" .
        "      ,[Area_Responsable_Dependencia]\n" .
        "      ,[Responsable_Dependencia]\n" .
        "      ,[Comentarios_AS]\n" .
        "FROM SO_Fact_Sabana\n" .
        "where  id_periodo=" . $this->SQLValue($this->wp->GetDBValue("2"), ccsInteger) . "\n" .
        "     and id_usuario=" . $this->SQLValue($this->wp->GetDBValue("1"), ccsInteger) . "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        if ($this->CountSQL) 
            $this->RecordsCount = CCGetDBValue(CCBuildSQL($this->CountSQL, $this->Where, ""), $this);
        else
            $this->RecordsCount = "CCS not counted";
        $this->query($this->OptimizeSQL(CCBuildSQL($this->SQL, $this->Where, $this->Order)));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
        $this->MoveToPage($this->AbsolutePage);
    }
//End Open Method

//SetValues Method @3-3F4E9D49
    function SetValues()
    {
        $this->Administracion->SetDBValue($this->f("Administracion"));
        $this->Servicio_Negocio->SetDBValue($this->f("Servicio_Negocio"));
        $this->Nombre_Rape->SetDBValue($this->f("Nombre_Rape"));
        $this->Nombre_AS->SetDBValue($this->f("Nombre_AS"));
        $this->Fabrica_Software->SetDBValue($this->f("Fabrica_Software"));
        $this->Origen_requerimiento->SetDBValue($this->f("Origen_requerimiento"));
        $this->Fase_Real->SetDBValue($this->f("Fase_Real"));
        $this->Semaforo_Fase_Real->SetDBValue($this->f("Semaforo_Fase_Real"));
        $this->Dependencia->SetDBValue($this->f("Dependencia"));
        $this->Area_Responsable_Dependencia->SetDBValue($this->f("Area_Responsable_Dependencia"));
        $this->Responsable_Dependencia->SetDBValue($this->f("Responsable_Dependencia"));
        $this->Comentarios_AS->SetDBValue($this->f("Comentarios_AS"));
        $this->ID_Proyecto->SetDBValue(trim($this->f("ID_Proyecto")));
    }
//End SetValues Method

} //End SO_Fact_Sabana_newDataSource Class @3-FCB6E20C

class clsRecordSO_Fact_Sabana_newSearch { //SO_Fact_Sabana_newSearch Class @49-A3587B06

//Variables @49-9E315808

    // Public variables
    public $ComponentType = "Record";
    public $ComponentName;
    public $Parent;
    public $HTMLFormAction;
    public $PressedButton;
    public $Errors;
    public $ErrorBlock;
    public $FormSubmitted;
    public $FormEnctype;
    public $Visible;
    public $IsEmpty;

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";

    public $InsertAllowed = false;
    public $UpdateAllowed = false;
    public $DeleteAllowed = false;
    public $ReadAllowed   = false;
    public $EditMode      = false;
    public $ds;
    public $DataSource;
    public $ValidatingControls;
    public $Controls;
    public $Attributes;

    // Class variables
//End Variables

//Class_Initialize Event @49-1E78A6D3
    function clsRecordSO_Fact_Sabana_newSearch($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record SO_Fact_Sabana_newSearch/Error";
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "SO_Fact_Sabana_newSearch";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->Button_DoSearch = new clsButton("Button_DoSearch", $Method, $this);
            $this->s_id_usuario = new clsControl(ccsListBox, "s_id_usuario", "usuario", ccsInteger, "", CCGetRequestParam("s_id_usuario", $Method, NULL), $this);
            $this->s_id_usuario->DSType = dsSQL;
            $this->s_id_usuario->DataSource = new clsDBConnCarga();
            $this->s_id_usuario->ds = & $this->s_id_usuario->DataSource;
            list($this->s_id_usuario->BoundColumn, $this->s_id_usuario->TextColumn, $this->s_id_usuario->DBFormat) = array("id_usuario", "nombre_usuario", "");
            $this->s_id_usuario->DataSource->SQL = "Select id_usuario, nombre_usuario from SO_usuario {SQL_OrderBy}";
            $this->s_id_usuario->DataSource->Order = "nombre_usuario";
            $this->s_id_periodo = new clsControl(ccsListBox, "s_id_periodo", "nombre_mes", ccsInteger, "", CCGetRequestParam("s_id_periodo", $Method, NULL), $this);
            $this->s_id_periodo->DSType = dsSQL;
            $this->s_id_periodo->DataSource = new clsDBConnCarga();
            $this->s_id_periodo->ds = & $this->s_id_periodo->DataSource;
            list($this->s_id_periodo->BoundColumn, $this->s_id_periodo->TextColumn, $this->s_id_periodo->DBFormat) = array("id_periodo", "Fecha", "");
            $this->s_id_periodo->DataSource->SQL = "  select id_periodo,   CONVERT(varchar,fecha_corte,103) as Fecha\n" .
            "from  SO_Cat_FechasCorte_Sabanas\n" .
            "where  Estado in ('Habilitado', 'Cerrado')";
            $this->s_id_periodo->DataSource->Order = "";
        }
    }
//End Class_Initialize Event

//Validate Method @49-84C4EFCE
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $Validation = ($this->s_id_usuario->Validate() && $Validation);
        $Validation = ($this->s_id_periodo->Validate() && $Validation);
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        $Validation =  $Validation && ($this->s_id_usuario->Errors->Count() == 0);
        $Validation =  $Validation && ($this->s_id_periodo->Errors->Count() == 0);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @49-12CE3299
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->s_id_usuario->Errors->Count());
        $errors = ($errors || $this->s_id_periodo->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @49-EE188E97
    function Operation()
    {
        if(!$this->Visible)
            return;

        global $Redirect;
        global $FileName;

        if(!$this->FormSubmitted) {
            return;
        }

        if($this->FormSubmitted) {
            $this->PressedButton = "Button_DoSearch";
            if($this->Button_DoSearch->Pressed) {
                $this->PressedButton = "Button_DoSearch";
            }
        }
        $Redirect = "historico.php";
        if($this->Validate()) {
            if($this->PressedButton == "Button_DoSearch") {
                $Redirect = "historico.php" . "?" . CCMergeQueryStrings(CCGetQueryString("Form", array("Button_DoSearch", "Button_DoSearch_x", "Button_DoSearch_y")));
                if(!CCGetEvent($this->Button_DoSearch->CCSEvents, "OnClick", $this->Button_DoSearch)) {
                    $Redirect = "";
                }
            }
        } else {
            $Redirect = "";
        }
    }
//End Operation Method

//Show Method @49-3F291A39
    function Show()
    {
        global $CCSUseAmp;
        $Tpl = CCGetTemplate($this);
        global $FileName;
        global $CCSLocales;
        $Error = "";

        if(!$this->Visible)
            return;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);

        $this->s_id_usuario->Prepare();
        $this->s_id_periodo->Prepare();

        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->s_id_usuario->Errors->ToString());
            $Error = ComposeStrings($Error, $this->s_id_periodo->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Errors->ToString());
            $Tpl->SetVar("Error", $Error);
            $Tpl->Parse("Error", false);
        }
        $CCSForm = $this->EditMode ? $this->ComponentName . ":" . "Edit" : $this->ComponentName;
        $this->HTMLFormAction = $FileName . "?" . CCAddParam(CCGetQueryString("QueryString", ""), "ccsForm", $CCSForm);
        $Tpl->SetVar("Action", !$CCSUseAmp ? $this->HTMLFormAction : str_replace("&", "&amp;", $this->HTMLFormAction));
        $Tpl->SetVar("HTMLFormName", $this->ComponentName);
        $Tpl->SetVar("HTMLFormEnctype", $this->FormEnctype);

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        $this->Attributes->Show();
        if(!$this->Visible) {
            $Tpl->block_path = $ParentPath;
            return;
        }

        $this->Button_DoSearch->Show();
        $this->s_id_usuario->Show();
        $this->s_id_periodo->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
    }
//End Show Method

} //End SO_Fact_Sabana_newSearch Class @49-FCB6E20C

class clsRecordSO_Fact_Sabana_new1 { //SO_Fact_Sabana_new1 Class @54-6A8CBBA5

//Variables @54-9E315808

    // Public variables
    public $ComponentType = "Record";
    public $ComponentName;
    public $Parent;
    public $HTMLFormAction;
    public $PressedButton;
    public $Errors;
    public $ErrorBlock;
    public $FormSubmitted;
    public $FormEnctype;
    public $Visible;
    public $IsEmpty;

    public $CCSEvents = "";
    public $CCSEventResult;

    public $RelativePath = "";

    public $InsertAllowed = false;
    public $UpdateAllowed = false;
    public $DeleteAllowed = false;
    public $ReadAllowed   = false;
    public $EditMode      = false;
    public $ds;
    public $DataSource;
    public $ValidatingControls;
    public $Controls;
    public $Attributes;

    // Class variables
//End Variables

//Class_Initialize Event @54-A06DB595
    function clsRecordSO_Fact_Sabana_new1($RelativePath, & $Parent)
    {

        global $FileName;
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->Visible = true;
        $this->Parent = & $Parent;
        $this->RelativePath = $RelativePath;
        $this->Errors = new clsErrors();
        $this->ErrorBlock = "Record SO_Fact_Sabana_new1/Error";
        $this->DataSource = new clsSO_Fact_Sabana_new1DataSource($this);
        $this->ds = & $this->DataSource;
        $this->ReadAllowed = true;
        if($this->Visible)
        {
            $this->ComponentName = "SO_Fact_Sabana_new1";
            $this->Attributes = new clsAttributes($this->ComponentName . ":");
            $CCSForm = explode(":", CCGetFromGet("ccsForm", ""), 2);
            if(sizeof($CCSForm) == 1)
                $CCSForm[1] = "";
            list($FormName, $FormMethod) = $CCSForm;
            $this->EditMode = ($FormMethod == "Edit");
            $this->FormEnctype = "application/x-www-form-urlencoded";
            $this->FormSubmitted = ($FormName == $this->ComponentName);
            $Method = $this->FormSubmitted ? ccsPost : ccsGet;
            $this->id_registro = new clsControl(ccsLabel, "id_registro", "id_registro", ccsFloat, "", CCGetRequestParam("id_registro", $Method, NULL), $this);
            $this->Fecha_Carga = new clsControl(ccsLabel, "Fecha_Carga", "Fecha_Carga", ccsDate, array("ShortDate"), CCGetRequestParam("Fecha_Carga", $Method, NULL), $this);
            $this->id_periodo = new clsControl(ccsLabel, "id_periodo", "id_periodo", ccsInteger, "", CCGetRequestParam("id_periodo", $Method, NULL), $this);
            $this->id_usuario = new clsControl(ccsLabel, "id_usuario", "id_usuario", ccsInteger, "", CCGetRequestParam("id_usuario", $Method, NULL), $this);
            $this->num_carga = new clsControl(ccsLabel, "num_carga", "num_carga", ccsInteger, "", CCGetRequestParam("num_carga", $Method, NULL), $this);
            $this->num_renglon = new clsControl(ccsLabel, "num_renglon", "num_renglon", ccsInteger, "", CCGetRequestParam("num_renglon", $Method, NULL), $this);
            $this->ID_Proyecto = new clsControl(ccsLabel, "ID_Proyecto", "ID_Proyecto", ccsFloat, "", CCGetRequestParam("ID_Proyecto", $Method, NULL), $this);
            $this->Administracion = new clsControl(ccsLabel, "Administracion", "Administracion", ccsText, "", CCGetRequestParam("Administracion", $Method, NULL), $this);
            $this->Servicio_Negocio = new clsControl(ccsLabel, "Servicio_Negocio", "Servicio_Negocio", ccsText, "", CCGetRequestParam("Servicio_Negocio", $Method, NULL), $this);
            $this->Nombre_Rape = new clsControl(ccsLabel, "Nombre_Rape", "Nombre_Rape", ccsText, "", CCGetRequestParam("Nombre_Rape", $Method, NULL), $this);
            $this->Nombre_AS = new clsControl(ccsLabel, "Nombre_AS", "Nombre_AS", ccsText, "", CCGetRequestParam("Nombre_AS", $Method, NULL), $this);
            $this->Fabrica_Software = new clsControl(ccsLabel, "Fabrica_Software", "Fabrica_Software", ccsText, "", CCGetRequestParam("Fabrica_Software", $Method, NULL), $this);
            $this->Origen_requerimiento = new clsControl(ccsLabel, "Origen_requerimiento", "Origen_requerimiento", ccsText, "", CCGetRequestParam("Origen_requerimiento", $Method, NULL), $this);
            $this->Fase_Real = new clsControl(ccsLabel, "Fase_Real", "Fase_Real", ccsText, "", CCGetRequestParam("Fase_Real", $Method, NULL), $this);
            $this->Semaforo_Fase_Real = new clsControl(ccsLabel, "Semaforo_Fase_Real", "Semaforo_Fase_Real", ccsText, "", CCGetRequestParam("Semaforo_Fase_Real", $Method, NULL), $this);
            $this->Dependencia = new clsControl(ccsLabel, "Dependencia", "Dependencia", ccsText, "", CCGetRequestParam("Dependencia", $Method, NULL), $this);
            $this->Area_Responsable_Dependencia = new clsControl(ccsLabel, "Area_Responsable_Dependencia", "Area_Responsable_Dependencia", ccsText, "", CCGetRequestParam("Area_Responsable_Dependencia", $Method, NULL), $this);
            $this->Responsable_Dependencia = new clsControl(ccsLabel, "Responsable_Dependencia", "Responsable_Dependencia", ccsText, "", CCGetRequestParam("Responsable_Dependencia", $Method, NULL), $this);
            $this->Comentarios_AS = new clsControl(ccsLabel, "Comentarios_AS", "Comentarios_AS", ccsText, "", CCGetRequestParam("Comentarios_AS", $Method, NULL), $this);
        }
    }
//End Class_Initialize Event

//Initialize Method @54-877D960F
    function Initialize()
    {

        if(!$this->Visible)
            return;

        $this->DataSource->Parameters["urlID_Proyecto"] = CCGetFromGet("ID_Proyecto", NULL);
    }
//End Initialize Method

//Validate Method @54-367945B8
    function Validate()
    {
        global $CCSLocales;
        $Validation = true;
        $Where = "";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "OnValidate", $this);
        return (($this->Errors->Count() == 0) && $Validation);
    }
//End Validate Method

//CheckErrors Method @54-9BD67FCF
    function CheckErrors()
    {
        $errors = false;
        $errors = ($errors || $this->id_registro->Errors->Count());
        $errors = ($errors || $this->Fecha_Carga->Errors->Count());
        $errors = ($errors || $this->id_periodo->Errors->Count());
        $errors = ($errors || $this->id_usuario->Errors->Count());
        $errors = ($errors || $this->num_carga->Errors->Count());
        $errors = ($errors || $this->num_renglon->Errors->Count());
        $errors = ($errors || $this->ID_Proyecto->Errors->Count());
        $errors = ($errors || $this->Administracion->Errors->Count());
        $errors = ($errors || $this->Servicio_Negocio->Errors->Count());
        $errors = ($errors || $this->Nombre_Rape->Errors->Count());
        $errors = ($errors || $this->Nombre_AS->Errors->Count());
        $errors = ($errors || $this->Fabrica_Software->Errors->Count());
        $errors = ($errors || $this->Origen_requerimiento->Errors->Count());
        $errors = ($errors || $this->Fase_Real->Errors->Count());
        $errors = ($errors || $this->Semaforo_Fase_Real->Errors->Count());
        $errors = ($errors || $this->Dependencia->Errors->Count());
        $errors = ($errors || $this->Area_Responsable_Dependencia->Errors->Count());
        $errors = ($errors || $this->Responsable_Dependencia->Errors->Count());
        $errors = ($errors || $this->Comentarios_AS->Errors->Count());
        $errors = ($errors || $this->Errors->Count());
        $errors = ($errors || $this->DataSource->Errors->Count());
        return $errors;
    }
//End CheckErrors Method

//Operation Method @54-17DC9883
    function Operation()
    {
        if(!$this->Visible)
            return;

        global $Redirect;
        global $FileName;

        $this->DataSource->Prepare();
        if(!$this->FormSubmitted) {
            $this->EditMode = $this->DataSource->AllParametersSet;
            return;
        }

        $Redirect = $FileName . "?" . CCGetQueryString("QueryString", array("ccsForm"));
        if ($Redirect)
            $this->DataSource->close();
    }
//End Operation Method

//Show Method @54-68447F7E
    function Show()
    {
        global $CCSUseAmp;
        $Tpl = CCGetTemplate($this);
        global $FileName;
        global $CCSLocales;
        $Error = "";

        if(!$this->Visible)
            return;

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeSelect", $this);


        $RecordBlock = "Record " . $this->ComponentName;
        $ParentPath = $Tpl->block_path;
        $Tpl->block_path = $ParentPath . "/" . $RecordBlock;
        $this->EditMode = $this->EditMode && $this->ReadAllowed;
        if($this->EditMode) {
            if($this->DataSource->Errors->Count()){
                $this->Errors->AddErrors($this->DataSource->Errors);
                $this->DataSource->Errors->clear();
            }
            $this->DataSource->Open();
            if($this->DataSource->Errors->Count() == 0 && $this->DataSource->next_record()) {
                $this->DataSource->SetValues();
                $this->id_registro->SetValue($this->DataSource->id_registro->GetValue());
                $this->Fecha_Carga->SetValue($this->DataSource->Fecha_Carga->GetValue());
                $this->id_periodo->SetValue($this->DataSource->id_periodo->GetValue());
                $this->id_usuario->SetValue($this->DataSource->id_usuario->GetValue());
                $this->num_carga->SetValue($this->DataSource->num_carga->GetValue());
                $this->num_renglon->SetValue($this->DataSource->num_renglon->GetValue());
                $this->ID_Proyecto->SetValue($this->DataSource->ID_Proyecto->GetValue());
                $this->Administracion->SetValue($this->DataSource->Administracion->GetValue());
                $this->Servicio_Negocio->SetValue($this->DataSource->Servicio_Negocio->GetValue());
                $this->Nombre_Rape->SetValue($this->DataSource->Nombre_Rape->GetValue());
                $this->Nombre_AS->SetValue($this->DataSource->Nombre_AS->GetValue());
                $this->Fabrica_Software->SetValue($this->DataSource->Fabrica_Software->GetValue());
                $this->Origen_requerimiento->SetValue($this->DataSource->Origen_requerimiento->GetValue());
                $this->Fase_Real->SetValue($this->DataSource->Fase_Real->GetValue());
                $this->Semaforo_Fase_Real->SetValue($this->DataSource->Semaforo_Fase_Real->GetValue());
                $this->Dependencia->SetValue($this->DataSource->Dependencia->GetValue());
                $this->Area_Responsable_Dependencia->SetValue($this->DataSource->Area_Responsable_Dependencia->GetValue());
                $this->Responsable_Dependencia->SetValue($this->DataSource->Responsable_Dependencia->GetValue());
                $this->Comentarios_AS->SetValue($this->DataSource->Comentarios_AS->GetValue());
            } else {
                $this->EditMode = false;
            }
        }

        if($this->FormSubmitted || $this->CheckErrors()) {
            $Error = "";
            $Error = ComposeStrings($Error, $this->id_registro->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Fecha_Carga->Errors->ToString());
            $Error = ComposeStrings($Error, $this->id_periodo->Errors->ToString());
            $Error = ComposeStrings($Error, $this->id_usuario->Errors->ToString());
            $Error = ComposeStrings($Error, $this->num_carga->Errors->ToString());
            $Error = ComposeStrings($Error, $this->num_renglon->Errors->ToString());
            $Error = ComposeStrings($Error, $this->ID_Proyecto->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Administracion->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Servicio_Negocio->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Nombre_Rape->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Nombre_AS->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Fabrica_Software->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Origen_requerimiento->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Fase_Real->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Semaforo_Fase_Real->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Dependencia->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Area_Responsable_Dependencia->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Responsable_Dependencia->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Comentarios_AS->Errors->ToString());
            $Error = ComposeStrings($Error, $this->Errors->ToString());
            $Error = ComposeStrings($Error, $this->DataSource->Errors->ToString());
            $Tpl->SetVar("Error", $Error);
            $Tpl->Parse("Error", false);
        }
        $CCSForm = $this->EditMode ? $this->ComponentName . ":" . "Edit" : $this->ComponentName;
        $this->HTMLFormAction = $FileName . "?" . CCAddParam(CCGetQueryString("QueryString", ""), "ccsForm", $CCSForm);
        $Tpl->SetVar("Action", !$CCSUseAmp ? $this->HTMLFormAction : str_replace("&", "&amp;", $this->HTMLFormAction));
        $Tpl->SetVar("HTMLFormName", $this->ComponentName);
        $Tpl->SetVar("HTMLFormEnctype", $this->FormEnctype);

        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeShow", $this);
        $this->Attributes->Show();
        if(!$this->Visible) {
            $Tpl->block_path = $ParentPath;
            return;
        }

        $this->id_registro->Show();
        $this->Fecha_Carga->Show();
        $this->id_periodo->Show();
        $this->id_usuario->Show();
        $this->num_carga->Show();
        $this->num_renglon->Show();
        $this->ID_Proyecto->Show();
        $this->Administracion->Show();
        $this->Servicio_Negocio->Show();
        $this->Nombre_Rape->Show();
        $this->Nombre_AS->Show();
        $this->Fabrica_Software->Show();
        $this->Origen_requerimiento->Show();
        $this->Fase_Real->Show();
        $this->Semaforo_Fase_Real->Show();
        $this->Dependencia->Show();
        $this->Area_Responsable_Dependencia->Show();
        $this->Responsable_Dependencia->Show();
        $this->Comentarios_AS->Show();
        $Tpl->parse();
        $Tpl->block_path = $ParentPath;
        $this->DataSource->close();
    }
//End Show Method

} //End SO_Fact_Sabana_new1 Class @54-FCB6E20C

class clsSO_Fact_Sabana_new1DataSource extends clsDBConnCarga {  //SO_Fact_Sabana_new1DataSource Class @54-9DA79019

//DataSource Variables @54-12D336A0
    public $Parent = "";
    public $CCSEvents = "";
    public $CCSEventResult;
    public $ErrorBlock;
    public $CmdExecution;

    public $wp;
    public $AllParametersSet;


    // Datasource fields
    public $id_registro;
    public $Fecha_Carga;
    public $id_periodo;
    public $id_usuario;
    public $num_carga;
    public $num_renglon;
    public $ID_Proyecto;
    public $Administracion;
    public $Servicio_Negocio;
    public $Nombre_Rape;
    public $Nombre_AS;
    public $Fabrica_Software;
    public $Origen_requerimiento;
    public $Fase_Real;
    public $Semaforo_Fase_Real;
    public $Dependencia;
    public $Area_Responsable_Dependencia;
    public $Responsable_Dependencia;
    public $Comentarios_AS;
//End DataSource Variables

//DataSourceClass_Initialize Event @54-3335405A
    function clsSO_Fact_Sabana_new1DataSource(& $Parent)
    {
        $this->Parent = & $Parent;
        $this->ErrorBlock = "Record SO_Fact_Sabana_new1/Error";
        $this->Initialize();
        $this->id_registro = new clsField("id_registro", ccsFloat, "");
        
        $this->Fecha_Carga = new clsField("Fecha_Carga", ccsDate, $this->DateFormat);
        
        $this->id_periodo = new clsField("id_periodo", ccsInteger, "");
        
        $this->id_usuario = new clsField("id_usuario", ccsInteger, "");
        
        $this->num_carga = new clsField("num_carga", ccsInteger, "");
        
        $this->num_renglon = new clsField("num_renglon", ccsInteger, "");
        
        $this->ID_Proyecto = new clsField("ID_Proyecto", ccsFloat, "");
        
        $this->Administracion = new clsField("Administracion", ccsText, "");
        
        $this->Servicio_Negocio = new clsField("Servicio_Negocio", ccsText, "");
        
        $this->Nombre_Rape = new clsField("Nombre_Rape", ccsText, "");
        
        $this->Nombre_AS = new clsField("Nombre_AS", ccsText, "");
        
        $this->Fabrica_Software = new clsField("Fabrica_Software", ccsText, "");
        
        $this->Origen_requerimiento = new clsField("Origen_requerimiento", ccsText, "");
        
        $this->Fase_Real = new clsField("Fase_Real", ccsText, "");
        
        $this->Semaforo_Fase_Real = new clsField("Semaforo_Fase_Real", ccsText, "");
        
        $this->Dependencia = new clsField("Dependencia", ccsText, "");
        
        $this->Area_Responsable_Dependencia = new clsField("Area_Responsable_Dependencia", ccsText, "");
        
        $this->Responsable_Dependencia = new clsField("Responsable_Dependencia", ccsText, "");
        
        $this->Comentarios_AS = new clsField("Comentarios_AS", ccsText, "");
        

    }
//End DataSourceClass_Initialize Event

//Prepare Method @54-DF3CB289
    function Prepare()
    {
        global $CCSLocales;
        global $DefaultDateFormat;
        $this->wp = new clsSQLParameters($this->ErrorBlock);
        $this->wp->AddParameter("1", "urlID_Proyecto", ccsFloat, "", "", $this->Parameters["urlID_Proyecto"], "", false);
        $this->AllParametersSet = $this->wp->AllParamsSet();
        $this->wp->Criterion[1] = $this->wp->Operation(opEqual, "[ID_Proyecto]", $this->wp->GetDBValue("1"), $this->ToSQL($this->wp->GetDBValue("1"), ccsFloat),false);
        $this->Where = 
             $this->wp->Criterion[1];
    }
//End Prepare Method

//Open Method @54-04E0EEDF
    function Open()
    {
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeBuildSelect", $this->Parent);
        $this->SQL = "SELECT * \n\n" .
        "FROM SO_Fact_Sabana_new {SQL_Where} {SQL_OrderBy}";
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "BeforeExecuteSelect", $this->Parent);
        $this->query(CCBuildSQL($this->SQL, $this->Where, $this->Order));
        $this->CCSEventResult = CCGetEvent($this->CCSEvents, "AfterExecuteSelect", $this->Parent);
    }
//End Open Method

//SetValues Method @54-ABCF3301
    function SetValues()
    {
        $this->id_registro->SetDBValue(trim($this->f("id_registro")));
        $this->Fecha_Carga->SetDBValue(trim($this->f("Fecha_Carga")));
        $this->id_periodo->SetDBValue(trim($this->f("id_periodo")));
        $this->id_usuario->SetDBValue(trim($this->f("id_usuario")));
        $this->num_carga->SetDBValue(trim($this->f("num_carga")));
        $this->num_renglon->SetDBValue(trim($this->f("num_renglon")));
        $this->ID_Proyecto->SetDBValue(trim($this->f("ID_Proyecto")));
        $this->Administracion->SetDBValue($this->f("Administracion"));
        $this->Servicio_Negocio->SetDBValue($this->f("Servicio_Negocio"));
        $this->Nombre_Rape->SetDBValue($this->f("Nombre_Rape"));
        $this->Nombre_AS->SetDBValue($this->f("Nombre_AS"));
        $this->Fabrica_Software->SetDBValue($this->f("Fabrica_Software"));
        $this->Origen_requerimiento->SetDBValue($this->f("Origen_requerimiento"));
        $this->Fase_Real->SetDBValue($this->f("Fase_Real"));
        $this->Semaforo_Fase_Real->SetDBValue($this->f("Semaforo_Fase_Real"));
        $this->Dependencia->SetDBValue($this->f("Dependencia"));
        $this->Area_Responsable_Dependencia->SetDBValue($this->f("Area_Responsable_Dependencia"));
        $this->Responsable_Dependencia->SetDBValue($this->f("Responsable_Dependencia"));
        $this->Comentarios_AS->SetDBValue($this->f("Comentarios_AS"));
    }
//End SetValues Method

} //End SO_Fact_Sabana_new1DataSource Class @54-FCB6E20C

//Include Page implementation @127-3DD2EFDC
include_once(RelativePath . "/Header.php");
//End Include Page implementation

//Initialize Page @1-0C677729
// Variables
$FileName = "";
$Redirect = "";
$Tpl = "";
$TemplateFileName = "";
$BlockToParse = "";
$ComponentName = "";
$Attributes = "";

// Events;
$CCSEvents = "";
$CCSEventResult = "";
$TemplateSource = "";

$FileName = FileName;
$Redirect = "";
$TemplateFileName = "historico.html";
$BlockToParse = "main";
$TemplateEncoding = "CP1252";
$ContentType = "text/html";
$PathToRoot = "./";
$PathToRootOpt = "";
$Scripts = "|js/jquery/jquery.js|js/jquery/event-manager.js|js/jquery/selectors.js|js/jquery/ui/jquery.ui.core.js|js/jquery/ui/jquery.ui.widget.js|js/jquery/ui/jquery.ui.mouse.js|js/jquery/ui/jquery.ui.draggable.js|js/jquery/ui/jquery.ui.position.js|js/jquery/ui/jquery.ui.resizable.js|js/jquery/ui/jquery.ui.button.js|js/jquery/ui/jquery.ui.dialog.js|js/jquery/dialog/ccs-dialog.js|js/jquery/updatepanel/ccs-update-panel.js|";
$Charset = $Charset ? $Charset : "windows-1252";
//End Initialize Page

//Include events file @1-7C54A2CE
include_once("./historico_events.php");
//End Include events file

//BeforeInitialize Binding @1-17AC9191
$CCSEvents["BeforeInitialize"] = "Page_BeforeInitialize";
//End BeforeInitialize Binding

//Before Initialize @1-E870CEBC
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeInitialize", $MainPage);
//End Before Initialize

//Initialize Objects @1-A990E62D
$DBConnCarga = new clsDBConnCarga();
$MainPage->Connections["ConnCarga"] = & $DBConnCarga;
$Attributes = new clsAttributes("page:");
$Attributes->SetValue("pathToRoot", $PathToRoot);
$MainPage->Attributes = & $Attributes;

// Controls
$Panel1 = new clsPanel("Panel1", $MainPage);
$Panel1->GenerateDiv = true;
$Panel1->PanelId = "Panel1";
$SO_Fact_Sabana_new = new clsGridSO_Fact_Sabana_new("", $MainPage);
$SO_Fact_Sabana_newSearch = new clsRecordSO_Fact_Sabana_newSearch("", $MainPage);
$Panel2 = new clsPanel("Panel2", $MainPage);
$Panel2->GenerateDiv = true;
$Panel2->PanelId = "Panel1Panel2";
$SO_Fact_Sabana_new1 = new clsRecordSO_Fact_Sabana_new1("", $MainPage);
$Header = new clsHeader("", "Header", $MainPage);
$Header->Initialize();
$MainPage->Panel1 = & $Panel1;
$MainPage->SO_Fact_Sabana_new = & $SO_Fact_Sabana_new;
$MainPage->SO_Fact_Sabana_newSearch = & $SO_Fact_Sabana_newSearch;
$MainPage->Panel2 = & $Panel2;
$MainPage->SO_Fact_Sabana_new1 = & $SO_Fact_Sabana_new1;
$MainPage->Header = & $Header;
$Panel1->AddComponent("SO_Fact_Sabana_new", $SO_Fact_Sabana_new);
$Panel1->AddComponent("SO_Fact_Sabana_newSearch", $SO_Fact_Sabana_newSearch);
$Panel1->AddComponent("Panel2", $Panel2);
$Panel2->AddComponent("SO_Fact_Sabana_new1", $SO_Fact_Sabana_new1);
$SO_Fact_Sabana_new->Initialize();
$SO_Fact_Sabana_new1->Initialize();
$ScriptIncludes = "";
$SList = explode("|", $Scripts);
foreach ($SList as $Script) {
    if ($Script != "") $ScriptIncludes = $ScriptIncludes . "<script src=\"" . $PathToRoot . $Script . "\" type=\"text/javascript\"></script>\n";
}
$Attributes->SetValue("scriptIncludes", $ScriptIncludes);

BindEvents();

$CCSEventResult = CCGetEvent($CCSEvents, "AfterInitialize", $MainPage);

if ($Charset) {
    header("Content-Type: " . $ContentType . "; charset=" . $Charset);
} else {
    header("Content-Type: " . $ContentType);
}
//End Initialize Objects

//Initialize HTML Template @1-FA3E6D4A
$CCSEventResult = CCGetEvent($CCSEvents, "OnInitializeView", $MainPage);
$Tpl = new clsTemplate($FileEncoding, $TemplateEncoding);
if (strlen($TemplateSource)) {
    $Tpl->LoadTemplateFromStr($TemplateSource, $BlockToParse, "CP1252");
} else {
    $Tpl->LoadTemplate(PathToCurrentPage . $TemplateFileName, $BlockToParse, "CP1252");
}
$Tpl->SetVar("CCS_PathToRoot", $PathToRoot);
$Tpl->block_path = "/$BlockToParse";
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeShow", $MainPage);
$Attributes->SetValue("pathToRoot", "");
$Attributes->Show();
//End Initialize HTML Template

//Execute Components @1-57F56DA4
$Header->Operations();
$SO_Fact_Sabana_new1->Operation();
$SO_Fact_Sabana_newSearch->Operation();
//End Execute Components

//Go to destination page @1-7AE65A96
if($Redirect)
{
    $CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
    $DBConnCarga->close();
    header("Location: " . $Redirect);
    unset($SO_Fact_Sabana_new);
    unset($SO_Fact_Sabana_newSearch);
    unset($SO_Fact_Sabana_new1);
    $Header->Class_Terminate();
    unset($Header);
    unset($Tpl);
    exit;
}
//End Go to destination page

//Show Page @1-4E948BC1
$Header->Show();
$Panel1->Show();
$Tpl->block_path = "";
$Tpl->Parse($BlockToParse, false);
if (!isset($main_block)) $main_block = $Tpl->GetVar($BlockToParse);
$main_block = CCConvertEncoding($main_block, $FileEncoding, $TemplateEncoding);
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeOutput", $MainPage);
if ($CCSEventResult) echo $main_block;
//End Show Page

//Unload Page @1-B91A7020
$CCSEventResult = CCGetEvent($CCSEvents, "BeforeUnload", $MainPage);
$DBConnCarga->close();
unset($SO_Fact_Sabana_new);
unset($SO_Fact_Sabana_newSearch);
unset($SO_Fact_Sabana_new1);
$Header->Class_Terminate();
unset($Header);
unset($Tpl);
//End Unload Page


?>
