<?php
/**
 * Class file for ScienceGovSearchTypeGetSavedSearchesRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeGetSavedSearchesRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeGetSavedSearchesRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The userId
	 * @var string
	 */
	public $userId;
	/**
	 * Constructor
	 * @param string userId
	 * @return ScienceGovSearchTypeGetSavedSearchesRequest
	 */
	public function __construct($_userId = null)
	{
		parent::__construct(array('userId'=>$_userId));
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