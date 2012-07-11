<?php
/**
 * Class file for XiRatesTypeGetREIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetREIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetREIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetREIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeREIBORRate
	 */
	public $GetREIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeREIBORRate GetREIBORResult
	 * @return XiRatesTypeGetREIBORResponse
	 */
	public function __construct($_GetREIBORResult = null)
	{
		parent::__construct(array('GetREIBORResult'=>$_GetREIBORResult));
	}
	/**
	 * Set GetREIBORResult
	 * @param REIBORRate GetREIBORResult
	 * @return REIBORRate
	 */
	public function setGetREIBORResult($_GetREIBORResult)
	{
		return ($this->GetREIBORResult = $_GetREIBORResult);
	}
	/**
	 * Get GetREIBORResult
	 * @return XiRatesTypeREIBORRate
	 */
	public function getGetREIBORResult()
	{
		return $this->GetREIBORResult;
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