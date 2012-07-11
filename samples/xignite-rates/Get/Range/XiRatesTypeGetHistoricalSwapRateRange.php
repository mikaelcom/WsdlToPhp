<?php
/**
 * Class file for XiRatesTypeGetHistoricalSwapRateRange
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHistoricalSwapRateRange
 * @date 08/07/2012
 */
class XiRatesTypeGetHistoricalSwapRateRange extends XiRatesWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSwapRateTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSwapCurrencyTypes
	 */
	public $Currency;
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
	 * @param XiRatesTypeSwapRateTypes Type
	 * @param XiRatesTypeSwapCurrencyTypes Currency
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiRatesTypeGetHistoricalSwapRateRange
	 */
	public function __construct($_Type,$_Currency,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Type
	 * @param SwapRateTypes Type
	 * @return SwapRateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeSwapRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeSwapRateTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param SwapCurrencyTypes Currency
	 * @return SwapCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiRatesTypeSwapCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeSwapCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
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