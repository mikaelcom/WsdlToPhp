<?php
/**
 * Class file for EbayFindTypeGalleryInfoContainer
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeGalleryInfoContainer
 * Documentation : Container for URLs of thumbnail images for an item.
 * @date 04/07/2012
 */
class EbayFindTypeGalleryInfoContainer extends EbayFindWsdlClass
{
	/**
	 * The galleryURL
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 3
	 * 	- documentation : URL for a single item image thumbnail of a specific size.
	 * @var EbayFindTypeGalleryURL
	 */
	public $galleryURL;
	/**
	 * Constructor
	 * @param EbayFindTypeGalleryURL galleryURL
	 * @return EbayFindTypeGalleryInfoContainer
	 */
	public function __construct($_galleryURL)
	{
		parent::__construct(array('galleryURL'=>$_galleryURL));
	}
	/**
	 * Set galleryURL
	 * @param GalleryURL galleryURL
	 * @return GalleryURL
	 */
	public function setGalleryURL($_galleryURL)
	{
		return ($this->galleryURL = $_galleryURL);
	}
	/**
	 * Get galleryURL
	 * @return EbayFindTypeGalleryURL
	 */
	public function getGalleryURL()
	{
		return $this->galleryURL;
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