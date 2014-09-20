<?
    if (isset($_POST["action"]))
    {
        if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["city"]))
            $error = true;
    }
?>


<DOCTYPE? html>
<html>
    <head>
        <title>Form Example</title>
    <head>
    <body onload="greet()">
    <? $CATG = array (
                "General",
                "Jovenes",
                "Comunidad",
                "Noticias",
                "Entrenamiento"); ?>
        
        <div style="text-align:center">
           <h1>Suscribete a nuestra lista de correos</h1>
           
           <? if (isset($error)): ?>
                <div style="color:red">You need to fill out all the fields</div>
           <? endif ?>
           <p>Recibiras noticias gratuitas acerca de las geniales actividades de nuestra iglesia</p> 
            <form action="form.php" method="post">
                <br>
                Nombre: <input type="text" name="name" value="<? if(isset($_POST["name"])) echo htmlspecialchars($_POST["name"]) ?>">
                Genero: <input type="radio" name="gender" value="M"> M 
                <input type="radio" name="gender" value="F"> F <br/>

                Ciudad: <input type="text" name="city" value="<? if(isset($_POST["city"])) echo htmlspecialchars($_POST["city"]) ?>"><br/>
                Que clase de noticias te gustaria recibir?
                <select name="equis">
                    <option value=""></option> 
                    <? foreach ($CATG as $dorm): ?>
                      <option value="<?= $dorm ?>"><?= $dorm ?></option>
                    <? endforeach ?>
                </select><br/>
                <input type="submit" value="Registrate" name="action" >
            </form>
       </div>      
    </body>
            <script>
            function greet() {
                hola("alert");
                }
        </script>
</html>
