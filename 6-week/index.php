<?php

?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="table">
    <div class="cup-wrapper">
        <form action="" method="post">
            <select name="drink">
                <option>Gerimas</option>
                <option value="coffe">Kava</option>
                <option value="tea">Arbata</option>
                <option value="milkshake">Pieno Kokteilis</option>
            </select><br>
            <select name="size">
                <option>Dydis</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
            </select><br>
            <select name="tea">
                <option>Arbata</option>
                <option value="red">Raudona</option>
                <option value="black">Juoda</option>
                <option value="green">Zalia</option>
                <option value="white">Balta</option>
            </select><br>
            <select name="sugar">
                <option>Cukrus</option>
                <option value="0">Be</option>
                <option value="1">Su</option>
            </select><br>
            <select name="milk">
                <option>Pasirinkti piena</option>
                <option value="0">Be</option>
                <option value="cow">Pienas</option>
                <option value="soja">Sojos pienas</option>
                <option value="coconut">Kokosu pienas</option>
            </select><br>
            <select name="flave">
                <option>Skonis</option>
                <option value="banana">Bananu skonio</option>
                <option value="strawbery">Braskiu skonio</option>
                <option value="choclate">Sokolado skonio</option>
                <option value="vanila">Vaniles skonio</option>
            </select><br>
            <input type="text" name="name" placeholder="Vardas">
            <br>
            <input type="submit" name="do-it" value="Order">
        </form>
    </div>
</div>
</body>
</html>



