<?php



class Event_Validate
{
    private $_passed = false;
    private $_errors = array();
    private $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array())
    {
        foreach ($items as $item => $rules) {

            foreach ($rules as $rule => $rule_value) {
                $value = $source[$item];
                $item = escape($item);
                $item_name = $rules['ett_name'];
                $item_ = $rules['em_name'];
                if ($rule === 'required' && empty($value)) {
                    $this->addError("{$item_name} is required");
                } else if (!empty($value)) {
                    switch ($rule) {
                        case 'min':
                            if (strlen($value) < $rule_value) {
                                $this->addError("{$item_name} must be a minimum of {$rule_value} characters.");
                            }
                            break;

                        case 'max':
                            if (strlen($value) > $rule_value) {
                                $this->addError("{$item_name} must be a maximum of {$rule_value} characters.");
                            }
                            break;
                        case 'matches':
                            if ($value != $source[$rule_value]) {
                                $this->addError("{$item_name} is not Matched.");
                            }
                            break;
                        case 'unique':
                            $check = $this->_db->get($rule_value, array($item_, '=', $value));
                            if ($check->count()) {
                                $this->addError("{$item_name} already exists.");
                            }
                            break;
                    }
                }
            }
        }

        if (empty($this->_errors)) {
            $this->_passed = true;
        }
    }


    private function addError($error)
    {
        $this->_errors[] = $error;
    }

    public function errors()
    {
        return $this->_errors;
    }

    public function passed()
    {
        return $this->_passed;
    }
}
