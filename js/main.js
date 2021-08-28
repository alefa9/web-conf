(function () {
    "use strict";


    var regalo = document.getElementById('regalo');


    document.addEventListener('DOMContentLoaded', function () {

        // Campos datos usuario

        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        // Campos pases

        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones y divs

        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista_productos');
        var suma = document.getElementById('suma_total');

        // Extras

        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa-evento');


        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);

        email.addEventListener('blur', validarEmail);

        function validarEmail() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #858585';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Ingrese un email valido.';
                this.style.border = '1px solid red';
                error.style.border = '1px solid red';
            }
        }

        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es obligatorio.';
                this.style.border = '1px solid red';
                error.style.border = '1px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #858585';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                var boletos_dia = parseInt(pase_dia.value, 10) || 0,
                    boletos_dosdias = parseInt(pase_dosdias.value, 10) || 0,
                    boletos_completo = parseInt(pase_completo.value, 10) || 0,
                    cant_camisas = parseInt(camisas.value, 10) || 0,
                    cant_etiquetas = parseInt(etiquetas.value, 10) || 0;

                var totalPagar = (boletos_dia * 30) + (boletos_dosdias * 45) + (boletos_completo * 50) + (cant_camisas * 10 * 0.93) + (cant_etiquetas * 2);


                var listadoProductos = [];

                if (boletos_dia === 1) {
                    listadoProductos.push(boletos_dia + ' pase por día');
                }
                if (boletos_dosdias === 1) {
                    listadoProductos.push(boletos_dosdias + ' pase por 2 días');
                }
                if (boletos_completo === 1) {
                    listadoProductos.push(boletos_completo + ' pase completo');
                }
                if (cant_camisas === 1) {
                    listadoProductos.push(cant_camisas + ' camisa');
                }
                if (cant_etiquetas === 1) {
                    listadoProductos.push(cant_etiquetas + ' etiqueta');
                }

                if (boletos_dia > 1) {
                    listadoProductos.push(boletos_dia + ' pases por día');
                }
                if (boletos_dosdias > 1) {
                    listadoProductos.push(boletos_dosdias + ' pases por 2 días');
                }
                if (boletos_completo > 1) {
                    listadoProductos.push(boletos_completo + ' pases completos');
                }
                if (cant_camisas > 1) {
                    listadoProductos.push(cant_camisas + ' camisas');
                }
                if (cant_etiquetas > 1) {
                    listadoProductos.push(cant_etiquetas + ' etiquetas');
                }

                lista_productos.style.display = "block";
                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }
                suma.innerHTML = '';
                suma.innerHTML = '$ ' + totalPagar.toFixed(2);
            }
        }

        function mostrarDias() {
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletosDosdias = parseInt(pase_dosdias.value, 10) || 0,
                boletosCompleto = parseInt(pase_completo.value, 10) || 0;

            var diasElegidos = [];
            if (boletosDia > 0) {
                diasElegidos.push('viernes')
            }
            if (boletosDosdias > 0) {
                diasElegidos.push('viernes', 'sabado')
            }
            if (boletosCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo')
            }

            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block'
            }

        }



    }); // DOM CONTENT LOADED
})();