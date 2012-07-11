<?php
/**
 * Class file for XWeb1003TypeGetMISMOApplicationRequest
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeGetMISMOApplicationRequest
 * @date 09/07/2012
 */
class XWeb1003TypeGetMISMOApplicationRequest extends XWeb1003WsdlClass
{
	/**
	 * The Application_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Application_ID;
	/**
	 * Constructor
	 * @param string Application_ID
	 * @return XWeb1003TypeGetMISMOApplicationRequest
	 */
	public function __construct($_Application_ID)
	{
		parent::__construct(array('Application_ID'=>$_Application_ID));
	}
	/**
	 * Set Application_ID
	 * @param string Application_ID
	 * @return string
	 */
	public function setApplication_ID($_Application_ID)
	{
		return ($this->Application_ID = $_Application_ID);
	}
	/**
	 * Get Application_ID
	 * @return string
	 */
	public function getApplication_ID()
	{
		return $this->Application_ID;
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