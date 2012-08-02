<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetListXMLDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetListXMLDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetListXMLDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetAvailableSetListXMLDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetAvailableSetListXMLDSMResult;
	/**
	 * Constructor
	 * @param string GetAvailableSetListXMLDSMResult
	 * @return DirectSmileTypeGetAvailableSetListXMLDSMResponse
	 */
	public function __construct($_GetAvailableSetListXMLDSMResult = null)
	{
		parent::__construct(array('GetAvailableSetListXMLDSMResult'=>$_GetAvailableSetListXMLDSMResult));
	}
	/**
	 * Set GetAvailableSetListXMLDSMResult
	 * @param string GetAvailableSetListXMLDSMResult
	 * @return string
	 */
	public function setGetAvailableSetListXMLDSMResult($_GetAvailableSetListXMLDSMResult)
	{
		return ($this->GetAvailableSetListXMLDSMResult = $_GetAvailableSetListXMLDSMResult);
	}
	/**
	 * Get GetAvailableSetListXMLDSMResult
	 * @return string
	 */
	public function getGetAvailableSetListXMLDSMResult()
	{
		return $this->GetAvailableSetListXMLDSMResult;
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