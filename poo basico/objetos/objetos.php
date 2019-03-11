
<?php
 
class Person
{
    public $firstName = 'John';
    public $lastName = 'Doe';
    private $dateOfBirth = '1980-12-01';

 
    public function __construct($fisrtName, $lastName, $dateOfBirth) //creación método constructor
    {
        $this->fisrtName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

 //   $john = new Person("John", "Doe", "1980-12-01"); //declaración de objeto
 
    public function fullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }
 
    public function age()
    {
       Calculate age using $this->dateOfBirth...
        return $age;

    }
}

class person2{

//para acceder a métodos privados fuera de la clase, se deben declarar metodos getters y setters
 public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
 
    public function setDateOfBirth($date)
    {
        $this->dateOfBirth = $date;



    }

$john = new Person("John", "Doe", "1980-12-01"); //con getters y setters ya puedo cambiar los valores con este objeto
 
$john->setDateOfBirth("2002-01-01");




}

