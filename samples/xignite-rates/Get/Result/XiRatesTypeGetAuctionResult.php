<?php
/**
 * Class file for XiRatesTypeGetAuctionResult
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetAuctionResult
 * @date 08/07/2012
 */
class XiRatesTypeGetAuctionResult extends XiRatesWsdlClass
{
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * Constructor
	 * @param string CUSIP
	 * @return XiRatesTypeGetAuctionResult
	 */
	public function __construct($_CUSIP = null)
	{
		parent::__construct(array('CUSIP'=>$_CUSIP));
	}
	/**
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
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