

$(function(){

	// FOOD ENTRY PERMIT 1
	var foodform= $('#feform');
	foodform.validate({
		rules: {
			sname: "required",
			idnum:{
				required: true,
				minlength: 8

			},
			posi: "required",

			email:{
				required: true,
				email: true
			},

			cpnum:{
				required: true,
				maxlength: 14	
			},

			localnum:{
				maxlength: 7
			}

		},

		messages: {
			sname:{
				required: 'Enter your full name'
			},

			idnum:{
				required: 'Enter your ID number',
				minlength: 'Invalid ID number'
			},

			posi: {
				required:'Enter your position.'
			},

			email: {
				required: 'Enter your DLSU e-mail.',
				email: 'Invalid DLSU e-mail.'
			},

			cpnum: {
				required: 'Enter mobile number.',
				maxlength: 'Invalid mobile number'
			},

			localnum:{
				maxlength: 'Enter a valid local number'
			}
		}
	});

	        $('#nextbt').click(function() {
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

        $("#addc").click(function() {
          $("#tr").append(' <tr id= "newtr"><td align= "center" ><input type="number" name= "foqty" class="form-control" id="foqty"/></td><td align= "center"><input type="number" name= "founit" class="form-control" id="founit"/></td><td align= "center"><input type="text" name= "fodes" class="form-control" id="fodes" placeholder="Description"/></td><td align= "center"><input type="number" name= "foecost" class="form-control" id="foecost"/></td></tr>');   
        });
        
          $("#remc").click(function() {
            var v= document.getElementById("newtr");
            v.remove();
          });
	// FOOD ENTRY PERMIT 2

	// MIN PUB PROPOSAL 1
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
               window.location.href = "ORG_MinPP2.html";
            }
            return false;
        });
	// MIN PUB PROPOSAL 1

	// MIN PUB PROPOSAL 2
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

			bm1: "required",
			bm2: "required",
			bm3: "required",
			bm4: "required",
			bm5: "required"
			
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
				required: 'Enter full name'
			},

			bm2:{
				required: 'Enter full name'
			},

			bm3:{
				required: 'Enter full name'
			},

			bm4:{
				required: 'Enter full name'
			},

			bm5:{
				required: 'Enter full name'
			}
		}
	});     
	// MIN PUB PROPOSAL 2

	// PPR 1 
	var pprform1= $('#pprform1');
	pprform1.validate({
		rules: {
			phname:"required",
			
			phnum: "required",

			prname:"required",
			
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
				required: 'Enter project head name'
			},

			phnum:{
				required: 'Enter project head contact number'
			},

			prname:{
				required: 'Enter project head contact name'
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

          $("#addc").click(function() {
            $("#ph").append(' <div class="col-md-12 col-sm-12 col-xs-12" id="newp"><div class="row"><div class="col-md-3 col-sm-3 col-xs-12 form-group"> <input type="text" name="prname" class="form-control has-feedback-left" id="name" placeholder="Name"><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span></div> <div class="col-md-3 col-sm-3 col-xs-12 form-group"><input type="text" name="prnum" class="form-control" id="contact" placeholder="Contact Number"><span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span></div></div></div>');   
          });

          $("#remc").click(function() {
            var v= document.getElementById("newp");
            v.remove();
          });
	   
	    $('#nextbppr').click(function() {
            if (pprform1.valid()){
               window.location.href = "ORG_PreAct_PPR2.html";
            }
            return false;
     });
    //PPR 1


    // PPR 2

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


		$("#tr").append('<tr id="newtr"><td align= "center"> <input type= "time" name="time"> - <input type= "time" name="stime"> </td> <td align= "center"> <input type="text" class="form-control" name="aname" id="act" placeholder="Activity name"/></td> <td align= "center"> <input type="text" name="ades" class="form-control" id="des" placeholder="Description of Activity"/> </td> <td align= "center"> <input type="text" class="form-control" id="icharge" name= "apic" placeholder="Person in-charge"/> </td></tr>');   
        $("#addc2").click(function() {
          $("#tr").append('<tr id="newtr"><td align= "center"> <input type= "time" name="time"> - <input type= "time" name="stime"> </td> <td align= "center"> <input type="text" class="form-control" name="aname" id="act" placeholder="Activity name"/></td> <td align= "center"> <input type="text" name="ades" class="form-control" id="des" placeholder="Description of Activity"/> </td> <td align= "center"> <input type="text" class="form-control" id="icharge" name= "apic" placeholder="Person in-charge"/> </td></tr>');   
           });

          
          $("#remc2").click(function() {
            var v= document.getElementById("newtr");
            v.remove();
          });

	   	  $('#nextbppr2').click(function() {
            if (pprform2.valid()){
               window.location.href = "ORG_PreAct_PPR3.html";
            }
            return false;
     	  });

    // PPR 2

    //PPR 3

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

    // PPR 3

    //PPR 4 1

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

          $("#addc4").click(function() {
             $("#tr").append('<tr id="newtr"> <td><input type="text" class="form-control" id="sname" name="sname" placeholder="Other Source"/></td> <td> <input type="Number" name="samt" class="form-control" id="of" placeholder="Enter Amount"/></td></tr>');   
          });

           $("#remc4").click(function() {
              	var v= document.getElementById("newtr");
                 v.remove();
            });


	   	  $('#nextbppr4').click(function() {
            if (pprform41.valid()){
               window.location.href = ""; // next page
            }
            return false;
     	  });

  
    //PPR 42

});

