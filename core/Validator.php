<?php
namespace core;
class Validator {
    private $data;
    private $errors = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function validate($rules) {
        foreach ($rules as $field => $rule) {
            $ruleArray = explode('|', $rule);

            foreach ($ruleArray as $singleRule) {
                $this->applyRule($field, $singleRule);
            }
        }

        return $this->errors;
    }

    private function applyRule($field, $rule) {
        $params = explode(':', $rule);
        $methodName = 'validate' . ucfirst($params[0]);

        if (method_exists($this, $methodName)) {
            $this->$methodName($field, $params);
        } else {
            $this->addError($field, "Unknown validation rule: {$params[0]}");
        }
    }

    private function validateMin($field, $params) {
        //dd($params);
        $value = $this->data[$field] ?? null;
        $minValue = $params[0] ?? null;
        $minCount = $params[1] ?? null;
        $count = strlen($value);
        if ($count < $minCount) {
            $this->addError($field, "The $field must be at least $minCount.");
        }
    }

    private function validateMax($field, $params) {
        $value = $this->data[$field] ?? null;
        $maxValue = $params[0] ?? null;

        if ($value > $maxValue) {
            $this->addError($field, "The $field must be at most $maxValue.");
        }
    }

    private function validateSame($field, $params) {
        
        $value = $this->data[$field] ?? null;
        $otherRule = $params[0] ?? null;
        $otherField = $params[1] ?? null;
        $otherValue = $this->data[$otherField] ?? null;
        //dd($otherValue);
        if ($value !== $otherValue) {
            $this->addError($field, "The $field and $otherField must match.");
        }
    }


    private function validateRequired($field, $params) {
        $value = $this->data[$field] ?? null;

        if (empty($value)) {
            $this->addError($field, "The $field field is required.");
        }
    }

    private function validateEmail($field, $params) {
        $value = $this->data[$field] ?? null;

        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->addError($field, "The $field must be a valid email address.");
        }
    }

    private function validatePhone($field, $params) {
        $value = $this->data[$field] ?? null;

        // Customize the phone number validation logic based on your needs
        // For simplicity, let's assume a valid phone number is numeric and 10 digits long
        if (!is_numeric($value) || strlen($value) >= 15) {
            $this->addError($field, "The $field must be a valid 10-digit phone number.");
        }
    }


    private function addError($field, $message) {
        $this->errors[$field][] = $message;
    }
}

// Example of using the Validator class
// $dataToValidate = [
//     'email' => 'example@email.com',
//     'text' => 'Sample Text',
//     'password' => 'password123',
//     'confirm_password' => 'password123',
// ];

// $validator = new Validator($dataToValidate);

// $rules = [
//     'email' => 'required|email',
//     'text' => 'required',
//     'password' => 'required|min:8',
//     'confirm_password' => 'required|same:password',
// ];

// $errors = $validator->validate($rules);

// Display errors
// if (!empty($errors)) {
//     foreach ($errors as $field => $fieldErrors) {
//         foreach ($fieldErrors as $error) {
//             echo "$field: $error<br>";
//         }
//     }
// } else {
//     echo "Validation successful!";
// }

?>
