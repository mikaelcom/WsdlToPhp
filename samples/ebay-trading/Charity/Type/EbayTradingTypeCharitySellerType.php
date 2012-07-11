<?php
/**
 * Class file for EbayTradingTypeCharitySellerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharitySellerType
 * Documentation : Contains information about one seller with a eBay Giving Works provider charity seller account.
 * @date 04/07/2012
 */
class EbayTradingTypeCharitySellerType extends EbayTradingWsdlClass
{
	/**
	 * The CharitySellerStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the status of the seller's charity seller account.
	 * @var EbayTradingTypeCharitySellerStatusCodeType
	 */
	public $CharitySellerStatus;
	/**
	 * The CharityAffiliation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Indicates the affiliation status for nonprofit charity organizations registered with the dedicated eBay Giving Works provider.
	 * @var EbayTradingTypeCharityAffiliationType
	 */
	public $CharityAffiliation;
	/**
	 * The TermsAndConditionsAccepted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the seller has accepted eBay GivingWorks Terms and Conditions.
	 * @var boolean
	 */
	public $TermsAndConditionsAccepted;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCharitySellerStatusCodeType CharitySellerStatus
	 * @param EbayTradingTypeCharityAffiliationType CharityAffiliation
	 * @param boolean TermsAndConditionsAccepted
	 * @param DOMDocument any
	 * @return EbayTradingTypeCharitySellerType
	 */
	public function __construct($_CharitySellerStatus = null,$_CharityAffiliation = null,$_TermsAndConditionsAccepted = null,$_any = null)
	{
		parent::__construct(array('CharitySellerStatus'=>$_CharitySellerStatus,'CharityAffiliation'=>$_CharityAffiliation,'TermsAndConditionsAccepted'=>$_TermsAndConditionsAccepted,'any'=>$_any));
	}
	/**
	 * Set CharitySellerStatus
	 * @param CharitySellerStatusCodeType CharitySellerStatus
	 * @return CharitySellerStatusCodeType
	 */
	public function setCharitySellerStatus($_CharitySellerStatus)
	{
		return ($this->CharitySellerStatus = EbayTradingTypeCharitySellerStatusCodeType::valueIsValid($_CharitySellerStatus)?$_CharitySellerStatus:null);
	}
	/**
	 * Get CharitySellerStatus
	 * @return EbayTradingTypeCharitySellerStatusCodeType
	 */
	public function getCharitySellerStatus()
	{
		return $this->CharitySellerStatus;
	}
	/**
	 * Set CharityAffiliation
	 * @param CharityAffiliationType CharityAffiliation
	 * @return CharityAffiliationType
	 */
	public function setCharityAffiliation($_CharityAffiliation)
	{
		return ($this->CharityAffiliation = $_CharityAffiliation);
	}
	/**
	 * Get CharityAffiliation
	 * @return EbayTradingTypeCharityAffiliationType
	 */
	public function getCharityAffiliation()
	{
		return $this->CharityAffiliation;
	}
	/**
	 * Set TermsAndConditionsAccepted
	 * @param boolean TermsAndConditionsAccepted
	 * @return boolean
	 */
	public function setTermsAndConditionsAccepted($_TermsAndConditionsAccepted)
	{
		return ($this->TermsAndConditionsAccepted = $_TermsAndConditionsAccepted);
	}
	/**
	 * Get TermsAndConditionsAccepted
	 * @return boolean
	 */
	public function getTermsAndConditionsAccepted()
	{
		return $this->TermsAndConditionsAccepted;
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