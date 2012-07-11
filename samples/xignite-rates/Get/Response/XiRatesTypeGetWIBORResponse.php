<?php
/**
 * Class file for XiRatesTypeGetWIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetWIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetWIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetWIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeWIBORRate
	 */
	public $GetWIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeWIBORRate GetWIBORResult
	 * @return XiRatesTypeGetWIBORResponse
	 */
	public function __construct($_GetWIBORResult = null)
	{
		parent::__construct(array('GetWIBORResult'=>$_GetWIBORResult));
	}
	/**
	 * Set GetWIBORResult
	 * @param WIBORRate GetWIBORResult
	 * @return WIBORRate
	 */
	public function setGetWIBORResult($_GetWIBORResult)
	{
		return ($this->GetWIBORResult = $_GetWIBORResult);
	}
	/**
	 * Get GetWIBORResult
	 * @return XiRatesTypeWIBORRate
	 */
	public function getGetWIBORResult()
	{
		return $this->GetWIBORResult;
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