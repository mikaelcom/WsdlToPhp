<?php
/**
 * Class file for EbayShoppingTypePicturesType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypePicturesType
 * Documentation : Defines variation-specific pictures associated with one VariationSpecificName (e.g., Color) whose values differ across variations.
 * @date 05/07/2012
 */
class EbayShoppingTypePicturesType extends EbayShoppingWsdlClass
{
	/**
	 * The VariationSpecificName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : One aspect of the variations that will be illustrated in the pictures for all variations. For example, if each variation is visually distinguished by color and the pictures show the different colors available, then specify "Color" as the name. The name must match one of the names specified in the variation specifics.
	 * @var string
	 */
	public $VariationSpecificName;
	/**
	 * The VariationSpecificPictureSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : One or more pictures that help buyers distinguish the Variations. Multiple picture sets can be specified. For example, suppose a listing contains blue and black color variations, and VariationSpecificName=Color. In this case, one picture set could contain pictures of the blue shirts (e.g., front view, back view, and close-up of a trim detail), and another picture set could contain pictures of the black shirts.<br> <br> Sellers do not necessarily provide pictures for all values that correspond to the variation specific name. For example, a listing could have pictures depicting the blue and black color variations, but not the pink variations.
	 * @var EbayShoppingTypeVariationSpecificPictureSetType
	 */
	public $VariationSpecificPictureSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string VariationSpecificName
	 * @param EbayShoppingTypeVariationSpecificPictureSetType VariationSpecificPictureSet
	 * @param DOMDocument any
	 * @return EbayShoppingTypePicturesType
	 */
	public function __construct($_VariationSpecificName = null,$_VariationSpecificPictureSet = null,$_any = null)
	{
		parent::__construct(array('VariationSpecificName'=>$_VariationSpecificName,'VariationSpecificPictureSet'=>$_VariationSpecificPictureSet,'any'=>$_any));
	}
	/**
	 * Set VariationSpecificName
	 * @param string VariationSpecificName
	 * @return string
	 */
	public function setVariationSpecificName($_VariationSpecificName)
	{
		return ($this->VariationSpecificName = $_VariationSpecificName);
	}
	/**
	 * Get VariationSpecificName
	 * @return string
	 */
	public function getVariationSpecificName()
	{
		return $this->VariationSpecificName;
	}
	/**
	 * Set VariationSpecificPictureSet
	 * @param VariationSpecificPictureSetType VariationSpecificPictureSet
	 * @return VariationSpecificPictureSetType
	 */
	public function setVariationSpecificPictureSet($_VariationSpecificPictureSet)
	{
		return ($this->VariationSpecificPictureSet = $_VariationSpecificPictureSet);
	}
	/**
	 * Get VariationSpecificPictureSet
	 * @return EbayShoppingTypeVariationSpecificPictureSetType
	 */
	public function getVariationSpecificPictureSet()
	{
		return $this->VariationSpecificPictureSet;
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