<?php
/**
 * Class file for EbayTradingTypeExtendSiteHostedPicturesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExtendSiteHostedPicturesRequestType
 * Documentation : This restricted call gives approved sellers the ability to extend the default and ongoing lifetime of pictures uploaded to eBay.
 * @date 04/07/2012
 */
class EbayTradingTypeExtendSiteHostedPicturesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The URL of the image hosted by eBay Picture Services.
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The ExtensionInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of days by which to extend the expiration date for the specified image.
	 * @var int
	 */
	public $ExtensionInDays;
	/**
	 * Constructor
	 * @param anyURI PictureURL
	 * @param int ExtensionInDays
	 * @return EbayTradingTypeExtendSiteHostedPicturesRequestType
	 */
	public function __construct($_PictureURL = null,$_ExtensionInDays = null)
	{
		EbayTradingWsdlClass::__construct(array('PictureURL'=>$_PictureURL,'ExtensionInDays'=>$_ExtensionInDays));
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
	 * Set ExtensionInDays
	 * @param int ExtensionInDays
	 * @return int
	 */
	public function setExtensionInDays($_ExtensionInDays)
	{
		return ($this->ExtensionInDays = $_ExtensionInDays);
	}
	/**
	 * Get ExtensionInDays
	 * @return int
	 */
	public function getExtensionInDays()
	{
		return $this->ExtensionInDays;
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