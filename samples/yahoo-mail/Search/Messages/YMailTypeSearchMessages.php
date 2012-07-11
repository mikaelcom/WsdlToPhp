<?php
/**
 * Class file for YMailTypeSearchMessages
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchMessages
 * @date 02/07/2012
 */
class YMailTypeSearchMessages extends YMailWsdlClass
{
	/**
	 * The sortKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : date
	 * @var YMailTypeSortKey
	 */
	public $sortKey;
	/**
	 * The sortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : down
	 * @var YMailTypeSortOrder
	 */
	public $sortOrder;
	/**
	 * The search
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var YMailTypeSearchQuery
	 */
	public $search;
	/**
	 * The groupBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeGroupBy
	 */
	public $groupBy;
	/**
	 * The startMid
	 * Meta informations :
	 * 	- use : optional
	 * @var unsignedLong
	 */
	public $startMid;
	/**
	 * The startInfo
	 * Meta informations :
	 * 	- use : optional
	 * @var unsignedLong
	 */
	public $startInfo;
	/**
	 * The numMid
	 * Meta informations :
	 * 	- use : optional
	 * @var unsignedLong
	 */
	public $numMid;
	/**
	 * The numInfo
	 * Meta informations :
	 * 	- use : optional
	 * @var unsignedLong
	 */
	public $numInfo;
	/**
	 * Constructor
	 * @param YMailTypeSortKey sortKey
	 * @param YMailTypeSortOrder sortOrder
	 * @param YMailTypeSearchQuery search
	 * @param YMailTypeGroupBy groupBy
	 * @param unsignedLong startMid
	 * @param unsignedLong startInfo
	 * @param unsignedLong numMid
	 * @param unsignedLong numInfo
	 * @return YMailTypeSearchMessages
	 */
	public function __construct($_sortKey = 'date',$_sortOrder = 'down',$_search,$_groupBy = null,$_startMid = null,$_startInfo = null,$_numMid = null,$_numInfo = null)
	{
		parent::__construct(array('sortKey'=>$_sortKey,'sortOrder'=>$_sortOrder,'search'=>$_search,'groupBy'=>$_groupBy,'startMid'=>$_startMid,'startInfo'=>$_startInfo,'numMid'=>$_numMid,'numInfo'=>$_numInfo));
	}
	/**
	 * Set sortKey
	 * @param SortKey sortKey
	 * @return SortKey
	 */
	public function setSortKey($_sortKey)
	{
		return ($this->sortKey = YMailTypeSortKey::valueIsValid($_sortKey)?$_sortKey:null);
	}
	/**
	 * Get sortKey
	 * @return YMailTypeSortKey
	 */
	public function getSortKey()
	{
		return $this->sortKey;
	}
	/**
	 * Set sortOrder
	 * @param SortOrder sortOrder
	 * @return SortOrder
	 */
	public function setSortOrder($_sortOrder)
	{
		return ($this->sortOrder = YMailTypeSortOrder::valueIsValid($_sortOrder)?$_sortOrder:null);
	}
	/**
	 * Get sortOrder
	 * @return YMailTypeSortOrder
	 */
	public function getSortOrder()
	{
		return $this->sortOrder;
	}
	/**
	 * Set search
	 * @param SearchQuery search
	 * @return SearchQuery
	 */
	public function setSearch($_search)
	{
		return ($this->search = $_search);
	}
	/**
	 * Get search
	 * @return YMailTypeSearchQuery
	 */
	public function getSearch()
	{
		return $this->search;
	}
	/**
	 * Set groupBy
	 * @param GroupBy groupBy
	 * @return GroupBy
	 */
	public function setGroupBy($_groupBy)
	{
		return ($this->groupBy = YMailTypeGroupBy::valueIsValid($_groupBy)?$_groupBy:null);
	}
	/**
	 * Get groupBy
	 * @return YMailTypeGroupBy
	 */
	public function getGroupBy()
	{
		return $this->groupBy;
	}
	/**
	 * Set startMid
	 * @param unsignedLong startMid
	 * @return unsignedLong
	 */
	public function setStartMid($_startMid)
	{
		return ($this->startMid = $_startMid);
	}
	/**
	 * Get startMid
	 * @return unsignedLong
	 */
	public function getStartMid()
	{
		return $this->startMid;
	}
	/**
	 * Set startInfo
	 * @param unsignedLong startInfo
	 * @return unsignedLong
	 */
	public function setStartInfo($_startInfo)
	{
		return ($this->startInfo = $_startInfo);
	}
	/**
	 * Get startInfo
	 * @return unsignedLong
	 */
	public function getStartInfo()
	{
		return $this->startInfo;
	}
	/**
	 * Set numMid
	 * @param unsignedLong numMid
	 * @return unsignedLong
	 */
	public function setNumMid($_numMid)
	{
		return ($this->numMid = $_numMid);
	}
	/**
	 * Get numMid
	 * @return unsignedLong
	 */
	public function getNumMid()
	{
		return $this->numMid;
	}
	/**
	 * Set numInfo
	 * @param unsignedLong numInfo
	 * @return unsignedLong
	 */
	public function setNumInfo($_numInfo)
	{
		return ($this->numInfo = $_numInfo);
	}
	/**
	 * Get numInfo
	 * @return unsignedLong
	 */
	public function getNumInfo()
	{
		return $this->numInfo;
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