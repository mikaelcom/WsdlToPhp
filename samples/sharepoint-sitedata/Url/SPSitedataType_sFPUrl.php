<?php
/**
 * Class file for SPSitedataType_sFPUrl
 * @date 06/07/2012
 */
/**
 * Class SPSitedataType_sFPUrl
 * @date 06/07/2012
 */
class SPSitedataType_sFPUrl extends SPSitedataWsdlClass
{
	/**
	 * The Url
	 * @var string
	 */
	public $Url;
	/**
	 * The LastModified
	 * @var dateTime
	 */
	public $LastModified;
	/**
	 * The IsFolder
	 * @var boolean
	 */
	public $IsFolder;
	/**
	 * Constructor
	 * @param string Url
	 * @param dateTime LastModified
	 * @param boolean IsFolder
	 * @return SPSitedataType_sFPUrl
	 */
	public function __construct($_Url = null,$_LastModified = null,$_IsFolder = null)
	{
		parent::__construct(array('Url'=>$_Url,'LastModified'=>$_LastModified,'IsFolder'=>$_IsFolder));
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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
	 * Set IsFolder
	 * @param boolean IsFolder
	 * @return boolean
	 */
	public function setIsFolder($_IsFolder)
	{
		return ($this->IsFolder = $_IsFolder);
	}
	/**
	 * Get IsFolder
	 * @return boolean
	 */
	public function getIsFolder()
	{
		return $this->IsFolder;
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