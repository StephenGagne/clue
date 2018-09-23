<?php
    $rooms = [
     'Study' => [
       'items' => ['the candlestick']
     ],
     'Hall' => [
       'items' => ['Mr. Green']
     ], 
     'Lounge' => [
       'items' => ['the knife', 'Colonel Mustard'],
     ],
     'Library' => [
       'items' => ['Mrs Peacock'],
     ],
     'Dining Room' => [
       'items' => []
     ],
     'Billiard Room' => [
       'items' => ['Mrs. White', 'the rope']
     ],
     'Conservatory' => [
       'items' => ['the lead pipe'] 
     ],      
     'Ballroom' => [
       'items' => ['Miss Scarlett']
     ],
     'Kitchen' => [
       'items' => ['the wrench']
     ]
    ];
      $suspects = ['Colonel Mustard',
      'Miss Scarlet',
      'Mr. Green',
      'Mrs. Peacock',
      'Mrs. White',
      'Professor Plum'
  ];
      $weapons = ['Candlestick',
      'Knife',
      'Lead Pipe',
      'Revolver',
      'Rope',
      'Wrench'
    ];
  //Check if room is provided
  //Check if room exists
  if (isset($_GET['room']) && isset($rooms[$_GET['room']])) {
    $items = $rooms[$_GET['room']]['items'];
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clue</title>
  <link rel="stylesheet" href="clue.css">
</head>
<body>
  
  <header>
    <h1>Clue</h1>
  </header>
  <div class="items"> 
    <?php if (isset($items)) : ?>
      <?php if (count($items)) { ?>
      <p>You found <?php echo implode(' and ', $items); ?>.</p>
      <?php } else { ?>
        <p> You found nothing. </p>
      <?php } ?>
    <?php else : ?>
    <p>Select a room to get a clue.</p>
<?php endif; ?>
  </div>
  <main class="container">
  <?php foreach($rooms as $room => $items) : ?>
      <div class="room">
        <a href="?room=<?php echo $room; ?>"><?php echo $room; ?></a>
      </div>
  <?php endforeach; ?>
      
  </main>
</body>
</html>