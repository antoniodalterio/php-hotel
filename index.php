<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap -->

  <!-- font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font Awesome -->
</head>

<body>
  <?php

  $hotels = [

    [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
    ],
    [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
    ],
    [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
    ],
    [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
    ],
    [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
    ],

  ];


  /* foreach ($hotels as $hotel) {
     foreach ($hotel as $key => $dati) {

       if ($hotel['parking'] === true) {

         echo $hotel['parking'] = '<i class="fa-solid fa-circle-check"></i>';
       } elseif ($hotel['parking'] === false) {
         echo $hotel['parking'] = '<i class="fa-solid fa-circle-xmark"></i>';
       }

     }
   }
   */











  ?>

  <table class="table w-75">
    <thead>
      <tr>
        <th scope="col">Hotels Name</th>
        <th scope="col">Description</th>
        <th scope="col">Parking</th>
        <th scope="col">Vote</th>
        <th scope="col">Distance to center</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">
          <?php echo $hotels[0]['name']; ?>
        </th>
        <td>
          <?php echo $hotels[0]['description']; ?>
        </td>
        <td>
          <?php echo $hotels[0]['parking'] = '<i class="fa-solid fa-circle-check"></i>'; ?>
        </td>
        <td>
          <?php echo $hotels[0]['vote']; ?>
        </td>
        <td>
          <?php echo $hotels[0]['distance_to_center']; ?>
        </td>
      </tr>
      <tr>
        <th scope="row">
          <?php echo $hotels[1]['name']; ?>
        </th>
        <td>
          <?php echo $hotels[1]['description']; ?>
        </td>
        <td>
          <?php echo $hotels[1]['parking'] = '<i class="fa-solid fa-circle-check"></i>'; ?>
        </td>
        <td>
          <?php echo $hotels[1]['vote']; ?>
        </td>
        <td>
          <?php echo $hotels[1]['distance_to_center']; ?>
        </td>
      </tr>
      <tr>
        <th scope="row">
          <?php echo $hotels[2]['name']; ?>
        </th>
        <td>
          <?php echo $hotels[2]['description']; ?>
        </td>
        <td>
          <?php echo $hotels[2]['parking'] = '<i class="fa-solid fa-circle-xmark"></i>'; ?>
        </td>
        <td>
          <?php echo $hotels[2]['vote']; ?>
        </td>
        <td>
          <?php echo $hotels[2]['distance_to_center']; ?>
        </td>
      </tr>
      <tr>
        <th scope="row">
          <?php echo $hotels[3]['name']; ?>
        </th>
        <td>
          <?php echo $hotels[3]['description']; ?>
        </td>
        <td>
          <?php echo $hotels[3]['parking'] = '<i class="fa-solid fa-circle-xmark"></i>'; ?>
        </td>
        <td>
          <?php echo $hotels[3]['vote']; ?>
        </td>
        <td>
          <?php echo $hotels[3]['distance_to_center']; ?>
        </td>
      </tr>
      <tr>
        <th scope="row">
          <?php echo $hotels[4]['name']; ?>
        </th>
        <td>
          <?php echo $hotels[4]['description']; ?>
        </td>
        <td>
          <?php echo $hotels[4]['parking'] = '<i class="fa-solid fa-circle-check"></i>'; ?>
        </td>
        <td>
          <?php echo $hotels[4]['vote']; ?>
        </td>
        <td>
          <?php echo $hotels[4]['distance_to_center']; ?>
        </td>
      </tr>
    </tbody>
  </table>



</body>

</html>