<?php
/**
 * Class file for EbayTradingTypePictureDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureDetailsType
 * Documentation : Contains the data for a picture associated with an item. Replaces the deprecated SiteHostedPicture and VendorHostedPicture. Not applicable to Half.com.
 * @date 04/07/2012
 */
class EbayTradingTypePictureDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The GalleryType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether listing images are included in the search results (in the Picture Gallery and List Views) and, if so, which enhancements apply. Items that have pictures but no image-listing enhancements have a generic photo image in search results, but see the information below about sites with free Gallery. <br><br> If the GalleryType value is Gallery, Plus, or Featured, eBay checks the available image URLs in the following order to determine which URL to use (if more than one of these URLs is available):<br> <br> a) Use the URL in GalleryURL, if it is specified.<br> b) Otherwise, if ProductListingDetails.UseStockPhotoURLAsGallery is true, use the eBay stock photo.<br> c) Otherwise, use the value of the first PictureURL in the array of PictureURL fields, if any.<br> d) Otherwise, if ProductListingDetails.ProductID is specified, use the eBay stock photo for that ProductID (eBay resets UseStockPhotoURLAsGallery to true in this case).<br> e) If eBay cannot find an image URL for the listing, an error is returned. <br><br> Note that you can use the Gallery Plus feature whether or not the image is hosted with eBay Picture Services (EPS). Selecting Gallery Plus does not incur a separate Gallery fee. <br><br> See "Describing Items in a Listing" in the eBay Web Services Guide for additional information about working with pictures and related validation rules. <br><br> You cannot remove Gallery, Plus, or Featured when revising an item, however you can upgrade to a higher feature. On upgrade, the original feature fee is credited, and the new feature fee is charged.<br> <br> There are a number of categories on some eBay sites that always offer the Gallery feature for free. (The API doesn't flag these categories in any meta-data calls.) In these categories, if you specify a picture and you don't specify GalleryType, eBay may add GalleryType=Gallery to the listing (for free) and return a warning (error code 219243). The Knowledge Base explains an edge case that could result in an unexpected gallery fee if the seller moves the item to a category that doesn't offer the free gallery feature. This fee can also appear when if the seller moves the item from a site that offers free Gallery (across all its categories) to one where free Gallery is not yet available. Whenever you change the primary category, it is a good idea to clearly specify whether the seller is intentionally requesting the gallery option. <br><br> <span class="tablenote"><b>Note:</b> The following sites offer free Gallery: US (site ID 0), the Parts & Accessories Category on US Motors (site ID 100), CA (site ID 2), CAFR (site ID 210), ES (site ID 186), FR (site ID 71), IT (site ID 101),and NL (site ID 146). <br><br> On these sites, eBay will automatically create a Gallery thumbnail for the listing in search results by selecting a picture from one of the image URLs specified in the request (either Item.PictureDetails.PictureURL or Item.PictureDetails.GalleryURL) or from an available stock photo. Thus, a Gallery thumbnail will be created whenever Item.PictureDetails.GalleryType is None or is not specified in the request. A Gallery fee will apply whenever GalleryType specifies the Plus or Featured image enhancements <b>(there will be no Gallery fee whenever GalleryType is Gallery, None or is not specified in the request)</b>. <br><br> eBay will select the image for the thumbnail depending on which of the image URLs above was specified in the request (there are selection rules for four cases). Note that the selected image will not necessarily be the image you have specified in Item.PictureDetails.GalleryURL. Note that a Gallery thumbnail will not be automatically created if PictureURL and GalleryURL are not supplied and UseStockPhotoURLAsGallery and IncludeStockURL are set to false. <br><br> The most common case occurs when both GalleryURL and PictureURL are specified in the request. eBay will use the image referenced by PictureURL as the Gallery thumbnail. As three other cases exist, please refer to "Using Gallery Features on Sites with Free Gallery" in the eBay Web Services Guide for complete information on how eBay selects an image for the gallery thumbnail on these sites. <br><br> You cannot remove Gallery or Featured when revising an item, however you can upgrade to a higher feature. On upgrade, the original feature fee is credited, and the new feature fee is charged. (This does not apply to Gallery Plus on sites with free Gallery; see Plus below for more information.) </span>
	 * @var EbayTradingTypeGalleryTypeCodeType
	 */
	public $GalleryType;
	/**
	 * The GalleryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Supported in Production only (not Sandbox)</b>. The URL for a picture used as the Gallery thumbnail. On a free-Gallery site, if there is a PictureURL, the PictureURL fills in or replaces the GalleryURL. Note that GalleryURL is ignored if GalleryType is None or unspecified. If the value of GalleryType is Gallery or Featured, you can either specify GalleryURL or allow eBay to use another picture that you have included in the listing. <br><br> <span class="tablenote"><b>Note:</b> The following sites offer free Gallery: US (site ID 0), the Parts & Accessories Category on US Motors (site ID 100), CA (site ID 2), CAFR (site ID 210), ES (site ID 186), FR (site ID 71), IT (site ID 101),and NL (site ID 146). <br><br> On these sites, eBay selects a Gallery thumbnail from image URLs included in the request (i.e. either GalleryURL or the first PictureURL), using selection rules that consider which of these URLs was specified and whether an eBay stock photo exists for the item. Note that the selected gallery thumbnail may not necessarily be the one you specify using GalleryURL. Also, eBay selects an image regardless of whether you have specified either GalleryType or GalleryURL. A stock photo will not be generated for an item unless UseStockPhotoURLAsGallery and IncludeStockPhotoURL are set to true. Therefore, in this case, an item that does not have a PictureURL will not have a Gallery picture. A Gallery fee will only apply if you have set GalleryType to Plus or Featured (as basic Gallery is free). For more information on eBay's selection rules for the gallery thumbnail on sites with free Gallery, see "Using Gallery Features on Sites with Free Gallery" in the eBay Web Services Guide.</span> <br><br> (See GalleryType for the rules that determine which URL is used if you do not specify GalleryURL on sites where free Gallery is currently not available.) The image used for the Gallery thumbnail must be in one of the graphics formats JPEG, BMP, TIF, or GIF. See "Describing Items in a Listing" in the eBay Web Services Guide for additional validation rules. To remove GalleryURL when revising or relisting an item, use DeletedField. When you revise an item, you can only remove GalleryURL if the item has at least one PictureURL or a stock photo to use instead. If the item has bids (or items have been sold) or the listing ends within 12 hours, you can add GalleryURL or change its value, but you cannot remove the gallery URL value if it was previously specified. Not applicable to eBay Motors listings. <br><br> <span class="tablenote"><b>Note:</b> If a URI contains spaces, replace them with <code>%20</code>. For example, <code>http://example.com/my image.jpg</code> must be submitted as <code>http://example.com/my%20image.jpg</code> to replace the space in the image file name. </span>
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The PhotoDisplay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of image display used in a listing. Some options are only available if images are hosted through eBay Picture Services (EPS). eBay determines this by parsing the associated PictureURL. <br><br> You cannot use PhotoDisplay in combination with Listing Designer layouts. Specify None or do not add PhotoDisplay when ListingDesigner.LayoutID is a value other than 0. <br><br> Some PhotoDisplay options can result in listing fees, even when the item is relisted. If you are relisting an item that was originally listed with a PhotoDisplay option, and you do not want that PhotoDisplay enhancement in your relisted item, you need to specifically remove PhotoDisplay in your RelistItem call (or RelistFixedPriceItem, as applicable) by setting PhotoDisplay to None. Use VerifyRelistItem to review your listing fees before you relist an item.
	 * @var EbayTradingTypePhotoDisplayCodeType
	 */
	public $PhotoDisplay;
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a URL for a picture associated with an item; cannot be empty or null. The picture may be hosted on eBay Picture Services (EPS). Some options require hosting through EPS. Alternatively, the picture may be self-hosted. eBay determines where the picture is hosted by parsing the value specified in the request. On sites with free gallery, if a listing uses a self-hosted picture (except in the case of a multi-variation listing), the picture will be copied to EPS. The PictureDetails.PictureURL value returned by GetItem will be an EPS URL. See ExternalPictureURL above and see the link below titled "Copy of a Self-Hosted Picture To eBay Picture Services." On a free-Gallery site, if there is a PictureURL, the PictureURL fills in or replaces the GalleryURL. <br><br> <span class="tablenote"><b>Note:</b> The following sites have free Gallery: US (site ID 0), the Parts & Accessories Category on US Motors (site ID 100), CA (site ID 2), CAFR (site ID 210), ES (site ID 186), FR (site ID 71), IT (site ID 101),and NL (site ID 146). <br><br> On free-gallery sites, eBay selects a Gallery thumbnail from picture URLs in the request (i.e., either the GalleryURL or the first PictureURL), with selection rules that consider which URLs were specified and whether an eBay stock photo exists for the item. eBay selects a picture regardless of whether you specified GalleryType or GalleryURL. Note that a stock photo is not generated unless the following are true: UseStockPhotoURLAsGallery and IncludeStockPhotoURL. Therefore, an item that does not have a PictureURL may have no Gallery picture. Note that a Gallery fee applies only if you set GalleryType to Plus or Featured (as basic Gallery is free). As a result of these changes, under certain scenarios the picture at the top of a listing may not be the picture you specified in PictureURL. For information about selection rules for the gallery thumbnail on sites with free Gallery, see "Using Gallery Features on Sites with Free Gallery" in the eBay Web Services Guide.</span> <br><br> To specify multiple pictures, send each URL in a separate, adjacent PictureURL element. In most cases, the picture at the first URL is also used for the picture at the top of a listing. <br><br> <span class="tablenote"><b>Note:</b> If a URI contains spaces, replace them with <code>%20</code>. For example, <code>http://example.com/my image.jpg</code> must be submitted as <code>http://example.com/my%20image.jpg</code> to replace the space in the image file name. </span> <br><br> On the main eBay site, a listing can have up to 12 EPS-hosted pictures, or one self-hosted picture. You cannot mix self-hosted and EPS-hosted pictures in one listing. <br><br> On the US eBay Motors site (for all vehicle listings), and on the eBay Canada site for motors, the picture pack of a listing can contain up to 24 pictures. <br><br> If you embed pictures in the description (with IMG tags) instead of using PictureURL, but you want a camera icon to appear in the search and listing pages, specify the following "clear picture" URL in PictureURL: http://pics.ebay.com/aw/pics/dot_clear.gif. <br><br> <span class="tablenote"><b>Note:</b> On free-gallery sites, the camera icon doesn't display as a gallery thumbnail (or on a listing page) when the first PictureURL field in the request is set to the "clear picture" URL; instead, eBay tries to use the picture referenced by GalleryURL as the gallery thumbnail. If GalleryURL has not been specified, a blank (camera-less) gallery thumbnail displays in the search results and at the top of the listing page. If you set the first PictureURL to the "clear picture" URL, you can specify Item.ProductListingDetails.UseStockPhotoURLAsGallery or Item.ProductListingDetails.UseStockPhotoURL to true, and eBay will use a stock photo, if available, for the gallery thumbnail and for the picture at the top of a listing. <br><br> Note that a gallery picture isn't generated if UseStockPhotoURLAsGallery and IncludeStockPhotoURL are set to false (or not set) and no alternative picture is in PictureURL. A Gallery fee applies only if you have specified GalleryType as either Plus or Featured (see Item.PictureDetails.GalleryType above for information). See "Using Gallery Features on Sites with Free Gallery" in the eBay Web Services Guide for information on eBay's selection rules for Gallery pictures on sites with free Gallery. </span> <br><br> <b>For VerifyAddItem only:</b> For VerifyAddItem, you can use the following fake eBay Picture Services URL (http://i2.ebayimg.com/abc/M28/dummy.jpg) to verify that your application is obtaining the correct fees for the quantity of pictures you pass in. <br><br> <b>For ReviseItem and RelistItem only:</b> To remove a picture when revising or relisting an item, specify PictureDetails with all the pictures that you want the listing to include. That is, you need to completely replace the original set of URLs with the revised set. To remove all PictureURL fields from a listing, specify item.PictureDetails.PictureURL in DeletedField. However, please note that if the listing also includes a gallery picture that is based on the first picture in the listing, you may need to supply an alternate picture to use as the gallery picture if you delete all PictureURL fields. <br><br> There are a number of categories on some eBay sites that always add the Gallery feature (for free) when you include a picture in the listing and you don't specify the Gallery feature yourself. See GalleryType for details about fees that could be charged if you change the category in these cases (or when revising a listing from a site with free gallery to one where free gallery is not yet available.)
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The PictureSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The service hosting the pictures in PictureURL, if any. This information is primarily useful for Picture Manager subscribers, who pay a flat subscription fee instead of individual picture fees per listing. Only returned when PictureURL is returned.
	 * @var EbayTradingTypePictureSourceCodeType
	 */
	public $PictureSource;
	/**
	 * The GalleryDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the number of days that "Featured" Gallery type applies to a listing. Applicable values include 'Days_7' and 'LifeTime'. <br><br> When a seller chooses "Featured" as the Gallery type, the listing is highlighted and is included at the top of search results. This functionality is applicable only for Gallery Featured items and returns an error for any other Gallery type. Additionally, an error is returned if the seller attempts to downgrade from Lifetime to limited duration, but the seller can upgrade from limited duration to Lifetime duration. This field is not applicable to auction listings.
	 * @var token
	 */
	public $GalleryDuration;
	/**
	 * The GalleryStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This indicates if the gallery photo upload failed, and gives a reason for the failure, such as 'InvalidUrl' or 'ServerDown'. It is not returned if the gallery photo is uploaded correctly.
	 * @var EbayTradingTypeGalleryStatusCodeType
	 */
	public $GalleryStatus;
	/**
	 * The GalleryErrorInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This indicates the exact error reason why gallery generation failed, such as, URL for the image is not valid. This field is returned when GalleryStatus field is returned, and does not appear when the gallery generation is successful.
	 * @var string
	 */
	public $GalleryErrorInfo;
	/**
	 * The ExternalPictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the original URL of a self-hosted picture, associated with the item when the item was listed. On sites with free gallery, if a listing uses a self-hosted picture (except in the case of a multi-variation listing), the picture will be copied to eBay Picture Services (EPS). This copy will be used as the picture at the top of the listing. If the copy fails, the original location is used. Thus, even in the case of a self-hosted picture, the value returned by GetItem in PictureDetails.PictureURL is an EPS URL. The original URL is returned in PictureDetails.ExternalPictureURL. When you call ReviseItem or RelistItem, you can provide a new self-hosted URL in the PictureURL field. (Do not use the ExternalPictureURL input field to provide a new self-hosted URL, unless you omit PictureDetails.PictureURL.) <br><br> <span class="tablenote"><b>Note:</b> If a URI contains spaces, replace them with <code>%20</code>. For example, <code>http://example.com/my image.jpg</code> must be submitted as <code>http://example.com/my%20image.jpg</code> to replace the space in the image file name. </span>
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
	 * @param EbayTradingTypeGalleryTypeCodeType GalleryType
	 * @param anyURI GalleryURL
	 * @param EbayTradingTypePhotoDisplayCodeType PhotoDisplay
	 * @param anyURI PictureURL
	 * @param EbayTradingTypePictureSourceCodeType PictureSource
	 * @param token GalleryDuration
	 * @param EbayTradingTypeGalleryStatusCodeType GalleryStatus
	 * @param string GalleryErrorInfo
	 * @param anyURI ExternalPictureURL
	 * @param DOMDocument any
	 * @return EbayTradingTypePictureDetailsType
	 */
	public function __construct($_GalleryType = null,$_GalleryURL = null,$_PhotoDisplay = null,$_PictureURL = null,$_PictureSource = null,$_GalleryDuration = null,$_GalleryStatus = null,$_GalleryErrorInfo = null,$_ExternalPictureURL = null,$_any = null)
	{
		parent::__construct(array('GalleryType'=>$_GalleryType,'GalleryURL'=>$_GalleryURL,'PhotoDisplay'=>$_PhotoDisplay,'PictureURL'=>$_PictureURL,'PictureSource'=>$_PictureSource,'GalleryDuration'=>$_GalleryDuration,'GalleryStatus'=>$_GalleryStatus,'GalleryErrorInfo'=>$_GalleryErrorInfo,'ExternalPictureURL'=>$_ExternalPictureURL,'any'=>$_any));
	}
	/**
	 * Set GalleryType
	 * @param GalleryTypeCodeType GalleryType
	 * @return GalleryTypeCodeType
	 */
	public function setGalleryType($_GalleryType)
	{
		return ($this->GalleryType = EbayTradingTypeGalleryTypeCodeType::valueIsValid($_GalleryType)?$_GalleryType:null);
	}
	/**
	 * Get GalleryType
	 * @return EbayTradingTypeGalleryTypeCodeType
	 */
	public function getGalleryType()
	{
		return $this->GalleryType;
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
	 * Set PhotoDisplay
	 * @param PhotoDisplayCodeType PhotoDisplay
	 * @return PhotoDisplayCodeType
	 */
	public function setPhotoDisplay($_PhotoDisplay)
	{
		return ($this->PhotoDisplay = EbayTradingTypePhotoDisplayCodeType::valueIsValid($_PhotoDisplay)?$_PhotoDisplay:null);
	}
	/**
	 * Get PhotoDisplay
	 * @return EbayTradingTypePhotoDisplayCodeType
	 */
	public function getPhotoDisplay()
	{
		return $this->PhotoDisplay;
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
	 * Set PictureSource
	 * @param PictureSourceCodeType PictureSource
	 * @return PictureSourceCodeType
	 */
	public function setPictureSource($_PictureSource)
	{
		return ($this->PictureSource = EbayTradingTypePictureSourceCodeType::valueIsValid($_PictureSource)?$_PictureSource:null);
	}
	/**
	 * Get PictureSource
	 * @return EbayTradingTypePictureSourceCodeType
	 */
	public function getPictureSource()
	{
		return $this->PictureSource;
	}
	/**
	 * Set GalleryDuration
	 * @param token GalleryDuration
	 * @return token
	 */
	public function setGalleryDuration($_GalleryDuration)
	{
		return ($this->GalleryDuration = $_GalleryDuration);
	}
	/**
	 * Get GalleryDuration
	 * @return token
	 */
	public function getGalleryDuration()
	{
		return $this->GalleryDuration;
	}
	/**
	 * Set GalleryStatus
	 * @param GalleryStatusCodeType GalleryStatus
	 * @return GalleryStatusCodeType
	 */
	public function setGalleryStatus($_GalleryStatus)
	{
		return ($this->GalleryStatus = EbayTradingTypeGalleryStatusCodeType::valueIsValid($_GalleryStatus)?$_GalleryStatus:null);
	}
	/**
	 * Get GalleryStatus
	 * @return EbayTradingTypeGalleryStatusCodeType
	 */
	public function getGalleryStatus()
	{
		return $this->GalleryStatus;
	}
	/**
	 * Set GalleryErrorInfo
	 * @param string GalleryErrorInfo
	 * @return string
	 */
	public function setGalleryErrorInfo($_GalleryErrorInfo)
	{
		return ($this->GalleryErrorInfo = $_GalleryErrorInfo);
	}
	/**
	 * Get GalleryErrorInfo
	 * @return string
	 */
	public function getGalleryErrorInfo()
	{
		return $this->GalleryErrorInfo;
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