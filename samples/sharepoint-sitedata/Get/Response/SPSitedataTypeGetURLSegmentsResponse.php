<?php
/**
 * Class file for SPSitedataTypeGetURLSegmentsResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetURLSegmentsResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetURLSegmentsResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetURLSegmentsResult
	 * @var boolean
	 */
	public $GetURLSegmentsResult;
	/**
	 * The strWebID
	 * @var string
	 */
	public $strWebID;
	/**
	 * The strBucketID
	 * @var string
	 */
	public $strBucketID;
	/**
	 * The strListID
	 * @var string
	 */
	public $strListID;
	/**
	 * The strItemID
	 * @var string
	 */
	public $strItemID;
	/**
	 * Constructor
	 * @param boolean GetURLSegmentsResult
	 * @param string strWebID
	 * @param string strBucketID
	 * @param string strListID
	 * @param string strItemID
	 * @return SPSitedataTypeGetURLSegmentsResponse
	 */
	public function __construct($_GetURLSegmentsResult = null,$_strWebID = null,$_strBucketID = null,$_strListID = null,$_strItemID = null)
	{
		parent::__construct(array('GetURLSegmentsResult'=>$_GetURLSegmentsResult,'strWebID'=>$_strWebID,'strBucketID'=>$_strBucketID,'strListID'=>$_strListID,'strItemID'=>$_strItemID));
	}
	/**
	 * Set GetURLSegmentsResult
	 * @param boolean GetURLSegmentsResult
	 * @return boolean
	 */
	public function setGetURLSegmentsResult($_GetURLSegmentsResult)
	{
		return ($this->GetURLSegmentsResult = $_GetURLSegmentsResult);
	}
	/**
	 * Get GetURLSegmentsResult
	 * @return boolean
	 */
	public function getGetURLSegmentsResult()
	{
		return $this->GetURLSegmentsResult;
	}
	/**
	 * Set strWebID
	 * @param string strWebID
	 * @return string
	 */
	public function setStrWebID($_strWebID)
	{
		return ($this->strWebID = $_strWebID);
	}
	/**
	 * Get strWebID
	 * @return string
	 */
	public function getStrWebID()
	{
		return $this->strWebID;
	}
	/**
	 * Set strBucketID
	 * @param string strBucketID
	 * @return string
	 */
	public function setStrBucketID($_strBucketID)
	{
		return ($this->strBucketID = $_strBucketID);
	}
	/**
	 * Get strBucketID
	 * @return string
	 */
	public function getStrBucketID()
	{
		return $this->strBucketID;
	}
	/**
	 * Set strListID
	 * @param string strListID
	 * @return string
	 */
	public function setStrListID($_strListID)
	{
		return ($this->strListID = $_strListID);
	}
	/**
	 * Get strListID
	 * @return string
	 */
	public function getStrListID()
	{
		return $this->strListID;
	}
	/**
	 * Set strItemID
	 * @param string strItemID
	 * @return string
	 */
	public function setStrItemID($_strItemID)
	{
		return ($this->strItemID = $_strItemID);
	}
	/**
	 * Get strItemID
	 * @return string
	 */
	public function getStrItemID()
	{
		return $this->strItemID;
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