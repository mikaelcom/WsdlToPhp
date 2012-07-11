<?php
/**
 * Class file for XiGlobalrealtimeTypeGlobalTickSet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGlobalTickSet
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGlobalTickSet extends XiGlobalrealtimeTypeCommon
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
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The MarketIdentificationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MarketIdentificationCode;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The Ticks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeArrayOfTick
	 */
	public $Ticks;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string MarketIdentificationCode
	 * @param string Currency
	 * @param XiGlobalrealtimeTypeArrayOfTick Ticks
	 * @return XiGlobalrealtimeTypeGlobalTickSet
	 */
	public function __construct($_Symbol = null,$_Name = null,$_MarketIdentificationCode = null,$_Currency = null,$_Ticks = null)
	{
		XiGlobalrealtimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'MarketIdentificationCode'=>$_MarketIdentificationCode,'Currency'=>$_Currency,'Ticks'=>new XiGlobalrealtimeTypeArrayOfTick($_Ticks)));
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
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set MarketIdentificationCode
	 * @param string MarketIdentificationCode
	 * @return string
	 */
	public function setMarketIdentificationCode($_MarketIdentificationCode)
	{
		return ($this->MarketIdentificationCode = $_MarketIdentificationCode);
	}
	/**
	 * Get MarketIdentificationCode
	 * @return string
	 */
	public function getMarketIdentificationCode()
	{
		return $this->MarketIdentificationCode;
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
	 * Set Ticks
	 * @param ArrayOfTick Ticks
	 * @return ArrayOfTick
	 */
	public function setTicks($_Ticks)
	{
		return ($this->Ticks = $_Ticks);
	}
	/**
	 * Get Ticks
	 * @return XiGlobalrealtimeTypeArrayOfTick
	 */
	public function getTicks()
	{
		return $this->Ticks;
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