<?php
/**
 * Class file for EbayFindTypeGalleryURL
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeGalleryURL
 * Documentation : Relative size (Large, Medium, or Small) of the image thumbnail for the item.
 * @date 04/07/2012
 */
class EbayFindTypeGalleryURL extends EbayFindWsdlClass
{
	/**
	 * The _
	 * @var anyURI
	 */
	public $_;
	/**
	 * The gallerySize
	 * Meta informations :
	 * 	- use : required
	 * @var EbayFindTypeGallerySizeEnum
	 */
	public $gallerySize;
	/**
	 * Constructor
	 * @param anyURI _
	 * @param EbayFindTypeGallerySizeEnum gallerySize
	 * @return EbayFindTypeGalleryURL
	 */
	public function __construct($__ = null,$_gallerySize = null)
	{
		parent::__construct(array('_'=>$__,'gallerySize'=>$_gallerySize));
	}
	/**
	 * Set _
	 * @param anyURI _
	 * @return anyURI
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return anyURI
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set gallerySize
	 * @param GallerySizeEnum gallerySize
	 * @return GallerySizeEnum
	 */
	public function setGallerySize($_gallerySize)
	{
		return ($this->gallerySize = EbayFindTypeGallerySizeEnum::valueIsValid($_gallerySize)?$_gallerySize:null);
	}
	/**
	 * Get gallerySize
	 * @return EbayFindTypeGallerySizeEnum
	 */
	public function getGallerySize()
	{
		return $this->gallerySize;
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