<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/action.js"></script>
  <link rel="stylesheet" href="media/style.css">

<div class="middle">
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    
    <form id="regiration_form" novalidate action="action.php"  method="post">
        <fieldset>
            <h2>Klant gegevens</h2>
            <div class="form-group">
                <label for="clientName">Naam</label>
                <input type="clientName" class="form-control" id="clientName" name="clientName" placeholder="Naam klant">
            </div>

            <div class="form-group">
                <label for="clientAdres">Adres</label>
                <input type="clientAdress" class="form-control" id="clientAdress" placeholder="Adres klant">
            </div>

            <div class="form-group">
                <label for="clientPlace">Plaats</label>
                <input type="clientPlace" class="form-control" id="clientPlace" placeholder="Plaats klant">
            </div>

            <div class="form-group">
                <label for="date">Datum</label>
                <input type="date" class="form-control" id="date" placeholder="Datum">
            </div>

            <div class="form-group">
                <label for="conPerson">Contractpersoon</label>
                <input type="conPerson" class="form-control" id="conPerson" placeholder="Contactpersoon">
            </div>

            <input type="button" name="password" class="next btn btn-info" value="Next" />
        </fieldset>
        
        <fieldset>
            <h2>Weegschaal gegevens</h2>
            <div class="form-group">
                <label for="scaleLoc">Locatie</label>
                <input type="scaleLoc" class="form-control" id="scaleLoc" name="scaleLoc" placeholder="Locatie">
            </div>

            <div class="form-group">
                <label for="inventNum">Inventarisatienummer</label>
                <input type="inventNum" class="form-control" id="inventNum" placeholder="Inventarisatienummer">
            </div>

            <div class="form-group">
                <label for="scaleBrand">Merk</label>
                <input type="scaleBrand" class="form-control" id="scaleBrand" placeholder="Merk">
            </div>

            <div class="form-group">
                <label for="scaleType">Type</label>
                <input type="scaleType" class="form-control" id="scaleType" placeholder="Type">
            </div>

            <div class="form-group">
                <label for="scaleSerNum">Serienummer</label>
                <input type="scaleSerNum" class="form-control" id="scaleSerNum" placeholder="Serienummer">
            </div>
            
            <div class="form-group">
                <label for="ijkClass">Ijkklasse</label>
                <input type="ijkClass" class="form-control" id="ijkClass" placeholder="Ijkklasse">
            </div>
            
            <div class="form-group">
                <label for="scaleYear">Bouwjaar</label>
                <input type="scaleYear" class="form-control" id="scaleYear" placeholder="Bouwjaar">
            </div>
            
            <div class="form-group">
                <label for="scaleReach">Bereik</label>
                <input type="scaleReachMax" class="form-control" id="scaleReachMax" placeholder="Maximaal KG">
                <input type="scaleReachMin" class="form-control" id="scaleReachMin" placeholder="Minimaal KG">
            </div>
            
            <div class="form-group">
                <label for="scaleDist">Schaalverdeling e</label>
                <input type="scaleDist" class="form-control" id="scaleDist" placeholder="G">
            </div>

            <input type="button" name="password" class="next btn btn-info" value="Next" />
        </fieldset>
        
        <fieldset>
            <h2>Checklist</h2>
            <div class="form-group">
                <label for="">Verzegeling intact</label><br>
                <input type="radio" id="" name="" value="Akkoord">Akkoord<br>
                <input type="radio" id="" name="" value="Niet akkoord">Niet akkoord<br>
            </div>

            <div class="form-group">
                <label for="">Merktekens aanwezig: Ijkklasse, CE, M-label</label><br>
                <input type="radio" id="" name="" value="Akkoord">Akkoord<br>
                <input type="radio" id="" name="" value="Niet akkoord">Niet akkoord<br>
            </div>

            <div class="form-group">
                <label for="">Gewichtsafwijking: Bruto en Netto</label><br>
                <input type="radio" id="" name="" value="Akkoord">Akkoord<br>
                <input type="radio" id="" name="" value="Niet akkoord">Niet akkoord<br>
            </div>

            <div class="form-group">
                <label for="">Fout bij excentrische belasting</label><br>
                <input type="radio" id="" name="" value="Akkoord">Akkoord<br>
                <input type="radio" id="" name="" value="Niet akkoord">Niet akkoord<br>
            </div>

            <div class="form-group">
                <label for="">Herhaalbaarheidsfout</label><br>
                <input type="radio" id="" name="" value="Akkoord">Akkoord<br>
                <input type="radio" id="" name="" value="Niet akkoord">Niet akkoord<br>
            </div>
            
            <div class="form-group">
                <label for="">Beweeglijkheidsfout</label><br>
                <input type="radio" id="" name="" value="Akkoord">Akkoord<br>
                <input type="radio" id="" name="" value="Niet akkoord">Niet akkoord<br>
            </div>

            <input type="button" name="password" class="next btn btn-info" value="Next" />
        </fieldset>
        
        <fieldset>
            <h2></h2>
            <div class="form-group">
                <label for="">Keuring uitgevoerd door:</label>
                <input type="text" class="form-control" id="" name="" placeholder="Naam uitvoerder">
            </div>

            <div class="form-group">
                <label for="">Datum</label>
                <input type="date" class="form-control" id="" placeholder="">
            </div>

            <div class="form-group">
                <label for="">Batterij vervangen</label><br>
                <input type="checkbox" id="" value="Yes">Ja<br>
            </div>

            <div class="form-group">
                <label for="">Onderhoudssticker geplakt</label><br>
                <input type="checkbox" id="" value="Yes">Ja<br>
            </div>

            <input type="button" name="password" class="next btn btn-info" value="Next" />
        </fieldset>
        
        <fieldset>
            <h2>Resultaat</h2>

            <input type="button" name="password" class="next btn btn-info" value="Done" />
        </fieldset>
  </form>
</div>