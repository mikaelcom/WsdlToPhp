<?php
/**
 * Class file for ScienceGovSearchTypeCreateSnapshotRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeCreateSnapshotRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeCreateSnapshotRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The resultIds
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $resultIds;
	/**
	 * Constructor
	 * @param string searchId
	 * @param string resultIds
	 * @return ScienceGovSearchTypeCreateSnapshotRequest
	 */
	public function __construct($_searchId = null,$_resultIds = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'resultIds'=>$_resultIds));
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
	 * Set resultIds
	 * @param string resultIds
	 * @return string
	 */
	public function setResultIds($_resultIds)
	{
		return ($this->resultIds = $_resultIds);
	}
	/**
	 * Get resultIds
	 * @return string
	 */
	public function getResultIds()
	{
		return $this->resultIds;
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