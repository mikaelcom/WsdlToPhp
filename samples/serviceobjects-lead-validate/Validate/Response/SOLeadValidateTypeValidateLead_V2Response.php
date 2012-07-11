<?php
/**
 * Class file for SOLeadValidateTypeValidateLead_V2Response
 * @date 06/07/2012
 */
/**
 * Class SOLeadValidateTypeValidateLead_V2Response
 * @date 06/07/2012
 */
class SOLeadValidateTypeValidateLead_V2Response extends SOLeadValidateWsdlClass
{
	/**
	 * The ValidateLead_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadValidateTypeContact_V2
	 */
	public $ValidateLead_V2Result;
	/**
	 * Constructor
	 * @param SOLeadValidateTypeContact_V2 ValidateLead_V2Result
	 * @return SOLeadValidateTypeValidateLead_V2Response
	 */
	public function __construct($_ValidateLead_V2Result = null)
	{
		parent::__construct(array('ValidateLead_V2Result'=>$_ValidateLead_V2Result));
	}
	/**
	 * Set ValidateLead_V2Result
	 * @param Contact_V2 ValidateLead_V2Result
	 * @return Contact_V2
	 */
	public function setValidateLead_V2Result($_ValidateLead_V2Result)
	{
		return ($this->ValidateLead_V2Result = $_ValidateLead_V2Result);
	}
	/**
	 * Get ValidateLead_V2Result
	 * @return SOLeadValidateTypeContact_V2
	 */
	public function getValidateLead_V2Result()
	{
		return $this->ValidateLead_V2Result;
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