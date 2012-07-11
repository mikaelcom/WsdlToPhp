<?php
/**
 * Class file for EbayTradingTypePicturesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePicturesType
 * Documentation : Defines variation-specific pictures associated with one VariationSpecificName (e.g., Color) whose values differ across variations.
 * @date 04/07/2012
 */
class EbayTradingTypePicturesType extends EbayTradingWsdlClass
{
	/**
	 * The VariationSpecificName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : One aspect of the variations that will be illustrated in the pictures for all variations. For example, if each variation is visually distinguished by color and the pictures show the different colors available, then specify "Color" as the name. The name must match one of the names specified in the <b>VariationSpecifics</b> container. <br><br> This field is required in each <b>Item.Variations.Pictures</b> container that is used.
	 * @var string
	 */
	public $VariationSpecificName;
	/**
	 * The VariationSpecificPictureSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A container consisting of one or more picture URLs associated with a variation specific value (e.g., color=blue). For example, suppose a listing contains blue and black color variations, and <b>VariationSpecificName= Color</b>. In this case, one picture set could contain pictures of the blue shirts (e.g., front view, back view, and close-up of a trim detail), and another picture set could contain pictures of the black shirts. <br><br> A variation specific picture set can consist of up to 12 images hosted by eBay Picture Services (EPS). However, only one picture may be used if that picture is hosted outside of eBay. eBay Picture Services and self-hosted images can never be combined into the same variation specific picture set. <br><br> At least one picture set is required if the <b>Pictures</b> node is present in the request. You are not required to provide pictures for all values that correspond to the variation specific name. For example, a listing could have pictures depicting the blue and black color variations, but not the pink variations.
	 * @var EbayTradingTypeVariationSpecificPictureSetType
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
	 * @param EbayTradingTypeVariationSpecificPictureSetType VariationSpecificPictureSet
	 * @param DOMDocument any
	 * @return EbayTradingTypePicturesType
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
	 * @return EbayTradingTypeVariationSpecificPictureSetType
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