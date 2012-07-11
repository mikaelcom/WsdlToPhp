<?php
/**
 * Class file for YMailTypeSwitches
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSwitches
 * @date 02/07/2012
 */
class YMailTypeSwitches extends YMailWsdlClass
{
	/**
	 * The noFormWarning
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $noFormWarning;
	/**
	 * Constructor
	 * @param boolean noFormWarning
	 * @return YMailTypeSwitches
	 */
	public function __construct($_noFormWarning = null)
	{
		parent::__construct(array('noFormWarning'=>$_noFormWarning));
	}
	/**
	 * Set noFormWarning
	 * @param boolean noFormWarning
	 * @return boolean
	 */
	public function setNoFormWarning($_noFormWarning)
	{
		return ($this->noFormWarning = $_noFormWarning);
	}
	/**
	 * Get noFormWarning
	 * @return boolean
	 */
	public function getNoFormWarning()
	{
		return $this->noFormWarning;
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