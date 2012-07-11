<?php
/**
 * Class file for AmazonECommerceServiceTypeSimilarityLookupRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSimilarityLookupRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSimilarityLookupRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Condition
	 * @var Condition
	 */
	public $Condition;
	/**
	 * The ItemId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ItemId;
	/**
	 * The MerchantId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MerchantId;
	/**
	 * The ResponseGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * The SimilarityType
	 * @var SimilarityType
	 */
	public $SimilarityType;
	/**
	 * Constructor
	 * @param Condition Condition
	 * @param string ItemId
	 * @param string MerchantId
	 * @param string ResponseGroup
	 * @param SimilarityType SimilarityType
	 * @return AmazonECommerceServiceTypeSimilarityLookupRequest
	 */
	public function __construct($_Condition = null,$_ItemId = null,$_MerchantId = null,$_ResponseGroup = null,$_SimilarityType = null)
	{
		parent::__construct(array('Condition'=>$_Condition,'ItemId'=>$_ItemId,'MerchantId'=>$_MerchantId,'ResponseGroup'=>$_ResponseGroup,'SimilarityType'=>$_SimilarityType));
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
	 * Set SimilarityType
	 * @param SimilarityType SimilarityType
	 * @return SimilarityType
	 */
	public function setSimilarityType($_SimilarityType)
	{
		return ($this->SimilarityType = $_SimilarityType);
	}
	/**
	 * Get SimilarityType
	 * @return SimilarityType
	 */
	public function getSimilarityType()
	{
		return $this->SimilarityType;
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