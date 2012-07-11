<?php
/**
 * Class file for SOLeadEnhancementPlusTypeResultContainer
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementPlusTypeResultContainer
 * @date 06/07/2012
 */
class SOLeadEnhancementPlusTypeResultContainer extends SOLeadEnhancementPlusWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadEnhancementPlusTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOLeadEnhancementPlusTypeError Error
	 * @return SOLeadEnhancementPlusTypeResultContainer
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
	 * @return SOLeadEnhancementPlusTypeError
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