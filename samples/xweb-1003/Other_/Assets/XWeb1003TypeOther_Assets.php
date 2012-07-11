<?php
/**
 * Class file for XWeb1003TypeOther_Assets
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeOther_Assets
 * @date 09/07/2012
 */
class XWeb1003TypeOther_Assets extends XWeb1003WsdlClass
{
	/**
	 * The Asset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeAssetType
	 */
	public $Asset;
	/**
	 * Constructor
	 * @param XWeb1003TypeAssetType Asset
	 * @return XWeb1003TypeOther_Assets
	 */
	public function __construct($_Asset = null)
	{
		parent::__construct(array('Asset'=>$_Asset));
	}
	/**
	 * Set Asset
	 * @param AssetType Asset
	 * @return AssetType
	 */
	public function setAsset($_Asset)
	{
		return ($this->Asset = $_Asset);
	}
	/**
	 * Get Asset
	 * @return XWeb1003TypeAssetType
	 */
	public function getAsset()
	{
		return $this->Asset;
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