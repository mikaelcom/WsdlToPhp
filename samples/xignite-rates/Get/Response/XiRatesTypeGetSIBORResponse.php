<?php
/**
 * Class file for XiRatesTypeGetSIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetSIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetSIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetSIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSIBORRate
	 */
	public $GetSIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeSIBORRate GetSIBORResult
	 * @return XiRatesTypeGetSIBORResponse
	 */
	public function __construct($_GetSIBORResult = null)
	{
		parent::__construct(array('GetSIBORResult'=>$_GetSIBORResult));
	}
	/**
	 * Set GetSIBORResult
	 * @param SIBORRate GetSIBORResult
	 * @return SIBORRate
	 */
	public function setGetSIBORResult($_GetSIBORResult)
	{
		return ($this->GetSIBORResult = $_GetSIBORResult);
	}
	/**
	 * Get GetSIBORResult
	 * @return XiRatesTypeSIBORRate
	 */
	public function getGetSIBORResult()
	{
		return $this->GetSIBORResult;
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