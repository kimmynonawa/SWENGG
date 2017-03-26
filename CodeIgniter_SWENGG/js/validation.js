

$(function(){
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
	})

	function removeError(element){
	element.addClass('valid')
			.closest('.form-group')
			.removeClass('has-error');
	}

	// FOOD ENTRY PERMIT 1
	var foodform= $('#formFoodEntry');
	foodform.validate({
		rules: {
			Name: {
				required:true,
				lettersonly: true
			},
			IDNum:{
				required: true,
				minlength: 8

			},
			Position: {
				required: true,
				lettersonly: true
			},
			Email:{
				required: true,
				email: true
			},

			CPNo:{
				required: true,
				maxlength: 11,
				minlength: 11
			},

			TelNo:{
				maxlength: 7
			}

		},

		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			Name:{
				required: 'Enter your full name',
				lettersonly: 'Alphabetic characters only'
			},

			IDNum:{
				required: 'Enter your ID number',
				minlength: 'Invalid ID number'
			},

			Position: {
				required:'Enter your position',
				lettersonly: 'Invalid position'
			},

			Email: {
				required: 'Enter your DLSU e-mail',
				email: 'Invalid DLSU e-mail'
			},

			CPNo: {
				required: 'Enter mobile number.',
				maxlength: 'Invalid mobile number',
				minlength: 'Invalid mobile number'
			},

			TelNo:{
				maxlength: 'Enter a valid local number'
			}
		}
		});
	$('#nextFood').click(function() {
    	if (foodform.valid()){
        	window.location.href = "ORG_PreAct_FoodEntryPermit2.html";
        }
        return false;
   		});
	// FOOD ENTRY PERMIT 1

	//FOOD ENTRY PERMIT 2
	var foodform2= $('#foodlistform');
	foodform2.validate({
		rules: {
			fqty: "required",
			funit: "required",
			fdes: "required",
			fecost: "required",
			foqty: "required",
			founit: "required",
			fodes: "required",
			foecost: "required"
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			fqty:{
				required: 'Enter quantity'
			},

			funit:{
				required: 'Enter unit'
			},

			fdes: {
				required:'Enter description'
			},

			fecost: {
				required: 'Enter estimated cost'
			},

			foqty:{
				required: 'Enter quantity'
			},

			founit:{
				required: 'Enter unit'
			},

			fodes: {
				required:'Enter description'
			},

			foecost: {
				required: 'Enter estimated cost'
			}

		}
		});
    $("#addcf").click(function(){
       $("#tr").append(' <tr id= "newtr"><td align= "center" ><input type="number" name= "foqty" class="form-control" id="foqty"/></td><td align= "center"><input type="number" name= "founit" class="form-control" id="founit"/></td><td align= "center"><input type="text" name= "fodes" class="form-control" id="fodes" placeholder="Description"/></td><td align= "center"><input type="number" name= "foecost" class="form-control" id="foecost"/></td></tr>');   
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
	// FOOD ENTRY PERMIT 2

	//MINOR PUBLICATION PROPOSAL 1
	var pubform= $('#pubform');
	pubform.validate({
		rules: {
			pubname: "required",
			
			pubtype: "required",
			
			pubfreq: {
				required: true,
				number: true,
				minlength: 1

			},

			pubcost:{
				required: true,
				number: true,
				minlength:1
			},

			tdate: "required",

			obj1: "required",

			obj2: "required",

			obj3: "required",

			cont1: "required",

			cont2: "required",
			
			cont3: "required",

			tread1: "required",

			tread2: "required",

			tread3: "required"

			},

		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			pubname: {
				required: 'Enter publication name'
			},

			pubtype:{
				required: 'Enter publication type'
			},

			pubfreq: {
				required:'Enter frequency of publication',
				number:  'Invalid frequency',
				minlength: 'Invalid frequency'
			},

			pubcost:{
				required: 'Pick estimated publication cost',
				number: 'Invalid cost'
			},

			tdate:{
				required: 'Pick publication date'
			},

			obj1: {
				required: 'Enter objective'
			},

			obj2: {
				required: 'Enter objective'
			},

			obj3: {
				required: 'Enter objective'
			},

			cont1: {
				required: 'Enter publication content'
			},

			cont2: {
				required: 'Enter publication content'
			},

			cont3: {
				required: 'Enter publication content'
			},

			tread1: {
				required: 'Enter reader of the publication'
			},

			tread2: {
				required: 'Enter reader of the publication'
			},

			tread3: {
				required: 'Enter reader of the publication'
			},

		}

		});
	$('#nextpub').click(function(){
      if (pubform.valid()){
         window.location.href = "ORG_PreAct_MinorPublicationProposal2.html";
       }
       return false;
     });
	//MINOR PUBLICATION PROPOSAL 1

	//MINOR PUBLICATION PROPOSAL 2
    var pubform2= $('#pubform2');
	pubform2.validate({
		rules: {
			npages: {
				required: true,
				minlength: 1
			},

			ssize: {
				required: true,
				minlength: 1
			},

			ptype: {
				required:true 
			},			
			
			ncolor: {
				required: true,
				minlength: 1
			},
			
			ncopies: {
				required: true,
				minlength: 1
			},

			pcont: "required",

			bm1: {
				required:true,
				lettersonly:true
			},
			bm2:{ 
				required:true,
				lettersonly:true
			},
			bm3: {
				required:true,
				lettersonly:true
			},
			bm4: {
				required:true,
				lettersonly:true
			},
			bm5: {
				required:true,
				lettersonly:true
			}

			
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			npages: {
				required: 'Enter # of pages',
				minlength: 1
			},

			ssize: {
				required: 'Enter spread size',
				minlength: 1
			},

			ptype: {
				required: 'Enter paper type'		
			},
			
			ncolor: {
				required: 'Enter # of colors',
				minlength: 1
			},
			
			ncopies: {
				required: 'Enter # of copies',
				minlength: 1
			},

			pcont:{
				required: 'Enter publication content'

			},

			bm1:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm2:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm3:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm4:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			},

			bm5:{
				required: 'Enter full name',
				lettersonly: 'Alphabetic characters only'
			}
		}
		});     
	//MINOR PUBLICATION PROPOSAL 2

	//PROJECT PROPOSAL 1 
	var pprform1= $('#pprform1');
	pprform1.validate({
		rules: {
			phname:{
				required:true,
				lettersonly: true
			},
			
			phnum: {
				required: true,
				maxlength: 11,
				minlength: 11
			},

			prname:{
				required:true,
				lettersonly:true
			},
			
			prnum: "required",

			obje1:  "required",

			obje2:  "required",

			obje3:  "required",

			desc1:  "required",

			desc2:  "required",
			
			desc3:  "required",

		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			phname: {
				required: 'Enter project head name',
				lettersonly:'Alphabetic characters only'
			},

			phnum:{
				required: 'Enter project head contact number',
				maxlength: 'Invalid contact number',
				minlength: 'Invalid contact number'
			},

			prname:{
				required: 'Enter project head contact name',
				lettersonly:'Alphabetic characters only'
			},


			prnum:{
				required: 'Enter project head contact number'
			},

			obje1: {
				required: 'Enter objective'
			},

			obje2: {
				required: 'Enter objective'
			},

			obje3: {
				required: 'Enter objective'
			},

			desc1: {
				required: 'Enter description'
			},

			desc2: {
				 required: 'Enter description'
			},

			desc3: {
				required: 'Enter description'
			},
		}
		});

	$("#ph").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="phname" class="form-control has-feedback-left" id="name" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="phnum" class="form-control" id="contact" placeholder="Contact Number"><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div></div></div>');

 	 $("#addc").click(function(){
          $("#ph").append(' <div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="prname" class="form-control has-feedback-left" id="name" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="prnum" class="form-control" id="contact" placeholder="Contact Number"><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
     	});
    $("#remc").click(function(){
        var v= document.getElementById("newph");
        v.remove();
    	});  
	$('#nextbppr').click(function(){
      if (pprform1.valid()){
         window.location.href = "ORG_PreAct_PPR2.html";
       }
       return false;
     });
    //PROJECT PROPOSAL 1


    //PROJECT PROPOSAL 2
    var pprform2= $('#pprform2');
	pprform2.validate({
		rules: {
			aname:"required",
			
			stime: "required",

			ades:"required",
			
			apic: "required"
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			aname: {
				required: 'Enter activity name'
			},

			stime:{
				required: 'Enter time'
			},

			ades:{
				required: 'Enter activity description'
			},

			apic:{
				required: 'Enter person-in-charge'
			}
		}
		});     
	$("#addppr2").click(function() {
      $("#ppr2tr").append('<tr id="newppr2"><td align= "center"> <input type="time" style="width:75px" class="form-control" name="time"> </td><td align= "center"><input type= "time" style="width:75px"  class="form-control" name="stime"> </td><td align= "center"> <input type="text" name="aname" class="form-control" id="act" placeholder="Activity name"/></td><td align= "center"> <input type="text" name="adur" class="form-control" id="dur" disabled="true" /></td><td align= "center"> <input type="text" name="ades"  class="form-control" id="des" placeholder="Description of Activity"/></td><td align= "center"> <input type="text" name="apic"  class="form-control" id="icharge" placeholder="Person in-charge"/></td></tr>');   
     });
    $("#remppr2").click(function(){
       var v= document.getElementById("newppr2");
       v.remove(); 
    	});
	$('#nextbppr2').click(function() {
         if (pprform2.valid()){
           window.location.href = "ORG_PreAct_PPR3.html";
         }
        	return false  
    	 });
    //PROJECT PROPOSAL 2

    //PROJECT PROPOSAL 3
    var pprform3= $('#pprform3');
	pprform3.validate({
		rules: {
			mat3:"required",
			qty3: "required",
			ucost3:"required",
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			mat3: {
				required: 'Enter material name'
			},

			qty3:{
				required: 'Enter quantity'
			},

			ucost3:{
				required: 'Enter unit cost'
			},
		}
		});
    $("#addc3").click(function() {
      $("#trr").append('<tr id="newtr"><td align= "center"><input type="text" class="form-control" id="act" placeholder="Material name"/></td> <td align= "center"><input type="number" class="form-control" id="act" placeholder="Quantity"/></td>                                <td align= "center"><input type="number" class="form-control" id="des" placeholder="Unit Cost"/></td> <td align="center" style= "background-color:#D3D3D3"><h4> P750.00</h4></td></tr>');   
     	}); 
    $("#remc3").click(function() {
      var v= document.getElementById("newtr");
      v.remove();
    	});	
	$('#nextbppr3').click(function() {
      if (pprform3.valid()){
          window.location.href = "ORG_PreAct_PPR4.html";
      }
       return false;
    	});
    //PROJECT PROPOSAL 3

    //PROJECT PROPOSAL 4
    var pprform41= $('#pprform41');
	pprform41.validate({
		rules: {
			of41:"required",
			pf41: "required",
			os41:"required",
			oam41:"required",

			dpfam: "required",

			amt4:"required",
			dpf4: "required",
			pf4:"required"

		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			of41: {
				required: 'Enter amount'
			},

			pf41:{
				required: 'Enter amount'
			},

			os41:{
				required: 'Enter source'
			},

			oam41:{
				required: 'Enter amount'
			},


			amt4: {
				required: 'Enter amount'
			},

			dpfam: {
				required: 'Enter amount'
			},

			dpf4:{
				required: 'Enter date'
			},

			pf4:{
				required: 'Enter amount'
			}
		}
		});    
    $("#addc4").click(function(){
       $("#tr").append('<tr id="newtr"> <td><input type="text" class="form-control" id="sname" name="sname" placeholder="Other Source"/></td> <td> <input type="Number" name="samt" class="form-control" id="of" placeholder="Enter Amount"/></td></tr>');   
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
    //PROJECT PROPOSAL 4

    //PROJECT PROPOSAL 5
    var pprform5= $('#pprform5');
	pprform5.validate({
		rules: {
			itm5:"required",
			qty5: "required",
			spr5:"required",
			itm55:"required",
			qty55: "required",
			spr55:"required",
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			itm5: 	{ required : 'Enter name'},
			qty5: 	{ required : 'Enter quantity'},
			spr5: 	{ required : 'Enter price'},
			itm55: 	{ required : 'Enter name'},
			qty55: 	{ required : 'Enter quantity'},
			spr55: 	{ required : 'Enter price'},
		}
		});
    $("#addc51").click(function() {
      $("#tr51").append(' <tr id = "newtr51"><td align= "center"><input type="text" name= "itm5" class="form-control" id="itm5" placeholder="Item name"/></td><td align= "center"><input type="number" name="qty5" class="form-control" id="qty5" placeholder="Quantity"/></td><td align= "center"><input type="text" name= "spr5" class="form-control" id="spr5" placeholder="Selling Price"/></td><td align="center" style= "background-color:#D3D3D3"><h4> P750.00</h4></td></tr>');   
     });
    $("#remc51").click(function() {
      var v= document.getElementById("newtr51");
      v.remove();
  	 });	
    $("#addc52").click(function() {
     $("#tr52").append('<tr id = "newtr52"><td align= "center"><input type="text" name= "itm5" class="form-control" id="itm5" placeholder="Item name"/></td><td align= "center"><input type="number" name="qty5" class="form-control" id="qty5" placeholder="Quantity"/></td><td align= "center"><input type="text" name= "spr5" class="form-control" id="spr5" placeholder="Selling Price"/></td><td align="center" style= "background-color:#D3D3D3"><h4> P750.00</h4></td></tr>');   
     });
    $("#remc52").click(function() {
      var v= document.getElementById("newtr52");
      v.remove();
  		});	
	$('#nextbppr5').click(function() {
      if (pprform5.valid()){
          window.location.href = "";
      }
       return false;
    	});
    //PROJECT PROPOSAL 5

    //GOSM 1
    var gosmform1= $('#gosmform1');
	gosmform1.validate({
		rules: {
			gosmtit: "required",
			peric: "required",
			gosmgoals:"required",
			gosmobj: "required",
			gosmdes:"required",
			gosmmeas:"required",
			gosmsdate:"required",
			gosmedate: "required",
			gosmvenu:"required",
			gosmbug: {
				required: true,
				minlength: 2,
				maxlength: 6
			},
			gosmnat:"required",
			gosmtype:"required"
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages: {
			gosmtit:{
				required: 'Enter the title of activity'
			},
			peric:{
				required: 'Enter person in-charge'
			},
			gosmgoals:{
				required: 'Enter the goals of the activity'
			},
			gosmobj: {
				required: 'Enter the objectives of the activity'
			},
			gosmdes:{
				required: 'Enter the description of the activity'
			},
			gosmmeas:{
				required: 'Enter the measures of the activity'
			},
			gosmsdate: {
				required: 'Pick a start date for the activity'
			},
			gosmedate: {
				required: 'Pick an end date for the activity'
			},
			gosmvenu: {
				required: 'Enter preferred venue for the activity'
			},
			gosmbug: {
				required: 'Enter budget',
				minlength: 'Minimum amount is 10.00',
				maxlength: 'Maximum amount exceeded'
			},
			gosmnat: {
				required: 'Pick nature of activity'
				
			},
			gosmtype: {
				required: 'Pick tpe of activity'
			}	
		}
		});
    // GOSM 1

    // ADD NEW ORG CSO
   	var csoneworg= $('#csoneworg');
	csoneworg.validate({
		rules: {
			orgname:{
				required: true
			},
			orgun:{
				required: true
			},
			orgpw: {
				required: true,
				minlength: 6
			},
			orgcpw:{
				required: true,
				equalTo: "#orgpw"
			},
			orgemail:{
				email: true,
				required: true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages:{
			orgname:{
				required: 'Enter Name'
			},

			orgun:{
				required: 'Enter username'
			},

			orgpw:{
				minlength: 'Minimum length is 6 characters',
				required: 'Enter password'	
			}, 
			orgcpw:{
				required:' Re-enter password',
				equalTo:  'Passwords do not match'
			},
			orgemail:{
				email: 'Invalid e-mail',
				required: 'Enter dlsu e-mail'
			}
			
		}
		});
	$('#nextbcson').click(function(){
    	if (csoneworg.valid()){
        	window.location.href = "";
        }
        return false;
   		});
    // ADD NEW ORG CSO

    // ORG_GOSM 
   	var gosmorg= $('#gosmorg');
	gosmorg.validate({
		rules: {
			gosmactivityorg: {
				required:true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,


		messages:{
			gosmactivityorg: 'Please pick an Activity'		
		}
		});
	$('#nextorggosm').click(function() {
    	if (gosmorg.valid()){
        	window.location.href = "";
        }
        return false;
   		});
    // ORG_GOSM 

    // CSO_GOSM
    var gosmcso= $('#gosmcso');
	gosmcso.validate({
		rules: {
			gosmcsoorg: {
				required:true
			},
			gosmcsoact: {
				required:true
			}

		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			gosmcsoorg: 'Please pick an organization',
			gosmcsoact: 'Please pick an activity'		
		}
		});
	$('#nextcsogosm').click(function() {
    	if (gosmcso.valid()){
        	window.location.href = "CSO_GOSM2.html";
        }
        return false;
   		});
    // CSO_GOSM

    //A_FORM 
    var aform1= $('#aform1');
	aform1.validate({
		rules: {
			actName: {
				required:true
			},
			CSOactOptions: {
				required:true
			},
			USGactOptions: {
				required:true
			},
			CSOactType: {
				required:true
			},
			USGactType: {
				required:true
			},
			reachType: {
				required:true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			actName: {
				required: 'Enter activity name'
			},
			CSOactOptions: {
				required: 'Pick nature of activity'
			},
			USGactOptions: {
				required: 'Pick nature of activity'
			},
			CSOactType: {
				required: 'Pick type of activity'
			},
			USGactType: {
				required: 'Pick type of activity'
			},
			reachType: {
				required: 'Pick reach of activity'
			}	
		}
	});
	$('#nextaform').click(function() {
    	if (aform1.valid()){
        	window.location.href = "ORG_PreAct_AForm2.html";
        }
        return false;
   	});
   	//A_FORM

   	//A_FORM2
   	var aform2= $('#aform2');
	aform2.validate({
		rules: {
			actDate: {
				required:true
			},
			startTime: {
				required:true
			},
			endTime: {
				required:true
			},
			enmp: {
				required:true,
				maxlength: 6
			},
			enp: {
				required:true,
				maxlength: 6
			},
			venue: {
				required: true
			},
			select: {
				required: true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			actDate: {
				required:  'Enter activity date'
			},
			startTime: {
				required:  'Enter start time'
			},
			endTime: {
				required:  'Enter end time'
			},
			enmp: {
				required:  'Enter expected number of members',
				maxlength: 'Maximum number of participants exceeded'
			},
			enp: {
				required: 'Enter expect number of participants',
				maxlength: 'Maximum number of participants exceeded'
			},
			venue: {
				required: 'Enter venue'
			},
			select: {
				required: 'Please select duration of activity'
			}
		}
		});
	$('#nextaform2').click(function() {
    	if (aform2.valid()){
        	window.location.href = "";
        }
        return false;
   		});
   	//A_FORM2

   	// O_ EQUIPMENT ENTRY
   	var formEquipment= $('#formEquipment');
	formEquipment.validate({
		rules: {
			Name: {
				required:true,
				lettersonly: true
			},
			Position: {
				required:true
			},
			reasonRequest: {
				required:true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			Name: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			Position: {
				required: 'Enter position'
			},
			reasonRequest: {
				required: 'Enter reason for request'
			}
		}
		});
	$('#nextEquipment').click(function() {
    	if (formEquipment.valid()){
        	window.location.href = "";
        }
        return false;
   		});

   	// O_ EQUIPMENT ENTRY

   	//Approval change act details
   	var approvalChanges= $('#approvalChanges');
	approvalChanges.validate({
		rules: {
			actTitle: {
				required: true
			},
			actType: {
				required:true
			},
			date: {
				required: true
			},
			venue : {
				required:true
			},
			startTime: {
				required:true
			},
			endTime: {
				required:true
			},

			reason: {
				required:true
			},
			requestName: {
				required:true,
				lettersonly: true
			
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			actTitle: {
				required: 'Enter activity title'
			},
			actType: {
				required: 'Pick activity type'
			},
			date: {
				required: 'Pick date of activity'
			},
			venue : {
				required: 'Enter venue of activity'
			},
			startTime: {
				required: 'Enter time'
			},
			endTime: {
				required: 'Enter time'
			},

			reason: {
				required: 'Enter reason of change'
			},
			requestName: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			
			}
		}
	});
	$('#nextApproveChanges').click(function() {
    	if (approvalChanges.valid()){
        	window.location.href = "";
        }
        return false;
   	});
   	//Approval change act details



    // Approval change act details comprehensive design
    var changecom= $('#changecom');
	changecom.validate({
		rules: {
			aname:"required",
			stime: "required",
			ades:"required",
			apic: "required"
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages: {
			aname: {required: 'Enter activity name'},
			stime:{required: 'Enter time'},
			ades:{required: 'Enter activity description'},
			apic:{required: 'Enter person-in-charge'}
		}
		});     
    $("#addcom").click(function(){
        $("#trcomdes").append('<tr id= "newcom"><td align= "center"> <input type="time" style="width:75px" class="form-control" name="time"> </td><td align= "center"><input type= "time" style="width:75px"  class="form-control" name="stime"> </td><td align= "center"> <input type="text" name="aname" class="form-control" id="act" placeholder="Activity name"/></td><td align= "center"> <input type="text" name="adur" class="form-control" id="dur" disabled="true" /></td><td align= "center"> <input type="text" name="ades"  class="form-control" id="des" placeholder="Description of Activity"/></td><td align= "center"> <input type="text" name="apic"  class="form-control" id="icharge" placeholder="Person in-charge"/></td></tr>');   
    	 });
    $("#remcom").click(function(){
       var v= document.getElementById("newcom");
       v.remove(); 
    	});
	$('#nextbchangecom').click(function() {
         if (changecom.valid()){
           window.location.href = "";
         }
        	return false  
   	  		});
    //Approval change act details comprehensive design

   	//approval use trademark1
   	var formTrademark= $('#formTrademark');
	formTrademark.validate({
		rules: {
			Name: {
				required:true,
				lettersonly: true
			},
			Position: {
				required:true
			},
			IDNum: {
				required:true,
				maxlength: 8,
				minlength: 8
			
			},
			Email: {
				required:true,
				email: true
			},
			TelNo: {
				maxlength: 7,
				minlength: 7

			},
			CPNo: {
				required:true,
				maxlength: 11,
				minlength: 11,
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			Name: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			Position: {
				required: 'Enter position'
			},
			IDNum: {
				required: 'Enter ID number',
				maxlength: 'Invalid ID number',
				minlength: 'Invalid ID number'
			
			},
			Email: {
				required: 'Enter DLSU e-mail',
				email: 'Invalid DLSU e-mail'
			},
			TelNo: {
				maxlength: 'Invalid telephone number',
				minlength: 'Invalid telephone number'
			},
			CPNo: {
				required: 'Enter cellphone number',
				minlength: 'Invalid cellphone number',
				maxlength: 'Invalid cellphone number'
			},
		}
		});
	$('#nextTrademark').click(function() {
    	if (formTrademark.valid()){
        	window.location.href = "ORG_PreAct_ApprovalUseTrademark2.html";
        }
        return false;
   		});
   	//approval use trademark1

   	//approval use trademark2
   	var formTrademark2= $('#formTrademark2');
	formTrademark2.validate({
		rules: {
			matToProduce: {
				required:true
			},
			trademarkUse: {
				required:true
			},
			startTime: {
				required:true
			},
			endTime: {
				required: true
			},
			actType: {
				required:true,
			},
			venue: {
				required:true,
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			matToProduce: {
				required: 'Pick material type'
			},
			trademarkUse: {
				required: 'Enter purpose'
			},
			startTime: {
				required: 'Enter start time'
			},
			endTime: {
				required: 'Enter end time'			
			},
			actType: {
				required: 'Pick activity type'
			},
			venue: {
				required: 'Pick venue'
			}
		}
		});
	$('#nextTrademark2').click(function() {
    	if (formTrademark1.valid()){
        	window.location.href = "";
        }
        return false;
   		});

   		$("#tmarks").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"> <div class="col-md-8"><label class= "col-md-5"> <h4>Trademark To Use:</h4> </label> <div class= "form-group col-md-6"> <select class="select2_group form-control" name="tmChoice"> <optgroup label="Logos / Design"> <option value="delasalleuniversitylogo">De La Salle University Logo</option><option value="starscholarsdesign">Star Scholars Design</option></optgroup><optgroup label="DLSU labels"><option value="delasalleuniversity">De La Salle University</option><option value="dlsum">DLSU-M</option><option value="lasallegreenarchers">La Salle Green Archers</option><option value="lasalle">La Salle</option><option value="dlsu">DLSU</option><option value="greenarcher">Green Archer</option> <option value="delasalleathletics">De La Salle Athletics</option></optgroup><optgroup label="DLSU taglines"><option value="animolasalle">Animo La Salle</option><option value="thefuturebeginshere">The Future Begins Here</option><option value="wemeanbusiness">We Mean Business</option><option value="creatingthenextgreatidea">Creating the Next Great Idea</option> <option value="bepartofthebusinessclass">Be Part of the Business Class</option><option value="keeplearning">Keep Learning</option><option value="hiptobehere">Hip to Be Here</option> <option value="beyondhigherlearning">Beyond Higher Learning</option><option value="nevershallwefail">Never Shall We Fail</option><option value="greenwhitefights">Green White Fights</option></optgroup></select></div></div></div></div>')
   	$("#addtm").click(function() {
       $("#tmarks").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"> <div class="col-md-8"><label class= "col-md-5"> </label> <div class= "form-group col-md-6"> <select class="select2_group form-control" name="tmChoice"> <optgroup label="Logos / Design"> <option value="delasalleuniversitylogo">De La Salle University Logo</option><option value="starscholarsdesign">Star Scholars Design</option></optgroup><optgroup label="DLSU labels"><option value="delasalleuniversity">De La Salle University</option><option value="dlsum">DLSU-M</option><option value="lasallegreenarchers">La Salle Green Archers</option><option value="lasalle">La Salle</option><option value="dlsu">DLSU</option><option value="greenarcher">Green Archer</option> <option value="delasalleathletics">De La Salle Athletics</option></optgroup><optgroup label="DLSU taglines"><option value="animolasalle">Animo La Salle</option><option value="thefuturebeginshere">The Future Begins Here</option><option value="wemeanbusiness">We Mean Business</option><option value="creatingthenextgreatidea">Creating the Next Great Idea</option> <option value="bepartofthebusinessclass">Be Part of the Business Class</option><option value="keeplearning">Keep Learning</option><option value="hiptobehere">Hip to Be Here</option> <option value="beyondhigherlearning">Beyond Higher Learning</option><option value="nevershallwefail">Never Shall We Fail</option><option value="greenwhitefights">Green White Fights</option></optgroup></select></div></div></div></div>');   
		});

     $("#deletetm").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });
   	//approval use trademark2

   	//special approval slip
   	var sas= $('#specialappslip');
	sas.validate({
		rules: {
			actType: {
				required:true
			},
			submissionType: {
				required:true
			},
			reason: {
				required:true
			},
			name: {
				required: true,
				lettersonly: true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			actType: {
				required: 'Pick activity type'
			},
			submissionType: {
				required: 'Pick submission type'
			},
			reason: {
				required: 'Enter reason/justification'
			},
			name: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
				
			}		
		}
		});
	$('#nextSas').click(function() {
    	if (sas.valid()){
        	window.location.href = "";
        }
        return false;
   		});
   	//special approval slip

   	//spca1
   	var spca1= $('#specialPermit1');
	spca1.validate({
		rules: {
			actTitle: {required: true},
			sdate:    {required: true},
			stime:    {required: true},
			edate:    {required: true},
			etime:    {required: true},
			venue:    {required: true},
	   		numPersons:{required: true},
  			outsidersOption:{required: true},
	      Faculty: 	  {required: true, lettersonly: true}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
		 actTitle: 	  {required: 'Enter activity title'},
			sdate:    {required: 'Enter date'},
			stime:    {required: 'Enter time'},
			edate:    {required: 'Enter date'},
			etime:    {required: 'Enter time'},
			venue:    {required: 'Enter venue'},
	   		numPersons:{required: 'Enter number of persons'},
 		    outsidersOption:{required: 'Pick option'},
	      Faculty: 	  {required: 'Enter name'}
		}
		});
	$('#nextSpecialPermit1').click(function() {
    	if (spca1.valid()){
        	window.location.href = "ORG_PreAct_SpecialPermitCampusAccess2.html";
        }
        return false;
   		});
   	$("#addspca").click(function() {
      $("#requests").append('<tr id ="detailss" class="details"> <td><input class="form-control" name="sdate" type="date" /></td><td> <input class="form-control" name="edate" placeholder ="Enter End Date" type="date"/></td><td> <input class="form-control" name="stime" type="time" placeholder ="Enter Start Time" /></td><td> <input class="form-control" name="etime" placeholder ="Enter End Time" type="time"/></td><td>  <input class="form-control" name="venue" placeholder ="Enter Venue"/></td></tr>');   
     	});
    $("#deletespca").click(function() {
      var v= document.getElementById("detailss");
      	v.remove();
    	});
   	//spca1


   	//spca 2
   	var spca2= $('#specialPermit2');
	spca2.validate({
		rules: {
			lName: {
				required:true,
				lettersonly: true
			},
			fName: {
				required:true,
				lettersonly: true
			},
			mName: {
				required:true,
				maxlength: 5,
				lettersonly: true
			},
			classification: {
				required: true
			},
			email: {
				required: true,
				email:true
			},
			mNum: {
				required: true,
				minlength:11,
				maxlength:11
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{

			lName: {
				required: 'Enter Last Name',
				lettersonly: 'Alphabetic characters only'
			},
			fName: {
				required: 'Enter First Name',
				lettersonly: 'Alphabetic characters only'
			},
			mName: {
				required: 'Enter Middle Name',
				lettersonly: 'Alphabetic characters only'
			},
			classification: {
				required: 'Enter Classification'
			},
			email: {
				required: 'Enter DLSU e-mail',
				email: 'Invalid e-mail'
			},
			mNum: {
				required: 'Enter Mobile Number',
				minlength: 'Mobile Number must be 11 digits',
				maxlength: 'Mobile Number must be 11 digits'
			}
			
		}
		});
	$('#nextSpecialPermit2').click(function() {
    	if (spca2.valid()){
        	window.location.href = "ORG_PreAct_SpecialPermitCampusAccess3.html";
        }
        return false;
   		});
   	$("#addspca2").click(function() {
      $("#names").append('<tr id ="detailss" class="details"> <<td>  <input class="form-control" name="lName" placeholder ="Enter Last Name" /></td><td>  <input class="form-control" name="fName" placeholder ="Enter First Name" /></td> <td>  <input class="form-control" name="mName" placeholder ="Enter Middle Name" /></td><td>  <input class="form-control" name="classification" placeholder ="Enter Classifcation" /></td><td>  <input class="form-control" name="email" placeholder ="Enter Email"/></td><td>  <input class="form-control" name="mNum" placeholder ="Enter Mobile Number"/></td></tr>');   
     });
    $("#deletespca2").click(function() {
      var v= document.getElementById("detailss");
      	v.remove();
   	 });
   	// spca 2

   	//spca3
   	var spca3= $('#specialPermit3');
	spca3.validate({
		rules: {
			Name: {
				required:true
			},
			IDNum: {
				required:true,
				maxlength: 8,
				minlength: 8
			},
			officeLoc: {
				required:true
			},
			CPNo: {
				required: true,
				maxlength: 11,
				minlength: 11
			},
			TelNo: {
				maxlength: 7,
				minlength: 7
			},
			Email: {
				required: true,
				email: true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			Name: {
				required: 'Enter name'
			},
			IDNum: {
				required:'Enter ID number',
				maxlength: 'Invalid ID number',
				minlength: 'Invalid ID number'
			},
			officeLoc: {
				required: 'Enter office location'
			},
			CPNo: {
				required: 'Enter cellphone number',
				maxlength: 'Invalid cellphone number',
				minlength: 'Invalid cellphone number'
			},
			TelNo: {
				maxlength: 'Invalid telephone number',
				minlength: 'Invalid telephone number'
			},
			Email: {
				required: 'Enter DLSU e-mail',
				email: 'Invalid DLSU e-mail'
			}		
		}
	});

   $('#nextSpecialPermit3').click(function() {
   		if(spcaform3.valid()){
        	window.location.href = "";
   		}
   	});
   	//spca3

   	//org preact
   	var opre= $('#preActForm');
	opre.validate({
		rules: {
			gosmoption: {
				required:true
			}
		},

	});
	$('#nextPreAct').click(function() {
    	if (opre.valid()){
        	window.location.href = "";
        }
        return false;
   	});

   $('#returnHome').click(function() {
        	window.location.href = "Org_Home.html";
   	});
   	//org preact


   	//list of participants
   	var lop= $('#LPForm');
	lop.validate({
		rules: {
			'id[]':{
				required: true,
				maxlength: 8,
				minlength: 8
			},
			'lName[]':{
				required:true,
				lettersonly: true
			},
			'fName[]':{
				required:true,
				lettersonly: true
			},
			'mName[]':{
				required: true,
				lettersonly: true
			},
			'age[]':{
				required: true,
				maxlength: 2,
				min: 5
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			'id[]':{
				required: 'Enter ID number',
				maxlength: 'Invalid ID number',
				minlength: 'Invalid ID number'
			},
			'lName[]':{
				required: 'Enter last name',
				lettersonly: 'Alphabetic characters only'
			},
			'fName[]':{
				required: 'Enter first name',
				lettersonly: 'Alphabetic characters only'
			},
			'mName[]':{
				required: 'Enter middle initial',
				lettersonly: 'Alphabetic characters only'
			},
			'age[]':{
				required: 'Enter age',
				maxlength: 'Invalid age',
				min: 'Invalid age'
			}
		}
	});
	$('#nextLP').click(function() {
    	if (lop.valid()){
        	window.location.href = "";
        }
        return false;
   		});


    var numberIncr =1;
	$("#add").click(function () {
		$('#student').append('<tr id ="detailz" class="details"><td>  <input class="form-control" name ="id[' + numberIncr + ']" placeholder ="Enter ID Number" /></td><td>  <input class="form-control" name ="lName[' + numberIncr + ']" placeholder ="Enter Last Name" /></td> <td>  <input class="form-control" name = "fName[' + numberIncr + ']" placeholder ="Enter First Name" /></td><td>  <input class="form-control" name ="mName[' + numberIncr + ']" placeholder ="Enter Middle Initial" /></td><td>  <input class="form-control" name = "age[' + numberIncr + ']" placeholder ="Enter Age" style ="width:120px"/></td><td> <input type="checkbox" class="js-switch" name="choice" /></td></tr>')
		 numberIncr++;
    });
    $("#delete").click(function () {
      var v= document.getElementById("detailz");
      v.remove();
            	});
   	// list of participants


   	// contest mechanics 
   	var conmech= $('#conmech');
	conmech.validate({
		rules: {
			guidelines:{
				required:true
			},
			mechanics:{
				required: true
			},
			cri:{
				required: true
			},
			judge:{
				required:true,
				lettersonly: true
			},
			question:{
				required: true
			}
		},
		highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
		},
		success: removeError,

		messages:{
			guidelines:{
				required: 'Enter guideline'
			},
			mechanics:{
				required: 'Enter mechanic'
			},
			cri:{
				required: 'Enter criteria'
			},
			judge:{
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			question:{
				required: 'Enter question'
			}
		}
		});

	$("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Mechanics</h4> </label><div class= "form-group col-md-6"><input type="text" name= "mechanics" class="form-control" placeholder="ex: Sing and dance with your blockmates"/></div></div></div>');

	$("#addmech").click(function() {
            $("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input type="text" name= "mechanics" class="form-control" placeholder="ex: Sing and dance with your blockmates"/></div></div></div></div>');   
	});

    $("#deletemech").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });


   	$("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Criteria</h4> </label><div class= "form-group col-md-6"><input type="text" name= "cri" class="form-control" placeholder="ex: One hundred points for costume."/></div></div></div>')

   	$("#addcrit").click(function() {
            $("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input type="text" name= "cri" class="form-control" placeholder="ex: One hundrer points for costume."/></div></div></div>');   
	});

     $("#deletecrit").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#listjudge").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Judges</h4> </label><div class= "form-group col-md-6"><input type="text" name= "judge" class="form-control" placeholder="ex: Juan Dela Cruz"/></div></div></div>')

   	$("#addjudge").click(function() {
            $("#listjudge").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input type="text" name= "judge" class="form-control" placeholder="ex: Juan Dela Cruz"/></div></div></div>');   
	});

     $("#deletejudge").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

    $("#listquestions").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Questions </h4> </label><div class= "form-group col-md-6"><input type="text" name= "question" class="form-control" placeholder="ex: What is your advocacy?"/></div></div></div>')

  	$("#addquestion").click(function() {
            $("#listquestions").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input type="text" name= "question" class="form-control" placeholder="ex: What is your advocacy?"/></div></div></div>');   
	});

     $("#deletequestion").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

   	// contest mechanics


});

