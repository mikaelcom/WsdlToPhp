<?php
/**
 * Class file for XiCurrenciesTypeChange
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeChange
 * @date 08/07/2012
 */
class XiCurrenciesTypeChange extends XiCurrenciesTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeChangeTypes
	 */
	public $Type;
	/**
	 * The Rate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Rate;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * The PercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChange;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeChangeTypes Type
	 * @param double Rate
	 * @param double Change
	 * @param double PercentChange
	 * @return XiCurrenciesTypeChange
	 */
	public function __construct($_Type,$_Rate,$_Change,$_PercentChange)
	{
		XiCurrenciesWsdlClass::__construct(array('Type'=>$_Type,'Rate'=>$_Rate,'Change'=>$_Change,'PercentChange'=>$_PercentChange));
	}
	/**
	 * Set Type
	 * @param ChangeTypes Type
	 * @return ChangeTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiCurrenciesTypeChangeTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiCurrenciesTypeChangeTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Rate
	 * @param double Rate
	 * @return double
	 */
	public function setRate($_Rate)
	{
		return ($this->Rate = $_Rate);
	}
	/**
	 * Get Rate
	 * @return double
	 */
	public function getRate()
	{
		return $this->Rate;
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set PercentChange
	 * @param double PercentChange
	 * @return double
	 */
	public function setPercentChange($_PercentChange)
	{
		return ($this->PercentChange = $_PercentChange);
	}
	/**
	 * Get PercentChange
	 * @return double
	 */
	public function getPercentChange()
	{
		return $this->PercentChange;
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