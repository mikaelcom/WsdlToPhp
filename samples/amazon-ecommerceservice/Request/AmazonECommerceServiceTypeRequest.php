<?php
/**
 * Class file for AmazonECommerceServiceTypeRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The IsValid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IsValid;
	/**
	 * The BrowseNodeLookupRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeBrowseNodeLookupRequest
	 */
	public $BrowseNodeLookupRequest;
	/**
	 * The ItemSearchRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeItemSearchRequest
	 */
	public $ItemSearchRequest;
	/**
	 * The ItemLookupRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeItemLookupRequest
	 */
	public $ItemLookupRequest;
	/**
	 * The SimilarityLookupRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeSimilarityLookupRequest
	 */
	public $SimilarityLookupRequest;
	/**
	 * The CartGetRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeCartGetRequest
	 */
	public $CartGetRequest;
	/**
	 * The CartAddRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeCartAddRequest
	 */
	public $CartAddRequest;
	/**
	 * The CartCreateRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeCartCreateRequest
	 */
	public $CartCreateRequest;
	/**
	 * The CartModifyRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeCartModifyRequest
	 */
	public $CartModifyRequest;
	/**
	 * The CartClearRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypeCartClearRequest
	 */
	public $CartClearRequest;
	/**
	 * The Errors
	 * @var AmazonECommerceServiceTypeErrors
	 */
	public $Errors;
	/**
	 * Constructor
	 * @param string IsValid
	 * @param AmazonECommerceServiceTypeBrowseNodeLookupRequest BrowseNodeLookupRequest
	 * @param AmazonECommerceServiceTypeItemSearchRequest ItemSearchRequest
	 * @param AmazonECommerceServiceTypeItemLookupRequest ItemLookupRequest
	 * @param AmazonECommerceServiceTypeSimilarityLookupRequest SimilarityLookupRequest
	 * @param AmazonECommerceServiceTypeCartGetRequest CartGetRequest
	 * @param AmazonECommerceServiceTypeCartAddRequest CartAddRequest
	 * @param AmazonECommerceServiceTypeCartCreateRequest CartCreateRequest
	 * @param AmazonECommerceServiceTypeCartModifyRequest CartModifyRequest
	 * @param AmazonECommerceServiceTypeCartClearRequest CartClearRequest
	 * @param AmazonECommerceServiceTypeErrors Errors
	 * @return AmazonECommerceServiceTypeRequest
	 */
	public function __construct($_IsValid = null,$_BrowseNodeLookupRequest = null,$_ItemSearchRequest = null,$_ItemLookupRequest = null,$_SimilarityLookupRequest = null,$_CartGetRequest = null,$_CartAddRequest = null,$_CartCreateRequest = null,$_CartModifyRequest = null,$_CartClearRequest = null,$_Errors = null)
	{
		parent::__construct(array('IsValid'=>$_IsValid,'BrowseNodeLookupRequest'=>$_BrowseNodeLookupRequest,'ItemSearchRequest'=>$_ItemSearchRequest,'ItemLookupRequest'=>$_ItemLookupRequest,'SimilarityLookupRequest'=>$_SimilarityLookupRequest,'CartGetRequest'=>$_CartGetRequest,'CartAddRequest'=>$_CartAddRequest,'CartCreateRequest'=>$_CartCreateRequest,'CartModifyRequest'=>$_CartModifyRequest,'CartClearRequest'=>$_CartClearRequest,'Errors'=>$_Errors));
	}
	/**
	 * Set IsValid
	 * @param string IsValid
	 * @return string
	 */
	public function setIsValid($_IsValid)
	{
		return ($this->IsValid = $_IsValid);
	}
	/**
	 * Get IsValid
	 * @return string
	 */
	public function getIsValid()
	{
		return $this->IsValid;
	}
	/**
	 * Set BrowseNodeLookupRequest
	 * @param BrowseNodeLookupRequest BrowseNodeLookupRequest
	 * @return BrowseNodeLookupRequest
	 */
	public function setBrowseNodeLookupRequest($_BrowseNodeLookupRequest)
	{
		return ($this->BrowseNodeLookupRequest = $_BrowseNodeLookupRequest);
	}
	/**
	 * Get BrowseNodeLookupRequest
	 * @return AmazonECommerceServiceTypeBrowseNodeLookupRequest
	 */
	public function getBrowseNodeLookupRequest()
	{
		return $this->BrowseNodeLookupRequest;
	}
	/**
	 * Set ItemSearchRequest
	 * @param ItemSearchRequest ItemSearchRequest
	 * @return ItemSearchRequest
	 */
	public function setItemSearchRequest($_ItemSearchRequest)
	{
		return ($this->ItemSearchRequest = $_ItemSearchRequest);
	}
	/**
	 * Get ItemSearchRequest
	 * @return AmazonECommerceServiceTypeItemSearchRequest
	 */
	public function getItemSearchRequest()
	{
		return $this->ItemSearchRequest;
	}
	/**
	 * Set ItemLookupRequest
	 * @param ItemLookupRequest ItemLookupRequest
	 * @return ItemLookupRequest
	 */
	public function setItemLookupRequest($_ItemLookupRequest)
	{
		return ($this->ItemLookupRequest = $_ItemLookupRequest);
	}
	/**
	 * Get ItemLookupRequest
	 * @return AmazonECommerceServiceTypeItemLookupRequest
	 */
	public function getItemLookupRequest()
	{
		return $this->ItemLookupRequest;
	}
	/**
	 * Set SimilarityLookupRequest
	 * @param SimilarityLookupRequest SimilarityLookupRequest
	 * @return SimilarityLookupRequest
	 */
	public function setSimilarityLookupRequest($_SimilarityLookupRequest)
	{
		return ($this->SimilarityLookupRequest = $_SimilarityLookupRequest);
	}
	/**
	 * Get SimilarityLookupRequest
	 * @return AmazonECommerceServiceTypeSimilarityLookupRequest
	 */
	public function getSimilarityLookupRequest()
	{
		return $this->SimilarityLookupRequest;
	}
	/**
	 * Set CartGetRequest
	 * @param CartGetRequest CartGetRequest
	 * @return CartGetRequest
	 */
	public function setCartGetRequest($_CartGetRequest)
	{
		return ($this->CartGetRequest = $_CartGetRequest);
	}
	/**
	 * Get CartGetRequest
	 * @return AmazonECommerceServiceTypeCartGetRequest
	 */
	public function getCartGetRequest()
	{
		return $this->CartGetRequest;
	}
	/**
	 * Set CartAddRequest
	 * @param CartAddRequest CartAddRequest
	 * @return CartAddRequest
	 */
	public function setCartAddRequest($_CartAddRequest)
	{
		return ($this->CartAddRequest = $_CartAddRequest);
	}
	/**
	 * Get CartAddRequest
	 * @return AmazonECommerceServiceTypeCartAddRequest
	 */
	public function getCartAddRequest()
	{
		return $this->CartAddRequest;
	}
	/**
	 * Set CartCreateRequest
	 * @param CartCreateRequest CartCreateRequest
	 * @return CartCreateRequest
	 */
	public function setCartCreateRequest($_CartCreateRequest)
	{
		return ($this->CartCreateRequest = $_CartCreateRequest);
	}
	/**
	 * Get CartCreateRequest
	 * @return AmazonECommerceServiceTypeCartCreateRequest
	 */
	public function getCartCreateRequest()
	{
		return $this->CartCreateRequest;
	}
	/**
	 * Set CartModifyRequest
	 * @param CartModifyRequest CartModifyRequest
	 * @return CartModifyRequest
	 */
	public function setCartModifyRequest($_CartModifyRequest)
	{
		return ($this->CartModifyRequest = $_CartModifyRequest);
	}
	/**
	 * Get CartModifyRequest
	 * @return AmazonECommerceServiceTypeCartModifyRequest
	 */
	public function getCartModifyRequest()
	{
		return $this->CartModifyRequest;
	}
	/**
	 * Set CartClearRequest
	 * @param CartClearRequest CartClearRequest
	 * @return CartClearRequest
	 */
	public function setCartClearRequest($_CartClearRequest)
	{
		return ($this->CartClearRequest = $_CartClearRequest);
	}
	/**
	 * Get CartClearRequest
	 * @return AmazonECommerceServiceTypeCartClearRequest
	 */
	public function getCartClearRequest()
	{
		return $this->CartClearRequest;
	}
	/**
	 * Set Errors
	 * @param Errors Errors
	 * @return Errors
	 */
	public function setErrors($_Errors)
	{
		return ($this->Errors = $_Errors);
	}
	/**
	 * Get Errors
	 * @return AmazonECommerceServiceTypeErrors
	 */
	public function getErrors()
	{
		return $this->Errors;
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