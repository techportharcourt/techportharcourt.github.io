document.getElementById("open").addEventListener("click", () => {
  document.getElementById("sidebar").classList.add("sidebar-open");
})

document.getElementById("close").addEventListener("click", () => {
  document.getElementById("sidebar").classList.remove("sidebar-open");
})



////////////////////////////////////////////////////
errorContainer = (message, status) => {

  let btStatus;

  if (status == 'info') {
    btStatus = 'alert-info';
  } else if (status == 'success') {
    btStatus = 'alert-success';
  }
  $('#errorMessage').empty().html('<div class="alert ' + btStatus + '">' + message + '</div>');

}


$('#contact-form').on('submit', function (e) {
  e.preventDefault()
  let name = $('#name').val();
  let email = $('#email').val();
  let message = $('#message').val();

  if (name.length < 3) {
    errorContainer('Your full name is required', 'info');
    return false;
  }

  if (email.length < 3) {
    errorContainer('Your email is required', 'info');
    return false;
  }
  if (message.length < 3) {
    errorContainer('Live a message', 'info');
    return false;
  }

  $('#errorMessage').empty();
  $('#loader').empty().html('<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>');



  send = {
    fullname: fullname,
    email: email,
    message: message
  }

  $.ajax
    ({
      type: "POST",
      url: "email.php",
      data: send,
      cache: false,
      success: function (response) {
        $('#loader').empty();
        $('#errorMessage').empty().html(response);
      }

    });
});