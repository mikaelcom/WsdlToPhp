<?php
/**
 * Class file for XiIndicesTypeIndexQuote
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeIndexQuote
 * @date 08/07/2012
 */
class XiIndicesTypeIndexQuote extends XiIndicesTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeSecurity
	 */
	public $Security;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
	/**
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Open;
	/**
	 * The LastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastClose;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Low;
	/**
	 * The ChangeFromOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromOpen;
	/**
	 * The PercentChangeFromOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromOpen;
	/**
	 * The ChangeFromLastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromLastClose;
	/**
	 * The PercentChangeFromLastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromLastClose;
	/**
	 * Constructor
	 * @param XiIndicesTypeSecurity Security
	 * @param string Date
	 * @param string Time
	 * @param double Last
	 * @param double Open
	 * @param double LastClose
	 * @param double High
	 * @param double Low
	 * @param double ChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @param double ChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @return XiIndicesTypeIndexQuote
	 */
	public function __construct($_Security = null,$_Date = null,$_Time = null,$_Last,$_Open,$_LastClose,$_High,$_Low,$_ChangeFromOpen,$_PercentChangeFromOpen,$_ChangeFromLastClose,$_PercentChangeFromLastClose)
	{
		XiIndicesWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'Time'=>$_Time,'Last'=>$_Last,'Open'=>$_Open,'LastClose'=>$_LastClose,'High'=>$_High,'Low'=>$_Low,'ChangeFromOpen'=>$_ChangeFromOpen,'PercentChangeFromOpen'=>$_PercentChangeFromOpen,'ChangeFromLastClose'=>$_ChangeFromLastClose,'PercentChangeFromLastClose'=>$_PercentChangeFromLastClose));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiIndicesTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set Last
	 * @param double Last
	 * @return double
	 */
	public function setLast($_Last)
	{
		return ($this->Last = $_Last);
	}
	/**
	 * Get Last
	 * @return double
	 */
	public function getLast()
	{
		return $this->Last;
	}
	/**
	 * Set Open
	 * @param double Open
	 * @return double
	 */
	public function setOpen($_Open)
	{
		return ($this->Open = $_Open);
	}
	/**
	 * Get Open
	 * @return double
	 */
	public function getOpen()
	{
		return $this->Open;
	}
	/**
	 * Set LastClose
	 * @param double LastClose
	 * @return double
	 */
	public function setLastClose($_LastClose)
	{
		return ($this->LastClose = $_LastClose);
	}
	/**
	 * Get LastClose
	 * @return double
	 */
	public function getLastClose()
	{
		return $this->LastClose;
	}
	/**
	 * Set High
	 * @param double High
	 * @return double
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return double
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param double Low
	 * @return double
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return double
	 */
	public function getLow()
	{
		return $this->Low;
	}
	/**
	 * Set ChangeFromOpen
	 * @param double ChangeFromOpen
	 * @return double
	 */
	public function setChangeFromOpen($_ChangeFromOpen)
	{
		return ($this->ChangeFromOpen = $_ChangeFromOpen);
	}
	/**
	 * Get ChangeFromOpen
	 * @return double
	 */
	public function getChangeFromOpen()
	{
		return $this->ChangeFromOpen;
	}
	/**
	 * Set PercentChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @return double
	 */
	public function setPercentChangeFromOpen($_PercentChangeFromOpen)
	{
		return ($this->PercentChangeFromOpen = $_PercentChangeFromOpen);
	}
	/**
	 * Get PercentChangeFromOpen
	 * @return double
	 */
	public function getPercentChangeFromOpen()
	{
		return $this->PercentChangeFromOpen;
	}
	/**
	 * Set ChangeFromLastClose
	 * @param double ChangeFromLastClose
	 * @return double
	 */
	public function setChangeFromLastClose($_ChangeFromLastClose)
	{
		return ($this->ChangeFromLastClose = $_ChangeFromLastClose);
	}
	/**
	 * Get ChangeFromLastClose
	 * @return double
	 */
	public function getChangeFromLastClose()
	{
		return $this->ChangeFromLastClose;
	}
	/**
	 * Set PercentChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @return double
	 */
	public function setPercentChangeFromLastClose($_PercentChangeFromLastClose)
	{
		return ($this->PercentChangeFromLastClose = $_PercentChangeFromLastClose);
	}
	/**
	 * Get PercentChangeFromLastClose
	 * @return double
	 */
	public function getPercentChangeFromLastClose()
	{
		return $this->PercentChangeFromLastClose;
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