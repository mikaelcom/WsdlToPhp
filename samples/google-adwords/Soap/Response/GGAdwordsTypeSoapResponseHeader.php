<?php
/**
 * Class file for GGAdwordsTypeSoapResponseHeader
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSoapResponseHeader
 * Documentation : Defines the elements within the header of a SOAP response.
 * @date 03/07/2012
 */
class GGAdwordsTypeSoapResponseHeader extends GGAdwordsWsdlClass
{
	/**
	 * The requestId
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Unique id that identifies this request. If developers have any support issues, sending us this id will enable us to find their request more easily.
	 * @var string
	 */
	public $requestId;
	/**
	 * The serviceName
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the service being invoked.
	 * @var string
	 */
	public $serviceName;
	/**
	 * The methodName
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the method being invoked.
	 * @var string
	 */
	public $methodName;
	/**
	 * The operations
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Number of operations performed for this SOAP request.
	 * @var long
	 */
	public $operations;
	/**
	 * The responseTime
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Elapsed time in milliseconds between the AdWords API receiving the request and sending the response.
	 * @var long
	 */
	public $responseTime;
	/**
	 * The units
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of API units the SOAP request used.
	 * @var long
	 */
	public $units;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string serviceName
	 * @param string methodName
	 * @param long operations
	 * @param long responseTime
	 * @param long units
	 * @return GGAdwordsTypeSoapResponseHeader
	 */
	public function __construct($_requestId = null,$_serviceName = null,$_methodName = null,$_operations = null,$_responseTime = null,$_units = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'serviceName'=>$_serviceName,'methodName'=>$_methodName,'operations'=>$_operations,'responseTime'=>$_responseTime,'units'=>$_units));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set serviceName
	 * @param string serviceName
	 * @return string
	 */
	public function setServiceName($_serviceName)
	{
		return ($this->serviceName = $_serviceName);
	}
	/**
	 * Get serviceName
	 * @return string
	 */
	public function getServiceName()
	{
		return $this->serviceName;
	}
	/**
	 * Set methodName
	 * @param string methodName
	 * @return string
	 */
	public function setMethodName($_methodName)
	{
		return ($this->methodName = $_methodName);
	}
	/**
	 * Get methodName
	 * @return string
	 */
	public function getMethodName()
	{
		return $this->methodName;
	}
	/**
	 * Set operations
	 * @param long operations
	 * @return long
	 */
	public function setOperations($_operations)
	{
		return ($this->operations = $_operations);
	}
	/**
	 * Get operations
	 * @return long
	 */
	public function getOperations()
	{
		return $this->operations;
	}
	/**
	 * Set responseTime
	 * @param long responseTime
	 * @return long
	 */
	public function setResponseTime($_responseTime)
	{
		return ($this->responseTime = $_responseTime);
	}
	/**
	 * Get responseTime
	 * @return long
	 */
	public function getResponseTime()
	{
		return $this->responseTime;
	}
	/**
	 * Set units
	 * @param long units
	 * @return long
	 */
	public function setUnits($_units)
	{
		return ($this->units = $_units);
	}
	/**
	 * Get units
	 * @return long
	 */
	public function getUnits()
	{
		return $this->units;
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