<?php
/**
 * Class file for AmazonSimpleDBTypeSelectResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeSelectResponse
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeSelectResponse extends AmazonSimpleDBWsdlClass
{
	/**
	 * The SelectResult
	 * @var AmazonSimpleDBTypeSelectResult
	 */
	public $SelectResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonSimpleDBTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonSimpleDBTypeSelectResult SelectResult
	 * @param AmazonSimpleDBTypeResponseMetadata ResponseMetadata
	 * @return AmazonSimpleDBTypeSelectResponse
	 */
	public function __construct($_SelectResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SelectResult'=>$_SelectResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SelectResult
	 * @param SelectResult SelectResult
	 * @return SelectResult
	 */
	public function setSelectResult($_SelectResult)
	{
		return ($this->SelectResult = $_SelectResult);
	}
	/**
	 * Get SelectResult
	 * @return AmazonSimpleDBTypeSelectResult
	 */
	public function getSelectResult()
	{
		return $this->SelectResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonSimpleDBTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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