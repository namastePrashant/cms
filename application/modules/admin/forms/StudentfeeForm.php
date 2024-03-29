<?php

class Admin_Form_StudentfeeForm extends Zend_Form {

    public function init() {

        $feeid = new Zend_Form_Element_Hidden("fee_id");

        $feetitle = new Zend_Form_Element_Text("fee_title");
        $feetitle->setLabel("Fee Title")
                ->setAttribs(array('size' => 30, 'class' => 'form-text'))
                ->setRequired(true);
        
        $studentmodel = new Admin_Model_Student();
        $option = $studentmodel->getKeysAndValues();


        $student = new Zend_Form_Element_Select("student_id");
        $student->setLabel("Student")
                ->addMultiOptions($option)
                ->setAttribs(array('class' => 'form-select'));

        $amount = new Zend_Form_Element_Text("amount");
        $amount->setLabel("amount")
                ->setAttribs(array('size' => 30, 'class' => 'form-text'))
                ->setRequired(true);

        $due = new Zend_Form_Element_Text("due");
        $due->setLabel("Due")
                ->setAttribs(array('size' => 30, 'class' => 'form-text'))
                ->setRequired(true);

        $submit = new Zend_Form_Element_Submit("submit");
        $submit->setLabel("Submit");

        $this->addElements(array(
            $feeid,
            $student,
            $feetitle,
            $amount,
            $due,
            $submit));
    }

}