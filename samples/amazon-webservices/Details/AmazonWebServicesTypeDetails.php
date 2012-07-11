<?php
/**
 * Class file for AmazonWebServicesTypeDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeDetails
 * @date 10/07/2012
 */
class AmazonWebServicesTypeDetails extends AmazonWebServicesWsdlClass
{
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Url;
	/**
	 * The Asin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Asin;
	/**
	 * The ProductName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ProductName;
	/**
	 * The Catalog
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Catalog;
	/**
	 * The KeyPhrases
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var KeyPhraseArray
	 */
	public $KeyPhrases;
	/**
	 * The Artists
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var ArtistArray
	 */
	public $Artists;
	/**
	 * The Authors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AuthorArray
	 */
	public $Authors;
	/**
	 * The Mpn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Mpn;
	/**
	 * The Starring
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var StarringArray
	 */
	public $Starring;
	/**
	 * The Directors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var DirectorArray
	 */
	public $Directors;
	/**
	 * The TheatricalReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TheatricalReleaseDate;
	/**
	 * The ReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ReleaseDate;
	/**
	 * The Manufacturer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Manufacturer;
	/**
	 * The Distributor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Distributor;
	/**
	 * The ImageUrlSmall
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ImageUrlSmall;
	/**
	 * The ImageUrlMedium
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ImageUrlMedium;
	/**
	 * The ImageUrlLarge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ImageUrlLarge;
	/**
	 * The ListPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ListPrice;
	/**
	 * The OurPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OurPrice;
	/**
	 * The UsedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $UsedPrice;
	/**
	 * The RefurbishedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RefurbishedPrice;
	/**
	 * The CollectiblePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CollectiblePrice;
	/**
	 * The ThirdPartyNewPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ThirdPartyNewPrice;
	/**
	 * The NumberOfOfferings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumberOfOfferings;
	/**
	 * The ThirdPartyNewCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ThirdPartyNewCount;
	/**
	 * The UsedCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $UsedCount;
	/**
	 * The CollectibleCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CollectibleCount;
	/**
	 * The RefurbishedCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RefurbishedCount;
	/**
	 * The ThirdPartyProductInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonWebServicesTypeThirdPartyProductInfo
	 */
	public $ThirdPartyProductInfo;
	/**
	 * The SalesRank
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SalesRank;
	/**
	 * The BrowseList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var BrowseNodeArray
	 */
	public $BrowseList;
	/**
	 * The Media
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Media;
	/**
	 * The ReadingLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ReadingLevel;
	/**
	 * The NumberOfPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumberOfPages;
	/**
	 * The NumberOfIssues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumberOfIssues;
	/**
	 * The IssuesPerYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IssuesPerYear;
	/**
	 * The SubscriptionLength
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SubscriptionLength;
	/**
	 * The DeweyNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $DeweyNumber;
	/**
	 * The RunningTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RunningTime;
	/**
	 * The Publisher
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Publisher;
	/**
	 * The NumMedia
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $NumMedia;
	/**
	 * The Isbn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Isbn;
	/**
	 * The Features
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var FeaturesArray
	 */
	public $Features;
	/**
	 * The MpaaRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MpaaRating;
	/**
	 * The EsrbRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EsrbRating;
	/**
	 * The AgeGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AgeGroup;
	/**
	 * The Availability
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Availability;
	/**
	 * The Upc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Upc;
	/**
	 * The Tracks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var TrackArray
	 */
	public $Tracks;
	/**
	 * The Accessories
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AccessoryArray
	 */
	public $Accessories;
	/**
	 * The Platforms
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PlatformArray
	 */
	public $Platforms;
	/**
	 * The Encoding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Encoding;
	/**
	 * The Reviews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonWebServicesTypeReviews
	 */
	public $Reviews;
	/**
	 * The SimilarProducts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var SimilarProductsArray
	 */
	public $SimilarProducts;
	/**
	 * The Lists
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var ListArray
	 */
	public $Lists;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Status;
	/**
	 * Constructor
	 * @param string Url
	 * @param string Asin
	 * @param string ProductName
	 * @param string Catalog
	 * @param KeyPhraseArray KeyPhrases
	 * @param ArtistArray Artists
	 * @param AuthorArray Authors
	 * @param string Mpn
	 * @param StarringArray Starring
	 * @param DirectorArray Directors
	 * @param string TheatricalReleaseDate
	 * @param string ReleaseDate
	 * @param string Manufacturer
	 * @param string Distributor
	 * @param string ImageUrlSmall
	 * @param string ImageUrlMedium
	 * @param string ImageUrlLarge
	 * @param string ListPrice
	 * @param string OurPrice
	 * @param string UsedPrice
	 * @param string RefurbishedPrice
	 * @param string CollectiblePrice
	 * @param string ThirdPartyNewPrice
	 * @param string NumberOfOfferings
	 * @param string ThirdPartyNewCount
	 * @param string UsedCount
	 * @param string CollectibleCount
	 * @param string RefurbishedCount
	 * @param AmazonWebServicesTypeThirdPartyProductInfo ThirdPartyProductInfo
	 * @param string SalesRank
	 * @param BrowseNodeArray BrowseList
	 * @param string Media
	 * @param string ReadingLevel
	 * @param string NumberOfPages
	 * @param string NumberOfIssues
	 * @param string IssuesPerYear
	 * @param string SubscriptionLength
	 * @param string DeweyNumber
	 * @param string RunningTime
	 * @param string Publisher
	 * @param string NumMedia
	 * @param string Isbn
	 * @param FeaturesArray Features
	 * @param string MpaaRating
	 * @param string EsrbRating
	 * @param string AgeGroup
	 * @param string Availability
	 * @param string Upc
	 * @param TrackArray Tracks
	 * @param AccessoryArray Accessories
	 * @param PlatformArray Platforms
	 * @param string Encoding
	 * @param AmazonWebServicesTypeReviews Reviews
	 * @param SimilarProductsArray SimilarProducts
	 * @param ListArray Lists
	 * @param string Status
	 * @return AmazonWebServicesTypeDetails
	 */
	public function __construct($_Url = null,$_Asin = null,$_ProductName = null,$_Catalog = null,$_KeyPhrases = null,$_Artists = null,$_Authors = null,$_Mpn = null,$_Starring = null,$_Directors = null,$_TheatricalReleaseDate = null,$_ReleaseDate = null,$_Manufacturer = null,$_Distributor = null,$_ImageUrlSmall = null,$_ImageUrlMedium = null,$_ImageUrlLarge = null,$_ListPrice = null,$_OurPrice = null,$_UsedPrice = null,$_RefurbishedPrice = null,$_CollectiblePrice = null,$_ThirdPartyNewPrice = null,$_NumberOfOfferings = null,$_ThirdPartyNewCount = null,$_UsedCount = null,$_CollectibleCount = null,$_RefurbishedCount = null,$_ThirdPartyProductInfo = null,$_SalesRank = null,$_BrowseList = null,$_Media = null,$_ReadingLevel = null,$_NumberOfPages = null,$_NumberOfIssues = null,$_IssuesPerYear = null,$_SubscriptionLength = null,$_DeweyNumber = null,$_RunningTime = null,$_Publisher = null,$_NumMedia = null,$_Isbn = null,$_Features = null,$_MpaaRating = null,$_EsrbRating = null,$_AgeGroup = null,$_Availability = null,$_Upc = null,$_Tracks = null,$_Accessories = null,$_Platforms = null,$_Encoding = null,$_Reviews = null,$_SimilarProducts = null,$_Lists = null,$_Status = null)
	{
		parent::__construct(array('Url'=>$_Url,'Asin'=>$_Asin,'ProductName'=>$_ProductName,'Catalog'=>$_Catalog,'KeyPhrases'=>$_KeyPhrases,'Artists'=>$_Artists,'Authors'=>$_Authors,'Mpn'=>$_Mpn,'Starring'=>$_Starring,'Directors'=>$_Directors,'TheatricalReleaseDate'=>$_TheatricalReleaseDate,'ReleaseDate'=>$_ReleaseDate,'Manufacturer'=>$_Manufacturer,'Distributor'=>$_Distributor,'ImageUrlSmall'=>$_ImageUrlSmall,'ImageUrlMedium'=>$_ImageUrlMedium,'ImageUrlLarge'=>$_ImageUrlLarge,'ListPrice'=>$_ListPrice,'OurPrice'=>$_OurPrice,'UsedPrice'=>$_UsedPrice,'RefurbishedPrice'=>$_RefurbishedPrice,'CollectiblePrice'=>$_CollectiblePrice,'ThirdPartyNewPrice'=>$_ThirdPartyNewPrice,'NumberOfOfferings'=>$_NumberOfOfferings,'ThirdPartyNewCount'=>$_ThirdPartyNewCount,'UsedCount'=>$_UsedCount,'CollectibleCount'=>$_CollectibleCount,'RefurbishedCount'=>$_RefurbishedCount,'ThirdPartyProductInfo'=>$_ThirdPartyProductInfo,'SalesRank'=>$_SalesRank,'BrowseList'=>$_BrowseList,'Media'=>$_Media,'ReadingLevel'=>$_ReadingLevel,'NumberOfPages'=>$_NumberOfPages,'NumberOfIssues'=>$_NumberOfIssues,'IssuesPerYear'=>$_IssuesPerYear,'SubscriptionLength'=>$_SubscriptionLength,'DeweyNumber'=>$_DeweyNumber,'RunningTime'=>$_RunningTime,'Publisher'=>$_Publisher,'NumMedia'=>$_NumMedia,'Isbn'=>$_Isbn,'Features'=>$_Features,'MpaaRating'=>$_MpaaRating,'EsrbRating'=>$_EsrbRating,'AgeGroup'=>$_AgeGroup,'Availability'=>$_Availability,'Upc'=>$_Upc,'Tracks'=>$_Tracks,'Accessories'=>$_Accessories,'Platforms'=>$_Platforms,'Encoding'=>$_Encoding,'Reviews'=>$_Reviews,'SimilarProducts'=>$_SimilarProducts,'Lists'=>$_Lists,'Status'=>$_Status));
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set Asin
	 * @param string Asin
	 * @return string
	 */
	public function setAsin($_Asin)
	{
		return ($this->Asin = $_Asin);
	}
	/**
	 * Get Asin
	 * @return string
	 */
	public function getAsin()
	{
		return $this->Asin;
	}
	/**
	 * Set ProductName
	 * @param string ProductName
	 * @return string
	 */
	public function setProductName($_ProductName)
	{
		return ($this->ProductName = $_ProductName);
	}
	/**
	 * Get ProductName
	 * @return string
	 */
	public function getProductName()
	{
		return $this->ProductName;
	}
	/**
	 * Set Catalog
	 * @param string Catalog
	 * @return string
	 */
	public function setCatalog($_Catalog)
	{
		return ($this->Catalog = $_Catalog);
	}
	/**
	 * Get Catalog
	 * @return string
	 */
	public function getCatalog()
	{
		return $this->Catalog;
	}
	/**
	 * Set KeyPhrases
	 * @param KeyPhraseArray KeyPhrases
	 * @return KeyPhraseArray
	 */
	public function setKeyPhrases($_KeyPhrases)
	{
		return ($this->KeyPhrases = $_KeyPhrases);
	}
	/**
	 * Get KeyPhrases
	 * @return KeyPhraseArray
	 */
	public function getKeyPhrases()
	{
		return $this->KeyPhrases;
	}
	/**
	 * Set Artists
	 * @param ArtistArray Artists
	 * @return ArtistArray
	 */
	public function setArtists($_Artists)
	{
		return ($this->Artists = $_Artists);
	}
	/**
	 * Get Artists
	 * @return ArtistArray
	 */
	public function getArtists()
	{
		return $this->Artists;
	}
	/**
	 * Set Authors
	 * @param AuthorArray Authors
	 * @return AuthorArray
	 */
	public function setAuthors($_Authors)
	{
		return ($this->Authors = $_Authors);
	}
	/**
	 * Get Authors
	 * @return AuthorArray
	 */
	public function getAuthors()
	{
		return $this->Authors;
	}
	/**
	 * Set Mpn
	 * @param string Mpn
	 * @return string
	 */
	public function setMpn($_Mpn)
	{
		return ($this->Mpn = $_Mpn);
	}
	/**
	 * Get Mpn
	 * @return string
	 */
	public function getMpn()
	{
		return $this->Mpn;
	}
	/**
	 * Set Starring
	 * @param StarringArray Starring
	 * @return StarringArray
	 */
	public function setStarring($_Starring)
	{
		return ($this->Starring = $_Starring);
	}
	/**
	 * Get Starring
	 * @return StarringArray
	 */
	public function getStarring()
	{
		return $this->Starring;
	}
	/**
	 * Set Directors
	 * @param DirectorArray Directors
	 * @return DirectorArray
	 */
	public function setDirectors($_Directors)
	{
		return ($this->Directors = $_Directors);
	}
	/**
	 * Get Directors
	 * @return DirectorArray
	 */
	public function getDirectors()
	{
		return $this->Directors;
	}
	/**
	 * Set TheatricalReleaseDate
	 * @param string TheatricalReleaseDate
	 * @return string
	 */
	public function setTheatricalReleaseDate($_TheatricalReleaseDate)
	{
		return ($this->TheatricalReleaseDate = $_TheatricalReleaseDate);
	}
	/**
	 * Get TheatricalReleaseDate
	 * @return string
	 */
	public function getTheatricalReleaseDate()
	{
		return $this->TheatricalReleaseDate;
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
	 * Set Distributor
	 * @param string Distributor
	 * @return string
	 */
	public function setDistributor($_Distributor)
	{
		return ($this->Distributor = $_Distributor);
	}
	/**
	 * Get Distributor
	 * @return string
	 */
	public function getDistributor()
	{
		return $this->Distributor;
	}
	/**
	 * Set ImageUrlSmall
	 * @param string ImageUrlSmall
	 * @return string
	 */
	public function setImageUrlSmall($_ImageUrlSmall)
	{
		return ($this->ImageUrlSmall = $_ImageUrlSmall);
	}
	/**
	 * Get ImageUrlSmall
	 * @return string
	 */
	public function getImageUrlSmall()
	{
		return $this->ImageUrlSmall;
	}
	/**
	 * Set ImageUrlMedium
	 * @param string ImageUrlMedium
	 * @return string
	 */
	public function setImageUrlMedium($_ImageUrlMedium)
	{
		return ($this->ImageUrlMedium = $_ImageUrlMedium);
	}
	/**
	 * Get ImageUrlMedium
	 * @return string
	 */
	public function getImageUrlMedium()
	{
		return $this->ImageUrlMedium;
	}
	/**
	 * Set ImageUrlLarge
	 * @param string ImageUrlLarge
	 * @return string
	 */
	public function setImageUrlLarge($_ImageUrlLarge)
	{
		return ($this->ImageUrlLarge = $_ImageUrlLarge);
	}
	/**
	 * Get ImageUrlLarge
	 * @return string
	 */
	public function getImageUrlLarge()
	{
		return $this->ImageUrlLarge;
	}
	/**
	 * Set ListPrice
	 * @param string ListPrice
	 * @return string
	 */
	public function setListPrice($_ListPrice)
	{
		return ($this->ListPrice = $_ListPrice);
	}
	/**
	 * Get ListPrice
	 * @return string
	 */
	public function getListPrice()
	{
		return $this->ListPrice;
	}
	/**
	 * Set OurPrice
	 * @param string OurPrice
	 * @return string
	 */
	public function setOurPrice($_OurPrice)
	{
		return ($this->OurPrice = $_OurPrice);
	}
	/**
	 * Get OurPrice
	 * @return string
	 */
	public function getOurPrice()
	{
		return $this->OurPrice;
	}
	/**
	 * Set UsedPrice
	 * @param string UsedPrice
	 * @return string
	 */
	public function setUsedPrice($_UsedPrice)
	{
		return ($this->UsedPrice = $_UsedPrice);
	}
	/**
	 * Get UsedPrice
	 * @return string
	 */
	public function getUsedPrice()
	{
		return $this->UsedPrice;
	}
	/**
	 * Set RefurbishedPrice
	 * @param string RefurbishedPrice
	 * @return string
	 */
	public function setRefurbishedPrice($_RefurbishedPrice)
	{
		return ($this->RefurbishedPrice = $_RefurbishedPrice);
	}
	/**
	 * Get RefurbishedPrice
	 * @return string
	 */
	public function getRefurbishedPrice()
	{
		return $this->RefurbishedPrice;
	}
	/**
	 * Set CollectiblePrice
	 * @param string CollectiblePrice
	 * @return string
	 */
	public function setCollectiblePrice($_CollectiblePrice)
	{
		return ($this->CollectiblePrice = $_CollectiblePrice);
	}
	/**
	 * Get CollectiblePrice
	 * @return string
	 */
	public function getCollectiblePrice()
	{
		return $this->CollectiblePrice;
	}
	/**
	 * Set ThirdPartyNewPrice
	 * @param string ThirdPartyNewPrice
	 * @return string
	 */
	public function setThirdPartyNewPrice($_ThirdPartyNewPrice)
	{
		return ($this->ThirdPartyNewPrice = $_ThirdPartyNewPrice);
	}
	/**
	 * Get ThirdPartyNewPrice
	 * @return string
	 */
	public function getThirdPartyNewPrice()
	{
		return $this->ThirdPartyNewPrice;
	}
	/**
	 * Set NumberOfOfferings
	 * @param string NumberOfOfferings
	 * @return string
	 */
	public function setNumberOfOfferings($_NumberOfOfferings)
	{
		return ($this->NumberOfOfferings = $_NumberOfOfferings);
	}
	/**
	 * Get NumberOfOfferings
	 * @return string
	 */
	public function getNumberOfOfferings()
	{
		return $this->NumberOfOfferings;
	}
	/**
	 * Set ThirdPartyNewCount
	 * @param string ThirdPartyNewCount
	 * @return string
	 */
	public function setThirdPartyNewCount($_ThirdPartyNewCount)
	{
		return ($this->ThirdPartyNewCount = $_ThirdPartyNewCount);
	}
	/**
	 * Get ThirdPartyNewCount
	 * @return string
	 */
	public function getThirdPartyNewCount()
	{
		return $this->ThirdPartyNewCount;
	}
	/**
	 * Set UsedCount
	 * @param string UsedCount
	 * @return string
	 */
	public function setUsedCount($_UsedCount)
	{
		return ($this->UsedCount = $_UsedCount);
	}
	/**
	 * Get UsedCount
	 * @return string
	 */
	public function getUsedCount()
	{
		return $this->UsedCount;
	}
	/**
	 * Set CollectibleCount
	 * @param string CollectibleCount
	 * @return string
	 */
	public function setCollectibleCount($_CollectibleCount)
	{
		return ($this->CollectibleCount = $_CollectibleCount);
	}
	/**
	 * Get CollectibleCount
	 * @return string
	 */
	public function getCollectibleCount()
	{
		return $this->CollectibleCount;
	}
	/**
	 * Set RefurbishedCount
	 * @param string RefurbishedCount
	 * @return string
	 */
	public function setRefurbishedCount($_RefurbishedCount)
	{
		return ($this->RefurbishedCount = $_RefurbishedCount);
	}
	/**
	 * Get RefurbishedCount
	 * @return string
	 */
	public function getRefurbishedCount()
	{
		return $this->RefurbishedCount;
	}
	/**
	 * Set ThirdPartyProductInfo
	 * @param ThirdPartyProductInfo ThirdPartyProductInfo
	 * @return ThirdPartyProductInfo
	 */
	public function setThirdPartyProductInfo($_ThirdPartyProductInfo)
	{
		return ($this->ThirdPartyProductInfo = $_ThirdPartyProductInfo);
	}
	/**
	 * Get ThirdPartyProductInfo
	 * @return AmazonWebServicesTypeThirdPartyProductInfo
	 */
	public function getThirdPartyProductInfo()
	{
		return $this->ThirdPartyProductInfo;
	}
	/**
	 * Set SalesRank
	 * @param string SalesRank
	 * @return string
	 */
	public function setSalesRank($_SalesRank)
	{
		return ($this->SalesRank = $_SalesRank);
	}
	/**
	 * Get SalesRank
	 * @return string
	 */
	public function getSalesRank()
	{
		return $this->SalesRank;
	}
	/**
	 * Set BrowseList
	 * @param BrowseNodeArray BrowseList
	 * @return BrowseNodeArray
	 */
	public function setBrowseList($_BrowseList)
	{
		return ($this->BrowseList = $_BrowseList);
	}
	/**
	 * Get BrowseList
	 * @return BrowseNodeArray
	 */
	public function getBrowseList()
	{
		return $this->BrowseList;
	}
	/**
	 * Set Media
	 * @param string Media
	 * @return string
	 */
	public function setMedia($_Media)
	{
		return ($this->Media = $_Media);
	}
	/**
	 * Get Media
	 * @return string
	 */
	public function getMedia()
	{
		return $this->Media;
	}
	/**
	 * Set ReadingLevel
	 * @param string ReadingLevel
	 * @return string
	 */
	public function setReadingLevel($_ReadingLevel)
	{
		return ($this->ReadingLevel = $_ReadingLevel);
	}
	/**
	 * Get ReadingLevel
	 * @return string
	 */
	public function getReadingLevel()
	{
		return $this->ReadingLevel;
	}
	/**
	 * Set NumberOfPages
	 * @param string NumberOfPages
	 * @return string
	 */
	public function setNumberOfPages($_NumberOfPages)
	{
		return ($this->NumberOfPages = $_NumberOfPages);
	}
	/**
	 * Get NumberOfPages
	 * @return string
	 */
	public function getNumberOfPages()
	{
		return $this->NumberOfPages;
	}
	/**
	 * Set NumberOfIssues
	 * @param string NumberOfIssues
	 * @return string
	 */
	public function setNumberOfIssues($_NumberOfIssues)
	{
		return ($this->NumberOfIssues = $_NumberOfIssues);
	}
	/**
	 * Get NumberOfIssues
	 * @return string
	 */
	public function getNumberOfIssues()
	{
		return $this->NumberOfIssues;
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
	 * Set SubscriptionLength
	 * @param string SubscriptionLength
	 * @return string
	 */
	public function setSubscriptionLength($_SubscriptionLength)
	{
		return ($this->SubscriptionLength = $_SubscriptionLength);
	}
	/**
	 * Get SubscriptionLength
	 * @return string
	 */
	public function getSubscriptionLength()
	{
		return $this->SubscriptionLength;
	}
	/**
	 * Set DeweyNumber
	 * @param string DeweyNumber
	 * @return string
	 */
	public function setDeweyNumber($_DeweyNumber)
	{
		return ($this->DeweyNumber = $_DeweyNumber);
	}
	/**
	 * Get DeweyNumber
	 * @return string
	 */
	public function getDeweyNumber()
	{
		return $this->DeweyNumber;
	}
	/**
	 * Set RunningTime
	 * @param string RunningTime
	 * @return string
	 */
	public function setRunningTime($_RunningTime)
	{
		return ($this->RunningTime = $_RunningTime);
	}
	/**
	 * Get RunningTime
	 * @return string
	 */
	public function getRunningTime()
	{
		return $this->RunningTime;
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
	 * Set NumMedia
	 * @param string NumMedia
	 * @return string
	 */
	public function setNumMedia($_NumMedia)
	{
		return ($this->NumMedia = $_NumMedia);
	}
	/**
	 * Get NumMedia
	 * @return string
	 */
	public function getNumMedia()
	{
		return $this->NumMedia;
	}
	/**
	 * Set Isbn
	 * @param string Isbn
	 * @return string
	 */
	public function setIsbn($_Isbn)
	{
		return ($this->Isbn = $_Isbn);
	}
	/**
	 * Get Isbn
	 * @return string
	 */
	public function getIsbn()
	{
		return $this->Isbn;
	}
	/**
	 * Set Features
	 * @param FeaturesArray Features
	 * @return FeaturesArray
	 */
	public function setFeatures($_Features)
	{
		return ($this->Features = $_Features);
	}
	/**
	 * Get Features
	 * @return FeaturesArray
	 */
	public function getFeatures()
	{
		return $this->Features;
	}
	/**
	 * Set MpaaRating
	 * @param string MpaaRating
	 * @return string
	 */
	public function setMpaaRating($_MpaaRating)
	{
		return ($this->MpaaRating = $_MpaaRating);
	}
	/**
	 * Get MpaaRating
	 * @return string
	 */
	public function getMpaaRating()
	{
		return $this->MpaaRating;
	}
	/**
	 * Set EsrbRating
	 * @param string EsrbRating
	 * @return string
	 */
	public function setEsrbRating($_EsrbRating)
	{
		return ($this->EsrbRating = $_EsrbRating);
	}
	/**
	 * Get EsrbRating
	 * @return string
	 */
	public function getEsrbRating()
	{
		return $this->EsrbRating;
	}
	/**
	 * Set AgeGroup
	 * @param string AgeGroup
	 * @return string
	 */
	public function setAgeGroup($_AgeGroup)
	{
		return ($this->AgeGroup = $_AgeGroup);
	}
	/**
	 * Get AgeGroup
	 * @return string
	 */
	public function getAgeGroup()
	{
		return $this->AgeGroup;
	}
	/**
	 * Set Availability
	 * @param string Availability
	 * @return string
	 */
	public function setAvailability($_Availability)
	{
		return ($this->Availability = $_Availability);
	}
	/**
	 * Get Availability
	 * @return string
	 */
	public function getAvailability()
	{
		return $this->Availability;
	}
	/**
	 * Set Upc
	 * @param string Upc
	 * @return string
	 */
	public function setUpc($_Upc)
	{
		return ($this->Upc = $_Upc);
	}
	/**
	 * Get Upc
	 * @return string
	 */
	public function getUpc()
	{
		return $this->Upc;
	}
	/**
	 * Set Tracks
	 * @param TrackArray Tracks
	 * @return TrackArray
	 */
	public function setTracks($_Tracks)
	{
		return ($this->Tracks = $_Tracks);
	}
	/**
	 * Get Tracks
	 * @return TrackArray
	 */
	public function getTracks()
	{
		return $this->Tracks;
	}
	/**
	 * Set Accessories
	 * @param AccessoryArray Accessories
	 * @return AccessoryArray
	 */
	public function setAccessories($_Accessories)
	{
		return ($this->Accessories = $_Accessories);
	}
	/**
	 * Get Accessories
	 * @return AccessoryArray
	 */
	public function getAccessories()
	{
		return $this->Accessories;
	}
	/**
	 * Set Platforms
	 * @param PlatformArray Platforms
	 * @return PlatformArray
	 */
	public function setPlatforms($_Platforms)
	{
		return ($this->Platforms = $_Platforms);
	}
	/**
	 * Get Platforms
	 * @return PlatformArray
	 */
	public function getPlatforms()
	{
		return $this->Platforms;
	}
	/**
	 * Set Encoding
	 * @param string Encoding
	 * @return string
	 */
	public function setEncoding($_Encoding)
	{
		return ($this->Encoding = $_Encoding);
	}
	/**
	 * Get Encoding
	 * @return string
	 */
	public function getEncoding()
	{
		return $this->Encoding;
	}
	/**
	 * Set Reviews
	 * @param Reviews Reviews
	 * @return Reviews
	 */
	public function setReviews($_Reviews)
	{
		return ($this->Reviews = $_Reviews);
	}
	/**
	 * Get Reviews
	 * @return AmazonWebServicesTypeReviews
	 */
	public function getReviews()
	{
		return $this->Reviews;
	}
	/**
	 * Set SimilarProducts
	 * @param SimilarProductsArray SimilarProducts
	 * @return SimilarProductsArray
	 */
	public function setSimilarProducts($_SimilarProducts)
	{
		return ($this->SimilarProducts = $_SimilarProducts);
	}
	/**
	 * Get SimilarProducts
	 * @return SimilarProductsArray
	 */
	public function getSimilarProducts()
	{
		return $this->SimilarProducts;
	}
	/**
	 * Set Lists
	 * @param ListArray Lists
	 * @return ListArray
	 */
	public function setLists($_Lists)
	{
		return ($this->Lists = $_Lists);
	}
	/**
	 * Get Lists
	 * @return ListArray
	 */
	public function getLists()
	{
		return $this->Lists;
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
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