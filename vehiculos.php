<?php
include("../include/conexion.php");
include("../include/busquedas.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Vehículos</title>
  <!--icono en el titulo-->
  <link rel="shortcut icon" href="">

  <!-- Bootstrap -->
  <link href="plantilla/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plantilla/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="plantilla/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="plantilla/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="plantilla/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="plantilla/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="plantilla/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="plantilla/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="plantilla/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="plantilla/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


          <?php include("include/menu.php"); ?>

          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">

                </div>


              </div>
              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Vehículos</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target=".registrar"><i class="fa fa-plus-square"></i> Nuevo</button>


                      <!--MODAL REGISTRAR-->
                      <div class="modal fade registrar" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel" align="center">Registrar Vehículo</h4>
                            </div>
                            <div class="modal-body">
                              <!--INICIO CONTENIDO DE MODAL-->
                              <div class="x_panel">

                                <div class="" align="center">
                                  <h2></h2>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                  <br />
                                  <form role="form" action="operaciones/registrar_empresa.php" class="form-horizontal form-label-left input_mask" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label>Municipalidad</label>
                                      <select name="municipalidad" class="form-control">
                                        <option value="">muni 1</option>
                                        <option value="">muni 2</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Empresa</label>
                                      <select name="empres" class="form-control">
                                        <option value="">Empresa 1</option>
                                        <option value="">Empresa 2</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Nro Municipal</label>
                                      <input type="text" class="form-control" required name="nro_muni">
                                    </div>
                                    <div class="form-group">
                                      <label>Placa</label>
                                      <input type="text" class="form-control" required name="placa">
                                    </div>
                                    <div class="form-group">
                                      <label>Marca</label>
                                      <input type="text" class="form-control" required name="marca">
                                    </div>
                                    <div class="form-group">
                                      <label>Modelo</label>
                                      <input type="text" class="form-control" required name="modelo">
                                    </div>
                                    <div class="form-group">
                                      <label>Color</label>
                                      <input type="text" class="form-control" required name="color">
                                    </div>
                                    <div class="form-group">
                                      <label>Conductor</label>
                                      <input type="text" class="form-control" required name="conductor">
                                    </div>
                                    <div class="form-group">
                                      <label>Foto Vehículo</label>
                                      <input type="file" class="form-control" required name="foto">
                                    </div>
                                    <div class="form-group">
                                      <label>Soat</label>
                                      <input type="file" class="form-control" required name="soat">
                                    </div>
                                    <div class="form-group">
                                      <label>Fecha de Vencimiento Soat</label>
                                      <input type="date" class="form-control" required name="fecha_soat">
                                    </div>
                                    <div class="form-group">
                                      <label>Revisión Técnica</label>
                                      <input type="file" class="form-control" required name="soat">
                                    </div>
                                    <div class="form-group">
                                      <label>Fecha de Vencimiento Revisión Técnica</label>
                                      <input type="date" class="form-control" required name="fecha_revision">
                                    </div>




                                    <div class="form-group mb-0">
                                      <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                              <!--FIN DE CONTENIDO DE MODAL-->
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- FIN MODAL REGISTRAR-->
                      <br />
                      <div class="x_content">
                        <table id="example" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Nro</th>
                              <th>Ruc</th>
                              <th>Nombre Comercial</th>
                              <th>Direccion</th>
                              <th>Telefono</th>
                              <th>Correo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>


                          <tbody>
                            <?php

                            for ($i = 0; $i < 2; $i++) {
                              # code...

                              $cont++;


                            ?>
                              <tr>
                                <td><?php echo $cont; ?></td>
                                <td>ruc</td>
                                <td>nombre</td>
                                <td>departqamentp - provincia - distrito</td>
                                <td>telefono</td>
                                <td>correo</td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target=".editar<?php echo $r_b_docentes['id']; ?>">Editar</button></td>
                              </tr>
                              <!--MODAL EDITAR-->
                              <div class="modal fade editar<?php echo $r_b_docentes['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">

                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                      </button>
                                      <h4 class="modal-title" id="myModalLabel" align="center">Editar Docente</h4>
                                    </div>
                                    <div class="modal-body">
                                      <!--INICIO CONTENIDO DE MODAL-->
                                      <div class="x_panel">

                                        <div class="" align="center">
                                          <h2></h2>
                                          <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                          <br />
                                          <form role="form" action="operaciones/editar_docente.php" class="form-horizontal form-label-left input_mask" method="POST">
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Dni : </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <input type="number" maxlength="8" class="form-control" value="<?php echo $r_b_docentes['dni']; ?>" name="editar_dni" readonly>
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellidos y Nombres: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <input type="text" maxlength="150" class="form-control" value="<?php echo $r_b_docentes['apellidos_nombres']; ?>" name="editar_apellidos_nombres">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <input type="email" maxlength="150" class="form-control" name="editar_correo" required="required" value="<?php echo $r_b_docentes['correo']; ?>">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Direccion: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <input type="text" maxlength="150" class="form-control" name="editar_direccion" required="required" value="<?php echo $r_b_docentes['direccion']; ?>">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefono: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <input type="text" maxlength="150" class="form-control" name="editar_telefono" required="required" value="<?php echo $r_b_docentes['telefono']; ?>">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento : </label>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                  <input type="date" class="form-control" name="editar_fecha_nacimiento" required="required" value="<?php echo $r_b_docentes['fecha_nac']; ?>">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Genero: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <select class="form-control" name="editar_genero" id="genero" required>
                                                    <option value=""></option>
                                                    <option value="M" <?php if ($r_b_docentes['genero'] == "M") {
                                                                        echo "selected";
                                                                      } ?>>Masculino</option>
                                                    <option value="F" <?php if ($r_b_docentes['genero'] == "F") {
                                                                        echo "selected";
                                                                      } ?>>Femenino</option>
                                                  </select>
                                                  <br>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Contrato : </label>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                  <input type="date" class="form-control" name="editar_fecha_contrato" required="required" value="<?php echo $r_b_docentes['fecha_contrato']; ?>">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Grado Academico: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <input type="text" maxlength="150" class="form-control" name="editar_grado_academico" required="required" value="<?php echo $r_b_docentes['grado_academico']; ?>">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Condición Laboral: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <select class="form-control" name="editar_condicion_laboral" id="editar_condicion_laboral" required>
                                                    <option value=""></option>
                                                    <option value="Contratado" <?php if ($r_b_docentes['cond_laboral'] == "Contratado") {
                                                                                  echo "selected";
                                                                                } ?>>Contratado</option>
                                                    <option value="Nombrado" <?php if ($r_b_docentes['cond_laboral'] == "Nombrado") {
                                                                                echo "selected";
                                                                              } ?>>Nombrado</option>
                                                  </select>
                                                  <br>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <select class="form-control" name="editar_cargo" id="editar_cargo" required>
                                                    <option value=""></option>
                                                    <option value="Director" <?php if ($r_b_docentes['cargo'] == "Director") {
                                                                                echo "selected";
                                                                              } ?>>Director</option>
                                                    <option value="Secretario Academico" <?php if ($r_b_docentes['cargo'] == "Secretario Academico") {
                                                                                            echo "selected";
                                                                                          } ?>>Secretario Académico</option>
                                                    <option value="Docente" <?php if ($r_b_docentes['cargo'] == "Docente") {
                                                                              echo "selected";
                                                                            } ?>>Docente</option>
                                                  </select>
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <select class="form-control" name="editar_estado" id="editar_estado" required>
                                                    <option value=""></option>
                                                    <option value="1" <?php if ($r_b_docentes['estado'] == "1") {
                                                                        echo "selected";
                                                                      } ?>>Activo</option>
                                                    <option value="0" <?php if ($r_b_docentes['estado'] == "0") {
                                                                        echo "selected";
                                                                      } ?>>Inactivo</option>

                                                  </select>
                                                  <br>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <div class="row">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto: </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                  <img src="<?php echo $r_b_docentes['foto']; ?>" alt="" width="50px">
                                                  <br>
                                                  <input type="file" class="form-control" name="editar_foto" accept="image/jpg">
                                                  <br>
                                                </div>
                                              </div>
                                            </div>
                                            <input type="hidden" name="data_edit" value="<?php echo $r_b_docentes['id']; ?>">
                                            <div align="center">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                              <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                      <!--FIN DE CONTENIDO DE MODAL-->
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- FIN MODAL EDITAR-->
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>





                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->

          <!-- footer content -->
          <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>

      <!-- jQuery -->
      <script src="plantilla/vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="plantilla/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="plantilla/vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="plantilla/vendors/nprogress/nprogress.js"></script>
      <!-- iCheck -->
      <script src="plantilla/vendors/iCheck/icheck.min.js"></script>
      <!-- Datatables -->
      <script src="plantilla/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="plantilla/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="plantilla/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="plantilla/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
      <script src="plantilla/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="plantilla/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="plantilla/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="plantilla/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
      <script src="plantilla/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
      <script src="plantilla/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="plantilla/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
      <script src="plantilla/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
      <script src="plantilla/vendors/jszip/dist/jszip.min.js"></script>
      <script src="plantilla/vendors/pdfmake/build/pdfmake.min.js"></script>
      <script src="plantilla/vendors/pdfmake/build/vfs_fonts.js"></script>

      <!-- Custom Theme Scripts -->
      <script src="plantilla/build/js/custom.min.js"></script>

      <script>
        $(document).ready(function() {
          $('#example').DataTable({
            "language": {
              "processing": "Procesando...",
              "lengthMenu": "Mostrar _MENU_ registros",
              "zeroRecords": "No se encontraron resultados",
              "emptyTable": "Ningún dato disponible en esta tabla",
              "sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
              "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
              "infoFiltered": "(filtrado de un total de _MAX_ registros)",
              "search": "Buscar:",
              "infoThousands": ",",
              "loadingRecords": "Cargando...",
              "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
              },
            }
          });

        });
      </script>


</body>

</html>