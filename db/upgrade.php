<?php
// This file is part of Moodle-botr-Filter
//
// Moodle-botr-Filter is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle-botr-Filter is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle-botr-Filter.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Upgrade function for component 'filter_botr'
 *
 * @package   filter_botr
 * @copyright 2012 Guido Hornig, actxcellence.de
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_filter_botr_upgrade($oldversion) {
    global $CFG, $DB, $OUTPUT;

    return true;
}
