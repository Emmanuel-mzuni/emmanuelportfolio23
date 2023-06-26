<?php 
declare(strict_types = 1);

namespace Services;

trait Validations {

	protected $valid_data  = [];
	protected $invalid_data = [];
	

	protected function VALIDATE_STRING($value, $field_name)
	{
      if ($value == '' || $value == NULL) {
        
        $this->invalid_data[$field_name] = $field_name." cannot be empty.";
        return $this->invalid_data[$field_name];

      } elseif(strlen($value) < 1){

        $this->invalid_data[$field_name] = $field_name." cannot be less than 2.";
        return $this->invalid_data[$field_name];
        
      } elseif (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $value)) {

        $this->invalid_data[$field_name] = $field_name." cannot contain special characters.";
        return $this->invalid_data[$field_name];

      } elseif (is_numeric($value)) {

        $this->invalid_data[$field_name] = $field_name." cannot contain digits.";
        return $this->invalid_data[$field_name];

      } else {

        array_push($this->valid_data, $value);
    
      }
  }
  protected function VALIDATE_RAND_VAL($value, $field_name)
	{
      if ($value == '' || $value == NULL) {
        
        $this->invalid_data[$field_name] = $field_name." cannot be empty.";
        return $this->invalid_data[$field_name];

      } elseif(strlen($value) < 1){

        $this->invalid_data[$field_name] = $field_name." cannot be less than 2.";
        return $this->invalid_data[$field_name];
        
      } else {

        array_push($this->valid_data, $value);
    
      }
  }

    protected function VALIDATE_EMAIL($email)
    {
        if ($email == '' || $email == NULL) {

          $this->invalid_data['email'] = "Email cannot be empty.";
          return $this->invalid_data['email'];

        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

          $this->invalid_data['email'] = "Invalid Email.";
          return $this->invalid_data['email'];

        } else {

          array_push($this->valid_data, $email);
      
        }
    }

    protected function VALIDATE_NUM($num)
    {
        if (!is_numeric($num) && $num == NULL) {

          array_push($this->valid_data, $num);

        } elseif(!is_numeric($num)) {

          $this->invalid_data['num'] = "This field accepts digits only.";
          return $this->invalid_data['num'];
      
        } else {
          array_push($this->valid_data, $num);
        }
    }

    protected function VALIDATE_PASSWORD($password)
    {
        if ($password == '' || $password == NULL) {

             $this->invalid_data['password'] = "Password cannot be empty";
             return $this->invalid_data['password'];

        } elseif (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {

             $this->invalid_data['password'] = "Provide at least one special character";
             return $this->invalid_data['password'];

        } else {

            array_push($this->valid_data, $password);
         
        }
    }
  }