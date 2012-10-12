<?php
/**
 * Class file for ScienceGovSearchTypeRetrieveIncrementalResultsRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeRetrieveIncrementalResultsRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeRetrieveIncrementalResultsRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The filters
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeFilterType
	 */
	public $filters;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeResultOrder
	 */
	public $order;
	/**
	 * The advancedOrder
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeSnapshotOrder
	 */
	public $advancedOrder;
	/**
	 * The snapshotId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $snapshotId;
	/**
	 * Constructor
	 * @param string searchId
	 * @param ScienceGovSearchTypeFilterType filters
	 * @param ScienceGovSearchTypeResultOrder order
	 * @param ScienceGovSearchTypeSnapshotOrder advancedOrder
	 * @param string snapshotId
	 * @return ScienceGovSearchTypeRetrieveIncrementalResultsRequest
	 */
	public function __construct($_searchId = null,$_filters = null,$_order = null,$_advancedOrder = null,$_snapshotId = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'filters'=>$_filters,'order'=>$_order,'advancedOrder'=>$_advancedOrder,'snapshotId'=>$_snapshotId));
	}
	/**
	 * Set searchId
	 * @param string searchId
	 * @return string
	 */
	public function setSearchId($_searchId)
	{
		return ($this->searchId = $_searchId);
	}
	/**
	 * Get searchId
	 * @return string
	 */
	public function getSearchId()
	{
		return $this->searchId;
	}
	/**
	 * Set filters
	 * @param FilterType filters
	 * @return FilterType
	 */
	public function setFilters($_filters)
	{
		return ($this->filters = ScienceGovSearchTypeFilterType::valueIsValid($_filters)?$_filters:null);
	}
	/**
	 * Get filters
	 * @return ScienceGovSearchTypeFilterType
	 */
	public function getFilters()
	{
		return $this->filters;
	}
	/**
	 * Set order
	 * @param ResultOrder order
	 * @return ResultOrder
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return ScienceGovSearchTypeResultOrder
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set advancedOrder
	 * @param SnapshotOrder advancedOrder
	 * @return SnapshotOrder
	 */
	public function setAdvancedOrder($_advancedOrder)
	{
		return ($this->advancedOrder = $_advancedOrder);
	}
	/**
	 * Get advancedOrder
	 * @return ScienceGovSearchTypeSnapshotOrder
	 */
	public function getAdvancedOrder()
	{
		return $this->advancedOrder;
	}
	/**
	 * Set snapshotId
	 * @param string snapshotId
	 * @return string
	 */
	public function setSnapshotId($_snapshotId)
	{
		return ($this->snapshotId = $_snapshotId);
	}
	/**
	 * Get snapshotId
	 * @return string
	 */
	public function getSnapshotId()
	{
		return $this->snapshotId;
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