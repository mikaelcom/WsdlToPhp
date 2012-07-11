<?php
/**
 * Class file for XiMetalsTypeHistoricalMetalQuotes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeHistoricalMetalQuotes
 * @date 08/07/2012
 */
class XiMetalsTypeHistoricalMetalQuotes extends XiMetalsTypeCommon
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
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalCurrencyTypes
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
	 * The MetalQuotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfMetalQuoteItem
	 */
	public $MetalQuotes;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiMetalsTypeMetalTypes Type
	 * @param XiMetalsTypeMetalCurrencyTypes Currency
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiMetalsTypeArrayOfMetalQuoteItem MetalQuotes
	 * @return XiMetalsTypeHistoricalMetalQuotes
	 */
	public function __construct($_Symbol = null,$_Type,$_Currency,$_StartDate = null,$_EndDate = null,$_MetalQuotes = null)
	{
		XiMetalsWsdlClass::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'Currency'=>$_Currency,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'MetalQuotes'=>new XiMetalsTypeArrayOfMetalQuoteItem($_MetalQuotes)));
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
	 * Set Type
	 * @param MetalTypes Type
	 * @return MetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeMetalTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param MetalCurrencyTypes Currency
	 * @return MetalCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMetalsTypeMetalCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeMetalCurrencyTypes
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
	 * Set MetalQuotes
	 * @param ArrayOfMetalQuoteItem MetalQuotes
	 * @return ArrayOfMetalQuoteItem
	 */
	public function setMetalQuotes($_MetalQuotes)
	{
		return ($this->MetalQuotes = $_MetalQuotes);
	}
	/**
	 * Get MetalQuotes
	 * @return XiMetalsTypeArrayOfMetalQuoteItem
	 */
	public function getMetalQuotes()
	{
		return $this->MetalQuotes;
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