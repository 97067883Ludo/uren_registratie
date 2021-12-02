<?php




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
    <title>Bootstrap 5 Example</title>
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
                        <div class="row">
                            <label for="email" class="form-label">Maandag</label>
                            <div class="col">
                                <input type="number" class="form-control" id="maandag" placeholder="Aantal uren" name="maandag">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="maandag" placeholder="Aantal min" name="maandag">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Dinsdag</label>
                            <div class="col">
                                <input type="number" class="form-control" id="dinsdag" placeholder="Aantal uren" name="dinsdag">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="dinsdag" placeholder="Aantal min" name="dinsdag">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Woensdag</label>
                            <div class="col">
                                <input type="number" class="form-control" id="woensdag" placeholder="Aantal uren" name="woensdag">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="woensdag" placeholder="Aantal min" name="woensdag">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Donderdag</label>
                            <div class="col">
                                <input type="number" class="form-control" id="donderdag" placeholder="Aantal uren" name="donderdag">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="donderdag" placeholder="Aantal min" name="donderdag">
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">Vrijdag</label>
                            <div class="col">
                                <input type="number" class="form-control" id="vrijdag" placeholder="Aantal uren" name="vrijdag">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="vrijdag" placeholder="Aantal min" name="vrijdag">
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