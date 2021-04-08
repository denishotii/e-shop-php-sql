     <!DOCTYPE html>
     <html>
         <head>
             <title> I - shop || Admin Panel</title>
             <link rel="stylesheet" href="../css/login.css">
             <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
         </head>
         
         <body>
             <div class="wrapper">
         <div class="header">
             <div class="logo">
                 <p>I-shop | Admin Panel</p>
             </div>
             <div class="menu">
                 <ul>
                     <li class="active"><a>Login</a></li>
                     <li><a>About us</a></li>
                 </ul>
             </div>
         </div>
         <div class="main_container">
             <div class="main_item login_wrap" style="display: block;">
                 <div class="title">Nice to see you again!!</div>
                 <div class="form">
                     <form method="post" action="login.inc.php">
                         <div class="form_wrap">
                             <label for="uname">Username</label>
                             <div class="input_field">
                                 <input type="text" class="input" name="mailuid" id="uname">
                                 <i class="fas fa-user"></i>
                             </div>
                             <div class="error_msg" id="un_err_msg"></div>
                         </div>
                         <div class="form_wrap">
                             <label for="password">Password</label>
                             <div class="input_field">
                                 <input type="password" class="input" name="pwd" id="password">
                                 <i class="fas fa-key"></i>
                             </div>
                             <div class="error_msg" id="pw_err_msg"></div>
                         </div>
                         <div class="form_wrap">
                             <input name="login-submit" type="submit" value="Login">
                         </div>
                     </form>
                 </div>
             </div>
             <div class="main_item aboutus" style="display: none;">
                 <div class="title">About US</div>
                 <div class="content">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati veritatis, numquam deserunt rem libero at nulla repellendus recusandae in adipisci! Ut obcaecati a, veritatis fugit quas? Est, eos, magni. Iure culpa provident ex eius earum veniam libero deserunt, optio ratione, quam sint nostrum aut harum quasi reiciendis id voluptates, placeat.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ab sit dignissimos autem minima harum, ipsa, libero nam nobis doloremque iure! Ullam, earum reprehenderit eaque voluptates vitae iusto optio itaque, voluptatem fugit ad soluta eligendi recusandae illo, rerum cum eum iure esse. Optio tenetur ipsa, cumque. Magni veniam, nam deleniti.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ab sit dignissimos autem minima harum, ipsa, libero nam nobis doloremque iure! Ullam, earum reprehenderit eaque voluptates vitae iusto optio itaque, voluptatem fugit ad soluta eligendi recusandae illo, rerum cum eum iure esse. Optio tenetur ipsa, cumque. Magni veniam, nam deleniti.</p>
                 </div>
             </div>
         </div>
     </div>
         </body>
     </html>