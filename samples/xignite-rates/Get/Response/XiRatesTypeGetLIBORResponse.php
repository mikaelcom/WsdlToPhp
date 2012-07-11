<?php
/**
 * Class file for XiRatesTypeGetLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetLIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORRate
	 */
	public $GetLIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeLIBORRate GetLIBORResult
	 * @return XiRatesTypeGetLIBORResponse
	 */
	public function __construct($_GetLIBORResult = null)
	{
		parent::__construct(array('GetLIBORResult'=>$_GetLIBORResult));
	}
	/**
	 * Set GetLIBORResult
	 * @param LIBORRate GetLIBORResult
	 * @return LIBORRate
	 */
	public function setGetLIBORResult($_GetLIBORResult)
	{
		return ($this->GetLIBORResult = $_GetLIBORResult);
	}
	/**
	 * Get GetLIBORResult
	 * @return XiRatesTypeLIBORRate
	 */
	public function getGetLIBORResult()
	{
		return $this->GetLIBORResult;
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