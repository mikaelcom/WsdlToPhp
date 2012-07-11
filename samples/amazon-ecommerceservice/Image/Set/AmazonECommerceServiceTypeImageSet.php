<?php
/**
 * Class file for AmazonECommerceServiceTypeImageSet
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeImageSet
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeImageSet extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The SwatchImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeImage
	 */
	public $SwatchImage;
	/**
	 * The SmallImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeImage
	 */
	public $SmallImage;
	/**
	 * The ThumbnailImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeImage
	 */
	public $ThumbnailImage;
	/**
	 * The TinyImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeImage
	 */
	public $TinyImage;
	/**
	 * The MediumImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeImage
	 */
	public $MediumImage;
	/**
	 * The LargeImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeImage
	 */
	public $LargeImage;
	/**
	 * The Category
	 * @var string
	 */
	public $Category;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeImage SwatchImage
	 * @param AmazonECommerceServiceTypeImage SmallImage
	 * @param AmazonECommerceServiceTypeImage ThumbnailImage
	 * @param AmazonECommerceServiceTypeImage TinyImage
	 * @param AmazonECommerceServiceTypeImage MediumImage
	 * @param AmazonECommerceServiceTypeImage LargeImage
	 * @param string Category
	 * @return AmazonECommerceServiceTypeImageSet
	 */
	public function __construct($_SwatchImage = null,$_SmallImage = null,$_ThumbnailImage = null,$_TinyImage = null,$_MediumImage = null,$_LargeImage = null,$_Category = null)
	{
		parent::__construct(array('SwatchImage'=>$_SwatchImage,'SmallImage'=>$_SmallImage,'ThumbnailImage'=>$_ThumbnailImage,'TinyImage'=>$_TinyImage,'MediumImage'=>$_MediumImage,'LargeImage'=>$_LargeImage,'Category'=>$_Category));
	}
	/**
	 * Set SwatchImage
	 * @param Image SwatchImage
	 * @return Image
	 */
	public function setSwatchImage($_SwatchImage)
	{
		return ($this->SwatchImage = $_SwatchImage);
	}
	/**
	 * Get SwatchImage
	 * @return AmazonECommerceServiceTypeImage
	 */
	public function getSwatchImage()
	{
		return $this->SwatchImage;
	}
	/**
	 * Set SmallImage
	 * @param Image SmallImage
	 * @return Image
	 */
	public function setSmallImage($_SmallImage)
	{
		return ($this->SmallImage = $_SmallImage);
	}
	/**
	 * Get SmallImage
	 * @return AmazonECommerceServiceTypeImage
	 */
	public function getSmallImage()
	{
		return $this->SmallImage;
	}
	/**
	 * Set ThumbnailImage
	 * @param Image ThumbnailImage
	 * @return Image
	 */
	public function setThumbnailImage($_ThumbnailImage)
	{
		return ($this->ThumbnailImage = $_ThumbnailImage);
	}
	/**
	 * Get ThumbnailImage
	 * @return AmazonECommerceServiceTypeImage
	 */
	public function getThumbnailImage()
	{
		return $this->ThumbnailImage;
	}
	/**
	 * Set TinyImage
	 * @param Image TinyImage
	 * @return Image
	 */
	public function setTinyImage($_TinyImage)
	{
		return ($this->TinyImage = $_TinyImage);
	}
	/**
	 * Get TinyImage
	 * @return AmazonECommerceServiceTypeImage
	 */
	public function getTinyImage()
	{
		return $this->TinyImage;
	}
	/**
	 * Set MediumImage
	 * @param Image MediumImage
	 * @return Image
	 */
	public function setMediumImage($_MediumImage)
	{
		return ($this->MediumImage = $_MediumImage);
	}
	/**
	 * Get MediumImage
	 * @return AmazonECommerceServiceTypeImage
	 */
	public function getMediumImage()
	{
		return $this->MediumImage;
	}
	/**
	 * Set LargeImage
	 * @param Image LargeImage
	 * @return Image
	 */
	public function setLargeImage($_LargeImage)
	{
		return ($this->LargeImage = $_LargeImage);
	}
	/**
	 * Get LargeImage
	 * @return AmazonECommerceServiceTypeImage
	 */
	public function getLargeImage()
	{
		return $this->LargeImage;
	}
	/**
	 * Set Category
	 * @param string Category
	 * @return string
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->Category;
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