<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php?error=no_user");
    }else{
?>
<html>


<head>
        <title>I-shop | Admin Panel</title>
        <script src="https://kit.fontawesome.com/46323304fb.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/header.css">

        <style>
            /* body{
                background-color: #FFFAFA;
            }*/
            .div{
                border:1px solid black;
                width:300px;
                height:100px;
                /* position:absolute;
                top:40px;
                left:50px; 
                text-align: center;
                margin-left:50%;
                margin-top:50%;*/
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);

            }
            .h3{
                text-align: center;
                color: red;
            } /*
            .h2{
                margin-left: 20px;
                color: red;
            }
            .div-1{
                width: 90%;
                height: 300px;
                margin-left:5%;
            }
            .button{
                width:70px;
                height:40px;
                background-color:red;
                margin-left:10px;
            } */
        </style>
</head>
<body>
    <!-- <div class="div">
        <h1 class="h3">Welcome back Admin</h1>
        <h2 class="h2">Feel free to go to:</h2>
        <div class="div-1">
        <a href="products.php"><button class="button"><b>Products</b></button></a><br>
        <a href="insertimi.php"><button class="button"><b>Insert Product</b></button></a><br>
        <a href="users.php"><button class="button"><b>Users</b></button></a><br>
        <a href="logout.php"><button class="button"><b>Log out</b></button></a><br>
        </div>
    </div> -->

    <div class="wrapper hover_collapse">
	<div class="top_navbar">
		<a href="index.php"><div class="logo">I-<span>shop</span></div></a>
		<div class="menu">
			<div class="hamburger">
				<i class="fas fa-bars"></i>
			</div>
			<div class="profile_wrap">
				<div class="profile">
				<form action="search.php" method="POST">
					 <input class="input1" type="text" placeholder="Search.." name="search">
      				<button class="button1" onclick="search()" name="submit-search" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="sidebar" style="margin-right: 30px;">
		<div class="sidebar_inner">
		<ul>
			<li>
				<a href="products.php">
					<span class="icon"><i class="fab fa-product-hunt"></i></span>
					<span class="text">Products</span>
				</a>
			</li>
			<li>
				<a href="insertimi.php">
					<span class="icon"><i class="fas fa-dolly-flatbed"></i></span>
					<span class="text">Insert Prod</span>
				</a>
			</li>
			<li>
				<a href="users.php">
					<span class="icon"><i class="fas fa-users"></i></span>
					<span class="text">Users</span>
				</a>
			</li>
			<li>
				<a href="searchs.php">
					<span class="icon1"><i class="fas fa-search"></i></span>
					<span class="text">Searchs</span>
				</a>
			</li>
			<li>
				<a href="orders.php">
					<span class="icon1"><i class="fas fa-external-link-alt"></i></span>
					<span class="text">Orders</span>
				</a>
			</li>
			<li>
				<a href="offers.php">
					<span class="icon1"><i class="fas fa-external-link-alt"></i></span>
					<span class="text">Offers</span>
				</a>
			</li>
			<li>
				<a href="news.php">
					<span class="icon1"><i class="fas fa-ad"></i></span>
					<span class="text">Shop News</span>
				</a>
			</li>
			<li>
				<a href="quotes.php">
					<span class="icon1"><i class="fas fa-quote-right"></i></span>
					<span class="text">Quotes</span>
				</a>
			</li>
			<li>
			<a href="logout.php">
					<span class="icon"><i class="fas fa-sign-out-alt"></i></span>
					<span class="text">Sign out</span>
			</a>
			</li>
		</ul>
		</ul>
		</div>
        </div>
    <div class="div"> 
        <h1 class="h3">Welcome back Admin</h1>
     </div>
<script>
	var li_items = document.querySelectorAll(".sidebar ul li");
var hamburger = document.querySelector(".hamburger");
var wrapper = document.querySelector(".wrapper");


li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseenter", ()=>{
		if(wrapper.classList.contains("click_collapse")){
			return;
		}
		else{
			li_item.closest(".wrapper").classList.remove("hover_collapse");
		}
	})
})

li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseleave", ()=>{
		if(wrapper.classList.contains("click_collapse")){
			return;
		}
		else{
			li_item.closest(".wrapper").classList.add("hover_collapse");
		}
	})
})



hamburger.addEventListener("click", () => {
	hamburger.closest(".wrapper").classList.toggle("click_collapse");
	hamburger.closest(".wrapper").classList.toggle("hover_collapse");
})

</script>
        </body>
        <?php 
    }
        ?>
</html>