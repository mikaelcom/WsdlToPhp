<?php
/**
 * Class file for EbayTradingTypeXSLFileType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeXSLFileType
 * Documentation : Describes an XSL file that would be returned from an Item Specifics or Pre-filled Item Information meta-data call (such as GetAttributesXSL or GetProductFinderXSL).
 * @date 04/07/2012
 */
class EbayTradingTypeXSLFileType extends EbayTradingWsdlClass
{
	/**
	 * The FileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the XSL file. Store this information to use it as input to the call in the future.
	 * @var string
	 */
	public $FileName;
	/**
	 * The FileVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The version number of the XSL file. Store this information to use it as input to the call in the future. To get the current version value without retrieving the XSL file, do not pass DetailLevel in the request.
	 * @var string
	 */
	public $FileVersion;
	/**
	 * The FileContent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a MIME base-64-encoded representation of the XSL file. See the eBay Web Services Guide for information on decoding the XSL stylesheet file. If no XSL file is available (or if you passed no detail level), this property is empty or not returned.
	 * @var string
	 */
	public $FileContent;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string FileName
	 * @param string FileVersion
	 * @param string FileContent
	 * @param DOMDocument any
	 * @return EbayTradingTypeXSLFileType
	 */
	public function __construct($_FileName = null,$_FileVersion = null,$_FileContent = null,$_any = null)
	{
		parent::__construct(array('FileName'=>$_FileName,'FileVersion'=>$_FileVersion,'FileContent'=>$_FileContent,'any'=>$_any));
	}
	/**
	 * Set FileName
	 * @param string FileName
	 * @return string
	 */
	public function setFileName($_FileName)
	{
		return ($this->FileName = $_FileName);
	}
	/**
	 * Get FileName
	 * @return string
	 */
	public function getFileName()
	{
		return $this->FileName;
	}
	/**
	 * Set FileVersion
	 * @param string FileVersion
	 * @return string
	 */
	public function setFileVersion($_FileVersion)
	{
		return ($this->FileVersion = $_FileVersion);
	}
	/**
	 * Get FileVersion
	 * @return string
	 */
	public function getFileVersion()
	{
		return $this->FileVersion;
	}
	/**
	 * Set FileContent
	 * @param string FileContent
	 * @return string
	 */
	public function setFileContent($_FileContent)
	{
		return ($this->FileContent = $_FileContent);
	}
	/**
	 * Get FileContent
	 * @return string
	 */
	public function getFileContent()
	{
		return $this->FileContent;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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