function passwordlogin_show_hide() {
    var x = document.getElementById("senhalogin");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
        }
    }
   
    function passwordregister_show_hide() {
    var x = document.getElementById("senhacadastro");
    var show_eye = document.getElementById("show_eye2");
    var hide_eye = document.getElementById("hide_eye2");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
        }
    }
    
    function passwordregister2_show_hide() {
    var x = document.getElementById("confirmasenha");
    var show_eye = document.getElementById("show_eye3");
    var hide_eye = document.getElementById("hide_eye3");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
        }
    }

    function passwordedit_show_hide() {
      var x = document.getElementById("senhaalterar");
      var show_eye = document.getElementById("show_eye4");
      var hide_eye = document.getElementById("hide_eye4");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
      } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
          }
      }
      
      function passwordedit2_show_hide() {
      var x = document.getElementById("confirmasenhaalterar");
      var show_eye = document.getElementById("show_eye5");
      var hide_eye = document.getElementById("hide_eye5");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
      } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
          }
      }

      function passworddelete_show_hide() {
        var x = document.getElementById("senhaexcluir");
        var show_eye = document.getElementById("show_eye6");
        var hide_eye = document.getElementById("hide_eye6");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
            }
        }
        
        function passworddelete2_show_hide() {
        var x = document.getElementById("confirmasenhaexcluir");
        var show_eye = document.getElementById("olho1");
        var hide_eye = document.getElementById("olho2");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
            }
        }

    (() => {
        'use strict'
        
        const forms = document.querySelectorAll('.needs-validation')
    
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
      
            form.classList.add('was-validated')
          }, false)
        })
      })()