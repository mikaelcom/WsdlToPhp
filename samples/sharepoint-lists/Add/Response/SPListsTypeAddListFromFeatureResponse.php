<?php
/**
 * Class file for SPListsTypeAddListFromFeatureResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddListFromFeatureResponse
 * @date 07/07/2012
 */
class SPListsTypeAddListFromFeatureResponse extends SPListsWsdlClass
{
	/**
	 * The AddListFromFeatureResult
	 * @var SPListsTypeAddListFromFeatureResult
	 */
	public $AddListFromFeatureResult;
	/**
	 * Constructor
	 * @param SPListsTypeAddListFromFeatureResult AddListFromFeatureResult
	 * @return SPListsTypeAddListFromFeatureResponse
	 */
	public function __construct($_AddListFromFeatureResult = null)
	{
		parent::__construct(array('AddListFromFeatureResult'=>$_AddListFromFeatureResult));
	}
	/**
	 * Set AddListFromFeatureResult
	 * @param AddListFromFeatureResult AddListFromFeatureResult
	 * @return AddListFromFeatureResult
	 */
	public function setAddListFromFeatureResult($_AddListFromFeatureResult)
	{
		return ($this->AddListFromFeatureResult = $_AddListFromFeatureResult);
	}
	/**
	 * Get AddListFromFeatureResult
	 * @return SPListsTypeAddListFromFeatureResult
	 */
	public function getAddListFromFeatureResult()
	{
		return $this->AddListFromFeatureResult;
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