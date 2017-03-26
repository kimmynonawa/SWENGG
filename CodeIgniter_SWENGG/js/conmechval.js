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
	$("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Mechanics</h4> </label><div class= "form-group col-md-6"><input class="mch form-control type="text" name= "mechanics[' + numberIncr + ']" " placeholder="ex: Sing and dance with your blockmates"/></div></div></div>');

	var numberIncr1 = 0;
	$("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Criteria</h4> </label><div class= "form-group col-md-6"><input class="crt form-control" type="text" name= "cri[' + numberIncr1 + ']" placeholder="ex: One hundred points for costume."/></div></div></div>');

	var numberIncr2 = 0;
	$("#listjudge").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Judges</h4> </label><div class= "form-group col-md-6"><input class=" jdg form-control" type="text" name= "judge[' + numberIncr2 + ']" placeholder="ex: Juan Dela Cruz"/></div></div></div>');



	$("#addmech").click(function() {
		numberIncr++;
            $("#mech").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Mechanics</h4> </label><div class= "form-group col-md-6"><input class="mch form-control type="text" name= "mechanics[' + numberIncr + ']" " placeholder="ex: Sing and dance with your blockmates"/></div></div></div>'); 
        $(".mch").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter mechanic',
		  }
		});
      });  
	});

	 $("#addcrit").click(function() {
            numberIncr1++;
            $("#criteria").append('<div class="col-md-12 col-sm-12 col-xs-12"  id="newph1"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Criteria</h4> </label><div class= "form-group col-md-6"><input class="crt form-control" type="text" name= "cri[' + numberIncr1 + ']" placeholder="ex: One hundred points for costume."/></div></div></div>');  
        $(".crt").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: 'Enter criteria',
		  }
		});
      }); 
	});

   	$("#addjudge").click(function() {
            numberIncr2++;
            $("#listjudge").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph2"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input class="jdg form-control" type="text" name= "judge[' + numberIncr2 + ']"  placeholder="ex: Juan Dela Cruz"/></div></div></div>');   
                   $(".jdg").each(function(){
      	$(this).rules( "add", {
				required:true,
		 		lettersonly: true,
		  messages: {
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
		  }
		});
      });
	});

	 $('#select').click(function(){
        var choice = document.getElementById("type").value;
        if(choice==1){
            numberIncr4=0;
           event.preventDefault();
            $("#listquestions").append('<div class="col-md-12 col-sm-12 col-xs-12"><div class="row"><div class="col-md-8"><label class= "col-md-2"> <h4>Questions </h4> </label><div class= "form-group col-md-6"><input type="text" name= "questions[' + numberIncr4 + ']" class="form-control" placeholder="ex: What is your advocacy?"/></div></div></div>');
            numberIncr4++;
            $("#buttons").append('<div class= "row"><div class= "col-md-8"><label class="control-label col-md-2"></label><div class="col-md-8"><div class = "buttons"><button id="addquestion" type ="button" class ="btn btn-default"> <span class="glyphicon glyphicon-plus-sign"></span> </button><button id="deletequestion" type ="button" class="btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></button></div></div></div></div>');
           
            $("#addquestion").click(function() {
              $("#listquestions").append('<div class="col-md-12 col-sm-12 col-xs-12" id="newph4"><div class="row"><div class="col-md-8"><label class= "col-md-2"></label><div class= "form-group col-md-6"><input class=" qtn form-control" type="text" name= "questions[' + numberIncr4 + ']"  placeholder="ex: What is your advocacy?"/></div></div></div>');   
             $(".qtn").each(function(){
      			$(this).rules( "add", {
				required:true,
		 		 messages: {
				required: 'Enter question'
		  }
		});
      });  

            });

           $("#deletequestion").click(function() {
                  var v= document.getElementById("newph");
                  v.remove();
        });
        
        }
      });


	var conmech= $('#conmech');
	conmech.validate({
		rules: {
			guidelines:{
				required:true
			},
			'mechanics[0]':{
				required: true
			},
			'cri[0]':{
				required: true
			},
			'judge[0]':{
				required:true,
				lettersonly: true
			},
			'questions[0]' :{
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
			'mechanics[0]':{
				required: 'Enter mechanic'
			},
			'cri[0]':{
				required: 'Enter criteria'
			},
			'judge[0]':{
				required: 'Enter name',
				lettersonly: 'Alphabetic characters only'
			},
			'questions[0]' :{
				required: 'Enter question'
			}
		}
		});


    $("#deletemech").click(function() {
            var v= document.getElementById("newph");
            v.remove();
      });

     $("#deletecrit").click(function() {
            var v= document.getElementById("newph1");
            v.remove();
      });

     $("#deletejudge").click(function() {
            var v= document.getElementById("newph2");
            v.remove();
      });

     $("#deletequestion").click(function() {
            var v= document.getElementById("newph3");
            v.remove();
      });
	
});