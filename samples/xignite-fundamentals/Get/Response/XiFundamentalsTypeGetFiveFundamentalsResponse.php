<?php
/**
 * Class file for XiFundamentalsTypeGetFiveFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFiveFundamentalsResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFiveFundamentalsResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetFiveFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeMultiFundamental
	 */
	public $GetFiveFundamentalsResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeMultiFundamental GetFiveFundamentalsResult
	 * @return XiFundamentalsTypeGetFiveFundamentalsResponse
	 */
	public function __construct($_GetFiveFundamentalsResult = null)
	{
		parent::__construct(array('GetFiveFundamentalsResult'=>$_GetFiveFundamentalsResult));
	}
	/**
	 * Set GetFiveFundamentalsResult
	 * @param MultiFundamental GetFiveFundamentalsResult
	 * @return MultiFundamental
	 */
	public function setGetFiveFundamentalsResult($_GetFiveFundamentalsResult)
	{
		return ($this->GetFiveFundamentalsResult = $_GetFiveFundamentalsResult);
	}
	/**
	 * Get GetFiveFundamentalsResult
	 * @return XiFundamentalsTypeMultiFundamental
	 */
	public function getGetFiveFundamentalsResult()
	{
		return $this->GetFiveFundamentalsResult;
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