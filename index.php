<?php

if (!isset($_POST['posted'])) {
    
}
else{
    $monUren = $_POST['maandagUren'];
    $monMin = $_POST['maandagMin'];
    $dinUren = $_POST['dinsdagUren'];
    $dinmin = $_POST['dinsdagMin'];
    $woenUren= $_POST['woensdagUren'];
    $woenMin= $_POST['woensdagMin'];
    $donUren = $_POST['donderdagUren'];
    $donMin= $_POST['donderdagMin'];
    $vrijUren = $_POST['vrijdagUren'];
    $vrijMin = $_POST['vrijdagMin'];
    //$posted = new werkweek($kjsdkf,)
    $monMin = $monMin + ($monUren * 60);
    $totalmon = $monUren + $monMin / 10;
}

class werkweek
{
    public $maandag;
    public $dindsdag;
    public $woensdag;
    public $donderdag;
    public $vrijdag;
    function __construct($maandag, $dindsdag, $woensdag, $donderdag, $vrijdag)
    {

        $this->maandag = $maandag;
        $this->dindsdag = $dindsdag;
        $this->woensdag = $woensdag;
        $this->donderdag = $donderdag;
        $this->vrijdag = $vrijdag;
    }
    public function getWerkWeekTable()
    {
        return "";
    }
    public function getTotalUren()
    {
        return "";
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Uren registratie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Uren registratie</h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="mb-3 mt-3">
                    <form action="#" method="post">
                        <input type="hidden" name="posted" value="1">
                        <div class="row">
                            <label for="email" class="form-label">Maandag</label>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="maandagUren" placeholder="Aantal uren" name="maandagUren">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="maandagMin" placeholder="Aantal min" name="maandagMin">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Dinsdag</label>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="dinsdagUren" placeholder="Aantal uren" name="dinsdagUren">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="dinsdagMin" placeholder="Aantal min" name="dinsdagMin">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Woensdag</label>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="woensdagUren" placeholder="Aantal uren" name="woensdagUren">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="woensdagMin" placeholder="Aantal min" name="woensdagMin">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Donderdag</label>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="donderdagUren" placeholder="Aantal uren" name="donderdagUren">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="donderdagMin" placeholder="Aantal min" name="donderdagMin">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Vrijdag</label>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="vrijdagUren" placeholder="Aantal uren" name="vrijdagUren">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" value="0" id="vrijdagMin" placeholder="Aantal min" name="vrijdagMin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>

</body>

</html>