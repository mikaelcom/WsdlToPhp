<?php
/**
 * Class file for YMailTypeListMessagesResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeListMessagesResponse
 * @date 02/07/2012
 */
class YMailTypeListMessagesResponse extends YMailWsdlClass
{
	/**
	 * The folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFolderData
	 */
	public $folder;
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $mid;
	/**
	 * The messageInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeMessageInfo
	 */
	public $messageInfo;
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
	 * The loc
	 * Meta informations :
	 * 	- default : na
	 * @var YMailTypeMidLocationRes
	 */
	public $loc;
	/**
	 * The groupBy
	 * Meta informations :
	 * 	- use : optional
	 * @var YMailTypeGroupBy
	 */
	public $groupBy;
	/**
	 * Constructor
	 * @param YMailTypeFolderData folder
	 * @param string mid
	 * @param YMailTypeMessageInfo messageInfo
	 * @param unsignedLong startMid
	 * @param unsignedLong startInfo
	 * @param unsignedLong numMid
	 * @param unsignedLong numInfo
	 * @param YMailTypeMidLocationRes loc
	 * @param YMailTypeGroupBy groupBy
	 * @return YMailTypeListMessagesResponse
	 */
	public function __construct($_folder = null,$_mid = null,$_messageInfo = null,$_startMid = null,$_startInfo = null,$_numMid = null,$_numInfo = null,$_loc = 'na',$_groupBy = null)
	{
		parent::__construct(array('folder'=>$_folder,'mid'=>$_mid,'messageInfo'=>$_messageInfo,'startMid'=>$_startMid,'startInfo'=>$_startInfo,'numMid'=>$_numMid,'numInfo'=>$_numInfo,'loc'=>$_loc,'groupBy'=>$_groupBy));
	}
	/**
	 * Set folder
	 * @param FolderData folder
	 * @return FolderData
	 */
	public function setFolder($_folder)
	{
		return ($this->folder = $_folder);
	}
	/**
	 * Get folder
	 * @return YMailTypeFolderData
	 */
	public function getFolder()
	{
		return $this->folder;
	}
	/**
	 * Set mid
	 * @param string mid
	 * @return string
	 */
	public function setMid($_mid)
	{
		return ($this->mid = $_mid);
	}
	/**
	 * Get mid
	 * @return string
	 */
	public function getMid()
	{
		return $this->mid;
	}
	/**
	 * Set messageInfo
	 * @param MessageInfo messageInfo
	 * @return MessageInfo
	 */
	public function setMessageInfo($_messageInfo)
	{
		return ($this->messageInfo = $_messageInfo);
	}
	/**
	 * Get messageInfo
	 * @return YMailTypeMessageInfo
	 */
	public function getMessageInfo()
	{
		return $this->messageInfo;
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
	 * Set loc
	 * @param MidLocationRes loc
	 * @return MidLocationRes
	 */
	public function setLoc($_loc)
	{
		return ($this->loc = YMailTypeMidLocationRes::valueIsValid($_loc)?$_loc:null);
	}
	/**
	 * Get loc
	 * @return YMailTypeMidLocationRes
	 */
	public function getLoc()
	{
		return $this->loc;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>