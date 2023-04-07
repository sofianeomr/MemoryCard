<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin | Inscription</title>
  <!-- CSS LINKPACK -->
  <!-- <link rel="stylesheet" href="./Signin.css"> -->
  <!-- <script src="./Signin.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <section class="container">
    <div>
      <a href = 'index.php?page=6'>
        <img src="./View/assets/soignant.png" id="img1">
      </a>
      <a href = 'index.php?page=11'>
        <img src="./View/assets/patient.png" id="img2">
      </a>
      </div>
    </section>

  </header>
  <br>

  <main id="Main">
    <section class="container">
      <div class="BarreDeNotification">
        <p></p>
      </div>
      <h1>Inscription Patient</h1>
    </section>

    <section class="container">
      <form id="formulaire" action="index.php?page=11" method="POST">
        <label for="Nom"><b>Nom:</b><i>*</i></label>
        <input type="text" name="pre" placeholder="Nom" required>
        <br>
        <label for="Prenom"><b>Prenom:</b><i>*</i></label>
        <input type="text" name="nom" placeholder="Prenom" required>
        <br>
        <label for="Date"><b>Date de naissance:</b><i>*</i></label>
        <input class="date" type="date" name="daten" placeholder="Date de naissance" required>
        <br>
        <label for="Patho"><b>Pathologie:</b><i>*</i></label>
        <input type="text" name="patho" placeholder="Pathologie " required>
        <br>
        <label for="numero"><b>Numero de telephone:</b><i>*</i></label>
        <input type="text" name="numero" placeholder="numero de telephone " required>
        <br>
        <label for="numero"><b>Matricule Soignant</b><i>*</i></label>
        <input type="text" name="matricule" placeholder="Matricule Soignant " required>
        <br>
        <input type="checkbox" name="subscribe" value="newsletter" required/>
        <label for="coche" id="coche">En cochant cette case vous acceptez de partager vos informations personnelles</label>
        <br>
        <button type="submit" name="submit" id="Inscription"><b>Inscription</b></button>
      </form>
      <br>
      <div class="Option">
        <a href="index.php?page=9">Connexion</a>
      </div>
    </section>
  </main>
  <br>

<style>
  #coche{
    font-size: 20px;
    color:red;
    font-weight:arial;
  }
  .date{
  height: 42px;
  width: 759px;
}
#img1{
    height: 50px;
    width: 50px;
   margin-left:300px;
}
#img2{
    height: 50px;
    width: 50px;
}

  * {
    margin: 0;
    padding: 0;
  }

  html {
    width: 100%;
    height: 100%;
  }

  body {
    /* width: 100%; height: 100%; */
    /* background: url('../../media/images/Background_Login0.jpeg') repeat space; */
    background: url("./media/images/Background_Login0.jpeg") no-repeat;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.1);
  }

  header,
  main,
  footer {
    /* width:500px; */
    margin: 0 auto;
    margin-bottom: 0%;
    padding: 3%;
    width: 50%;
    height: 12%;
    text-align: center;
    font-size: 32px;

  }

  header {
    margin: 1%;
    margin-left: -10%;
  }

  h1 {
    text-align: center;
    margin-bottom: 2%;
    font-size: 64px;
  }

  main {
    margin-top: -6%;
    text-align: left;
  }

  footer {
    padding-top: 6%;
    width: 600px;
    font-size: 21px;
  }


  /* Full-width inputs */
  input[type=text],
  input[type=password] {
    display: inline-block;
    margin: 8px 0;
    padding: 12px 20px;
    width: 100%;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: black;
    color: white;
  }

  button[type=submit] {
    margin: 8px 0;
    padding: 14px 20px;
    width: 100%;
    border: none;
    font-size: 21px;
    cursor: pointer;

  }

  button[type=submit]:hover {
    border: 2px solid #53af57;
  }

  .Option {
    text-align: center;
    margin-top: -2%;
  }

  .Option a {
    color: black;
    font-size: 20px;

  }

  .Option a:nth-child(2) {
    margin-left: 3%;
    font-size: 19px;
  }
</style>

</body>
<footer id="Footer">
    <section class="container">
      <div>Copyright © 2021-2022 JMS Corporation Tous Droits Réservés</div>
      <div>Codeur, Développeur (c) 2021 OMRANI Sofiane</div>
    </section>
  </footer>
</html>

<!-- 

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Sélecteurs CSS</title>
  <style>
    th,
    td {
      border-style: dotted;
    }
  </style>
</head>

<body>
  <form>
    Nom d'utilisateur: <input type="text" id="nom"><br />

    Mot de passe: <input type="password" id="pass"><br />

    Sexe:
    H <input type="radio" id="H" name="sexe" value="H">
    F <input type="radio" id="F" name="sexe" value="F"><br />

    Fonction: <select id="fonction">
      <option VALUE="etudiant">Etudiant</option>
      <option VALUE="ingenieur">Ingénieur</option>
      <option VALUE="enseignant">Enseignant</option>
      <option VALUE="retraite">Retraité</option>
      <option VALUE="autre">Autre</option>
    </select><br /><br />

    <input type="submit" id="envoyer" value="Envoyer">
    <input type="reset" id="annuler" value="Annuler">
  </form>
  <p id='log'>Log</p>

  <script src="jquery.js"></script>
  <script>
    $(function () {
      // Entrer les instructions jQuery ici
      // $('#nom').val("bond")

      // sur appui du bouton submit
      $("form").submit(function (e) {
        e.preventDefault(); //empêche de changer de page
        var Nom = $('#nom').val(); var Password = $('#pass').val()
        var H = $('input#H').val(); //console.log('input#H', H1) //#=> "H"
        var F = $('input#F').val(); //console.log('input#F', F) //#=> "F"
        var Genre = $(':radio:checked').val(); console.log(':radio:checked', Genre) //#=> "undefined" | "H" | "F"

        var Sexe = (Genre === 'H') ? H : F
        var Fonction = $('#fonction').val()
        switch (Fonction) {
          case 'etudiant': $('#fonction').val('etudiant'); break;
          case 'ingenieur': $('#fonction').val('ingenieur'); break;
          case 'enseignant': $('#fonction').val('enseignant'); break;
          case 'retraite': $('#fonction').val('retraite'); break;
          case 'autre': $('#fonction').val('autre'); break;

          default:
            $('#fonction').html('NOT DEFINED')
            break;
        }
        console.log("#=> info contenue de la variable Fonction", Fonction)

        var Log = $('#log').html(`
          <table style="width:50%">
            <tr>
              <th>Nom</th>
              <th>pass</th>
              <th>Sex</th>
              <th>Fonction</th>
            </tr>
            <tbody>
              <tr>
                <td>${Nom}</td>
                <td>${Password}</td>
                <td>${Sexe}</td>
                <td>${Fonction}</td>
              </tr>
            </tbody>
          </table>`)
      })

      // setInterval(() => {
      //   document.location.reload()
      // }, 20000);

    })
  </script>
</body>

</html>

 -->