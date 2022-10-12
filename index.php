<html>
    <head>
        <meta charset="utf-8">
        <title>Moon</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div class="page">
            <?php
                $stars = !empty($_POST['starsNum']) ? $_POST['starsNum'] : '';
                if (empty($stars)) {
            ?>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

            <form action="/index.php" method="post" class="form-for-stars">
                <button class="button remove" type="button" onclick="removeOne()">-</button>
                <label>
                    <p>Quantity of stars</p>
                    <input type="number" step="1" min= "0" max= "99" size="10" id="starsNum" name ="starsNum" value="1" maxlength="2">
                </label>

                <button class="button plus" type="button" onclick="plusOne()">+</button>
                <br><br>
                <label class="switch" >
                    <input type="checkbox" id="choiseMoon" name ="choiseMoon" onclick="choiseUrMoon(this)" value="new">
                    <span class="slider round">old</span>
                </label>
                <br><br>
        
                <button class="button showStars" onclick="showStars()" type="submit" >go</button>
        
            </form>
        </div> 
    
            <?php 
                } else {
                if($_POST["choiseMoon"] === "old") {
            ?>

            <div class ="old-Moon" id="old-Moon">

            <?php } else { ?>

                <div class ="new-Moon" id="new-Moon">

                    <?php } 
                        for ($i = 0; $i < $stars; $i++ ){
                    ?> 

                    <p class="num-stars"></p>
                    <?php } ?>
                </div>
        
            <?php } ?>                   
    </body>
</html>


<script> 
    function removeOne() {
        let old = parseInt(document.getElementById("starsNum").value)
        updated = old - 1 
        changeQntOfStars(old, updated)
        return updated
    }


    function plusOne() {
        let old = parseInt(document.getElementById("starsNum").value)
        updated = old + 1 
        changeQntOfStars(old, updated)
        return updated
    }

    function changeQntOfStars(old, updated) {
        if (updated >= 0 && updated < 100) {
            let selector = document.querySelector("#starsNum")
            return selector.value = selector.value.replace(old, updated)
        } 
        
        return old
    }

    function choiseUrMoon(button) {
        if (button.value == "new") {
            button.value = "old";
        } else {
            button.value = "new";
        }
    }
    
</script>

