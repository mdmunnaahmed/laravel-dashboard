(function ($) {
	"use strict";
	$(document).on("submit", "#contact_form", function (e) {
		e.preventDefault();
		var name = $("#contact_name").val();
		var email = $("#contact_email").val();
		var subject = $("#contact_subject").val();
		var message = $("#contact_message").val();

		if (!email) {
			$("#contact_email").removeClass("error");
			$("#contact_email").addClass("error").attr("placeholder", "Please Enter Email");
			$("#contact_email").focus();
		} else {
			$("#contact_email").removeClass("error");
		}

		if (!message) {
			$("#contact_message").removeClass("error");
			$("#contact_message").addClass("error").attr("placeholder", "Please Enter Your Message");
			$("#contact_message").focus();
		} else {
			$("#contact_message").removeClass("error");
		}
		if (!name) {
			$("#contact_name").removeClass("error");
			$("#contact_name").addClass("error").attr("placeholder", "Please Enter Name");
			$("#contact_name").focus();
		} else {
			$("#contact_name").removeClass("error");
		}

		if (name && subject && email && message) {
			console.log(name);
			$.ajax({
				type: "POST",
				url: "contact.php",
				data: {
					contact_name: name,
					contact_email: email,
					contact_subject: subject,
					contact_message: message,
				},
				success: function (data) {
					$("#contact_form").children(".email-success").remove();
					$("#contact_form").prepend('<span class="alert alert-success email-success contact-alert">' + data + "</span>");
					$("#contact_name").val("");
					$("#contact_email").val("");
					$("#contact_subject").val("");
					$("#contact_message").val("");
					$(".email-success").fadeOut(5000);
				},
				error: function (res) {},
			});
		} else {
			$("#contact_form").children(".email-success").remove();
			$("#contact_form").prepend('<span class="alert alert-danger email-success contact-alert">Please fill all input</span>');
			$(".email-success").fadeOut(5000);
		}
	});
})(jQuery);
