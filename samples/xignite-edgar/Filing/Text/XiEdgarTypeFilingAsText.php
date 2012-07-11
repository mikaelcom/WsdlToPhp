<?php
/**
 * Class file for XiEdgarTypeFilingAsText
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeFilingAsText
 * @date 08/07/2012
 */
class XiEdgarTypeFilingAsText extends XiEdgarTypeCommon
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
	 * The Content
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Content;
	/**
	 * Constructor
	 * @param string FileUrl
	 * @param XiEdgarTypeSECHeader Header
	 * @param string Content
	 * @return XiEdgarTypeFilingAsText
	 */
	public function __construct($_FileUrl = null,$_Header = null,$_Content = null)
	{
		XiEdgarWsdlClass::__construct(array('FileUrl'=>$_FileUrl,'Header'=>$_Header,'Content'=>$_Content));
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
	 * Set Content
	 * @param string Content
	 * @return string
	 */
	public function setContent($_Content)
	{
		return ($this->Content = $_Content);
	}
	/**
	 * Get Content
	 * @return string
	 */
	public function getContent()
	{
		return $this->Content;
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