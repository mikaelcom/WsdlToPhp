<?php
/**
 * Class file for AmazonEc2TypeInstanceStatusEventType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStatusEventType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStatusEventType extends AmazonEc2WsdlClass
{
	/**
	 * The code
	 * @var string
	 */
	public $code;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The notBefore
	 * @var dateTime
	 */
	public $notBefore;
	/**
	 * The notAfter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $notAfter;
	/**
	 * Constructor
	 * @param string code
	 * @param string description
	 * @param dateTime notBefore
	 * @param dateTime notAfter
	 * @return AmazonEc2TypeInstanceStatusEventType
	 */
	public function __construct($_code = null,$_description = null,$_notBefore = null,$_notAfter = null)
	{
		parent::__construct(array('code'=>$_code,'description'=>$_description,'notBefore'=>$_notBefore,'notAfter'=>$_notAfter));
	}
	/**
	 * Set code
	 * @param string code
	 * @return string
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set notBefore
	 * @param dateTime notBefore
	 * @return dateTime
	 */
	public function setNotBefore($_notBefore)
	{
		return ($this->notBefore = $_notBefore);
	}
	/**
	 * Get notBefore
	 * @return dateTime
	 */
	public function getNotBefore()
	{
		return $this->notBefore;
	}
	/**
	 * Set notAfter
	 * @param dateTime notAfter
	 * @return dateTime
	 */
	public function setNotAfter($_notAfter)
	{
		return ($this->notAfter = $_notAfter);
	}
	/**
	 * Get notAfter
	 * @return dateTime
	 */
	public function getNotAfter()
	{
		return $this->notAfter;
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