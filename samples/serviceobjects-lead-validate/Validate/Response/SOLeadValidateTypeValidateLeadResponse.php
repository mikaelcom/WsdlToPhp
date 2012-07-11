<?php
/**
 * Class file for SOLeadValidateTypeValidateLeadResponse
 * @date 06/07/2012
 */
/**
 * Class SOLeadValidateTypeValidateLeadResponse
 * @date 06/07/2012
 */
class SOLeadValidateTypeValidateLeadResponse extends SOLeadValidateWsdlClass
{
	/**
	 * The ValidateLeadResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadValidateTypeContact
	 */
	public $ValidateLeadResult;
	/**
	 * Constructor
	 * @param SOLeadValidateTypeContact ValidateLeadResult
	 * @return SOLeadValidateTypeValidateLeadResponse
	 */
	public function __construct($_ValidateLeadResult = null)
	{
		parent::__construct(array('ValidateLeadResult'=>$_ValidateLeadResult));
	}
	/**
	 * Set ValidateLeadResult
	 * @param Contact ValidateLeadResult
	 * @return Contact
	 */
	public function setValidateLeadResult($_ValidateLeadResult)
	{
		return ($this->ValidateLeadResult = $_ValidateLeadResult);
	}
	/**
	 * Get ValidateLeadResult
	 * @return SOLeadValidateTypeContact
	 */
	public function getValidateLeadResult()
	{
		return $this->ValidateLeadResult;
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