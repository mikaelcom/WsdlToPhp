<?php
/**
 * Class file for SPListsTypeAddDiscussionBoardItemResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddDiscussionBoardItemResponse
 * @date 07/07/2012
 */
class SPListsTypeAddDiscussionBoardItemResponse extends SPListsWsdlClass
{
	/**
	 * The AddDiscussionBoardItemResult
	 * @var SPListsTypeAddDiscussionBoardItemResult
	 */
	public $AddDiscussionBoardItemResult;
	/**
	 * Constructor
	 * @param SPListsTypeAddDiscussionBoardItemResult AddDiscussionBoardItemResult
	 * @return SPListsTypeAddDiscussionBoardItemResponse
	 */
	public function __construct($_AddDiscussionBoardItemResult = null)
	{
		parent::__construct(array('AddDiscussionBoardItemResult'=>$_AddDiscussionBoardItemResult));
	}
	/**
	 * Set AddDiscussionBoardItemResult
	 * @param AddDiscussionBoardItemResult AddDiscussionBoardItemResult
	 * @return AddDiscussionBoardItemResult
	 */
	public function setAddDiscussionBoardItemResult($_AddDiscussionBoardItemResult)
	{
		return ($this->AddDiscussionBoardItemResult = $_AddDiscussionBoardItemResult);
	}
	/**
	 * Get AddDiscussionBoardItemResult
	 * @return SPListsTypeAddDiscussionBoardItemResult
	 */
	public function getAddDiscussionBoardItemResult()
	{
		return $this->AddDiscussionBoardItemResult;
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