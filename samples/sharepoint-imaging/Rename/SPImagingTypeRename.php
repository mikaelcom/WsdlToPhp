<?php
/**
 * Class file for SPImagingTypeRename
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeRename
 * @date 06/07/2012
 */
class SPImagingTypeRename extends SPImagingWsdlClass
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
	 * The request
	 * @var SPImagingTypeRequest
	 */
	public $request;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strFolder
	 * @param SPImagingTypeRequest request
	 * @return SPImagingTypeRename
	 */
	public function __construct($_strListName = null,$_strFolder = null,$_request = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strFolder'=>$_strFolder,'request'=>$_request));
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
	 * Set request
	 * @param request request
	 * @return request
	 */
	public function setRequest($_request)
	{
		return ($this->request = $_request);
	}
	/**
	 * Get request
	 * @return SPImagingTyperequest
	 */
	public function getRequest()
	{
		return $this->request;
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