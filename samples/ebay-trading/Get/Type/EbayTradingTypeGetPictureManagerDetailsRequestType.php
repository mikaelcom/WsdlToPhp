<?php
/**
 * Class file for EbayTradingTypeGetPictureManagerDetailsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPictureManagerDetailsRequestType
 * Documentation : <table> <tr> <td class="notebox"> <b>Note:</b> This call will soon be deprecated. Use accordingly. </td> </tr> </table> <br> Requests information about folders or pictures in a Picture Manager account or the account settings.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPictureManagerDetailsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of a folder in the user's Picture Manager album for which you want information. If you specify both FolderID and PictureURL, the picture must exist in the folder.
	 * @var int
	 */
	public $FolderID;
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of a picture in the user's Picture Manager album. If you specify both FolderID and PictureURL, the picture must exist in the folder.
	 * @var string
	 */
	public $PictureURL;
	/**
	 * The PictureManagerDetailLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of information you want returned, about pictures and folders, the account subscription, or both. Use this element rather than the generic DetailLevel element defined in AbstractRequestType. You can use the following values: ReturnAll, ReturnSubscription, or ReturnPicture.
	 * @var EbayTradingTypePictureManagerDetailLevelCodeType
	 */
	public $PictureManagerDetailLevel;
	/**
	 * Constructor
	 * @param int FolderID
	 * @param string PictureURL
	 * @param EbayTradingTypePictureManagerDetailLevelCodeType PictureManagerDetailLevel
	 * @return EbayTradingTypeGetPictureManagerDetailsRequestType
	 */
	public function __construct($_FolderID = null,$_PictureURL = null,$_PictureManagerDetailLevel = null)
	{
		EbayTradingWsdlClass::__construct(array('FolderID'=>$_FolderID,'PictureURL'=>$_PictureURL,'PictureManagerDetailLevel'=>$_PictureManagerDetailLevel));
	}
	/**
	 * Set FolderID
	 * @param int FolderID
	 * @return int
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return int
	 */
	public function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * Set PictureURL
	 * @param string PictureURL
	 * @return string
	 */
	public function setPictureURL($_PictureURL)
	{
		return ($this->PictureURL = $_PictureURL);
	}
	/**
	 * Get PictureURL
	 * @return string
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set PictureManagerDetailLevel
	 * @param PictureManagerDetailLevelCodeType PictureManagerDetailLevel
	 * @return PictureManagerDetailLevelCodeType
	 */
	public function setPictureManagerDetailLevel($_PictureManagerDetailLevel)
	{
		return ($this->PictureManagerDetailLevel = EbayTradingTypePictureManagerDetailLevelCodeType::valueIsValid($_PictureManagerDetailLevel)?$_PictureManagerDetailLevel:null);
	}
	/**
	 * Get PictureManagerDetailLevel
	 * @return EbayTradingTypePictureManagerDetailLevelCodeType
	 */
	public function getPictureManagerDetailLevel()
	{
		return $this->PictureManagerDetailLevel;
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