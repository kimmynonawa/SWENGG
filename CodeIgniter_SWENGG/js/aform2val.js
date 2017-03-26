
   $(document).ready(function () {
        jQuery.validator.addMethod("lettersonly", function(value, element) {
           return this.optional(element) || /^[a-z\s]+$/i.test(value);
        })

        function removeError(element){
          element.addClass('valid')
              .closest('.form-group')
              .removeClass('has-error');
        }

      var aform2= $('#aform2');
      var numberInc=0;
      var numberIncr=0;

      $('#dateOption').on('click', function () {
        var choice = document.getElementById("select").value;
 
        if(choice==1){
        	event.preventDefault();
          $('#dates').append($('<p></p><div class="details"><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Date</h4></label></div> <div class= "form-group col-md-4"><input class= "dt form-control" type="date" name="Date[' + numberInc + ']"/> </div><div class="col-md-2"><button class="form-control btn btn-danger" id="rDate" name="rDate"> Remove Date</button></div></div></div><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Time</h4></label></div> <div class= "form-inline col-md-4"><input type="time" name= "sTime[]" id="startTime" class="form-control" style="width:129px" /> - <input class= "etm form-control" type="time" name= "eTime[' + numberInc + ']" class="form-control" style="width:130px"/></div></div></div><div class="row" id ="time"> </div></div>'));
              numberInc++;
            $(".dt").each(function(){
             $(this).rules( "add",{
                required:true,
              messages: {
                required: 'Enter date'
              }
             });
            });

            $(".etm").each(function(){
                $(this).rules( "add", {
                required:true,
              messages: {
                required: 'Enter time'

              }
             });
         });



          $(document).on("click", "#rDate", function(){
            (this).closest(".details").remove();
          });
        } else if(choice==2){
          $('#dates').append($('<p></p><div class="details"><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Date</h4></label></div> <div class= "form-inline col-md-4"><input type="date" name= "sDate[]" id="startDate" class="form-control" style="width:129px" /> - <input class="eda form-control" type="date" name= "eDate[' + numberIncr + ']"  style="width:130px"/></div><div class="col-md-2"><button class="form-control btn btn-danger" id="rDate" name="rDate"> Remove Date</button></div></div></div> <div class="row" id ="time"> </div><div class= "row"><div class="col-md-10"> <div class="col-md-4"> <label class= "col-md-2"> <h4>Time</h4></label></div> <div class= "form-inline col-md-4"><input type="time" name= "sTime[]" id="startTime" class="form-control" style="width:129px" /> - <input class="eti form-control" type="time" name= "eTim[' + numberIncr + ']"  style="width:130px"/></div></div>'));

          	 numberIncr++;
            $(".eda").each(function(){
                $(this).rules( "add", {
                required:true,
              messages: {
                required: 'Enter date'
              }
             });
            });

            $(".eti").each(function(){
                $(this).rules( "add", {
                required:true,
              messages: {
                required: 'Enter time'
              }
             });
            });

          $(document).on("click", "#rDate", function(){
            (this).closest(".details").remove();
          });
        }
      });

    aform2.validate({
    rules: {
    'Date[0]': "required",
    'eDate[0]': "required",
    'eTime[0]': "required",
    'eTim[0]': "required",
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
   	'Date[0]':{
   		required: 'Enter date'
   	},
    'eDate[0]':{
    	required: 'Enter date'
    },
    'eTime[0]':{
    	required: 'Enter time'
    },
    'eTim[0]':{
    	required: 'Enter time'
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
   });
