<?php
/**
 * Class file for EbayTradingTypeGetProductFinderXSLResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductFinderXSLResponseType
 * Documentation : Retrieves the Product Finder XSL stylesheet. Apply the stylesheet to the XML returned from a call to GetProductFinder to render a form that lets a user form a multi-attribute query against eBay catalog data. See the Developer's Guide for an overview of Pre-filled Item Information and information on searching for catalog products.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductFinderXSLResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The XSLFile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Child elements specify data related to one XSL file. In theory, multiple XSLFile objects can be returned. Currently, this call only retrieves the product_finder.xsl file.
	 * @var EbayTradingTypeXSLFileType
	 */
	public $XSLFile;
	/**
	 * Constructor
	 * @param EbayTradingTypeXSLFileType XSLFile
	 * @return EbayTradingTypeGetProductFinderXSLResponseType
	 */
	public function __construct($_XSLFile = null)
	{
		EbayTradingWsdlClass::__construct(array('XSLFile'=>$_XSLFile));
	}
	/**
	 * Set XSLFile
	 * @param XSLFileType XSLFile
	 * @return XSLFileType
	 */
	public function setXSLFile($_XSLFile)
	{
		return ($this->XSLFile = $_XSLFile);
	}
	/**
	 * Get XSLFile
	 * @return EbayTradingTypeXSLFileType
	 */
	public function getXSLFile()
	{
		return $this->XSLFile;
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