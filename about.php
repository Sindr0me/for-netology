<!DOCTYPE>
<html lang="ru">
    <head>
        <title>1й php</title>
        <meta charset="utf-8">
        <style>
        <?php 
        $name = "Владимир";
        $age = 21;
        $mail = "kupriyanov.vo@gmail.com";
        $city = "Москва";
        $info = "Ведущий специалист КЦ по ВК";
        ?>
        table td  {
        	padding: 10px;
        }
        </style>
    </head>
    <body>
    	<h1>Страница пользователя: <?php echo "$name";?></h1>
    	<table border="1">
    		<tr>
    			<td>Имя</td> <td><?php echo "$name";?></td>
    		</tr>

    		<tr>
    			<td>Возраст</td> <td><?php echo "$age";?></td>
    		</tr>

    		<tr>
    		    <td>Почта</td> <td><?php echo "$mail";?></td>
    		</tr>

    		<tr>
    			<td>Город</td> <td><?php echo "$city";?></td>
    		</tr>

    		<tr>
    			<td>О себе</td> <td><?php echo "$info";?></td>
    		</tr>
    	</table>
    </body>
</html>
