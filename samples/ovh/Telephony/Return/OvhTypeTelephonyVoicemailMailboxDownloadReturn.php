<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMailboxDownloadReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMailboxDownloadReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMailboxDownloadReturn extends OvhWsdlClass
{
	/**
	 * The fileName
	 * @var string
	 */
	public $fileName;
	/**
	 * The fileData
	 * @var string
	 */
	public $fileData;
	/**
	 * The md5sum
	 * @var string
	 */
	public $md5sum;
	/**
	 * Constructor
	 * @param string fileName
	 * @param string fileData
	 * @param string md5sum
	 * @return OvhTypeTelephonyVoicemailMailboxDownloadReturn
	 */
	public function __construct($_fileName = null,$_fileData = null,$_md5sum = null)
	{
		parent::__construct(array('fileName'=>$_fileName,'fileData'=>$_fileData,'md5sum'=>$_md5sum));
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
	 * Set fileData
	 * @param string fileData
	 * @return string
	 */
	public function setFileData($_fileData)
	{
		return ($this->fileData = $_fileData);
	}
	/**
	 * Get fileData
	 * @return string
	 */
	public function getFileData()
	{
		return $this->fileData;
	}
	/**
	 * Set md5sum
	 * @param string md5sum
	 * @return string
	 */
	public function setMd5sum($_md5sum)
	{
		return ($this->md5sum = $_md5sum);
	}
	/**
	 * Get md5sum
	 * @return string
	 */
	public function getMd5sum()
	{
		return $this->md5sum;
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