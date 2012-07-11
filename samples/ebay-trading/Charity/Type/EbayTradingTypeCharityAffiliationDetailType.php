<?php
/**
 * Class file for EbayTradingTypeCharityAffiliationDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharityAffiliationDetailType
 * Documentation : The information of nonprofit charity organization affiliation.
 * @date 04/07/2012
 */
class EbayTradingTypeCharityAffiliationDetailType extends EbayTradingWsdlClass
{
	/**
	 * The CharityID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The affiliation ID for nonprofit charity organizations registered with the dedicated eBay Giving Works provider.
	 * @var string
	 */
	public $CharityID;
	/**
	 * The AffiliationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the affiliation status of the nonprofit charity organization registered with the eBay Giving Works provider.
	 * @var EbayTradingTypeCharityAffiliationTypeCodeType
	 */
	public $AffiliationType;
	/**
	 * The LastUsedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the affiliation last used date of the nonprofit charity organization registered with the eBay Giving Works provider.
	 * @var dateTime
	 */
	public $LastUsedTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CharityID
	 * @param EbayTradingTypeCharityAffiliationTypeCodeType AffiliationType
	 * @param dateTime LastUsedTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeCharityAffiliationDetailType
	 */
	public function __construct($_CharityID = null,$_AffiliationType = null,$_LastUsedTime = null,$_any = null)
	{
		parent::__construct(array('CharityID'=>$_CharityID,'AffiliationType'=>$_AffiliationType,'LastUsedTime'=>$_LastUsedTime,'any'=>$_any));
	}
	/**
	 * Set CharityID
	 * @param string CharityID
	 * @return string
	 */
	public function setCharityID($_CharityID)
	{
		return ($this->CharityID = $_CharityID);
	}
	/**
	 * Get CharityID
	 * @return string
	 */
	public function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * Set AffiliationType
	 * @param CharityAffiliationTypeCodeType AffiliationType
	 * @return CharityAffiliationTypeCodeType
	 */
	public function setAffiliationType($_AffiliationType)
	{
		return ($this->AffiliationType = EbayTradingTypeCharityAffiliationTypeCodeType::valueIsValid($_AffiliationType)?$_AffiliationType:null);
	}
	/**
	 * Get AffiliationType
	 * @return EbayTradingTypeCharityAffiliationTypeCodeType
	 */
	public function getAffiliationType()
	{
		return $this->AffiliationType;
	}
	/**
	 * Set LastUsedTime
	 * @param dateTime LastUsedTime
	 * @return dateTime
	 */
	public function setLastUsedTime($_LastUsedTime)
	{
		return ($this->LastUsedTime = $_LastUsedTime);
	}
	/**
	 * Get LastUsedTime
	 * @return dateTime
	 */
	public function getLastUsedTime()
	{
		return $this->LastUsedTime;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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