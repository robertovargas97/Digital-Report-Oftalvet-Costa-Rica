document.addEventListener('DOMContentLoaded', function () {

    if (document.getElementById("print")) {

        var side = document.querySelectorAll('.sidenav');

        var printBtn = document.getElementById("print");

        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, { hoverEnabled: false });

        var elems = document.querySelectorAll('.tooltipped');
        var instances = M.Tooltip.init(elems);

        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);

        var date = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(date, {
            format: 'dd mmmm yyyy',
            showClearBtn: true,
            i18n: {
                done: 'Aceptar',
                cancel: 'Cancelar',
                clear: 'Borrar',
                weekdaysAbbrev: ['D', 'L', 'K', 'M', 'J', 'V', 'S'],
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
            }
        });

        var instances = M.Sidenav.init(side);
   
        printBtn.addEventListener('click', function () {
            if (window.print) {
                window.print();
            }
        })

        window.onscroll = function () {
            // Scroll is the position of the window when user moves the scroll
            var scroll = document.documentElement.scrollTop;
            
            if (scroll == 0) {
                this.document.getElementById("op-multiple").style.display = "none";
                this.document.getElementById("btn-side").style.display = "none";
            }
            else if (scroll > 99) {
                if (screen.width > 1024) {
                    this.document.getElementById("op-multiple").style.display = "block";
                }
                else {
                    this.document.getElementById("btn-side").style.display = "block";
                }
            }
        }
    }

    if (document.getElementById("loginForm")) {
        var mail = document.getElementById("mail");
        var pass = document.getElementById("pass");
        var loginForm = document.getElementById("loginForm");

        //Form functions
        function validate(elementId, errorId, equalString) {
            var element = document.getElementById(elementId).value;
            var textError = document.getElementById(errorId);
            var good = false;
            if (element.length == 0 || element != equalString) {
                textError.style.display = 'block';
                return good
            }
            else {
                textError.style.display = 'none';
                good = true;
                return good;
            }
        }

        function validateMail() {
            return validate("mail", "mailError", "hgamboab@hotmail.com");
        }

        function validatePass() {
            return validate("pass", "passError", "Mayjop20");
        }

        function validateForm() {
            var submit = false;
            if (validateMail()) {
                if (validatePass()) {
                    submit = true;
                }
                return submit;
            }
        }
        function submitForm(event) {
            event.preventDefault();
            if (validateForm()) {
                document.getElementById("charging").style.display = 'block';
                document.getElementById("progress").style.display = 'block';
                this.submit();
            }
        }

        mail.addEventListener('keyup', validateMail);
        pass.addEventListener('keyup', validatePass);
        loginForm.addEventListener('submit', submitForm);
    }
});


$(document).ready(function () {
    //If exist signature
    if (document.getElementById("signature")) {
        // This is the part where jSignature is initialized.
        var $sigdiv = $("#signature").jSignature({ 'UndoButton': true, lineWidth: 2, color: "red" });

        /* function modifyLineWidth() {
               var newWidth = document.getElementById("modificarTamano").value;
               $("#signature").jSignature('updateSetting', 'lineWidth',newWidth, true);
           }
       
           var width = document.getElementById("modificarTamano");
           width.addEventListener('change',modifyLineWidth,false);*/

        function changeToRedColor() {
            $("#signature").jSignature('updateSetting', 'color', 'red', true);

        }

        function changeToBlackColor() {
            $("#signature").jSignature('updateSetting', 'color', 'black', true);
        }

        var newRed = document.getElementById("redColor");
        newRed.addEventListener('click', changeToRedColor, false);

        var newBlack = document.getElementById("blackColor");
        newBlack.addEventListener('click', changeToBlackColor, false);
    }
});
