<?php
/**
 * Class file for SPSitedataTypeGetChangesResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetChangesResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetChangesResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetChangesResult
	 * @var string
	 */
	public $GetChangesResult;
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
	 * The moreChanges
	 * @var boolean
	 */
	public $moreChanges;
	/**
	 * Constructor
	 * @param string GetChangesResult
	 * @param string LastChangeId
	 * @param string CurrentChangeId
	 * @param boolean moreChanges
	 * @return SPSitedataTypeGetChangesResponse
	 */
	public function __construct($_GetChangesResult = null,$_LastChangeId = null,$_CurrentChangeId = null,$_moreChanges = null)
	{
		parent::__construct(array('GetChangesResult'=>$_GetChangesResult,'LastChangeId'=>$_LastChangeId,'CurrentChangeId'=>$_CurrentChangeId,'moreChanges'=>$_moreChanges));
	}
	/**
	 * Set GetChangesResult
	 * @param string GetChangesResult
	 * @return string
	 */
	public function setGetChangesResult($_GetChangesResult)
	{
		return ($this->GetChangesResult = $_GetChangesResult);
	}
	/**
	 * Get GetChangesResult
	 * @return string
	 */
	public function getGetChangesResult()
	{
		return $this->GetChangesResult;
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
	 * Set moreChanges
	 * @param boolean moreChanges
	 * @return boolean
	 */
	public function setMoreChanges($_moreChanges)
	{
		return ($this->moreChanges = $_moreChanges);
	}
	/**
	 * Get moreChanges
	 * @return boolean
	 */
	public function getMoreChanges()
	{
		return $this->moreChanges;
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