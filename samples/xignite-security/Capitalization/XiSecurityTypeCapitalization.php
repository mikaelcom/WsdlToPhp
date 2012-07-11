<?php
/**
 * Class file for XiSecurityTypeCapitalization
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeCapitalization
 * @date 08/07/2012
 */
class XiSecurityTypeCapitalization extends XiSecurityTypeCommon
{
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The SharesOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SharesOutstanding;
	/**
	 * The EndOfDayPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EndOfDayPrice;
	/**
	 * The MarketCap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketCap;
	/**
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volume;
	/**
	 * Constructor
	 * @param string Date
	 * @param double SharesOutstanding
	 * @param double EndOfDayPrice
	 * @param double MarketCap
	 * @param double Volume
	 * @return XiSecurityTypeCapitalization
	 */
	public function __construct($_Date = null,$_SharesOutstanding,$_EndOfDayPrice,$_MarketCap,$_Volume)
	{
		XiSecurityWsdlClass::__construct(array('Date'=>$_Date,'SharesOutstanding'=>$_SharesOutstanding,'EndOfDayPrice'=>$_EndOfDayPrice,'MarketCap'=>$_MarketCap,'Volume'=>$_Volume));
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set SharesOutstanding
	 * @param double SharesOutstanding
	 * @return double
	 */
	public function setSharesOutstanding($_SharesOutstanding)
	{
		return ($this->SharesOutstanding = $_SharesOutstanding);
	}
	/**
	 * Get SharesOutstanding
	 * @return double
	 */
	public function getSharesOutstanding()
	{
		return $this->SharesOutstanding;
	}
	/**
	 * Set EndOfDayPrice
	 * @param double EndOfDayPrice
	 * @return double
	 */
	public function setEndOfDayPrice($_EndOfDayPrice)
	{
		return ($this->EndOfDayPrice = $_EndOfDayPrice);
	}
	/**
	 * Get EndOfDayPrice
	 * @return double
	 */
	public function getEndOfDayPrice()
	{
		return $this->EndOfDayPrice;
	}
	/**
	 * Set MarketCap
	 * @param double MarketCap
	 * @return double
	 */
	public function setMarketCap($_MarketCap)
	{
		return ($this->MarketCap = $_MarketCap);
	}
	/**
	 * Get MarketCap
	 * @return double
	 */
	public function getMarketCap()
	{
		return $this->MarketCap;
	}
	/**
	 * Set Volume
	 * @param double Volume
	 * @return double
	 */
	public function setVolume($_Volume)
	{
		return ($this->Volume = $_Volume);
	}
	/**
	 * Get Volume
	 * @return double
	 */
	public function getVolume()
	{
		return $this->Volume;
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