<?php
/**
 * Class file for SPSitedataTypeGetContent
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetContent
 * @date 06/07/2012
 */
class SPSitedataTypeGetContent extends SPSitedataWsdlClass
{
	/**
	 * The objectType
	 * @var ObjectType
	 */
	public $objectType;
	/**
	 * The objectId
	 * @var string
	 */
	public $objectId;
	/**
	 * The folderUrl
	 * @var string
	 */
	public $folderUrl;
	/**
	 * The itemId
	 * @var string
	 */
	public $itemId;
	/**
	 * The retrieveChildItems
	 * @var boolean
	 */
	public $retrieveChildItems;
	/**
	 * The securityOnly
	 * @var boolean
	 */
	public $securityOnly;
	/**
	 * The lastItemIdOnPage
	 * @var string
	 */
	public $lastItemIdOnPage;
	/**
	 * Constructor
	 * @param ObjectType objectType
	 * @param string objectId
	 * @param string folderUrl
	 * @param string itemId
	 * @param boolean retrieveChildItems
	 * @param boolean securityOnly
	 * @param string lastItemIdOnPage
	 * @return SPSitedataTypeGetContent
	 */
	public function __construct($_objectType = null,$_objectId = null,$_folderUrl = null,$_itemId = null,$_retrieveChildItems = null,$_securityOnly = null,$_lastItemIdOnPage = null)
	{
		parent::__construct(array('objectType'=>$_objectType,'objectId'=>$_objectId,'folderUrl'=>$_folderUrl,'itemId'=>$_itemId,'retrieveChildItems'=>$_retrieveChildItems,'securityOnly'=>$_securityOnly,'lastItemIdOnPage'=>$_lastItemIdOnPage));
	}
	/**
	 * Set objectType
	 * @param ObjectType objectType
	 * @return ObjectType
	 */
	public function setObjectType($_objectType)
	{
		return ($this->objectType = $_objectType);
	}
	/**
	 * Get objectType
	 * @return ObjectType
	 */
	public function getObjectType()
	{
		return $this->objectType;
	}
	/**
	 * Set objectId
	 * @param string objectId
	 * @return string
	 */
	public function setObjectId($_objectId)
	{
		return ($this->objectId = $_objectId);
	}
	/**
	 * Get objectId
	 * @return string
	 */
	public function getObjectId()
	{
		return $this->objectId;
	}
	/**
	 * Set folderUrl
	 * @param string folderUrl
	 * @return string
	 */
	public function setFolderUrl($_folderUrl)
	{
		return ($this->folderUrl = $_folderUrl);
	}
	/**
	 * Get folderUrl
	 * @return string
	 */
	public function getFolderUrl()
	{
		return $this->folderUrl;
	}
	/**
	 * Set itemId
	 * @param string itemId
	 * @return string
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get itemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->itemId;
	}
	/**
	 * Set retrieveChildItems
	 * @param boolean retrieveChildItems
	 * @return boolean
	 */
	public function setRetrieveChildItems($_retrieveChildItems)
	{
		return ($this->retrieveChildItems = $_retrieveChildItems);
	}
	/**
	 * Get retrieveChildItems
	 * @return boolean
	 */
	public function getRetrieveChildItems()
	{
		return $this->retrieveChildItems;
	}
	/**
	 * Set securityOnly
	 * @param boolean securityOnly
	 * @return boolean
	 */
	public function setSecurityOnly($_securityOnly)
	{
		return ($this->securityOnly = $_securityOnly);
	}
	/**
	 * Get securityOnly
	 * @return boolean
	 */
	public function getSecurityOnly()
	{
		return $this->securityOnly;
	}
	/**
	 * Set lastItemIdOnPage
	 * @param string lastItemIdOnPage
	 * @return string
	 */
	public function setLastItemIdOnPage($_lastItemIdOnPage)
	{
		return ($this->lastItemIdOnPage = $_lastItemIdOnPage);
	}
	/**
	 * Get lastItemIdOnPage
	 * @return string
	 */
	public function getLastItemIdOnPage()
	{
		return $this->lastItemIdOnPage;
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