<?php
/**
 * Class file for XiGlobalHistoricalTypeGetAllCashDividendsByExchange
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetAllCashDividendsByExchange
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetAllCashDividendsByExchange extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeExchangeTypes
	 */
	public $Exchange;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeExchangeTypes Exchange
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiGlobalHistoricalTypeGetAllCashDividendsByExchange
	 */
	public function __construct($_Exchange,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Exchange
	 * @param ExchangeTypes Exchange
	 * @return ExchangeTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiGlobalHistoricalTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiGlobalHistoricalTypeExchangeTypes
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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