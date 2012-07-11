<?php
/**
 * Class file for XiEdgarTypeFiling
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeFiling
 * @date 08/07/2012
 */
class XiEdgarTypeFiling extends XiEdgarTypeCommon
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
	 * The Amendment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Amendment;
	/**
	 * The FormDescrition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FormDescrition;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Company
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Company;
	/**
	 * The FileId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileId;
	/**
	 * The FileSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileSize;
	/**
	 * The TextFileUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextFileUrl;
	/**
	 * The HtmlFileUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HtmlFileUrl;
	/**
	 * Constructor
	 * @param string Date
	 * @param string Type
	 * @param boolean Amendment
	 * @param string FormDescrition
	 * @param string Description
	 * @param string CIK
	 * @param string Company
	 * @param string FileId
	 * @param string FileSize
	 * @param string TextFileUrl
	 * @param string HtmlFileUrl
	 * @return XiEdgarTypeFiling
	 */
	public function __construct($_Date = null,$_Type = null,$_Amendment,$_FormDescrition = null,$_Description = null,$_CIK = null,$_Company = null,$_FileId = null,$_FileSize = null,$_TextFileUrl = null,$_HtmlFileUrl = null)
	{
		XiEdgarWsdlClass::__construct(array('Date'=>$_Date,'Type'=>$_Type,'Amendment'=>$_Amendment,'FormDescrition'=>$_FormDescrition,'Description'=>$_Description,'CIK'=>$_CIK,'Company'=>$_Company,'FileId'=>$_FileId,'FileSize'=>$_FileSize,'TextFileUrl'=>$_TextFileUrl,'HtmlFileUrl'=>$_HtmlFileUrl));
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
	 * Set Amendment
	 * @param boolean Amendment
	 * @return boolean
	 */
	public function setAmendment($_Amendment)
	{
		return ($this->Amendment = $_Amendment);
	}
	/**
	 * Get Amendment
	 * @return boolean
	 */
	public function getAmendment()
	{
		return $this->Amendment;
	}
	/**
	 * Set FormDescrition
	 * @param string FormDescrition
	 * @return string
	 */
	public function setFormDescrition($_FormDescrition)
	{
		return ($this->FormDescrition = $_FormDescrition);
	}
	/**
	 * Get FormDescrition
	 * @return string
	 */
	public function getFormDescrition()
	{
		return $this->FormDescrition;
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
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
	}
	/**
	 * Set Company
	 * @param string Company
	 * @return string
	 */
	public function setCompany($_Company)
	{
		return ($this->Company = $_Company);
	}
	/**
	 * Get Company
	 * @return string
	 */
	public function getCompany()
	{
		return $this->Company;
	}
	/**
	 * Set FileId
	 * @param string FileId
	 * @return string
	 */
	public function setFileId($_FileId)
	{
		return ($this->FileId = $_FileId);
	}
	/**
	 * Get FileId
	 * @return string
	 */
	public function getFileId()
	{
		return $this->FileId;
	}
	/**
	 * Set FileSize
	 * @param string FileSize
	 * @return string
	 */
	public function setFileSize($_FileSize)
	{
		return ($this->FileSize = $_FileSize);
	}
	/**
	 * Get FileSize
	 * @return string
	 */
	public function getFileSize()
	{
		return $this->FileSize;
	}
	/**
	 * Set TextFileUrl
	 * @param string TextFileUrl
	 * @return string
	 */
	public function setTextFileUrl($_TextFileUrl)
	{
		return ($this->TextFileUrl = $_TextFileUrl);
	}
	/**
	 * Get TextFileUrl
	 * @return string
	 */
	public function getTextFileUrl()
	{
		return $this->TextFileUrl;
	}
	/**
	 * Set HtmlFileUrl
	 * @param string HtmlFileUrl
	 * @return string
	 */
	public function setHtmlFileUrl($_HtmlFileUrl)
	{
		return ($this->HtmlFileUrl = $_HtmlFileUrl);
	}
	/**
	 * Get HtmlFileUrl
	 * @return string
	 */
	public function getHtmlFileUrl()
	{
		return $this->HtmlFileUrl;
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