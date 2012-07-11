<?php
/**
 * Class file for SOLeadValidateTypeResultContainer
 * @date 06/07/2012
 */
/**
 * Class SOLeadValidateTypeResultContainer
 * @date 06/07/2012
 */
class SOLeadValidateTypeResultContainer extends SOLeadValidateWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadValidateTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOLeadValidateTypeError Error
	 * @return SOLeadValidateTypeResultContainer
	 */
	public function __construct($_Error = null)
	{
		parent::__construct(array('Error'=>$_Error));
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
	 * @return SOLeadValidateTypeError
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