<?php
/**
 * Class file for SOFraudProtectionTypeArrayOfValidation
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeArrayOfValidation
 * @date 08/07/2012
 */
class SOFraudProtectionTypeArrayOfValidation extends SOFraudProtectionWsdlClass
{
	/**
	 * The Validation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOFraudProtectionTypeValidation
	 */
	public $Validation;
	/**
	 * Constructor
	 * @param SOFraudProtectionTypeValidation Validation
	 * @return SOFraudProtectionTypeArrayOfValidation
	 */
	public function __construct($_Validation = null)
	{
		parent::__construct(array('Validation'=>$_Validation));
	}
	/**
	 * Set Validation
	 * @param Validation Validation
	 * @return Validation
	 */
	public function setValidation($_Validation)
	{
		return ($this->Validation = $_Validation);
	}
	/**
	 * Get Validation
	 * @return SOFraudProtectionTypeValidation
	 */
	public function getValidation()
	{
		return $this->Validation;
	}
	/**
	 * Returns the current element
	 * @see SOFraudProtectionWsdlClass::current()
	 * @return SOFraudProtectionTypeValidation
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOFraudProtectionWsdlClass::item()
	 * @param int
	 * @return SOFraudProtectionTypeValidation
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOFraudProtectionWsdlClass::first()
	 * @return SOFraudProtectionTypeValidation
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOFraudProtectionWsdlClass::last()
	 * @return SOFraudProtectionTypeValidation
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOFraudProtectionWsdlClass::offsetGet()
	 * @param int
	 * @return SOFraudProtectionTypeValidation
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Validation'
	 */
	public function getAttributeName()
	{
		return 'Validation';
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>