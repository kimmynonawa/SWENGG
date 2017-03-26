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
  $("#trr").append('<tr><td><input type="text" class="mnm form-control" name="matname[' + numberIncr + ']" placeholder="Material name"/></td> <td><input class="mqt form-control"  name="matqty[' + numberIncr + ']" placeholder="Quantity"/></td><td><input class="mcs form-control"name="matcost[' + numberIncr + ']" placeholder="Unit Cost"/></td> <td align="center" style= "background-color:#D3D3D3"><h4> P750.00</h4></td></tr>');   

  var pprform3= $('#pprform3');
  pprform3.validate({
    rules: {
      'matname[0]':"required",
      
      'matqty[0]': "required",

      'matcost[0]':"required",
      
    },
    highlight: function(element){ $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); 
    },
    success: removeError,


    messages: {
      'matname[0]': {
        required: 'Enter Material Name'
      },

      'matqty[0]':{
        required: 'Enter Quantity'
      },

      'matcost[0]':{
        required: 'Enter Unit Cost'
      }
    }
    });     

  $("#addc3").click(function() {
    numberIncr++;
      $("#trr").append($('<tr id="newtr"><td><input type="text" class="mnm form-control" name="matname[' + numberIncr + ']" placeholder="Material name"/></td> <td><input class="mqt form-control"  name="matqty[' + numberIncr + ']" placeholder="Quantity"/></td><td><input class="mcs form-control"name="matcost[' + numberIncr + ']" placeholder="Unit Cost"/></td> <td align="center" style= "background-color:#D3D3D3"><h4> P750.00</h4></td></tr>'));   
    
        $(".mnm").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter Material Name'
      }
    });
      });

       $(".mqt").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter Quantity'
      }
    });
      });

      $(".mcs").each(function(){
        $(this).rules( "add", {
        required:true,
      messages: {
        required: 'Enter Unit Cost'
      }
    });
      });


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
});