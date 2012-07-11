<?php
/**
 * Class file for EbayTradingTypeGetVeROReportStatusRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetVeROReportStatusRequestType
 * Documentation : Retrieves status information about VeRO reported items you have submitted. You can receive the status of individual items you have reported or, by specifying VeROReportPacketID, you can retrieve status for all items reported with a given VeROReportItems request. You can also retrieve items that were reported during a given time period. If no input parameters are specified, status is returned on all items you have reported in the last two years. You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetVeROReportStatusRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The VeROReportPacketID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Packet identifier associated with the reported items for which you want to retrieve status. By default, reported item details are not returned when you specify the packet ID in the request. Applies only to items reported with VeROReportItems.
	 * @var long
	 */
	public $VeROReportPacketID;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item ID for an item reported for alleged infringement. Applies to items reported with VeROReportItems or by other means (e.g., through the web flow).
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The IncludeReportedItemDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Set to true to return reported item details when you specify VeROReportPacketID in the request.
	 * @var boolean
	 */
	public $IncludeReportedItemDetails;
	/**
	 * The TimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Limits returned items to only those that were submited on or after the date-time specified. If specified, TimeTo must also be specified. Express the date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. (For information on how to convert between your local time zone and GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other means (e.g., through the web flow). Infringement reporting data is maintained for two years after the date of submission. This field is ignored if VeROReportPacketID or ItemID is specified.
	 * @var dateTime
	 */
	public $TimeFrom;
	/**
	 * The TimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Limits returned items to only those that were submited on or before the date-time specified. If specified, TimeFrom must also be specified. Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. (For information on how to convert between your local time zone and GMT, see Time Values Note.) Applies to items reported with VeROReportItems or by other means (e.g., through the web flow). Infringement reporting data is maintained for two years after the date of submission. This field is ignored if VeROReportPacketID or ItemID is specified.
	 * @var dateTime
	 */
	public $TimeTo;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data controlling the pagination of the returned values: how many items are returned per page of data (per call) and the number of the page to return with the current call.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * Constructor
	 * @param long VeROReportPacketID
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param boolean IncludeReportedItemDetails
	 * @param dateTime TimeFrom
	 * @param dateTime TimeTo
	 * @param EbayTradingTypePaginationType Pagination
	 * @return EbayTradingTypeGetVeROReportStatusRequestType
	 */
	public function __construct($_VeROReportPacketID = null,$_ItemID = null,$_IncludeReportedItemDetails = null,$_TimeFrom = null,$_TimeTo = null,$_Pagination = null)
	{
		EbayTradingWsdlClass::__construct(array('VeROReportPacketID'=>$_VeROReportPacketID,'ItemID'=>$_ItemID,'IncludeReportedItemDetails'=>$_IncludeReportedItemDetails,'TimeFrom'=>$_TimeFrom,'TimeTo'=>$_TimeTo,'Pagination'=>$_Pagination));
	}
	/**
	 * Set VeROReportPacketID
	 * @param long VeROReportPacketID
	 * @return long
	 */
	public function setVeROReportPacketID($_VeROReportPacketID)
	{
		return ($this->VeROReportPacketID = $_VeROReportPacketID);
	}
	/**
	 * Get VeROReportPacketID
	 * @return long
	 */
	public function getVeROReportPacketID()
	{
		return $this->VeROReportPacketID;
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set IncludeReportedItemDetails
	 * @param boolean IncludeReportedItemDetails
	 * @return boolean
	 */
	public function setIncludeReportedItemDetails($_IncludeReportedItemDetails)
	{
		return ($this->IncludeReportedItemDetails = $_IncludeReportedItemDetails);
	}
	/**
	 * Get IncludeReportedItemDetails
	 * @return boolean
	 */
	public function getIncludeReportedItemDetails()
	{
		return $this->IncludeReportedItemDetails;
	}
	/**
	 * Set TimeFrom
	 * @param dateTime TimeFrom
	 * @return dateTime
	 */
	public function setTimeFrom($_TimeFrom)
	{
		return ($this->TimeFrom = $_TimeFrom);
	}
	/**
	 * Get TimeFrom
	 * @return dateTime
	 */
	public function getTimeFrom()
	{
		return $this->TimeFrom;
	}
	/**
	 * Set TimeTo
	 * @param dateTime TimeTo
	 * @return dateTime
	 */
	public function setTimeTo($_TimeTo)
	{
		return ($this->TimeTo = $_TimeTo);
	}
	/**
	 * Get TimeTo
	 * @return dateTime
	 */
	public function getTimeTo()
	{
		return $this->TimeTo;
	}
	/**
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
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