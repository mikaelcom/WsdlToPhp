<?php
/**
 * Class file for SOLeadEnhancementTypeResultContainer
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementTypeResultContainer
 * @date 06/07/2012
 */
class SOLeadEnhancementTypeResultContainer extends SOLeadEnhancementWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadEnhancementTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOLeadEnhancementTypeError Error
	 * @return SOLeadEnhancementTypeResultContainer
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
	 * @return SOLeadEnhancementTypeError
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