<?php
/**
 * Class file for EbayTradingTypeGetUserDisputesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserDisputesRequestType
 * Documentation : Requests a list of disputes the requester is involved in as buyer or seller. eBay Buyer Protection Item Not Received and Significantly Not As Described cases are not returned with this call. To retrieve eBay Buyer Protection cases, the getUserCases call of the Resolution Case Management API must be used instead.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserDisputesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The DisputeFilterType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An inclusive filter that isolates the returned disputes to a certain type such as Item Not Received or Unpaid Item disputes. eBay Buyer Protection cases are not retrieved with this call, even if the ItemNotReceivedDisputes filter is included in the request.
	 * @var EbayTradingTypeDisputeFilterTypeCodeType
	 */
	public $DisputeFilterType;
	/**
	 * The DisputeSortType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value and sequence to use to sort the returned disputes.
	 * @var EbayTradingTypeDisputeSortTypeCodeType
	 */
	public $DisputeSortType;
	/**
	 * The ModTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A filter that retrieves disputes whose DisputeModifiedTime is later than or equal to this value. Specify the time value in GMT. See the eBay Web Services documentation for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify ModTimeTo. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like DisputeFilterType to control the amount of data returned.
	 * @var dateTime
	 */
	public $ModTimeFrom;
	/**
	 * The ModTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A filter that retrieves disputes whose DisputeModifiedTime is earlier than or equal to this value. Specify the time value in GMT. See the eBay Web Services documentation for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify ModTimeFrom. Otherwise, all available disputes modified prior to the ModTimeTo value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like DisputeFilterType to control the amount of data returned.
	 * @var dateTime
	 */
	public $ModTimeTo;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The virtual page number of the result set to display. A result set has a number of disputes divided into virtual pages, with 200 disputes per page. The response can only display one page. The first page in the result set is number 1. Required. If not specified, a warning is returned and Pagination.PageNumber is set to 1 by default.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeFilterTypeCodeType DisputeFilterType
	 * @param EbayTradingTypeDisputeSortTypeCodeType DisputeSortType
	 * @param dateTime ModTimeFrom
	 * @param dateTime ModTimeTo
	 * @param EbayTradingTypePaginationType Pagination
	 * @return EbayTradingTypeGetUserDisputesRequestType
	 */
	public function __construct($_DisputeFilterType = null,$_DisputeSortType = null,$_ModTimeFrom = null,$_ModTimeTo = null,$_Pagination = null)
	{
		EbayTradingWsdlClass::__construct(array('DisputeFilterType'=>$_DisputeFilterType,'DisputeSortType'=>$_DisputeSortType,'ModTimeFrom'=>$_ModTimeFrom,'ModTimeTo'=>$_ModTimeTo,'Pagination'=>$_Pagination));
	}
	/**
	 * Set DisputeFilterType
	 * @param DisputeFilterTypeCodeType DisputeFilterType
	 * @return DisputeFilterTypeCodeType
	 */
	public function setDisputeFilterType($_DisputeFilterType)
	{
		return ($this->DisputeFilterType = EbayTradingTypeDisputeFilterTypeCodeType::valueIsValid($_DisputeFilterType)?$_DisputeFilterType:null);
	}
	/**
	 * Get DisputeFilterType
	 * @return EbayTradingTypeDisputeFilterTypeCodeType
	 */
	public function getDisputeFilterType()
	{
		return $this->DisputeFilterType;
	}
	/**
	 * Set DisputeSortType
	 * @param DisputeSortTypeCodeType DisputeSortType
	 * @return DisputeSortTypeCodeType
	 */
	public function setDisputeSortType($_DisputeSortType)
	{
		return ($this->DisputeSortType = EbayTradingTypeDisputeSortTypeCodeType::valueIsValid($_DisputeSortType)?$_DisputeSortType:null);
	}
	/**
	 * Get DisputeSortType
	 * @return EbayTradingTypeDisputeSortTypeCodeType
	 */
	public function getDisputeSortType()
	{
		return $this->DisputeSortType;
	}
	/**
	 * Set ModTimeFrom
	 * @param dateTime ModTimeFrom
	 * @return dateTime
	 */
	public function setModTimeFrom($_ModTimeFrom)
	{
		return ($this->ModTimeFrom = $_ModTimeFrom);
	}
	/**
	 * Get ModTimeFrom
	 * @return dateTime
	 */
	public function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
	/**
	 * Set ModTimeTo
	 * @param dateTime ModTimeTo
	 * @return dateTime
	 */
	public function setModTimeTo($_ModTimeTo)
	{
		return ($this->ModTimeTo = $_ModTimeTo);
	}
	/**
	 * Get ModTimeTo
	 * @return dateTime
	 */
	public function getModTimeTo()
	{
		return $this->ModTimeTo;
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