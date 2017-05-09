<?php include_once('Clase.php') ?>
<html>
    <head>
    <title>Datatables</title>
        <link rel="stylesheet"  href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">    
        <link rel="stylesheet"  href="style.css">   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>  
        <style>
        body {font-family: calibri;color:#4e7480;}
        </style>
    </head>
    <body>
    <div class="container">
        <table id="contact-detail" class="display nowrap" cellspacing="0" width="100%" cellpadding="1">
        <thead>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $agenda = Clase::ningunDato();
            $datos=$agenda->select();
            
                while ($rows = $datos->fetch_array()) {
                    echo "<tr>";
                    echo "<td>",$rows['id'],"</td>";
                    echo "<td>",$rows['nombre'],"</td>";
                    echo "</tr>";
                }
            
            
             ?>
        </tbody>
        </table>
        </div>
        <script>
$(document).ready(function() {
    $('#contact-detail').dataTable();
} );
</script>
    </body>

</html>
