<?php
/**
 * Class file for ScienceGovSearchTypeDeleteSavedSearchRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeDeleteSavedSearchRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeDeleteSavedSearchRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The userId
	 * @var string
	 */
	public $userId;
	/**
	 * Constructor
	 * @param string searchId
	 * @param string userId
	 * @return ScienceGovSearchTypeDeleteSavedSearchRequest
	 */
	public function __construct($_searchId = null,$_userId = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'userId'=>$_userId));
	}
	/**
	 * Set searchId
	 * @param string searchId
	 * @return string
	 */
	public function setSearchId($_searchId)
	{
		return ($this->searchId = $_searchId);
	}
	/**
	 * Get searchId
	 * @return string
	 */
	public function getSearchId()
	{
		return $this->searchId;
	}
	/**
	 * Set userId
	 * @param string userId
	 * @return string
	 */
	public function setUserId($_userId)
	{
		return ($this->userId = $_userId);
	}
	/**
	 * Get userId
	 * @return string
	 */
	public function getUserId()
	{
		return $this->userId;
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