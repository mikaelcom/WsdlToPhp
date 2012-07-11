<?php
/**
 * Class file for EbayTradingTypeSiteHostedPictureDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSiteHostedPictureDetailsType
 * Documentation : Contains information about a UploadSiteHostedPictures upload.
 * @date 04/07/2012
 */
class EbayTradingTypeSiteHostedPictureDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The PictureName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Corresponds to the PictureName input value that you specified in the request. You can use the PictureName output field to confirm that the UploadSiteHostedPictures response corresponds to a specific UploadSiteHostedPictures request.
	 * @var string
	 */
	public $PictureName;
	/**
	 * The PictureSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The size of images generated. This value may differ from the one requested, e.g. if a Supersize image cannot be generated.
	 * @var EbayTradingTypePictureSetCodeType
	 */
	public $PictureSet;
	/**
	 * The PictureFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The format into which an uploaded picture has been converted. This value is usually JPG, but may be GIF.
	 * @var EbayTradingTypePictureFormatCodeType
	 */
	public $PictureFormat;
	/**
	 * The FullURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL for the uploaded picture. Store this value for association with an item listing. That is, after you use UploadSiteHostedPictures to upload an image, use the value in FullURL to associate the image with an item (specify the value in Item.PictureDetails.PictureURL in AddItem, ReviseItem, or RelistItem) within 48 hours. Unassociated pictures are automatically deleted after that period.
	 * @var anyURI
	 */
	public $FullURL;
	/**
	 * The BaseURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Truncated version of FullURL.
	 * @var anyURI
	 */
	public $BaseURL;
	/**
	 * The PictureSetMember
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : URL and size information for each generated and stored size. This data is not necessarily needed by your application, but is provided for use in picture previews. This data is used for display control for specific pictures in the generated imageset. This data is supplied for all generated pictures.
	 * @var EbayTradingTypePictureSetMemberType
	 */
	public $PictureSetMember;
	/**
	 * The ExternalPictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL for an external picture hosting website will be included in the response, if it is provided in the UploadSiteHostedPictures request. <br> <br> Providing an external picture-hosting URL will allow you to include a picture in your listing that is not hosted on the eBay servers.
	 * @var anyURI
	 */
	public $ExternalPictureURL;
	/**
	 * The UseByDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The UseByDate is the last date that the picture can be associated with an item. <br> <br> If the image is used in a listing, the image is kept for 90 days plus the duration length of the listing (e.g. 90 + 7). If the image is used in another listing while it is still being kept on the server, the image will be kept until 90 days after the end of the newest listing.
	 * @var dateTime
	 */
	public $UseByDate;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string PictureName
	 * @param EbayTradingTypePictureSetCodeType PictureSet
	 * @param EbayTradingTypePictureFormatCodeType PictureFormat
	 * @param anyURI FullURL
	 * @param anyURI BaseURL
	 * @param EbayTradingTypePictureSetMemberType PictureSetMember
	 * @param anyURI ExternalPictureURL
	 * @param dateTime UseByDate
	 * @param DOMDocument any
	 * @return EbayTradingTypeSiteHostedPictureDetailsType
	 */
	public function __construct($_PictureName = null,$_PictureSet = null,$_PictureFormat = null,$_FullURL = null,$_BaseURL = null,$_PictureSetMember = null,$_ExternalPictureURL = null,$_UseByDate = null,$_any = null)
	{
		parent::__construct(array('PictureName'=>$_PictureName,'PictureSet'=>$_PictureSet,'PictureFormat'=>$_PictureFormat,'FullURL'=>$_FullURL,'BaseURL'=>$_BaseURL,'PictureSetMember'=>$_PictureSetMember,'ExternalPictureURL'=>$_ExternalPictureURL,'UseByDate'=>$_UseByDate,'any'=>$_any));
	}
	/**
	 * Set PictureName
	 * @param string PictureName
	 * @return string
	 */
	public function setPictureName($_PictureName)
	{
		return ($this->PictureName = $_PictureName);
	}
	/**
	 * Get PictureName
	 * @return string
	 */
	public function getPictureName()
	{
		return $this->PictureName;
	}
	/**
	 * Set PictureSet
	 * @param PictureSetCodeType PictureSet
	 * @return PictureSetCodeType
	 */
	public function setPictureSet($_PictureSet)
	{
		return ($this->PictureSet = EbayTradingTypePictureSetCodeType::valueIsValid($_PictureSet)?$_PictureSet:null);
	}
	/**
	 * Get PictureSet
	 * @return EbayTradingTypePictureSetCodeType
	 */
	public function getPictureSet()
	{
		return $this->PictureSet;
	}
	/**
	 * Set PictureFormat
	 * @param PictureFormatCodeType PictureFormat
	 * @return PictureFormatCodeType
	 */
	public function setPictureFormat($_PictureFormat)
	{
		return ($this->PictureFormat = EbayTradingTypePictureFormatCodeType::valueIsValid($_PictureFormat)?$_PictureFormat:null);
	}
	/**
	 * Get PictureFormat
	 * @return EbayTradingTypePictureFormatCodeType
	 */
	public function getPictureFormat()
	{
		return $this->PictureFormat;
	}
	/**
	 * Set FullURL
	 * @param anyURI FullURL
	 * @return anyURI
	 */
	public function setFullURL($_FullURL)
	{
		return ($this->FullURL = $_FullURL);
	}
	/**
	 * Get FullURL
	 * @return anyURI
	 */
	public function getFullURL()
	{
		return $this->FullURL;
	}
	/**
	 * Set BaseURL
	 * @param anyURI BaseURL
	 * @return anyURI
	 */
	public function setBaseURL($_BaseURL)
	{
		return ($this->BaseURL = $_BaseURL);
	}
	/**
	 * Get BaseURL
	 * @return anyURI
	 */
	public function getBaseURL()
	{
		return $this->BaseURL;
	}
	/**
	 * Set PictureSetMember
	 * @param PictureSetMemberType PictureSetMember
	 * @return PictureSetMemberType
	 */
	public function setPictureSetMember($_PictureSetMember)
	{
		return ($this->PictureSetMember = $_PictureSetMember);
	}
	/**
	 * Get PictureSetMember
	 * @return EbayTradingTypePictureSetMemberType
	 */
	public function getPictureSetMember()
	{
		return $this->PictureSetMember;
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
	 * Set UseByDate
	 * @param dateTime UseByDate
	 * @return dateTime
	 */
	public function setUseByDate($_UseByDate)
	{
		return ($this->UseByDate = $_UseByDate);
	}
	/**
	 * Get UseByDate
	 * @return dateTime
	 */
	public function getUseByDate()
	{
		return $this->UseByDate;
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