    <?php
        $mysqli = new mysqli('localhost','root', '', 'tedc');
        $result = $mysqli->query("SELECT students.NIM, students.NAMA, studi_programs.NAME
        FROM students INNER JOIN studi_programs ON students.STUDY_PROGRAM_ID = studi_programs.STUDY_PROGRAM_ID;");

    
    $mahasiswa = [];
    
    while ($row = $result->fetch_assoc()) {
        array_push($mahasiswa, $row);
    }
    $nomer = 1
   
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <h2 align ="center"> data mahasiswa KA 2021</h2>
        <table class = "table table-bordered table-hover">
            <tr>
                <th> no </th> 
                <th> nim </th>
                <th> nama</th>
                <th> program studi </th>
            </tr> 
            <?php foreach ($mahasiswa as $row){ ?>
                <tr>
                <th> <?= $nomer++; ?></th> 
                <th> <?= $row['NIM']; ?></th> 
                <th> <?= $row['NAMA']; ?></th> 
                <th> <?= $row['NAME'] ; ?></th> 
                </tr>
                <?php  } ?>
            </table>
           
            
    </body>
    </html>