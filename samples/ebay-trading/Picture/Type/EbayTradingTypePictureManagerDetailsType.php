<?php
/**
 * Class file for EbayTradingTypePictureManagerDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerDetailsType
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The SubscriptionLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The level of Picture Manager subscription. Each level has a monthly fee and provides a certain amount of storage space.
	 * @var EbayTradingTypePictureManagerSubscriptionLevelCodeType
	 */
	public $SubscriptionLevel;
	/**
	 * The StorageUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of storage already in use. Measured in bytes. Read-only value.
	 * @var int
	 */
	public $StorageUsed;
	/**
	 * The TotalStorageAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of storage space remaining in the authenticated user's album. Measured in bytes. Read-only value.
	 * @var int
	 */
	public $TotalStorageAvailable;
	/**
	 * The KeepOriginal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether to keep a copy of the original picture without resizing. Default is false. true = keep originals.
	 * @var boolean
	 */
	public $KeepOriginal;
	/**
	 * The WatermarkEPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether to show the EPS watermark when photos are displayed. Default is false. true = show.
	 * @var boolean
	 */
	public $WatermarkEPS;
	/**
	 * The WatermarkUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether to show the user ID watermark when photos are displayed. Default is false. true = show.
	 * @var boolean
	 */
	public $WatermarkUserID;
	/**
	 * The Folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The folder requested in the album.
	 * @var EbayTradingTypePictureManagerFolderType
	 */
	public $Folder;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypePictureManagerSubscriptionLevelCodeType SubscriptionLevel
	 * @param int StorageUsed
	 * @param int TotalStorageAvailable
	 * @param boolean KeepOriginal
	 * @param boolean WatermarkEPS
	 * @param boolean WatermarkUserID
	 * @param EbayTradingTypePictureManagerFolderType Folder
	 * @param DOMDocument any
	 * @return EbayTradingTypePictureManagerDetailsType
	 */
	public function __construct($_SubscriptionLevel = null,$_StorageUsed = null,$_TotalStorageAvailable = null,$_KeepOriginal = null,$_WatermarkEPS = null,$_WatermarkUserID = null,$_Folder = null,$_any = null)
	{
		parent::__construct(array('SubscriptionLevel'=>$_SubscriptionLevel,'StorageUsed'=>$_StorageUsed,'TotalStorageAvailable'=>$_TotalStorageAvailable,'KeepOriginal'=>$_KeepOriginal,'WatermarkEPS'=>$_WatermarkEPS,'WatermarkUserID'=>$_WatermarkUserID,'Folder'=>$_Folder,'any'=>$_any));
	}
	/**
	 * Set SubscriptionLevel
	 * @param PictureManagerSubscriptionLevelCodeType SubscriptionLevel
	 * @return PictureManagerSubscriptionLevelCodeType
	 */
	public function setSubscriptionLevel($_SubscriptionLevel)
	{
		return ($this->SubscriptionLevel = EbayTradingTypePictureManagerSubscriptionLevelCodeType::valueIsValid($_SubscriptionLevel)?$_SubscriptionLevel:null);
	}
	/**
	 * Get SubscriptionLevel
	 * @return EbayTradingTypePictureManagerSubscriptionLevelCodeType
	 */
	public function getSubscriptionLevel()
	{
		return $this->SubscriptionLevel;
	}
	/**
	 * Set StorageUsed
	 * @param int StorageUsed
	 * @return int
	 */
	public function setStorageUsed($_StorageUsed)
	{
		return ($this->StorageUsed = $_StorageUsed);
	}
	/**
	 * Get StorageUsed
	 * @return int
	 */
	public function getStorageUsed()
	{
		return $this->StorageUsed;
	}
	/**
	 * Set TotalStorageAvailable
	 * @param int TotalStorageAvailable
	 * @return int
	 */
	public function setTotalStorageAvailable($_TotalStorageAvailable)
	{
		return ($this->TotalStorageAvailable = $_TotalStorageAvailable);
	}
	/**
	 * Get TotalStorageAvailable
	 * @return int
	 */
	public function getTotalStorageAvailable()
	{
		return $this->TotalStorageAvailable;
	}
	/**
	 * Set KeepOriginal
	 * @param boolean KeepOriginal
	 * @return boolean
	 */
	public function setKeepOriginal($_KeepOriginal)
	{
		return ($this->KeepOriginal = $_KeepOriginal);
	}
	/**
	 * Get KeepOriginal
	 * @return boolean
	 */
	public function getKeepOriginal()
	{
		return $this->KeepOriginal;
	}
	/**
	 * Set WatermarkEPS
	 * @param boolean WatermarkEPS
	 * @return boolean
	 */
	public function setWatermarkEPS($_WatermarkEPS)
	{
		return ($this->WatermarkEPS = $_WatermarkEPS);
	}
	/**
	 * Get WatermarkEPS
	 * @return boolean
	 */
	public function getWatermarkEPS()
	{
		return $this->WatermarkEPS;
	}
	/**
	 * Set WatermarkUserID
	 * @param boolean WatermarkUserID
	 * @return boolean
	 */
	public function setWatermarkUserID($_WatermarkUserID)
	{
		return ($this->WatermarkUserID = $_WatermarkUserID);
	}
	/**
	 * Get WatermarkUserID
	 * @return boolean
	 */
	public function getWatermarkUserID()
	{
		return $this->WatermarkUserID;
	}
	/**
	 * Set Folder
	 * @param PictureManagerFolderType Folder
	 * @return PictureManagerFolderType
	 */
	public function setFolder($_Folder)
	{
		return ($this->Folder = $_Folder);
	}
	/**
	 * Get Folder
	 * @return EbayTradingTypePictureManagerFolderType
	 */
	public function getFolder()
	{
		return $this->Folder;
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