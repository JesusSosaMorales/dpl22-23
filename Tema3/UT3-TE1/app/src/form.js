const form = document.getElementById('form');
        var divImagenes = document.getElementById('imagenes');
        var inputs = document.forms.form;

        form.addEventListener('submit', logSubmit);

        function logSubmit(event) {
            event.preventDefault();
            let texto="";
            for (let i = 1; i <= 20; i++) {
                texto += "<img src='http://images.alu7174.arkania.es/img/" + getImgName(i)+"?dw="+inputs.tamanio.value+"&dh="+ inputs.tamanio.value+"&bw="+inputs.ancho.value+"&bh="+inputs.ancho.value+"&bc="+inputs.color.value.substring(1)+"&sharpen="+inputs.radius.value+"x"+inputs.sigma.value+"&blur="+inputs.blurradius.value+"x"+inputs.blursigma.value+"'/>"
                
            }
            console.log(texto);
            document.getElementById('imagenes').innerHTML = texto;
            
        }

        function getImgName(numero) {
            if (numero <10) {
                return "image0"+numero+".jpg";
            }
            return "image"+numero+".jpg";
        }