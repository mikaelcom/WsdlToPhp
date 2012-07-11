<?php
/**
 * Class file for SPSitedataTypeGetListResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetListResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetListResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetListResult
	 * @var unsignedInt
	 */
	public $GetListResult;
	/**
	 * The sListMetadata
	 * @var SPSitedataType_sListMetadata
	 */
	public $sListMetadata;
	/**
	 * The vProperties
	 * @var SPSitedataTypeArrayOf_sProperty
	 */
	public $vProperties;
	/**
	 * Constructor
	 * @param unsignedInt GetListResult
	 * @param SPSitedataType_sListMetadata sListMetadata
	 * @param SPSitedataTypeArrayOf_sProperty vProperties
	 * @return SPSitedataTypeGetListResponse
	 */
	public function __construct($_GetListResult = null,$_sListMetadata = null,$_vProperties = null)
	{
		parent::__construct(array('GetListResult'=>$_GetListResult,'sListMetadata'=>$_sListMetadata,'vProperties'=>new SPSitedataTypeArrayOf_sProperty($_vProperties)));
	}
	/**
	 * Set GetListResult
	 * @param unsignedInt GetListResult
	 * @return unsignedInt
	 */
	public function setGetListResult($_GetListResult)
	{
		return ($this->GetListResult = $_GetListResult);
	}
	/**
	 * Get GetListResult
	 * @return unsignedInt
	 */
	public function getGetListResult()
	{
		return $this->GetListResult;
	}
	/**
	 * Set sListMetadata
	 * @param _sListMetadata sListMetadata
	 * @return _sListMetadata
	 */
	public function setSListMetadata($_sListMetadata)
	{
		return ($this->sListMetadata = $_sListMetadata);
	}
	/**
	 * Get sListMetadata
	 * @return SPSitedataType_sListMetadata
	 */
	public function getSListMetadata()
	{
		return $this->sListMetadata;
	}
	/**
	 * Set vProperties
	 * @param ArrayOf_sProperty vProperties
	 * @return ArrayOf_sProperty
	 */
	public function setVProperties($_vProperties)
	{
		return ($this->vProperties = $_vProperties);
	}
	/**
	 * Get vProperties
	 * @return SPSitedataTypeArrayOf_sProperty
	 */
	public function getVProperties()
	{
		return $this->vProperties;
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