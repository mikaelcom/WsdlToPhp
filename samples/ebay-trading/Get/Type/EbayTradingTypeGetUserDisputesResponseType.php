<?php
/**
 * Class file for EbayTradingTypeGetUserDisputesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserDisputesResponseType
 * Documentation : Returns a list of disputes that involve the calling user as buyer or seller, in response to a GetUserDisputesRequest.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserDisputesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The StartingDisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns a StartingDisputeID value of 1 and the second page returns a StartingDisputeID value of 201.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $StartingDisputeID;
	/**
	 * The EndingDisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned per page: The first page returns an EndingDisputeID value of 200 and the second page returns an EndingDisputeID value of 228.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $EndingDisputeID;
	/**
	 * The DisputeArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The array of disputes returned.
	 * @var EbayTradingTypeDisputeArrayType
	 */
	public $DisputeArray;
	/**
	 * The ItemsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of disputes on each virtual page in the result set. The virtual page returned is determined by PageNumber. Default is 200.
	 * @var int
	 */
	public $ItemsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The page of the total result set returned in the call. The entire result set is virtual and the call returns only one page of it.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The DisputeFilterCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The number of disputes that involve the requester as buyer or seller and match a given filter type.
	 * @var EbayTradingTypeDisputeFilterCountType
	 */
	public $DisputeFilterCount;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The result of the pagination, including the total number of virtual pages in the result set and the total number of disputes returned.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeIDType StartingDisputeID
	 * @param EbayTradingTypeDisputeIDType EndingDisputeID
	 * @param EbayTradingTypeDisputeArrayType DisputeArray
	 * @param int ItemsPerPage
	 * @param int PageNumber
	 * @param EbayTradingTypeDisputeFilterCountType DisputeFilterCount
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @return EbayTradingTypeGetUserDisputesResponseType
	 */
	public function __construct($_StartingDisputeID = null,$_EndingDisputeID = null,$_DisputeArray = null,$_ItemsPerPage = null,$_PageNumber = null,$_DisputeFilterCount = null,$_PaginationResult = null)
	{
		EbayTradingWsdlClass::__construct(array('StartingDisputeID'=>$_StartingDisputeID,'EndingDisputeID'=>$_EndingDisputeID,'DisputeArray'=>$_DisputeArray,'ItemsPerPage'=>$_ItemsPerPage,'PageNumber'=>$_PageNumber,'DisputeFilterCount'=>$_DisputeFilterCount,'PaginationResult'=>$_PaginationResult));
	}
	/**
	 * Set StartingDisputeID
	 * @param DisputeIDType StartingDisputeID
	 * @return DisputeIDType
	 */
	public function setStartingDisputeID($_StartingDisputeID)
	{
		return ($this->StartingDisputeID = EbayTradingTypeDisputeIDType::valueIsValid($_StartingDisputeID)?$_StartingDisputeID:null);
	}
	/**
	 * Get StartingDisputeID
	 * @return EbayTradingTypeDisputeIDType
	 */
	public function getStartingDisputeID()
	{
		return $this->StartingDisputeID;
	}
	/**
	 * Set EndingDisputeID
	 * @param DisputeIDType EndingDisputeID
	 * @return DisputeIDType
	 */
	public function setEndingDisputeID($_EndingDisputeID)
	{
		return ($this->EndingDisputeID = EbayTradingTypeDisputeIDType::valueIsValid($_EndingDisputeID)?$_EndingDisputeID:null);
	}
	/**
	 * Get EndingDisputeID
	 * @return EbayTradingTypeDisputeIDType
	 */
	public function getEndingDisputeID()
	{
		return $this->EndingDisputeID;
	}
	/**
	 * Set DisputeArray
	 * @param DisputeArrayType DisputeArray
	 * @return DisputeArrayType
	 */
	public function setDisputeArray($_DisputeArray)
	{
		return ($this->DisputeArray = $_DisputeArray);
	}
	/**
	 * Get DisputeArray
	 * @return EbayTradingTypeDisputeArrayType
	 */
	public function getDisputeArray()
	{
		return $this->DisputeArray;
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
	 * Set DisputeFilterCount
	 * @param DisputeFilterCountType DisputeFilterCount
	 * @return DisputeFilterCountType
	 */
	public function setDisputeFilterCount($_DisputeFilterCount)
	{
		return ($this->DisputeFilterCount = $_DisputeFilterCount);
	}
	/**
	 * Get DisputeFilterCount
	 * @return EbayTradingTypeDisputeFilterCountType
	 */
	public function getDisputeFilterCount()
	{
		return $this->DisputeFilterCount;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>