<?php
/**
 * Class file for XiCurrenciesTypeHighLowTick
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeHighLowTick
 * @date 08/07/2012
 */
class XiCurrenciesTypeHighLowTick extends XiCurrenciesTypeCommon
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
	 * @var XiCurrenciesTypeHighLowTickTypes
	 */
	public $Type;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeSingleTick
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeSingleTick
	 */
	public $Low;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiCurrenciesTypeHighLowTickTypes Type
	 * @param XiCurrenciesTypeSingleTick High
	 * @param XiCurrenciesTypeSingleTick Low
	 * @return XiCurrenciesTypeHighLowTick
	 */
	public function __construct($_Symbol = null,$_Type,$_High = null,$_Low = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'High'=>$_High,'Low'=>$_Low));
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
	 * @param HighLowTickTypes Type
	 * @return HighLowTickTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiCurrenciesTypeHighLowTickTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiCurrenciesTypeHighLowTickTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set High
	 * @param SingleTick High
	 * @return SingleTick
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return XiCurrenciesTypeSingleTick
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param SingleTick Low
	 * @return SingleTick
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return XiCurrenciesTypeSingleTick
	 */
	public function getLow()
	{
		return $this->Low;
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