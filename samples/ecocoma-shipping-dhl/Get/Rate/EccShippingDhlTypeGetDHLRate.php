<?php
/**
 * Class file for EccShippingDhlTypeGetDHLRate
 * @date 03/07/2012
 */
/**
 * Class EccShippingDhlTypeGetDHLRate
 * @date 03/07/2012
 */
class EccShippingDhlTypeGetDHLRate extends EccShippingDhlWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The SenderAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SenderAddress;
	/**
	 * The SenderCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SenderCity;
	/**
	 * The SenderState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SenderState;
	/**
	 * The SenderPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SenderPostalCode;
	/**
	 * The SenderCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SenderCountry;
	/**
	 * The ReceiverCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReceiverCity;
	/**
	 * The ReceiverState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReceiverState;
	/**
	 * The ReceiverPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReceiverPostalCode;
	/**
	 * The ReceiverCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReceiverCountry;
	/**
	 * The Weight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Weight;
	/**
	 * The ProtectionValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProtectionValue;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string SenderAddress
	 * @param string SenderCity
	 * @param string SenderState
	 * @param string SenderPostalCode
	 * @param string SenderCountry
	 * @param string ReceiverCity
	 * @param string ReceiverState
	 * @param string ReceiverPostalCode
	 * @param string ReceiverCountry
	 * @param string Weight
	 * @param string ProtectionValue
	 * @return EccShippingDhlTypeGetDHLRate
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_SenderAddress = null,$_SenderCity = null,$_SenderState = null,$_SenderPostalCode = null,$_SenderCountry = null,$_ReceiverCity = null,$_ReceiverState = null,$_ReceiverPostalCode = null,$_ReceiverCountry = null,$_Weight = null,$_ProtectionValue = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'SenderAddress'=>$_SenderAddress,'SenderCity'=>$_SenderCity,'SenderState'=>$_SenderState,'SenderPostalCode'=>$_SenderPostalCode,'SenderCountry'=>$_SenderCountry,'ReceiverCity'=>$_ReceiverCity,'ReceiverState'=>$_ReceiverState,'ReceiverPostalCode'=>$_ReceiverPostalCode,'ReceiverCountry'=>$_ReceiverCountry,'Weight'=>$_Weight,'ProtectionValue'=>$_ProtectionValue));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set SenderAddress
	 * @param string SenderAddress
	 * @return string
	 */
	public function setSenderAddress($_SenderAddress)
	{
		return ($this->SenderAddress = $_SenderAddress);
	}
	/**
	 * Get SenderAddress
	 * @return string
	 */
	public function getSenderAddress()
	{
		return $this->SenderAddress;
	}
	/**
	 * Set SenderCity
	 * @param string SenderCity
	 * @return string
	 */
	public function setSenderCity($_SenderCity)
	{
		return ($this->SenderCity = $_SenderCity);
	}
	/**
	 * Get SenderCity
	 * @return string
	 */
	public function getSenderCity()
	{
		return $this->SenderCity;
	}
	/**
	 * Set SenderState
	 * @param string SenderState
	 * @return string
	 */
	public function setSenderState($_SenderState)
	{
		return ($this->SenderState = $_SenderState);
	}
	/**
	 * Get SenderState
	 * @return string
	 */
	public function getSenderState()
	{
		return $this->SenderState;
	}
	/**
	 * Set SenderPostalCode
	 * @param string SenderPostalCode
	 * @return string
	 */
	public function setSenderPostalCode($_SenderPostalCode)
	{
		return ($this->SenderPostalCode = $_SenderPostalCode);
	}
	/**
	 * Get SenderPostalCode
	 * @return string
	 */
	public function getSenderPostalCode()
	{
		return $this->SenderPostalCode;
	}
	/**
	 * Set SenderCountry
	 * @param string SenderCountry
	 * @return string
	 */
	public function setSenderCountry($_SenderCountry)
	{
		return ($this->SenderCountry = $_SenderCountry);
	}
	/**
	 * Get SenderCountry
	 * @return string
	 */
	public function getSenderCountry()
	{
		return $this->SenderCountry;
	}
	/**
	 * Set ReceiverCity
	 * @param string ReceiverCity
	 * @return string
	 */
	public function setReceiverCity($_ReceiverCity)
	{
		return ($this->ReceiverCity = $_ReceiverCity);
	}
	/**
	 * Get ReceiverCity
	 * @return string
	 */
	public function getReceiverCity()
	{
		return $this->ReceiverCity;
	}
	/**
	 * Set ReceiverState
	 * @param string ReceiverState
	 * @return string
	 */
	public function setReceiverState($_ReceiverState)
	{
		return ($this->ReceiverState = $_ReceiverState);
	}
	/**
	 * Get ReceiverState
	 * @return string
	 */
	public function getReceiverState()
	{
		return $this->ReceiverState;
	}
	/**
	 * Set ReceiverPostalCode
	 * @param string ReceiverPostalCode
	 * @return string
	 */
	public function setReceiverPostalCode($_ReceiverPostalCode)
	{
		return ($this->ReceiverPostalCode = $_ReceiverPostalCode);
	}
	/**
	 * Get ReceiverPostalCode
	 * @return string
	 */
	public function getReceiverPostalCode()
	{
		return $this->ReceiverPostalCode;
	}
	/**
	 * Set ReceiverCountry
	 * @param string ReceiverCountry
	 * @return string
	 */
	public function setReceiverCountry($_ReceiverCountry)
	{
		return ($this->ReceiverCountry = $_ReceiverCountry);
	}
	/**
	 * Get ReceiverCountry
	 * @return string
	 */
	public function getReceiverCountry()
	{
		return $this->ReceiverCountry;
	}
	/**
	 * Set Weight
	 * @param string Weight
	 * @return string
	 */
	public function setWeight($_Weight)
	{
		return ($this->Weight = $_Weight);
	}
	/**
	 * Get Weight
	 * @return string
	 */
	public function getWeight()
	{
		return $this->Weight;
	}
	/**
	 * Set ProtectionValue
	 * @param string ProtectionValue
	 * @return string
	 */
	public function setProtectionValue($_ProtectionValue)
	{
		return ($this->ProtectionValue = $_ProtectionValue);
	}
	/**
	 * Get ProtectionValue
	 * @return string
	 */
	public function getProtectionValue()
	{
		return $this->ProtectionValue;
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