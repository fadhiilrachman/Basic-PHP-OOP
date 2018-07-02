<?php

// Created by Fadhiil Rachman on 2/7/2018

class Kendaraan {
	private $list;
	private $nomor;
	private $detail;

	private function ambilDetail() {
		return $this->detail;
	}

	private function buatTabel() {
		if($this->nomor == '2') {
			$this->detail = $this->list[0];
		} elseif ($this->nomor == '3') {
			$this->detail = $this->list[1];
		} elseif ($this->nomor == '4') {
			$this->detail = $this->list[2];
		}
		$h="<p>Kendaraan {$this->nomor}:<br/>
			Merek: {$this->ambilDetail()['merek']}<br/>
			Jumlah Roda: {$this->ambilDetail()['jmlRoda']}<br/>
			Harga: {$this->ambilDetail()['harga']}<br/>
			Warna: {$this->ambilDetail()['warna']}</p>";
		echo $h;
	}

	function __construct() {
		$this->list[] = array(
			'merek' => 'Toyota Yaris',
			'jmlRoda' => 4,
			'harga' => '160.000.000',
			'warna' => 'Merah',
			'bhnBakar' => 'Premium'
		);
		$this->list[] = array(
			'merek' => 'Honda Scoopy',
			'jmlRoda' => 2,
			'harga' => '13.000.000',
			'warna' => 'Putih',
			'bhnBakar' => 'Premium'
		);
		$this->list[] = array(
			'merek' => 'Isuzu Panther',
			'jmlRoda' => 4,
			'harga' => '170.000.000',
			'warna' => 'Hitam',
			'bhnBakar' => 'Solar'
		);
	}

	function tampil($nomor) {
		$this->nomor = $nomor;
		echo $this->buatTabel();
	}
}

$kendaraan2 = new Kendaraan();
$kendaraan2->tampil('2');
$kendaraan2->tampil('3');
$kendaraan2->tampil('4');