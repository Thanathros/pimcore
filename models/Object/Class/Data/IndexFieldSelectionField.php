<?php 

class Object_Class_Data_IndexFieldSelectionField extends Object_Class_Data_Textarea {

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = "indexFieldSelectionField";


    public $specificPriceField = false;
    public $showAllFields = false;
    public $considerTenants = false;

    public function setSpecificPriceField($specificPriceField) {
        $this->specificPriceField = $specificPriceField;
    }

    public function getSpecificPriceField() {
        return $this->specificPriceField;
    }

    public function setShowAllFields($showAllFields) {
        $this->showAllFields = $showAllFields;
    }

    public function getShowAllFields() {
        return $this->showAllFields;
    }

    public function setConsiderTenants($considerTenants) {
        $this->considerTenants = $considerTenants;
    }

    public function getConsiderTenants() {
        return $this->considerTenants;
    }


}
