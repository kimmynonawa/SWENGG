

$(function(){

	// FOOD ENTRY PERMIT 1
	var foodform= $('#formFoodEntry');

	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
	})
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
	$('#nextbff2').click(function() {
	   if(foodform2.valid()){
          window.location.href = "ORG_PreAct_PPR4.html";
	   	}
    });
    $("#addcf").click(function() {
       $("#tr").append(' <tr id= "newtr"><td align= "center" ><input type="number" name= "foqty" class="form-control" id="foqty"/></td><td align= "center"><input type="number" name= "founit" class="form-control" id="founit"/></td><td align= "center"><input type="text" name= "fodes" class="form-control" id="fodes" placeholder="Description"/></td><td align= "center"><input type="number" name= "foecost" class="form-control" id="foecost"/></td></tr>');   
     });
        
          $("#remcf").click(function() {
            var v= document.getElementById("newtr");
            v.remove();
          });
	// FOOD ENTRY PERMIT 2

	//MINOR PUBLICATION PROPOSAL 1
	var pubform= $('#pubform');
	pubform.validate({
		rules: {
			pubname: "required",
			
			pubtypedropdown: "required",
			
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

		messages: {
			pubname: {
				required: 'Enter publication name'
			},

			pubtypedropdown:{
				required: 'Pick publication type'
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
	$('#nextpub').click(function() {
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
     
    $("#addc2").click(function(){
        $("#tr").append('<tr id="newtr"><td align= "center"> <input type= "time" name="stime"> - <input type= "time" name="stime"> </td> <td align= "center"> <input type="text" class="form-control" name="aname" id="act" placeholder="Activity name"/></td> <td align= "center"> <input type="text" name="ades" class="form-control" id="des" placeholder="Description of Activity"/> </td> <td align= "center"> <input type="text" class="form-control" id="icharge" name= "apic" placeholder="Person in-charge"/> </td></tr>');   
     });
    
    $("#remc2").click(function(){
       var v= document.getElementById("newtr");
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

    //PROJECT PROPOSAL 4.1
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
       window.location.href = ""; // next page
      }
      return false;
    });
    //PROJECT PROPOSAL 4.1

    //GOSM 1
    var gosmform1= $('#gosmform1');
	gosmform1.validate({
		rules: {
			gosmgoals:"required",
			gosmobj: "required",
			gosmdes:"required",
			gosmmeas:"required",
			gosmsdate:"required",
			gosmedate: "required",

			gosmstime:"required",
			gosmetime: "required",
			gosmvenu:"required",

			gosmbug: {
				required: true,
				minlength: 2,
				maxlength: 6
			},
			gosmnat:"required",
			gosmtype:"required"


		},

		messages: {
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

			gosmstime: { 
				required: 'Pick a start time for the activity'
			},
			gosmetime: {
				required: 'Pick an end time for the activity'
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

    // GOSM 2
    var gosmform2= $('#gosmform2');
	gosmform2.validate({
		rules: {
			phname:{
				required: true,
				lettersonly: true
			},
			yename: {
				required: true,
				lettersonly: true
			},
			ianame:{
				required: true,
				lettersonly: true
			},
			eaname:{
				required: true,
				lettersonly: true
			},
			hrname:{
				required: true,
				lettersonly: true
			},
			prmname:{
				required: true,
				lettersonly: true
			},
			prmstatus:"required",
			fnname:{
				required: true,
				lettersonly: true
			},
			fnstatus:"required",
			docname:{
				required: true,
				lettersonly: true
			},
			docstatus:"required"

		},

		messages: {

			phname:{
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			yename: { 
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			ianame: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			eaname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			hrname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			prmname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			prmstatus: { 
				required: 'Enter status'
			},
			fnname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			fnstatus: { 
				required: 'Enter status'
			},
			docname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			docstatus: {
				required: 'Enter status'
			}
			
		}
	});

   	$("#gnph").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="phname" class="form-control has-feedback-left" id="phname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

    $("#addcgosm2").click(function() {
            $("#gnph").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="phname" class="form-control has-feedback-left" id="phname" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> </div></div>');   
         });

     $("#remcgosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });


     $("#gnye").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="yename" class="form-control has-feedback-left" id="yename" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

    $("#addyegosm2").click(function() {
            $("#gnye").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="yename" class="form-control has-feedback-left" id="ye name" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> </div></div>');   
          });

     $("#remyegosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#gnia").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="ianame" class="form-control has-feedback-left" id="ianame" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

     $("#addiagosm2").click(function() {
            $("#gnia").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="ianame" class="form-control has-feedback-left" id="ia name" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> </div></div>');   
          });

     $("#remiagosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#gnea").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="eaname" class="form-control has-feedback-left" id="eaname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

     $("#addeagosm2").click(function() {
            $("#gnea").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="eaname" class="form-control has-feedback-left" id="ea name" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> </div></div>');   
          });

     $("#remeagosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#gnhr").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="hrname" class="form-control has-feedback-left" id="hrname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

     $("#addhrgosm2").click(function() {
            $("#gnhr").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="hrname" class="form-control has-feedback-left" id="hr name" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> </div></div>');   
          });

     $("#remhrgosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });



     $("#gnprm").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="prmname" class="form-control has-feedback-left" id="prmname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="prmstatus" class="form-control" id="prmstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');

     $("#addprmgosm2").click(function() {
            $("#gnprm").append(' <div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="prmname" class="form-control has-feedback-left" id="prmname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="prmstatus" class="form-control" id="prmstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
         });

     $("#remprmgosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
          });



     $("#gnfn").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="fnname" class="form-control has-feedback-left" id="fnname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="fnstatus" class="form-control" id="fnstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');

     $("#addfngosm2").click(function() {
            $("#gnfn").append(' <div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="fnname" class="form-control has-feedback-left" id="fnname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="fntatus" class="form-control" id="fnstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
          });

     $("#remfngosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
          });


     $("#gndoc").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="docname" class="form-control has-feedback-left" id="docname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="docstatus" class="form-control" id="docstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');

     $("#adddocgosm2").click(function() {
            $("#gndoc").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="docname" class="form-control has-feedback-left" id="docname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="docstatus" class="form-control" id="docstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
          });

     $("#remdocgosm2").click(function() {
            var v= document.getElementById("newph");
            v.remove();
          });
    // GOSM2 

   // GOSM 3
    var gosmform3= $('#gosmform3');
	gosmform3.validate({
		rules: {

			ptgname:{
				required:true,
				lettersonly:true
			},
			vdgname:{
				required:true,
				lettersonly:true
			},
			hstname:{
				required:true,
				lettersonly:true
			},
			eqpname:{
				required:true,
				lettersonly:true
			},
			spkname:{
				required:true,
				lettersonly:true
			},
			spkstatus:"required",
			spkmail:{
				required:true,
				email: true
			},
			spnname:{
				required:true,
				lettersonly:true
			},
			spnstatus:"required",
			spnmail:{
				required:true,
				email: true
			}

		},

		messages: {

			ptgname:{
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			vdgname: { 
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			hstname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			eqpname: {
				required: 'Enter equipment',
				lettersonly: 'Alphabetic characters only'
			},
			spkname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			spkstatus: {
				required: 'Enter status'
			},
			spnstatus: { 
				required: 'Enter status'
			},
			spnname: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			spkmail: { 
				required: 'Enter e-mail',
				email: 'Invalid e-mail'
			},
			spnmail: {
				required: 'Enter e-mail',
				email: 'Invalid e-mail'
			}
		}
	});


   	$("#gnptg").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="ptgname" class="form-control has-feedback-left" id="ptgname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

     $("#addptggosm3").click(function() {
            $("#gnptg").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="ptgname" class="form-control has-feedback-left" id="ptgname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');   
          });

     $("#remptggosm3").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });


   	 $("#gnvdg").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="vdgname" class="form-control has-feedback-left" id="vdgname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

     $("#addvdggosm3").click(function() {
            $("#gnvdg").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="vdgname" class="form-control has-feedback-left" id="vdgname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');   
         });

     $("#remvdggosm3").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

    
     $("#gnhst").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="hstname" class="form-control has-feedback-left" id="hstname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

     $("#addhstgosm3").click(function() {
            $("#gnhst").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="hstname" class="form-control has-feedback-left" id="hstname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');   
          });

     $("#remhstgosm3").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#gneqp").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="eqpname" class="form-control has-feedback-left" id="eqpname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');

     $("#addeqpgosm3").click(function() {
            $("#gneqp").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="eqpname" class="form-control has-feedback-left" id="eqpname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div></div></div>');   
          });

     $("#remeqpgosm3").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#gnspk").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="spkname" class="form-control has-feedback-left" id="spkname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="spkstatus" class="form-control" id="spkstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div><div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="email" name="spkmail" class="form-control" id="spkmail" placeholder="juan_delacruz@dlsu.edu.ph"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');

     $("#addspkgosm3").click(function() {
            $("#gnspk").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="spkname" class="form-control has-feedback-left" id="spkname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="spkstatus" class="form-control" id="spkstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div><div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="email" name="spkmail" class="form-control" id="spkmail" placeholder="juan_delacruz@dlsu.edu.ph"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
          });

	 $("#remspkgosm3").click(function() {
            var v= document.getElementById("newph");
            v.remove();
          });

     $("#gnspn").append('<div class="col-md-12 col-sm-12 col-xs-12" id="new"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="spnname" class="form-control has-feedback-left" id="spnname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="spnstatus" class="form-control" id="spnstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div><div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="email" name="spnmail" class="form-control" id="spnmail" placeholder="juan_delacruz@dlsu.edu.ph"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');

     $("#addspngosm3").click(function() {
            $("#gnspn").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="spnname" class="form-control has-feedback-left" id="spnname" placeholder="Name" ><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="spnstatus" class="form-control" id="spnstatus" placeholder="Status"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div><div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="email" name="spnmail" class="form-control" id="spnmail" placeholder="juan_delacruz@dlsu.edu.ph"><span class="fa fa-user form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
          });

	 $("#remspngosm3").click(function() {
            var v= document.getElementById("newph");
            v.remove();
          });
    // GOSM3

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
	$('#nextbcson').click(function() {
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
			}
		},

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


   	//mechanicsForm
   	var mechanicsForm= $('#mechanicsForm');
	mechanicsForm.validate({
		rules: {
			guidelines: {
				required:true
			},
			mechanics: {
				required:true
			},
			criteria: {
				required:true
			},
			judges: {
				required:true,
				lettersonly: true
			
			},
			questions: {
				required:true
			}
		},

		messages:{
			guidelines: {
				required: 'Enter guidelines'
			},
			mechanics: {
				required: 'Enter mechanics'
			},
			criteria: {
				required: 'Enter criteria'
			},
			judges: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			
			},
			questions: {
				required: 'Enter question'
			}
		}
	});
	$('#nextmech').click(function() {
    	if (mechanicsForm.valid()){
        	window.location.href = "";
        }
        return false;
   	});
   	//mechanicsForm

   	//Approval change act details
   	var approvalChanges= $('#approvalChanges');
	approvalChanges.validate({
		rules: {
			CSOactType: {
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

		messages:{
			CSOactType: {
				required: ' Pick activity type'
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
			venueList: {
				required:true,
			}
		},

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
			venueList: {
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


    $("#tmarks").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"> <div class="col-md-8"><label class= "col-md-5"> <h4>Trademark To Use:</h4> </label> <div class= "form-group col-md-6"> <select class="select2_group form-control" name="tmChoice"> <optgroup label="Logos / Design"> <option value="delasalleuniversitylogo">De La Salle University Logo</option><option value="starscholarsdesign">Star Scholars Design</option></optgroup><optgroup label="DLSU labels"><option value="delasalleuniversity">De La Salle University</option><option value="dlsum">DLSU-M</option><option value="lasallegreenarchers">La Salle Green Archers</option><option value="lasalle">La Salle</option><option value="dlsu">DLSU</option><option value="ls">LS</option><option value="greenarcher">Green Archer</option> <option value="delasalleathletics">De La Salle Athletics</option></optgroup><optgroup label="DLSU taglines"><option value="animolasalle">Animo La Salle</option><option value="thefuturebeginshere">The Future Begins Here</option><option value="wemeanbusiness">We Mean Business</option><option value="creatingthenextgreatidea">Creating the Next Great Idea</option> <option value="bepartofthebusinessclass">Be Part of the Business Class</option><option value="keeplearning">Keep Learning</option><option value="hiptobehere">Hip to Be Here</option> <option value="beyondhigherlearning">Beyond Higher Learning</option><option value="nevershallwefail">Never Shall We Fail</option><option value="greenwhitefights">Green White Fights</option></optgroup></select></div></div></div></div>')

  	$("#addtm").click(function() {
       $("#tmarks").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"> <div class="col-md-8"><label class= "col-md-5"> </label> <div class= "form-group col-md-6"> <select class="select2_group form-control" name="tmChoice"> <optgroup label="Logos / Design"> <option value="delasalleuniversitylogo">De La Salle University Logo</option><option value="starscholarsdesign">Star Scholars Design</option></optgroup><optgroup label="DLSU labels"><option value="delasalleuniversity">De La Salle University</option><option value="dlsum">DLSU-M</option><option value="lasallegreenarchers">La Salle Green Archers</option><option value="lasalle">La Salle</option><option value="dlsu">DLSU</option><option value="ls">LS</option><option value="greenarcher">Green Archer</option> <option value="delasalleathletics">De La Salle Athletics</option></optgroup><optgroup label="DLSU taglines"><option value="animolasalle">Animo La Salle</option><option value="thefuturebeginshere">The Future Begins Here</option><option value="wemeanbusiness">We Mean Business</option><option value="creatingthenextgreatidea">Creating the Next Great Idea</option> <option value="bepartofthebusinessclass">Be Part of the Business Class</option><option value="keeplearning">Keep Learning</option><option value="hiptobehere">Hip to Be Here</option> <option value="beyondhigherlearning">Beyond Higher Learning</option><option value="nevershallwefail">Never Shall We Fail</option><option value="greenwhitefights">Green White Fights</option></optgroup></select></div></div></div></div>');   
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

   	//spca
   	var spca1= $('#specialPermit1');
	spca1.validate({
		rules: {
			actType: {
				required:true
			},
			enmp: {
				required:true,
				maxlength: 5
			},
			enp: {
				required:true,
				maxlength: 5
			},
			Faculty: {
				required: true
			},
			sdate: {
				required: true
			},
			stime: {
				required: true
			},
			edate: {
				required: true
			},
			etime: {
				required: true
			},
			venue: {
				required: true
			}
		},

		messages:{
			actType: {
				required: 'Pick activity type'
			},
			enmp: {
				required: 'Enter ENMP',
				maxlength: 'Maximum ENMP exceeded'
			},
			enp: {
				required:'ENTER ENP',
				maxlength: 'Maximum ENP exceeded'
			},
			Faculty: {
				required: 'Enter faculty name'
			},
			sdate: {
				required: 'Enter start date'
			},
			stime: {
				required: 'Enter start time'
			},
			edate: {
				required: 'Enter end date'
			},
			etime: {
				required: 'Enter end time'
			},
			venue: {
				required: 'Enter venue'
			}	
		}
	});
	$('#nextSpecialPermit1').click(function() {
    	if (spca1.valid()){
        	window.location.href = "ORG_PreAct_SpecialPermitCampusAccess2.html";
        }
        return false;
   	});

   	//spca

   	//spca2
   	var spca2= $('#specialPermit2');
	spca2.validate({
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
				required: true,
				maxlength: 7,
				minlength: 7
			},
			Email: {
				required: true,
				email: true
			}
		},

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
				required: 'Enter telephone number',
				maxlength: 'Invalid telephone number',
				minlength: 'Invalid telephone number'
			},
			Email: {
				required: 'Enter DLSU e-mail',
				email: 'Invalid DLSU e-mail'
			}		
		}
	});
	$('#nextSpecialPermit2').click(function() {
    	if (spca2.valid()){
        	window.location.href = "";
        }
        return false;
   	});
   	//spca2

   	//org preact
   	var opre= $('#preActForm');
	opre.validate({
		rules: {
			preActType: {
				required:true
			}
		},

		messages:{
			preActType: {
				required: 'Pick activity type'
			}	
		}
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
			id:{
				required: true,
				maxlength: 8,
				minlength: 8
			},
			lName:{
				required:true,
				lettersonly: true
			},
			fName:{
				required:true,
				lettersonly: true
			},
			mName:{
				required: true,
				lettersonly: true
			},
			age:{
				required: true,
				maxlength: 2,
				min: 5
			}
		},

		messages:{
			id:{
				required: 'Enter ID number',
				maxlength: 'Invalid ID number',
				minlength: 'Invalid ID number'
			},
			lName:{
				required: 'Enter last name',
				lettersonly: 'Alphabetic characters only'
			},
			fName:{
				required: 'Enter first name',
				lettersonly: 'Alphabetic characters only'
			},
			mName:{
				required: 'Enter middle initial',
				lettersonly: 'Alphabetic characters only'
			},
			age:{
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

		$("#add").click(function () {
                var det = document.getElementById('details'); 
                var cln = det.cloneNode(true);
                var ig = document.getElementById('student');
                ig.appendChild(cln);    
                //var ctr = document.getElementsByClassName("details").length;
            });
            $("#delete").click(function () {
                var count = document.getElementsByClassName("details").length;
                var last = document.getElementsByClassName("details").item(count-1);
                if(count >1){
                    last.remove();
                }
                console.log(count);
            });
   	// list of participants



   	//spca

   	$("#addspca").click(function() {
      $("#requests").append('<tr id ="detailss" class="details"> <td><input class="form-control" name="sdate" placeholder ="Enter Start Date" /></td><td>  <input class="form-control" name="stime" placeholder ="Enter Start Time" /></td><td>  <input class="form-control" name="edate" placeholder ="Enter End Date" /></td><td>  <input class="form-control" name="etime" placeholder ="Enter End Time" /></td><td>  <input class="form-control" name="venue" placeholder ="Enter Venue"/></td></tr>');   
     });

   	 
    $("#deletespca").click(function() {
      var v= document.getElementById("detailss");
      	v.remove();
    });

    //
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



   	$("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Mechanics</h4> </label><div class= "form-group col-md-6"><input type="text" name= "mechanics" class="form-control" placeholder="ex: Sing and dance with your blockmates"/></div></div></div>')

   	$("#addmech").click(function() {
            $("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input type="text" name= "mechanics" class="form-control" placeholder="ex: Sing and dance with your blockmates"/></div></div></div></div>');   
	});

     $("#deletemech").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });


   	$("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Criteria</h4> </label><div class= "form-group col-md-6"><input type="text" name= "cri" class="form-control" placeholder="ex: 100 points for costume"/></div></div></div>')

   	$("#addcrit").click(function() {
            $("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input type="text" name= "cri" class="form-control" placeholder="ex: 100 points for costume"/></div></div></div>');   
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

