<?php
/**
 * Class file for EbayTradingTypeGetAttributesXSLRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAttributesXSLRequestType
 * Documentation : No longer recommended. This supports an older format for describing item specifics using an ID-based model. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use GetCategorySpecifics for the newer Custom Item Specifics model.<br> <br> Retrieves the Item Specifics SYI XSL stylesheet. Apply the stylesheet to the XML returned from a call to GetAttributesCS or GetProductSellingPages to render a form like the Item Specifics portion of eBay's Title and Description page. See the eBay Web Services Guide for an overview of Item Specifics and information on working with the XSL.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAttributesXSLRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the XSL file to retrieve. If not specified, the call returns the latest versions of all available XSL files. FileName is an optional input. Valid values<br> <br> syi_attributes.xsl
	 * @var string
	 */
	public $FileName;
	/**
	 * The FileVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The desired version of the XSL file. Required if FileName is specified. If not specified, the call returns the latest version of the file. (This is not a filter for retrieving changes to the XSL file.)
	 * @var string
	 */
	public $FileVersion;
	/**
	 * Constructor
	 * @param string FileName
	 * @param string FileVersion
	 * @return EbayTradingTypeGetAttributesXSLRequestType
	 */
	public function __construct($_FileName = null,$_FileVersion = null)
	{
		EbayTradingWsdlClass::__construct(array('FileName'=>$_FileName,'FileVersion'=>$_FileVersion));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>