<?php
/**
 * Class file for SPListsTypeGetListItemChangesWithKnowledgeResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListItemChangesWithKnowledgeResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListItemChangesWithKnowledgeResponse extends SPListsWsdlClass
{
	/**
	 * The GetListItemChangesWithKnowledgeResult
	 * @var SPListsTypeGetListItemChangesWithKnowledgeResult
	 */
	public $GetListItemChangesWithKnowledgeResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListItemChangesWithKnowledgeResult GetListItemChangesWithKnowledgeResult
	 * @return SPListsTypeGetListItemChangesWithKnowledgeResponse
	 */
	public function __construct($_GetListItemChangesWithKnowledgeResult = null)
	{
		parent::__construct(array('GetListItemChangesWithKnowledgeResult'=>$_GetListItemChangesWithKnowledgeResult));
	}
	/**
	 * Set GetListItemChangesWithKnowledgeResult
	 * @param GetListItemChangesWithKnowledgeResult GetListItemChangesWithKnowledgeResult
	 * @return GetListItemChangesWithKnowledgeResult
	 */
	public function setGetListItemChangesWithKnowledgeResult($_GetListItemChangesWithKnowledgeResult)
	{
		return ($this->GetListItemChangesWithKnowledgeResult = $_GetListItemChangesWithKnowledgeResult);
	}
	/**
	 * Get GetListItemChangesWithKnowledgeResult
	 * @return SPListsTypeGetListItemChangesWithKnowledgeResult
	 */
	public function getGetListItemChangesWithKnowledgeResult()
	{
		return $this->GetListItemChangesWithKnowledgeResult;
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