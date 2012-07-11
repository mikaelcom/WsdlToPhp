<?php
/**
 * Class file for XWeb1003TypeLoadApplicationsByDateRangeResponse
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLoadApplicationsByDateRangeResponse
 * @date 09/07/2012
 */
class XWeb1003TypeLoadApplicationsByDateRangeResponse extends XWeb1003WsdlClass
{
	/**
	 * The Application
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWeb1003TypeApplication
	 */
	public $Application;
	/**
	 * Constructor
	 * @param XWeb1003TypeApplication Application
	 * @return XWeb1003TypeLoadApplicationsByDateRangeResponse
	 */
	public function __construct($_Application = null)
	{
		parent::__construct(array('Application'=>$_Application));
	}
	/**
	 * Set Application
	 * @param Application Application
	 * @return Application
	 */
	public function setApplication($_Application)
	{
		return ($this->Application = $_Application);
	}
	/**
	 * Get Application
	 * @return XWeb1003TypeApplication
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