<?php 
include './partials/header.php';
$values = [
  [
    'name' => 'Čipsi',
    'volume' => 100,
    'cal' => 200,
    'protein' => 5,
    'carbs' => 50,
    'fat' => 30,
    'water' => 10,
    'fiber' => 5,
  ],
  [
    'name' => 'Konfektes',
    'volume' => 100,
    'cal' => 200,
    'protein' => 5,
    'carbs' => 50,
    'fat' => 30,
    'water' => 10,
    'fiber' => 5,
  ],
  [
    'name' => 'Kliņģeris',
    'volume' => 100,
    'cal' => 200,
    'protein' => 5,
    'carbs' => 50,
    'fat' => 30,
    'water' => 10,
    'fiber' => 5,
  ],
  [
    'name' => 'Saldējums',
    'volume' => 100,
    'cal' => 200,
    'protein' => 5,
    'carbs' => 50,
    'fat' => 30,
    'water' => 10,
    'fiber' => 5,
  ],
  [
    'name' => 'Pica',
    'volume' => 100,
    'cal' => 200,
    'protein' => 5,
    'carbs' => 50,
    'fat' => 30,
    'water' => 10,
    'fiber' => 5,
  ],
];
$sum = [
  'name' => 'Kopā',
  'volume' => 0,
  'cal' => 0,
  'protein' => 0,
  'carbs' => 0,
  'fat' => 0,
  'water' => 0,
  'fiber' => 0,
];
foreach ($values as $value) {
  $sum['volume'] += $value['volume'];
  $sum['cal'] += $value['cal'];
  $sum['protein'] += $value['protein'];
  $sum['carbs'] += $value['carbs'];
  $sum['fat'] += $value['fat'];
  $sum['water'] += $value['water'];
  $sum['fiber'] += $value['fiber'];
}
array_push($values, $sum);
?>
<div class="main">
  <h1>Uzkodas - banketu karalienes</h1>
  <img src="img/uzkoda.png" alt="uzkoda" width="600px" />
  <h2>Uzkodu uzturvielu saturs un kaloriskā vērtība (100g produkta)</h2>

  <table style="border:1px solid black">
    <thead>
      <tr>
        <th>Uzkodas nosaukums</th>
        <th>Daudzums (g)</th>
        <th>Kcal</th>
        <th>Olbaltumvielas (g)</th>
        <th>Ogļhidrāti (g)</th>
        <th>Tauki (g)</th>
        <th>Ūdens (g)</th>
        <th>Šķiedrvielas (g)</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($values as $value):?>
      <tr>
        <td><?= $value['name'] ?></td>
        <td><?= $value['volume'] ?></td>
        <td><?= $value['cal'] ?></td>
        <td><?= $value['protein'] ?></td>
        <td><?= $value['carbs'] ?></td>
        <td><?= $value['fat'] ?></td>
        <td><?= $value['water'] ?></td>
        <td><?= $value['fiber'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non elit
    et lorem ultricies vulputate. Aenean pulvinar, est non gravida
    consequat, tellus augue egestas nunc, in consectetur turpis sem a nunc.
    Pellentesque pharetra pellentesque imperdiet. Mauris elit elit, interdum
    in varius eu, lobortis at nulla. Vivamus quam odio, pulvinar at
    tristique nec, cursus ut nisl. Nunc ut elementum massa. Proin eu risus
    turpis. Phasellus suscipit augue quis metus aliquet tempus. Nullam
    bibendum placerat nisl vulputate pulvinar. Nulla nec tempor sem. Fusce
    ultricies libero nunc, aliquet varius quam eleifend sed. Donec sodales
    ex id leo consequat, sit amet consequat leo vehicula. Sed sagittis
    facilisis sollicitudin.
  </p>
</div>
<?php include './partials/footer.php' ?>
