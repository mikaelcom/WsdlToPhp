<?php
/**
 * Class file for EbayTradingTypeExtendSiteHostedPicturesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExtendSiteHostedPicturesResponseType
 * Documentation : Returns the URL of an eBay Picture Services image whose expiration date was extended.
 * @date 04/07/2012
 */
class EbayTradingTypeExtendSiteHostedPicturesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The URL of the image in eBay Picture Services whose expiration date was extended.
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * Constructor
	 * @param anyURI PictureURL
	 * @return EbayTradingTypeExtendSiteHostedPicturesResponseType
	 */
	public function __construct($_PictureURL = null)
	{
		EbayTradingWsdlClass::__construct(array('PictureURL'=>$_PictureURL));
	}
	/**
	 * Set PictureURL
	 * @param anyURI PictureURL
	 * @return anyURI
	 */
	public function setPictureURL($_PictureURL)
	{
		return ($this->PictureURL = $_PictureURL);
	}
	/**
	 * Get PictureURL
	 * @return anyURI
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
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