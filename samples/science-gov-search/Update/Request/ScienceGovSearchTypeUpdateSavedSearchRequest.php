<?php
/**
 * Class file for ScienceGovSearchTypeUpdateSavedSearchRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeUpdateSavedSearchRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeUpdateSavedSearchRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The oldName
	 * @var string
	 */
	public $oldName;
	/**
	 * The newName
	 * @var string
	 */
	public $newName;
	/**
	 * The userId
	 * @var string
	 */
	public $userId;
	/**
	 * Constructor
	 * @param string oldName
	 * @param string newName
	 * @param string userId
	 * @return ScienceGovSearchTypeUpdateSavedSearchRequest
	 */
	public function __construct($_oldName = null,$_newName = null,$_userId = null)
	{
		parent::__construct(array('oldName'=>$_oldName,'newName'=>$_newName,'userId'=>$_userId));
	}
	/**
	 * Set oldName
	 * @param string oldName
	 * @return string
	 */
	public function setOldName($_oldName)
	{
		return ($this->oldName = $_oldName);
	}
	/**
	 * Get oldName
	 * @return string
	 */
	public function getOldName()
	{
		return $this->oldName;
	}
	/**
	 * Set newName
	 * @param string newName
	 * @return string
	 */
	public function setNewName($_newName)
	{
		return ($this->newName = $_newName);
	}
	/**
	 * Get newName
	 * @return string
	 */
	public function getNewName()
	{
		return $this->newName;
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