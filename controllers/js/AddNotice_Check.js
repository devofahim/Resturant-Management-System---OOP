function validateForm() {
  var noticeId = document.forms["addNoticeForm"]["NoticeId"].value;
  var noticeName = document.forms["addNoticeForm"]["NoticeName"].value;
  var history = document.forms["addNoticeForm"]["history"].value;

  if (noticeId == "" || isNaN(noticeId)) {
    alert("Notice Id must be a number");
    return false;
  }

  if (noticeName == "") {
    alert("Notice Name must be filled out");
    return false;
  }

  if (history == "") {
    alert("History must be filled out");
    return false;
  }

  return true;
}

var submitBtn = document.getElementsByName("submit")[0];
submitBtn.addEventListener("click", function (event) {
  event.preventDefault();
  if (validateForm()) {
    document.forms["addNoticeForm"].submit();
  }
});
