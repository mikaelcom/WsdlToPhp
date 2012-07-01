WsdlToPhp
=========

Generate PHP classes based on a WSDL

This package allows to programmatically send request to a SOAP service using PHP classes. In order to that, this class generates each class for each request and each request parameters et each request response. Each class is stored in a hierarchical folder/sub-folder. The SOAP client is than abstracted and you only deal with objects representing the WSDL.
It uses eZ Components, ezcPhpGenerator, in order to generate php files.