<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="False" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="Fresh1" wizardThemeVersion="3.0" useDesign="False" needGeneration="0">
	<Components>
		<Panel id="2" visible="True" generateDiv="True" name="Panel1" PathID="Panel1" features="(assigned)">
			<Components>
				<Grid id="3" secured="False" sourceType="SQL" returnValueType="Number" defaultPageSize="20" name="SO_Fact_Sabana_new" connection="ConnCarga" dataSource="SELECT [Fecha_Corte]
      ,[id_periodo]
      ,[id_usuario]
      ,[num_carga]
      ,[num_renglon]
      ,[ID_Proyecto]
      ,[Administracion]
      ,[Servicio_Negocio]
      ,[Nombre_Rape]
      ,[Nombre_AS]
      ,[Fabrica_Software]
      ,[Origen_requerimiento]
      ,[Fase_Real]
      ,[Semaforo_Fase_Real]
      ,[Dependencia]
      ,[Area_Responsable_Dependencia]
      ,[Responsable_Dependencia]
      ,[Comentarios_AS]
FROM SO_Fact_Sabana
where  id_periodo={s_id_periodo}
     and id_usuario={s_id_usuario}" pageSizeLimit="100" pageSize="True" wizardCaption=" SO Fact Sabana New Lista de" wizardThemeApplyTo="Page" wizardGridType="Tabular" wizardSortingType="SimpleDir" wizardAllowInsert="True" wizardAltRecord="False" wizardAltRecordType="Style" wizardRecordSeparator="False" wizardNoRecords="No hay registros" wizardGridPagingType="Centered" wizardUseSearch="True" wizardAddNbsp="True" gridTotalRecords="False" wizardAddPanels="False" wizardType="GridRecord" wizardGridRecordLinkFieldType="field" wizardGridRecordLinkField="ID_Proyecto" wizardUseInterVariables="False" addTemplatePanel="False" changedCaptionGrid="False" gridExtendedHTML="False" PathID="Panel1SO_Fact_Sabana_new" composition="7" isParent="True" useJqueryFeatures="True">
					<Components>
						<Link id="6" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="SO_Fact_Sabana_new_Insert" hrefSource="historico.ccp" removeParameters="ID_Proyecto" wizardThemeItem="FooterA" wizardDefaultValue="Agregar Nuevo" wizardUseTemplateBlock="False" PathID="Panel1SO_Fact_Sabana_newSO_Fact_Sabana_new_Insert">
							<Components/>
							<Events/>
							<LinkParameters/>
							<Attributes/>
							<Features/>
						</Link>
						<Sorter id="9" visible="True" name="Sorter_ID_Proyecto" column="ID_Proyecto" wizardCaption="ID Proyecto" wizardSortingType="SimpleDir" wizardControl="ID_Proyecto" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_ID_Proyecto">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="10" visible="True" name="Sorter_Administracion" column="Administracion" wizardCaption="Administracion" wizardSortingType="SimpleDir" wizardControl="Administracion" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Administracion">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="11" visible="True" name="Sorter_Servicio_Negocio" column="Servicio_Negocio" wizardCaption="Servicio Negocio" wizardSortingType="SimpleDir" wizardControl="Servicio_Negocio" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Servicio_Negocio">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="12" visible="True" name="Sorter_Nombre_Rape" column="Nombre_Rape" wizardCaption="Nombre Rape" wizardSortingType="SimpleDir" wizardControl="Nombre_Rape" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Nombre_Rape">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="13" visible="True" name="Sorter_Nombre_AS" column="Nombre_AS" wizardCaption="Nombre AS" wizardSortingType="SimpleDir" wizardControl="Nombre_AS" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Nombre_AS">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="14" visible="True" name="Sorter_Fabrica_Software" column="Fabrica_Software" wizardCaption="Fabrica Software" wizardSortingType="SimpleDir" wizardControl="Fabrica_Software" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Fabrica_Software">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="15" visible="True" name="Sorter_Origen_requerimiento" column="Origen_requerimiento" wizardCaption="Origen Requerimiento" wizardSortingType="SimpleDir" wizardControl="Origen_requerimiento" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Origen_requerimiento">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="16" visible="True" name="Sorter_Fase_Real" column="Fase_Real" wizardCaption="Fase Real" wizardSortingType="SimpleDir" wizardControl="Fase_Real" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Fase_Real">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="17" visible="True" name="Sorter_Semaforo_Fase_Real" column="Semaforo_Fase_Real" wizardCaption="Semaforo Fase Real" wizardSortingType="SimpleDir" wizardControl="Semaforo_Fase_Real" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Semaforo_Fase_Real">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="18" visible="True" name="Sorter_Dependencia" column="Dependencia" wizardCaption="Dependencia" wizardSortingType="SimpleDir" wizardControl="Dependencia" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Dependencia">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="19" visible="True" name="Sorter_Area_Responsable_Dependencia" column="Area_Responsable_Dependencia" wizardCaption="Area Responsable Dependencia" wizardSortingType="SimpleDir" wizardControl="Area_Responsable_Dependencia" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Area_Responsable_Dependencia">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="20" visible="True" name="Sorter_Responsable_Dependencia" column="Responsable_Dependencia" wizardCaption="Responsable Dependencia" wizardSortingType="SimpleDir" wizardControl="Responsable_Dependencia" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Responsable_Dependencia">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Sorter id="21" visible="True" name="Sorter_Comentarios_AS" column="Comentarios_AS" wizardCaption="Comentarios AS" wizardSortingType="SimpleDir" wizardControl="Comentarios_AS" wizardAddNbsp="False" PathID="Panel1SO_Fact_Sabana_newSorter_Comentarios_AS">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Sorter>
						<Label id="25" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Administracion" fieldSource="Administracion" wizardCaption="Administracion" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newAdministracion">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="27" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Servicio_Negocio" fieldSource="Servicio_Negocio" wizardCaption="Servicio Negocio" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newServicio_Negocio">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="29" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Nombre_Rape" fieldSource="Nombre_Rape" wizardCaption="Nombre Rape" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newNombre_Rape">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="31" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Nombre_AS" fieldSource="Nombre_AS" wizardCaption="Nombre AS" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newNombre_AS">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="33" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Fabrica_Software" fieldSource="Fabrica_Software" wizardCaption="Fabrica Software" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newFabrica_Software">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="35" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Origen_requerimiento" fieldSource="Origen_requerimiento" wizardCaption="Origen Requerimiento" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newOrigen_requerimiento">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="37" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Fase_Real" fieldSource="Fase_Real" wizardCaption="Fase Real" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newFase_Real">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="39" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Semaforo_Fase_Real" fieldSource="Semaforo_Fase_Real" wizardCaption="Semaforo Fase Real" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newSemaforo_Fase_Real">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="41" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Dependencia" fieldSource="Dependencia" wizardCaption="Dependencia" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newDependencia">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="43" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Area_Responsable_Dependencia" fieldSource="Area_Responsable_Dependencia" wizardCaption="Area Responsable Dependencia" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newArea_Responsable_Dependencia">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="45" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Responsable_Dependencia" fieldSource="Responsable_Dependencia" wizardCaption="Responsable Dependencia" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newResponsable_Dependencia">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Label id="47" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Comentarios_AS" fieldSource="Comentarios_AS" wizardCaption="Comentarios AS" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardAddNbsp="True" PathID="Panel1SO_Fact_Sabana_newComentarios_AS">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
						<Navigator id="48" size="10" type="Centered" pageSizes="1;5;10;25;50" name="Navigator" wizardPagingType="Centered" wizardFirst="True" wizardFirstText="Inicio" wizardPrev="True" wizardPrevText="Anterior" wizardNext="True" wizardNextText="Siguiente" wizardLast="True" wizardLastText="Final" wizardPageNumbers="Centered" wizardSize="10" wizardTotalPages="True" wizardHideDisabled="False" wizardOfText="de" wizardPageSize="True" wizardImagesScheme="Fresh4">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Navigator>
						<Label id="126" fieldSourceType="DBColumn" dataType="Integer" html="False" generateSpan="False" name="ID_Proyecto" PathID="Panel1SO_Fact_Sabana_newID_Proyecto" fieldSource="ID_Proyecto">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Label>
					</Components>
					<Events>
<Event name="AfterExecuteSelect" type="Server">
<Actions>
<Action actionName="Custom Code" actionCategory="General" id="130"/>
</Actions>
</Event>
</Events>
					<TableParameters>
					</TableParameters>
					<JoinTables>
					</JoinTables>
					<JoinLinks/>
					<Fields>
					</Fields>
					<PKFields/>
					<SPParameters/>
					<SQLParameters>
<SQLParameter id="128" dataType="Integer" defaultValue="0" designDefaultValue="50" parameterSource="s_id_usuario" parameterType="URL" variable="s_id_usuario"/>
<SQLParameter id="129" dataType="Integer" defaultValue="0" designDefaultValue="4" parameterSource="s_id_periodo" parameterType="URL" variable="s_id_periodo"/>
</SQLParameters>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Grid>
				<Record id="49" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="None" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="SO_Fact_Sabana_newSearch" searchIds="49" fictitiousConnection="ConnCarga" wizardCaption="  Buscar" wizardOrientation="Vertical" wizardFormMethod="post" gridSearchClearLink="False" wizardTypeComponent="Search" gridSearchType="And" wizardInteractiveSearch="True" gridSearchRecPerPage="False" wizardTypeButtons="button" wizardDefaultButton="False" gridSearchSortField="False" wizardUseInterVariables="False" wizardThemeApplyTo="Page" addTemplatePanel="False" wizardType="GridRecord" returnPage="historico.ccp" PathID="Panel1SO_Fact_Sabana_newSearch" composition="7">
					<Components>
						<Button id="50" urlType="Relative" enableValidation="True" isDefault="False" name="Button_DoSearch" operation="Search" wizardCaption="Buscar" PathID="Panel1SO_Fact_Sabana_newSearchButton_DoSearch">
							<Components/>
							<Events/>
							<Attributes/>
							<Features/>
						</Button>
						<ListBox id="51" visible="Yes" fieldSourceType="DBColumn" sourceType="SQL" dataType="Integer" returnValueType="Number" name="s_id_usuario" fieldSource="id_usuario" wizardIsPassword="False" wizardEmptyCaption="Seleccionar Valor" wizardCaption="Id Usuario" caption="usuario" required="False" unique="False" PathID="Panel1SO_Fact_Sabana_newSearchs_id_usuario" connection="ConnCarga" dataSource="Select id_usuario, nombre_usuario from SO_usuario order by nombre_usuario" boundColumn="id_usuario" textColumn="nombre_usuario">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables/>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
						<ListBox id="52" visible="Yes" fieldSourceType="DBColumn" sourceType="SQL" dataType="Integer" returnValueType="Number" name="s_id_periodo" fieldSource="id_periodo" wizardIsPassword="False" wizardEmptyCaption="Seleccionar Valor" wizardCaption="Id Periodo" caption="nombre_mes" required="False" unique="False" PathID="Panel1SO_Fact_Sabana_newSearchs_id_periodo" connection="ConnCarga" dataSource="  select id_periodo,   CONVERT(varchar,fecha_corte,103) as Fecha
from  SO_Cat_FechasCorte_Sabanas
where  Estado in ('Habilitado', 'Cerrado')" textColumn="Fecha" boundColumn="id_periodo">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables/>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<Attributes/>
							<Features/>
						</ListBox>
					</Components>
					<Events/>
					<TableParameters/>
					<SPParameters/>
					<SQLParameters/>
					<JoinTables/>
					<JoinLinks/>
					<Fields/>
					<PKFields/>
					<ISPParameters/>
					<ISQLParameters/>
					<IFormElements/>
					<USPParameters/>
					<USQLParameters/>
					<UConditions/>
					<UFormElements/>
					<DSPParameters/>
					<DSQLParameters/>
					<DConditions/>
					<SecurityGroups/>
					<Attributes/>
					<Features/>
				</Record>
				<Panel id="53" visible="True" generateDiv="True" name="Panel2" PathID="Panel1Panel2" features="(assigned)">
					<Components>
						<Record id="54" sourceType="Table" urlType="Relative" secured="False" allowInsert="False" allowUpdate="False" allowDelete="False" validateData="True" preserveParameters="GET" returnValueType="Number" returnValueTypeForDelete="Number" returnValueTypeForInsert="Number" returnValueTypeForUpdate="Number" name="SO_Fact_Sabana_new1" connection="ConnCarga" dataSource="SO_Fact_Sabana_new" errorSummator="Error" allowCancel="False" recordDeleteConfirmation="False" buttonsType="button" wizardRecordKey="ID_Proyecto" encryptPasswordField="False" wizardUseInterVariables="False" pkIsAutoincrement="False" wizardCaption="Agregar/Editar SO Fact Sabana New " wizardThemeApplyTo="Page" wizardFormMethod="post" wizardType="GridRecord" changedCaptionRecord="False" recordDirection="Vertical" templatePageRecord="C:/Program Files (x86)/CodeChargeStudio5/Templates/Record/Dialog.ccp|ccsTemplate" recordAddTemplatePanel="False" PathID="Panel1Panel2SO_Fact_Sabana_new1" composition="7">
							<Components>
								<Label id="57" fieldSourceType="DBColumn" dataType="Float" html="False" generateSpan="False" name="id_registro" fieldSource="id_registro" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Id Registro" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1id_registro">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="58" fieldSourceType="DBColumn" dataType="Date" html="False" generateSpan="False" name="Fecha_Carga" fieldSource="Fecha_Carga" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Fecha Carga" wizardAddNbsp="True" format="ShortDate" PathID="Panel1Panel2SO_Fact_Sabana_new1Fecha_Carga">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="59" fieldSourceType="DBColumn" dataType="Integer" html="False" generateSpan="False" name="id_periodo" fieldSource="id_periodo" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Id Periodo" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1id_periodo">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="60" fieldSourceType="DBColumn" dataType="Integer" html="False" generateSpan="False" name="id_usuario" fieldSource="id_usuario" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Id Usuario" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1id_usuario">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="61" fieldSourceType="DBColumn" dataType="Integer" html="False" generateSpan="False" name="num_carga" fieldSource="num_carga" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Num Carga" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1num_carga">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="62" fieldSourceType="DBColumn" dataType="Integer" html="False" generateSpan="False" name="num_renglon" fieldSource="num_renglon" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Num Renglon" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1num_renglon">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="63" fieldSourceType="DBColumn" dataType="Float" html="False" generateSpan="False" name="ID_Proyecto" fieldSource="ID_Proyecto" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="ID Proyecto" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1ID_Proyecto">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="64" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Administracion" fieldSource="Administracion" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Administracion" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Administracion">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="65" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Servicio_Negocio" fieldSource="Servicio_Negocio" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Servicio Negocio" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Servicio_Negocio">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="66" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Nombre_Rape" fieldSource="Nombre_Rape" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Nombre Rape" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Nombre_Rape">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="67" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Nombre_AS" fieldSource="Nombre_AS" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Nombre AS" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Nombre_AS">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="68" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Fabrica_Software" fieldSource="Fabrica_Software" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Fabrica Software" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Fabrica_Software">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="69" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Origen_requerimiento" fieldSource="Origen_requerimiento" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Origen Requerimiento" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Origen_requerimiento">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="70" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Fase_Real" fieldSource="Fase_Real" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Fase Real" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Fase_Real">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="71" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Semaforo_Fase_Real" fieldSource="Semaforo_Fase_Real" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Semaforo Fase Real" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Semaforo_Fase_Real">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="72" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Dependencia" fieldSource="Dependencia" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Dependencia" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Dependencia">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="73" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Area_Responsable_Dependencia" fieldSource="Area_Responsable_Dependencia" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Area Responsable Dependencia" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Area_Responsable_Dependencia">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="74" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Responsable_Dependencia" fieldSource="Responsable_Dependencia" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Responsable Dependencia" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Responsable_Dependencia">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
								<Label id="75" fieldSourceType="DBColumn" dataType="Text" html="False" generateSpan="False" name="Comentarios_AS" fieldSource="Comentarios_AS" wizardIsPassword="False" wizardUseTemplateBlock="False" wizardCaption="Comentarios AS" wizardAddNbsp="True" PathID="Panel1Panel2SO_Fact_Sabana_new1Comentarios_AS">
									<Components/>
									<Events/>
									<Attributes/>
									<Features/>
								</Label>
							</Components>
							<Events/>
							<TableParameters>
								<TableParameter id="56" conditionType="Parameter" useIsNull="False" field="ID_Proyecto" parameterSource="ID_Proyecto" dataType="Float" logicOperator="And" searchConditionType="Equal" parameterType="URL" orderNumber="1"/>
							</TableParameters>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables>
								<JoinTable id="55" tableName="SO_Fact_Sabana_new"/>
							</JoinTables>
							<JoinLinks/>
							<Fields/>
							<PKFields/>
							<ISPParameters/>
							<ISQLParameters/>
							<IFormElements/>
							<USPParameters/>
							<USQLParameters/>
							<UConditions/>
							<UFormElements/>
							<DSPParameters/>
							<DSQLParameters/>
							<DConditions/>
							<SecurityGroups/>
							<Attributes/>
							<Features/>
						</Record>
					</Components>
					<Events/>
					<Attributes/>
					<Features>
						<JDialog id="104" modal="True" visible="False" enabled="True" name="DialogPanel1" category="jQuery" title="Agregar/Editar SO Fact Sabana New " show="Panel1condition_for_show.ontrue;" hide="Panel1condition_for_hide.ontrue;">
							<Components/>
							<Events/>
							<TableParameters/>
							<SPParameters/>
							<SQLParameters/>
							<JoinTables/>
							<JoinLinks/>
							<Fields/>
							<ControlPoints>
								<ControlPoint id="105" name="Panel1condition_for_show.ontrue" relProperty="show">
									<Items>
										<ControlPointItem id="106" name="historico" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="107" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
										<ControlPointItem id="108" name="condition_for_show" ccpId="77" type="Condition" isFeature="True" PathID="Panel1condition_for_show"/>
									</Items>
								</ControlPoint>
								<ControlPoint id="109" name="Panel1condition_for_hide.ontrue" relProperty="hide">
									<Items>
										<ControlPointItem id="110" name="historico" ccpId="1" type="Page" isFeature="False"/>
										<ControlPointItem id="111" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
										<ControlPointItem id="112" name="condition_for_hide" ccpId="82" type="Condition" isFeature="True" PathID="Panel1condition_for_hide"/>
									</Items>
								</ControlPoint>
							</ControlPoints>
							<Features/>
						</JDialog>
					</Features>
				</Panel>
			</Components>
			<Events/>
			<Attributes/>
			<Features>
				<JUpdatePanel id="76" enabled="True" childrenAsTriggers="True" name="UpdatePanel1" category="jQuery">
					<Components/>
					<Events/>
					<ControlPoints/>
					<Features/>
				</JUpdatePanel>
				<Condition id="77" name="condition_for_show" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;link&quot;)" sourceType2="Expression" start="Panel1UpdatePanel1.onafterrefresh;">
					<Components/>
					<Events/>
					<ControlPoints>
						<ControlPoint id="78" name="Panel1UpdatePanel1.onafterrefresh" relProperty="start">
							<Items>
								<ControlPointItem id="79" name="historico" ccpId="1" type="Page" isFeature="False"/>
								<ControlPointItem id="80" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
								<ControlPointItem id="81" name="UpdatePanel1" ccpId="76" type="JUpdatePanel" isFeature="True" PathID="Panel1UpdatePanel1"/>
							</Items>
						</ControlPoint>
					</ControlPoints>
					<Features/>
				</Condition>
				<Condition id="82" name="condition_for_hide" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] == &quot;submit&quot; &amp;&amp; $(&quot;#ErrorBlock&quot;).length == 0)" sourceType2="Expression" start="Panel1UpdatePanel1.onafterrefresh;">
					<Components/>
					<Events/>
					<ControlPoints>
						<ControlPoint id="83" name="Panel1UpdatePanel1.onafterrefresh" relProperty="start">
							<Items>
								<ControlPointItem id="84" name="historico" ccpId="1" type="Page" isFeature="False"/>
								<ControlPointItem id="85" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
								<ControlPointItem id="86" name="UpdatePanel1" ccpId="76" type="JUpdatePanel" isFeature="True" PathID="Panel1UpdatePanel1"/>
							</Items>
						</ControlPoint>
					</ControlPoints>
					<Features/>
				</Condition>
				<Condition id="87" name="ccc_link_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;link&quot;)" sourceType2="Expression" start="Panel1SO_Fact_Sabana_newSO_Fact_Sabana_new_Insert.onclick;Panel1SO_Fact_Sabana_newID_Proyecto.onclick;">
					<Components/>
					<Events/>
					<ControlPoints>
						<ControlPoint id="88" name="Panel1SO_Fact_Sabana_newSO_Fact_Sabana_new_Insert.onclick" relProperty="start">
							<Items>
								<ControlPointItem id="89" name="historico" ccpId="1" type="Page" isFeature="False"/>
								<ControlPointItem id="90" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
								<ControlPointItem id="91" name="SO_Fact_Sabana_new" ccpId="3" type="Grid" isFeature="False" PathID="Panel1SO_Fact_Sabana_new"/>
								<ControlPointItem id="92" name="SO_Fact_Sabana_new_Insert" ccpId="6" type="Link" isFeature="False" PathID="Panel1SO_Fact_Sabana_newSO_Fact_Sabana_new_Insert"/>
							</Items>
						</ControlPoint>
						<ControlPoint id="93" name="Panel1SO_Fact_Sabana_newID_Proyecto.onclick" relProperty="start">
							<Items>
								<ControlPointItem id="94" name="historico" ccpId="1" type="Page" isFeature="False"/>
								<ControlPointItem id="95" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
								<ControlPointItem id="96" name="SO_Fact_Sabana_new" ccpId="3" type="Grid" isFeature="False" PathID="Panel1SO_Fact_Sabana_new"/>
								<ControlPointItem id="97" name="ID_Proyecto" ccpId="22" type="Link" isFeature="False" PathID="Panel1SO_Fact_Sabana_newID_Proyecto"/>
							</Items>
						</ControlPoint>
					</ControlPoints>
					<Features/>
				</Condition>
				<Condition id="98" name="ccc_submit_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;submit&quot;)" sourceType2="Expression" start="Panel1Panel2SO_Fact_Sabana_new1.onsubmit;">
					<Components/>
					<Events/>
					<ControlPoints>
						<ControlPoint id="99" name="Panel1Panel2SO_Fact_Sabana_new1.onsubmit" relProperty="start">
							<Items>
								<ControlPointItem id="100" name="historico" ccpId="1" type="Page" isFeature="False"/>
								<ControlPointItem id="101" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
								<ControlPointItem id="102" name="Panel2" ccpId="53" type="Panel" isFeature="False" PathID="Panel1Panel2"/>
								<ControlPointItem id="103" name="SO_Fact_Sabana_new1" ccpId="54" type="Record" isFeature="False" PathID="Panel1Panel2SO_Fact_Sabana_new1"/>
							</Items>
						</ControlPoint>
					</ControlPoints>
					<Features/>
				</Condition>
				<Condition id="113" name="ccc_others_Condition" category="Ajax" condition="==" sourceType1="Expression" name1="true" name2="(params[&quot;click&quot;] = &quot;&quot;)" sourceType2="Expression" start="Panel1Panel2DialogPanel1.onshow;Panel1Panel2DialogPanel1.onhide;">
					<Components/>
					<Events/>
					<ControlPoints>
						<ControlPoint id="114" name="Panel1Panel2DialogPanel1.onshow" relProperty="start">
							<Items>
								<ControlPointItem id="115" name="historico" ccpId="1" type="Page" isFeature="False"/>
								<ControlPointItem id="116" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
								<ControlPointItem id="117" name="Panel2" ccpId="53" type="Panel" isFeature="False" PathID="Panel1Panel2"/>
								<ControlPointItem id="118" name="DialogPanel1" ccpId="104" type="JDialog" isFeature="True" PathID="Panel1Panel2DialogPanel1"/>
							</Items>
						</ControlPoint>
						<ControlPoint id="119" name="Panel1Panel2DialogPanel1.onhide" relProperty="start">
							<Items>
								<ControlPointItem id="120" name="historico" ccpId="1" type="Page" isFeature="False"/>
								<ControlPointItem id="121" name="Panel1" ccpId="2" type="Panel" isFeature="False" PathID="Panel1"/>
								<ControlPointItem id="122" name="Panel2" ccpId="53" type="Panel" isFeature="False" PathID="Panel1Panel2"/>
								<ControlPointItem id="123" name="DialogPanel1" ccpId="104" type="JDialog" isFeature="True" PathID="Panel1Panel2DialogPanel1"/>
							</Items>
						</ControlPoint>
					</ControlPoints>
					<Features/>
				</Condition>
			</Features>
		</Panel>
		<IncludePage id="127" name="Header" PathID="Header" page="Header.ccp">
			<Components/>
			<Events/>
			<Features/>
		</IncludePage>
	</Components>
	<CodeFiles>
		<CodeFile id="Events" language="PHPTemplates" name="historico_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="historico.php" forShow="True" url="historico.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events>
		<Event name="BeforeShow" type="Server">
			<Actions>
				<Action actionName="Custom Code" actionCategory="General" id="124"/>
			</Actions>
		</Event>
	</Events>
</Page>
