<?php
/**
 * Class file for EbayFindTypeFindItemsForFavoriteSearchRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsForFavoriteSearchRequest
 * Documentation : Reserved for future use.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsForFavoriteSearchRequest extends EbayFindTypeBaseServiceRequest
{
	/**
	 * The searchId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Reserved for future use.
	 * @var long
	 */
	public $searchId;
	/**
	 * The searchName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Reserved for future use.
	 * @var string
	 */
	public $searchName;
	/**
	 * The startTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Reserved for future use.
	 * @var dateTime
	 */
	public $startTimeFrom;
	/**
	 * The paginationInput
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EbayFindTypePaginationInput
	 */
	public $paginationInput;
	/**
	 * Constructor
	 * @param long searchId
	 * @param string searchName
	 * @param dateTime startTimeFrom
	 * @param EbayFindTypePaginationInput paginationInput
	 * @return EbayFindTypeFindItemsForFavoriteSearchRequest
	 */
	public function __construct($_searchId = null,$_searchName = null,$_startTimeFrom = null,$_paginationInput = null)
	{
		EbayFindWsdlClass::__construct(array('searchId'=>$_searchId,'searchName'=>$_searchName,'startTimeFrom'=>$_startTimeFrom,'paginationInput'=>$_paginationInput));
	}
	/**
	 * Set searchId
	 * @param long searchId
	 * @return long
	 */
	public function setSearchId($_searchId)
	{
		return ($this->searchId = $_searchId);
	}
	/**
	 * Get searchId
	 * @return long
	 */
	public function getSearchId()
	{
		return $this->searchId;
	}
	/**
	 * Set searchName
	 * @param string searchName
	 * @return string
	 */
	public function setSearchName($_searchName)
	{
		return ($this->searchName = $_searchName);
	}
	/**
	 * Get searchName
	 * @return string
	 */
	public function getSearchName()
	{
		return $this->searchName;
	}
	/**
	 * Set startTimeFrom
	 * @param dateTime startTimeFrom
	 * @return dateTime
	 */
	public function setStartTimeFrom($_startTimeFrom)
	{
		return ($this->startTimeFrom = $_startTimeFrom);
	}
	/**
	 * Get startTimeFrom
	 * @return dateTime
	 */
	public function getStartTimeFrom()
	{
		return $this->startTimeFrom;
	}
	/**
	 * Set paginationInput
	 * @param PaginationInput paginationInput
	 * @return PaginationInput
	 */
	public function setPaginationInput($_paginationInput)
	{
		return ($this->paginationInput = $_paginationInput);
	}
	/**
	 * Get paginationInput
	 * @return EbayFindTypePaginationInput
	 */
	public function getPaginationInput()
	{
		return $this->paginationInput;
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