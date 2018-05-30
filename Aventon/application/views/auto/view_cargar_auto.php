<!--<div class="container">
    <h1>  What is Lorem Ipsum? </h1>
    <p clas="lead">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type 
        specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in
        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
        and more recently with desktop publishing software like Aldus PageMaker
        including versions of Lorem Ipsum.
    </p>
</div>
-->  
<!--Custom styles for this template --> 
<link href="../assets/css/signin.css" rel="stylesheet"> 
</head>
<body class="text-center">


    <form id="formAuto" name="formAuto" method="post" action="cargar_auto/cargar_auto" class="form-signin">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Cargar auto</h1>



        <label for="marca" class="sr-only">Marca</label>            
        <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca"  required autofocus value="<?php echo $this->session->flashdata('marca'); ?>">        
        <label for="modelo" class="sr-only">Modelo</label>           
        <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo"  required autofocus value="<?php echo $this->session->flashdata('modelo'); ?>">        
        <label for="patente" class="sr-only">Patente</label>                       
        <input type="text" id="patente" name="patente" class="form-control" placeholder="Patente"  required autofocus value="<?php echo $this->session->flashdata('patente'); ?>">
        <label for="color" class="sr-only">Color</label>                       
        <input type="text" id="color" name="color" class="form-control" placeholder="Color"  required autofocus value="<?php echo $this->session->flashdata('color'); ?>">

        </br>
        </br>


        <?php if ($notifico): ?>

            <p> <?php echo $notifico ?> </p>

        <?php endif; ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="return validacion();">Cargar auto</button>
        <button class="btn btn-lg btn-primary btn-block" type="reset">Limpiar</button>


        <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
</body>
<script>
    function validacion() {
        marca = document.getElementById("marca").value;
        modelo = document.getElementById("modelo").value;
        patente = document.getElementById("patente").value;
        color = document.getElementById("color").value;
        
        var expresion_regular_texto = /^[A-Za-z\s]+$/;
        var expresion_regular_patente = /[A-Za-z0-9]/;
        if (marca === ""|| marca.length === 0 || /^\s+$/.test(marca)) {
            alert('[!] Todos los campos con son obligatorios.');
            return false;
        }

        if (modelo === ""|| modelo.length === 0 || /^\s+$/.test(modelo)) {
            alert('[!] Todos los campos con son obligatorios.');
            return false;
        } 
        if (patente === ""|| patente.length === 0 || /^\s+$/.test(patente)) {
            alert('[!] Todos los campos con son obligatorios.');
            return false;
        } 

        if (color === ""|| color.length === 0 || /^\s+$/.test(color)) {
            alert('[!] Todos los campos con son obligatorios.');
            return false;
        } 
        if (!expresion_regular_texto.test(marca)) {
            alert("[!] El campo marca contiene caracteres no permitidos");
            return false;
	}
        if (!expresion_regular_texto.test(modelo)) {
            alert("[!] El campo modelo contiene caracteres no permitidos");
            return false;
	}
        
        if ( (patente.length < 6) || (expresion_regular_patente.test(patente)===false)) {
            alert("[!] La patente debe tener al menos 6 caracteres y ser alfanumerica. Vuelva a ingresarla");
            return false;
	}
        if (!expresion_regular_texto.test(color)) {
            alert("[!] El campo color contiene caracteres no permitidos");
            return false;
	}
        
            // Si el script ha llegado a este punto, todas las condiciones
            // se han cumplido, por lo que se devuelve el valor true
            //return true;
    }
</script>
