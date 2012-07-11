<?php
/**
 * Class file for XiFundamentalsTypeGetMultiFundamentalResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetMultiFundamentalResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetMultiFundamentalResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetMultiFundamentalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeMultiFundamental
	 */
	public $GetMultiFundamentalResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeMultiFundamental GetMultiFundamentalResult
	 * @return XiFundamentalsTypeGetMultiFundamentalResponse
	 */
	public function __construct($_GetMultiFundamentalResult = null)
	{
		parent::__construct(array('GetMultiFundamentalResult'=>$_GetMultiFundamentalResult));
	}
	/**
	 * Set GetMultiFundamentalResult
	 * @param MultiFundamental GetMultiFundamentalResult
	 * @return MultiFundamental
	 */
	public function setGetMultiFundamentalResult($_GetMultiFundamentalResult)
	{
		return ($this->GetMultiFundamentalResult = $_GetMultiFundamentalResult);
	}
	/**
	 * Get GetMultiFundamentalResult
	 * @return XiFundamentalsTypeMultiFundamental
	 */
	public function getGetMultiFundamentalResult()
	{
		return $this->GetMultiFundamentalResult;
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