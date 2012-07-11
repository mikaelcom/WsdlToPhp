<?php
/**
 * Class file for XiRatesTypeGetHistoricalLIBORResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHistoricalLIBORResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetHistoricalLIBORResponse extends XiRatesWsdlClass
{
	/**
	 * The GetHistoricalLIBORResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHistoricalLIBORRates
	 */
	public $GetHistoricalLIBORResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalLIBORRates GetHistoricalLIBORResult
	 * @return XiRatesTypeGetHistoricalLIBORResponse
	 */
	public function __construct($_GetHistoricalLIBORResult = null)
	{
		parent::__construct(array('GetHistoricalLIBORResult'=>$_GetHistoricalLIBORResult));
	}
	/**
	 * Set GetHistoricalLIBORResult
	 * @param HistoricalLIBORRates GetHistoricalLIBORResult
	 * @return HistoricalLIBORRates
	 */
	public function setGetHistoricalLIBORResult($_GetHistoricalLIBORResult)
	{
		return ($this->GetHistoricalLIBORResult = $_GetHistoricalLIBORResult);
	}
	/**
	 * Get GetHistoricalLIBORResult
	 * @return XiRatesTypeHistoricalLIBORRates
	 */
	public function getGetHistoricalLIBORResult()
	{
		return $this->GetHistoricalLIBORResult;
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