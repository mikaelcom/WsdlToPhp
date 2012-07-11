<?php
/**
 * Class file for EbayTradingTypeGetVeROReportStatusResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetVeROReportStatusResponseType
 * Documentation : Contains status information for items reported by the VeRO Program member.
 * @date 04/07/2012
 */
class EbayTradingTypeGetVeROReportStatusResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The HasMoreItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, there are more items yet to be retrieved. Additional calls with higher page numbers or more items per page must be made to retrieve these items. Not returned if no items match the request.
	 * @var boolean
	 */
	public $HasMoreItems;
	/**
	 * The ItemsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the maximum number of ItemType objects that can be returned in ReportedItemDetails for any given call.
	 * @var int
	 */
	public $ItemsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the page of data returned by the current call. For instance, for the first set of items can be returned, this field has a value of one.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The VeROReportPacketID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The packet ID for status being returned.
	 * @var long
	 */
	public $VeROReportPacketID;
	/**
	 * The VeROReportPacketStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status of the packet.
	 * @var EbayTradingTypeVeROReportPacketStatusCodeType
	 */
	public $VeROReportPacketStatus;
	/**
	 * The ReportedItemDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the list of the reported item details. Returns empty if no items are available that match the request.
	 * @var EbayTradingTypeVeROReportedItemDetailsType
	 */
	public $ReportedItemDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param boolean HasMoreItems
	 * @param int ItemsPerPage
	 * @param int PageNumber
	 * @param long VeROReportPacketID
	 * @param EbayTradingTypeVeROReportPacketStatusCodeType VeROReportPacketStatus
	 * @param EbayTradingTypeVeROReportedItemDetailsType ReportedItemDetails
	 * @return EbayTradingTypeGetVeROReportStatusResponseType
	 */
	public function __construct($_PaginationResult = null,$_HasMoreItems = null,$_ItemsPerPage = null,$_PageNumber = null,$_VeROReportPacketID = null,$_VeROReportPacketStatus = null,$_ReportedItemDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('PaginationResult'=>$_PaginationResult,'HasMoreItems'=>$_HasMoreItems,'ItemsPerPage'=>$_ItemsPerPage,'PageNumber'=>$_PageNumber,'VeROReportPacketID'=>$_VeROReportPacketID,'VeROReportPacketStatus'=>$_VeROReportPacketStatus,'ReportedItemDetails'=>$_ReportedItemDetails));
	}
	/**
	 * Set PaginationResult
	 * @param PaginationResultType PaginationResult
	 * @return PaginationResultType
	 */
	public function setPaginationResult($_PaginationResult)
	{
		return ($this->PaginationResult = $_PaginationResult);
	}
	/**
	 * Get PaginationResult
	 * @return EbayTradingTypePaginationResultType
	 */
	public function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * Set HasMoreItems
	 * @param boolean HasMoreItems
	 * @return boolean
	 */
	public function setHasMoreItems($_HasMoreItems)
	{
		return ($this->HasMoreItems = $_HasMoreItems);
	}
	/**
	 * Get HasMoreItems
	 * @return boolean
	 */
	public function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
	/**
	 * Set ItemsPerPage
	 * @param int ItemsPerPage
	 * @return int
	 */
	public function setItemsPerPage($_ItemsPerPage)
	{
		return ($this->ItemsPerPage = $_ItemsPerPage);
	}
	/**
	 * Get ItemsPerPage
	 * @return int
	 */
	public function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}
	/**
	 * Set PageNumber
	 * @param int PageNumber
	 * @return int
	 */
	public function setPageNumber($_PageNumber)
	{
		return ($this->PageNumber = $_PageNumber);
	}
	/**
	 * Get PageNumber
	 * @return int
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
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
	 * Set VeROReportPacketStatus
	 * @param VeROReportPacketStatusCodeType VeROReportPacketStatus
	 * @return VeROReportPacketStatusCodeType
	 */
	public function setVeROReportPacketStatus($_VeROReportPacketStatus)
	{
		return ($this->VeROReportPacketStatus = EbayTradingTypeVeROReportPacketStatusCodeType::valueIsValid($_VeROReportPacketStatus)?$_VeROReportPacketStatus:null);
	}
	/**
	 * Get VeROReportPacketStatus
	 * @return EbayTradingTypeVeROReportPacketStatusCodeType
	 */
	public function getVeROReportPacketStatus()
	{
		return $this->VeROReportPacketStatus;
	}
	/**
	 * Set ReportedItemDetails
	 * @param VeROReportedItemDetailsType ReportedItemDetails
	 * @return VeROReportedItemDetailsType
	 */
	public function setReportedItemDetails($_ReportedItemDetails)
	{
		return ($this->ReportedItemDetails = $_ReportedItemDetails);
	}
	/**
	 * Get ReportedItemDetails
	 * @return EbayTradingTypeVeROReportedItemDetailsType
	 */
	public function getReportedItemDetails()
	{
		return $this->ReportedItemDetails;
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