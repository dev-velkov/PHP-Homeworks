<HTML>
    <body>
        <div>
            <form action="" method="post">
                <label for="amount">Enter Amount</label>
                <input type="text" id="amount" name="amount"><br/>
                <input type="radio" name="currency" id="bgn" value="bgn">
                <label for="bgn">BGN</label>
                <input type="radio" name="currency" id="eur" value="eur">
                <label for="eur">EUR</label>
                <input type="radio" name="currency" id="usd" value="usd">
                <label for="usd">USD</label><br/>
                <label for="interest">Compound Interest Amount</label>
                <input type="text" id="interest" name="interest"><br/>
                <select name="period">
                    <option value="6">6 Months</option>
                    <option value="12">1 Year</option>
                    <option value="24">2 Years</option>
                    <option value="60">5 Years</option>
                </select>
                <input type="submit" value="Calculate">
                <?php
                if (isset($_POST["amount"]) && isset($_POST["currency"]) && isset($_POST["interest"]) && isset($_POST["period"])){
                    $amount = $_POST['amount'];
                    $currency = $_POST['currency'];
                    $interest = $_POST['interest'];
                    $period = $_POST['period'];
                    if (is_numeric($amount) && is_numeric($interest) && is_numeric($period)){
                        $monthlyInterest = $interest/12;
                        $finalSum = $amount;
                        for ($i = 0; $i < $period; $i++) {
                            $finalSum *= (1 + ($monthlyInterest / 100));
                        };
                        $sumToPrint = round($finalSum, 2);
                        if($currency == 'bgn'){
                            echo $sumToPrint.' BGN';
                        }
                        elseif($currency == ' USD'){
                            echo '$ '.$sumToPrint;
                        }
                        elseif($currency == 'eur'){
                            echo $sumToPrint . ' Euro';
                        }
                    }
                }
                ?>
            </form>
        </div>
    </body>
</HTML>