<?php
/**
 * Class file for XiFundsTypeFundNAV
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeFundNAV
 * @date 08/07/2012
 */
class XiFundsTypeFundNAV extends XiFundsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeSecurity
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
	 * @param XiFundsTypeSecurity Security
	 * @param string Date
	 * @param double Last
	 * @param double Open
	 * @param double LastClose
	 * @param double ChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @param double ChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @return XiFundsTypeFundNAV
	 */
	public function __construct($_Security = null,$_Date = null,$_Last,$_Open,$_LastClose,$_ChangeFromOpen,$_PercentChangeFromOpen,$_ChangeFromLastClose,$_PercentChangeFromLastClose)
	{
		XiFundsWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'Last'=>$_Last,'Open'=>$_Open,'LastClose'=>$_LastClose,'ChangeFromOpen'=>$_ChangeFromOpen,'PercentChangeFromOpen'=>$_PercentChangeFromOpen,'ChangeFromLastClose'=>$_ChangeFromLastClose,'PercentChangeFromLastClose'=>$_PercentChangeFromLastClose));
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
	 * @return XiFundsTypeSecurity
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