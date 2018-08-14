$(document).ready(function(){ 

	$(document).on("keyup","div.dataTables_filter input", function (e) {
		//var table = $('#tbvehiculo').DataTable();
 		trs = $("table tbody tr").length;
		$("#cantidad").text(trs);

	} );

	$("#btn-aprobar-todo").on("click", function(){
		swal({
		    title: "¿Estas seguro de Aprobar todos los alistamientos?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		     	$.ajax({
					url: base_url + "ingresos/alistamientos/aprobartodos",
					type:"POST",
					success:function(resp){
						window.location.href = base_url + resp;
					}
				});
		    } 
		 });
	});
	$("#show-revisiones").on("click",function(e){
		e.preventDefault();
		$("#revisiones").css("display","block");
		$("#aprobados").css("display","none");
		$("#desaprobados").css("display","none");
		$("#extintores").css("display","none");
		$("#licencias").css("display","none");
		$("#tarjetas").css("display","none");
		$("#soats").css("display","none");
	})
	$("#show-tarjetas").on("click",function(e){
		e.preventDefault();
		$("#revisiones").css("display","none");
		$("#aprobados").css("display","none");
		$("#desaprobados").css("display","none");
		$("#extintores").css("display","none");
		$("#licencias").css("display","none");
		$("#tarjetas").css("display","block");
		$("#soats").css("display","none");
	})
	$("#show-soats").on("click",function(e){
		e.preventDefault();
		$("#revisiones").css("display","none");
		$("#aprobados").css("display","none");
		$("#desaprobados").css("display","none");
		$("#extintores").css("display","none");
		$("#licencias").css("display","none");
		$("#tarjetas").css("display","none");
		$("#soats").css("display","block");
	})
	$("#show-extintores").on("click",function(e){
		e.preventDefault();
		$("#revisiones").css("display","none");
		$("#aprobados").css("display","none");
		$("#desaprobados").css("display","none");
		$("#extintores").css("display","block");
		$("#licencias").css("display","none");
		$("#tarjetas").css("display","none");
		$("#soats").css("display","none");
	})
	$("#show-licencias").on("click",function(e){
		e.preventDefault();
		$("#revisiones").css("display","none");
		$("#aprobados").css("display","none");
		$("#desaprobados").css("display","none");
		$("#extintores").css("display","none");
		$("#licencias").css("display","block");
		$("#tarjetas").css("display","none");
		$("#soats").css("display","none");
	})
	$("#show-aprobados").on("click",function(e){
		e.preventDefault();
		$("#revisiones").css("display","none");
		$("#aprobados").css("display","block");
		$("#desaprobados").css("display","none");
		$("#extintores").css("display","none");
		$("#licencias").css("display","none");
		$("#tarjetas").css("display","none");
		$("#soats").css("display","none");
	})
	$("#show-desaprobados").on("click",function(e){
		e.preventDefault();
		$("#revisiones").css("display","none");
		$("#aprobados").css("display","none");
		$("#desaprobados").css("display","block");
		$("#extintores").css("display","none");
		$("#licencias").css("display","none");
		$("#tarjetas").css("display","none");
		$("#soats").css("display","none");
	})
	$(document).on("click", "#btn-agregar-mantenimiento", function(){
		$("#form-mantenimiento")[0].reset();
		$("#idMantenimiento").val(null);
	});
	$(document).on("click", ".btn-edit-mantenimiento", function(){
		id = $(this).val();
		$("#idMantenimiento").val(id);
		$.ajax({
			url: base_url + "mantenimientos/vehiculos/getMantenimiento",
			type: "POST",
			data: {id: id},
			dataType:"json",
			success:function(resp){
				$("#numfac").val(resp.numfac);
				$("#costo").val(resp.costo);
				$("#descripcion").val(resp.descripcion);
				$("#proveedor").val(resp.proveedor);
				$("#fecha").val(resp.fecha_vencimiento);
				$("#tipomantenimiento").val(resp.tipomantenimiento_id);
				$("#cantidad").val(resp.cantidad);
			}
		});
	});
	$(document).on("click", ".btn-subir", function(){
		valorbtn = $(this).val(); 
		info = valorbtn.split("*");
		$("#idUsuario").val(info[0]);
		if (info[1] !="") {
			html = "<img src='"+base_url+"assets/images/firmas/"+info[1]+"' class='imagen-firma img-responsive'>";
			$(".imagen").html(html);
			$(".label-imagen").text("Actualizar Firma:");
		} else{
			$(".imagen").html("");
			$(".label-imagen").text("Subir Firma:");
		}

	});

	$(document).on("submit","#form-change-firma",function(e){
		e.preventDefault();

		var formData = new FormData($("#form-change-firma")[0]);

		$.ajax({
			url: base_url + "administrador/usuarios/changeFirma",
			type:"POST",
			data: formData,
			cache:false,
			contentType:false,
			processData:false,
			dataType:"json",
			success:function(resp){
				if (resp.status == 1) {
					swal({
					     title: "Bien Hecho!",
					     text: "Su imagen de Firma fue actualizada",
					     type: "success",
					     timer: 3000
					     },
					     function () {
					            location.reload(true);
					            tr.hide();
					    });
					/*swal("Registro Exitoso!", "Su imagen de Perfil fue actualizada", "success");
					window.location.href = base_url + "usuario/perfil";*/
				}else{
					//alert(resp.error);
					swal("Error!", resp.error.replace(/(<([^>]+)>)/ig,""), "error");
				}
			}
		});
	});
	$("#form-change-hoja").submit(function(e){
		e.preventDefault();
		var formData = new FormData($("#form-change-hoja")[0]);

		$.ajax({
			url: base_url + "administrador/usuarios/changeHoja",
			type:"POST",
			data: formData,
			cache:false,
			contentType:false,
			processData:false,
			dataType:"json",
			success:function(resp){
				if (resp.status == 1) {
					swal({
					     title: "Bien Hecho!",
					     text: "Su hoja de vida fue actualizada",
					     type: "success",
					     timer: 3000
					     },
					     function () {
					            location.reload(true);
					            tr.hide();
					    });
				}else{
					swal("Error!", resp.error.replace(/(<([^>]+)>)/ig,""), "error");
				}
			}
		});
	});
	$("#form-change-image").submit(function(e){
		e.preventDefault();

		var formData = new FormData($("#form-change-image")[0]);

		$.ajax({
			url: base_url + "administrador/usuarios/changeImagen",
			type:"POST",
			data: formData,
			cache:false,
			contentType:false,
			processData:false,
			dataType:"json",
			success:function(resp){
				if (resp.status == 1) {
					swal({
					     title: "Bien Hecho!",
					     text: "Su imagen de Perfil fue actualizada",
					     type: "success",
					     timer: 3000
					     },
					     function () {
					            location.reload(true);
					            tr.hide();
					    });
					/*swal("Registro Exitoso!", "Su imagen de Perfil fue actualizada", "success");
					window.location.href = base_url + "usuario/perfil";*/
				}else{
					//alert(resp.error);
					swal("Error!", resp.error.replace(/(<([^>]+)>)/ig,""), "error");
				}
			}
		});
	});

	$(document).on("click", ".btn-aprobar", function(){
		data = $(this).val();
		info = data.split("*");
		id = info[0];
		estado = info[1];
		if (estado == 1) {
			mensaje = "¿Estas seguro de Aprobar el alistamiento?";
		}else{
			mensaje = "¿Estas seguro de No Aprobar el alistamiento?";
		}
		swal({
		    title: mensaje,
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		   		$.ajax({
					url: base_url + "ingresos/alistamientos/cambiarEstado",
					type:"POST",
					data: {id: id, estado:estado},
					success:function(resp){
						window.location.href = base_url + resp;
					}
				});
		    } 
		});
	})

	$(document).on("change", ".desaprobar", function(){
		radio = $(this);
		alert(radio.val());
		radio.removeAttr("checked");
		/*swal({
		    title: "¿Estas seguro de desaprobar el alistamiento?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		   		alert("aprobado");
		     	/*$.ajax({
					url: base_url + "ingresos/empresas/delete",
					type:"POST",
					data: {id: id},
					success:function(resp){
						window.location.href = base_url + resp;
					}
				});
		    } else{
		    	radio.val("");
		    }
		});*/
	})

	$(document).on("click",".btn-print",function(){

        $(".modal-body").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 750,
            title: "  ",
            doctype: '<!doctype html>'
        });
    });

	$(".btn-view-alistamiento").on("click", function(){
		id = $(this).val();
		$.ajax({
				url: base_url + "ingresos/alistamientos/getAlistamiento",
				type:"POST",
				data: {id: id},
				success:function(resp){
					$("#modal-default .modal-body").html(resp);
				}
			});
	});
	$(".btn-view-empresa").on("click", function(){
		id = $(this).val();
		$.ajax({
				url: base_url + "ingresos/empresas/view",
				type:"POST",
				data: {id: id},
				success:function(resp){
					$("#modal-default .modal-body").html(resp);
				}
			});
	});
	$(".btn-view-proveedor").on("click", function(){
		id = $(this).val();
		$.ajax({
				url: base_url + "ingresos/proveedores/view",
				type:"POST",
				data: {id: id},
				success:function(resp){
					$("#modal-default .modal-body").html(resp);
				}
			});
	});
	$(".btn-delete-empresa").on("click", function(){
		id = $(this).val();

		swal({
		    title: "¿Estas seguro de eliminar el registro?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		     	$.ajax({
					url: base_url + "ingresos/empresas/delete",
					type:"POST",
					data: {id: id},
					success:function(resp){
						window.location.href = base_url + resp;
					}
				});
		    } 
		 });
		
	});
	$(".btn-delete-proveedor").on("click", function(){
		id = $(this).val();

		swal({
		    title: "¿Estas seguro de eliminar el registro?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		     	$.ajax({
					url: base_url + "ingresos/proveedores/delete",
					type:"POST",
					data: {id: id},
					success:function(resp){
						window.location.href = base_url + resp;
					}
				});
		    } 
		 });
		
	});
	$(".btn-view-conductor").on("click", function(){
		id = $(this).val();
		$.ajax({
				url: base_url + "ingresos/conductores/view",
				type:"POST",
				data: {id: id},
				success:function(resp){
					$("#modal-default .modal-body").html(resp);
				}
			});
	});

	$(".btn-delete-conductor").on("click", function(){
		id = $(this).val();

		swal({
		    title: "¿Estas seguro de eliminar el registro?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		     	$.ajax({
					url: base_url + "ingresos/conductores/delete",
					type:"POST",
					data: {id: id},
					success:function(resp){
						window.location.href = base_url + resp;
					}
				});
		    } 
		 });
		
	});

	$(".btn-view-vehiculo").on("click", function(){
		id = $(this).val();
		$.ajax({
				url: base_url + "ingresos/vehiculos/view",
				type:"POST",
				data: {id: id},
				success:function(resp){
					$("#modal-default .modal-body").html(resp);
				}
			});
	});

	$(".btn-delete-vehiculo").on("click", function(){
		id = $(this).val();

		swal({
		    title: "¿Estas seguro de eliminar el registro?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		     	$.ajax({
					url: base_url + "ingresos/vehiculos/delete",
					type:"POST",
					data: {id: id},
					success:function(resp){
						window.location.href = base_url + resp;
					}
				});
		    } 
		 });
		
	});


	/*$(".checks_alistamiento").on("change", function(){
		alert("hola");
		$(this).val(0);
	});*/
	$(".btn-habilitar").on("click", function(){
		id = $(this).val();
		swal({
		    title: "¿Estas de habilitar al usuario seleccionado?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		     	ActualizarUsuario(id, 1);
		    } 
		 });
		

		//ActualizarUsuario(id, 1);
	});
	$(".btn-deshabilitar").on("click", function(){
		id = $(this).val();

		swal({
		    title: "¿Estas de deshabilitar al usuario seleccionado?",
		    text: "Si esta seguro de hacerlo haga click en el boton Aceptar, caso contrario haga click en cancelar",
		    type: "warning",
	        showCancelButton: true,
	        confirmButtonClass: "btn-danger",
	        confirmButtonText: "Aceptar",
	        closeOnConfirm: false,
	        showLoaderOnConfirm: true,
		},
		function(isConfirm){

		   	if (isConfirm){
		     	ActualizarUsuario(id, 0);
		    } 
		 });
		
	});
	$(document).ready(function() {
        $('#tbproveedor').DataTable({
            dom: 'lBfrtip',
            language: {
	            "lengthMenu": "Mostrar _MENU_ registros por pagina",
	            "zeroRecords": "No se encontraron resultados en su busqueda",
	            "searchPlaceholder": "Buscar registros",
	            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
	            "infoEmpty": "No existen registros",
	            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "search": "Buscar:",
	            "paginate": {
	                "first": "Primero",
	                "last": "Último",
	                "next": "Siguiente",
	                "previous": "Anterior"
	            },
	        },
            buttons: [
                {
	                extend: 'excelHtml5',
	                title: "Listado de Proveedores",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5,6,7 ]
	                },
	            },
	            {
	                extend: 'pdfHtml5',
	                title: "Listado de Proveedores",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5 ,6,7]
	                }
	                
	            }
            ],
            pageSize: 'A4',
            content: [{ style: 'fullWidth' }],
            styles: { // style for printing PDF body
                    fullWidth: { fontSize: 18, bold: true, alignment: 'right', margin: [0,0,0,0] }
            },
        });
    } );
    $(document).ready(function() {
        $('#tbempresa').DataTable({
            dom: 'lBfrtip',
            language: {
	            "lengthMenu": "Mostrar _MENU_ registros por pagina",
	            "zeroRecords": "No se encontraron resultados en su busqueda",
	            "searchPlaceholder": "Buscar registros",
	            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
	            "infoEmpty": "No existen registros",
	            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "search": "Buscar:",
	            "paginate": {
	                "first": "Primero",
	                "last": "Último",
	                "next": "Siguiente",
	                "previous": "Anterior"
	            },
	        },
            buttons: [
                {
	                extend: 'excelHtml5',
	                title: "Listado de Empresas",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5,6,7 ]
	                },
	            },
	            {
	                extend: 'pdfHtml5',
	                title: "Listado de Empresas",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5 ,6,7]
	                }
	                
	            }
            ],
            pageSize: 'A4',
            content: [{ style: 'fullWidth' }],
            styles: { // style for printing PDF body
                    fullWidth: { fontSize: 18, bold: true, alignment: 'right', margin: [0,0,0,0] }
            },
        });
    } );
    $(document).ready(function() {
        $('#tbvehiculo').DataTable({
            dom: 'lBfrtip',
            language: {
	            "lengthMenu": "Mostrar _MENU_ registros por pagina",
	            "zeroRecords": "No se encontraron resultados en su busqueda",
	            "searchPlaceholder": "Buscar registros",
	            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
	            "infoEmpty": "No existen registros",
	            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "search": "Buscar:",
	            "paginate": {
	                "first": "Primero",
	                "last": "Último",
	                "next": "Siguiente",
	                "previous": "Anterior"
	            },
	        },
            buttons: [
                {
	                extend: 'excelHtml5',
	                title: "Listado de Vehiculos",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5,6,7,8]
	                },
	            },
	            {
	                extend: 'pdfHtml5',
	                title: "Listado de Vehiculos",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5 ,6,7,8]
	                }
	                
	            }
            ],
            pageSize: 'A4',
            content: [{ style: 'fullWidth' }],
            styles: { // style for printing PDF body
                    fullWidth: { fontSize: 18, bold: true, alignment: 'right', margin: [0,0,0,0] }
            },
        });
    } );
    $(document).ready(function() {
        $('#tbmantenimiento').DataTable({
            dom: 'lBfrtip',
            language: {
	            "lengthMenu": "Mostrar _MENU_ registros por pagina",
	            "zeroRecords": "No se encontraron resultados en su busqueda",
	            "searchPlaceholder": "Buscar registros",
	            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
	            "infoEmpty": "No existen registros",
	            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "search": "Buscar:",
	            "paginate": {
	                "first": "Primero",
	                "last": "Último",
	                "next": "Siguiente",
	                "previous": "Anterior"
	            },
	        },
            buttons: [
                {
	                extend: 'excelHtml5',
	                title: "Listado de Mantenimientos",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5,6,7,8,9 ]
	                },
	            },
	            {
	                extend: 'pdfHtml5',
	                title: "Listado de Mantenimientos",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5 ,6,7,8,9]
	                },
	                orientation: 'landscape',
	                
	            }
            ],
            pageSize: 'A4',
            content: [{ style: 'fullWidth' }],
            styles: { // style for printing PDF body
                    fullWidth: { fontSize: 10, bold: true, alignment: 'right', margin: [0,0,0,0] }
            },
        });
    } );
    $(document).ready(function() {
        $('#tbconductor').DataTable({
            dom: 'lBfrtip',
            language: {
	            "lengthMenu": "Mostrar _MENU_ registros por pagina",
	            "zeroRecords": "No se encontraron resultados en su busqueda",
	            "searchPlaceholder": "Buscar registros",
	            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
	            "infoEmpty": "No existen registros",
	            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "search": "Buscar:",
	            "paginate": {
	                "first": "Primero",
	                "last": "Último",
	                "next": "Siguiente",
	                "previous": "Anterior"
	            },
	        },
            buttons: [
                {
	                extend: 'excelHtml5',
	                title: "Listado de Conductores",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5,6,7,8 ]
	                },
	            },
	            {
	                extend: 'pdfHtml5',
	                title: "Listado de Conductores",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5 ,6,7,8]
	                }
	                
	            }
            ],
            pageSize: 'A4',
            content: [{ style: 'fullWidth' }],
            styles: { // style for printing PDF body
                    fullWidth: { fontSize: 18, bold: true, alignment: 'right', margin: [0,0,0,0] }
            },
        });
    } );
    $(document).ready(function() {
        $('#tbalistamiento').DataTable({
            dom: 'lBfrtip',
            language: {
	            "lengthMenu": "Mostrar _MENU_ registros por pagina",
	            "zeroRecords": "No se encontraron resultados en su busqueda",
	            "searchPlaceholder": "Buscar registros",
	            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
	            "infoEmpty": "No existen registros",
	            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "search": "Buscar:",
	            "paginate": {
	                "first": "Primero",
	                "last": "Último",
	                "next": "Siguiente",
	                "previous": "Anterior"
	            },
	        },
            buttons: [
                {
	                extend: 'excelHtml5',
	                title: "Listado de Alistamientos",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5,6]
	                },
	            },
	            {
	                extend: 'pdfHtml5',
	                title: "Listado de Alistamientos",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4, 5 ,6]
	                }
	                
	            }
            ],
            pageSize: 'A4',
            content: [{ style: 'fullWidth' }],
            styles: { // style for printing PDF body
                    fullWidth: { fontSize: 18, bold: true, alignment: 'right', margin: [0,0,0,0] }
            },
            "order": [[ 3, "desc" ]]
            //ordering: false
        });
    } );
    $(document).ready(function() {
        $('#tbusuario').DataTable({
            dom: 'lBfrtip',
            language: {
	            "lengthMenu": "Mostrar _MENU_ registros por pagina",
	            "zeroRecords": "No se encontraron resultados en su busqueda",
	            "searchPlaceholder": "Buscar registros",
	            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
	            "infoEmpty": "No existen registros",
	            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "search": "Buscar:",
	            "paginate": {
	                "first": "Primero",
	                "last": "Último",
	                "next": "Siguiente",
	                "previous": "Anterior"
	            },
	        },
            buttons: [
                {
	                extend: 'excelHtml5',
	                title: "Listado de Usuarios",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4]
	                },
	            },
	            {
	                extend: 'pdfHtml5',
	                title: "Listado de Usuarios",
	                exportOptions: {
	                    columns: [ 0, 1,2, 3, 4]
	                }
	                
	            }
            ],
            pageSize: 'A4',
            content: [{ style: 'fullWidth' }],
            styles: { // style for printing PDF body
                    fullWidth: { fontSize: 18, bold: true, alignment: 'right', margin: [0,0,0,0] }
            },
        });
    } );


 
	$("#conductores").on("change", function(){
		option = $(this).val();

		if (option!="") {
			info = option.split("*");
			$("#conductor_id").val(info[0]);
			$("#nombres").val(info[1]);

		}
		else{
			$("#conductor_id").val(null);
			$("#nombres").val(null);
		}
	});

	$('.checks_alistamiento').change(function(){

        if($(this).is(':checked')){
              $(this).val("1");
         }else{
              $(this).val("0");
         }
        
    });

	$("#vehiculo_id").on("change", function(){
		option = $(this).val();

		if (option=="") {
			$("#empresa").val(null);
			$("#placa").val(null);
			$("#kilometraje").val(null);
			$("#conductor_id").val(null);

		}
		else{

			$.ajax({
				url: base_url + "ingresos/alistamientos/infoVehiculo",
				type:"POST",
				data: {id: option},
				dataType: "json",
				success:function(resp){
					$("#empresa").val(resp.vehiculo.empresa);
					$("#placa").val(resp.vehiculo.placa);
					$("#tarjeta").val(resp.vehiculo.tarjeta);
					$("#kilometraje").val(resp.vehiculo.kilometraje);
					$("#fecha_licencia").text(resp.vehiculo.fecha_licencia);

                    /*fecha_licencia = resp.vehiculo.fecha_licencia;
                    var d = new Date();

                    var datestring =d.getFullYear() + "-"  + ("0"+(d.getMonth()+1)).slice(-2) + "-" +("0" + d.getDate()).slice(-2);

                    var actual = new Date(datestring).getTime();
                    licencia = new Date(fecha_licencia).getTime();

                    if (Number(licencia) >= Number(actual)) {
                        $("#cbofecha_licencia").prop('checked', true);
                        $("#cbofecha_licencia").val("1");
                    }else{
                         $("#cbofecha_licencia").prop('checked', false);
                        $("#cbofecha_licencia").val("0");
                    }*/
					html = "<option value=''>Seleccione conductor...</option>";

					$.each(resp.conductores, function( index, value ) {
	
					  	html += "<option value='"+value.id+"'>"+value.nombres+" "+value.apellidos+"</option>";
					});

					$("#conductor_id").removeAttr("readonly");
					$("#conductor_id").attr("required","required");
					$("#conductor_id").html(html);
				}
			});
			
		}
	});

});

function ActualizarUsuario(idusuario, estado){
	$.ajax({
		url: base_url + "administrador/usuarios/actEstado",
		type: "POST",
		data: {id:idusuario,estado:estado},
		success:function(resp){
			window.location.href = base_url + resp;
		}
	});
}