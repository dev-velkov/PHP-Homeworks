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
            $c = array_count_values($tags);
            $val = array_search(max($c), $c);
            arsort($c);
            foreach ($c as $key => $value) {
                echo "$key : $value times<br>";
            }
            echo "<p>Most Frequent Tag is: $val</p>";
        }
        ?>
    </form>
</div>
</body>
</HTML>
