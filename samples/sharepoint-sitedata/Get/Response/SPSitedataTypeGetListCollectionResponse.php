<?php
/**
 * Class file for SPSitedataTypeGetListCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetListCollectionResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetListCollectionResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetListCollectionResult
	 * @var unsignedInt
	 */
	public $GetListCollectionResult;
	/**
	 * The vLists
	 * @var SPSitedataTypeArrayOf_sList
	 */
	public $vLists;
	/**
	 * Constructor
	 * @param unsignedInt GetListCollectionResult
	 * @param SPSitedataTypeArrayOf_sList vLists
	 * @return SPSitedataTypeGetListCollectionResponse
	 */
	public function __construct($_GetListCollectionResult = null,$_vLists = null)
	{
		parent::__construct(array('GetListCollectionResult'=>$_GetListCollectionResult,'vLists'=>new SPSitedataTypeArrayOf_sList($_vLists)));
	}
	/**
	 * Set GetListCollectionResult
	 * @param unsignedInt GetListCollectionResult
	 * @return unsignedInt
	 */
	public function setGetListCollectionResult($_GetListCollectionResult)
	{
		return ($this->GetListCollectionResult = $_GetListCollectionResult);
	}
	/**
	 * Get GetListCollectionResult
	 * @return unsignedInt
	 */
	public function getGetListCollectionResult()
	{
		return $this->GetListCollectionResult;
	}
	/**
	 * Set vLists
	 * @param ArrayOf_sList vLists
	 * @return ArrayOf_sList
	 */
	public function setVLists($_vLists)
	{
		return ($this->vLists = $_vLists);
	}
	/**
	 * Get vLists
	 * @return SPSitedataTypeArrayOf_sList
	 */
	public function getVLists()
	{
		return $this->vLists;
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