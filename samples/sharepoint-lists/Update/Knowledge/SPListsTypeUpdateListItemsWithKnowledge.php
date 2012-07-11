<?php
/**
 * Class file for SPListsTypeUpdateListItemsWithKnowledge
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateListItemsWithKnowledge
 * @date 07/07/2012
 */
class SPListsTypeUpdateListItemsWithKnowledge extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The updates
	 * @var SPListsTypeUpdates
	 */
	public $updates;
	/**
	 * The syncScope
	 * @var string
	 */
	public $syncScope;
	/**
	 * The knowledge
	 * @var SPListsTypeKnowledge
	 */
	public $knowledge;
	/**
	 * Constructor
	 * @param string listName
	 * @param SPListsTypeUpdates updates
	 * @param string syncScope
	 * @param SPListsTypeKnowledge knowledge
	 * @return SPListsTypeUpdateListItemsWithKnowledge
	 */
	public function __construct($_listName = null,$_updates = null,$_syncScope = null,$_knowledge = null)
	{
		parent::__construct(array('listName'=>$_listName,'updates'=>$_updates,'syncScope'=>$_syncScope,'knowledge'=>$_knowledge));
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
	 * Set updates
	 * @param updates updates
	 * @return updates
	 */
	public function setUpdates($_updates)
	{
		return ($this->updates = $_updates);
	}
	/**
	 * Get updates
	 * @return SPListsTypeupdates
	 */
	public function getUpdates()
	{
		return $this->updates;
	}
	/**
	 * Set syncScope
	 * @param string syncScope
	 * @return string
	 */
	public function setSyncScope($_syncScope)
	{
		return ($this->syncScope = $_syncScope);
	}
	/**
	 * Get syncScope
	 * @return string
	 */
	public function getSyncScope()
	{
		return $this->syncScope;
	}
	/**
	 * Set knowledge
	 * @param knowledge knowledge
	 * @return knowledge
	 */
	public function setKnowledge($_knowledge)
	{
		return ($this->knowledge = $_knowledge);
	}
	/**
	 * Get knowledge
	 * @return SPListsTypeknowledge
	 */
	public function getKnowledge()
	{
		return $this->knowledge;
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