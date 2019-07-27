<?php
include 'koneksi.php';
$query = mysqli_query($db_link,"SELECT * FROM v_tampil ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy TES</title>
    <link rel="stylesheet" href="asset/bs4/css/bootstrap.css">
    <link rel="stylesheet" href="asset/style.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light shadow p-3 mb-4 bg-white rounded">
        <a href="" class="navbar-brand bold">
            <img src="images/logo.png" width="85" height="50" alt="">
            ARKADEMY BOOTCAMP
        </a>
    </nav>
    <div class="container mt-3">
        <button type="button" class="btn btn-warning btn-md float-right shadow text-white" data-toggle="modal"
            data-target="#modal">ADD</button>
        <br>
        <br>
        <table class="table table-bordered text-center">
            <thead class="">
                <tr>
                    <th style="background-color: #e6e3dd; ">Name</th>
                    <th style="background-color: #e6e3dd;">Work</th>
                    <th style="background-color: #e6e3dd;">Salary</th>
                    <th style="background-color: #e6e3dd;">Action</th>
                </tr>
            </thead>
            <tbody id="data">
            <?php 
            include 'koneksi.php';
 
        $query = mysqli_query($db_link, "SELECT * FROM v_tampil");
        $no=0;
        while ($data = mysqli_fetch_array($query)) {
            $name         = $data['name'];  
            $work       = $data['work'];
            $salary  = $data['salary'];

            echo "<tr>                        
                        <td> $name </td>                     
                        <td> $work </td>
                        <td> $salary </td>
                        <td>  </td>  
                </tr>"; 
               
        }
    ?>
    </tbody>    
        </table>
    </div>

    <!-- Modal Tambah -->
    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name.."
                                autocomplete="off" style="color: grey;">
                        </div>
                        <div class="form-group">
                            <select name="work" id="work" class="form-control work" placeholder="Work ..." >
                                <option value="0" style="color: grey;">Work ...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="salary" id="salary" class="form-control">
                                <option value="0">Salary ...</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning text-white">ADD</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery-3.4.1 -->
    <script src="asset/bs4/js/jquery-3.4.1.js"></script>
    <!-- Popper Js-->
    <script src="asset/bs4/js/popper.min.js"></script>
    <!--Boostraap Js -->
    <script src="asset/bs4/js/bootstrap.js"></script>
</body>

</html>