<?php
/**
 * Class file for YMailTypeListMessages
 * @date 02/07/2012
 */
/**
 * Class YMailTypeListMessages
 * @date 02/07/2012
 */
class YMailTypeListMessages extends YMailWsdlClass
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
	 * The fid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $fid;
	/**
	 * The filterBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFlag
	 */
	public $filterBy;
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
	 * The offsetMid
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $offsetMid;
	/**
	 * The loc
	 * Meta informations :
	 * 	- default : startWith
	 * @var YMailTypeOffsetType
	 */
	public $loc;
	/**
	 * Constructor
	 * @param YMailTypeSortKey sortKey
	 * @param YMailTypeSortOrder sortOrder
	 * @param string fid
	 * @param YMailTypeFlag filterBy
	 * @param YMailTypeGroupBy groupBy
	 * @param unsignedLong startMid
	 * @param unsignedLong startInfo
	 * @param unsignedLong numMid
	 * @param unsignedLong numInfo
	 * @param string offsetMid
	 * @param YMailTypeOffsetType loc
	 * @return YMailTypeListMessages
	 */
	public function __construct($_sortKey = 'date',$_sortOrder = 'down',$_fid,$_filterBy = null,$_groupBy = null,$_startMid = null,$_startInfo = null,$_numMid = null,$_numInfo = null,$_offsetMid = null,$_loc = 'startWith')
	{
		parent::__construct(array('sortKey'=>$_sortKey,'sortOrder'=>$_sortOrder,'fid'=>$_fid,'filterBy'=>$_filterBy,'groupBy'=>$_groupBy,'startMid'=>$_startMid,'startInfo'=>$_startInfo,'numMid'=>$_numMid,'numInfo'=>$_numInfo,'offsetMid'=>$_offsetMid,'loc'=>$_loc));
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
	 * Set fid
	 * @param string fid
	 * @return string
	 */
	public function setFid($_fid)
	{
		return ($this->fid = $_fid);
	}
	/**
	 * Get fid
	 * @return string
	 */
	public function getFid()
	{
		return $this->fid;
	}
	/**
	 * Set filterBy
	 * @param Flag filterBy
	 * @return Flag
	 */
	public function setFilterBy($_filterBy)
	{
		return ($this->filterBy = $_filterBy);
	}
	/**
	 * Get filterBy
	 * @return YMailTypeFlag
	 */
	public function getFilterBy()
	{
		return $this->filterBy;
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
	 * Set offsetMid
	 * @param string offsetMid
	 * @return string
	 */
	public function setOffsetMid($_offsetMid)
	{
		return ($this->offsetMid = $_offsetMid);
	}
	/**
	 * Get offsetMid
	 * @return string
	 */
	public function getOffsetMid()
	{
		return $this->offsetMid;
	}
	/**
	 * Set loc
	 * @param OffsetType loc
	 * @return OffsetType
	 */
	public function setLoc($_loc)
	{
		return ($this->loc = YMailTypeOffsetType::valueIsValid($_loc)?$_loc:null);
	}
	/**
	 * Get loc
	 * @return YMailTypeOffsetType
	 */
	public function getLoc()
	{
		return $this->loc;
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