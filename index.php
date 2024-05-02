<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zero-3 Co. Customer Feedback</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main_1.css">

    <script src="vendor/modernizr-2.6.2.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader">
            <img src="images/logo.png" alt="" width="100px" class="logo-loader">
        </div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <div class="container-contact100">
        <div class="wrap-contact100">
            <form id="feedback-form" class="contact100-form validate-form" method="post">
                <span class="contact100-form-title">
                    Fill Your Feedback Please!
                </span>

                <label class="label-input100" for="first-name"><b>First Name - الاسم الأول</b></label>
                <div class="wrap-input100 validate-input" data-validate="Name is Required">
                    <input id="first-name" class="input100" type="text" placeholder="first name" name="first-name">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="first-name"><b>Second Name - اسم العائلة</b></label>
                <div class="wrap-input100 validate-input" data-validate="Name is Required">
                    <input id="second-name" class="input100" type="text" placeholder="second name" name="second-name">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email"><b>email - البريد الالكتروني</b></label>
                <div class="wrap-input100 validate-input" data-validate="Email is Required">
                    <input id="email" class="input100" type="text" placeholder="Eg: example@email.com" name="email">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email"><b>Phone Number - رقم الهاتف</b></label>
                <div class="wrap-input100 validate-input" data-validate="Phone Number is Required">
                    <input id="phone-number" name="phone-number" class="input100" type="tel"
                        placeholder="e.g. +961-71793122" pattern="[+][0-9]{3}-[0-9]{2}[0-9]{6}"
                        title="Please enter a phone number in the format: +961-xxxxxxxx">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="rating"><b>Rating up to 5 stars - تقييم يصل إلى 5 نجوم</b></label>
                <div class="wrap-input100 validate-input" data-validate="Please Rate">
                    <div class="rating" id="rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label for="star5" title="5 stars">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4" title="4 stars">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3" title="3 stars">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2" title="2 stars">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1" title="1 star">&#9733;</label>
                    </div>
                </div>

                <div class="" id="recommendation">
                    <span>Did you have a good shopping experience? - هل كانت عملية التسوق جيدا</span>
                    <br>
                    <input type="radio" id="yesRecommend" name="recommendation" value="yes">
                    <label for="yesRecommend">Yes</label>
                    <input type="radio" id="noRecommend" name="recommendation" value="no">
                    <label for="noRecommend">No</label>
                </div>

                <div class="wrap-input100" id="additionalFeedback" style="display: none;">
                    <input id="additionalFeedback" class="input100" type="text" placeholder="Why - لماذا"
                        name="additionalFeedback">
                    <span class="focus-input100"></span>
                </div>

                <div class="" id="anotherQuestion">
                    <span>Did you find what you were looking for? - هل وجدت ما كنت تبحث عنه؟</span>
                    <br>
                    <input type="radio" id="yesFind" name="findQuestion" value="yes">
                    <label for="yesFind">Yes</label>
                    <input type="radio" id="noFind" name="findQuestion" value="no">
                    <label for="noFind">No</label>
                </div>

                <div class="wrap-input100" id="additionalFeedbackFind" style="display: none;">
                    <input id="additionalFeedbackFind" class="input100" type="text" placeholder="Why - لماذا"
                        name="additionalFeedbackFind">
                    <span class="focus-input100"></span>
                </div>

                <div class="" id="staffFeedback">
                    <span>How were the employee treated? - كيف كانت معاملة الموظفين؟</span>
                    <br>
                    <input type="radio" id="veryGoodStaff" name="staffTreatment" value="very-good">
                    <label for="veryGoodStaff">Very Good</label>
                    <input type="radio" id="goodStaff" name="staffTreatment" value="good">
                    <label for="goodStaff">Good</label>
                    <input type="radio" id="badStaff" name="staffTreatment" value="bad">
                    <label for="badStaff">Bad</label>
                </div>

                <div class="wrap-input100" id="additionalFeedbackStaff" style="display: none;">
                    <input id="additionalFeedbackStaff" class="input100" type="text" placeholder="Why - لماذا"
                        name="additionalFeedbackStaff">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="message"><b>Your Suggestions - اقتراحاتك</b></label>
                <div class="wrap-input100">
                    <textarea id="message" class="input100" placeholder="Write a message" name="message"></textarea>
                    <span class="focus-input100"></span>
                </div>


                <div class="container-contact100-form-btn">
                    <button type="button" class="contact100-form-btn" id="submit-btn">Submit</button>
                </div>
            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
                <div class="txt1 p-r-25">
                    <span class="zero-logo"><img src="images/logo.png" alt="" width="100px"></span>
                </div>

                <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-map-marker"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Address - عنوان
                        </span>

                        <span class="txt2">
                            Saida / Sahet Al Chohada / Ghaddar Center
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Call Us - اتصل بنا
                        </span>

                        <span class="txt3">
                            <a href="tel:+961-76009900">+961-70773961</a>
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-envelope"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Contact Us - تواصل معنا
                        </span>

                        <span class="txt3">
                         omarah@zero3-co.com
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
    $(document).ready(function() {
        $("#submit-btn").click(function() {
            var isValid = true;

            $(".validate-input").each(function() {
                if ($(this).find("input, textarea").val() === "") {
                    $(this).addClass("alert-validate");
                    isValid = false;
                } else {
                    $(this).removeClass("alert-validate");
                }
            });

            if (!isValid) {
                return false;
            }

            var formData = $("#feedback-form").serialize();
            $.ajax({
                type: "POST",
                url: "submit_form.php",
                data: formData,
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        Swal.fire({
                            title: "Success",
                            text: data.message,
                            icon: "success",
                            customClass: {
                                confirmButton: "btn-success"
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#feedback-form")[0].reset();
                            }
                        });
                    } else {
                        Swal.fire("Error", data.message, "error");
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire("Error", "An error occurred while submitting the form.",
                        "error");
                }
            });
        });
    });
    </script>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="vendor/jquery-1.9.1.min.js"><\/script>')
    </script>
    <script src="js/main_1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>