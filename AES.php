<?php

class AES {
	// function encrypt with aes256
	public function Encrypt($string, $pw, $iv) {
		return openssl_encrypt($string, "aes256", $pw, false, $iv);
	}

	// function decrypt with aes 256
	public function Decrypt($string, $pw, $iv) {
		return openssl_decrypt($string, "aes256", $pw, false, $iv);
	}
}

?>
