<?php
/**
 * Class file for EbayTradingTypeListingDurationReferenceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingDurationReferenceType
 * Documentation : The type of listing a set of durations describes.
 * @date 04/07/2012
 */
class EbayTradingTypeListingDurationReferenceType extends EbayTradingWsdlClass
{
	/**
	 * The _
	 * @var int
	 */
	public $_;
	/**
	 * The type
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $type;
	/**
	 * Constructor
	 * @param int _
	 * @param EbayTradingTypeListingTypeCodeType type
	 * @return EbayTradingTypeListingDurationReferenceType
	 */
	public function __construct($__ = null,$_type = null)
	{
		parent::__construct(array('_'=>$__,'type'=>$_type));
	}
	/**
	 * Set _
	 * @param int _
	 * @return int
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return int
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set type
	 * @param ListingTypeCodeType type
	 * @return ListingTypeCodeType
	 */
	public function setType($_type)
	{
		return ($this->type = EbayTradingTypeListingTypeCodeType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return EbayTradingTypeListingTypeCodeType
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