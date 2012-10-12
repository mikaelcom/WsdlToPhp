<?php
/**
 * Class file for ScienceGovSearchTypeSaveSearchRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSaveSearchRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSaveSearchRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The searchName
	 * @var string
	 */
	public $searchName;
	/**
	 * The userId
	 * @var string
	 */
	public $userId;
	/**
	 * Constructor
	 * @param string searchId
	 * @param string searchName
	 * @param string userId
	 * @return ScienceGovSearchTypeSaveSearchRequest
	 */
	public function __construct($_searchId = null,$_searchName = null,$_userId = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'searchName'=>$_searchName,'userId'=>$_userId));
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
	 * Set searchName
	 * @param string searchName
	 * @return string
	 */
	public function setSearchName($_searchName)
	{
		return ($this->searchName = $_searchName);
	}
	/**
	 * Get searchName
	 * @return string
	 */
	public function getSearchName()
	{
		return $this->searchName;
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