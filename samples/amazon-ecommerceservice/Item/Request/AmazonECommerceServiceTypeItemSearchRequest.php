<?php
/**
 * Class file for AmazonECommerceServiceTypeItemSearchRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItemSearchRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItemSearchRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Actor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Actor;
	/**
	 * The Artist
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Artist;
	/**
	 * The Availability
	 * @var Availability
	 */
	public $Availability;
	/**
	 * The AudienceRating
	 * @var AudienceRating
	 */
	public $AudienceRating;
	/**
	 * The Author
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Author;
	/**
	 * The Brand
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Brand;
	/**
	 * The BrowseNode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $BrowseNode;
	/**
	 * The Composer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Composer;
	/**
	 * The Condition
	 * @var Condition
	 */
	public $Condition;
	/**
	 * The Conductor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Conductor;
	/**
	 * The Director
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Director;
	/**
	 * The ItemPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var positiveInteger
	 */
	public $ItemPage;
	/**
	 * The Keywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Keywords;
	/**
	 * The Manufacturer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Manufacturer;
	/**
	 * The MaximumPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $MaximumPrice;
	/**
	 * The MerchantId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MerchantId;
	/**
	 * The MinimumPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $MinimumPrice;
	/**
	 * The MinPercentageOff
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $MinPercentageOff;
	/**
	 * The MusicLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MusicLabel;
	/**
	 * The Orchestra
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Orchestra;
	/**
	 * The Power
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Power;
	/**
	 * The Publisher
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Publisher;
	/**
	 * The RelatedItemPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var positiveIntegerOrAll
	 */
	public $RelatedItemPage;
	/**
	 * The RelationshipType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $RelationshipType;
	/**
	 * The ResponseGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * The SearchIndex
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SearchIndex;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Sort;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * The ReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ReleaseDate;
	/**
	 * The IncludeReviewsSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IncludeReviewsSummary;
	/**
	 * The TruncateReviewsAt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $TruncateReviewsAt;
	/**
	 * Constructor
	 * @param string Actor
	 * @param string Artist
	 * @param Availability Availability
	 * @param AudienceRating AudienceRating
	 * @param string Author
	 * @param string Brand
	 * @param string BrowseNode
	 * @param string Composer
	 * @param Condition Condition
	 * @param string Conductor
	 * @param string Director
	 * @param positiveInteger ItemPage
	 * @param string Keywords
	 * @param string Manufacturer
	 * @param nonNegativeInteger MaximumPrice
	 * @param string MerchantId
	 * @param nonNegativeInteger MinimumPrice
	 * @param nonNegativeInteger MinPercentageOff
	 * @param string MusicLabel
	 * @param string Orchestra
	 * @param string Power
	 * @param string Publisher
	 * @param positiveIntegerOrAll RelatedItemPage
	 * @param string RelationshipType
	 * @param string ResponseGroup
	 * @param string SearchIndex
	 * @param string Sort
	 * @param string Title
	 * @param string ReleaseDate
	 * @param string IncludeReviewsSummary
	 * @param nonNegativeInteger TruncateReviewsAt
	 * @return AmazonECommerceServiceTypeItemSearchRequest
	 */
	public function __construct($_Actor = null,$_Artist = null,$_Availability = null,$_AudienceRating = null,$_Author = null,$_Brand = null,$_BrowseNode = null,$_Composer = null,$_Condition = null,$_Conductor = null,$_Director = null,$_ItemPage = null,$_Keywords = null,$_Manufacturer = null,$_MaximumPrice = null,$_MerchantId = null,$_MinimumPrice = null,$_MinPercentageOff = null,$_MusicLabel = null,$_Orchestra = null,$_Power = null,$_Publisher = null,$_RelatedItemPage = null,$_RelationshipType = null,$_ResponseGroup = null,$_SearchIndex = null,$_Sort = null,$_Title = null,$_ReleaseDate = null,$_IncludeReviewsSummary = null,$_TruncateReviewsAt = null)
	{
		parent::__construct(array('Actor'=>$_Actor,'Artist'=>$_Artist,'Availability'=>$_Availability,'AudienceRating'=>$_AudienceRating,'Author'=>$_Author,'Brand'=>$_Brand,'BrowseNode'=>$_BrowseNode,'Composer'=>$_Composer,'Condition'=>$_Condition,'Conductor'=>$_Conductor,'Director'=>$_Director,'ItemPage'=>$_ItemPage,'Keywords'=>$_Keywords,'Manufacturer'=>$_Manufacturer,'MaximumPrice'=>$_MaximumPrice,'MerchantId'=>$_MerchantId,'MinimumPrice'=>$_MinimumPrice,'MinPercentageOff'=>$_MinPercentageOff,'MusicLabel'=>$_MusicLabel,'Orchestra'=>$_Orchestra,'Power'=>$_Power,'Publisher'=>$_Publisher,'RelatedItemPage'=>$_RelatedItemPage,'RelationshipType'=>$_RelationshipType,'ResponseGroup'=>$_ResponseGroup,'SearchIndex'=>$_SearchIndex,'Sort'=>$_Sort,'Title'=>$_Title,'ReleaseDate'=>$_ReleaseDate,'IncludeReviewsSummary'=>$_IncludeReviewsSummary,'TruncateReviewsAt'=>$_TruncateReviewsAt));
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
	 * Set Availability
	 * @param Availability Availability
	 * @return Availability
	 */
	public function setAvailability($_Availability)
	{
		return ($this->Availability = $_Availability);
	}
	/**
	 * Get Availability
	 * @return Availability
	 */
	public function getAvailability()
	{
		return $this->Availability;
	}
	/**
	 * Set AudienceRating
	 * @param AudienceRating AudienceRating
	 * @return AudienceRating
	 */
	public function setAudienceRating($_AudienceRating)
	{
		return ($this->AudienceRating = $_AudienceRating);
	}
	/**
	 * Get AudienceRating
	 * @return AudienceRating
	 */
	public function getAudienceRating()
	{
		return $this->AudienceRating;
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
	 * Set BrowseNode
	 * @param string BrowseNode
	 * @return string
	 */
	public function setBrowseNode($_BrowseNode)
	{
		return ($this->BrowseNode = $_BrowseNode);
	}
	/**
	 * Get BrowseNode
	 * @return string
	 */
	public function getBrowseNode()
	{
		return $this->BrowseNode;
	}
	/**
	 * Set Composer
	 * @param string Composer
	 * @return string
	 */
	public function setComposer($_Composer)
	{
		return ($this->Composer = $_Composer);
	}
	/**
	 * Get Composer
	 * @return string
	 */
	public function getComposer()
	{
		return $this->Composer;
	}
	/**
	 * Set Condition
	 * @param Condition Condition
	 * @return Condition
	 */
	public function setCondition($_Condition)
	{
		return ($this->Condition = $_Condition);
	}
	/**
	 * Get Condition
	 * @return Condition
	 */
	public function getCondition()
	{
		return $this->Condition;
	}
	/**
	 * Set Conductor
	 * @param string Conductor
	 * @return string
	 */
	public function setConductor($_Conductor)
	{
		return ($this->Conductor = $_Conductor);
	}
	/**
	 * Get Conductor
	 * @return string
	 */
	public function getConductor()
	{
		return $this->Conductor;
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
	 * Set ItemPage
	 * @param positiveInteger ItemPage
	 * @return positiveInteger
	 */
	public function setItemPage($_ItemPage)
	{
		return ($this->ItemPage = $_ItemPage);
	}
	/**
	 * Get ItemPage
	 * @return positiveInteger
	 */
	public function getItemPage()
	{
		return $this->ItemPage;
	}
	/**
	 * Set Keywords
	 * @param string Keywords
	 * @return string
	 */
	public function setKeywords($_Keywords)
	{
		return ($this->Keywords = $_Keywords);
	}
	/**
	 * Get Keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->Keywords;
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
	 * Set MaximumPrice
	 * @param nonNegativeInteger MaximumPrice
	 * @return nonNegativeInteger
	 */
	public function setMaximumPrice($_MaximumPrice)
	{
		return ($this->MaximumPrice = $_MaximumPrice);
	}
	/**
	 * Get MaximumPrice
	 * @return nonNegativeInteger
	 */
	public function getMaximumPrice()
	{
		return $this->MaximumPrice;
	}
	/**
	 * Set MerchantId
	 * @param string MerchantId
	 * @return string
	 */
	public function setMerchantId($_MerchantId)
	{
		return ($this->MerchantId = $_MerchantId);
	}
	/**
	 * Get MerchantId
	 * @return string
	 */
	public function getMerchantId()
	{
		return $this->MerchantId;
	}
	/**
	 * Set MinimumPrice
	 * @param nonNegativeInteger MinimumPrice
	 * @return nonNegativeInteger
	 */
	public function setMinimumPrice($_MinimumPrice)
	{
		return ($this->MinimumPrice = $_MinimumPrice);
	}
	/**
	 * Get MinimumPrice
	 * @return nonNegativeInteger
	 */
	public function getMinimumPrice()
	{
		return $this->MinimumPrice;
	}
	/**
	 * Set MinPercentageOff
	 * @param nonNegativeInteger MinPercentageOff
	 * @return nonNegativeInteger
	 */
	public function setMinPercentageOff($_MinPercentageOff)
	{
		return ($this->MinPercentageOff = $_MinPercentageOff);
	}
	/**
	 * Get MinPercentageOff
	 * @return nonNegativeInteger
	 */
	public function getMinPercentageOff()
	{
		return $this->MinPercentageOff;
	}
	/**
	 * Set MusicLabel
	 * @param string MusicLabel
	 * @return string
	 */
	public function setMusicLabel($_MusicLabel)
	{
		return ($this->MusicLabel = $_MusicLabel);
	}
	/**
	 * Get MusicLabel
	 * @return string
	 */
	public function getMusicLabel()
	{
		return $this->MusicLabel;
	}
	/**
	 * Set Orchestra
	 * @param string Orchestra
	 * @return string
	 */
	public function setOrchestra($_Orchestra)
	{
		return ($this->Orchestra = $_Orchestra);
	}
	/**
	 * Get Orchestra
	 * @return string
	 */
	public function getOrchestra()
	{
		return $this->Orchestra;
	}
	/**
	 * Set Power
	 * @param string Power
	 * @return string
	 */
	public function setPower($_Power)
	{
		return ($this->Power = $_Power);
	}
	/**
	 * Get Power
	 * @return string
	 */
	public function getPower()
	{
		return $this->Power;
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
	 * Set RelatedItemPage
	 * @param positiveIntegerOrAll RelatedItemPage
	 * @return positiveIntegerOrAll
	 */
	public function setRelatedItemPage($_RelatedItemPage)
	{
		return ($this->RelatedItemPage = $_RelatedItemPage);
	}
	/**
	 * Get RelatedItemPage
	 * @return positiveIntegerOrAll
	 */
	public function getRelatedItemPage()
	{
		return $this->RelatedItemPage;
	}
	/**
	 * Set RelationshipType
	 * @param string RelationshipType
	 * @return string
	 */
	public function setRelationshipType($_RelationshipType)
	{
		return ($this->RelationshipType = $_RelationshipType);
	}
	/**
	 * Get RelationshipType
	 * @return string
	 */
	public function getRelationshipType()
	{
		return $this->RelationshipType;
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
	}
	/**
	 * Set SearchIndex
	 * @param string SearchIndex
	 * @return string
	 */
	public function setSearchIndex($_SearchIndex)
	{
		return ($this->SearchIndex = $_SearchIndex);
	}
	/**
	 * Get SearchIndex
	 * @return string
	 */
	public function getSearchIndex()
	{
		return $this->SearchIndex;
	}
	/**
	 * Set Sort
	 * @param string Sort
	 * @return string
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = $_Sort);
	}
	/**
	 * Get Sort
	 * @return string
	 */
	public function getSort()
	{
		return $this->Sort;
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
	 * Set IncludeReviewsSummary
	 * @param string IncludeReviewsSummary
	 * @return string
	 */
	public function setIncludeReviewsSummary($_IncludeReviewsSummary)
	{
		return ($this->IncludeReviewsSummary = $_IncludeReviewsSummary);
	}
	/**
	 * Get IncludeReviewsSummary
	 * @return string
	 */
	public function getIncludeReviewsSummary()
	{
		return $this->IncludeReviewsSummary;
	}
	/**
	 * Set TruncateReviewsAt
	 * @param nonNegativeInteger TruncateReviewsAt
	 * @return nonNegativeInteger
	 */
	public function setTruncateReviewsAt($_TruncateReviewsAt)
	{
		return ($this->TruncateReviewsAt = $_TruncateReviewsAt);
	}
	/**
	 * Get TruncateReviewsAt
	 * @return nonNegativeInteger
	 */
	public function getTruncateReviewsAt()
	{
		return $this->TruncateReviewsAt;
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