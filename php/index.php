
<?php
$voitures = [
    'Toyota' => ['Corolla', 'Camry', 'Rav4', 'Prius'],
    'Honda' => ['Civic', 'Accord', 'CR-V', 'Fit'],
    'Ford' => ['F-150', 'Mustang', 'Escape', 'Focus'],
    'Chevrolet' => ['Silverado', 'Cruze', 'Equinox', 'Malibu'],
    'Volkswagen' => ['Golf', 'Jetta', 'Passat', 'Tiguan'],
    'Nissan' => ['Rogue', 'Sentra', 'Altima', 'Micra'],
    'Hyundai' => ['Elantra', 'Tucson', 'Santa Fe', 'Accent'],
    'Kia' => ['Soul', 'Sportage', 'Rio', 'Forte'],
    'Mazda' => ['CX-5', 'Mazda3', 'Mazda6', 'CX-3'],
    'Subaru' => ['Forester', 'Impreza', 'Outback', 'Crosstrek'],
    'Mercedes-Benz' => ['C-Class', 'E-Class', 'GLC', 'S-Class'],
    'BMW' => ['3 Series', 'X3', '5 Series', 'X5'],
    'Audi' => ['A4', 'Q5', 'A3', 'Q7'],
    'Lexus' => ['RX', 'NX', 'ES', 'IS'],
    'Acura' => ['RDX', 'TLX', 'MDX', 'ILX'],
    'Infiniti' => ['Q50', 'QX60', 'QX50', 'Q60'],
    'Volvo' => ['XC90', 'XC60', 'S60', 'XC40'],
    'Land Rover' => ['Range Rover', 'Range Rover Sport', 'Range Rover Velar', 'Range Rover Evoque'],
    'Porsche' => ['Cayenne', 'Macan', 'Panamera', '911'],
    'Jaguar' => ['XE', 'F-Pace', 'XF', 'E-Pace'],
    'Tesla' => ['Model 3', 'Model X', 'Model S', 'Model Y'],
    'Mitsubishi' => ['RVR', 'Outlander', 'Mirage', 'Lancer'],
    'Buick' => ['Encore', 'Enclave', 'Envision', 'Regal'],
    'Lincoln' => ['MKX', 'MKC', 'MKZ', 'Navigator'],
    'Cadillac' => ['XT5', 'Escalade', 'CTS', 'XT4'],
    'GMC' => ['Sierra 1500', 'Terrain', 'Acadia', 'Canyon'],
    'Chrysler' => ['Pacifica', '300', 'Voyager', 'Pacifica Hybrid'],
    'Dodge' => ['Grand Caravan', 'Journey', 'Challenger', 'Durango'],
    'Jeep' => ['Wrangler', 'Cherokee', 'Grand Cherokee', 'Compass'],
    'Ram' => ['1500', '2500', '3500', 'Promaster'],
    'Fiat' => ['500', '500X', '500L', '124 Spider'],
    'Mini' => ['Cooper', 'Countryman', 'Clubman', 'Convertible'],
    'Smart' => ['Fortwo', 'Fortwo Cabrio', 'Forfour', 'Electric Drive'],
    'Maserati' => ['Ghibli', 'Levante', 'Quattroporte', 'GranTurismo'],
    'Alfa Romeo' => ['Stelvio', 'Giulia', '4C', '4C Spider'],
    'Genesis' => ['G70', 'G80', 'G90'],
    'Aston Martin' => ['DB11', 'Vantage', 'DBS Superleggera', 'Rapide S'],
    'Bentley' => ['Continental GT', 'Bentayga', 'Flying Spur', 'Mulsanne'],
    'Ferrari' => ['488', '812 Superfast', 'GTC4Lusso', 'Portofino'],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main> 
    <link rel="stylesheet" href="style.css">
        <table>
            <tr>
              <th class="marque">Marque</th>
              <th class="modelle">Modele</th>
            </tr>
    <?php foreach ($voitures as $key => $value){
            echo "<tr><th>" . $key . "</th><th>" . $value[0] . "</th></tr>";
            foreach ($value as $k => $v){
              echo "<tr><th></th><th>" . $v . "</th></tr>";
            }
          }
          ?>
          
          
    </main>
</body>

</html>