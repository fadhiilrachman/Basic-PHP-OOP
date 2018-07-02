<?php

// Created by Fadhiil Rachman on 2/7/2018

class Kendaraan {
	public $list;
	public $noKendaraan;
	public $detail;

	public function __construct() {
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

	public function ambilDetail() {
		return $this->detail;
	}

	public function genTabel() {
		if($this->noKendaraan == '2') {
			$this->detail = $this->list[0];
		} elseif ($this->noKendaraan == '3') {
			$this->detail = $this->list[1];
		} elseif ($this->noKendaraan == '4') {
			$this->detail = $this->list[2];
		}
		$h="<p><b>Kendaraan {$this->noKendaraan}:</b><br/>
			Merek: {$this->ambilDetail()['merek']}<br/>
			Jumlah Roda: {$this->ambilDetail()['jmlRoda']}<br/>
			Harga: {$this->ambilDetail()['harga']}<br/>
			Warna: {$this->ambilDetail()['warna']}</p>";
		echo $h;
	}

	public function tampilDetailKendaraan($noKendaraan) {
		$this->noKendaraan = $noKendaraan;
		echo $this->genTabel();
	}
}

$kendaraan2 = new Kendaraan();
$kendaraan2->tampilDetailKendaraan('2');
$kendaraan2->tampilDetailKendaraan('3');
$kendaraan2->tampilDetailKendaraan('4');