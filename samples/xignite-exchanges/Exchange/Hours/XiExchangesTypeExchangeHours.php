<?php
/**
 * Class file for XiExchangesTypeExchangeHours
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeExchangeHours
 * @date 08/07/2012
 */
class XiExchangesTypeExchangeHours extends XiExchangesTypeCommon
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
	 * The IsOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsOpen;
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
	 * @param string Date
	 * @param boolean IsOpen
	 * @param string OpenTime
	 * @param string CloseTime
	 * @return XiExchangesTypeExchangeHours
	 */
	public function __construct($_Date = null,$_IsOpen,$_OpenTime = null,$_CloseTime = null)
	{
		XiExchangesWsdlClass::__construct(array('Date'=>$_Date,'IsOpen'=>$_IsOpen,'OpenTime'=>$_OpenTime,'CloseTime'=>$_CloseTime));
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
	 * Set IsOpen
	 * @param boolean IsOpen
	 * @return boolean
	 */
	public function setIsOpen($_IsOpen)
	{
		return ($this->IsOpen = $_IsOpen);
	}
	/**
	 * Get IsOpen
	 * @return boolean
	 */
	public function getIsOpen()
	{
		return $this->IsOpen;
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