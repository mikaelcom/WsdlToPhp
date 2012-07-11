<?php
/**
 * Class file for SPImagingTypeCreateNewFolder
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeCreateNewFolder
 * @date 06/07/2012
 */
class SPImagingTypeCreateNewFolder extends SPImagingWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * The strParentFolder
	 * @var string
	 */
	public $strParentFolder;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strParentFolder
	 * @return SPImagingTypeCreateNewFolder
	 */
	public function __construct($_strListName = null,$_strParentFolder = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strParentFolder'=>$_strParentFolder));
	}
	/**
	 * Set strListName
	 * @param string strListName
	 * @return string
	 */
	public function setStrListName($_strListName)
	{
		return ($this->strListName = $_strListName);
	}
	/**
	 * Get strListName
	 * @return string
	 */
	public function getStrListName()
	{
		return $this->strListName;
	}
	/**
	 * Set strParentFolder
	 * @param string strParentFolder
	 * @return string
	 */
	public function setStrParentFolder($_strParentFolder)
	{
		return ($this->strParentFolder = $_strParentFolder);
	}
	/**
	 * Get strParentFolder
	 * @return string
	 */
	public function getStrParentFolder()
	{
		return $this->strParentFolder;
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