class Student {
    // Attributes
    public $studentID;
    public $firstName;
    public $lastName;
    public $gender;
    public $dob;
    public $address;
    public $city;
    public $country;
    public $tel;    

    // Constructor
    public function __construct($id, $fname, $lname, $gender, $dob, $address, $city, $country, $tel) {
        $this->studentID = $id;
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->address = $address;
        $this->city = $city;
        $this->country = $country;
        $this->tel = $tel;    
    }

}
