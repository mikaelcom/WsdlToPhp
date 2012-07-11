<?php
/**
 * Class file for EbayFindTypeProductId
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeProductId
 * Documentation : The nature of the identifier being used. For findItemsByProduct, search by a single type. <dl> <dt> <strong>productId values:</strong> </dt> <dt> ReferenceID </dt> <dd> The global reference ID (ePID) for an eBay catalog product. A reference ID is a fixed reference to a product, regardless of version. Use FindProducts in the Shopping API to determine valid ePID values that you can use as input to findItemsByProduct. Each product in the response includes its reference ID. </dd> <dt> ISBN </dt> <dd> ISBN-10 or ISBN-13 value for books. (The string length of ProductID indicates whether the ID is 10 or 13 characters.) If you know a book's ISBN, you can use this instead of the eBay Reference ID to search for that book. Max length of corresponding value: 13 </dd> <dt> UPC </dt> <dd> UPC value for products in Music (e.g., CDs), DVDs & Movies, and Video Games categories (or domains). If you know a product's UPC, you can use this instead of the eBay Reference ID to search for that product. Max length of corresponding value: 12 </dd> <dt> EAN </dt> <dd> EAN value for books. (This is used more commonly in European countries.) If you know a book's EAN, you can use this instead of the eBay Reference ID to search for that book. Max length of corresponding value: 13 </dd> </dl>
 * @date 04/07/2012
 */
class EbayFindTypeProductId extends EbayFindWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The type
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param string _
	 * @param string type
	 * @return EbayFindTypeProductId
	 */
	public function __construct($__ = null,$_type = null)
	{
		parent::__construct(array('_'=>$__,'type'=>$_type));
	}
	/**
	 * Set _
	 * @param string _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return string
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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