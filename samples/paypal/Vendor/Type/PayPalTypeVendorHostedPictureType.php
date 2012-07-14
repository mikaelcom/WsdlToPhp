<?php
/**
 * Class file for PayPalTypeVendorHostedPictureType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeVendorHostedPictureType
 * @date 14/07/2012
 */
class PayPalTypeVendorHostedPictureType extends PayPalWsdlClass
{
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URLs for item picture that are stored/hosted at eBay site.
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The GalleryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for a picture for the gallery. If the GalleryFeatured argument is true, a value must be supplied for either the GalleryURL or the PictureURL argument. In either case: (a) If a URL is provided for only PictureURL, it is used as the Gallery thumbnail. (b) If a URL is provided for both GalleryURL and PictureURL, then the picture indicated in GalleryURL is used as the thumbnail. The image used for the Gallery thumbnail (specified in the GalleryURL or PictureURL argument) must be in one of the graphics formats JPEG, BMP, TIF, or GIF.
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The GalleryType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This will be either "Featured" or "Gallery".
	 * @var PayPalTypeGalleryTypeCodeType
	 */
	public $GalleryType;
	/**
	 * Constructor
	 * @param anyURI PictureURL
	 * @param anyURI GalleryURL
	 * @param PayPalTypeGalleryTypeCodeType GalleryType
	 * @return PayPalTypeVendorHostedPictureType
	 */
	public function __construct($_PictureURL = null,$_GalleryURL = null,$_GalleryType = null)
	{
		parent::__construct(array('PictureURL'=>$_PictureURL,'GalleryURL'=>$_GalleryURL,'GalleryType'=>$_GalleryType));
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
	 * Set GalleryURL
	 * @param anyURI GalleryURL
	 * @return anyURI
	 */
	public function setGalleryURL($_GalleryURL)
	{
		return ($this->GalleryURL = $_GalleryURL);
	}
	/**
	 * Get GalleryURL
	 * @return anyURI
	 */
	public function getGalleryURL()
	{
		return $this->GalleryURL;
	}
	/**
	 * Set GalleryType
	 * @param GalleryTypeCodeType GalleryType
	 * @return GalleryTypeCodeType
	 */
	public function setGalleryType($_GalleryType)
	{
		return ($this->GalleryType = PayPalTypeGalleryTypeCodeType::valueIsValid($_GalleryType)?$_GalleryType:null);
	}
	/**
	 * Get GalleryType
	 * @return PayPalTypeGalleryTypeCodeType
	 */
	public function getGalleryType()
	{
		return $this->GalleryType;
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