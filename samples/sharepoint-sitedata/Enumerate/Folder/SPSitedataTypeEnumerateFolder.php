<?php
/**
 * Class file for SPSitedataTypeEnumerateFolder
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeEnumerateFolder
 * @date 06/07/2012
 */
class SPSitedataTypeEnumerateFolder extends SPSitedataWsdlClass
{
	/**
	 * The strFolderUrl
	 * @var string
	 */
	public $strFolderUrl;
	/**
	 * Constructor
	 * @param string strFolderUrl
	 * @return SPSitedataTypeEnumerateFolder
	 */
	public function __construct($_strFolderUrl = null)
	{
		parent::__construct(array('strFolderUrl'=>$_strFolderUrl));
	}
	/**
	 * Set strFolderUrl
	 * @param string strFolderUrl
	 * @return string
	 */
	public function setStrFolderUrl($_strFolderUrl)
	{
		return ($this->strFolderUrl = $_strFolderUrl);
	}
	/**
	 * Get strFolderUrl
	 * @return string
	 */
	public function getStrFolderUrl()
	{
		return $this->strFolderUrl;
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