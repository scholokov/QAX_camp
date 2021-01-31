$(function () {
	  var name_input=$("#name_input");
    var name_line=$("#name_line");
    var phone_input=$("#phone_input");
    var phone_line=$("#phone_line");
    var comment_input=$("#comment_input");
    var comment_line=$("#comment_line");
    //Functions for lines in form 
	  name_input.focus(function(){
        name_line.css({"border-width":"3px"});
    });
    name_input.focusout(function(){
        name_line.css({"border-width":"1px"});
        check_name();
    });
    phone_input.focus(function(){
        phone_line.css({"border-width":"3px"});
    });
    phone_input.focusout(function(){
        phone_line.css({"border-width":"1px"});
        check_email_phone();
    });
    comment_input.focus(function(){
		    comment_line.css({"border-width":"3px"});
    });
    comment_input.focusout(function(){
		    comment_line.css({"border-width":"1px"});
    });
    
    //Validation for name
    function check_name() {
      var name_length = name_input.val().length;
      var patternName = new RegExp(/^[a-zA-Zа-яА-яàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '-]+$/i);
      let name=patternName.test(name_input.val());
      
      if (name_length < 2 || name_length > 100 || !name) {
        name_line.css({ "border-color": "red"});
      } else {
        name_line.css({ "border-color": "white"});
      };
    };

    //Validation for email or phone
	  function check_email_phone() {
      var patternEmail = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      var patternPhone = new RegExp(/\d/g);
      let email=patternEmail.test(phone_input.val());
      let phone=patternPhone.test(phone_input.val());
    
      if(phone){
        phone_line.css({ "border-color": "white"});
      } else if (email){
        phone_line.css({ "border-color": "white"});
      } else {
        phone_line.css({ "border-color": "red"});
      };
    };

});//end
