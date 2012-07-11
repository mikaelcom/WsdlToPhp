<?php
/**
 * Class file for XiEdgarTypeDocument
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeDocument
 * @date 08/07/2012
 */
class XiEdgarTypeDocument extends XiEdgarTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The FileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileName;
	/**
	 * The FileType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeFileTypes
	 */
	public $FileType;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The XMLSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $XMLSource;
	/**
	 * Constructor
	 * @param string Type
	 * @param string Description
	 * @param string FileName
	 * @param XiEdgarTypeFileTypes FileType
	 * @param string Url
	 * @param string XMLSource
	 * @return XiEdgarTypeDocument
	 */
	public function __construct($_Type = null,$_Description = null,$_FileName = null,$_FileType,$_Url = null,$_XMLSource = null)
	{
		XiEdgarWsdlClass::__construct(array('Type'=>$_Type,'Description'=>$_Description,'FileName'=>$_FileName,'FileType'=>$_FileType,'Url'=>$_Url,'XMLSource'=>$_XMLSource));
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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
	 * Set FileType
	 * @param FileTypes FileType
	 * @return FileTypes
	 */
	public function setFileType($_FileType)
	{
		return ($this->FileType = XiEdgarTypeFileTypes::valueIsValid($_FileType)?$_FileType:null);
	}
	/**
	 * Get FileType
	 * @return XiEdgarTypeFileTypes
	 */
	public function getFileType()
	{
		return $this->FileType;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set XMLSource
	 * @param string XMLSource
	 * @return string
	 */
	public function setXMLSource($_XMLSource)
	{
		return ($this->XMLSource = $_XMLSource);
	}
	/**
	 * Get XMLSource
	 * @return string
	 */
	public function getXMLSource()
	{
		return $this->XMLSource;
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