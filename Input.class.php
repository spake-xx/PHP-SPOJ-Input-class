<?php
class Input{
	
private $stdin;

	public function __construct(){
	$this->stdin = fopen('php://stdin', 'r');
	}
	
	public function read(){
		//fscanf($this->stdin, "%d", $n);
		$n = fgets($this->stdin);
		return $n; 
	}
	
	public function read_line($ile_liczb){
		$tab;
			$line = fgets($this->stdin);
			$tab[] = explode(" ", $line);

		return $tab;
	}
	
}

;Samuel to ciota

?>
