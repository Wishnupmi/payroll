<!DOCTYPE html>
<html>
<head>
     <title>Latihan Datatables</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
     <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>Latihan menampilkan mysql ke dalam datatable</h2>
    <hr>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamins</th>
            </tr>
            <td>df</td>
        </thead>
        <tbody>

        </tbody>
</table>



<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>


</div>
</body>
<script type="text/javascript">
        // table = $('#table_teman').Datatable({
        //     "order" : [],
        //     "processing" : true,
        //     "ServerSide" : true,
        //     "ajax" : {
        //         "url" : "<?php echo site_url('/public/index.php/Datatables/table_data'); ?>",
        //         "type" : "POST"
        //     },
        //     "columnDefs" : [{
        //         "targets" : [0],
        //         "orderable" : false
        //     }]
        // })
        

        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>

    
</html>   