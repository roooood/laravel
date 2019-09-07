var Resent = false;
function countDown() {
  Resent = false;
  $('#resent').jQuerySimpleCounter({
    start: 60,
    end: 0,
    duration: 60000,
    complete: () => {
      $('#resent').html('ارسال دوباره')
      Resent = true;
    }
  });
}
function auth(cb, type) {
  if (type == 'next') {
    $('#number-msg').fadeOut(500);
    loading('#reg-next', 'show')
    let phone = $('#number').val();
    fetch('/auth', { phone },
      {
        res: (success, res) => {
          if (success) {
            cb();
            countDown();
          }
        },
        err: (err) => {
          $('#number-msg').fadeIn(500);
        },
        done: (msg) => {
          loading('#reg-next', 'hide')
        }
      }
    )
  }
  else if (cb) {
    cb()
  }
}
function active(cb, type) {
  if (type == 'next') {
    $('#active-msg').fadeOut(500);
    loading('#reg-next', 'show')
    let phone = $('#number').val();
    let code = $('#active').val();
    fetch('/active', { phone, code },
      {
        res: (success, res) => {
          if (success) {
            localStorage.setItem("token", res.token);
            // cb();
          } else {
            $('#active-msg').fadeIn(500);
          }
        },
        err: (err) => {
          $('#active-msg').fadeIn(500);
        },
        done: (msg) => {
          loading('#reg-next', 'hide', 'تمام')
        }
      }
    )
  }
  else if (cb) {
    cb()
  }
}
$(document).ready(function ($) {
  $('#number').pincodeInput({
    inputs: 11,
  });
  $('#active').pincodeInput({
    inputs: 5,
  });

  $('#login').modalSteps({
    btnCancelHtml: "بی خیال",
    btnPreviousHtml: "قبلی",
    btnNextHtml: "ادامه",
    btnLastStepHtml: "تمام",
    callbacks: {
      '1': (cb, type) => { auth(cb, type) },
      '2': (cb, type) => { active(cb, type) },
      '3': (cb) => { if (cb) cb(); },
    }
  });

  $(document).on('click', '#resent', function (e) {
    if (Resent) {
      let phone = $('#number').val();
      fetch('/auth', { phone },
        {
          done: (msg) => {
            countDown();
          }
        }
      )
    }
  });
});
