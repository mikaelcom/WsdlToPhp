<?php
/**
 * Class file for EbayTradingTypeUploadSiteHostedPicturesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUploadSiteHostedPicturesResponseType
 * Documentation : Contains information about a picture upload (i.e., information about a picture upload containing a binary attachment of an image).
 * @date 04/07/2012
 */
class EbayTradingTypeUploadSiteHostedPicturesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PictureSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the picture system version that was used to upload pictures. Only version 2 is valid.
	 * @var int
	 */
	public $PictureSystemVersion;
	/**
	 * The SiteHostedPictureDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about an UploadSiteHostedPictures upload, including the URL of the uploaded picture.
	 * @var EbayTradingTypeSiteHostedPictureDetailsType
	 */
	public $SiteHostedPictureDetails;
	/**
	 * Constructor
	 * @param int PictureSystemVersion
	 * @param EbayTradingTypeSiteHostedPictureDetailsType SiteHostedPictureDetails
	 * @return EbayTradingTypeUploadSiteHostedPicturesResponseType
	 */
	public function __construct($_PictureSystemVersion = null,$_SiteHostedPictureDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('PictureSystemVersion'=>$_PictureSystemVersion,'SiteHostedPictureDetails'=>$_SiteHostedPictureDetails));
	}
	/**
	 * Set PictureSystemVersion
	 * @param int PictureSystemVersion
	 * @return int
	 */
	public function setPictureSystemVersion($_PictureSystemVersion)
	{
		return ($this->PictureSystemVersion = $_PictureSystemVersion);
	}
	/**
	 * Get PictureSystemVersion
	 * @return int
	 */
	public function getPictureSystemVersion()
	{
		return $this->PictureSystemVersion;
	}
	/**
	 * Set SiteHostedPictureDetails
	 * @param SiteHostedPictureDetailsType SiteHostedPictureDetails
	 * @return SiteHostedPictureDetailsType
	 */
	public function setSiteHostedPictureDetails($_SiteHostedPictureDetails)
	{
		return ($this->SiteHostedPictureDetails = $_SiteHostedPictureDetails);
	}
	/**
	 * Get SiteHostedPictureDetails
	 * @return EbayTradingTypeSiteHostedPictureDetailsType
	 */
	public function getSiteHostedPictureDetails()
	{
		return $this->SiteHostedPictureDetails;
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