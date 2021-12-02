<?php

if (!isset($_POST['posted'])) {
    
}
else{
    $monUren = $_POST['maandagUren'];
    $monMin = $_POST['maandagMin'];
    $dinUren = $_POST['dinsdagUren'];
    $dinMin = $_POST['dinsdagMin'];
    $woenUren= $_POST['woensdagUren'];
    $woenMin= $_POST['woensdagMin'];
    $donUren = $_POST['donderdagUren'];
    $donMin= $_POST['donderdagMin'];
    $vrijUren = $_POST['vrijdagUren'];
    $vrijMin = $_POST['vrijdagMin'];
    $monMin = $monMin + ($monUren * 60);
    $dinMin = $dinMin + ($dinUren * 60);
    $woenMin = $woenMin + ($woenUren * 60);
    $donMin = $donMin + ($donUren * 60);
    $vrijMin = $vrijMin + ($vrijUren * 60);
    $werkdagen = new werkweek($monMin, $dinMin, $woenMin, $donMin, $vrijMin);
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
    public function getTotalUren()
    {
        $totaalUren = $this->maandag + $this->dindsdag + $this->woensdag + $this->donderdag + $this->vrijdag;
        $totaalUren = $totaalUren / 60;
        return "$totaalUren uur gewerkt";
    }
    public function getCompletePicture()
    {
        $max = max($this->maandag, $this->dindsdag, $this->woensdag, $this->donderdag, $this->vrijdag);
        switch ($max) {
            case $this->maandag:
                    $maxdag = "maandag";
                break;
            case $this->dindsdag:
                    $maxdag = "dinsdag";
                break;
            case $this->woensdag:
                    $maxdag = "woensdag";
                break;
            case $this->donoderdag:
                    $maxdag = "donderdag";
                break;
            case $this->vrijdag:
                    $maxdag = "vrijdag";
                break;
            default:
                # code...
                break;
        }
        $max = $max / 60;
        $totaalUren = $this->maandag + $this->dindsdag + $this->woensdag + $this->donderdag + $this->vrijdag;
        $totaalUren = $totaalUren / 60;
        return "totaal gewerkt: $totaalUren uur en een dag max van $maxdag";
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
                <?php
                if (!isset($_POST['posted'])){

                }else {
                    echo $werkdagen->getCompletePicture();
                }
                
                ?>
            </div>
        </div>
        <?php
        ?>
    </div>

</body>

</html>