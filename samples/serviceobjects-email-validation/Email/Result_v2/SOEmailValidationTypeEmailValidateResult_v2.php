<?php
/**
 * Class file for SOEmailValidationTypeEmailValidateResult_v2
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeEmailValidateResult_v2
 * @date 08/07/2012
 */
class SOEmailValidationTypeEmailValidateResult_v2 extends SOEmailValidationWsdlClass
{
	/**
	 * The EmailValidateInfo_v2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailValidateInfo_v2
	 */
	public $EmailValidateInfo_v2;
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
	 * @param SOEmailValidationTypeEmailValidateInfo_v2 EmailValidateInfo_v2
	 * @param SOEmailValidationTypeError Error
	 * @return SOEmailValidationTypeEmailValidateResult_v2
	 */
	public function __construct($_EmailValidateInfo_v2 = null,$_Error = null)
	{
		parent::__construct(array('EmailValidateInfo_v2'=>$_EmailValidateInfo_v2,'Error'=>$_Error));
	}
	/**
	 * Set EmailValidateInfo_v2
	 * @param EmailValidateInfo_v2 EmailValidateInfo_v2
	 * @return EmailValidateInfo_v2
	 */
	public function setEmailValidateInfo_v2($_EmailValidateInfo_v2)
	{
		return ($this->EmailValidateInfo_v2 = $_EmailValidateInfo_v2);
	}
	/**
	 * Get EmailValidateInfo_v2
	 * @return SOEmailValidationTypeEmailValidateInfo_v2
	 */
	public function getEmailValidateInfo_v2()
	{
		return $this->EmailValidateInfo_v2;
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