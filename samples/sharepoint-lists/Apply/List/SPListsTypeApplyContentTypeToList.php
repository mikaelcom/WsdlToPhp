<?php
/**
 * Class file for SPListsTypeApplyContentTypeToList
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeApplyContentTypeToList
 * @date 07/07/2012
 */
class SPListsTypeApplyContentTypeToList extends SPListsWsdlClass
{
	/**
	 * The webUrl
	 * @var string
	 */
	public $webUrl;
	/**
	 * The contentTypeId
	 * @var string
	 */
	public $contentTypeId;
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * Constructor
	 * @param string webUrl
	 * @param string contentTypeId
	 * @param string listName
	 * @return SPListsTypeApplyContentTypeToList
	 */
	public function __construct($_webUrl = null,$_contentTypeId = null,$_listName = null)
	{
		parent::__construct(array('webUrl'=>$_webUrl,'contentTypeId'=>$_contentTypeId,'listName'=>$_listName));
	}
	/**
	 * Set webUrl
	 * @param string webUrl
	 * @return string
	 */
	public function setWebUrl($_webUrl)
	{
		return ($this->webUrl = $_webUrl);
	}
	/**
	 * Get webUrl
	 * @return string
	 */
	public function getWebUrl()
	{
		return $this->webUrl;
	}
	/**
	 * Set contentTypeId
	 * @param string contentTypeId
	 * @return string
	 */
	public function setContentTypeId($_contentTypeId)
	{
		return ($this->contentTypeId = $_contentTypeId);
	}
	/**
	 * Get contentTypeId
	 * @return string
	 */
	public function getContentTypeId()
	{
		return $this->contentTypeId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>