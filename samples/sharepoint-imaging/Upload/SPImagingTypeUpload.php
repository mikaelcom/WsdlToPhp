<?php
/**
 * Class file for SPImagingTypeUpload
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeUpload
 * @date 06/07/2012
 */
class SPImagingTypeUpload extends SPImagingWsdlClass
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
	 * The bytes
	 * @var base64Binary
	 */
	public $bytes;
	/**
	 * The fileName
	 * @var string
	 */
	public $fileName;
	/**
	 * The fOverWriteIfExist
	 * @var boolean
	 */
	public $fOverWriteIfExist;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strFolder
	 * @param base64Binary bytes
	 * @param string fileName
	 * @param boolean fOverWriteIfExist
	 * @return SPImagingTypeUpload
	 */
	public function __construct($_strListName = null,$_strFolder = null,$_bytes = null,$_fileName = null,$_fOverWriteIfExist = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strFolder'=>$_strFolder,'bytes'=>$_bytes,'fileName'=>$_fileName,'fOverWriteIfExist'=>$_fOverWriteIfExist));
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
	 * Set bytes
	 * @param base64Binary bytes
	 * @return base64Binary
	 */
	public function setBytes($_bytes)
	{
		return ($this->bytes = $_bytes);
	}
	/**
	 * Get bytes
	 * @return base64Binary
	 */
	public function getBytes()
	{
		return $this->bytes;
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
	 * Set fOverWriteIfExist
	 * @param boolean fOverWriteIfExist
	 * @return boolean
	 */
	public function setFOverWriteIfExist($_fOverWriteIfExist)
	{
		return ($this->fOverWriteIfExist = $_fOverWriteIfExist);
	}
	/**
	 * Get fOverWriteIfExist
	 * @return boolean
	 */
	public function getFOverWriteIfExist()
	{
		return $this->fOverWriteIfExist;
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