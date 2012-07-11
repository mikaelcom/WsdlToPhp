<?php
/**
 * Class file for SPDocumentWkTypeRemoveDwsUserResponse
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeRemoveDwsUserResponse
 * @date 06/07/2012
 */
class SPDocumentWkTypeRemoveDwsUserResponse extends SPDocumentWkWsdlClass
{
	/**
	 * The RemoveDwsUserResult
	 * @var string
	 */
	public $RemoveDwsUserResult;
	/**
	 * Constructor
	 * @param string RemoveDwsUserResult
	 * @return SPDocumentWkTypeRemoveDwsUserResponse
	 */
	public function __construct($_RemoveDwsUserResult = null)
	{
		parent::__construct(array('RemoveDwsUserResult'=>$_RemoveDwsUserResult));
	}
	/**
	 * Set RemoveDwsUserResult
	 * @param string RemoveDwsUserResult
	 * @return string
	 */
	public function setRemoveDwsUserResult($_RemoveDwsUserResult)
	{
		return ($this->RemoveDwsUserResult = $_RemoveDwsUserResult);
	}
	/**
	 * Get RemoveDwsUserResult
	 * @return string
	 */
	public function getRemoveDwsUserResult()
	{
		return $this->RemoveDwsUserResult;
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