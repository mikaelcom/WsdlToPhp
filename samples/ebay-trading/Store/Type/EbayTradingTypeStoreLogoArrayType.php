<?php
/**
 * Class file for EbayTradingTypeStoreLogoArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreLogoArrayType
 * Documentation : Set of Store logos.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreLogoArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Logo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A Store logo.
	 * @var EbayTradingTypeStoreLogoType
	 */
	public $Logo;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreLogoType Logo
	 * @return EbayTradingTypeStoreLogoArrayType
	 */
	public function __construct($_Logo = null)
	{
		parent::__construct(array('Logo'=>$_Logo));
	}
	/**
	 * Set Logo
	 * @param StoreLogoType Logo
	 * @return StoreLogoType
	 */
	public function setLogo($_Logo)
	{
		return ($this->Logo = $_Logo);
	}
	/**
	 * Get Logo
	 * @return EbayTradingTypeStoreLogoType
	 */
	public function getLogo()
	{
		return $this->Logo;
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