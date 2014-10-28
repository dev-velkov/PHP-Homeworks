<HTML>
    <body>
        <div id="wrapper">
            <form action="" method="post">
                <label for="tags">Enter tags:</label>
                <input type="text" id="tags" name="tags">
                <input type="submit"><br/>
                <?php
                if(isset($_POST['tags'])){
                    $tags = explode(", ", $_POST['tags']);
                    foreach ($tags as $key => $value){
                        echo $key . " : " . $value . "<br/>";
                    }
                }
                ?>
            </form>
        </div>
    </body>
</HTML>
