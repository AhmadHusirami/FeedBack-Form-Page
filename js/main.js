
(function ($) {
    "use strict";
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


})(jQuery);


  document.getElementById("noRecommend").addEventListener("change", function () {
    if (this.checked) {
      document.getElementById("additionalFeedback").style.display = "block";
    } else {
      document.getElementById("additionalFeedback").style.display = "none";
    }
  });

  document.getElementById("yesRecommend").addEventListener("change", function () {
    if (this.checked) {
      document.getElementById("additionalFeedback").style.display = "none";
    }
  });

  document.getElementById("noFind").addEventListener("change", function () {
    if (this.checked) {
      document.getElementById("additionalFeedbackFind").style.display = "block";
    } else {
      document.getElementById("additionalFeedbackFind").style.display = "none";
    }
  });

  document.getElementById("yesFind").addEventListener("change", function () {
    if (this.checked) {
      document.getElementById("additionalFeedbackFind").style.display = "none";
    }
  });

  document.getElementById("badStaff").addEventListener("change", function () {
    if (this.checked) {
      document.getElementById("additionalFeedbackStaff").style.display = "block";
    } else {
      document.getElementById("additionalFeedbackStaff").style.display = "none";
    }
  });

  document.getElementById("goodStaff").addEventListener("change", function () {
    if (this.checked) {
      document.getElementById("additionalFeedbackStaff").style.display = "none";
    }
  });


  document.getElementById("veryGoodStaff").addEventListener("change", function () {
    if (this.checked) {
      document.getElementById("additionalFeedbackStaff").style.display = "none";
    }
  });


  

  
  
