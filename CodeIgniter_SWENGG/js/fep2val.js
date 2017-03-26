$(function(){
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
	})

	function removeError(element){
	element.addClass('valid')
			.closest('.tbl')
			.removeClass('has-error');
	}

	var numberIncr = 0;
	$("#tr").append($(' <tr id= "newt"> <td><input class="fqt form-control"  name= "fqty[' + numberIncr + ']" type="number"/></td> <td><input class="fnt form-control"  name= "funit[' + numberIncr + ']" type="number"/></td><td><input class="fde form-control"  name= "fdes[' + numberIncr + ']" type="text"/> <td><input class="fcs form-control"  name= "fecost[' + numberIncr + ']" type="number"/></td></tr>'));  
	var foodform2= $('#foodlistform');
	foodform2.validate({
		rules: {
			'fqty[0]' : "required",
			'funit[0]': "required",
			'fdes[0]': "required",
			'fecost[0]': "required"
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			'fqty[0]':{
				required: 'Enter quantity'
			},

			'funit[0]':{
				required: 'Enter unit'
			},

			'fdes[0]': {
				required:'Enter description'
			},

			'fecost[0]': {
				required: 'Enter estimated cost'
			}
		}
		});
    $("#addcf").click(function(){
       numberIncr++;
       $("#tr").append(' <tr id= "newtr"> <td><input class="fqt form-control"  name= "fqty[' + numberIncr + ']" type="number"/></td> <td><input class="fnt form-control"  name= "funit[' + numberIncr + ']" type="number"/></td><td><input class="fde form-control"  name= "fdes[' + numberIncr + ']" type="text"/> <td><input class="fcs form-control"  name= "fecost[' + numberIncr + ']" type="number"/></td></tr>');   
       $(".fqt").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter quantity',
		  }
		});
      });

       $(".fnt").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter unit',
		  }
		});
      });

       $(".fde").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter description',
		  }
		});
      });

      $(".fcs").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter estimated cost',
		  }
		});
      });
     });
        
          $("#remcf").click(function() {
            var v= document.getElementById("newtr");
            v.remove();
          });
	$('#nextbff2').click(function(){
	   if(foodform2.valid()){
          window.location.href = "";
	   	}
    	});

});