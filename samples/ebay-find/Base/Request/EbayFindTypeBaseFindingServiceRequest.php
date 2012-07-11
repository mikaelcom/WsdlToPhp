<?php
/**
 * Class file for EbayFindTypeBaseFindingServiceRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeBaseFindingServiceRequest
 * Documentation : This is the base request container for all Finding Service operations.
 * @date 04/07/2012
 */
class EbayFindTypeBaseFindingServiceRequest extends EbayFindTypeBestMatchFindingServiceRequest
{
	/**
	 * The sortOrder
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Sort the returned items according to a single specified sort order.
	 * @var EbayFindTypeSortOrderType
	 */
	public $sortOrder;
	/**
	 * Constructor
	 * @param EbayFindTypeSortOrderType sortOrder
	 * @return EbayFindTypeBaseFindingServiceRequest
	 */
	public function __construct($_sortOrder = null)
	{
		EbayFindWsdlClass::__construct(array('sortOrder'=>$_sortOrder));
	}
	/**
	 * Set sortOrder
	 * @param SortOrderType sortOrder
	 * @return SortOrderType
	 */
	public function setSortOrder($_sortOrder)
	{
		return ($this->sortOrder = EbayFindTypeSortOrderType::valueIsValid($_sortOrder)?$_sortOrder:null);
	}
	/**
	 * Get sortOrder
	 * @return EbayFindTypeSortOrderType
	 */
	public function getSortOrder()
	{
		return $this->sortOrder;
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