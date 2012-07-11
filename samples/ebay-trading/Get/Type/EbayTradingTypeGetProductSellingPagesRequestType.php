<?php
/**
 * Class file for EbayTradingTypeGetProductSellingPagesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductSellingPagesRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use FindProducts in eBay's Shopping API to search for product details.<br> <br> Retrieves information that describes how to present catalog product information to a seller. Use this information to present users with the equivalent of the Item Specifics portion of the eBay Title and Description pages and to validate user-specified values for eBay attributes on the client before including them in an AddItem call or related calls. The data contains a list of all the attributes that are applicable for one or more requested products, along with related meta-data. The meta-data specifies the pre-filled values of each attribute, the possible values of attributes that are not pre-filled, the logic for presenting the attributes to a user, and rules for validating the user's selections. Use the results in combination with GetAttributesXSL to render the Item Specifics in a graphical user interface. See the eBay Web Services Guide for an overview of Pre-filled Item Information, details about searching for catalog products, and information about the ProductSellingPages content model.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductSellingPagesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The UseCase
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the context in which the call is being executed, which will imply certain validation rules. Use this property to make sure you retrieve the appropriate version of product information and attribute meta-data when you are listing, revising, or relisting an item with Pre-filled Item Information.
	 * @var EbayTradingTypeProductUseCaseCodeType
	 */
	public $UseCase;
	/**
	 * The Product
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A catalog product identifies a prototype description of a well-known type of item, such as a popular book. As this call supports batch requests, you can pass in an array of products to retrieve data for several products at the same time.
	 * @var EbayTradingTypeProductType
	 */
	public $Product;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductUseCaseCodeType UseCase
	 * @param EbayTradingTypeProductType Product
	 * @return EbayTradingTypeGetProductSellingPagesRequestType
	 */
	public function __construct($_UseCase = null,$_Product = null)
	{
		EbayTradingWsdlClass::__construct(array('UseCase'=>$_UseCase,'Product'=>$_Product));
	}
	/**
	 * Set UseCase
	 * @param ProductUseCaseCodeType UseCase
	 * @return ProductUseCaseCodeType
	 */
	public function setUseCase($_UseCase)
	{
		return ($this->UseCase = EbayTradingTypeProductUseCaseCodeType::valueIsValid($_UseCase)?$_UseCase:null);
	}
	/**
	 * Get UseCase
	 * @return EbayTradingTypeProductUseCaseCodeType
	 */
	public function getUseCase()
	{
		return $this->UseCase;
	}
	/**
	 * Set Product
	 * @param ProductType Product
	 * @return ProductType
	 */
	public function setProduct($_Product)
	{
		return ($this->Product = $_Product);
	}
	/**
	 * Get Product
	 * @return EbayTradingTypeProductType
	 */
	public function getProduct()
	{
		return $this->Product;
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