window.onload = function () {
  const checkbox = document.getElementById("terms");
  const subscriptionBtn = document.getElementById("send-email");
  const checkboxError = document.getElementById("check-box-error");
  const emailError = document.getElementById("email-errors");
  const subEmail = document.getElementById("subscriber-email");

  let emailMessages = null;

  // EMAIL REGULAR EXPRESSION
  function emailRegularExpression(email, regularExpression) {
    let re = regularExpression;
    return re.test(email);
  }

  // VALIDATE EMAIL
  function emailValidate() {
    // EMAIL CHECK INPUT VALUE
    const email = document.forms["subscribe"]["email"].value;

    // IF INPUT EMAIL NOT EMPTY
    if (!(email == "")) {
      // CHECK EMAIL REGULAR EXPRESSION VALIDATION
      if (
        !emailRegularExpression(
          email,
          /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )
      ) {
        emailMessages = "Please provide a valid e-mail address";
        return false;
      } else {
        emailMessages = "";

        //REGULAR EXPRESSION FOR COLOMBOAN PROVIDER
        if (emailRegularExpression(email, /.co\s*$/)) {
          emailMessages =
            "We are not accepting subscriptions from Colombia emails";
          return false;
        }
      }
    } else {
      emailMessages = "Email address is required";
      return false;
    }
    return true;
  }

  // CHECK SUBSCRIBE FORM BUTTON
  function sendButtonStatus() {
    let isEmailPassed = emailValidate();
    let isCheckboxPassed = checkboxValidate();

    if (isEmailPassed && isCheckboxPassed) {
      subscriptionBtn.disabled = false;
      return true;
    }
    subscriptionBtn.disabled = true;
    return false;
  }

  // VALIDATE FUNCTION FOR VALIDATION ON SUBMIT
  function validate() {
    if (!checkboxValidate()) {
      checkboxError.innerHTML = "You must accept theterms and conditions";
    }

    if (!emailValidate()) {
      emailError.innerHTML = emailMessages;
      return false;
    }
  }

//CHECK if CHECKBOX IS CHECKED
  function checkboxValidate() {
    if (checkbox.checked) {
      return true;
    }
    return false;
  }

  //EVENT CLICK ON CHECK FIELD
  checkbox.addEventListener("click", function () {
    if (checkboxValidate()) {
      checkboxError.innerHTML = "";
    }
    sendButtonStatus();
  });

  //EVENT WHEN INPUT FIELD VALUE CHANGING
  subEmail.addEventListener("input", function () {
    emailValidate();
    emailError.innerHTML = emailMessages;
    sendButtonStatus();
  });

  //CHECK SUBMIT BUTTON STATUS
  sendButtonStatus();
};
