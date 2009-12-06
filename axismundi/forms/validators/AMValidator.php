<?php
/**
 *    AxisMundi
 * 
 *    Copyright (C) 2009 Adam Venturella
 *
 *    LICENSE:
 *
 *    Licensed under the Apache License, Version 2.0 (the "License"); you may not
 *    use this file except in compliance with the License.  You may obtain a copy
 *    of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 *    This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 *    without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR 
 *    PURPOSE. See the License for the specific language governing permissions and
 *    limitations under the License.
 *
 *    Author: Adam Venturella - aventurella@gmail.com
 *
 *    @package forms
 *    @subpackage validators
 *    @author Adam Venturella <aventurella@gmail.com>
 *    @copyright Copyright (C) 2009 Adam Venturella
 *    @license http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 *
 **/
abstract class AMValidator
{
	const kRequired = true;
	const kOptional = false;
	
	public $isRequired;
	public $key;
	public $message;
	public $form;
	public $isValid;
	
	protected $shouldRequire;
	
	protected function updateRequiredFlag($value)
	{
		if(strlen($value) > 0 && $this->shouldRequire)
		{
			$this->isRequired = AMValidator::kRequired;
		}
		else
		{
			$this->isRequired = $this->shouldRequire ? AMValidator::kOptional : AMValidator::kRequired;
		}
	}
	
	abstract public function validate();
}
?>