$(function(){
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
	})

	function removeError(element){
	element.addClass('valid')
			.closest('.form-group')
			.removeClass('has-error');
	}

   	var formTrademark2= $('#formTrademark2');

	var numberIncr = 0;

	// append basic table data

	$("#tmarks").append($('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-5"></label><div class= "form-group col-md-3"><select class="select2_group form-control" id="newTrademarkType" name="trademarkTypeChoice[' + numberIncr + ']"><option value="1">Logos/Design</option><option value="2">DLSU Labels</option><option value="3">DLSU Taglines</option></select></div><div class= "form-group col-md-4"><select class="select2_group form-control" id="newTrademarkOptions" name="trademarkChoice[' + numberIncr + ']">for (i = 0; i < optionValues.length; i++) {newRow += '<option value='+optionValues[i]+'>'+optionNames[i]+</option>;}newRow += </select></div></div></div>'));

	$("#addtm").on('click', function () {
		  var size = <?php echo sizeof($trademarkList);?>;
          var optionValues = new Array(); 
          var optionNames = new Array();
          var i = 0;
          <?php
            foreach($trademarkList as $trademark) {?>
              optionValues[i] = <?php echo $trademark->idREF_TRADEMARKS; ?>;
              optionNames[i] = "<?php echo $trademark->name; ?>";
              i++;     
          <?php
            }
          ?> 
       numberIncr++;
       var temp = $("#tmarks").append($('<div class="col-md-12 col-sm-12 col-xs-12" id="newph"><div class="row"><div class="col-md-8"><label class= "col-md-5"></label><div class= "form-group col-md-3"><select class="select2_group form-control" id="newTrademarkType" name="trademarkTypeChoice[' + numberIncr + ']"><option value="1">Logos/Design</option><option value="2">DLSU Labels</option><option value="3">DLSU Taglines</option></select></div><div class= "form-group col-md-4"><select class="select2_group form-control" id="newTrademarkOptions" name="trademarkChoice[' + numberIncr + ']">for (i = 0; i < optionValues.length; i++) {newRow += '<option value='+optionValues[i]+'>'+optionNames[i]+</option>;}newRow += </select></div></div></div>'));  
       
    	$(".select2_groupt").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: "Please Pick Trademark Type",
		  }
		});
      });

    	$(".select2_groupc").each(function(){
      	$(this).rules( "add", {
				required:true,
		  messages: {
				required: "Please Pick Trademark",
		  }
		});
      });

    });

	$("#formTrademark2").validate({
	rules: {
			'trademarkTypeChoice[0]':{
				required: true
			},
			'trademarkChoice[0]':{
				required: true
			},
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
			'trademarkTypeChoice[0]]':{
				required: 'Please Pick Trademark Type'
			},
			'trademarkChoice[0]]':{
				required: 'Please Pick Trademark Type'
			},
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

	$("#deletetm").click(function() {
            var v= document.getElementById("newph");
            v.remove();
    });
	
	$('#nextTrademark2').click(function() {
    	if (formTrademark1.valid()){
        	window.location.href = "";
        }
        return false;
   		});


	// append basic table data



});