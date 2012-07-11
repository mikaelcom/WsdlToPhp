<?php
/**
 * Class file for XiFundHoldingsTypeShortFiling
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeShortFiling
 * @date 08/07/2012
 */
class XiFundHoldingsTypeShortFiling extends XiFundHoldingsTypeCommon
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
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
	 * The AlternateHtmlFileUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlternateHtmlFileUrl;
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
	 * @param string CIK
	 * @param string Date
	 * @param string Type
	 * @param boolean Amendment
	 * @param string TextFileUrl
	 * @param string HtmlFileUrl
	 * @param string AlternateHtmlFileUrl
	 * @param int FilingId
	 * @return XiFundHoldingsTypeShortFiling
	 */
	public function __construct($_CIK = null,$_Date = null,$_Type = null,$_Amendment,$_TextFileUrl = null,$_HtmlFileUrl = null,$_AlternateHtmlFileUrl = null,$_FilingId)
	{
		XiFundHoldingsWsdlClass::__construct(array('CIK'=>$_CIK,'Date'=>$_Date,'Type'=>$_Type,'Amendment'=>$_Amendment,'TextFileUrl'=>$_TextFileUrl,'HtmlFileUrl'=>$_HtmlFileUrl,'AlternateHtmlFileUrl'=>$_AlternateHtmlFileUrl,'FilingId'=>$_FilingId));
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
	 * Set AlternateHtmlFileUrl
	 * @param string AlternateHtmlFileUrl
	 * @return string
	 */
	public function setAlternateHtmlFileUrl($_AlternateHtmlFileUrl)
	{
		return ($this->AlternateHtmlFileUrl = $_AlternateHtmlFileUrl);
	}
	/**
	 * Get AlternateHtmlFileUrl
	 * @return string
	 */
	public function getAlternateHtmlFileUrl()
	{
		return $this->AlternateHtmlFileUrl;
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