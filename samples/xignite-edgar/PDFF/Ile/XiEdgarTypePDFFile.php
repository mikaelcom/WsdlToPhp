<?php
/**
 * Class file for XiEdgarTypePDFFile
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypePDFFile
 * @date 08/07/2012
 */
class XiEdgarTypePDFFile extends XiEdgarTypeCommon
{
	/**
	 * The OriginalUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalUrl;
	/**
	 * The PDFUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PDFUrl;
	/**
	 * Constructor
	 * @param string OriginalUrl
	 * @param string PDFUrl
	 * @return XiEdgarTypePDFFile
	 */
	public function __construct($_OriginalUrl = null,$_PDFUrl = null)
	{
		XiEdgarWsdlClass::__construct(array('OriginalUrl'=>$_OriginalUrl,'PDFUrl'=>$_PDFUrl));
	}
	/**
	 * Set OriginalUrl
	 * @param string OriginalUrl
	 * @return string
	 */
	public function setOriginalUrl($_OriginalUrl)
	{
		return ($this->OriginalUrl = $_OriginalUrl);
	}
	/**
	 * Get OriginalUrl
	 * @return string
	 */
	public function getOriginalUrl()
	{
		return $this->OriginalUrl;
	}
	/**
	 * Set PDFUrl
	 * @param string PDFUrl
	 * @return string
	 */
	public function setPDFUrl($_PDFUrl)
	{
		return ($this->PDFUrl = $_PDFUrl);
	}
	/**
	 * Get PDFUrl
	 * @return string
	 */
	public function getPDFUrl()
	{
		return $this->PDFUrl;
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