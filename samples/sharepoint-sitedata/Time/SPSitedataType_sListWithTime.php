<?php
/**
 * Class file for SPSitedataType_sListWithTime
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sListWithTime
 * @date 06/07/2012
 */
class SPSitedataType_sListWithTime extends SPSitedataWsdlClass
{
	/**
	 * The InternalName
	 * @var string
	 */
	public $InternalName;
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * The IsEmpty
	 * @var boolean
	 */
	public $IsEmpty;
	/**
	 * Constructor
	 * @param string InternalName
	 * @param dateTime LastModified
	 * @param boolean IsEmpty
	 * @return SPSitedataType_sListWithTime
	 */
	public function __construct($_InternalName = null,$_LastModified = null,$_IsEmpty = null)
	{
		parent::__construct(array('InternalName'=>$_InternalName,'LastModified'=>$_LastModified,'IsEmpty'=>$_IsEmpty));
	}
	/**
	 * Set InternalName
	 * @param string InternalName
	 * @return string
	 */
	public function setInternalName($_InternalName)
	{
		return ($this->InternalName = $_InternalName);
	}
	/**
	 * Get InternalName
	 * @return string
	 */
	public function getInternalName()
	{
		return $this->InternalName;
	}
	/**
	 * Set LastModified
	 * @param dateTime LastModified
	 * @return dateTime
	 */
	public function setLastModified($_LastModified)
	{
		return ($this->LastModified = $_LastModified);
	}
	/**
	 * Get LastModified
	 * @return dateTime
	 */
	public function getLastModified()
	{
		return $this->LastModified;
	}
	/**
	 * Set IsEmpty
	 * @param boolean IsEmpty
	 * @return boolean
	 */
	public function setIsEmpty($_IsEmpty)
	{
		return ($this->IsEmpty = $_IsEmpty);
	}
	/**
	 * Get IsEmpty
	 * @return boolean
	 */
	public function getIsEmpty()
	{
		return $this->IsEmpty;
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