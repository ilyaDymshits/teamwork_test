<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This filter provides for teacher sharing students in teams and make groups
 * Submissions in each team just in activity assign
 *
 * @package    filter_teamwork
 * @copyright 2018 Devlion <info@devlion.co>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_filter_teamwork_uninstall() {
    global $DB;
    $dbman = $DB->get_manager();

    if ($dbman->table_exists('teamwork')) {
        $table = new xmldb_table('teamwork');
        $dbman->drop_table($table);
    }

    if ($dbman->table_exists('teamwork_groups')) {
        $table = new xmldb_table('teamwork_groups');
        $dbman->drop_table($table);
    }

    if ($dbman->table_exists('teamwork_members')) {
        $table = new xmldb_table('teamwork_members');
        $dbman->drop_table($table);
    }

}
