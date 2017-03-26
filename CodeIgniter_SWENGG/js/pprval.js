$(function(){
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
	})

	function removeError(element){
	element.addClass('valid')
			.closest('.form-group')
			.removeClass('has-error');
	}

	var pprform1= $('#pprform1');

	var numberIncr = 0;

	// append basic table data

	$("#ph").append($('<div class="col-md-12 col-sm-12 col-xs-12" id="ne"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input class="phname form-control has-feedback-left" name="phname[' + numberIncr + ']" placeholder="Name" type="text"/><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input class="phnum form-control has-feedback-right" name="phnum[' + numberIncr + ']" placeholder="Contact Number" /><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div></div></div>'));

	$("#addc").on('click', function () {
       numberIncr++;
       var temp = $("#ph").append($('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input class="phname form-control has-feedback-left" name="phname[' + numberIncr + ']" placeholder="Name" /><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input class="phnum form-control has-feedback-right" name="phnum[' + numberIncr + ']" placeholder="Contact Number" /><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div></div></div>'));  
       
    	$(".phname").each(function(){
      	$(this).rules( "add", {
				required:true,
				lettersonly: true,
		  messages: {
				required: 'Enter project head name',
				lettersonly:'Alphabetic characters only'
		  }
		});
      });

    	$(".phnum").each(function(){
      	$(this).rules( "add", {
				required: true,
				maxlength: 11,
				minlength: 11,
		  messages: {
				required: 'Enter project head contact number',
				maxlength: 'Invalid contact number',
				minlength: 'Invalid contact number'
		  }
		});
      });

    });

	$("form.pprform1").validate({
	rules:{
 		'phname[0]' : "required",
 		'phnum[0]'  : "required"
 	},
 	highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
	},
		success: removeError,
 	messages:{
 		'phname[0]':{
 			required: "Enter project head name"
 		},
 		'phnum[0]':{
 			required: "Enter project head contact number"
 		},
 	}

	});


    $("#remc").click(function(){
        var v= document.getElementById("new");
        v.remove();
    });  

	$('#nextbppr').click(function(){
      if (pprform1.valid()){
         window.location.href = "ORG_PreAct_PPR2.html";
       }
       return false;
     });

	// append basic table data



});