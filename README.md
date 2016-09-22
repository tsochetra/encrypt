# encrypt
PHP class for data encryption with AES 256 CBC

you can use this class for encrypt a data with password and initialization vector to secure the data, and also decrypt this data back

* iv(initialization vector)(string) : 32bytes(32letters)

* pw(password)(string)

How to use

first we need to include this class by using this function include_once("encrypt/AES.php"); //

now you can call this class AES::Encrypt($yourdata, $yourpassword, $youriv); // 

example

--------------------------------------------

$data = "a secure data need to be encrypt";

$pw = "somerandomstring";

$iv = "with32bytesstringwith32bytesstri";

$encryptedData = AES::Encrypt($data, $pw, $iv);

-------------------------------------------------

$decryptedData = AES::Decrypt($encryptedData, $pw, $iv); //the same password and IV
