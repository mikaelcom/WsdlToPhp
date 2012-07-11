<?php
/**
 * Class file for XiExchangesTypeExchangeSchedule
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeExchangeSchedule
 * @date 08/07/2012
 */
class XiExchangesTypeExchangeSchedule extends XiExchangesTypeCommon
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
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Open;
	/**
	 * The OpenTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OpenTime;
	/**
	 * The CloseTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CloseTime;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Date
	 * @param boolean Open
	 * @param string OpenTime
	 * @param string CloseTime
	 * @return XiExchangesTypeExchangeSchedule
	 */
	public function __construct($_Symbol = null,$_Date = null,$_Open,$_OpenTime = null,$_CloseTime = null)
	{
		XiExchangesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Date'=>$_Date,'Open'=>$_Open,'OpenTime'=>$_OpenTime,'CloseTime'=>$_CloseTime));
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
	 * Set Open
	 * @param boolean Open
	 * @return boolean
	 */
	public function setOpen($_Open)
	{
		return ($this->Open = $_Open);
	}
	/**
	 * Get Open
	 * @return boolean
	 */
	public function getOpen()
	{
		return $this->Open;
	}
	/**
	 * Set OpenTime
	 * @param string OpenTime
	 * @return string
	 */
	public function setOpenTime($_OpenTime)
	{
		return ($this->OpenTime = $_OpenTime);
	}
	/**
	 * Get OpenTime
	 * @return string
	 */
	public function getOpenTime()
	{
		return $this->OpenTime;
	}
	/**
	 * Set CloseTime
	 * @param string CloseTime
	 * @return string
	 */
	public function setCloseTime($_CloseTime)
	{
		return ($this->CloseTime = $_CloseTime);
	}
	/**
	 * Get CloseTime
	 * @return string
	 */
	public function getCloseTime()
	{
		return $this->CloseTime;
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