<?php
/**
 * Class file for EbayTradingTypeSetPictureManagerDetailsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetPictureManagerDetailsRequestType
 * Documentation : <table> <tr> <td class="notebox"> <b>Note:</b> This call will soon be deprecated. Use accordingly. </td> </tr> </table> <br> Creates, updates, or deletes Picture Manager account settings, folders, or pictures.
 * @date 04/07/2012
 */
class EbayTradingTypeSetPictureManagerDetailsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PictureManagerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the setting or folder to create, update, or delete, or the picture to update. You cannot upload or delete pictures using SetPictureManagerDetails; you must use the eBay site.
	 * @var EbayTradingTypePictureManagerDetailsType
	 */
	public $PictureManagerDetails;
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the action to take on the setting, folder, or picture. The values Add and Delete apply only to folders.
	 * @var EbayTradingTypePictureManagerActionCodeType
	 */
	public $Action;
	/**
	 * Constructor
	 * @param EbayTradingTypePictureManagerDetailsType PictureManagerDetails
	 * @param EbayTradingTypePictureManagerActionCodeType Action
	 * @return EbayTradingTypeSetPictureManagerDetailsRequestType
	 */
	public function __construct($_PictureManagerDetails = null,$_Action = null)
	{
		EbayTradingWsdlClass::__construct(array('PictureManagerDetails'=>$_PictureManagerDetails,'Action'=>$_Action));
	}
	/**
	 * Set PictureManagerDetails
	 * @param PictureManagerDetailsType PictureManagerDetails
	 * @return PictureManagerDetailsType
	 */
	public function setPictureManagerDetails($_PictureManagerDetails)
	{
		return ($this->PictureManagerDetails = $_PictureManagerDetails);
	}
	/**
	 * Get PictureManagerDetails
	 * @return EbayTradingTypePictureManagerDetailsType
	 */
	public function getPictureManagerDetails()
	{
		return $this->PictureManagerDetails;
	}
	/**
	 * Set Action
	 * @param PictureManagerActionCodeType Action
	 * @return PictureManagerActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypePictureManagerActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypePictureManagerActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
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