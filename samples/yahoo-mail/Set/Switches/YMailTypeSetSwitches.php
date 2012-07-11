<?php
/**
 * Class file for YMailTypeSetSwitches
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetSwitches
 * @date 02/07/2012
 */
class YMailTypeSetSwitches extends YMailWsdlClass
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
	 * @return YMailTypeSetSwitches
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