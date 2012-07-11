<?php
/**
 * Class file for EbayTradingTypeGetProductSellingPagesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductSellingPagesResponseType
 * Documentation : Retrieves an XML string that describes how to present catalog product information to a seller. Use this information to present users with the equivalent of the Item Specifics portion of the eBay Title and Description pages and to validate user- specified values for eBay attributes on the client before including them in an AddItem call or related calls. Use the results in combination with GetAttributesXSL to render the Item Specifics in a graphical user interface. See the Developer's Guide for an overview of Pre-filled Item Information and details about searching for catalog products.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductSellingPagesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ProductSellingPagesData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A string containing a list of all the attributes that are applicable to the products specified in the request, along with related meta-data. The meta-data specifies the pre-filled values of each attribute, the possible values of attributes that are not pre-filled, the logic for presenting the attributes to a user, and rules for validating the user's selections. <br><br> For backward compatibility, this data is in the same XML format that was used in the Legacy XML API so that you can apply the same Item Specifics XSL stylesheet to it. That is, individual elements are not described using the unified schema format. <br><br> The data is based on the GetAttributesCS response (AttributeData), with additional information that is specific to catalog products. Product and attribute information is nested within a set of Product tags. The product-specific data is merged into the attribute data so that the same XSL stylesheet used to render the results of GetAttributeCS can be used to render catalog product data. See GetAttributesXSL. <br><br> See the Attribute Meta-Data Model section of the eBay Web Services guide for information about each element in the ProductSellingPagesData string. <br><br> Because the content is returned as a string, the XML markup elements are escaped with character entity references (e.g.,&amp;lt;eBay&amp;gt;&amp;lt;Attributes&amp;gt;...). See the appendices in the eBay Web Services guide for general information about string data types.
	 * @var string
	 */
	public $ProductSellingPagesData;
	/**
	 * Constructor
	 * @param string ProductSellingPagesData
	 * @return EbayTradingTypeGetProductSellingPagesResponseType
	 */
	public function __construct($_ProductSellingPagesData = null)
	{
		EbayTradingWsdlClass::__construct(array('ProductSellingPagesData'=>$_ProductSellingPagesData));
	}
	/**
	 * Set ProductSellingPagesData
	 * @param string ProductSellingPagesData
	 * @return string
	 */
	public function setProductSellingPagesData($_ProductSellingPagesData)
	{
		return ($this->ProductSellingPagesData = $_ProductSellingPagesData);
	}
	/**
	 * Get ProductSellingPagesData
	 * @return string
	 */
	public function getProductSellingPagesData()
	{
		return $this->ProductSellingPagesData;
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