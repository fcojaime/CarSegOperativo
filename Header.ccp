<Page id="1" templateExtension="html" relativePath="." fullRelativePath="." secured="False" urlType="Relative" isIncluded="True" SSLAccess="False" isService="False" cachingEnabled="False" cachingDuration="1 minutes" wizardTheme="{CCS_Style}" wizardThemeVersion="3.0" needGeneration="0" pasteActions="pasteActions" PathID="Header">
	<Components>
		<Hidden id="12" fieldSourceType="DBColumn" dataType="Text" name="hdLogoPath" PathID="HeaderhdLogoPath">
			<Components/>
			<Events/>
			<Attributes/>
			<Features/>
		</Hidden>
		<Panel id="13" visible="True" generateDiv="False" name="Panel1" wizardInnerHTML=" &lt;td style=&quot;FONT-SIZE: 10px; WIDTH: 25%; FONT-WEIGHT: bold; COLOR: rgb(0,122,173); BACKGROUND-COLOR: rgb(222,222,213)&quot;&gt;
      &lt;div style=&quot;HEIGHT: 24px; COLOR: #444444; MARGIN-LEFT: 7px; BACKGROUND-COLOR: #ffffff&quot;&gt;
        &lt;img style=&quot;MARGIN-TOP: 5px&quot; src=&quot;images/user.png&quot;&gt;&lt;/img&gt;&amp;nbsp;&amp;nbsp;Usuario:&amp;nbsp;{lSesion} 
      &lt;/div&gt;
 &lt;/td&gt; 
    &lt;td style=&quot;FONT-SIZE: 10px; WIDTH: 30%; FONT-WEIGHT: bold; COLOR: rgb(0,122,173); BACKGROUND-COLOR: rgb(222,222,213)&quot;&gt;
      &lt;div style=&quot;HEIGHT: 24px; MARGIN-LEFT: 0px; BACKGROUND-COLOR: #ffffff&quot;&gt;
        &amp;nbsp;&lt;img id=&quot;HeaderImage1&quot; style=&quot;MARGIN-TOP: 5px&quot; alt=&quot;Cerrar Sesión&quot; src=&quot;images/cierre.png&quot;&gt;&amp;nbsp; &lt;a href=&quot;{Link1_Src}&quot; id=&quot;HeaderMyMLink1&quot;&gt;Cerrar Sesión&lt;/a&gt; &lt;img style=&quot;MARGIN-TOP: 0px; MARGIN-RIGHT: -2px&quot; src=&quot;images/cierre2.png&quot;&gt;
      &lt;/div&gt;
 &lt;/td&gt; " PathID="HeaderPanel1">
			<Components>
				<Link id="15" visible="Yes" fieldSourceType="DBColumn" dataType="Text" html="False" hrefType="Page" urlType="Relative" preserveParameters="GET" name="BackTablero1" PathID="HeaderPanel1BackTablero1" wizardUseTemplateBlock="False" linkProperties="{&quot;textSource&quot;:&quot;Regresar al  Tablero &quot;,&quot;textSourceDB&quot;:&quot;&quot;,&quot;hrefSource&quot;:&quot;/mymsdma4/Index.php&quot;,&quot;hrefSourceDB&quot;:&quot;&quot;,&quot;title&quot;:&quot;&quot;,&quot;target&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;linkParameters&quot;:{&quot;length&quot;:0,&quot;objectType&quot;:&quot;linkParameters&quot;}}" hrefSource="/mymsdma4/Index.php">
					<Components/>
					<Events/>
					<LinkParameters/>
					<Attributes/>
					<Features/>
				</Link>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
		<Panel id="14" visible="True" generateDiv="False" name="Panel2" wizardInnerHTML="&lt;table&gt;&lt;tr&gt;&lt;td&gt;
    &lt;div style=&quot;FONT-SIZE: 12px; HEIGHT: 20px; WIDTH: 100px; COLOR: #444444; MARGIN-LEFT: 7px; BACKGROUND-COLOR: #ffffff&quot;&gt;
		&lt;a href=&quot;{Link4_Src}&quot; id=&quot;HeaderMyMLink4&quot;&gt;Tablero SLAs&lt;/a&gt;&lt;/div&gt;&lt;/td&gt;&lt;td&gt;&lt;div style=&quot;FONT-SIZE: 12px; HEIGHT: 20px; WIDTH: 125px; COLOR: #444444; MARGIN-LEFT: 7px; BACKGROUND-COLOR: #ffffff&quot;&gt;
		&lt;a href=&quot;{Link5_Src}&quot; id=&quot;HeaderMyMLink5&quot;&gt;Métricas y Mediciones&lt;/a&gt; 
    &lt;/div&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;" PathID="HeaderPanel2">
			<Components>
			</Components>
			<Events/>
			<Attributes/>
			<Features/>
		</Panel>
	</Components>
	<CodeFiles>
		<CodeFile id="Events" language="PHPTemplates" name="Header_events.php" forShow="False" comment="//" codePage="windows-1252"/>
		<CodeFile id="Code" language="PHPTemplates" name="Header.php" forShow="True" url="Header.php" comment="//" codePage="windows-1252"/>
	</CodeFiles>
	<SecurityGroups/>
	<CachingParameters/>
	<Attributes/>
	<Features/>
	<Events>
		<Event name="BeforeShow" type="Server">
			<Actions>
				<Action actionName="Custom Code" actionCategory="General" id="9"/>
			</Actions>
		</Event>
	</Events>
</Page>
