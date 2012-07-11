<?php
/**
 * Class file for SOEmailValidationTypeEmailCorrectResult
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeEmailCorrectResult
 * @date 08/07/2012
 */
class SOEmailValidationTypeEmailCorrectResult extends SOEmailValidationWsdlClass
{
	/**
	 * The EmailCorrectInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailValidationTypeEmailCorrectInfo
	 */
	public $EmailCorrectInfo;
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
	 * @param SOEmailValidationTypeEmailCorrectInfo EmailCorrectInfo
	 * @param SOEmailValidationTypeError Error
	 * @return SOEmailValidationTypeEmailCorrectResult
	 */
	public function __construct($_EmailCorrectInfo = null,$_Error = null)
	{
		parent::__construct(array('EmailCorrectInfo'=>$_EmailCorrectInfo,'Error'=>$_Error));
	}
	/**
	 * Set EmailCorrectInfo
	 * @param EmailCorrectInfo EmailCorrectInfo
	 * @return EmailCorrectInfo
	 */
	public function setEmailCorrectInfo($_EmailCorrectInfo)
	{
		return ($this->EmailCorrectInfo = $_EmailCorrectInfo);
	}
	/**
	 * Get EmailCorrectInfo
	 * @return SOEmailValidationTypeEmailCorrectInfo
	 */
	public function getEmailCorrectInfo()
	{
		return $this->EmailCorrectInfo;
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