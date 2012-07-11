<?php
/**
 * Class file for EbayTradingTypeVeROReportItemsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReportItemsRequestType
 * Documentation : Reports items that allegedly infringe your copyright, trademark, or other intellectual property rights. You can report one or more items at a time with this call. You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReportItemsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The RightsOwnerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User ID of the VeRO member reporting the items.
	 * @var EbayTradingTypeUserIDType
	 */
	public $RightsOwnerID;
	/**
	 * The ReportItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container (packet) for items being reported. You can report the same item more than once in a packet if a different reason code is used each time.
	 * @var EbayTradingTypeVeROReportItemsType
	 */
	public $ReportItems;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType RightsOwnerID
	 * @param EbayTradingTypeVeROReportItemsType ReportItems
	 * @return EbayTradingTypeVeROReportItemsRequestType
	 */
	public function __construct($_RightsOwnerID = null,$_ReportItems = null)
	{
		EbayTradingWsdlClass::__construct(array('RightsOwnerID'=>$_RightsOwnerID,'ReportItems'=>$_ReportItems));
	}
	/**
	 * Set RightsOwnerID
	 * @param UserIDType RightsOwnerID
	 * @return UserIDType
	 */
	public function setRightsOwnerID($_RightsOwnerID)
	{
		return ($this->RightsOwnerID = EbayTradingTypeUserIDType::valueIsValid($_RightsOwnerID)?$_RightsOwnerID:null);
	}
	/**
	 * Get RightsOwnerID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getRightsOwnerID()
	{
		return $this->RightsOwnerID;
	}
	/**
	 * Set ReportItems
	 * @param VeROReportItemsType ReportItems
	 * @return VeROReportItemsType
	 */
	public function setReportItems($_ReportItems)
	{
		return ($this->ReportItems = $_ReportItems);
	}
	/**
	 * Get ReportItems
	 * @return EbayTradingTypeVeROReportItemsType
	 */
	public function getReportItems()
	{
		return $this->ReportItems;
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