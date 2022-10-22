<?php
$conn = mysqli_connect("localhost", "root", "", "cake_bakery");
$select_sql = "SELECT *FROM cakes";
$result = $conn->query($select_sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cia's Cake Bakery</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="menu.blade.php">Cakes Menu</a></li>
                    <li><a href="">Order</a></li>
                    <li><a href="">Social Media</a></li>   
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="Welcome">
              
              <div class="wlc_content">
                  <h1>Cia's Cake Bakery</h1><br></h2>Welcome to our main page!</h2><br><br>   
				  <p> This website is one of our platform on selling and introducing our cake products. 
					We of course sell the best cake with beautiful decorations and delicious taste in affortable price.</p>
					<a href="#" class="action-btn">Menu</a>
              </div>
              <div>
                    <h3 class="title">DATA BAKERY</h3>
                    <table>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Layer</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Harga</th>

                            
                        </tr>
                        @foreach ($cakes as $cake)
                            <tr>
                                <th scope="row">{{ $cake->id }}</th>
                                <td>{{ $cake->tipe_cake }}</td>
                                <td>{{ $cake->banyak_layer }}</td>
                                <td>{{ $cake->ukuran_cake }}</td>
                                <td>{{ $cake->jumlah_lilin }}</td>
                                <td>{{ $cake->pesan_pada_cake }}</td>
                                <td>{{ $cake->menu->harga}}</td>
                            </tr>
                        @endforeach
                  </table>
                  
                </section>
        </div>
    </div>    
</body>
</html>

