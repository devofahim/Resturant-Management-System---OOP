function validateForm() {
    var customerId = document.forms["addCustomerForm"]["CustomerId"].value;
    var customerName = document.forms["addCustomerForm"]["CustomerName"].value;
    var email = document.forms["addCustomerForm"]["Email"].value;
    var gender = document.forms["addCustomerForm"]["CustomerGender"].value;
    var contactNo = document.forms["addCustomerForm"]["CustomerContact"].value;
    var salary = document.forms["addCustomerForm"]["salary"].value;

    if (customerId == "") {
        alert("Customer Id must be filled out");
        return false;
    }

    if (customerName == "") {
        alert("Customer Name must be filled out");
        return false;
    }

    if (email == "") {
        alert("Email must be filled out");
        return false;
    }

    if (gender == "") {
        alert("Gender must be selected");
        return false;
    }

    if (contactNo == "") {
        alert("Contact No must be filled out");
        return false;
    }

    if (salary == "") {
        alert("Salary must be filled out");
        return false;
    }

    return true;
}