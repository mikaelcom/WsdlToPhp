<?php
/**
 * Class file for SOEmailValidationTypeEmailValidateResult
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeEmailValidateResult
 * @date 08/07/2012
 */
class SOEmailValidationTypeEmailValidateResult extends SOEmailValidationWsdlClass
{
	/**
	 * The EmailValidateInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateInfo
	 */
	public $EmailValidateInfo;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOEmailValidationTypeEmailValidateInfo EmailValidateInfo
	 * @param SOEmailValidationTypeError Error
	 * @return SOEmailValidationTypeEmailValidateResult
	 */
	public function __construct($_EmailValidateInfo = null,$_Error = null)
	{
		parent::__construct(array('EmailValidateInfo'=>$_EmailValidateInfo,'Error'=>$_Error));
	}
	/**
	 * Set EmailValidateInfo
	 * @param EmailValidateInfo EmailValidateInfo
	 * @return EmailValidateInfo
	 */
	public function setEmailValidateInfo($_EmailValidateInfo)
	{
		return ($this->EmailValidateInfo = $_EmailValidateInfo);
	}
	/**
	 * Get EmailValidateInfo
	 * @return SOEmailValidationTypeEmailValidateInfo
	 */
	public function getEmailValidateInfo()
	{
		return $this->EmailValidateInfo;
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOEmailValidationTypeError
	 */
	public function getError()
	{
		return $this->Error;
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