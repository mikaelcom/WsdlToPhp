<?php
/**
 * Class file for SPListsTypeDeleteAttachment
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeDeleteAttachment
 * @date 07/07/2012
 */
class SPListsTypeDeleteAttachment extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The listItemID
	 * @var string
	 */
	public $listItemID;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * Constructor
	 * @param string listName
	 * @param string listItemID
	 * @param string url
	 * @return SPListsTypeDeleteAttachment
	 */
	public function __construct($_listName = null,$_listItemID = null,$_url = null)
	{
		parent::__construct(array('listName'=>$_listName,'listItemID'=>$_listItemID,'url'=>$_url));
	}
	/**
	 * Set listName
	 * @param string listName
	 * @return string
	 */
	public function setListName($_listName)
	{
		return ($this->listName = $_listName);
	}
	/**
	 * Get listName
	 * @return string
	 */
	public function getListName()
	{
		return $this->listName;
	}
	/**
	 * Set listItemID
	 * @param string listItemID
	 * @return string
	 */
	public function setListItemID($_listItemID)
	{
		return ($this->listItemID = $_listItemID);
	}
	/**
	 * Get listItemID
	 * @return string
	 */
	public function getListItemID()
	{
		return $this->listItemID;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
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