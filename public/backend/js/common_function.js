function makeid(length) {
	var result           = '';
	var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	var charactersLength = characters.length;
	for ( var i = 0; i < length; i++ ) {
		result += characters.charAt(Math.floor(Math.random() * charactersLength));
	}
	return result;
}

$(document).on('click', '.addValue', function (e) {
	e.preventDefault();
	var id = +$('#amount_count').val()+1;
	$('#amount_count').val(id);
	$('<div class="green box col-md-12" id="">' +
			'<div class="col-md-2">' +
				'<div class="form-group">' +
					'<label for="amount">Total Amount<span class="text-danger">*</span></label>' +
					'<input type="text" name="amount[]" required class="form-control amount" id="amount" placeholder="RS...">' +
				'</div>' +
			'</div>' +
			'<div class="col-md-2">'+
				'<div class="form-group">'+
					'<label>Date<span class="text-danger">*</span></label>'+
						'<div class="input-group">'+
							'<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker'+id+'" name="customer_date[]" value="" required>'+
							'<span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>'+
						'</div>'+
				'</div>'+
			'</div>'+
			'<div class="col-md-3">' +
				'<div class="form-group">' +
					'<label for="description">Description<span class="text-danger">*</span></label>' +
					'<input type="text" name="desc[]" required class="form-control" placeholder="Description" id="description">' +
				'</div>' +
			'</div>' +
			'<div class="col-md-3">'+
				'<div class="form-group">'+
					'<label class="control-label">Upload Receipt</label>'+
					'<input type="file" id="'+id+'" data-buttonname="btn-default" onchange="displayImage(this.id);" name="customer_files_'+id+'[]" multiple="multiple" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">'+
					'<div class="bootstrap-filestyle input-group">' +
						'<span class="group-span-filestyle " tabindex="0">' +
							'<label for="'+id+'" class="btn btn-default "><span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span> <span class="buttonText">Choose file</span></label>' +
						'</span>' +
					'</div>'+
					'<div id="dvPreview'+id+'">'+
						'<input type="hidden" name="old_files_'+id+'"  value="">'+
						'<input type="hidden" name="old_id_'+id+'"  value="">'+
					'</div>'+
				'</div>'+
			'</div>'+
			'<div class="col-md-2">' +
				'<div class="form-group p-t-30">' +
					'<button class="btn btn-icon waves-effect waves-light btn-purple m-r-10 m-b-5" id="deleteParent"> <i class="fa fa-minus"></i> </button>' +
					'<button class="btn btn-icon waves-effect waves-light btn-purple addValue m-b-5"> <i class="fa fa-plus"></i> </button>' +
				'</div>' +
			'</div>'+
	'</div>').appendTo('#hereToadd');
		$('#datepicker'+id).datepicker({
			minDate: new Date(start_date),
			maxDate: new Date(end_date),
			autoclose: true,
			todayHighlight: true
		});
});

$(document).on('click', '#deleteParent', function (e) {
	e.preventDefault();
	var id = +$('#amount_count').val();
	$('#amount_count').val(id-1);
	$(this).parent().parent().parent().remove();
});

$(function () {
	$('#payment_mode').change(function () {
		$('.payment_mode').addClass('hide');
		$('.payment_mode :input').prop('required', false);
		$('.payment_mode :input').val('');
		$('#' + $(this).val()).removeClass('hide');
		$('#' + $(this).val() + ' :input').prop('required', true);
	});
});


function getTotalAmount(id) {
	$("#total_amount").val($("#" + id).select2().find(":selected").data("amount"));
}

$('input[type=radio][name=search_type]').change(function () {
	if (this.value == 'agency') {
		$('.agency_div').removeClass('hide');
		$('.customer_div').addClass('hide');
	} else {
		$('.agency_div').addClass('hide');
		$('.customer_div').removeClass('hide');
	}
});

function displayImage(id) {
	var fileUpload = document.getElementById(id);
	if (typeof (FileReader) != "undefined") {
		var dvPreview = document.getElementById("dvPreview" + id);
		var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
		for (var i = 0; i < fileUpload.files.length; i++) {
			var file = fileUpload.files[i];
			if (regex.test(file.name.toLowerCase())) {
				var reader = new FileReader();
				reader.onload = function (e) {
					var img = document.createElement("IMG");
					img.style.marginRight = "10px";
					img.style.marginTop = "10px";
					img.height = "100";
					img.width = "100";
					img.src = e.target.result;
					dvPreview.appendChild(img);
				}
				reader.readAsDataURL(file);
			} else {
				alert(file.name + " is not a valid image file.");
				dvPreview.innerHTML = "";
				return false;
			}
		}
	} else {
		alert("This browser does not support HTML5 FileReader.");
	}
}
