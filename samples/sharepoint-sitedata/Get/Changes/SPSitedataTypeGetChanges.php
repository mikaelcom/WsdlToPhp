<?php
/**
 * Class file for SPSitedataTypeGetChanges
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetChanges
 * @date 06/07/2012
 */
class SPSitedataTypeGetChanges extends SPSitedataWsdlClass
{
	/**
	 * The objectType
	 * @var ObjectType
	 */
	public $objectType;
	/**
	 * The contentDatabaseId
	 * @var string
	 */
	public $contentDatabaseId;
	/**
	 * The LastChangeId
	 * @var string
	 */
	public $LastChangeId;
	/**
	 * The CurrentChangeId
	 * @var string
	 */
	public $CurrentChangeId;
	/**
	 * The Timeout
	 * @var int
	 */
	public $Timeout;
	/**
	 * Constructor
	 * @param ObjectType objectType
	 * @param string contentDatabaseId
	 * @param string LastChangeId
	 * @param string CurrentChangeId
	 * @param int Timeout
	 * @return SPSitedataTypeGetChanges
	 */
	public function __construct($_objectType = null,$_contentDatabaseId = null,$_LastChangeId = null,$_CurrentChangeId = null,$_Timeout = null)
	{
		parent::__construct(array('objectType'=>$_objectType,'contentDatabaseId'=>$_contentDatabaseId,'LastChangeId'=>$_LastChangeId,'CurrentChangeId'=>$_CurrentChangeId,'Timeout'=>$_Timeout));
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
	 * Set contentDatabaseId
	 * @param string contentDatabaseId
	 * @return string
	 */
	public function setContentDatabaseId($_contentDatabaseId)
	{
		return ($this->contentDatabaseId = $_contentDatabaseId);
	}
	/**
	 * Get contentDatabaseId
	 * @return string
	 */
	public function getContentDatabaseId()
	{
		return $this->contentDatabaseId;
	}
	/**
	 * Set LastChangeId
	 * @param string LastChangeId
	 * @return string
	 */
	public function setLastChangeId($_LastChangeId)
	{
		return ($this->LastChangeId = $_LastChangeId);
	}
	/**
	 * Get LastChangeId
	 * @return string
	 */
	public function getLastChangeId()
	{
		return $this->LastChangeId;
	}
	/**
	 * Set CurrentChangeId
	 * @param string CurrentChangeId
	 * @return string
	 */
	public function setCurrentChangeId($_CurrentChangeId)
	{
		return ($this->CurrentChangeId = $_CurrentChangeId);
	}
	/**
	 * Get CurrentChangeId
	 * @return string
	 */
	public function getCurrentChangeId()
	{
		return $this->CurrentChangeId;
	}
	/**
	 * Set Timeout
	 * @param int Timeout
	 * @return int
	 */
	public function setTimeout($_Timeout)
	{
		return ($this->Timeout = $_Timeout);
	}
	/**
	 * Get Timeout
	 * @return int
	 */
	public function getTimeout()
	{
		return $this->Timeout;
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