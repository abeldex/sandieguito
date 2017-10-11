<?php
include('../inc/header.php');
//incluir conexion
include('../inc/conexion.php');

?>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
     <div class="m-content">
      <!-- aqui una prueba con ajax-->
      <div class="m-portlet m-portlet--mobile">
       <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
         <div class="m-portlet__head-title">
          <h3 class="m-portlet__head-text">
           Remisiones
           <small>
            Administración
           </small>
          </h3>
         </div>
        </div>
       </div>
       <div class="m-portlet__body">
        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
         <div class="row align-items-center">
          <div class="col-xl-8 order-2 order-xl-1">
           <div class="form-group m-form__group row align-items-center">
            <div class="col-md-4">
             <div class="m-input-icon m-input-icon--left">
              <input type="text" class="form-control m-input" placeholder="Buscar..." id="m_form_search">
              <span class="m-input-icon__icon m-input-icon__icon--left">
               <span>
                <i class="la la-search"></i>
               </span>
              </span>
             </div>
            </div>
           </div>
          </div>
          <div class="col-xl-12 order-1 order-xl-2 m--align-right">
           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal_remi">
            <span>
             <i class="flaticon-open-box"></i>
             <span>
              Nueva Remision
             </span>
            </span>
           </a>
           <div class="m-separator m-separator--dashed d-xl-none"></div>
          </div>
         </div>
        </div>
        <!--end: Search Form -->

        <div class="m_datatable_r"></div>


       </div>
      </div>
      
     </div>
    </div>
 

   <div class="modal fade" id="modal_remi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Nueva Remision</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </div>
           <div class="modal-body">
             <form id="nuevo_operador" method="POST" action="remisiones/insertar.php">
               <div class="form-group">
                 <label for="no_remision" class="form-control-label">Numero de Remisión:</label>
                 <input type="text" class="form-control" id="no_remision" name="no_remision">
               </div>
               <div class="form-group">
                 <label for="fecha" class="form-control-label">Fecha de Remisión:</label>
                 <div class='input-group date' id='m_datepicker_2'>
            <input type='text' class="form-control m-input" readonly  placeholder="Seleccionar Fecha" name="fecha" />
            <span class="input-group-addon">
             <i class="la la-calendar-check-o"></i>
            </span>
           </div>
               </div>
               <div class="form-group">
                 <label for="fecha" class="form-control-label">EMPRESA:</label>
                 <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true" name="empresa">
                  <!--select para los permisionarios-->
                  <?php

          $sql = "SELECT * FROM empresas";
          $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
          while($row = mysqli_fetch_array($result_scale))
          {
           unset($id, $name);
              $id = $row['id_empresa'];
              $name = $row['nombre_empresa']; 
              echo '<option value="'.$id.'">'.$name.'</option>';
          }
          
         ?> 
         </select>
               </div>
               
               <div class="form-group">
                 <label for="fecha" class="form-control-label">Placas Camion:</label>
                 <input type="text" class="form-control" id="placas" name="placas">   
               </div>
                <div class="form-group">
                 <label for="chofer" class="form-control-label">Operador:</label>
                 <input type="text" class="form-control" id="operador" name="operador">   
                 
               </div>
               <div class="form-group">
                 <label for="fecha" class="form-control-label">Material:</label>
                  <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true" name="material">
                  <!--select para los permisionarios-->
                  <?php

          $sql = "SELECT * FROM materiales";
          $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
          while($row = mysqli_fetch_array($result_scale))
          {
           unset($id, $name);
              $id = $row['id_material'];
              $name = $row['nombre_material']; 
              echo '<option value="'.$id.'">'.$name.'</option>';
          }
          
         ?> 
         </select>
   
               </div>

               <div class="form-group">
                 <label for="unidad_m3" class="form-control-label">Unidad Mts.:</label>
                 <input type="number" class="form-control" id="obrunidad_m3a" name="unidad_m3">
               </div>

              
               <div class="form-group">
                 <label for="obra" class="form-control-label">Obra:</label>
                 <input type="text" class="form-control" id="obra" name="obra">
               </div>
                <div class="form-group">
                 <label for="fecha" class="form-control-label">Recibido de Obra:</label>
                 <div class='input-group date' id='m_datepicker_2'>
            <input type='text' class="form-control m-input" readonly  placeholder="Seleccionar Fecha" name="recibido_obra" />
            <span class="input-group-addon">
             <i class="la la-calendar-check-o"></i>
            </span>
           </div>
               </div>
               
                <div class="form-group">
                 <label for="unidad_m3" class="form-control-label">Placas Gondola:</label>
                 <input type="text" class="form-control" id="obrunidad_m3a" name="placas_gondola">
               </div>
               
             
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
             <button type="submit" class="btn btn-primary">Guardar</button>
             </form>
           </div>
         </div>
       </div>
     </div>    

    
    
<?php
include('../inc/footer.php');
?>