$(document).ready(function()
{
	$("#hotel_name").focus();

	var validate_conf=function()
	{
		var bandera=false;

		if($("#hotel_nivel").val()=='')
		{
			toastr.error('Debe de agregar el Nivel');
		}
		else if($("#hotel_cuartos").val()=='')
		{
			toastr.error('Debe de agregar número de Cuartos');
		}
		else
		{
			bandera=true;
		}

		return bandera;
	};

	var clear_level=function()
	{
		$("#hotel_nivel").val('');
		$("#hotel_cuartos").val('');
		$("#level_current").val('');
		$("#edit_config").hide();
		$("#add_config").show();
	};

	$("#cancel_config").click(function()
	{
		clear_level();
	});

	var edit_level=function(id)
	{
		$("#hotel_nivel").val($("#nivel_"+id).val());
		$("#hotel_cuartos").val($("#cuartos_"+id).val());
		$("#level_current").val(id);
		$("#edit_config").show();
		$("#add_config").hide();
	};

	$("#edit_config").click(function()
	{
		var validate=validate_conf();

		if(validate)
		{
			var nivel=$("#hotel_nivel").val();
			var cuartos=$("#hotel_cuartos").val();
			var current=$("#level_current").val();

			$("#nivel_"+current).val(nivel);
			$("#cuartos_"+current).val(cuartos);
			$("#div_nivel_"+current).html(nivel);
			$("#div_cuartos_"+current).html(cuartos);

			clear_level();
		}
	});

	$("#add_config").click(function()
	{
		var validate=validate_conf();

		if(validate)
		{
			var table='';
			var niveles=Number($("#niveles").val());
			var nivel=$("#hotel_nivel").val();
			var cuartos=$("#hotel_cuartos").val();
			
			table+='<tr>';
			table+='<input type="hidden" id="n_'+niveles+'" name="n_'+niveles+'" value="'+niveles+'" class="niveles">';
			table+='<input type="hidden" id="nivel_'+niveles+'" name="nivel_'+niveles+'" value="'+nivel+'">';
			table+='<input type="hidden" id="cuartos_'+niveles+'" name="cuarto_'+niveles+'" value="'+cuartos+'">';
			table+='<td><div id="div_nivel_'+niveles+'">'+nivel+'</div></td>';
			table+='<td><div id="div_cuartos_'+niveles+'">'+cuartos+'</div></td>';
			table+='<td><a href="#" title="Editar" id-num="'+niveles+'" class="editLevel"><i class="fa fa-fw fa-pencil"></i></a><a href="#" title="Borrar" class="dropLevel"><i class="fa fa-fw fa-trash-o"></i></td>';
			table+='</tr>';

			$("#level_table").append(table);
			$("#niveles").val(niveles+1);
			clear_level();

			$(".dropLevel").on("click", function ()
			{            
				$(this).parent().parent().remove();
			});

			$('.editLevel').on("click", function ()
			{
				var id = $(this).attr('id-num');
				edit_level(id);
			});
		}
	});

	var validate_hotel=function()
	{
		var bandera=false;
		var banderaConf=false;

		$('#level_table > tr').each(function()
		{
			banderaConf=true;
		});

		if($("#hotel_name").val()=="")
		{
			toastr.error('Debe de agregar el nombre del Hotel');
			$("#hotel_name").val('');
			$("#hotel_name").focus();
		}
		else if($("#hotel_calle").val()=="")
		{
			toastr.error('Debe de agregar la calle del Hotel');
			$("#hotel_calle").val('');
			$("#hotel_calle").focus();
		}
		else if($("#hotel_ext").val()=="")
		{
			toastr.error('Debe de agregar el No. Exterior del Hotel');
			$("#hotel_ext").val('');
			$("#hotel_ext").focus();
		}
		else if($("#hotel_colonia").val()=="")
		{
			toastr.error('Debe de agregar la colonia del Hotel');
			$("#hotel_colonia").val('');
			$("#hotel_colonia").focus();
		}
		else if($("#hotel_codigo_postal").val()=="")
		{
			toastr.error('Debe de agregar el Codigo Postal del Hotel');
			$("#hotel_codigo_postal").val('');
			$("#hotel_codigo_postal").focus();
		}
		else if($("#hotel_municipio").val()=="")
		{
			toastr.error('Debe de agregar la Delegación o Municipio del Hotel');
			$("#hotel_municipio").val('');
			$("#hotel_municipio").focus();
		}
		else if($("#hotel_estado").val()=="")
		{
			toastr.error('Debe de agregar el Estado del Hotel');
			$("#hotel_estado").val('');
			$("#hotel_estado").focus();
		}
		else if(!banderaConf)
		{
			toastr.error('Debe de agregar por lo menos un nivel del Hotel');
			$("#hotel_nivel").val('');
			$("#hotel_nivel").focus();
		}
		else
		{
			bandera=true;
		}

		return bandera;
	};

	$("#save_hotel").click(function()
	{
		var validate=validate_hotel();
		
		if(validate)
		{
			swal({
                title: "Guardado!",
                text: "Se ha creado el Hotel correctamente!",
                type: "success"
            }, function () {
                window.location.href = '/home';
            });
		}
	});

	$("#cancel").click(function()
	{
		var url="/home";

		$(location).attr('href',url);
	});
});

function validateNumber(evt)
{
	evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
}
