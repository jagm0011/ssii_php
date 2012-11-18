<%-- 
    Document   : index
    Created on : 18-nov-2012, 14:05:48
    Author     : javi
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pruebas de SSII</title>
        <script  type="text/javascript" async="" src="js/jquery-1.6.2.min.js"></script>
        <script  type="text/javascript" async="" src="js/jquery-ui-1.8.16.custom.min.js"></script>
        <link rel="stylesheet" href="css/cupertino/jquery-ui-1.8.16.custom.css" type="text/css" media="screen">
        <script  type="text/javascript" async="" src="js/funcionesParametros.js"></script>
        <style>
            .cabecera{
                width:100%;
                height: 100px;
            }    
            .parametros{
                float:left;
                width:25%;
                
            }
            .resultado{
                float:left;
                width:70%;
                
            }
        </style>        
    </head>
    <body >
        <div class="cabecera">
            <span style="font-size:24px; color: green;">Parametros SRC SSII</span>  
        </div>
        <div class="parametros">
            <select id="similitud">
                <option value="PCC">Coeficiente de correlacion de Pearson</option>
                <option value="SC">Similitud del coseno</option>
            </select>
        </div>
        <div class="resultado"></div>
    </body>
</html>
