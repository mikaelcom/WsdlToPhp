<?php
/**
 * Class file for AmazonECommerceServiceTypeItemAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItemAttributes
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItemAttributes extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Actor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Actor;
	/**
	 * The Artist
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Artist;
	/**
	 * The AspectRatio
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AspectRatio;
	/**
	 * The AudienceRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AudienceRating;
	/**
	 * The AudioFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $AudioFormat;
	/**
	 * The Author
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Author;
	/**
	 * The Binding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Binding;
	/**
	 * The Brand
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Brand;
	/**
	 * The CatalogNumberList
	 * @var AmazonECommerceServiceTypeCatalogNumberList
	 */
	public $CatalogNumberList;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Category;
	/**
	 * The CEROAgeRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CEROAgeRating;
	/**
	 * The ClothingSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ClothingSize;
	/**
	 * The Color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Color;
	/**
	 * The Creator
	 * @var AmazonECommerceServiceTypeCreator
	 */
	public $Creator;
	/**
	 * The Department
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Department;
	/**
	 * The Director
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Director;
	/**
	 * The EAN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EAN;
	/**
	 * The EANList
	 * @var AmazonECommerceServiceTypeEANList
	 */
	public $EANList;
	/**
	 * The Edition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Edition;
	/**
	 * The EISBN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $EISBN;
	/**
	 * The EpisodeSequence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EpisodeSequence;
	/**
	 * The ESRBAgeRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ESRBAgeRating;
	/**
	 * The Feature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Feature;
	/**
	 * The Format
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Format;
	/**
	 * The Genre
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Genre;
	/**
	 * The HardwarePlatform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $HardwarePlatform;
	/**
	 * The HazardousMaterialType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $HazardousMaterialType;
	/**
	 * The IsAdultProduct
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsAdultProduct;
	/**
	 * The IsAutographed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsAutographed;
	/**
	 * The ISBN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ISBN;
	/**
	 * The IsEligibleForTradeIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsEligibleForTradeIn;
	/**
	 * The IsMemorabilia
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsMemorabilia;
	/**
	 * The IssuesPerYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IssuesPerYear;
	/**
	 * The ItemDimensions
	 * @var AmazonECommerceServiceTypeItemDimensions
	 */
	public $ItemDimensions;
	/**
	 * The ItemPartNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ItemPartNumber;
	/**
	 * The Label
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Label;
	/**
	 * The Languages
	 * @var AmazonECommerceServiceTypeLanguages
	 */
	public $Languages;
	/**
	 * The LegalDisclaimer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $LegalDisclaimer;
	/**
	 * The ListPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $ListPrice;
	/**
	 * The MagazineType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MagazineType;
	/**
	 * The Manufacturer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Manufacturer;
	/**
	 * The ManufacturerMaximumAge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $ManufacturerMaximumAge;
	/**
	 * The ManufacturerMinimumAge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $ManufacturerMinimumAge;
	/**
	 * The ManufacturerPartsWarrantyDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ManufacturerPartsWarrantyDescription;
	/**
	 * The MediaType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MediaType;
	/**
	 * The Model
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Model;
	/**
	 * The ModelYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $ModelYear;
	/**
	 * The MPN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MPN;
	/**
	 * The NumberOfDiscs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $NumberOfDiscs;
	/**
	 * The NumberOfIssues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $NumberOfIssues;
	/**
	 * The NumberOfItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $NumberOfItems;
	/**
	 * The NumberOfPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $NumberOfPages;
	/**
	 * The NumberOfTracks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $NumberOfTracks;
	/**
	 * The OperatingSystem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OperatingSystem;
	/**
	 * The PackageDimensions
	 * @var AmazonECommerceServiceTypePackageDimensions
	 */
	public $PackageDimensions;
	/**
	 * The PackageQuantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $PackageQuantity;
	/**
	 * The PartNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PartNumber;
	/**
	 * The PictureFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $PictureFormat;
	/**
	 * The Platform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $Platform;
	/**
	 * The ProductGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ProductGroup;
	/**
	 * The ProductTypeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ProductTypeName;
	/**
	 * The ProductTypeSubcategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ProductTypeSubcategory;
	/**
	 * The PublicationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PublicationDate;
	/**
	 * The Publisher
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Publisher;
	/**
	 * The RegionCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RegionCode;
	/**
	 * The ReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ReleaseDate;
	/**
	 * The RunningTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public $RunningTime;
	/**
	 * The SeikodoProductCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SeikodoProductCode;
	/**
	 * The Size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Size;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SKU;
	/**
	 * The Studio
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Studio;
	/**
	 * The SubscriptionLength
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeNonNegativeIntegerWithUnits
	 */
	public $SubscriptionLength;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The TrackSequence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TrackSequence;
	/**
	 * The TradeInValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $TradeInValue;
	/**
	 * The UPC
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $UPC;
	/**
	 * The UPCList
	 * @var AmazonECommerceServiceTypeUPCList
	 */
	public $UPCList;
	/**
	 * The Warranty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Warranty;
	/**
	 * The WEEETaxValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $WEEETaxValue;
	/**
	 * Constructor
	 * @param string Actor
	 * @param string Artist
	 * @param string AspectRatio
	 * @param string AudienceRating
	 * @param string AudioFormat
	 * @param string Author
	 * @param string Binding
	 * @param string Brand
	 * @param AmazonECommerceServiceTypeCatalogNumberList CatalogNumberList
	 * @param string Category
	 * @param string CEROAgeRating
	 * @param string ClothingSize
	 * @param string Color
	 * @param AmazonECommerceServiceTypeCreator Creator
	 * @param string Department
	 * @param string Director
	 * @param string EAN
	 * @param AmazonECommerceServiceTypeEANList EANList
	 * @param string Edition
	 * @param string EISBN
	 * @param string EpisodeSequence
	 * @param string ESRBAgeRating
	 * @param string Feature
	 * @param string Format
	 * @param string Genre
	 * @param string HardwarePlatform
	 * @param string HazardousMaterialType
	 * @param boolean IsAdultProduct
	 * @param boolean IsAutographed
	 * @param string ISBN
	 * @param boolean IsEligibleForTradeIn
	 * @param boolean IsMemorabilia
	 * @param string IssuesPerYear
	 * @param AmazonECommerceServiceTypeItemDimensions ItemDimensions
	 * @param string ItemPartNumber
	 * @param string Label
	 * @param AmazonECommerceServiceTypeLanguages Languages
	 * @param string LegalDisclaimer
	 * @param AmazonECommerceServiceTypePrice ListPrice
	 * @param string MagazineType
	 * @param string Manufacturer
	 * @param AmazonECommerceServiceTypeDecimalWithUnits ManufacturerMaximumAge
	 * @param AmazonECommerceServiceTypeDecimalWithUnits ManufacturerMinimumAge
	 * @param string ManufacturerPartsWarrantyDescription
	 * @param string MediaType
	 * @param string Model
	 * @param nonNegativeInteger ModelYear
	 * @param string MPN
	 * @param nonNegativeInteger NumberOfDiscs
	 * @param nonNegativeInteger NumberOfIssues
	 * @param nonNegativeInteger NumberOfItems
	 * @param nonNegativeInteger NumberOfPages
	 * @param nonNegativeInteger NumberOfTracks
	 * @param string OperatingSystem
	 * @param AmazonECommerceServiceTypePackageDimensions PackageDimensions
	 * @param nonNegativeInteger PackageQuantity
	 * @param string PartNumber
	 * @param string PictureFormat
	 * @param string Platform
	 * @param string ProductGroup
	 * @param string ProductTypeName
	 * @param string ProductTypeSubcategory
	 * @param string PublicationDate
	 * @param string Publisher
	 * @param string RegionCode
	 * @param string ReleaseDate
	 * @param AmazonECommerceServiceTypeDecimalWithUnits RunningTime
	 * @param string SeikodoProductCode
	 * @param string Size
	 * @param string SKU
	 * @param string Studio
	 * @param AmazonECommerceServiceTypeNonNegativeIntegerWithUnits SubscriptionLength
	 * @param string Title
	 * @param string TrackSequence
	 * @param AmazonECommerceServiceTypePrice TradeInValue
	 * @param string UPC
	 * @param AmazonECommerceServiceTypeUPCList UPCList
	 * @param string Warranty
	 * @param AmazonECommerceServiceTypePrice WEEETaxValue
	 * @return AmazonECommerceServiceTypeItemAttributes
	 */
	public function __construct($_Actor = null,$_Artist = null,$_AspectRatio = null,$_AudienceRating = null,$_AudioFormat = null,$_Author = null,$_Binding = null,$_Brand = null,$_CatalogNumberList = null,$_Category = null,$_CEROAgeRating = null,$_ClothingSize = null,$_Color = null,$_Creator = null,$_Department = null,$_Director = null,$_EAN = null,$_EANList = null,$_Edition = null,$_EISBN = null,$_EpisodeSequence = null,$_ESRBAgeRating = null,$_Feature = null,$_Format = null,$_Genre = null,$_HardwarePlatform = null,$_HazardousMaterialType = null,$_IsAdultProduct = null,$_IsAutographed = null,$_ISBN = null,$_IsEligibleForTradeIn = null,$_IsMemorabilia = null,$_IssuesPerYear = null,$_ItemDimensions = null,$_ItemPartNumber = null,$_Label = null,$_Languages = null,$_LegalDisclaimer = null,$_ListPrice = null,$_MagazineType = null,$_Manufacturer = null,$_ManufacturerMaximumAge = null,$_ManufacturerMinimumAge = null,$_ManufacturerPartsWarrantyDescription = null,$_MediaType = null,$_Model = null,$_ModelYear = null,$_MPN = null,$_NumberOfDiscs = null,$_NumberOfIssues = null,$_NumberOfItems = null,$_NumberOfPages = null,$_NumberOfTracks = null,$_OperatingSystem = null,$_PackageDimensions = null,$_PackageQuantity = null,$_PartNumber = null,$_PictureFormat = null,$_Platform = null,$_ProductGroup = null,$_ProductTypeName = null,$_ProductTypeSubcategory = null,$_PublicationDate = null,$_Publisher = null,$_RegionCode = null,$_ReleaseDate = null,$_RunningTime = null,$_SeikodoProductCode = null,$_Size = null,$_SKU = null,$_Studio = null,$_SubscriptionLength = null,$_Title = null,$_TrackSequence = null,$_TradeInValue = null,$_UPC = null,$_UPCList = null,$_Warranty = null,$_WEEETaxValue = null)
	{
		parent::__construct(array('Actor'=>$_Actor,'Artist'=>$_Artist,'AspectRatio'=>$_AspectRatio,'AudienceRating'=>$_AudienceRating,'AudioFormat'=>$_AudioFormat,'Author'=>$_Author,'Binding'=>$_Binding,'Brand'=>$_Brand,'CatalogNumberList'=>$_CatalogNumberList,'Category'=>$_Category,'CEROAgeRating'=>$_CEROAgeRating,'ClothingSize'=>$_ClothingSize,'Color'=>$_Color,'Creator'=>$_Creator,'Department'=>$_Department,'Director'=>$_Director,'EAN'=>$_EAN,'EANList'=>$_EANList,'Edition'=>$_Edition,'EISBN'=>$_EISBN,'EpisodeSequence'=>$_EpisodeSequence,'ESRBAgeRating'=>$_ESRBAgeRating,'Feature'=>$_Feature,'Format'=>$_Format,'Genre'=>$_Genre,'HardwarePlatform'=>$_HardwarePlatform,'HazardousMaterialType'=>$_HazardousMaterialType,'IsAdultProduct'=>$_IsAdultProduct,'IsAutographed'=>$_IsAutographed,'ISBN'=>$_ISBN,'IsEligibleForTradeIn'=>$_IsEligibleForTradeIn,'IsMemorabilia'=>$_IsMemorabilia,'IssuesPerYear'=>$_IssuesPerYear,'ItemDimensions'=>$_ItemDimensions,'ItemPartNumber'=>$_ItemPartNumber,'Label'=>$_Label,'Languages'=>$_Languages,'LegalDisclaimer'=>$_LegalDisclaimer,'ListPrice'=>$_ListPrice,'MagazineType'=>$_MagazineType,'Manufacturer'=>$_Manufacturer,'ManufacturerMaximumAge'=>$_ManufacturerMaximumAge,'ManufacturerMinimumAge'=>$_ManufacturerMinimumAge,'ManufacturerPartsWarrantyDescription'=>$_ManufacturerPartsWarrantyDescription,'MediaType'=>$_MediaType,'Model'=>$_Model,'ModelYear'=>$_ModelYear,'MPN'=>$_MPN,'NumberOfDiscs'=>$_NumberOfDiscs,'NumberOfIssues'=>$_NumberOfIssues,'NumberOfItems'=>$_NumberOfItems,'NumberOfPages'=>$_NumberOfPages,'NumberOfTracks'=>$_NumberOfTracks,'OperatingSystem'=>$_OperatingSystem,'PackageDimensions'=>$_PackageDimensions,'PackageQuantity'=>$_PackageQuantity,'PartNumber'=>$_PartNumber,'PictureFormat'=>$_PictureFormat,'Platform'=>$_Platform,'ProductGroup'=>$_ProductGroup,'ProductTypeName'=>$_ProductTypeName,'ProductTypeSubcategory'=>$_ProductTypeSubcategory,'PublicationDate'=>$_PublicationDate,'Publisher'=>$_Publisher,'RegionCode'=>$_RegionCode,'ReleaseDate'=>$_ReleaseDate,'RunningTime'=>$_RunningTime,'SeikodoProductCode'=>$_SeikodoProductCode,'Size'=>$_Size,'SKU'=>$_SKU,'Studio'=>$_Studio,'SubscriptionLength'=>$_SubscriptionLength,'Title'=>$_Title,'TrackSequence'=>$_TrackSequence,'TradeInValue'=>$_TradeInValue,'UPC'=>$_UPC,'UPCList'=>$_UPCList,'Warranty'=>$_Warranty,'WEEETaxValue'=>$_WEEETaxValue));
	}
	/**
	 * Set Actor
	 * @param string Actor
	 * @return string
	 */
	public function setActor($_Actor)
	{
		return ($this->Actor = $_Actor);
	}
	/**
	 * Get Actor
	 * @return string
	 */
	public function getActor()
	{
		return $this->Actor;
	}
	/**
	 * Set Artist
	 * @param string Artist
	 * @return string
	 */
	public function setArtist($_Artist)
	{
		return ($this->Artist = $_Artist);
	}
	/**
	 * Get Artist
	 * @return string
	 */
	public function getArtist()
	{
		return $this->Artist;
	}
	/**
	 * Set AspectRatio
	 * @param string AspectRatio
	 * @return string
	 */
	public function setAspectRatio($_AspectRatio)
	{
		return ($this->AspectRatio = $_AspectRatio);
	}
	/**
	 * Get AspectRatio
	 * @return string
	 */
	public function getAspectRatio()
	{
		return $this->AspectRatio;
	}
	/**
	 * Set AudienceRating
	 * @param string AudienceRating
	 * @return string
	 */
	public function setAudienceRating($_AudienceRating)
	{
		return ($this->AudienceRating = $_AudienceRating);
	}
	/**
	 * Get AudienceRating
	 * @return string
	 */
	public function getAudienceRating()
	{
		return $this->AudienceRating;
	}
	/**
	 * Set AudioFormat
	 * @param string AudioFormat
	 * @return string
	 */
	public function setAudioFormat($_AudioFormat)
	{
		return ($this->AudioFormat = $_AudioFormat);
	}
	/**
	 * Get AudioFormat
	 * @return string
	 */
	public function getAudioFormat()
	{
		return $this->AudioFormat;
	}
	/**
	 * Set Author
	 * @param string Author
	 * @return string
	 */
	public function setAuthor($_Author)
	{
		return ($this->Author = $_Author);
	}
	/**
	 * Get Author
	 * @return string
	 */
	public function getAuthor()
	{
		return $this->Author;
	}
	/**
	 * Set Binding
	 * @param string Binding
	 * @return string
	 */
	public function setBinding($_Binding)
	{
		return ($this->Binding = $_Binding);
	}
	/**
	 * Get Binding
	 * @return string
	 */
	public function getBinding()
	{
		return $this->Binding;
	}
	/**
	 * Set Brand
	 * @param string Brand
	 * @return string
	 */
	public function setBrand($_Brand)
	{
		return ($this->Brand = $_Brand);
	}
	/**
	 * Get Brand
	 * @return string
	 */
	public function getBrand()
	{
		return $this->Brand;
	}
	/**
	 * Set CatalogNumberList
	 * @param CatalogNumberList CatalogNumberList
	 * @return CatalogNumberList
	 */
	public function setCatalogNumberList($_CatalogNumberList)
	{
		return ($this->CatalogNumberList = $_CatalogNumberList);
	}
	/**
	 * Get CatalogNumberList
	 * @return AmazonECommerceServiceTypeCatalogNumberList
	 */
	public function getCatalogNumberList()
	{
		return $this->CatalogNumberList;
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
	 * Set CEROAgeRating
	 * @param string CEROAgeRating
	 * @return string
	 */
	public function setCEROAgeRating($_CEROAgeRating)
	{
		return ($this->CEROAgeRating = $_CEROAgeRating);
	}
	/**
	 * Get CEROAgeRating
	 * @return string
	 */
	public function getCEROAgeRating()
	{
		return $this->CEROAgeRating;
	}
	/**
	 * Set ClothingSize
	 * @param string ClothingSize
	 * @return string
	 */
	public function setClothingSize($_ClothingSize)
	{
		return ($this->ClothingSize = $_ClothingSize);
	}
	/**
	 * Get ClothingSize
	 * @return string
	 */
	public function getClothingSize()
	{
		return $this->ClothingSize;
	}
	/**
	 * Set Color
	 * @param string Color
	 * @return string
	 */
	public function setColor($_Color)
	{
		return ($this->Color = $_Color);
	}
	/**
	 * Get Color
	 * @return string
	 */
	public function getColor()
	{
		return $this->Color;
	}
	/**
	 * Set Creator
	 * @param Creator Creator
	 * @return Creator
	 */
	public function setCreator($_Creator)
	{
		return ($this->Creator = $_Creator);
	}
	/**
	 * Get Creator
	 * @return AmazonECommerceServiceTypeCreator
	 */
	public function getCreator()
	{
		return $this->Creator;
	}
	/**
	 * Set Department
	 * @param string Department
	 * @return string
	 */
	public function setDepartment($_Department)
	{
		return ($this->Department = $_Department);
	}
	/**
	 * Get Department
	 * @return string
	 */
	public function getDepartment()
	{
		return $this->Department;
	}
	/**
	 * Set Director
	 * @param string Director
	 * @return string
	 */
	public function setDirector($_Director)
	{
		return ($this->Director = $_Director);
	}
	/**
	 * Get Director
	 * @return string
	 */
	public function getDirector()
	{
		return $this->Director;
	}
	/**
	 * Set EAN
	 * @param string EAN
	 * @return string
	 */
	public function setEAN($_EAN)
	{
		return ($this->EAN = $_EAN);
	}
	/**
	 * Get EAN
	 * @return string
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set EANList
	 * @param EANList EANList
	 * @return EANList
	 */
	public function setEANList($_EANList)
	{
		return ($this->EANList = $_EANList);
	}
	/**
	 * Get EANList
	 * @return AmazonECommerceServiceTypeEANList
	 */
	public function getEANList()
	{
		return $this->EANList;
	}
	/**
	 * Set Edition
	 * @param string Edition
	 * @return string
	 */
	public function setEdition($_Edition)
	{
		return ($this->Edition = $_Edition);
	}
	/**
	 * Get Edition
	 * @return string
	 */
	public function getEdition()
	{
		return $this->Edition;
	}
	/**
	 * Set EISBN
	 * @param string EISBN
	 * @return string
	 */
	public function setEISBN($_EISBN)
	{
		return ($this->EISBN = $_EISBN);
	}
	/**
	 * Get EISBN
	 * @return string
	 */
	public function getEISBN()
	{
		return $this->EISBN;
	}
	/**
	 * Set EpisodeSequence
	 * @param string EpisodeSequence
	 * @return string
	 */
	public function setEpisodeSequence($_EpisodeSequence)
	{
		return ($this->EpisodeSequence = $_EpisodeSequence);
	}
	/**
	 * Get EpisodeSequence
	 * @return string
	 */
	public function getEpisodeSequence()
	{
		return $this->EpisodeSequence;
	}
	/**
	 * Set ESRBAgeRating
	 * @param string ESRBAgeRating
	 * @return string
	 */
	public function setESRBAgeRating($_ESRBAgeRating)
	{
		return ($this->ESRBAgeRating = $_ESRBAgeRating);
	}
	/**
	 * Get ESRBAgeRating
	 * @return string
	 */
	public function getESRBAgeRating()
	{
		return $this->ESRBAgeRating;
	}
	/**
	 * Set Feature
	 * @param string Feature
	 * @return string
	 */
	public function setFeature($_Feature)
	{
		return ($this->Feature = $_Feature);
	}
	/**
	 * Get Feature
	 * @return string
	 */
	public function getFeature()
	{
		return $this->Feature;
	}
	/**
	 * Set Format
	 * @param string Format
	 * @return string
	 */
	public function setFormat($_Format)
	{
		return ($this->Format = $_Format);
	}
	/**
	 * Get Format
	 * @return string
	 */
	public function getFormat()
	{
		return $this->Format;
	}
	/**
	 * Set Genre
	 * @param string Genre
	 * @return string
	 */
	public function setGenre($_Genre)
	{
		return ($this->Genre = $_Genre);
	}
	/**
	 * Get Genre
	 * @return string
	 */
	public function getGenre()
	{
		return $this->Genre;
	}
	/**
	 * Set HardwarePlatform
	 * @param string HardwarePlatform
	 * @return string
	 */
	public function setHardwarePlatform($_HardwarePlatform)
	{
		return ($this->HardwarePlatform = $_HardwarePlatform);
	}
	/**
	 * Get HardwarePlatform
	 * @return string
	 */
	public function getHardwarePlatform()
	{
		return $this->HardwarePlatform;
	}
	/**
	 * Set HazardousMaterialType
	 * @param string HazardousMaterialType
	 * @return string
	 */
	public function setHazardousMaterialType($_HazardousMaterialType)
	{
		return ($this->HazardousMaterialType = $_HazardousMaterialType);
	}
	/**
	 * Get HazardousMaterialType
	 * @return string
	 */
	public function getHazardousMaterialType()
	{
		return $this->HazardousMaterialType;
	}
	/**
	 * Set IsAdultProduct
	 * @param boolean IsAdultProduct
	 * @return boolean
	 */
	public function setIsAdultProduct($_IsAdultProduct)
	{
		return ($this->IsAdultProduct = $_IsAdultProduct);
	}
	/**
	 * Get IsAdultProduct
	 * @return boolean
	 */
	public function getIsAdultProduct()
	{
		return $this->IsAdultProduct;
	}
	/**
	 * Set IsAutographed
	 * @param boolean IsAutographed
	 * @return boolean
	 */
	public function setIsAutographed($_IsAutographed)
	{
		return ($this->IsAutographed = $_IsAutographed);
	}
	/**
	 * Get IsAutographed
	 * @return boolean
	 */
	public function getIsAutographed()
	{
		return $this->IsAutographed;
	}
	/**
	 * Set ISBN
	 * @param string ISBN
	 * @return string
	 */
	public function setISBN($_ISBN)
	{
		return ($this->ISBN = $_ISBN);
	}
	/**
	 * Get ISBN
	 * @return string
	 */
	public function getISBN()
	{
		return $this->ISBN;
	}
	/**
	 * Set IsEligibleForTradeIn
	 * @param boolean IsEligibleForTradeIn
	 * @return boolean
	 */
	public function setIsEligibleForTradeIn($_IsEligibleForTradeIn)
	{
		return ($this->IsEligibleForTradeIn = $_IsEligibleForTradeIn);
	}
	/**
	 * Get IsEligibleForTradeIn
	 * @return boolean
	 */
	public function getIsEligibleForTradeIn()
	{
		return $this->IsEligibleForTradeIn;
	}
	/**
	 * Set IsMemorabilia
	 * @param boolean IsMemorabilia
	 * @return boolean
	 */
	public function setIsMemorabilia($_IsMemorabilia)
	{
		return ($this->IsMemorabilia = $_IsMemorabilia);
	}
	/**
	 * Get IsMemorabilia
	 * @return boolean
	 */
	public function getIsMemorabilia()
	{
		return $this->IsMemorabilia;
	}
	/**
	 * Set IssuesPerYear
	 * @param string IssuesPerYear
	 * @return string
	 */
	public function setIssuesPerYear($_IssuesPerYear)
	{
		return ($this->IssuesPerYear = $_IssuesPerYear);
	}
	/**
	 * Get IssuesPerYear
	 * @return string
	 */
	public function getIssuesPerYear()
	{
		return $this->IssuesPerYear;
	}
	/**
	 * Set ItemDimensions
	 * @param ItemDimensions ItemDimensions
	 * @return ItemDimensions
	 */
	public function setItemDimensions($_ItemDimensions)
	{
		return ($this->ItemDimensions = $_ItemDimensions);
	}
	/**
	 * Get ItemDimensions
	 * @return AmazonECommerceServiceTypeItemDimensions
	 */
	public function getItemDimensions()
	{
		return $this->ItemDimensions;
	}
	/**
	 * Set ItemPartNumber
	 * @param string ItemPartNumber
	 * @return string
	 */
	public function setItemPartNumber($_ItemPartNumber)
	{
		return ($this->ItemPartNumber = $_ItemPartNumber);
	}
	/**
	 * Get ItemPartNumber
	 * @return string
	 */
	public function getItemPartNumber()
	{
		return $this->ItemPartNumber;
	}
	/**
	 * Set Label
	 * @param string Label
	 * @return string
	 */
	public function setLabel($_Label)
	{
		return ($this->Label = $_Label);
	}
	/**
	 * Get Label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->Label;
	}
	/**
	 * Set Languages
	 * @param Languages Languages
	 * @return Languages
	 */
	public function setLanguages($_Languages)
	{
		return ($this->Languages = $_Languages);
	}
	/**
	 * Get Languages
	 * @return AmazonECommerceServiceTypeLanguages
	 */
	public function getLanguages()
	{
		return $this->Languages;
	}
	/**
	 * Set LegalDisclaimer
	 * @param string LegalDisclaimer
	 * @return string
	 */
	public function setLegalDisclaimer($_LegalDisclaimer)
	{
		return ($this->LegalDisclaimer = $_LegalDisclaimer);
	}
	/**
	 * Get LegalDisclaimer
	 * @return string
	 */
	public function getLegalDisclaimer()
	{
		return $this->LegalDisclaimer;
	}
	/**
	 * Set ListPrice
	 * @param Price ListPrice
	 * @return Price
	 */
	public function setListPrice($_ListPrice)
	{
		return ($this->ListPrice = $_ListPrice);
	}
	/**
	 * Get ListPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getListPrice()
	{
		return $this->ListPrice;
	}
	/**
	 * Set MagazineType
	 * @param string MagazineType
	 * @return string
	 */
	public function setMagazineType($_MagazineType)
	{
		return ($this->MagazineType = $_MagazineType);
	}
	/**
	 * Get MagazineType
	 * @return string
	 */
	public function getMagazineType()
	{
		return $this->MagazineType;
	}
	/**
	 * Set Manufacturer
	 * @param string Manufacturer
	 * @return string
	 */
	public function setManufacturer($_Manufacturer)
	{
		return ($this->Manufacturer = $_Manufacturer);
	}
	/**
	 * Get Manufacturer
	 * @return string
	 */
	public function getManufacturer()
	{
		return $this->Manufacturer;
	}
	/**
	 * Set ManufacturerMaximumAge
	 * @param DecimalWithUnits ManufacturerMaximumAge
	 * @return DecimalWithUnits
	 */
	public function setManufacturerMaximumAge($_ManufacturerMaximumAge)
	{
		return ($this->ManufacturerMaximumAge = $_ManufacturerMaximumAge);
	}
	/**
	 * Get ManufacturerMaximumAge
	 * @return AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public function getManufacturerMaximumAge()
	{
		return $this->ManufacturerMaximumAge;
	}
	/**
	 * Set ManufacturerMinimumAge
	 * @param DecimalWithUnits ManufacturerMinimumAge
	 * @return DecimalWithUnits
	 */
	public function setManufacturerMinimumAge($_ManufacturerMinimumAge)
	{
		return ($this->ManufacturerMinimumAge = $_ManufacturerMinimumAge);
	}
	/**
	 * Get ManufacturerMinimumAge
	 * @return AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public function getManufacturerMinimumAge()
	{
		return $this->ManufacturerMinimumAge;
	}
	/**
	 * Set ManufacturerPartsWarrantyDescription
	 * @param string ManufacturerPartsWarrantyDescription
	 * @return string
	 */
	public function setManufacturerPartsWarrantyDescription($_ManufacturerPartsWarrantyDescription)
	{
		return ($this->ManufacturerPartsWarrantyDescription = $_ManufacturerPartsWarrantyDescription);
	}
	/**
	 * Get ManufacturerPartsWarrantyDescription
	 * @return string
	 */
	public function getManufacturerPartsWarrantyDescription()
	{
		return $this->ManufacturerPartsWarrantyDescription;
	}
	/**
	 * Set MediaType
	 * @param string MediaType
	 * @return string
	 */
	public function setMediaType($_MediaType)
	{
		return ($this->MediaType = $_MediaType);
	}
	/**
	 * Get MediaType
	 * @return string
	 */
	public function getMediaType()
	{
		return $this->MediaType;
	}
	/**
	 * Set Model
	 * @param string Model
	 * @return string
	 */
	public function setModel($_Model)
	{
		return ($this->Model = $_Model);
	}
	/**
	 * Get Model
	 * @return string
	 */
	public function getModel()
	{
		return $this->Model;
	}
	/**
	 * Set ModelYear
	 * @param nonNegativeInteger ModelYear
	 * @return nonNegativeInteger
	 */
	public function setModelYear($_ModelYear)
	{
		return ($this->ModelYear = $_ModelYear);
	}
	/**
	 * Get ModelYear
	 * @return nonNegativeInteger
	 */
	public function getModelYear()
	{
		return $this->ModelYear;
	}
	/**
	 * Set MPN
	 * @param string MPN
	 * @return string
	 */
	public function setMPN($_MPN)
	{
		return ($this->MPN = $_MPN);
	}
	/**
	 * Get MPN
	 * @return string
	 */
	public function getMPN()
	{
		return $this->MPN;
	}
	/**
	 * Set NumberOfDiscs
	 * @param nonNegativeInteger NumberOfDiscs
	 * @return nonNegativeInteger
	 */
	public function setNumberOfDiscs($_NumberOfDiscs)
	{
		return ($this->NumberOfDiscs = $_NumberOfDiscs);
	}
	/**
	 * Get NumberOfDiscs
	 * @return nonNegativeInteger
	 */
	public function getNumberOfDiscs()
	{
		return $this->NumberOfDiscs;
	}
	/**
	 * Set NumberOfIssues
	 * @param nonNegativeInteger NumberOfIssues
	 * @return nonNegativeInteger
	 */
	public function setNumberOfIssues($_NumberOfIssues)
	{
		return ($this->NumberOfIssues = $_NumberOfIssues);
	}
	/**
	 * Get NumberOfIssues
	 * @return nonNegativeInteger
	 */
	public function getNumberOfIssues()
	{
		return $this->NumberOfIssues;
	}
	/**
	 * Set NumberOfItems
	 * @param nonNegativeInteger NumberOfItems
	 * @return nonNegativeInteger
	 */
	public function setNumberOfItems($_NumberOfItems)
	{
		return ($this->NumberOfItems = $_NumberOfItems);
	}
	/**
	 * Get NumberOfItems
	 * @return nonNegativeInteger
	 */
	public function getNumberOfItems()
	{
		return $this->NumberOfItems;
	}
	/**
	 * Set NumberOfPages
	 * @param nonNegativeInteger NumberOfPages
	 * @return nonNegativeInteger
	 */
	public function setNumberOfPages($_NumberOfPages)
	{
		return ($this->NumberOfPages = $_NumberOfPages);
	}
	/**
	 * Get NumberOfPages
	 * @return nonNegativeInteger
	 */
	public function getNumberOfPages()
	{
		return $this->NumberOfPages;
	}
	/**
	 * Set NumberOfTracks
	 * @param nonNegativeInteger NumberOfTracks
	 * @return nonNegativeInteger
	 */
	public function setNumberOfTracks($_NumberOfTracks)
	{
		return ($this->NumberOfTracks = $_NumberOfTracks);
	}
	/**
	 * Get NumberOfTracks
	 * @return nonNegativeInteger
	 */
	public function getNumberOfTracks()
	{
		return $this->NumberOfTracks;
	}
	/**
	 * Set OperatingSystem
	 * @param string OperatingSystem
	 * @return string
	 */
	public function setOperatingSystem($_OperatingSystem)
	{
		return ($this->OperatingSystem = $_OperatingSystem);
	}
	/**
	 * Get OperatingSystem
	 * @return string
	 */
	public function getOperatingSystem()
	{
		return $this->OperatingSystem;
	}
	/**
	 * Set PackageDimensions
	 * @param PackageDimensions PackageDimensions
	 * @return PackageDimensions
	 */
	public function setPackageDimensions($_PackageDimensions)
	{
		return ($this->PackageDimensions = $_PackageDimensions);
	}
	/**
	 * Get PackageDimensions
	 * @return AmazonECommerceServiceTypePackageDimensions
	 */
	public function getPackageDimensions()
	{
		return $this->PackageDimensions;
	}
	/**
	 * Set PackageQuantity
	 * @param nonNegativeInteger PackageQuantity
	 * @return nonNegativeInteger
	 */
	public function setPackageQuantity($_PackageQuantity)
	{
		return ($this->PackageQuantity = $_PackageQuantity);
	}
	/**
	 * Get PackageQuantity
	 * @return nonNegativeInteger
	 */
	public function getPackageQuantity()
	{
		return $this->PackageQuantity;
	}
	/**
	 * Set PartNumber
	 * @param string PartNumber
	 * @return string
	 */
	public function setPartNumber($_PartNumber)
	{
		return ($this->PartNumber = $_PartNumber);
	}
	/**
	 * Get PartNumber
	 * @return string
	 */
	public function getPartNumber()
	{
		return $this->PartNumber;
	}
	/**
	 * Set PictureFormat
	 * @param string PictureFormat
	 * @return string
	 */
	public function setPictureFormat($_PictureFormat)
	{
		return ($this->PictureFormat = $_PictureFormat);
	}
	/**
	 * Get PictureFormat
	 * @return string
	 */
	public function getPictureFormat()
	{
		return $this->PictureFormat;
	}
	/**
	 * Set Platform
	 * @param string Platform
	 * @return string
	 */
	public function setPlatform($_Platform)
	{
		return ($this->Platform = $_Platform);
	}
	/**
	 * Get Platform
	 * @return string
	 */
	public function getPlatform()
	{
		return $this->Platform;
	}
	/**
	 * Set ProductGroup
	 * @param string ProductGroup
	 * @return string
	 */
	public function setProductGroup($_ProductGroup)
	{
		return ($this->ProductGroup = $_ProductGroup);
	}
	/**
	 * Get ProductGroup
	 * @return string
	 */
	public function getProductGroup()
	{
		return $this->ProductGroup;
	}
	/**
	 * Set ProductTypeName
	 * @param string ProductTypeName
	 * @return string
	 */
	public function setProductTypeName($_ProductTypeName)
	{
		return ($this->ProductTypeName = $_ProductTypeName);
	}
	/**
	 * Get ProductTypeName
	 * @return string
	 */
	public function getProductTypeName()
	{
		return $this->ProductTypeName;
	}
	/**
	 * Set ProductTypeSubcategory
	 * @param string ProductTypeSubcategory
	 * @return string
	 */
	public function setProductTypeSubcategory($_ProductTypeSubcategory)
	{
		return ($this->ProductTypeSubcategory = $_ProductTypeSubcategory);
	}
	/**
	 * Get ProductTypeSubcategory
	 * @return string
	 */
	public function getProductTypeSubcategory()
	{
		return $this->ProductTypeSubcategory;
	}
	/**
	 * Set PublicationDate
	 * @param string PublicationDate
	 * @return string
	 */
	public function setPublicationDate($_PublicationDate)
	{
		return ($this->PublicationDate = $_PublicationDate);
	}
	/**
	 * Get PublicationDate
	 * @return string
	 */
	public function getPublicationDate()
	{
		return $this->PublicationDate;
	}
	/**
	 * Set Publisher
	 * @param string Publisher
	 * @return string
	 */
	public function setPublisher($_Publisher)
	{
		return ($this->Publisher = $_Publisher);
	}
	/**
	 * Get Publisher
	 * @return string
	 */
	public function getPublisher()
	{
		return $this->Publisher;
	}
	/**
	 * Set RegionCode
	 * @param string RegionCode
	 * @return string
	 */
	public function setRegionCode($_RegionCode)
	{
		return ($this->RegionCode = $_RegionCode);
	}
	/**
	 * Get RegionCode
	 * @return string
	 */
	public function getRegionCode()
	{
		return $this->RegionCode;
	}
	/**
	 * Set ReleaseDate
	 * @param string ReleaseDate
	 * @return string
	 */
	public function setReleaseDate($_ReleaseDate)
	{
		return ($this->ReleaseDate = $_ReleaseDate);
	}
	/**
	 * Get ReleaseDate
	 * @return string
	 */
	public function getReleaseDate()
	{
		return $this->ReleaseDate;
	}
	/**
	 * Set RunningTime
	 * @param DecimalWithUnits RunningTime
	 * @return DecimalWithUnits
	 */
	public function setRunningTime($_RunningTime)
	{
		return ($this->RunningTime = $_RunningTime);
	}
	/**
	 * Get RunningTime
	 * @return AmazonECommerceServiceTypeDecimalWithUnits
	 */
	public function getRunningTime()
	{
		return $this->RunningTime;
	}
	/**
	 * Set SeikodoProductCode
	 * @param string SeikodoProductCode
	 * @return string
	 */
	public function setSeikodoProductCode($_SeikodoProductCode)
	{
		return ($this->SeikodoProductCode = $_SeikodoProductCode);
	}
	/**
	 * Get SeikodoProductCode
	 * @return string
	 */
	public function getSeikodoProductCode()
	{
		return $this->SeikodoProductCode;
	}
	/**
	 * Set Size
	 * @param string Size
	 * @return string
	 */
	public function setSize($_Size)
	{
		return ($this->Size = $_Size);
	}
	/**
	 * Get Size
	 * @return string
	 */
	public function getSize()
	{
		return $this->Size;
	}
	/**
	 * Set SKU
	 * @param string SKU
	 * @return string
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = $_SKU);
	}
	/**
	 * Get SKU
	 * @return string
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set Studio
	 * @param string Studio
	 * @return string
	 */
	public function setStudio($_Studio)
	{
		return ($this->Studio = $_Studio);
	}
	/**
	 * Get Studio
	 * @return string
	 */
	public function getStudio()
	{
		return $this->Studio;
	}
	/**
	 * Set SubscriptionLength
	 * @param NonNegativeIntegerWithUnits SubscriptionLength
	 * @return NonNegativeIntegerWithUnits
	 */
	public function setSubscriptionLength($_SubscriptionLength)
	{
		return ($this->SubscriptionLength = $_SubscriptionLength);
	}
	/**
	 * Get SubscriptionLength
	 * @return AmazonECommerceServiceTypeNonNegativeIntegerWithUnits
	 */
	public function getSubscriptionLength()
	{
		return $this->SubscriptionLength;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set TrackSequence
	 * @param string TrackSequence
	 * @return string
	 */
	public function setTrackSequence($_TrackSequence)
	{
		return ($this->TrackSequence = $_TrackSequence);
	}
	/**
	 * Get TrackSequence
	 * @return string
	 */
	public function getTrackSequence()
	{
		return $this->TrackSequence;
	}
	/**
	 * Set TradeInValue
	 * @param Price TradeInValue
	 * @return Price
	 */
	public function setTradeInValue($_TradeInValue)
	{
		return ($this->TradeInValue = $_TradeInValue);
	}
	/**
	 * Get TradeInValue
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getTradeInValue()
	{
		return $this->TradeInValue;
	}
	/**
	 * Set UPC
	 * @param string UPC
	 * @return string
	 */
	public function setUPC($_UPC)
	{
		return ($this->UPC = $_UPC);
	}
	/**
	 * Get UPC
	 * @return string
	 */
	public function getUPC()
	{
		return $this->UPC;
	}
	/**
	 * Set UPCList
	 * @param UPCList UPCList
	 * @return UPCList
	 */
	public function setUPCList($_UPCList)
	{
		return ($this->UPCList = $_UPCList);
	}
	/**
	 * Get UPCList
	 * @return AmazonECommerceServiceTypeUPCList
	 */
	public function getUPCList()
	{
		return $this->UPCList;
	}
	/**
	 * Set Warranty
	 * @param string Warranty
	 * @return string
	 */
	public function setWarranty($_Warranty)
	{
		return ($this->Warranty = $_Warranty);
	}
	/**
	 * Get Warranty
	 * @return string
	 */
	public function getWarranty()
	{
		return $this->Warranty;
	}
	/**
	 * Set WEEETaxValue
	 * @param Price WEEETaxValue
	 * @return Price
	 */
	public function setWEEETaxValue($_WEEETaxValue)
	{
		return ($this->WEEETaxValue = $_WEEETaxValue);
	}
	/**
	 * Get WEEETaxValue
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getWEEETaxValue()
	{
		return $this->WEEETaxValue;
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