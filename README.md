# encrypt
PHP class for data encryption/decryption with AES 256 CBC

You can use this class for encrypting data with password and initialization vector to secure your data, and also decrypting data back.

* iv(initialization vector)(string) : 32bytes(32letters)

* pw(password)(string)

How to use:


include_once("encrypt/AES.php");


$data = "a secure data need to be encrypt";

$pw = "somerandomstring";

$iv = "with32bytesstringwith32bytesstri";


$encryptedData = AES::Encrypt($data, $pw, $iv);

$decryptedData = AES::Decrypt($encryptedData, $pw, $iv); //the same password and IV
