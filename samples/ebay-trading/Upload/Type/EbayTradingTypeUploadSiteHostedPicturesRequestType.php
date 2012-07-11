<?php
/**
 * Class file for EbayTradingTypeUploadSiteHostedPicturesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUploadSiteHostedPicturesRequestType
 * Documentation : Uploads a picture for a listing and returns a URL for the picture.
 * @date 04/07/2012
 */
class EbayTradingTypeUploadSiteHostedPicturesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PictureName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A name you provide for the picture. Returned as SiteHostedPictureDetails.PictureName in the call response.
	 * @var string
	 */
	public $PictureName;
	/**
	 * The PictureSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the picture system version. Only version 2 is valid. Available to support future changes in the picture system version.
	 * @var int
	 */
	public $PictureSystemVersion;
	/**
	 * The PictureSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The image sizes that will be generated.
	 * @var EbayTradingTypePictureSetCodeType
	 */
	public $PictureSet;
	/**
	 * The PictureData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An optional reference ID to the binary attachment. The PictureData field does not contain the binary attachment. The binary attachment is image data, including headers, from a JPG, GIF, PNG, BMP, or TIF format image file. The binary attachment must be sent as a MIME attachment, in your POST request, after the XML input. <br> <br> <b>Note: Not applicable for eBay Large Merchant Services. Use the ExternalPictureURL field instead.</b>
	 * @var EbayTradingTypeBase64BinaryType
	 */
	public $PictureData;
	/**
	 * The PictureUploadPolicy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When the My Picture Uploads feature is available (see the Trading API Release Notes), applications (including non-listing apps, such as photo-editors and digital-camera software) will be able to use the PictureUploadPolicy field to specify that an uploaded picture is available to a seller on the eBay site. When you use PictureUploadPolicy, you are specifying that the picture you uploaded (and its URL) is stored for 48 hours on the eBay site. (If, within 48 hours, the picture is associated with an item, then it persists on the eBay site for the same time length as other pictures uploaded using the UploadSiteHostedPictures call). As a result of the storage on the eBay site, the picture is available to the seller on the My Picture Uploads tab within the Sell Your Item (SYI) pages. A maximum of 25 URLs can be stored.
	 * @var EbayTradingTypePictureUploadPolicyCodeType
	 */
	public $PictureUploadPolicy;
	/**
	 * The ExternalPictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Include the URL for a picture that you want to include in your listing. You can only include one ExternalPictureURL field per call. <br><br> <span class="tablenote"><b>Note:</b> If a URI contains spaces, replace them with <code>%20</code>. For example, <code>http://example.com/my image.jpg</code> must be submitted as <code>http://example.com/my%20image.jpg</code> to replace the space in the image file name. </span> <br> <br> This field allows the eBay server to retrieve a picture from a URL on an external web server. Once retrieved, the picture will be copied to eBay Picture Services (EPS), and retained for 90 days, plus the length of your listing duration. <br> <br> <b>Note: The ExternalPictureURL field is required when using eBay Large Merchant Services.</b>
	 * @var anyURI
	 */
	public $ExternalPictureURL;
	/**
	 * The PictureWatermark
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This is the type of watermark that should be applied to the pictures hosted by the eBay Picture Services. Please note that watermarks are applied only to pictures that are greater than an EPS configured size. The possible values are: None, Both, Icon, or SellerId.
	 * @var EbayTradingTypePictureWatermarkCodeType
	 */
	public $PictureWatermark;
	/**
	 * The ExtensionInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of days to extend the expiration date for the specified image, after a listing has ended. This call is restricted to applications that have been granted permission to use it by eBay Developer Technical Support. <br><br> This call is not needed for active listings - it is meant to be used only when a photo needs to be hosted longer than the normal listing duration. <br><br> The maximum number of days allowed for this field is 30.
	 * @var int
	 */
	public $ExtensionInDays;
	/**
	 * Constructor
	 * @param string PictureName
	 * @param int PictureSystemVersion
	 * @param EbayTradingTypePictureSetCodeType PictureSet
	 * @param EbayTradingTypeBase64BinaryType PictureData
	 * @param EbayTradingTypePictureUploadPolicyCodeType PictureUploadPolicy
	 * @param anyURI ExternalPictureURL
	 * @param EbayTradingTypePictureWatermarkCodeType PictureWatermark
	 * @param int ExtensionInDays
	 * @return EbayTradingTypeUploadSiteHostedPicturesRequestType
	 */
	public function __construct($_PictureName = null,$_PictureSystemVersion = null,$_PictureSet = null,$_PictureData = null,$_PictureUploadPolicy = null,$_ExternalPictureURL = null,$_PictureWatermark = null,$_ExtensionInDays = null)
	{
		EbayTradingWsdlClass::__construct(array('PictureName'=>$_PictureName,'PictureSystemVersion'=>$_PictureSystemVersion,'PictureSet'=>$_PictureSet,'PictureData'=>$_PictureData,'PictureUploadPolicy'=>$_PictureUploadPolicy,'ExternalPictureURL'=>$_ExternalPictureURL,'PictureWatermark'=>$_PictureWatermark,'ExtensionInDays'=>$_ExtensionInDays));
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
	 * Set PictureData
	 * @param Base64BinaryType PictureData
	 * @return Base64BinaryType
	 */
	public function setPictureData($_PictureData)
	{
		return ($this->PictureData = $_PictureData);
	}
	/**
	 * Get PictureData
	 * @return EbayTradingTypeBase64BinaryType
	 */
	public function getPictureData()
	{
		return $this->PictureData;
	}
	/**
	 * Set PictureUploadPolicy
	 * @param PictureUploadPolicyCodeType PictureUploadPolicy
	 * @return PictureUploadPolicyCodeType
	 */
	public function setPictureUploadPolicy($_PictureUploadPolicy)
	{
		return ($this->PictureUploadPolicy = EbayTradingTypePictureUploadPolicyCodeType::valueIsValid($_PictureUploadPolicy)?$_PictureUploadPolicy:null);
	}
	/**
	 * Get PictureUploadPolicy
	 * @return EbayTradingTypePictureUploadPolicyCodeType
	 */
	public function getPictureUploadPolicy()
	{
		return $this->PictureUploadPolicy;
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
	 * Set PictureWatermark
	 * @param PictureWatermarkCodeType PictureWatermark
	 * @return PictureWatermarkCodeType
	 */
	public function setPictureWatermark($_PictureWatermark)
	{
		return ($this->PictureWatermark = EbayTradingTypePictureWatermarkCodeType::valueIsValid($_PictureWatermark)?$_PictureWatermark:null);
	}
	/**
	 * Get PictureWatermark
	 * @return EbayTradingTypePictureWatermarkCodeType
	 */
	public function getPictureWatermark()
	{
		return $this->PictureWatermark;
	}
	/**
	 * Set ExtensionInDays
	 * @param int ExtensionInDays
	 * @return int
	 */
	public function setExtensionInDays($_ExtensionInDays)
	{
		return ($this->ExtensionInDays = $_ExtensionInDays);
	}
	/**
	 * Get ExtensionInDays
	 * @return int
	 */
	public function getExtensionInDays()
	{
		return $this->ExtensionInDays;
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