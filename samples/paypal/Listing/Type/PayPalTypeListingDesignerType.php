<?php
/**
 * Class file for PayPalTypeListingDesignerType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeListingDesignerType
 * Documentation : Identifies the Layout and the Theme template associated with the item. in case of revision - all data can be min occur = 0
 * @date 14/07/2012
 */
class PayPalTypeListingDesignerType extends PayPalWsdlClass
{
	/**
	 * The LayoutID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies the Layout template associated with the item.
	 * @var int
	 */
	public $LayoutID;
	/**
	 * The OptimalPictureSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A value of true for OptimalPictureSize indicates that the picture URL will be enlarged to fit description of the item.
	 * @var boolean
	 */
	public $OptimalPictureSize;
	/**
	 * The ThemeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies the Theme template associated with the item.
	 * @var int
	 */
	public $ThemeID;
	/**
	 * Constructor
	 * @param int LayoutID
	 * @param boolean OptimalPictureSize
	 * @param int ThemeID
	 * @return PayPalTypeListingDesignerType
	 */
	public function __construct($_LayoutID = null,$_OptimalPictureSize = null,$_ThemeID = null)
	{
		parent::__construct(array('LayoutID'=>$_LayoutID,'OptimalPictureSize'=>$_OptimalPictureSize,'ThemeID'=>$_ThemeID));
	}
	/**
	 * Set LayoutID
	 * @param int LayoutID
	 * @return int
	 */
	public function setLayoutID($_LayoutID)
	{
		return ($this->LayoutID = $_LayoutID);
	}
	/**
	 * Get LayoutID
	 * @return int
	 */
	public function getLayoutID()
	{
		return $this->LayoutID;
	}
	/**
	 * Set OptimalPictureSize
	 * @param boolean OptimalPictureSize
	 * @return boolean
	 */
	public function setOptimalPictureSize($_OptimalPictureSize)
	{
		return ($this->OptimalPictureSize = $_OptimalPictureSize);
	}
	/**
	 * Get OptimalPictureSize
	 * @return boolean
	 */
	public function getOptimalPictureSize()
	{
		return $this->OptimalPictureSize;
	}
	/**
	 * Set ThemeID
	 * @param int ThemeID
	 * @return int
	 */
	public function setThemeID($_ThemeID)
	{
		return ($this->ThemeID = $_ThemeID);
	}
	/**
	 * Get ThemeID
	 * @return int
	 */
	public function getThemeID()
	{
		return $this->ThemeID;
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