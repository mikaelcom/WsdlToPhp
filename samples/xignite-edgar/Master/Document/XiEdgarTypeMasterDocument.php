<?php
/**
 * Class file for XiEdgarTypeMasterDocument
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeMasterDocument
 * @date 08/07/2012
 */
class XiEdgarTypeMasterDocument extends XiEdgarTypeCommon
{
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
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
	 * The FilingUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FilingUrl;
	/**
	 * The FilingId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FilingId;
	/**
	 * Constructor
	 * @param string Date
	 * @param string Type
	 * @param string Description
	 * @param string FileName
	 * @param XiEdgarTypeFileTypes FileType
	 * @param string Url
	 * @param string XMLSource
	 * @param string FilingUrl
	 * @param int FilingId
	 * @return XiEdgarTypeMasterDocument
	 */
	public function __construct($_Date = null,$_Type = null,$_Description = null,$_FileName = null,$_FileType,$_Url = null,$_XMLSource = null,$_FilingUrl = null,$_FilingId)
	{
		XiEdgarWsdlClass::__construct(array('Date'=>$_Date,'Type'=>$_Type,'Description'=>$_Description,'FileName'=>$_FileName,'FileType'=>$_FileType,'Url'=>$_Url,'XMLSource'=>$_XMLSource,'FilingUrl'=>$_FilingUrl,'FilingId'=>$_FilingId));
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
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
	 * Set FilingUrl
	 * @param string FilingUrl
	 * @return string
	 */
	public function setFilingUrl($_FilingUrl)
	{
		return ($this->FilingUrl = $_FilingUrl);
	}
	/**
	 * Get FilingUrl
	 * @return string
	 */
	public function getFilingUrl()
	{
		return $this->FilingUrl;
	}
	/**
	 * Set FilingId
	 * @param int FilingId
	 * @return int
	 */
	public function setFilingId($_FilingId)
	{
		return ($this->FilingId = $_FilingId);
	}
	/**
	 * Get FilingId
	 * @return int
	 */
	public function getFilingId()
	{
		return $this->FilingId;
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