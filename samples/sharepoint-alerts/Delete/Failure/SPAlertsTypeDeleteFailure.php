<?php
/**
 * Class file for SPAlertsTypeDeleteFailure
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeDeleteFailure
 * @date 06/07/2012
 */
class SPAlertsTypeDeleteFailure extends SPAlertsWsdlClass
{
	/**
	 * The ID
	 * @var string
	 */
	public $ID;
	/**
	 * The Error
	 * @var ErrorType
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string ID
	 * @param ErrorType Error
	 * @return SPAlertsTypeDeleteFailure
	 */
	public function __construct($_ID = null,$_Error = null)
	{
		parent::__construct(array('ID'=>$_ID,'Error'=>$_Error));
	}
	/**
	 * Set ID
	 * @param string ID
	 * @return string
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return string
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set Error
	 * @param ErrorType Error
	 * @return ErrorType
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return ErrorType
	 */
	public function getError()
	{
		return $this->Error;
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