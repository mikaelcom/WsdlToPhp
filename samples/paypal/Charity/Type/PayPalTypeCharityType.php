<?php
/**
 * Class file for PayPalTypeCharityType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCharityType
 * Documentation : Contains information about a Charity listing.in case of revision - all data can be min occur = 0
 * @date 14/07/2012
 */
class PayPalTypeCharityType extends PayPalWsdlClass
{
	/**
	 * The CharityName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CharityName;
	/**
	 * The CharityNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $CharityNumber;
	/**
	 * The DonationPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var float
	 */
	public $DonationPercent;
	/**
	 * Constructor
	 * @param string CharityName
	 * @param int CharityNumber
	 * @param float DonationPercent
	 * @return PayPalTypeCharityType
	 */
	public function __construct($_CharityName = null,$_CharityNumber = null,$_DonationPercent = null)
	{
		parent::__construct(array('CharityName'=>$_CharityName,'CharityNumber'=>$_CharityNumber,'DonationPercent'=>$_DonationPercent));
	}
	/**
	 * Set CharityName
	 * @param string CharityName
	 * @return string
	 */
	public function setCharityName($_CharityName)
	{
		return ($this->CharityName = $_CharityName);
	}
	/**
	 * Get CharityName
	 * @return string
	 */
	public function getCharityName()
	{
		return $this->CharityName;
	}
	/**
	 * Set CharityNumber
	 * @param int CharityNumber
	 * @return int
	 */
	public function setCharityNumber($_CharityNumber)
	{
		return ($this->CharityNumber = $_CharityNumber);
	}
	/**
	 * Get CharityNumber
	 * @return int
	 */
	public function getCharityNumber()
	{
		return $this->CharityNumber;
	}
	/**
	 * Set DonationPercent
	 * @param float DonationPercent
	 * @return float
	 */
	public function setDonationPercent($_DonationPercent)
	{
		return ($this->DonationPercent = $_DonationPercent);
	}
	/**
	 * Get DonationPercent
	 * @return float
	 */
	public function getDonationPercent()
	{
		return $this->DonationPercent;
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