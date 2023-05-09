function validateForm() {
  var foodId = document.forms["addFoodForm"]["FoodId"].value;
  var foodName = document.forms["addFoodForm"]["FoodName"].value;
  var price = document.forms["addFoodForm"]["Price"].value;

  // Check if all fields are filled
  if (foodId == "" || foodName == "" || price == "") {
    alert("All fields must be filled out");
    return false;
  }

  // Check if FoodId is a number
  if (isNaN(foodId)) {
    alert("Food Id must be a number");
    return false;
  }

  // Check if Price is a number
  if (isNaN(price)) {
    alert("Price must be a number");
    return false;
  }

  // Check if Price is greater than zero
  if (parseFloat(price) <= 0) {
    alert("Price must be greater than zero");
    return false;
  }

  return true;
}

// Attach the validation function to the form's onsubmit event
var form = document.getElementById("addFoodForm");
form.onsubmit = validateForm;
