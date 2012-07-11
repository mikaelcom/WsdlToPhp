<?php
/**
 * Class file for XiEdgarTypeFilingDetails
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeFilingDetails
 * @date 08/07/2012
 */
class XiEdgarTypeFilingDetails extends XiEdgarTypeCommon
{
	/**
	 * The FileUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileUrl;
	/**
	 * The Header
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSECHeader
	 */
	public $Header;
	/**
	 * The Documents
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfDocument
	 */
	public $Documents;
	/**
	 * The ContentIfFormatWasInvalid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ContentIfFormatWasInvalid;
	/**
	 * Constructor
	 * @param string FileUrl
	 * @param XiEdgarTypeSECHeader Header
	 * @param XiEdgarTypeArrayOfDocument Documents
	 * @param string ContentIfFormatWasInvalid
	 * @return XiEdgarTypeFilingDetails
	 */
	public function __construct($_FileUrl = null,$_Header = null,$_Documents = null,$_ContentIfFormatWasInvalid = null)
	{
		XiEdgarWsdlClass::__construct(array('FileUrl'=>$_FileUrl,'Header'=>$_Header,'Documents'=>new XiEdgarTypeArrayOfDocument($_Documents),'ContentIfFormatWasInvalid'=>$_ContentIfFormatWasInvalid));
	}
	/**
	 * Set FileUrl
	 * @param string FileUrl
	 * @return string
	 */
	public function setFileUrl($_FileUrl)
	{
		return ($this->FileUrl = $_FileUrl);
	}
	/**
	 * Get FileUrl
	 * @return string
	 */
	public function getFileUrl()
	{
		return $this->FileUrl;
	}
	/**
	 * Set Header
	 * @param SECHeader Header
	 * @return SECHeader
	 */
	public function setHeader($_Header)
	{
		return ($this->Header = $_Header);
	}
	/**
	 * Get Header
	 * @return XiEdgarTypeSECHeader
	 */
	public function getHeader()
	{
		return $this->Header;
	}
	/**
	 * Set Documents
	 * @param ArrayOfDocument Documents
	 * @return ArrayOfDocument
	 */
	public function setDocuments($_Documents)
	{
		return ($this->Documents = $_Documents);
	}
	/**
	 * Get Documents
	 * @return XiEdgarTypeArrayOfDocument
	 */
	public function getDocuments()
	{
		return $this->Documents;
	}
	/**
	 * Set ContentIfFormatWasInvalid
	 * @param string ContentIfFormatWasInvalid
	 * @return string
	 */
	public function setContentIfFormatWasInvalid($_ContentIfFormatWasInvalid)
	{
		return ($this->ContentIfFormatWasInvalid = $_ContentIfFormatWasInvalid);
	}
	/**
	 * Get ContentIfFormatWasInvalid
	 * @return string
	 */
	public function getContentIfFormatWasInvalid()
	{
		return $this->ContentIfFormatWasInvalid;
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