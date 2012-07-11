<?php
/**
 * Class file for XWeb1003TypeConvertMISMOtoFannieMaeRequest
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeConvertMISMOtoFannieMaeRequest
 * @date 09/07/2012
 */
class XWeb1003TypeConvertMISMOtoFannieMaeRequest extends XWeb1003WsdlClass
{
	/**
	 * The Application
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Application;
	/**
	 * Constructor
	 * @param string Application
	 * @return XWeb1003TypeConvertMISMOtoFannieMaeRequest
	 */
	public function __construct($_Application)
	{
		parent::__construct(array('Application'=>$_Application));
	}
	/**
	 * Set Application
	 * @param string Application
	 * @return string
	 */
	public function setApplication($_Application)
	{
		return ($this->Application = $_Application);
	}
	/**
	 * Get Application
	 * @return string
	 */
	public function getApplication()
	{
		return $this->Application;
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