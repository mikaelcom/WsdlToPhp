<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetListXMLAuthResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetListXMLAuthResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetListXMLAuthResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableSetListXMLAuthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableSetListXMLAuthResult;
	/**
	 * Constructor
	 * @param string GetAvailableSetListXMLAuthResult
	 * @return DirectSmileTypeGetAvailableSetListXMLAuthResponse
	 */
	public function __construct($_GetAvailableSetListXMLAuthResult = null)
	{
		parent::__construct(array('GetAvailableSetListXMLAuthResult'=>$_GetAvailableSetListXMLAuthResult));
	}
	/**
	 * Set GetAvailableSetListXMLAuthResult
	 * @param string GetAvailableSetListXMLAuthResult
	 * @return string
	 */
	public function setGetAvailableSetListXMLAuthResult($_GetAvailableSetListXMLAuthResult)
	{
		return ($this->GetAvailableSetListXMLAuthResult = $_GetAvailableSetListXMLAuthResult);
	}
	/**
	 * Get GetAvailableSetListXMLAuthResult
	 * @return string
	 */
	public function getGetAvailableSetListXMLAuthResult()
	{
		return $this->GetAvailableSetListXMLAuthResult;
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