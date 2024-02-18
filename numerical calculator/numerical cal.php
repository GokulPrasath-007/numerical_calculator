
<html>
<head>
<title>Numerology Calculator</title>
<style>
    /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        
    }

    /* Body styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image:url("pix.jpg");
        background-size:cover;
    }

    /* Header styles */
    header {
      
        background-color:  #6A0DAD;
        color: #FFFFFF;
        font-size: 24px;
        padding: 20px 0;
        text-align: center;
     
    }
    footer{
        float:bottom;
      font-family: Arial, sans-serif;
      background-color: #D0E9F7;
        color: white;
        font-size: 15px;
        padding: 70px 0;
       
   

    }

    /* Navigation styles */
    nav {
    
        
        background-color:  #D0E9F7;
        text-align: center;
        padding: 10px 0;
    }

    nav a {
        color: #6A0DAD;
        font-family:Arial, sans-serif;
        font-size:20px;
        text-decoration: none;
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    nav a:hover {
        background-color:  rgba(72, 109, 230, 0.842);
    }

    /* Calculator styles */
    .calculator {
        background-color: #D0E9F7;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        text-align: center;
        width: 400px;
        max-width: 90%;
        margin: 10px auto;
    }
    .para {
        background-color: #D0E9F7;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        text-align: center;
        width: 600px;
        margin: 10px auto;
    }
    .heading {
        color:  rgba(72, 109, 230, 0.842);
        font-size: 32px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .input-main {
        margin-bottom: 20px;
        text-align: left;
    }

    label {
        color: #2c3e50;
        font-size: 18px;
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="date"] {
        width: 100%;
        padding: 12px;
        border-radius: 25px;
        border: 1px solid #ccc;
        font-size: 16px;
        box-sizing: border-box;
        outline: none;
    }

    input[type="submit"] {
        background-color: #ff6348;
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 25px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        outline: none;
    }

    input[type="submit"]:hover {
        background-color: #ff4c2b;
    }

    .result {
        color: #2c3e50;
        font-size: 24px;
        margin-top: 20px;
    }

    .meaning {
        color: #2c3e50;
        font-size: 18px;
        margin-top: 10px;
        text-align: left;
    }

    .meaning li {
        margin: 5px 0;
    }

    .meaning strong {
        color: #c0392b;
    }

    .background-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      
    }
    footer {
    background-color:  rgba(72, 109, 230, 0.842);
    color: #333333;
    padding: 20px 0;
    text-align: center;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
}

.footer-content p {
    margin-bottom: 10px;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    display: inline-block;
    margin-right: 20px;
}

.footer-links li:last-child {
    margin-right: 0;
}

.footer-links date1 {
    color: #333333;
    text-decoration: none;
}

.footer-links date1:hover {
    text-decoration: underline;
}

</style>
</head>
<body>

<header>Welcome to Numerology Calculator</header>

<nav>
    <a href="#">Home</a>
    <a href="about.php">About</a>
</nav>

<div class="calculator">
    <h1 class="heading">Calculator</h1>
    <form name="f1" action="" method="post">
        <div class="input-main">
            <label for="d1">Enter Your Date Of Birth</label><br>
            <input type="date" id="d1" name="d1" required>
        </div>
        <input type="submit" value="Click Here">
    </form>
  </div><br>
  <div class="para">
    <?php
    if($_POST)
    {
        $date=$_POST['d1'];

        $date1 = "$date";
        $date1 = str_replace("-", "", $date1);


        $total=0;
        $total1=0;
        while($date1>0)
        {
            $b=$date1%10;
            $total=$total+$b;
            $date1=$date1/10;
        }

        if($total>9)
        {
            while($total>0)
            {
                $c=$total%10;
                $total1=$total1+$c;
                $total=$total/10;
            }
            $number=$total1;
        }
        else{
            echo $total;
            $number=$total;
        }
    }
    else{
        echo "";
    }
    ?>
    
    <?php if(!empty($number)) { ?>
        <div class="result">
            Your Lucky Number Is: <?php echo $number; ?>
        </div>
        <div class="meaning">
            <?php 
            switch($number) {
                case 1:
                    echo "<h1>1: THE PRIMAL FORCE :</h1><br>
                    <p>
                    Among the nine single-digit numbers, the 1 holds date1 special place. From date1 spiritual perspective, it is the number of creation, the primal force from which all other numbers spring forth. </p>";
                   
                    break;
                case 2:
                    echo "<h2>2:THE ALL-KNOWING</h2><br>
                    <p>The most feminine among all numbers, the 2 is also the most underestimated -- at least, when it comes to power and strength. It is almost always gentle, tactful, diplomatic, forgiving and understanding.</p>";
                    break;
                case 3:
                    echo "<h2>3: THE CREATIVE CHILD</h2><br>
                    <p>The number 3 is like date1 gifted teenager who is still under the protection of their parents: date1 bit spoiled, scattered and perpetually in need of guidance. However, the most obvious traits of the 3 are in the creative field.</p>";
                    break;
                case 4:
                    echo "<h2>4: THE SALT OF THE EARTH</h2><br>
                   <p> The 4 is without date1 doubt the most stable, grounded number, reflecting strength and stability. It's chief characteristics are dependability, productivity, punctuality and obedience. It is trustworthy, patient, conventional and detail oriented.</p>";
                    break;
                case 5:
                    echo "<h2>5: A DYNAMIC FORCE</h2><br>
                    <p>The number 5 is the most dynamic and energetic of all the single-digit numbers. It is unpredictable, always in motion and constantly in need of change. Although it is molded from an almost equal mix of masculine ,feminine qualities, Prince, Accountant, Mental & Emotional Balance</p>";
                    break;
                case 6:
                    echo "<h2>6: THE CARETAKER<h2><br>
                    <p>While the 6 is considered the most harmonious of all single-digit numbers, it is not without its flaws and upsets. The most important influence of the 6 is its loving and caring nature. It is properly nicknamed the motherhood number, Strategy expert, Dancer, Luxury</p>";
                    break;
                case 7:
                    echo "<h2>7: THE PHILOSOPHER</h2><br>
                    <p>The number 7 is the seeker, thinker, the searcher of Truth . The 7 doesn't take anything at face value - always trying to understand the underlying hidden truths. The 7 intuitively knows nothing is what it seems.</p>";
                    break;
                case 8:
                    echo "<h2>8: BALANCE & POWER</h2><br>
                    <p>The number 8 is perhaps the most misunderstood of all single-digit numbers, as novices and numerology professionals alike seem to hammer on the money and power image of the 8.It Represents SATURN - Judge, Servant, Struggle, Money Manager </p>";
                    break;
                case 9:
                    echo "<h2>9: GLOBAL AWARENESS</h2><br>
                    <p>Ordinarily, I keep the math to date1 minimum when I discuss an aspect of Numerology. In the case of the number 9, however, the math highlights date1 philosophical observation that is unique and very revealing. IT resembles MARS - Commander, Humanity, Anger, Honorable old life</p>";
                    break;
                default:
                    echo "Thank you";
            }
            ?>
        </div>
    <?php } ?>
</div>
<br><br><br>

<footer>
    <div class="footer-content">
        <p>&copy; 2024 Numerology Calculator. All rights reserved.</p>
        <ul class="footer-links">
            <li><date1 href="#">Privacy Policy</date1></li>
            <li><date1 href="#">Terms of Service</date1></li>
            <li>Email : numeralogy@gmail.com</li>
            <li>Instagram: numeralogy_001</li>
        </ul>
    </div>
 
  
</body>
</html>
