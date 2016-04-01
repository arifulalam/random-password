<?php
class RandomPassword{
	/* list all possible characters, similar looking characters and vowels have been removed */
	public $alpha = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';
	public $numeric = '0123456789';
	public $special = '!@#$%^()[]';
	
	public $code;
	public $alphanumeric;
	public $power;
	public $characterSet;
	
	function __construct($characters = 12, $mix = 'alphanumeric') {
		$this->alphanumeric = $this->numeric . $this->alpha;
		$this->power = $this->alphanumeric . $this->special;

		// Used to loop the while statement
		$i = 0;

		// Checks which character set is d and sets it to $characterSet
		if($mix === 'alphanumeric'){
			$this->characterSet = $this->alphanumeric;
		}else if($mix === 'alpha'){
			$this->characterSet = $this->alpha;
		}else if($mix === 'numeric'){
			$this->characterSet = $this->numeric;
		}else if($mix === 'mix'){
			$this->characterSet = $this->power;
		}

		// Generates new random code and return it
		while ($i < $characters) {
			$this->code .= substr($this->characterSet, mt_rand(0, strlen($this->characterSet)-1), 1);
			$i++;
		}
	}
	
	function __toString(){
		return $this->code;	
	}
}
