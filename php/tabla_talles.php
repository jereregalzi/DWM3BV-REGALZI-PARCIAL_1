<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../styles.css" />
    <title>Tabla de talles</title>
</head>
<body>
    <?php
        include 'nav.php';
    ?>    
<section class="container p-5">
<h1 class="text-center py-5">Guía de talles</h1>
            
            <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Talle U.S</th>
          <th scope="col">Talle ARG</th>
          <th scope="col">Largo del pie</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>6.5</td>
          <td>38</td>
          <td>24,5 cm</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>7</td>
          <td>39</td>
          <td>25 cm</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td >7.5</td>
          <td>39.5</td>
          <td>25,5 cm</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>8</td>
          <td>40</td>
          <td>26 cm</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>8.5</td>
          <td>41</td>
          <td>26,5 cm</td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>9</td>
          <td>41.5</td>
          <td>27 cm</td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>9.5</td>
          <td>42</td>
          <td>27,5 cm</td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>10</td>
          <td>43</td>
          <td>28 cm</td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>10.5</td>
          <td>43.5</td>
          <td>28,5 cm</td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>11</td>
          <td>44</td>
          <td>29 cm</td>
        </tr>
      </tbody>
    </table>
</section>

    <?php
        include 'footer.php';
    ?>

</body>
</html>