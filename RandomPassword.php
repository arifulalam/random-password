<?php
	class RandomPassword{
		function generateCode($characters, $mix) {
			/* list all possible characters, similar looking characters and vowels have been removed */
			$alpha = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';
			$numeric = '0123456789';
			$special = '!@#$%^()[]';

			$alphanumeric = $numeric . $alpha;
			$power = $alphanumeric . $special;

			// Will store the required generated code
			$code = '';

			// Used to loop the while statement
			$i = 0;

			// Will store the required character set for the random code
			$characterSet;

			// Checks which character set is required and sets it to $characterSet
			if($mix === 'alphanumeric'){
				$characterSet = $alphanumeric;
			}else if($mix === 'alpha'){
				$characterSet = $aplha;
			}else if($mix === 'numeric'){
				$characterSet = $numeric;
			}else if($mix === 'mix'){
				$characterSet = $power;
			}

			// Generates new random code and return it
			while ($i < $characters) {
				$code .= substr($characterSet, mt_rand(0, strlen($characterSet)-1), 1);
				$i++;
			}
			return $code;
		}
	}
