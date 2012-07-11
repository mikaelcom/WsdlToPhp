<?php
/**
 * Class file for EbayTradingTypeGetPictureManagerDetailsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPictureManagerDetailsResponseType
 * Documentation : Responds with information about content in a Picture Manager album or the account settings.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPictureManagerDetailsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PictureManagerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains details of the account settings, folders or pictures in the user's album, or both.
	 * @var EbayTradingTypePictureManagerDetailsType
	 */
	public $PictureManagerDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypePictureManagerDetailsType PictureManagerDetails
	 * @return EbayTradingTypeGetPictureManagerDetailsResponseType
	 */
	public function __construct($_PictureManagerDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('PictureManagerDetails'=>$_PictureManagerDetails));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>