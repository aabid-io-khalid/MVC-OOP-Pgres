<?php

namespace App\Core;

class Validation {
    protected $errors = [];

    public function validate($data, $rules) {
        foreach ($rules as $field => $ruleSet) {
            foreach ($ruleSet as $rule) {
                if ($rule === 'required' && empty($data[$field])) {
                    $this->errors[$field][] = "$field is required.";
                }
                if ($rule === 'email' && !filter_var($data[$field], FILTER_VALIDATE_EMAIL)) {
                    $this->errors[$field][] = "$field must be a valid email.";
                }
                if (str_starts_with($rule, 'min:')) {
                    $min = explode(':', $rule)[1];
                    if (strlen($data[$field]) < $min) {
                        $this->errors[$field][] = "$field must be at least $min characters.";
                    }
                }
                if (str_starts_with($rule, 'max:')) {
                    $max = explode(':', $rule)[1];
                    if (strlen($data[$field]) > $max) {
                        $this->errors[$field][] = "$field must not exceed $max characters.";
                    }
                }
            }
        }
        return empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }
}
