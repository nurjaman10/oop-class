<?php
class lampu
{
	var $daya;
	var $jenis;
	var $warna;
	public function on()
	{
		return 'sedang dinyalakan';
	}	
	public function off()
	{
		return 'sedang dimatikan';
	}
}