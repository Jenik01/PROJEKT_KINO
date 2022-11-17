<?php

$country = $city = $name = $zip_code = $email = $phone = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $country= validateCountry($_POST["country"]);
    $city= validateCity($_POST["city"]);
    $zip_code= validateZip_code($_POST["zip_code"]);
    $name = validateName($_POST["name"]);
    $email = validateEmail($_POST["email"]);
    $phone = validatePhone($_POST["phone"]);
    
   
    
   
}
echo $country."<br>";
echo $city."<br>";
echo $zip_code."<br>";
echo $phone."<br>";
echo $name."<br>";
echo $email."<br>";




function validateName($phone)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Telefon je prazdný!");
    }
    return $data;
}





function validateName($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Jmeno je prazdne!");
    }
    return $data;
}




function validateEmail($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Email je prazdny!");
    }
    if(!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Email je neplatny!");
    }
    return $data;
}

/*function validatePassword($data)
{
    $data = validateInput($data);
    if ($data === "" || $data === null)
    {
        throw new Exception("Heslo je prazdne!");
    }
    if (count(str_split($data)) < 16 || count(str_split($data)) > 100)
    {
        throw new Exception("Heslo je prilis kratke nebo prilis dlouhe!");
    }
    if (!preg_match('/[A-Z]/', $data)){
        throw new Exception("Heslo neobsahuje velka pismena!");
    }
    if (!preg_match('~[0-9]+~', $data)) {
        throw new Exception("Heslo neobsahuje cisla!");
    }
    if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $data))
    {
        throw new Exception("Heslo neobsahuje specialni znaky!");
    }
    return $data;*/
}

/*function validateSex($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Pohlavi je prazdne!");
    }
    return $data;
}*/

/*function validateAge($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Vek je prazdny!");
    }
    if($data < 18){
        throw new Exception("Nezletily");
    }
    return $data;
}*/

/*function validateDateOfBirth($date, $age)
{
    $date = validateInput($date);
    if(!isset($date))
    {
        throw new Exception("Datum narozeni je prazdny!");
    }
    if(date('Y') - date('Y', strtotime($date)) != $age){
        throw new Exception("Vek a datum narozeni se lisi");
    }
    return $date;
}*/

function validateInput($data)
{
    $data = trim($data); // odstrani mezery na zacatku i konci vstupu
    $data = stripslashes($data); // odstrani zpetna lomitka
    $data = htmlspecialchars($data); // povoli specialni znaky
    return $data;
}

?>