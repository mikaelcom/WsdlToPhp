<?php
/**
 * Class file for EccEmailValidateTypeValidateEmailResponse
 * @date 03/07/2012
 */
/**
 * Class EccEmailValidateTypeValidateEmailResponse
 * @date 03/07/2012
 */
class EccEmailValidateTypeValidateEmailResponse extends EccEmailValidateWsdlClass
{
	/**
	 * The ValidateEmailResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccEmailValidateTypeValidate
	 */
	public $ValidateEmailResult;
	/**
	 * Constructor
	 * @param EccEmailValidateTypeValidate ValidateEmailResult
	 * @return EccEmailValidateTypeValidateEmailResponse
	 */
	public function __construct($_ValidateEmailResult = null)
	{
		parent::__construct(array('ValidateEmailResult'=>$_ValidateEmailResult));
	}
	/**
	 * Set ValidateEmailResult
	 * @param Validate ValidateEmailResult
	 * @return Validate
	 */
	public function setValidateEmailResult($_ValidateEmailResult)
	{
		return ($this->ValidateEmailResult = $_ValidateEmailResult);
	}
	/**
	 * Get ValidateEmailResult
	 * @return EccEmailValidateTypeValidate
	 */
	public function getValidateEmailResult()
	{
		return $this->ValidateEmailResult;
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