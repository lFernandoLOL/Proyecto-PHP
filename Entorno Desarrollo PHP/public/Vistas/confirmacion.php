<!DOCTYPE html>
<html>
<head>
  <title>Confirmación de Pedido</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      text-align: center;
    }
    
    .container {
      max-width: 500px;
      margin: 100px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    
    h2 {
      color: #333;
    }
    
    p {
      color: #666;
      margin-bottom: 30px;
    }
    
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }
    
    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>¡Su pedido ha sido confirmado!</h2>
    <p>Gracias por realizar su pedido. Su pedido ha sido procesado y confirmado.</p>
    <a href='index.php?controller=OrderController&action=MostrarPedidoID'>Mis Pedidos</a>
  </div>
</body>
</html>
