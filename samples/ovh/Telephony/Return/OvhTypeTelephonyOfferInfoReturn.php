<?php
/**
 * Class file for OvhTypeTelephonyOfferInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyOfferInfoReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyOfferInfoReturn extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The nextBillingDate
	 * @var string
	 */
	public $nextBillingDate;
	/**
	 * The simultaneousLines
	 * @var int
	 */
	public $simultaneousLines;
	/**
	 * The hardware
	 * @var OvhTypeTelephonyOfferInfoHardwareStruct
	 */
	public $hardware;
	/**
	 * The sipAccount
	 * @var OvhTypeTelephonyOfferInfoSipAccountStruct
	 */
	public $sipAccount;
	/**
	 * Constructor
	 * @param string number
	 * @param string description
	 * @param string offer
	 * @param string countryCode
	 * @param string nextBillingDate
	 * @param int simultaneousLines
	 * @param OvhTypeTelephonyOfferInfoHardwareStruct hardware
	 * @param OvhTypeTelephonyOfferInfoSipAccountStruct sipAccount
	 * @return OvhTypeTelephonyOfferInfoReturn
	 */
	public function __construct($_number = null,$_description = null,$_offer = null,$_countryCode = null,$_nextBillingDate = null,$_simultaneousLines = null,$_hardware = null,$_sipAccount = null)
	{
		parent::__construct(array('number'=>$_number,'description'=>$_description,'offer'=>$_offer,'countryCode'=>$_countryCode,'nextBillingDate'=>$_nextBillingDate,'simultaneousLines'=>$_simultaneousLines,'hardware'=>$_hardware,'sipAccount'=>$_sipAccount));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set nextBillingDate
	 * @param string nextBillingDate
	 * @return string
	 */
	public function setNextBillingDate($_nextBillingDate)
	{
		return ($this->nextBillingDate = $_nextBillingDate);
	}
	/**
	 * Get nextBillingDate
	 * @return string
	 */
	public function getNextBillingDate()
	{
		return $this->nextBillingDate;
	}
	/**
	 * Set simultaneousLines
	 * @param int simultaneousLines
	 * @return int
	 */
	public function setSimultaneousLines($_simultaneousLines)
	{
		return ($this->simultaneousLines = $_simultaneousLines);
	}
	/**
	 * Get simultaneousLines
	 * @return int
	 */
	public function getSimultaneousLines()
	{
		return $this->simultaneousLines;
	}
	/**
	 * Set hardware
	 * @param telephonyOfferInfoHardwareStruct hardware
	 * @return telephonyOfferInfoHardwareStruct
	 */
	public function setHardware($_hardware)
	{
		return ($this->hardware = $_hardware);
	}
	/**
	 * Get hardware
	 * @return OvhTypetelephonyOfferInfoHardwareStruct
	 */
	public function getHardware()
	{
		return $this->hardware;
	}
	/**
	 * Set sipAccount
	 * @param telephonyOfferInfoSipAccountStruct sipAccount
	 * @return telephonyOfferInfoSipAccountStruct
	 */
	public function setSipAccount($_sipAccount)
	{
		return ($this->sipAccount = $_sipAccount);
	}
	/**
	 * Get sipAccount
	 * @return OvhTypetelephonyOfferInfoSipAccountStruct
	 */
	public function getSipAccount()
	{
		return $this->sipAccount;
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