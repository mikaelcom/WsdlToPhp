<?php
/**
 * Class file for EbayTradingTypeGetProductFinderXSLRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductFinderXSLRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use FindProducts in eBay's Shopping API to search for product details.<br> <br> Retrieves the Product Finder XSL stylesheet. Apply the stylesheet to the XML returned from a call to GetProductFinder to render a form that lets a user form a multi-attribute query against eBay catalog data. See the Developer's Guide for an overview of Pre- filled Item Information and information on searching for catalog products.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductFinderXSLRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the XSL file to retrieve. If not specified, the call returns the latest versions of all available XSL files. Currently, this call only retrieves the product_finder.xsl file. FileName is an optional input.
	 * @var string
	 */
	public $FileName;
	/**
	 * The FileVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The desired version of the XSL file. Required if FileName is specified. If not specified, the call returns the latest versions of all available XSL files that could be returned by the call. (Currently, this call only retrieves the product_finder.xsl file.) This is not a filter for retrieving changes to the XSL file.
	 * @var string
	 */
	public $FileVersion;
	/**
	 * Constructor
	 * @param string FileName
	 * @param string FileVersion
	 * @return EbayTradingTypeGetProductFinderXSLRequestType
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