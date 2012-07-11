<?php
/**
 * Class file for SPSitedataTypeEnumerateFolderResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeEnumerateFolderResponse
 * @date 06/07/2012
 */
class SPSitedataTypeEnumerateFolderResponse extends SPSitedataWsdlClass
{
	/**
	 * The EnumerateFolderResult
	 * @var unsignedInt
	 */
	public $EnumerateFolderResult;
	/**
	 * The vUrls
	 * @var SPSitedataTypeArrayOf_sFPUrl
	 */
	public $vUrls;
	/**
	 * Constructor
	 * @param unsignedInt EnumerateFolderResult
	 * @param SPSitedataTypeArrayOf_sFPUrl vUrls
	 * @return SPSitedataTypeEnumerateFolderResponse
	 */
	public function __construct($_EnumerateFolderResult = null,$_vUrls = null)
	{
		parent::__construct(array('EnumerateFolderResult'=>$_EnumerateFolderResult,'vUrls'=>new SPSitedataTypeArrayOf_sFPUrl($_vUrls)));
	}
	/**
	 * Set EnumerateFolderResult
	 * @param unsignedInt EnumerateFolderResult
	 * @return unsignedInt
	 */
	public function setEnumerateFolderResult($_EnumerateFolderResult)
	{
		return ($this->EnumerateFolderResult = $_EnumerateFolderResult);
	}
	/**
	 * Get EnumerateFolderResult
	 * @return unsignedInt
	 */
	public function getEnumerateFolderResult()
	{
		return $this->EnumerateFolderResult;
	}
	/**
	 * Set vUrls
	 * @param ArrayOf_sFPUrl vUrls
	 * @return ArrayOf_sFPUrl
	 */
	public function setVUrls($_vUrls)
	{
		return ($this->vUrls = $_vUrls);
	}
	/**
	 * Get vUrls
	 * @return SPSitedataTypeArrayOf_sFPUrl
	 */
	public function getVUrls()
	{
		return $this->vUrls;
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