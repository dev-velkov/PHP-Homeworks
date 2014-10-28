<HTML>
    <body>
        <form method="get">
            <input type="text" name="name" placeholder="Name"><br/>
            <input type="text" name="age" placeholder="Age"><br/>
            <input type="radio" name="gender" value="male">Male<br/>
            <input type="radio" name="gender" value="female">Female<br/>
            <input type="submit">
            <?php
            if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){?>
            <p>Your name is <?php echo($_GET['name'])?>, you are
                <?php echo($_GET['age'])?> years old and you are
                <?php echo($_GET['gender'])?>.</p>
            <?php
            }
            ?>
        </form>
    </body>
</HTML>