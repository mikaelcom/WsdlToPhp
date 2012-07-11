<?php
/**
 * Class file for SPImagingTypeGetItemsXMLData
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeGetItemsXMLData
 * @date 06/07/2012
 */
class SPImagingTypeGetItemsXMLData extends SPImagingWsdlClass
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
	 * The itemFileNames
	 * @var SPImagingTypeArrayOfString
	 */
	public $itemFileNames;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strFolder
	 * @param SPImagingTypeArrayOfString itemFileNames
	 * @return SPImagingTypeGetItemsXMLData
	 */
	public function __construct($_strListName = null,$_strFolder = null,$_itemFileNames = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strFolder'=>$_strFolder,'itemFileNames'=>new SPImagingTypeArrayOfString($_itemFileNames)));
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
	 * Set itemFileNames
	 * @param ArrayOfString itemFileNames
	 * @return ArrayOfString
	 */
	public function setItemFileNames($_itemFileNames)
	{
		return ($this->itemFileNames = $_itemFileNames);
	}
	/**
	 * Get itemFileNames
	 * @return SPImagingTypeArrayOfString
	 */
	public function getItemFileNames()
	{
		return $this->itemFileNames;
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