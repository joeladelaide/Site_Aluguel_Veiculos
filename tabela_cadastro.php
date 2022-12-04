<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
   
</head>

<body>
    
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Whatsapp</td>
        </tr>
        <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["id"]; ?></td>  
            <td><?php echo $dado["nome"]; ?></td> 
            <td><?php echo $dado["email"]; ?></td> 
            <td><?php echo $dado["whatsapp"]; ?></td> 
        </tr>
        <?php } ?>

    </table>
        
</body>
</html>



