/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP 1000 [id_registro]
      ,[Fecha_Carga]
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
  FROM [Reportes_ACDMA].[dbo].[SO_Fact_Sabana_new] --[
  ---proyectos  
  select s.ID_PROYECTO, s.num_renglon from SO_Fact_Sabana_new  s where s.ID_Proyecto not in (select distinct ID_Proyecto from SO_Fact_Requerimientos ) 
  and id_registro=1 and id_usuario=2 order by 2
  --administración
  select s.Administracion, s.num_renglon from SO_Fact_Sabana_new  s where s.Administracion not in (select distinct Administracion from SO_Cat_Administracion_Req ) 
  and id_registro=1 and id_usuario=2 order by 2
  --RAPE
  select s.Nombre_Rape, s.num_renglon from SO_Fact_Sabana_new  s where s.Nombre_Rape not in (select distinct Nombre_Rape from SO_Cat_Rapes ) 
  and id_registro=1 and id_usuario=2 order by 2
  --AS
  select s.Nombre_AS, s.num_renglon from SO_Fact_Sabana_new  s where s.Nombre_AS not in (select distinct Nombre_AS from SO_Cat_AS ) 
  and id_registro=1 and id_usuario=2 order by 2
  --SO_Cat_ServicioNegocio_Req
  select s.Servicio_Negocio, s.num_renglon from SO_Fact_Sabana_new  s where s.Servicio_Negocio not in (select distinct [servicio_negocio] from SO_Cat_ServicioNegocio_Req ) 
  and id_registro=1 and id_usuario=2 order by 2
  --SO_Cat_fabricaSoftware_Req
  select s.Fabrica_Software, s.num_renglon from SO_Fact_Sabana_new  s where s.Fabrica_Software not in (select distinct fabrica_Software from SO_Cat_fabricaSoftware_Req ) 
  and id_registro=1 and id_usuario=2 order by 2
 --SO_Cat_FasesReal_Req
  select s.Fase_Real, s.num_renglon from SO_Fact_Sabana_new  s where s.Fase_Real not in (select distinct fase_real from SO_Cat_FasesReal_Req ) 
  and id_registro=1 and id_usuario=2 order by 2 
  --SO_Origen_Req
  select s.Origen_requerimiento, s.num_renglon from SO_Fact_Sabana_new  s where s.Origen_requerimiento not in (select distinct origen_requerimiento from SO_Cat_Origen_Req ) 
  and id_registro=1 and id_usuario=2 order by 2  
   --SO_SemaforoFaseReal_Req
  select s.Semaforo_Fase_Real, s.num_renglon from SO_Fact_Sabana_new  s where s.Fase_Real not in (select distinct Semaforo_Fase_Real from SO_Cat_SemaforoFaseReal_Req ) 
  and id_registro=1 and id_usuario=2 order by 2 

     --SO_Cat_AreaDependencias_Req
  select s.Dependencia, s.num_renglon from SO_Fact_Sabana_new  s where s.Dependencia not in (select distinct Dependencia from SO_Cat_Dependencias_Req ) 
  and id_registro=1 and id_usuario=2 order by 2 
  
  
  
  
  