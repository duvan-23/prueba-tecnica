<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Slabo+27px&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row my-4">
			<div class="col">
				<div class="text-white text-center d-flex justify-content-center mb-4">
					<div class="bg-primary p-5 m-5">
                        <form  id="formulario" action="datos.php" method="post">
                            <div class="form-group">
                                <label for="numero1">Ingrese numero 1.</label>
                                <input type="number" class="form-control"  name="numero1" id="numero1" required>
                            </div>
        
                            <div class="form-group">
                                <label for="numero2">Ingrese numero 2</label>
                                <input type="number" class="form-control" name="numero2" id="numero2" required>
                            </div>
                            <div class="form-group">
                                <label for="operacion">Operaciòn</label>
                                <select name="operacion" id="operacion" class="form-control" >
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="division">Divisiòn</option>
                                    <option value="multiplicacion">Multiplicaciòn</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="resultado">Resultado</label>
                                <input id="resultado" type="text" class="form-control" name="resultado" readonly>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="btnEnviar" name="btnEnviar" value="Enviar formulario">Enviar</button>
                            <button class="btn btn-danger btn-lg btn-block" type="reset" >Limpiar</button>
                        </form>
                        <p id="resultado1"></p>
                        
                    </div>
				</div>
			</div>
		</div>
    </div>
    <script>
        ms();
    </script>
    <script src="js/jquery-3.5.1.min.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/calculadora.js"></script>
</body>    
</html>