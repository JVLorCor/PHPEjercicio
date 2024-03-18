<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            border: #4CAF50 2px solid;
        }

        .field {
            margin-bottom: 10px;
        }

        label {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 5px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        ol {
            display: flex;
            flex-direction: column;
            list-style: none;
            padding: 0;
        }
    </style>
</head>

<body>
    <form method="<?=$formulario->getMethod();?>">
        <h1>Alta de productos</h1>
        <div class="field">
            <label>
                Nombre del producto:
                <input type="text" name="nombreProducto" value="<?=$formulario->nombreProducto;?>" required>
            </label>
        </div>
        <div class="field">
            <label>
                Precio del producto:
                <input type="number" step="0.1" name="precio" value="<?=$formulario->precio;?>" required>
            </label>
        </div>
        <button name="send">Enviar</button>
        <div class="field"><?=$formulario; ?></div>
    </form>
</body>

</html>