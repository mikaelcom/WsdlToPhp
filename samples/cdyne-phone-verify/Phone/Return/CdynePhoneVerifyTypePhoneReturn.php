<?php
/**
 * Class file for CdynePhoneVerifyTypePhoneReturn
 * @date 03/07/2012
 */
/**
 * Class CdynePhoneVerifyTypePhoneReturn
 * @date 03/07/2012
 */
class CdynePhoneVerifyTypePhoneReturn extends CdynePhoneVerifyWsdlClass
{
	/**
	 * The Company
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Company;
	/**
	 * The Valid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Valid;
	/**
	 * The Use
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Use;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The Switch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Switch;
	/**
	 * The RC
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RC;
	/**
	 * The OCN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OCN;
	/**
	 * The OriginalNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalNumber;
	/**
	 * The CleanNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CleanNumber;
	/**
	 * The SwitchName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SwitchName;
	/**
	 * The SwitchType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SwitchType;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The CLLI
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CLLI;
	/**
	 * The PrefixType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PrefixType;
	/**
	 * The LATA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LATA;
	/**
	 * The sms
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $sms;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The AssignDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AssignDate;
	/**
	 * The TelecomCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TelecomCity;
	/**
	 * The TelecomCounty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TelecomCounty;
	/**
	 * The TelecomState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TelecomState;
	/**
	 * The TelecomZip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TelecomZip;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The Lat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Lat;
	/**
	 * The Long
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Long;
	/**
	 * The Wireless
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Wireless;
	/**
	 * Constructor
	 * @param string Company
	 * @param boolean Valid
	 * @param string Use
	 * @param string State
	 * @param string Switch
	 * @param string RC
	 * @param string OCN
	 * @param string OriginalNumber
	 * @param string CleanNumber
	 * @param string SwitchName
	 * @param string SwitchType
	 * @param string Country
	 * @param string CLLI
	 * @param string PrefixType
	 * @param string LATA
	 * @param string sms
	 * @param string Email
	 * @param string AssignDate
	 * @param string TelecomCity
	 * @param string TelecomCounty
	 * @param string TelecomState
	 * @param string TelecomZip
	 * @param string TimeZone
	 * @param string Lat
	 * @param string Long
	 * @param boolean Wireless
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function __construct($_Company = null,$_Valid,$_Use = null,$_State = null,$_Switch = null,$_RC = null,$_OCN = null,$_OriginalNumber = null,$_CleanNumber = null,$_SwitchName = null,$_SwitchType = null,$_Country = null,$_CLLI = null,$_PrefixType = null,$_LATA = null,$_sms = null,$_Email = null,$_AssignDate = null,$_TelecomCity = null,$_TelecomCounty = null,$_TelecomState = null,$_TelecomZip = null,$_TimeZone = null,$_Lat = null,$_Long = null,$_Wireless)
	{
		parent::__construct(array('Company'=>$_Company,'Valid'=>$_Valid,'Use'=>$_Use,'State'=>$_State,'Switch'=>$_Switch,'RC'=>$_RC,'OCN'=>$_OCN,'OriginalNumber'=>$_OriginalNumber,'CleanNumber'=>$_CleanNumber,'SwitchName'=>$_SwitchName,'SwitchType'=>$_SwitchType,'Country'=>$_Country,'CLLI'=>$_CLLI,'PrefixType'=>$_PrefixType,'LATA'=>$_LATA,'sms'=>$_sms,'Email'=>$_Email,'AssignDate'=>$_AssignDate,'TelecomCity'=>$_TelecomCity,'TelecomCounty'=>$_TelecomCounty,'TelecomState'=>$_TelecomState,'TelecomZip'=>$_TelecomZip,'TimeZone'=>$_TimeZone,'Lat'=>$_Lat,'Long'=>$_Long,'Wireless'=>$_Wireless));
	}
	/**
	 * Set Company
	 * @param string Company
	 * @return string
	 */
	public function setCompany($_Company)
	{
		return ($this->Company = $_Company);
	}
	/**
	 * Get Company
	 * @return string
	 */
	public function getCompany()
	{
		return $this->Company;
	}
	/**
	 * Set Valid
	 * @param boolean Valid
	 * @return boolean
	 */
	public function setValid($_Valid)
	{
		return ($this->Valid = $_Valid);
	}
	/**
	 * Get Valid
	 * @return boolean
	 */
	public function getValid()
	{
		return $this->Valid;
	}
	/**
	 * Set Use
	 * @param string Use
	 * @return string
	 */
	public function setUse($_Use)
	{
		return ($this->Use = $_Use);
	}
	/**
	 * Get Use
	 * @return string
	 */
	public function getUse()
	{
		return $this->Use;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set Switch
	 * @param string Switch
	 * @return string
	 */
	public function setSwitch($_Switch)
	{
		return ($this->Switch = $_Switch);
	}
	/**
	 * Get Switch
	 * @return string
	 */
	public function getSwitch()
	{
		return $this->Switch;
	}
	/**
	 * Set RC
	 * @param string RC
	 * @return string
	 */
	public function setRC($_RC)
	{
		return ($this->RC = $_RC);
	}
	/**
	 * Get RC
	 * @return string
	 */
	public function getRC()
	{
		return $this->RC;
	}
	/**
	 * Set OCN
	 * @param string OCN
	 * @return string
	 */
	public function setOCN($_OCN)
	{
		return ($this->OCN = $_OCN);
	}
	/**
	 * Get OCN
	 * @return string
	 */
	public function getOCN()
	{
		return $this->OCN;
	}
	/**
	 * Set OriginalNumber
	 * @param string OriginalNumber
	 * @return string
	 */
	public function setOriginalNumber($_OriginalNumber)
	{
		return ($this->OriginalNumber = $_OriginalNumber);
	}
	/**
	 * Get OriginalNumber
	 * @return string
	 */
	public function getOriginalNumber()
	{
		return $this->OriginalNumber;
	}
	/**
	 * Set CleanNumber
	 * @param string CleanNumber
	 * @return string
	 */
	public function setCleanNumber($_CleanNumber)
	{
		return ($this->CleanNumber = $_CleanNumber);
	}
	/**
	 * Get CleanNumber
	 * @return string
	 */
	public function getCleanNumber()
	{
		return $this->CleanNumber;
	}
	/**
	 * Set SwitchName
	 * @param string SwitchName
	 * @return string
	 */
	public function setSwitchName($_SwitchName)
	{
		return ($this->SwitchName = $_SwitchName);
	}
	/**
	 * Get SwitchName
	 * @return string
	 */
	public function getSwitchName()
	{
		return $this->SwitchName;
	}
	/**
	 * Set SwitchType
	 * @param string SwitchType
	 * @return string
	 */
	public function setSwitchType($_SwitchType)
	{
		return ($this->SwitchType = $_SwitchType);
	}
	/**
	 * Get SwitchType
	 * @return string
	 */
	public function getSwitchType()
	{
		return $this->SwitchType;
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set CLLI
	 * @param string CLLI
	 * @return string
	 */
	public function setCLLI($_CLLI)
	{
		return ($this->CLLI = $_CLLI);
	}
	/**
	 * Get CLLI
	 * @return string
	 */
	public function getCLLI()
	{
		return $this->CLLI;
	}
	/**
	 * Set PrefixType
	 * @param string PrefixType
	 * @return string
	 */
	public function setPrefixType($_PrefixType)
	{
		return ($this->PrefixType = $_PrefixType);
	}
	/**
	 * Get PrefixType
	 * @return string
	 */
	public function getPrefixType()
	{
		return $this->PrefixType;
	}
	/**
	 * Set LATA
	 * @param string LATA
	 * @return string
	 */
	public function setLATA($_LATA)
	{
		return ($this->LATA = $_LATA);
	}
	/**
	 * Get LATA
	 * @return string
	 */
	public function getLATA()
	{
		return $this->LATA;
	}
	/**
	 * Set sms
	 * @param string sms
	 * @return string
	 */
	public function setSms($_sms)
	{
		return ($this->sms = $_sms);
	}
	/**
	 * Get sms
	 * @return string
	 */
	public function getSms()
	{
		return $this->sms;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set AssignDate
	 * @param string AssignDate
	 * @return string
	 */
	public function setAssignDate($_AssignDate)
	{
		return ($this->AssignDate = $_AssignDate);
	}
	/**
	 * Get AssignDate
	 * @return string
	 */
	public function getAssignDate()
	{
		return $this->AssignDate;
	}
	/**
	 * Set TelecomCity
	 * @param string TelecomCity
	 * @return string
	 */
	public function setTelecomCity($_TelecomCity)
	{
		return ($this->TelecomCity = $_TelecomCity);
	}
	/**
	 * Get TelecomCity
	 * @return string
	 */
	public function getTelecomCity()
	{
		return $this->TelecomCity;
	}
	/**
	 * Set TelecomCounty
	 * @param string TelecomCounty
	 * @return string
	 */
	public function setTelecomCounty($_TelecomCounty)
	{
		return ($this->TelecomCounty = $_TelecomCounty);
	}
	/**
	 * Get TelecomCounty
	 * @return string
	 */
	public function getTelecomCounty()
	{
		return $this->TelecomCounty;
	}
	/**
	 * Set TelecomState
	 * @param string TelecomState
	 * @return string
	 */
	public function setTelecomState($_TelecomState)
	{
		return ($this->TelecomState = $_TelecomState);
	}
	/**
	 * Get TelecomState
	 * @return string
	 */
	public function getTelecomState()
	{
		return $this->TelecomState;
	}
	/**
	 * Set TelecomZip
	 * @param string TelecomZip
	 * @return string
	 */
	public function setTelecomZip($_TelecomZip)
	{
		return ($this->TelecomZip = $_TelecomZip);
	}
	/**
	 * Get TelecomZip
	 * @return string
	 */
	public function getTelecomZip()
	{
		return $this->TelecomZip;
	}
	/**
	 * Set TimeZone
	 * @param string TimeZone
	 * @return string
	 */
	public function setTimeZone($_TimeZone)
	{
		return ($this->TimeZone = $_TimeZone);
	}
	/**
	 * Get TimeZone
	 * @return string
	 */
	public function getTimeZone()
	{
		return $this->TimeZone;
	}
	/**
	 * Set Lat
	 * @param string Lat
	 * @return string
	 */
	public function setLat($_Lat)
	{
		return ($this->Lat = $_Lat);
	}
	/**
	 * Get Lat
	 * @return string
	 */
	public function getLat()
	{
		return $this->Lat;
	}
	/**
	 * Set Long
	 * @param string Long
	 * @return string
	 */
	public function setLong($_Long)
	{
		return ($this->Long = $_Long);
	}
	/**
	 * Get Long
	 * @return string
	 */
	public function getLong()
	{
		return $this->Long;
	}
	/**
	 * Set Wireless
	 * @param boolean Wireless
	 * @return boolean
	 */
	public function setWireless($_Wireless)
	{
		return ($this->Wireless = $_Wireless);
	}
	/**
	 * Get Wireless
	 * @return boolean
	 */
	public function getWireless()
	{
		return $this->Wireless;
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