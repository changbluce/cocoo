<?php
namespace Custom;

use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Table extends \ActiveRecord\Table implements InputFilterAwareInterface {

	public function setInputFilter(InputFilterInterface $inputFilter) {  }

	public function getInputFilter() { }

	public function getArrayCopy(){
		return $this->attributes();
	}
}
