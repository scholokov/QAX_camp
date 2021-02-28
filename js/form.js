/* Submit text to Telegram */
$('form').submit(function (e) {
  tokenID = sessionStorage.getItem('tokenID');
  chatID = sessionStorage.getItem('chatID');
  var name = document.getElementById("name_input").innerText;
  var phone = document.getElementById("phone_input").innerText;
  var comment = document.getElementById("comment_input").innerText;
  
  

  var brversion = brversion.getParser(window.navigator.userAgent);
  console.log("You are using " + brversion.parsedResult.browser.name +
    " v" + brversion.parsedResult.browser.version +
    " on " + brversion.parsedResult.os.name);

  e.preventDefault();
  $.ajax({
    url: 'https://api.telegram.org/bot' + tokenID + '/sendMessage',
    method: 'POST',
    data: {
      chat_id: chatID,
      text: 'Hi!\nI`m QAX Camp bot.\nPlease read message below.\nSomebody wait your answer!\n\nName: ' + name + '\nPhone: ' + phone + '\nComment: ' + comment + brversion
    },
    success: function () {
      document.getElementById("write_to_us").setAttribute("class", "no-display");
      document.getElementById("write_to_us-thanks-block").setAttribute("class", "");

      /* alert('your message has been sent!'); */
    }
  });
});


function countDigits(n) {
  for (var i = 0; n > 1; i++) {
    n /= 10;
  }
  return i;
}


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
    name_line.css({ "border-width": "1px" });
  });
  name_input.focusout(function () {
    name_line.css({ "border-width": "1px" });
    check_name();
  });
  phone_input.focus(function () {
    phone_line.css({ "border-width": "1px" });
  });
  phone_input.focusout(function () {
    phone_line.css({ "border-width": "1px" });
    check_email_phone();
  });
  comment_input.focus(function () {
    comment_line.css({ "border-width": "1px" });
  });
  comment_input.focusout(function () {
    comment_line.css({ "border-width": "1px" });
  });

  //Validation for name
  function check_name() {
    var name_length = name_input.val().length;
    var patternName = new RegExp(/^[a-zA-Zа-яА-яàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ðіїІ '-]+$/i);
    let name = patternName.test(name_input.val());

    if (name_length < 2 || name_length > 30 || !name) {
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
    var phone_length = countDigits(phone_input.val());

    if (phone && phone_length == 12) {
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


