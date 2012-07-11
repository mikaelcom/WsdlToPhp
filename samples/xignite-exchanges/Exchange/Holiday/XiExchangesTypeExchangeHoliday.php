<?php
/**
 * Class file for XiExchangesTypeExchangeHoliday
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeExchangeHoliday
 * @date 08/07/2012
 */
class XiExchangesTypeExchangeHoliday extends XiExchangesTypeCommon
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
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The FullHoliday
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FullHoliday;
	/**
	 * The EarlyClose
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EarlyClose;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Date
	 * @param string Name
	 * @param boolean FullHoliday
	 * @param string EarlyClose
	 * @return XiExchangesTypeExchangeHoliday
	 */
	public function __construct($_Symbol = null,$_Date = null,$_Name = null,$_FullHoliday,$_EarlyClose = null)
	{
		XiExchangesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Date'=>$_Date,'Name'=>$_Name,'FullHoliday'=>$_FullHoliday,'EarlyClose'=>$_EarlyClose));
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
	 * Set FullHoliday
	 * @param boolean FullHoliday
	 * @return boolean
	 */
	public function setFullHoliday($_FullHoliday)
	{
		return ($this->FullHoliday = $_FullHoliday);
	}
	/**
	 * Get FullHoliday
	 * @return boolean
	 */
	public function getFullHoliday()
	{
		return $this->FullHoliday;
	}
	/**
	 * Set EarlyClose
	 * @param string EarlyClose
	 * @return string
	 */
	public function setEarlyClose($_EarlyClose)
	{
		return ($this->EarlyClose = $_EarlyClose);
	}
	/**
	 * Get EarlyClose
	 * @return string
	 */
	public function getEarlyClose()
	{
		return $this->EarlyClose;
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