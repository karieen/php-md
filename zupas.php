<?php include './partials/header.php' ?>
<h2>Iesūti savu zupas recepti!</h2>

<p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam natus
  voluptas vitae accusamus maxime quasi molestiae placeat eaque voluptatum
  ratione corporis, saepe aliquam ipsam eligendi, id earum rem iure
  repellendus? Quisquam labore non laborum, omnis enim tempore cumque
  eligendi? Ab aperiam sunt odio blanditiis numquam earum illo in id
  repellat iste! Veritatis, commodi. Nostrum praesentium, vero tempore animi
  exercitationem ullam.
</p>

<form action="/action_page.php">
  <fieldset>
    <legend>Pieteikšanās meistarklasei</legend>
    <label for="meistarklase">Izvēlies zupas meistarklasi:</label>
    <select id="meistarklase" name="meistarklase" required>
      <option disabled selected value>-- Izvēlies --</option>
      <option value="buljona_zupa">Buljona zupas meistarklase</option>
      <option value="kremzupa">Krēmzupas meistarklase</option>
      <option value="salda_zupa">Saldās zupas meistarklase</option>
      <option value="veganu_zupa">Vegānu zupas meistarklase</option></select
    >
    <label for="fname">Vārds:</label>
    <input type="text" id="fname" name="fname" value="Jānis" />
    <label for="lname">Uzvārds:</label>
    <input type="text" id="lname" name="lname" value="Saulītis" />
    <textarea rows="4" cols="50" name="comment" form="usrform">Ievadi tekstu šeit...</textarea
    >
    <div>
      <label for="noteikumi" class="container">Apstiprinu, ka esmu iepazinies ar lietošanas noteikumiem
        <input
        type="checkbox"
        id="noteikumi"
        name="noteikumi"
        value="true"
        required >
        <span class="checkmark"></span>
      </label>
    </div>
    <input type="submit" value="Nosūtīt" />
  </fieldset>
</form>
<?php include './partials/footer.php' ?>
