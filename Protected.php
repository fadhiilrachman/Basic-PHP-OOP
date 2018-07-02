<?php

// Created by Fadhiil Rachman on 2/7/2018

class Kendaraan {
	protected $list;
    protected $noKendaraan;
	protected $detail;
	
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

	protected function ambilDetailKendaraan() {
		return $this->detail;
	}

	protected function buatTabel() {
		if($this->noKendaraan == '2') {
			$this->detail = $this->list[0];
		} elseif ($this->noKendaraan == '3') {
			$this->detail = $this->list[1];
		} elseif ($this->noKendaraan == '4') {
			$this->detail = $this->list[2];
		}
		$h="<p>Kendaraan {$this->noKendaraan}:<table>
		<tbody>
			<tr>
				<td>Merek</td><td>:</td><td>{$this->ambilDetailKendaraan()['merek']}</td>
			</tr>
			<tr>
				<td>Jumlah Roda</td><td>:</td><td>{$this->ambilDetailKendaraan()['jmlRoda']}</td>
			</tr>
			<tr>
				<td>Harga</td><td>:</td><td>{$this->ambilDetailKendaraan()['harga']}</td>
			</tr>
			<tr>
				<td>Warna</td><td>:</td><td>{$this->ambilDetailKendaraan()['warna']}</td>
			</tr>
		</tbody></table></p>";
		echo $h;
	}

	function tampilkanDetail($noKendaraan) {
		$this->noKendaraan = $noKendaraan;
		echo $this->buatTabel();
	}
}

$kendaraan2 = new Kendaraan();
$kendaraan2->tampilkanDetail('2');
$kendaraan2->tampilkanDetail('3');
$kendaraan2->tampilkanDetail('4');