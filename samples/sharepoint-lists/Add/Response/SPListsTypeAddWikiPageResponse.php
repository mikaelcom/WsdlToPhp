<?php
/**
 * Class file for SPListsTypeAddWikiPageResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddWikiPageResponse
 * @date 07/07/2012
 */
class SPListsTypeAddWikiPageResponse extends SPListsWsdlClass
{
	/**
	 * The AddWikiPageResult
	 * @var SPListsTypeAddWikiPageResult
	 */
	public $AddWikiPageResult;
	/**
	 * Constructor
	 * @param SPListsTypeAddWikiPageResult AddWikiPageResult
	 * @return SPListsTypeAddWikiPageResponse
	 */
	public function __construct($_AddWikiPageResult = null)
	{
		parent::__construct(array('AddWikiPageResult'=>$_AddWikiPageResult));
	}
	/**
	 * Set AddWikiPageResult
	 * @param AddWikiPageResult AddWikiPageResult
	 * @return AddWikiPageResult
	 */
	public function setAddWikiPageResult($_AddWikiPageResult)
	{
		return ($this->AddWikiPageResult = $_AddWikiPageResult);
	}
	/**
	 * Get AddWikiPageResult
	 * @return SPListsTypeAddWikiPageResult
	 */
	public function getAddWikiPageResult()
	{
		return $this->AddWikiPageResult;
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