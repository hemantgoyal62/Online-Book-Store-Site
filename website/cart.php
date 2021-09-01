<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kitabi Keeda</title>
	<link rel="stylesheet" type="text/css" href="kitabi_keeda.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<script type="text/javascript">
		function message(){
			alert("This feature is not available yet.");
		}
		function showsearch(){
			var x=document.getElementById('input');
			var val=document.getElementById("Signup");
            if(x.style.display=="none")
            {
                x.style.display="block";
                val.style.marginLeft=17.5+"%";
            }
            else
            {
                x.style.display="none";    
                val.style.marginLeft=32+"%";          
            }
		}
		function showdiv()
        {
            var x=document.getElementById('authenticate');
            if(x.style.display=="none")
            {
                x.style.display="flex";
            }
            else
            {
                x.style.display="none";
            }
        }
		function pass()
        {
            var text="";
            var regx=/^([a-zA-Z0-9\.-]+)@([a-zA-z0-9]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
            if(document.getElementById('profile').value=="")
            {
                text="enter the profile name.\n"
                document.getElementById('profile').style.border="3px solid red";
            }
            if(!regx.test(document.getElementById('email').value))
            {
                text+="invalid email id. \n"
                document.getElementById('email').style.border="3px solid red";
            }
            if(document.getElementById('pass').value.trim().length>10)
            {
                text+="Too long password\n"
                document.getElementById('pass').style.border="3px solid red";
            }
            if(document.getElementById('pass').value.trim().length<3)
            {
                text+="too short password. \n"
                document.getElementById('pass').style.border="3px solid red";
            }
            if(text!="")
            {
                alert(text);
                return false;
            }
            if(text=="")
            {
                text="you have successfully authenticated."
                showdiv();
                alert(text);
                document.getElementById('profile').style.border="1px solid black";
                document.getElementById('email').style.border="1px solid black";
                document.getElementById('pass').style.border="1px solid black";
                document.getElementById('myform').reset();
                return true;
            }
        }
        function pass1()
        {
            var text="";
            var regx=/^([a-zA-Z0-9\.-]+)@([a-zA-z0-9]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
            if(document.getElementById('profile1').value=="")
            {
                text="enter the profile name.\n"
                document.getElementById('profile1').style.border="3px solid red";
            }
            if(!regx.test(document.getElementById('email1').value))
            {
                text+="invalid email id. \n"
                document.getElementById('email1').style.border="3px solid red";
            }
            if(document.getElementById('pass1').value.trim().length>10)
            {
                text+="Too long password\n"
                document.getElementById('pass1').style.border="3px solid red";
            }
            if(document.getElementById('pass1').value.trim().length<3)
            {
                text+="too short password. \n"
                document.getElementById('pass1').style.border="3px solid red";
            }
            if(text!="")
            {
                alert(text);
                return false;
            }
            if(text=="")
            {
                text="you have successfully authenticated."
                showdiv();
                alert(text);
                document.getElementById('profile1').style.border="1px solid black";
                document.getElementById('email1').style.border="1px solid black";
                document.getElementById('pass1').style.border="1px solid black";
                document.getElementById('my_form').reset();
                return true;
            }
        }
    </script>
    <style type="text/css">
        .form form{
            margin: 2rem;
            font-size: 2rem;
        }
        .form form input,.form form select{
            font-size: 2rem;
            margin: 1rem;
            border-radius: 30px;
        }  
        .table{
            font-size: 2rem;
            border-collapse: collapse;
        } 
    </style>
</head>
<body >
    <div class="header">
        <img src="titleimage.png" alt="title_image">
        <p><a href="#contact">Contact Us</a>&nbsp&nbsp
            <a href="#" onclick="message()">Wholesale</a>&nbsp&nbsp
            <a href="selling.html">Sell Book</a>
        </p>
        <img src="searchicon.jpg" alt="search_icon" id="search" onclick="showsearch()">
        <select type="text" name="search_query" placeholder="Enter your book name" id="input" style="display: none;" onchange="window.location.href=this.value">
            <option value="none" disabled selected>--Select One--</option>
            <optgroup label="Book Sets"></optgroup>
            <option value="Book_set/Book_set1.html"><a href="Book_set1.html">Dan Brown</a></option>
            <option value="Book_set/Book_set2.html">Lolita, Mein Kampf, Anne Frank</option>
            <option value="Book_set/Book_set3.html">George Orwell</option>
            <option value="Book_set/Book_set4.html">Millenium Series</option>
            <option value="Book_set/Book_set5.html">Agastha Christie</option>
            <option value="Book_set/Book_set6.html">The Selection Series</option>
            <optgroup label="Young Adult"></optgroup>
            <option value="Young adult/Young adult1.html">Mightier Than the sword</option>
            <option value="Young adult/Young adult2.html">PostScript</option>
            <option value="Young adult/Young adult3.html">Gone Girl</option>
            <option value="Young adult/Young adult4.html">An Ambulance of Katherines</option>
            <option value="Young adult/Young adult5.html">Shadow and Bone</option>
            <option value="Young adult/Young adult6.html">Have A Little Faith</option>
            <optgroup label="Recently Purchased"></optgroup>
            <option value="Recently Purchased/recent1.html">The Kite Runner</option>
            <option value="Recently Purchased/recent2.html">A Thousand Splendid Suns</option>
            <option value="Recently Purchased/recent3.html">Like Smoke</option>
            <option value="Recently Purchased/recent4.html">Target 3 Billions</option>
            <option value="Recently Purchased/recent5.html">Ahimsa</option>
            <option value="Recently Purchased/recent6.html">The Essential Rumi</option>
            <optgroup label="What's Trending"></optgroup>
            <option value="trending/trending1.html">On the Come Up</option>
            <option value="trending/trending2.html">The Wasted Vigil</option>
            <option value="trending/trending3.html">The Hunger Games</option>
            <option value="trending/trending4.html">The Girl on the Train</option>
            <option value="trending/trending5.html">All the Bright Places</option>
            <option value="trending/trending6.html">Vanara</option>
            <optgroup label="Reader's Choice"></optgroup>
            <option value="Reader/reader1.html">The help</option>
            <option value="Reader/reader2.html">Leo Tolstoy</option>
            <option value="Reader/reader3.html">Reluctant Fundamentalist</option>
            <option value="Reader/reader4.html">Best Kept Secret</option>
            <option value="Reader/reader5.html">Only Time Will Tell</option>
            <option value="Recently Purchased/recent2.html">A Thousand Splendid Suns</option>
        </select>
        <div class="authenticate" id="Signup">
            <button onclick="showdiv()">Login/Signup</button>
        </div>
    </div>
    <hr color="white">
    <div class="menu">
        <p>&nbsp&nbsp&nbsp <a href="kitabikeeda.html">Home</a>&nbsp&nbsp <a href="kitabikeeda.html#categories"> Categories </a> &nbsp&nbsp <a href="kitabikeeda.html#recen_purch"> Newly purchased </a> &nbsp&nbsp <a href="kitabikeeda.html#trending"> Popular </a>&nbsp&nbsp <a href="#" onclick="message()"> Comics </a></p>
    </div>
    <hr color="white">
    <div class="container">
        <div class="left-div" id="categories">
            <h2><a href="kitabikeeda.html#book_set">Book sets</a></h2>
            <hr >
            <h2><a href="kitabikeeda.html#Young_adult">Young adult</a></h2>
            <hr >
            <h2><a href="kitabikeeda.html#recen_purch">Recently Purchased</a></h2>
            <hr >
            <h2><a href="kitabikeeda.html#trending">Trending</a></h2>
            <hr >
            <h2><a href="kitabikeeda.html#reader">Reader's choice</a></h2>
            <hr >
            <h2><a href="cart.php">Your cart</a></h2>
        </div>
        <div class="right-div">
            <center>
                <div id="authenticate" style="display:none;" >
                    <div id="login">
                        <h2> LOG-IN </h2>
                        <form id="myform" action="check.php" method="post">
                            <p>Profile:<input type="text" id="profile" placeholder="Your customer_id" name="cid"></p>
                            <p>Email ID:<input type="email" id="email" placeholder="Your Email ID" name="email"></p>
                            <p>Password:<input type="password" id="pass" placeholder="Password" name="passw"></p>
                            <p><input type="submit" class="button2" value="Submit" name="SUBMIT" onclick="return pass()"></p>
                        </form>
                    </div>
                    <div id="signup" >
                        <h2> SIGN-UP </h2>
                        <form id="my_form" action="user_add.php" method="post">
                            <p>Profile:<input type="text" id="profile1" placeholder="Your profile name" name="cid"></p>
                            <p>Email ID:<input type="email" id="email1" placeholder="Your Email ID" name="email"></p>
                            <p>Password:<input type="password" id="pass1" placeholder="Password" name="pass"></p>
                            <p><input type="submit" class="button2" onclick="return pass1()" name="SUBMIT"></p>
                        </form>
                    </div>
                    <button onclick="showdiv()" id="close"> X </button>
                </div> 
            </center>
            <div class="form">
                <form method="post" action="">
                    <label for="cid">Customer_id:</label>
                    <input type="text" name="cid" placeholder="Enter user customer_id">
                    <br>
                    <center><input type="submit" name="view" value="view"></center>
                </form>
                <?php
                    $conn = mysqli_connect("localhost","root","","kitabikeeda") or die(mysqli_error());
                    if(isset($_POST["view"]))
                    {
                        $cust_id=$_POST["cid"];
                        $r=mysqli_query($conn,"select * from cart where customer_id='$_POST[cid]'");
                        $rn=0;
                        if($r==true)
                        {
                            $rn=mysqli_num_rows($r);
                            if($rn>0){
                                echo "<table border='1px' class='table'>
                                <tr>
                                <th>customer_id</th>
                                <th>Book name </th>
                                <th>Quantity</th>";
                                while ($row=mysqli_fetch_assoc($r)) {
                                    // code...
                                    echo "<tr><td>".$row['customer_id']."</td><td>".$row['book_name']."</td><td>".$row['Quantity']."</td></tr>";
                                }
                                echo "</table>";
                            }    
                            else if($rn==0)
                            {
                                echo "<center> <h3>No Book added in cart</h3> </center>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div >
            <div class="row">
                <div class="footer-col">
                    <h4>About Us</h4>
                    <p>
                        Ever wanted to buy a book but could not because it was too expensive? worry not! because Kitabi Keeda is here! Kitabi Keeda, these days in news,is being called as the Robinhood of the world of books. Kitabi Keeda team is committed to bring to you all kinds of best books at the minimal prices ever seen anywhere. Yes, we are literally giving you away a steal.
                    </p>
                </div>
                <div class="footer-col">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Sell Book</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-col" id="contact">
                    <h4>Our Contact</h4>
                    <address>
                        KITABIKEEDA.COM<br>
                        #5,Ambedkar Nagar<br>
                        Ferozpur Road,Ludhiana<br>
                        Punjab,148000<br>
                        Ph-00000 11111<br>
                        Email- <a href='#'>admin@kitabikeeda.com</a>
                    </address>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>