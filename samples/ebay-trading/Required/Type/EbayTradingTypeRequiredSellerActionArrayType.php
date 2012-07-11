<?php
/**
 * Class file for EbayTradingTypeRequiredSellerActionArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRequiredSellerActionArrayType
 * Documentation : This type defines the RequiredSellerActionArray container, which may contain zero or multiple RequiredSellerActionCodeType objects.
 * @date 04/07/2012
 */
class EbayTradingTypeRequiredSellerActionArrayType extends EbayTradingWsdlClass
{
	/**
	 * The RequiredSellerAction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This field contains a possible action that a seller can take to expedite the release of a payment hold. There can be zero or more RequiredSellerAction fields in the RequiredSellerActionArray container.
	 * @var EbayTradingTypeRequiredSellerActionCodeType
	 */
	public $RequiredSellerAction;
	/**
	 * Constructor
	 * @param EbayTradingTypeRequiredSellerActionCodeType RequiredSellerAction
	 * @return EbayTradingTypeRequiredSellerActionArrayType
	 */
	public function __construct($_RequiredSellerAction = null)
	{
		parent::__construct(array('RequiredSellerAction'=>$_RequiredSellerAction));
	}
	/**
	 * Set RequiredSellerAction
	 * @param RequiredSellerActionCodeType RequiredSellerAction
	 * @return RequiredSellerActionCodeType
	 */
	public function setRequiredSellerAction($_RequiredSellerAction)
	{
		return ($this->RequiredSellerAction = EbayTradingTypeRequiredSellerActionCodeType::valueIsValid($_RequiredSellerAction)?$_RequiredSellerAction:null);
	}
	/**
	 * Get RequiredSellerAction
	 * @return EbayTradingTypeRequiredSellerActionCodeType
	 */
	public function getRequiredSellerAction()
	{
		return $this->RequiredSellerAction;
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