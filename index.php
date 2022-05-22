<?php 
include './partials/header.php'; 

$list = [
  'Pasta no pupiņām',
  'Ķiploks',
  'Ingvers',
  'Cukīni',
  'Burkāns',
];

?>
<div class="main">
  <h1>Manu recepšu kolekcija</h1>
  <div class="article">
    <h2>Ko likt galdā Lieldienās</h2>
    <p>
      Laicīgi, vismaz dienu pirms pašām Lieldienām, vajadzētu sagatavot ne
      vien no slāvu virtuves nākušo biezpiena pashu, bet arī dažādas
      maizītes un pīrādziņus. Pashai ledusskapī jānostāv vismaz 12 stundas,
      bet krusta maizīšu mīklas uzrūgšana vien aizņems vismaz divas stundas,
      tāpēc šos darbus sāc krietni laicīgi, lai Lieldienu rītā atliktu vien
      sīkie gatavošanas darbiņi. Bez galvenajiem ēdieniem, noteikti nedrīkst
      aizmirst arī mērces. Piemēram, mājās gatavotu majonēzi, garšaugu mērci
      un vienkāršo pesto. Uz galda liec svaigus un pavasarīgus salātus,
      kuros būtu salātlapas, redīsi, gurķi un, protams, olas. Lai
      atsvaidzinātu maltīti, izmanto nelielās un veselīgās paipalu oliņas.
      Bet, lai būtu, ko likt uz kārā zoba bez pashas un kuliča, īstā izvēle
      būs nelielas kanēļmaizītes vai cepumiņi. Tie it īpaši patiks
      mazākajiem ēdājiem. Lai svētku galds izskatītos īpaši iespaidīgi,
      tortes vietā var pagatavot Lieldienu kēksu ar šokolādes vai
      pūdercukura glazūru.
    </p>
  </div>
</div>
<div class="recipe">
  <h3>Dienas recepte</h3>
  <h4>Edamame pupiņu pasta</h4>
  <img src="img/pasta.png" alt="pasta" />
  <h5>Sastāvdaļas</h5>
  <h6>Pasta</h6>
  <ul>
    <?php foreach ($list as $item): ?>
    <li><?= $item ?></li>
    <?php endforeach; ?>
  </ul>
  <h6>Mērce</h6>
  <ul>
    <li>Sezama eļļa</li>
    <li>Olīveļļa</li>
    <li>Ābolu etiķis</li>
    <li>Sojas mērce</li>
    <li>Cukurs</li>
  </ul>
  <h5>Pagatavošana</h5>
  <ol>
    <li>
      Pastu novāri, kā norādīts uz iepakojuma, un atdzesē zem auksta tekoša
      ūdens.
    </li>
    <li>Smalki sakapā ingveru, čili un ķiplokus.</li>
    <li>
      Pannā uzkarsē eļļu un liec cepties ingveru, ķiplokus un čili. pēc 30
      sekundēm pievieno dārzeņus un apcep, līdz tie vietām brūni.
    </li>
    <li>Pievieno pastu un apmaisot sautē, līdz pasta caursildījusies.</li>
    <li>
      Lai pagatavotu mērci, visas sastāvdaļas liec bļodā un maisi, līdz
      cukurs izšķīdis.
    </li>
  </ol>
</div>
<?php include './partials/footer.php' ?>
