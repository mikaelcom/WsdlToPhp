<?php
/**
 * Class file for SPImagingTypeGetListItems
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeGetListItems
 * @date 06/07/2012
 */
class SPImagingTypeGetListItems extends SPImagingWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * The strFolder
	 * @var string
	 */
	public $strFolder;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strFolder
	 * @return SPImagingTypeGetListItems
	 */
	public function __construct($_strListName = null,$_strFolder = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strFolder'=>$_strFolder));
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
	 * Set strFolder
	 * @param string strFolder
	 * @return string
	 */
	public function setStrFolder($_strFolder)
	{
		return ($this->strFolder = $_strFolder);
	}
	/**
	 * Get strFolder
	 * @return string
	 */
	public function getStrFolder()
	{
		return $this->strFolder;
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