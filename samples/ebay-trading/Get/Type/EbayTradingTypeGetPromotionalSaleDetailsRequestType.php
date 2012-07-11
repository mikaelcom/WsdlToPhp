<?php
/**
 * Class file for EbayTradingTypeGetPromotionalSaleDetailsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPromotionalSaleDetailsRequestType
 * Documentation : Obtains information about promotional sales set up by an eBay store owner (the authenticated caller).
 * @date 04/07/2012
 */
class EbayTradingTypeGetPromotionalSaleDetailsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PromotionalSaleID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the promotional sale about which you want information. If you do not specify this field, then all promotional sales for the seller making the call are returned or only those promotional sales matching the specified promotional sale status filter, PromotionalSaleStatus. <br><br> If PromotionalSaleID and PromotionalSaleStatus are both specified, the single promotional sale specified by ID is returned only if its status matches the specified status filter.
	 * @var long
	 */
	public $PromotionalSaleID;
	/**
	 * The PromotionalSaleStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the promotional sales to return, based upon their status. For example, specify "Scheduled" to retrieve only promotional sales with a Status of Scheduled. If you want to retrieve promotional sales for more than one status, you can repeat the field with an additional status value, such as Active. <br><br> If this field is used together with PromotionalSaleID, the single promotional sale specified by ID is returned only if its status matches the specified status filter. <br><br> If neither field is used, all of the seller's promotional sales are returned, regardless of status.
	 * @var EbayTradingTypePromotionalSaleStatusCodeType
	 */
	public $PromotionalSaleStatus;
	/**
	 * Constructor
	 * @param long PromotionalSaleID
	 * @param EbayTradingTypePromotionalSaleStatusCodeType PromotionalSaleStatus
	 * @return EbayTradingTypeGetPromotionalSaleDetailsRequestType
	 */
	public function __construct($_PromotionalSaleID = null,$_PromotionalSaleStatus = null)
	{
		EbayTradingWsdlClass::__construct(array('PromotionalSaleID'=>$_PromotionalSaleID,'PromotionalSaleStatus'=>$_PromotionalSaleStatus));
	}
	/**
	 * Set PromotionalSaleID
	 * @param long PromotionalSaleID
	 * @return long
	 */
	public function setPromotionalSaleID($_PromotionalSaleID)
	{
		return ($this->PromotionalSaleID = $_PromotionalSaleID);
	}
	/**
	 * Get PromotionalSaleID
	 * @return long
	 */
	public function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}
	/**
	 * Set PromotionalSaleStatus
	 * @param PromotionalSaleStatusCodeType PromotionalSaleStatus
	 * @return PromotionalSaleStatusCodeType
	 */
	public function setPromotionalSaleStatus($_PromotionalSaleStatus)
	{
		return ($this->PromotionalSaleStatus = EbayTradingTypePromotionalSaleStatusCodeType::valueIsValid($_PromotionalSaleStatus)?$_PromotionalSaleStatus:null);
	}
	/**
	 * Get PromotionalSaleStatus
	 * @return EbayTradingTypePromotionalSaleStatusCodeType
	 */
	public function getPromotionalSaleStatus()
	{
		return $this->PromotionalSaleStatus;
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