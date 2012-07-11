<?php
/**
 * Class file for SPListsTypeUpdateContentTypesXmlDocument
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateContentTypesXmlDocument
 * @date 07/07/2012
 */
class SPListsTypeUpdateContentTypesXmlDocument extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The newDocument
	 * @var SPListsTypeNewDocument
	 */
	public $newDocument;
	/**
	 * Constructor
	 * @param string listName
	 * @param SPListsTypeNewDocument newDocument
	 * @return SPListsTypeUpdateContentTypesXmlDocument
	 */
	public function __construct($_listName = null,$_newDocument = null)
	{
		parent::__construct(array('listName'=>$_listName,'newDocument'=>$_newDocument));
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
	 * Set newDocument
	 * @param newDocument newDocument
	 * @return newDocument
	 */
	public function setNewDocument($_newDocument)
	{
		return ($this->newDocument = $_newDocument);
	}
	/**
	 * Get newDocument
	 * @return SPListsTypenewDocument
	 */
	public function getNewDocument()
	{
		return $this->newDocument;
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