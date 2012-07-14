<?php
/**
 * Class file for PayPalTypeSiteHostedPictureType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSiteHostedPictureType
 * @date 14/07/2012
 */
class PayPalTypeSiteHostedPictureType extends PayPalWsdlClass
{
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 6
	 * 	- documentation : URLs for item picture that are stored/hosted at eBay site.
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The PhotoDisplay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of display for photos used for PhotoHosting slide show. Here are display options: None = No special Picture Services features. SlideShow = Slideshow of multiple pictures. SuperSize = Super-size format picture. PicturePack = Picture Pack. Default is 'None'.
	 * @var PayPalTypePhotoDisplayCodeType
	 */
	public $PhotoDisplay;
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
	 * @param PayPalTypePhotoDisplayCodeType PhotoDisplay
	 * @param PayPalTypeGalleryTypeCodeType GalleryType
	 * @return PayPalTypeSiteHostedPictureType
	 */
	public function __construct($_PictureURL = null,$_PhotoDisplay = null,$_GalleryType = null)
	{
		parent::__construct(array('PictureURL'=>$_PictureURL,'PhotoDisplay'=>$_PhotoDisplay,'GalleryType'=>$_GalleryType));
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
	 * Set PhotoDisplay
	 * @param PhotoDisplayCodeType PhotoDisplay
	 * @return PhotoDisplayCodeType
	 */
	public function setPhotoDisplay($_PhotoDisplay)
	{
		return ($this->PhotoDisplay = PayPalTypePhotoDisplayCodeType::valueIsValid($_PhotoDisplay)?$_PhotoDisplay:null);
	}
	/**
	 * Get PhotoDisplay
	 * @return PayPalTypePhotoDisplayCodeType
	 */
	public function getPhotoDisplay()
	{
		return $this->PhotoDisplay;
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