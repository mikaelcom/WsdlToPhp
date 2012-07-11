<?php
/**
 * Class file for EbayShoppingTypeProductIDType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeProductIDType
 * Documentation : The nature of identifier being used. For FindHalfProducts, FindProducts, and FindReviewsAndGuides, only Reference, ISBN, UPC, and EAN are supported. Required when ProductID is specified.
 * @date 05/07/2012
 */
class EbayShoppingTypeProductIDType extends EbayShoppingWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The type
	 * @var EbayShoppingTypeProductIDCodeType
	 */
	public $type;
	/**
	 * Constructor
	 * @param string _
	 * @param EbayShoppingTypeProductIDCodeType type
	 * @return EbayShoppingTypeProductIDType
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
	 * @param ProductIDCodeType type
	 * @return ProductIDCodeType
	 */
	public function setType($_type)
	{
		return ($this->type = EbayShoppingTypeProductIDCodeType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return EbayShoppingTypeProductIDCodeType
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