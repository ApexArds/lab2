<?php
    if($_Post) {
        $family = array("Malachi", "Jirah", "Nathaniel", "Melinda");

        $isKnown = false;

        foreach($family as $value) {
            if($value == $_Post['Name']){
                $isKnown = true;
                break;
            }

            if($isKnow) {
                echo "Hid there, " . $_POST['name'] . "!"
            }
            else{
                echo "I dont know you";
            }

        }
    }//if post exists
?>

<form method="post">
    <p>What is your name?</p>

    <p><input type="text" name="name"></p>
    <p><input type="submit" value="Submit"></p>
</form>