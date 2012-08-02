<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetListXMLResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetListXMLResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetListXMLResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableSetListXMLResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableSetListXMLResult;
	/**
	 * Constructor
	 * @param string GetAvailableSetListXMLResult
	 * @return DirectSmileTypeGetAvailableSetListXMLResponse
	 */
	public function __construct($_GetAvailableSetListXMLResult = null)
	{
		parent::__construct(array('GetAvailableSetListXMLResult'=>$_GetAvailableSetListXMLResult));
	}
	/**
	 * Set GetAvailableSetListXMLResult
	 * @param string GetAvailableSetListXMLResult
	 * @return string
	 */
	public function setGetAvailableSetListXMLResult($_GetAvailableSetListXMLResult)
	{
		return ($this->GetAvailableSetListXMLResult = $_GetAvailableSetListXMLResult);
	}
	/**
	 * Get GetAvailableSetListXMLResult
	 * @return string
	 */
	public function getGetAvailableSetListXMLResult()
	{
		return $this->GetAvailableSetListXMLResult;
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