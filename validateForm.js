function validateForm() {

    const nameField = document.getElementById("name");
    const matricnoField = document.getElementById("matricno");
    const currentAddressField = document.getElementById("currentAddress");
    const homeAddressField = document.getElementById("homeAddress");
    const emailField = document.getElementById("email");
    const mobilePhoneField = document.getElementById("mobilePhone");
    const homePhoneField = document.getElementById("homePhone");

    const nameRegex = /^(?=.{1,40}$)[a-zA-Z]+(?:[-'\s][a-zA-Z]+)*$/;
    const currentAddressRegex = /^[A-Za-z0-9 ]+$/;
    const homeAddressRegex = /^[A-Za-z0-9 ]+$/;
    const matricnoRegex = /^[0-9]{7}/;
    const mobilePhoneRegex = /^[0-9]{10,11}/;
    const homePhoneRegex = /^[0-9]{9,10}/;

    const nameError = document.getElementById("nameError");
    const matricnoError = document.getElementById("matricnoError");
    const currentAddressError = document.getElementById("currentAddressError");
    const homeAddressError = document.getElementById("homeAddressError");
    const emailError = document.getElementById("emailError");
    const mobilePhoneError = document.getElementById("mobilePhoneError");
    const homePhoneError = document.getElementById("homePhoneError");
  
    let isValid = true;

    if (!nameRegex.test(nameField.value)) {
        nameError.innerHTML = "Please enter a valid name that consists only letters and spaces.";
        isValid = false;
      } else {
        nameError.innerHTML = "";
    }

    if (!matricnoRegex.test(matricnoField.value)) {
        matricnoError.innerHTML = "Please enter a valid matric number (only 7 digits allowed).";
        isValid = false;
      } else {
        matricnoError.innerHTML = "";
    }
    
    if (!currentAddressRegex.test(currentAddressField.value)) {
        currentAddressError.innerHTML = "Please enter your current address without any special characters.";
        isValid = false;
      } else {
        currentAddressError.innerHTML = "";
    }
    
    if (!homeAddressRegex.test(homeAddressField.value)) {
        homeAddressError.innerHTML = "Please enter your home address without any special characters.";
        isValid = false;
      } else {
        homeAddressError.innerHTML = "";
    }
    
    if (emailField.validity.typeMismatch || !emailField.value.endsWith("@gmail.com")) {
        emailError.innerHTML = "Please enter a valid Gmail account";
        isValid = false;
      } else {
        emailError.innerHTML = "";
    }
    
    if (!mobilePhoneRegex.test(mobilePhoneField.value)) {
        mobilePhoneError.innerHTML = "Please enter a valid 11-digit mobile phone number";
        isValid = false;
      } else {
        mobilePhoneError.innerHTML = "";
    }
    
    if (!homePhoneRegex.test(homePhoneField.value)) {
        homePhoneError.innerHTML = "Please enter a valid 11-digit home phone number";
        isValid = false;
      } else {
        homePhoneError.innerHTML = "";
    }
    
      return isValid;

}