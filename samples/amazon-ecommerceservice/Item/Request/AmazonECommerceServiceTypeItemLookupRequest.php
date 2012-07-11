<?php
/**
 * Class file for AmazonECommerceServiceTypeItemLookupRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItemLookupRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItemLookupRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Condition
	 * @var Condition
	 */
	public $Condition;
	/**
	 * The IdType
	 * @var IdType
	 */
	public $IdType;
	/**
	 * The MerchantId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MerchantId;
	/**
	 * The ItemId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ItemId;
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
	 * The VariationPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var positiveIntegerOrAll
	 */
	public $VariationPage;
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
	 * @param Condition Condition
	 * @param IdType IdType
	 * @param string MerchantId
	 * @param string ItemId
	 * @param string ResponseGroup
	 * @param string SearchIndex
	 * @param positiveIntegerOrAll VariationPage
	 * @param positiveIntegerOrAll RelatedItemPage
	 * @param string RelationshipType
	 * @param string IncludeReviewsSummary
	 * @param nonNegativeInteger TruncateReviewsAt
	 * @return AmazonECommerceServiceTypeItemLookupRequest
	 */
	public function __construct($_Condition = null,$_IdType = null,$_MerchantId = null,$_ItemId = null,$_ResponseGroup = null,$_SearchIndex = null,$_VariationPage = null,$_RelatedItemPage = null,$_RelationshipType = null,$_IncludeReviewsSummary = null,$_TruncateReviewsAt = null)
	{
		parent::__construct(array('Condition'=>$_Condition,'IdType'=>$_IdType,'MerchantId'=>$_MerchantId,'ItemId'=>$_ItemId,'ResponseGroup'=>$_ResponseGroup,'SearchIndex'=>$_SearchIndex,'VariationPage'=>$_VariationPage,'RelatedItemPage'=>$_RelatedItemPage,'RelationshipType'=>$_RelationshipType,'IncludeReviewsSummary'=>$_IncludeReviewsSummary,'TruncateReviewsAt'=>$_TruncateReviewsAt));
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
	 * Set IdType
	 * @param IdType IdType
	 * @return IdType
	 */
	public function setIdType($_IdType)
	{
		return ($this->IdType = $_IdType);
	}
	/**
	 * Get IdType
	 * @return IdType
	 */
	public function getIdType()
	{
		return $this->IdType;
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
	 * Set ItemId
	 * @param string ItemId
	 * @return string
	 */
	public function setItemId($_ItemId)
	{
		return ($this->ItemId = $_ItemId);
	}
	/**
	 * Get ItemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
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
	 * Set VariationPage
	 * @param positiveIntegerOrAll VariationPage
	 * @return positiveIntegerOrAll
	 */
	public function setVariationPage($_VariationPage)
	{
		return ($this->VariationPage = $_VariationPage);
	}
	/**
	 * Get VariationPage
	 * @return positiveIntegerOrAll
	 */
	public function getVariationPage()
	{
		return $this->VariationPage;
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