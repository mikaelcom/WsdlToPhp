<?php
/**
 * Class file for ScienceGovSearchTypeQuery
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeQuery
 * @date 13/10/2012
 */
class ScienceGovSearchTypeQuery extends ScienceGovSearchWsdlClass
{
	/**
	 * The fields
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 1
	 * @var ScienceGovSearchTypeField
	 */
	public $fields;
	/**
	 * The collectionCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $collectionCodes;
	/**
	 * The collectionParameters
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeCollectionParameter
	 */
	public $collectionParameters;
	/**
	 * The connectorParameters
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeCollectionParameter
	 */
	public $connectorParameters;
	/**
	 * The fieldOp
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeBooleanType
	 */
	public $fieldOp;
	/**
	 * The queryId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $queryId;
	/**
	 * The preferredLanguage
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $preferredLanguage;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeField fields
	 * @param string collectionCodes
	 * @param ScienceGovSearchTypeCollectionParameter collectionParameters
	 * @param ScienceGovSearchTypeCollectionParameter connectorParameters
	 * @param ScienceGovSearchTypeBooleanType fieldOp
	 * @param string queryId
	 * @param string preferredLanguage
	 * @return ScienceGovSearchTypeQuery
	 */
	public function __construct($_fields,$_collectionCodes = null,$_collectionParameters = null,$_connectorParameters = null,$_fieldOp = null,$_queryId = null,$_preferredLanguage = null)
	{
		parent::__construct(array('fields'=>$_fields,'collectionCodes'=>$_collectionCodes,'collectionParameters'=>$_collectionParameters,'connectorParameters'=>$_connectorParameters,'fieldOp'=>$_fieldOp,'queryId'=>$_queryId,'preferredLanguage'=>$_preferredLanguage));
	}
	/**
	 * Set fields
	 * @param Field fields
	 * @return Field
	 */
	public function setFields($_fields)
	{
		return ($this->fields = $_fields);
	}
	/**
	 * Get fields
	 * @return ScienceGovSearchTypeField
	 */
	public function getFields()
	{
		return $this->fields;
	}
	/**
	 * Set collectionCodes
	 * @param string collectionCodes
	 * @return string
	 */
	public function setCollectionCodes($_collectionCodes)
	{
		return ($this->collectionCodes = $_collectionCodes);
	}
	/**
	 * Get collectionCodes
	 * @return string
	 */
	public function getCollectionCodes()
	{
		return $this->collectionCodes;
	}
	/**
	 * Set collectionParameters
	 * @param CollectionParameter collectionParameters
	 * @return CollectionParameter
	 */
	public function setCollectionParameters($_collectionParameters)
	{
		return ($this->collectionParameters = $_collectionParameters);
	}
	/**
	 * Get collectionParameters
	 * @return ScienceGovSearchTypeCollectionParameter
	 */
	public function getCollectionParameters()
	{
		return $this->collectionParameters;
	}
	/**
	 * Set connectorParameters
	 * @param CollectionParameter connectorParameters
	 * @return CollectionParameter
	 */
	public function setConnectorParameters($_connectorParameters)
	{
		return ($this->connectorParameters = $_connectorParameters);
	}
	/**
	 * Get connectorParameters
	 * @return ScienceGovSearchTypeCollectionParameter
	 */
	public function getConnectorParameters()
	{
		return $this->connectorParameters;
	}
	/**
	 * Set fieldOp
	 * @param BooleanType fieldOp
	 * @return BooleanType
	 */
	public function setFieldOp($_fieldOp)
	{
		return ($this->fieldOp = ScienceGovSearchTypeBooleanType::valueIsValid($_fieldOp)?$_fieldOp:null);
	}
	/**
	 * Get fieldOp
	 * @return ScienceGovSearchTypeBooleanType
	 */
	public function getFieldOp()
	{
		return $this->fieldOp;
	}
	/**
	 * Set queryId
	 * @param string queryId
	 * @return string
	 */
	public function setQueryId($_queryId)
	{
		return ($this->queryId = $_queryId);
	}
	/**
	 * Get queryId
	 * @return string
	 */
	public function getQueryId()
	{
		return $this->queryId;
	}
	/**
	 * Set preferredLanguage
	 * @param string preferredLanguage
	 * @return string
	 */
	public function setPreferredLanguage($_preferredLanguage)
	{
		return ($this->preferredLanguage = $_preferredLanguage);
	}
	/**
	 * Get preferredLanguage
	 * @return string
	 */
	public function getPreferredLanguage()
	{
		return $this->preferredLanguage;
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