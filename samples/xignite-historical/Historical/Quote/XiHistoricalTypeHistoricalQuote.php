<?php
/**
 * Class file for XiHistoricalTypeHistoricalQuote
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeHistoricalQuote
 * @date 08/07/2012
 */
class XiHistoricalTypeHistoricalQuote extends XiHistoricalTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeSecurity
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
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volume;
	/**
	 * The SplitRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SplitRatio;
	/**
	 * The LastAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastAdjusted;
	/**
	 * The OpenAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OpenAdjusted;
	/**
	 * The LastCloseAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastCloseAdjusted;
	/**
	 * The HighAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $HighAdjusted;
	/**
	 * The LowAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LowAdjusted;
	/**
	 * The ChangeFromOpenAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromOpenAdjusted;
	/**
	 * The ChangeFromLastCloseAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromLastCloseAdjusted;
	/**
	 * The VolumeAdjusted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $VolumeAdjusted;
	/**
	 * The NotTraded
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $NotTraded;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSecurity Security
	 * @param string Date
	 * @param double Last
	 * @param double Open
	 * @param double LastClose
	 * @param double High
	 * @param double Low
	 * @param double ChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @param double ChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @param double Volume
	 * @param double SplitRatio
	 * @param double LastAdjusted
	 * @param double OpenAdjusted
	 * @param double LastCloseAdjusted
	 * @param double HighAdjusted
	 * @param double LowAdjusted
	 * @param double ChangeFromOpenAdjusted
	 * @param double ChangeFromLastCloseAdjusted
	 * @param double VolumeAdjusted
	 * @param boolean NotTraded
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function __construct($_Security = null,$_Date = null,$_Last,$_Open,$_LastClose,$_High,$_Low,$_ChangeFromOpen,$_PercentChangeFromOpen,$_ChangeFromLastClose,$_PercentChangeFromLastClose,$_Volume,$_SplitRatio,$_LastAdjusted,$_OpenAdjusted,$_LastCloseAdjusted,$_HighAdjusted,$_LowAdjusted,$_ChangeFromOpenAdjusted,$_ChangeFromLastCloseAdjusted,$_VolumeAdjusted,$_NotTraded)
	{
		XiHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'Last'=>$_Last,'Open'=>$_Open,'LastClose'=>$_LastClose,'High'=>$_High,'Low'=>$_Low,'ChangeFromOpen'=>$_ChangeFromOpen,'PercentChangeFromOpen'=>$_PercentChangeFromOpen,'ChangeFromLastClose'=>$_ChangeFromLastClose,'PercentChangeFromLastClose'=>$_PercentChangeFromLastClose,'Volume'=>$_Volume,'SplitRatio'=>$_SplitRatio,'LastAdjusted'=>$_LastAdjusted,'OpenAdjusted'=>$_OpenAdjusted,'LastCloseAdjusted'=>$_LastCloseAdjusted,'HighAdjusted'=>$_HighAdjusted,'LowAdjusted'=>$_LowAdjusted,'ChangeFromOpenAdjusted'=>$_ChangeFromOpenAdjusted,'ChangeFromLastCloseAdjusted'=>$_ChangeFromLastCloseAdjusted,'VolumeAdjusted'=>$_VolumeAdjusted,'NotTraded'=>$_NotTraded));
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
	 * @return XiHistoricalTypeSecurity
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
	 * Set SplitRatio
	 * @param double SplitRatio
	 * @return double
	 */
	public function setSplitRatio($_SplitRatio)
	{
		return ($this->SplitRatio = $_SplitRatio);
	}
	/**
	 * Get SplitRatio
	 * @return double
	 */
	public function getSplitRatio()
	{
		return $this->SplitRatio;
	}
	/**
	 * Set LastAdjusted
	 * @param double LastAdjusted
	 * @return double
	 */
	public function setLastAdjusted($_LastAdjusted)
	{
		return ($this->LastAdjusted = $_LastAdjusted);
	}
	/**
	 * Get LastAdjusted
	 * @return double
	 */
	public function getLastAdjusted()
	{
		return $this->LastAdjusted;
	}
	/**
	 * Set OpenAdjusted
	 * @param double OpenAdjusted
	 * @return double
	 */
	public function setOpenAdjusted($_OpenAdjusted)
	{
		return ($this->OpenAdjusted = $_OpenAdjusted);
	}
	/**
	 * Get OpenAdjusted
	 * @return double
	 */
	public function getOpenAdjusted()
	{
		return $this->OpenAdjusted;
	}
	/**
	 * Set LastCloseAdjusted
	 * @param double LastCloseAdjusted
	 * @return double
	 */
	public function setLastCloseAdjusted($_LastCloseAdjusted)
	{
		return ($this->LastCloseAdjusted = $_LastCloseAdjusted);
	}
	/**
	 * Get LastCloseAdjusted
	 * @return double
	 */
	public function getLastCloseAdjusted()
	{
		return $this->LastCloseAdjusted;
	}
	/**
	 * Set HighAdjusted
	 * @param double HighAdjusted
	 * @return double
	 */
	public function setHighAdjusted($_HighAdjusted)
	{
		return ($this->HighAdjusted = $_HighAdjusted);
	}
	/**
	 * Get HighAdjusted
	 * @return double
	 */
	public function getHighAdjusted()
	{
		return $this->HighAdjusted;
	}
	/**
	 * Set LowAdjusted
	 * @param double LowAdjusted
	 * @return double
	 */
	public function setLowAdjusted($_LowAdjusted)
	{
		return ($this->LowAdjusted = $_LowAdjusted);
	}
	/**
	 * Get LowAdjusted
	 * @return double
	 */
	public function getLowAdjusted()
	{
		return $this->LowAdjusted;
	}
	/**
	 * Set ChangeFromOpenAdjusted
	 * @param double ChangeFromOpenAdjusted
	 * @return double
	 */
	public function setChangeFromOpenAdjusted($_ChangeFromOpenAdjusted)
	{
		return ($this->ChangeFromOpenAdjusted = $_ChangeFromOpenAdjusted);
	}
	/**
	 * Get ChangeFromOpenAdjusted
	 * @return double
	 */
	public function getChangeFromOpenAdjusted()
	{
		return $this->ChangeFromOpenAdjusted;
	}
	/**
	 * Set ChangeFromLastCloseAdjusted
	 * @param double ChangeFromLastCloseAdjusted
	 * @return double
	 */
	public function setChangeFromLastCloseAdjusted($_ChangeFromLastCloseAdjusted)
	{
		return ($this->ChangeFromLastCloseAdjusted = $_ChangeFromLastCloseAdjusted);
	}
	/**
	 * Get ChangeFromLastCloseAdjusted
	 * @return double
	 */
	public function getChangeFromLastCloseAdjusted()
	{
		return $this->ChangeFromLastCloseAdjusted;
	}
	/**
	 * Set VolumeAdjusted
	 * @param double VolumeAdjusted
	 * @return double
	 */
	public function setVolumeAdjusted($_VolumeAdjusted)
	{
		return ($this->VolumeAdjusted = $_VolumeAdjusted);
	}
	/**
	 * Get VolumeAdjusted
	 * @return double
	 */
	public function getVolumeAdjusted()
	{
		return $this->VolumeAdjusted;
	}
	/**
	 * Set NotTraded
	 * @param boolean NotTraded
	 * @return boolean
	 */
	public function setNotTraded($_NotTraded)
	{
		return ($this->NotTraded = $_NotTraded);
	}
	/**
	 * Get NotTraded
	 * @return boolean
	 */
	public function getNotTraded()
	{
		return $this->NotTraded;
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