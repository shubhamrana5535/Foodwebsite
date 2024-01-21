<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

<nav>
            <div class="logo">
                <h1>HUNGRY <span style="color: white;">POINT</span> </h1>
            </div>
            <!-- <div class="input">
                <input type="text" value="" placeholder="Search your special" id="inp"  onkeyup="myfun()">
                <i class="fa-brands fa-searchengin"></i>
            </div> -->
            <div class="logout">
                <!-- <i  onclick="login()" class="fa-solid fa-user">login</i> -->
                <!-- <i class="fa-solid fa-cart-shopping" ><a href="order.php">order</a></i> -->
                <!-- <i onclick="nav()" class="fa-solid fa-bars" ></i> -->
                <a href="foodhome.html">Back</a>
            </div>
        </nav>



<table>
    <tr>
        <td>
            <div class="head1">
                <h1>Order <span>Now</span></h1>
            </div>
            <div class="crd">
                <div class="card">
                    <img src="uploads/rool.png" alt="">
                    <h2>199 only</h2>
                
                </div>
                <div class="card">
                    <img src="uploads/snak.png" alt="">
                    <h2>199 only</h2>
                    
                  
                   
                </div>
                <div class="card">
                    <img src="uploads/cobo.png" alt="">
                    <h2>199 only</h2>
                    
                  
                   
                </div>
            </div>

            <div class="crd">
                <div class="card">
                    <img src="uploads/oo.png" alt="">
                    <h2>199 only</h2>
                    
                  
                   
                </div>
                <div class="card">
                    <img src="uploads/pizza.png" alt="">
                    <h2>199 only</h2>
                    
                  
                   
                </div>
                <div class="card">
                    <img src="uploads/roti.png" alt="">
                    <h2>199 only</h2>
                    
                  
                   
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>

   
       <form action="reg.php" method="POST" class="cart">
       <div class="logo" >
                <h1 style="color:black">HUNGRY <span>POINT</span> </h1>
            </div>
    <input type="text" name="name" value=""  placeholder="Enter name"><br>
    <input type="text" name="number" value=""  placeholder="Enter name"><br>   
    <input type="text" name="address" value=""   placeholder="Enter name"><br>   
    <input type="text" name="pincode" value=""  placeholder="Enter name"><br>
    <h4>Payment Option :-</h4>
    <select name="payment"  placeholder="choose option">
        <option value="cash">Cash</option>
        <option value="debit">Debit</option>
        <option value="paytm">Paytm</option>
        <option value="g-pay">G-pay</option>
    </select><br>
   <input style=" background-color: #b1b126; font-family: 'Generic' ,cursive;" type="submit" value="submit" name="submit">
    <button><a href="foodhome.html" type="button"> Back</a></button> 
  </form>

  