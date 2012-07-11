<?php
/**
 * Class file for XiCurrenciesTypeHistoricalCrossRates
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeHistoricalCrossRates
 * @date 08/07/2012
 */
class XiCurrenciesTypeHistoricalCrossRates extends XiCurrenciesTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrency
	 */
	public $From;
	/**
	 * The To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrency
	 */
	public $To;
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
	 * The CrossRates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfCrossRateItem
	 */
	public $CrossRates;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiCurrenciesTypeCurrency From
	 * @param XiCurrenciesTypeCurrency To
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiCurrenciesTypeArrayOfCrossRateItem CrossRates
	 * @return XiCurrenciesTypeHistoricalCrossRates
	 */
	public function __construct($_Symbol = null,$_From = null,$_To = null,$_StartDate = null,$_EndDate = null,$_CrossRates = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Symbol'=>$_Symbol,'From'=>$_From,'To'=>$_To,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'CrossRates'=>new XiCurrenciesTypeArrayOfCrossRateItem($_CrossRates)));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set From
	 * @param Currency From
	 * @return Currency
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return XiCurrenciesTypeCurrency
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set To
	 * @param Currency To
	 * @return Currency
	 */
	public function setTo($_To)
	{
		return ($this->To = $_To);
	}
	/**
	 * Get To
	 * @return XiCurrenciesTypeCurrency
	 */
	public function getTo()
	{
		return $this->To;
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
	 * Set CrossRates
	 * @param ArrayOfCrossRateItem CrossRates
	 * @return ArrayOfCrossRateItem
	 */
	public function setCrossRates($_CrossRates)
	{
		return ($this->CrossRates = $_CrossRates);
	}
	/**
	 * Get CrossRates
	 * @return XiCurrenciesTypeArrayOfCrossRateItem
	 */
	public function getCrossRates()
	{
		return $this->CrossRates;
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