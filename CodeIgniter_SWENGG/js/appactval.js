$(function(){
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
	})

	function removeError(element){
	element.addClass('valid')
			.closest('.form-group')
			.removeClass('has-error');
	}

	var numberIncr = 0;
	$("#trcomdes").append('<tr><td> <input  class="stm form-control" type="time" name="time[' + numberIncr + ']"> </td><td><input class="stc form-control" type= "time" name="stime[' + numberIncr + ']"> </td><td> <input class="nmc form-control" type="text" name="aname[' + numberIncr + ']" id="act" placeholder="Activity name"/></td><td> <input class="drc form-control" type="text" name="adur[' + numberIncr + ']"  id="dur" disabled="true" /></td><td> <input class="dsc form-control" type="text" name="ades[' + numberIncr + ']" id="des" placeholder="Description of Activity"/></td><td> <input class="pcc form-control" type="text" name="apic[' + numberIncr + ']" id="icharge" placeholder="Person in-charge"/></td></tr>');   

	 	var changecom= $('#changecom');
	changecom.validate({
		rules: {
			'aname[0]':"required",
			
			'stime[0]': "required",

			'time[0]': "required",

			'ades[0]':"required",
			
			'apic[0]': {
				required: true,
				lettersonly: true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			'aname[0]': {
				required: 'Enter activity name'
			},

			'stime[0]':{
				required: 'Enter time'
			},

			'time[0]':{
				required: 'Enter time'
			},

			'ades[0]':{
				required: 'Enter description'
			},

			'apic[0]':{
				required: 'Enter name',
				lettersonly: 'Alphabetical characters only'
			}
		}
		});     

	$("#addcom").click(function() {
		numberIncr++;
      $("#trcomdes").append($('<tr id="newcom"><td> <input class="stm form-control"  type="time" name="time[' + numberIncr + ']"> </td><td><input class="stc form-control" type= "time" name="stime[' + numberIncr + ']"> </td><td> <input class="nmc form-control" type="text" name="aname[' + numberIncr + ']"  placeholder="Activity name"/></td><td> <input class="drc form-control" type="text" name="adur[' + numberIncr + ']"   disabled="true" /></td><td> <input class="dsc form-control" type="text" name="ades[' + numberIncr + ']"  placeholder="Description of Activity"/></td><td> <input class="pcc form-control" type="text" name="apic[' + numberIncr + ']"  placeholder="Person in-charge"/></td></tr>'));   

      $(".stm").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter time'
		  }
		});
      });
	    
        $(".stc").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter time'
		  }
		});
      });

       $(".nmc").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter activity name'
		  }
		});
      });

      $(".dsc").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter description'
		  }
		});
      });

      $(".pcc").each(function(){
      	$(this).rules( "add", {
				required:true,
		 		lettersonly: true,
		  messages: {
		  	required: 'Enter name',
			lettersonly: 'Alphabetical characters only'
				
		  }
		});
      });


     });

    $("#remcom").click(function(){
       var v= document.getElementById("newppr2");
       v.remove(); 
    	});
	$('#nextbchangecom').click(function() {
         if (changecom.valid()){
           window.location.href = "ORG_PreAct_PPR3.html";
         }
        	return false  
    	 });
});