$(function () {
	let name_input=$("#name_input");
    let name_line=$("#name_line");
    let phone_input=$("#phone_input");
    let phone_line=$("#phone_line");
    let comment_input=$("#comment_input");
    let comment_line=$("#comment_line");
	name_input.focus(function(){
        name_line.css({"border-width":"3px"});
    });
    name_input.focusout(function(){
		name_line.css({"border-width":"1px"});
    });
    phone_input.focus(function(){
		phone_line.css({"border-width":"3px"});
    });
    phone_input.focusout(function(){
		phone_line.css({"border-width":"1px"});
    });
    comment_input.focus(function(){
		comment_line.css({"border-width":"3px"});
    });
    comment_input.focusout(function(){
		comment_line.css({"border-width":"1px"});
    });
})