$(function(){
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
	})

	function removeError(element){
	element.addClass('valid')
			.closest('.tbl')
			.removeClass('has-error');
	}

 	var pprform41= $('#pprform41');
	var numberIncr = 0;
	$("#others").append('<td><input type="text" class="snm form-control" name="sourcename[' + numberIncr + ']" placeholder="Other Source"/></td> <td> <input class="smt form-control"  name="sourceamount[' + numberIncr + ']"  placeholder="Enter Amount"/></td>');   
   
    $("#addc4").click(function(){
    	numberIncr++;
       $("#tr").append('<tr id="newtr"><td><input type="text" class="snm form-control" name="sourcename[' + numberIncr + ']" placeholder="Other Source"/></td> <td> <input class="smt form-control"  name="sourceamount[' + numberIncr + ']"  placeholder="Enter Amount"/></td></tr>');   

       $(".snm").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter source'
		  }
		});
      });

    	$(".smt").each(function(){
      	$(this).rules( "add", {
				required: true,

		  messages: {
				required: 'Enter Amount'
		  }
		});

     });

   });

	pprform41.validate({
		rules: {
			'sourcename[0]' : "required",
			'sourceamount[0]' : "required",
            orgFunds:"required",
            participantsFee: "required",
            depositoryAmount: "required",
            operationalFundsAmount:"required",
            depositoryDate: "required",
            donSporFunds:"required"

		},
		highlight: function(element){ $(element).closest('.tbl').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			'sourcename[0]' : {
				required: 'Enter source'
			},
			'sourceamount[0]' : {
				required: 'Enter source'
			},
			orgFunds: {
              required: 'Enter amount'
            },

            participantsFee:{
              required: 'Enter amount'
            },
            operationalFundsAmount: {
              required: 'Enter amount'
            },

            depositoryAmount: {
              required: 'Enter amount'
            },

            depositoryDate:{
              required: 'Enter date'
            },

            donSporFunds:{
              required: 'Enter amount'
            }
		}
		});    

    $("#remc4").click(function(){
       var v= document.getElementById("newtr");
       v.remove();
    	});
	$('#nextbppr4').click(function(){
     if (pprform41.valid()){
       window.location.href = "ORG_PreAct_PPR5.html"; // next page
      }
      return false;
   	 });

	// append basic table data



});