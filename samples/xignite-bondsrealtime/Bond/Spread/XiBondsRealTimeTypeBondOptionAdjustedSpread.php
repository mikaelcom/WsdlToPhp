<?php
/**
 * Class file for XiBondsRealTimeTypeBondOptionAdjustedSpread
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeBondOptionAdjustedSpread
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeBondOptionAdjustedSpread extends XiBondsRealTimeWsdlClass
{
	/**
	 * The ShortName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShortName;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The PriceSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriceSource;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The OptionAdjustedSpread
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OptionAdjustedSpread;
	/**
	 * The OptionAdjustedSpreadDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OptionAdjustedSpreadDate;
	/**
	 * The OptionAdjustedSpreadTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OptionAdjustedSpreadTime;
	/**
	 * Constructor
	 * @param string ShortName
	 * @param string Symbol
	 * @param string PriceSource
	 * @param string Currency
	 * @param double OptionAdjustedSpread
	 * @param string OptionAdjustedSpreadDate
	 * @param string OptionAdjustedSpreadTime
	 * @return XiBondsRealTimeTypeBondOptionAdjustedSpread
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_OptionAdjustedSpread,$_OptionAdjustedSpreadDate = null,$_OptionAdjustedSpreadTime = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'OptionAdjustedSpread'=>$_OptionAdjustedSpread,'OptionAdjustedSpreadDate'=>$_OptionAdjustedSpreadDate,'OptionAdjustedSpreadTime'=>$_OptionAdjustedSpreadTime));
	}
	/**
	 * Set ShortName
	 * @param string ShortName
	 * @return string
	 */
	public function setShortName($_ShortName)
	{
		return ($this->ShortName = $_ShortName);
	}
	/**
	 * Get ShortName
	 * @return string
	 */
	public function getShortName()
	{
		return $this->ShortName;
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
	 * Set PriceSource
	 * @param string PriceSource
	 * @return string
	 */
	public function setPriceSource($_PriceSource)
	{
		return ($this->PriceSource = $_PriceSource);
	}
	/**
	 * Get PriceSource
	 * @return string
	 */
	public function getPriceSource()
	{
		return $this->PriceSource;
	}
	/**
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set OptionAdjustedSpread
	 * @param double OptionAdjustedSpread
	 * @return double
	 */
	public function setOptionAdjustedSpread($_OptionAdjustedSpread)
	{
		return ($this->OptionAdjustedSpread = $_OptionAdjustedSpread);
	}
	/**
	 * Get OptionAdjustedSpread
	 * @return double
	 */
	public function getOptionAdjustedSpread()
	{
		return $this->OptionAdjustedSpread;
	}
	/**
	 * Set OptionAdjustedSpreadDate
	 * @param string OptionAdjustedSpreadDate
	 * @return string
	 */
	public function setOptionAdjustedSpreadDate($_OptionAdjustedSpreadDate)
	{
		return ($this->OptionAdjustedSpreadDate = $_OptionAdjustedSpreadDate);
	}
	/**
	 * Get OptionAdjustedSpreadDate
	 * @return string
	 */
	public function getOptionAdjustedSpreadDate()
	{
		return $this->OptionAdjustedSpreadDate;
	}
	/**
	 * Set OptionAdjustedSpreadTime
	 * @param string OptionAdjustedSpreadTime
	 * @return string
	 */
	public function setOptionAdjustedSpreadTime($_OptionAdjustedSpreadTime)
	{
		return ($this->OptionAdjustedSpreadTime = $_OptionAdjustedSpreadTime);
	}
	/**
	 * Get OptionAdjustedSpreadTime
	 * @return string
	 */
	public function getOptionAdjustedSpreadTime()
	{
		return $this->OptionAdjustedSpreadTime;
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