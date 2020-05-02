<?php
	include "conn.php";

	//syntax mysql untuk melihat semua record yang ada
	//ada di tabel data menu
	$sql ="SELECT * FROM datamenu";

	//execute query diatas
	$query = mysql_query($sql);
	while ($dt=mysql_fetch_array($query)) {
		$item[] = array(
			"idmenu"=>$dt["idmenu"],
			"kategori-menu"=>$dt["kategori-menu"],
			"nama-menu"=>$dt["nama-menu"],
			"harga"=>$dt["harga"],
			"idresto"=>$dt["idresto"]
		);
	}

	//menampung data yang dihasilkan
	$json = array(
		'result' => 'Success',
		'item' => $item
	);

	//merubah data kedalam bentuk json
	echo json_encode ($json);

?>