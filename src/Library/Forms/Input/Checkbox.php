<?php
/*
Gibbon, Flexible & Open School System
Copyright (C) 2010, Ross Parker

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

namespace Library\Forms\Input;

use \Library\Forms\Element as Element;

/**
 * Checkbox
 *
 * @version	v14
 * @since	v14
 */
class Checkbox extends Element {

	protected $description;

	public function description($value = '') {
		$this->description = $value;
		return $this;
	}

	public function checked($value) {
		$this->value = $value;
		return $this;
	}

	protected function getIsChecked($value) {
		return (!empty($value) && ($value == 1 || $value == true || $value == "1") )? 'checked' : '';
	}

	protected function getElement() {
		$output = '';

		$output .= '<label title="'.$this->name.'" for="'.$this->name.'">'.__($this->description).'</label> ';
		$output .= '<input type="checkbox" class="'.$this->class.'" id="'.$this->name.'" name="'.$this->name.'" '.$this->getIsChecked($this->value).'>';

		return $output;
	}
}