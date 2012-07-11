<?php
/**
 * Class file for SPVersionsTypeRestoreVersion
 * @date 06/07/2012
 */
/**
 * Class SPVersionsTypeRestoreVersion
 * @date 06/07/2012
 */
class SPVersionsTypeRestoreVersion extends SPVersionsWsdlClass
{
	/**
	 * The fileName
	 * @var string
	 */
	public $fileName;
	/**
	 * The fileVersion
	 * @var string
	 */
	public $fileVersion;
	/**
	 * Constructor
	 * @param string fileName
	 * @param string fileVersion
	 * @return SPVersionsTypeRestoreVersion
	 */
	public function __construct($_fileName = null,$_fileVersion = null)
	{
		parent::__construct(array('fileName'=>$_fileName,'fileVersion'=>$_fileVersion));
	}
	/**
	 * Set fileName
	 * @param string fileName
	 * @return string
	 */
	public function setFileName($_fileName)
	{
		return ($this->fileName = $_fileName);
	}
	/**
	 * Get fileName
	 * @return string
	 */
	public function getFileName()
	{
		return $this->fileName;
	}
	/**
	 * Set fileVersion
	 * @param string fileVersion
	 * @return string
	 */
	public function setFileVersion($_fileVersion)
	{
		return ($this->fileVersion = $_fileVersion);
	}
	/**
	 * Get fileVersion
	 * @return string
	 */
	public function getFileVersion()
	{
		return $this->fileVersion;
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