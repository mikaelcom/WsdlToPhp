<?php
/**
 * Class file for SPListsTypeUpdateListItemsWithKnowledgeResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateListItemsWithKnowledgeResponse
 * @date 07/07/2012
 */
class SPListsTypeUpdateListItemsWithKnowledgeResponse extends SPListsWsdlClass
{
	/**
	 * The UpdateListItemsWithKnowledgeResult
	 * @var SPListsTypeUpdateListItemsWithKnowledgeResult
	 */
	public $UpdateListItemsWithKnowledgeResult;
	/**
	 * Constructor
	 * @param SPListsTypeUpdateListItemsWithKnowledgeResult UpdateListItemsWithKnowledgeResult
	 * @return SPListsTypeUpdateListItemsWithKnowledgeResponse
	 */
	public function __construct($_UpdateListItemsWithKnowledgeResult = null)
	{
		parent::__construct(array('UpdateListItemsWithKnowledgeResult'=>$_UpdateListItemsWithKnowledgeResult));
	}
	/**
	 * Set UpdateListItemsWithKnowledgeResult
	 * @param UpdateListItemsWithKnowledgeResult UpdateListItemsWithKnowledgeResult
	 * @return UpdateListItemsWithKnowledgeResult
	 */
	public function setUpdateListItemsWithKnowledgeResult($_UpdateListItemsWithKnowledgeResult)
	{
		return ($this->UpdateListItemsWithKnowledgeResult = $_UpdateListItemsWithKnowledgeResult);
	}
	/**
	 * Get UpdateListItemsWithKnowledgeResult
	 * @return SPListsTypeUpdateListItemsWithKnowledgeResult
	 */
	public function getUpdateListItemsWithKnowledgeResult()
	{
		return $this->UpdateListItemsWithKnowledgeResult;
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