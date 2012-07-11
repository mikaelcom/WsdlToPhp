<?php
/**
 * Class file for SPListsTypeCheckInFile
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeCheckInFile
 * @date 07/07/2012
 */
class SPListsTypeCheckInFile extends SPListsWsdlClass
{
	/**
	 * The pageUrl
	 * @var string
	 */
	public $pageUrl;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The CheckinType
	 * @var string
	 */
	public $CheckinType;
	/**
	 * Constructor
	 * @param string pageUrl
	 * @param string comment
	 * @param string CheckinType
	 * @return SPListsTypeCheckInFile
	 */
	public function __construct($_pageUrl = null,$_comment = null,$_CheckinType = null)
	{
		parent::__construct(array('pageUrl'=>$_pageUrl,'comment'=>$_comment,'CheckinType'=>$_CheckinType));
	}
	/**
	 * Set pageUrl
	 * @param string pageUrl
	 * @return string
	 */
	public function setPageUrl($_pageUrl)
	{
		return ($this->pageUrl = $_pageUrl);
	}
	/**
	 * Get pageUrl
	 * @return string
	 */
	public function getPageUrl()
	{
		return $this->pageUrl;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set CheckinType
	 * @param string CheckinType
	 * @return string
	 */
	public function setCheckinType($_CheckinType)
	{
		return ($this->CheckinType = $_CheckinType);
	}
	/**
	 * Get CheckinType
	 * @return string
	 */
	public function getCheckinType()
	{
		return $this->CheckinType;
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