// Validates the input from the customer before submitting
// o Quantities cannot be blank or negative (zero is fine)
// o Username must be in the form of an email address (name@domain.com)
// o password field cannot be blank
// ▪ We do not have a database to check against, so the password can be
// anything
// o They must pick a shipping option

window.addEventListener("load", () => {
  // Get the form item
  const formEL = document.getElementById("orderForm");
  const errorEl = document.getElementById("error");

  // async function sendForm() {
  //   let formData = new FormData(formEL);
  //   // var request = new XMLHttpRequest();
  //   // request.open("POST", "submitform.php");
  //   // request.send(new FormData(formElement));

  //   let postRQ = await fetch('customerBackend.php', {
  //     method: 'POST',
  //     body: new FormData(formEL)
  //   });

  //   console.log(postRQ);
  //   // await postRQ.json();

  // }

  function validate() {
    // Validate the produces
    if (
      !validate_prod("prod_1_num") ||
      !validate_prod("prod_1_num") ||
      !validate_prod("prod_1_num")
    ) {
      return false;
    } else if (!validate_user()) {
      return false;
    } else if (!validate_password()) {
      return false;
    }
    if (!validate_shipping()) {
      return false;
    }

    return true;
  }

  formEL.addEventListener("submit", function (event) {
    let isValid = validate();

    if (!isValid) {
      event.preventDefault();
      alert("Error in Form");
    }
  });

  function validate_prod(name) {
    let isValid = true;
    let prod = document.getElementById(name);
    let value = prod.value;

    if (isNaN(value) || value < 0) {
      errorEl.innerText = "Invalid value";
      isValid = false;
    }

    return isValid;
  }

  function validate_user() {
    let isValid = true;

    let user = document.getElementById("user");
    let value = user.value;

    let atSplit = value.split("@");

    atSplit = value.split("@");

    if (atSplit.length == 2 && atSplit[0] != 0 && atSplit[1] != 0) {
      dotSplit = atSplit[1].split(".");

      if (dotSplit.length < 2) {
        isValid = false;
      }
    } else {
      isValid = false;
    }

    return isValid;
  }

  function validate_shipping() {
    let s1 = document.getElementById("Shipping1");
    let s2 = document.getElementById("Shipping2");
    let s3 = document.getElementById("Shipping3");

    if (!(s1.checked || s2.checked || s3.checked)) {
      return false;
    }

    return true;
  }

  function validate_password() {
    let password = document.getElementById("password");
    let value = password.value;

    if (value.value === "") {
      errorEl.innerText = "Invalid value";
      return false;
    }

    return true;
  }
});
