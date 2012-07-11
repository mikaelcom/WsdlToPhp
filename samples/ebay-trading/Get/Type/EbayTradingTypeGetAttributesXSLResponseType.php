<?php
/**
 * Class file for EbayTradingTypeGetAttributesXSLResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAttributesXSLResponseType
 * Documentation : Retrieves the Item Specifics SYI XSL stylesheet.Apply the stylesheet to the XML returned from a call to GetAttributesCS or GetProductSellingPages to render a form like the Item Specifics portion of eBay's Title and Description page. See the Developer's Guide for an overview of Item Specifics and information on working with the XSL.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAttributesXSLResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The XSLFile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Child elements contain data related to one XSL file. Multiple XSLFile objects can be returned. However, currently only one is returned.
	 * @var EbayTradingTypeXSLFileType
	 */
	public $XSLFile;
	/**
	 * Constructor
	 * @param EbayTradingTypeXSLFileType XSLFile
	 * @return EbayTradingTypeGetAttributesXSLResponseType
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