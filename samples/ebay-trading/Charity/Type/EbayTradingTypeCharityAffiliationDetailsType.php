<?php
/**
 * Class file for EbayTradingTypeCharityAffiliationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharityAffiliationDetailsType
 * Documentation : Lists the nonprofit charity organization affiliations for a specified user.
 * @date 04/07/2012
 */
class EbayTradingTypeCharityAffiliationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The CharityAffiliationDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Indicates the affiliation status for nonprofit charity organizations registered with the dedicated eBay Giving Works provider.
	 * @var EbayTradingTypeCharityAffiliationDetailType
	 */
	public $CharityAffiliationDetail;
	/**
	 * Constructor
	 * @param EbayTradingTypeCharityAffiliationDetailType CharityAffiliationDetail
	 * @return EbayTradingTypeCharityAffiliationDetailsType
	 */
	public function __construct($_CharityAffiliationDetail = null)
	{
		parent::__construct(array('CharityAffiliationDetail'=>$_CharityAffiliationDetail));
	}
	/**
	 * Set CharityAffiliationDetail
	 * @param CharityAffiliationDetailType CharityAffiliationDetail
	 * @return CharityAffiliationDetailType
	 */
	public function setCharityAffiliationDetail($_CharityAffiliationDetail)
	{
		return ($this->CharityAffiliationDetail = $_CharityAffiliationDetail);
	}
	/**
	 * Get CharityAffiliationDetail
	 * @return EbayTradingTypeCharityAffiliationDetailType
	 */
	public function getCharityAffiliationDetail()
	{
		return $this->CharityAffiliationDetail;
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