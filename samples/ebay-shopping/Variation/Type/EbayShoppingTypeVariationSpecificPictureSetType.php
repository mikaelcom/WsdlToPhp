<?php
/**
 * Class file for EbayShoppingTypeVariationSpecificPictureSetType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeVariationSpecificPictureSetType
 * Documentation : At least one container is required (minOccurs="1") if Pictures container is present in the request.
 * @date 05/07/2012
 */
class EbayShoppingTypeVariationSpecificPictureSetType extends EbayShoppingWsdlClass
{
	/**
	 * The VariationSpecificValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A value that is associated with VariationSpecificName. For example, suppose this set of pictures is showing blue shirts, and some of the variations include Color=Blue in their variation specifics. If VariationSpecificName is "Color", then VariationSpecificValue would be "Blue".
	 * @var string
	 */
	public $VariationSpecificValue;
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The URL of a picture that is associated with VariationSpecificValue. The first PictureURL is also used as the gallery picture for applicable variations. For example, if the picture set contains pictures of red shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the first picture is used as the gallery picture for all the red shirt variations.
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The GalleryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not applicable.
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string VariationSpecificValue
	 * @param anyURI PictureURL
	 * @param anyURI GalleryURL
	 * @param DOMDocument any
	 * @return EbayShoppingTypeVariationSpecificPictureSetType
	 */
	public function __construct($_VariationSpecificValue = null,$_PictureURL = null,$_GalleryURL = null,$_any = null)
	{
		parent::__construct(array('VariationSpecificValue'=>$_VariationSpecificValue,'PictureURL'=>$_PictureURL,'GalleryURL'=>$_GalleryURL,'any'=>$_any));
	}
	/**
	 * Set VariationSpecificValue
	 * @param string VariationSpecificValue
	 * @return string
	 */
	public function setVariationSpecificValue($_VariationSpecificValue)
	{
		return ($this->VariationSpecificValue = $_VariationSpecificValue);
	}
	/**
	 * Get VariationSpecificValue
	 * @return string
	 */
	public function getVariationSpecificValue()
	{
		return $this->VariationSpecificValue;
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
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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