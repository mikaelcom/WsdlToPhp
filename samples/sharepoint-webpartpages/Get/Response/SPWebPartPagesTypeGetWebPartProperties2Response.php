<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartProperties2Response
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartProperties2Response
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartProperties2Response extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPartProperties2Result
	 * @var SPWebPartPagesTypeGetWebPartProperties2Result
	 */
	public $GetWebPartProperties2Result;
	/**
	 * Constructor
	 * @param SPWebPartPagesTypeGetWebPartProperties2Result GetWebPartProperties2Result
	 * @return SPWebPartPagesTypeGetWebPartProperties2Response
	 */
	public function __construct($_GetWebPartProperties2Result = null)
	{
		parent::__construct(array('GetWebPartProperties2Result'=>$_GetWebPartProperties2Result));
	}
	/**
	 * Set GetWebPartProperties2Result
	 * @param GetWebPartProperties2Result GetWebPartProperties2Result
	 * @return GetWebPartProperties2Result
	 */
	public function setGetWebPartProperties2Result($_GetWebPartProperties2Result)
	{
		return ($this->GetWebPartProperties2Result = $_GetWebPartProperties2Result);
	}
	/**
	 * Get GetWebPartProperties2Result
	 * @return SPWebPartPagesTypeGetWebPartProperties2Result
	 */
	public function getGetWebPartProperties2Result()
	{
		return $this->GetWebPartProperties2Result;
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