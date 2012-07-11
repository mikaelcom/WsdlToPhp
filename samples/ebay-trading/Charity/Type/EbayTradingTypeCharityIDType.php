<?php
/**
 * Class file for EbayTradingTypeCharityIDType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharityIDType
 * Documentation : Indicates the affiliation status of the nonprofit charity organization registered with the eBay Giving Works provider.
 * @date 04/07/2012
 */
class EbayTradingTypeCharityIDType extends EbayTradingWsdlClass
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
	 * @var EbayTradingTypeCharityAffiliationTypeCodeType
	 */
	public $type;
	/**
	 * Constructor
	 * @param string _
	 * @param EbayTradingTypeCharityAffiliationTypeCodeType type
	 * @return EbayTradingTypeCharityIDType
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
	 * @param CharityAffiliationTypeCodeType type
	 * @return CharityAffiliationTypeCodeType
	 */
	public function setType($_type)
	{
		return ($this->type = EbayTradingTypeCharityAffiliationTypeCodeType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return EbayTradingTypeCharityAffiliationTypeCodeType
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