/* Submit text to Telegram */
$('form').submit(function (e) {
  tokenID = sessionStorage.getItem('tokenID');
  chatID =  sessionStorage.getItem('chatID');
  e.preventDefault();
  $.ajax({
    url: 'https://api.telegram.org/bot' + tokenID + '/sendMessage',
    method: 'POST',
    data: {
      chat_id: chatID,
      text: 'Hi!\nI`m QAX Camp bot.\nPlease read message below.\nSomebody wait your answer!\n\nName: ' + $('#name_input').val() + '\nPhone: ' + $('#phone_input').val() + '\nComment: ' + $('#comment_input').val()
    },
    success: function () {
      alert('your message has been sent!');
    }
  });
});


$(function () {

  var name_input = $("#name_input");
  var name_line = $("#name_line");
  var phone_input = $("#phone_input");
  var phone_line = $("#phone_line");
  var comment_input = $("#comment_input");
  var comment_line = $("#comment_line");
  var error_message_name = $("#error_message_name");
  var error_message_phone = $("#error_message_phone");
  var button_send = $("#button_send");

  error_message_name.hide();
  error_message_phone.hide();

  //Functions for lines in form 
  name_input.focus(function () {
    name_line.css({ "border-width": "3px" });
  });
  name_input.focusout(function () {
    name_line.css({ "border-width": "1px" });
    check_name();
  });
  phone_input.focus(function () {
    phone_line.css({ "border-width": "3px" });
  });
  phone_input.focusout(function () {
    phone_line.css({ "border-width": "1px" });
    check_email_phone();
  });
  comment_input.focus(function () {
    comment_line.css({ "border-width": "3px" });
  });
  comment_input.focusout(function () {
    comment_line.css({ "border-width": "1px" });
  });

  //Validation for name
  function check_name() {
    var name_length = name_input.val().length;
    var patternName = new RegExp(/^[a-zA-Zа-яА-яàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ðіїІ '-]+$/i);
    let name = patternName.test(name_input.val());

    if (name_length < 2 || name_length > 100 || !name) {
      name_line.css({ "border-color": "red" });
      error_message_name.show();
      button_send.attr("disabled", "disabled");
      return false;
    } else {
      name_line.css({ "border-color": "white" });
      error_message_name.hide();
      button_send.removeAttr("disabled", "disabled");
      return true;
    };
  };

  //Validation for email or phone
  function check_email_phone() {
    var patternEmail = new RegExp(/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i);
    var patternPhone = new RegExp(/((\+)?\b(38)?(0[\d-]{2}))([\d-]{5,8})([\d-]{2})/);
    let email = patternEmail.test(phone_input.val());
    let phone = patternPhone.test(phone_input.val());

    if (phone) {
      phone_line.css({ "border-color": "white" });
      error_message_phone.hide();
      button_send.removeAttr("disabled", "disabled");
      return true;
    } else if (email) {
      phone_line.css({ "border-color": "white" });
      error_message_phone.hide();
      button_send.removeAttr("disabled", "disabled");
      return true;
    } else {
      phone_line.css({ "border-color": "red" });
      error_message_phone.show();
      button_send.attr("disabled", "disabled");
      return false;
    };
  };

  var textarea = document.getElementsByTagName('textarea')[0];

/*
 error in console

  textarea.addEventListener('keydown', resize);
*/

  function resize() {
    var el = this;
    setTimeout(function () {
      el.style.cssText = 'height:23px; padding:0';
      el.style.cssText = 'height:' + el.scrollHeight + 'px';
    }, 1);
  }


});//end


