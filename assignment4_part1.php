<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="assignment4_part1.php" method="post">
            Text Color: <select name="text_color">
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="red">red</option>
            </select><br>
            Font Family: <select name="font_family">
            <option value="Times New Roman, serif">Times New Roman</option>
            <option value="Arial, Helvetica, sans-serif">Arial</option>
            <option value="Lucida Calligraphy, cursive">6</option>
            </select><br>
            Text Style: <select name="text_style">
            <option value="font-weight: bold">bold</option>
            <option value="font-style: italic">italic</option>
            <option value="text-decoration: underline">underline</option>
            </select><br>
            <textarea name="input_text" cols="25" rows="25"></textarea>
            <input type="submit" value="submit" name="sumbit">
        </form>    
        <?php
            $color = $_Post['text_color'];
            $fontf = $_Post['font_family'];
            $tstyle = $_Post['text_style'];
            $text = $_Post['input_text'];
            echo '<p style= color: '. $color . '; font-family: '. $fontf . '; ' . $tstyle . '>'. $text . '</p>';
        ?>
    </body>
</html>
