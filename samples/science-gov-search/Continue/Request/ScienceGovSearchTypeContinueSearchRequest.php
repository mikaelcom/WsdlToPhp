<?php
/**
 * Class file for ScienceGovSearchTypeContinueSearchRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeContinueSearchRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeContinueSearchRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The collectionCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 1
	 * @var string
	 */
	public $collectionCodes;
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The searchTypes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeSearchType
	 */
	public $searchTypes;
	/**
	 * The timeAllotted
	 * @var long
	 */
	public $timeAllotted;
	/**
	 * Constructor
	 * @param string collectionCodes
	 * @param string searchId
	 * @param ScienceGovSearchTypeSearchType searchTypes
	 * @param long timeAllotted
	 * @return ScienceGovSearchTypeContinueSearchRequest
	 */
	public function __construct($_collectionCodes,$_searchId = null,$_searchTypes = null,$_timeAllotted = null)
	{
		parent::__construct(array('collectionCodes'=>$_collectionCodes,'searchId'=>$_searchId,'searchTypes'=>$_searchTypes,'timeAllotted'=>$_timeAllotted));
	}
	/**
	 * Set collectionCodes
	 * @param string collectionCodes
	 * @return string
	 */
	public function setCollectionCodes($_collectionCodes)
	{
		return ($this->collectionCodes = $_collectionCodes);
	}
	/**
	 * Get collectionCodes
	 * @return string
	 */
	public function getCollectionCodes()
	{
		return $this->collectionCodes;
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
	 * Set searchTypes
	 * @param SearchType searchTypes
	 * @return SearchType
	 */
	public function setSearchTypes($_searchTypes)
	{
		return ($this->searchTypes = ScienceGovSearchTypeSearchType::valueIsValid($_searchTypes)?$_searchTypes:null);
	}
	/**
	 * Get searchTypes
	 * @return ScienceGovSearchTypeSearchType
	 */
	public function getSearchTypes()
	{
		return $this->searchTypes;
	}
	/**
	 * Set timeAllotted
	 * @param long timeAllotted
	 * @return long
	 */
	public function setTimeAllotted($_timeAllotted)
	{
		return ($this->timeAllotted = $_timeAllotted);
	}
	/**
	 * Get timeAllotted
	 * @return long
	 */
	public function getTimeAllotted()
	{
		return $this->timeAllotted;
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