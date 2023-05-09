
        function validateForm() {
            var empId = document.forms["addEmployee"]["EmployeeId"].value;
            var empName = document.forms["addEmployee"]["EmployeeName"].value;
            var email = document.forms["addEmployee"]["Email"].value;
            var contact = document.forms["addEmployee"]["EmployeeContact"].value;
            var salary = document.forms["addEmployee"]["salary"].value;

            if (empId == "") {
                alert("Employee ID must be filled out");
                return false;
            }

            if (empName == "") {
                alert("Employee Name must be filled out");
                return false;
            }

            if (email == "") {
                alert("Email must be filled out");
                return false;
            }

            if (contact == "") {
                alert("Contact Number must be filled out");
                return false;
            }

            if (isNaN(contact)) {
                alert("Contact Number must be a number");
                return false;
            }

            if (contact.length != 11) {
                alert("Contact Number must be 11 digits");
                return false;
            }

            if (salary == "") {
                alert("Salary must be filled out");
                return false;
            }

            if (isNaN(salary)) {
                alert("Salary must be a number");
                return false;
            }

            if (salary < 10000) {
                alert("Salary must be at least 10000");
                return false;
            }

            return true;
        }
    