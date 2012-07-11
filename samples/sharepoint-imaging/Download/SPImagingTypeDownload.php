<?php
/**
 * Class file for SPImagingTypeDownload
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeDownload
 * @date 06/07/2012
 */
class SPImagingTypeDownload extends SPImagingWsdlClass
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
	 * The type
	 * @var unsignedInt
	 */
	public $type;
	/**
	 * The fFetchOriginalIfNotAvailable
	 * @var boolean
	 */
	public $fFetchOriginalIfNotAvailable;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strFolder
	 * @param SPImagingTypeArrayOfString itemFileNames
	 * @param unsignedInt type
	 * @param boolean fFetchOriginalIfNotAvailable
	 * @return SPImagingTypeDownload
	 */
	public function __construct($_strListName = null,$_strFolder = null,$_itemFileNames = null,$_type = null,$_fFetchOriginalIfNotAvailable = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strFolder'=>$_strFolder,'itemFileNames'=>new SPImagingTypeArrayOfString($_itemFileNames),'type'=>$_type,'fFetchOriginalIfNotAvailable'=>$_fFetchOriginalIfNotAvailable));
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
	 * Set type
	 * @param unsignedInt type
	 * @return unsignedInt
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return unsignedInt
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set fFetchOriginalIfNotAvailable
	 * @param boolean fFetchOriginalIfNotAvailable
	 * @return boolean
	 */
	public function setFFetchOriginalIfNotAvailable($_fFetchOriginalIfNotAvailable)
	{
		return ($this->fFetchOriginalIfNotAvailable = $_fFetchOriginalIfNotAvailable);
	}
	/**
	 * Get fFetchOriginalIfNotAvailable
	 * @return boolean
	 */
	public function getFFetchOriginalIfNotAvailable()
	{
		return $this->fFetchOriginalIfNotAvailable;
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