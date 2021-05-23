<?php 
    //koneksi ke database
    $koneksi = mysqli_connect("localhost","root","","dcornercoffee");
 
    // Check connection
    if (mysqli_connect_errno()){
	    echo "Koneksi database gagal : " . mysqli_connect_error();
    } else {
       // echo "Koneksi database berhasil";
    }

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

	// Fungsi menambahkan data merk
    function ins_pesan($data){
	global $koneksi;
	$name = htmlspecialchars($data["contact_name"]);
	$email = htmlspecialchars($data["contact_email"]);
	$subject = htmlspecialchars($data["contact_subject"]);
	$pesan = htmlspecialchars($data["contact_message"]);

	$query = "CALL ins_pesan('', '$name', '$email', '$subject', '$pesan')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
    }
?>