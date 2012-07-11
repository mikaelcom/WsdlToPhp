<?php
/**
 * Class file for EbayTradingTypeVariationSpecificPictureSetType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVariationSpecificPictureSetType
 * Documentation : At least one container is required (minOccurs="1") if Pictures container is present in the request.
 * @date 04/07/2012
 */
class EbayTradingTypeVariationSpecificPictureSetType extends EbayTradingWsdlClass
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
	 * 	- documentation : The URL of a picture that is associated with the <b>VariationSpecificValue</b>. A variation specific picture set can consist of up to 12 images hosted by eBay Picture Services (EPS). However, only one picture may be used if that picture is hosted outside of eBay. eBay Picture Services and self-hosted images can never be combined into the same variation specific picture set. To specify multiple eBay Picture Services images, use multiple <b>PictureURL</b> fields, passing in a distinct URL in each of those fields. If specified, this field cannot have an empty/null value. <br><br> The picture located at the URL specified in the first <b>PictureURL</b> field is also used as the gallery picture for applicable variations. For example, if the picture set contains pictures of red shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the first picture is used as the gallery picture for all the red shirt variations.< br> <br> You can use Item.PictureDetails to specify additional pictures. For example, the item-level pictures could include a model wearing a black shirt, as a typical example of the shirt style. <br><br> <span class="tablenote"><b>Note:</b> If a URI contains spaces, replace them with <code>%20</code>. For example, <code>http://example.com/my image.jpg</code> must be submitted as <code>http://example.com/my%20image.jpg</code> to replace the space in the image file name. </span>
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The GalleryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for the variation's Gallery thumbnail, which eBay uses when the variation is shown in My eBay.
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The ExternalPictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returns the URL of a variation-specific picture that is hosted outside of eBay.<br> <br> When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted picture or EPS picture.<br> <br> On sites with free gallery, if you use a self-hosted picture for a variation, eBay copies the picture and hosts it in eBay Picture Services (EPS). In eBay's View Item page, the variation shows the EPS-hosted picture. GetItem returns the EPS picture in VariationSpecificPictureSet.PictureURL, and it returns the self-hosted picture in VariationSpecificPictureSet.ExternalPictureURL. (If the copying process fails, the original (self-hosted) picture is returned in both ExternalPictureURL and PictureURL.)<br> <br> Only returned when the seller used a self-hosted picture for the variation.
	 * @var anyURI
	 */
	public $ExternalPictureURL;
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
	 * @param anyURI ExternalPictureURL
	 * @param DOMDocument any
	 * @return EbayTradingTypeVariationSpecificPictureSetType
	 */
	public function __construct($_VariationSpecificValue = null,$_PictureURL = null,$_GalleryURL = null,$_ExternalPictureURL = null,$_any = null)
	{
		parent::__construct(array('VariationSpecificValue'=>$_VariationSpecificValue,'PictureURL'=>$_PictureURL,'GalleryURL'=>$_GalleryURL,'ExternalPictureURL'=>$_ExternalPictureURL,'any'=>$_any));
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
	 * Set ExternalPictureURL
	 * @param anyURI ExternalPictureURL
	 * @return anyURI
	 */
	public function setExternalPictureURL($_ExternalPictureURL)
	{
		return ($this->ExternalPictureURL = $_ExternalPictureURL);
	}
	/**
	 * Get ExternalPictureURL
	 * @return anyURI
	 */
	public function getExternalPictureURL()
	{
		return $this->ExternalPictureURL;
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