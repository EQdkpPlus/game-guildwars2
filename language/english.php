<?php
/*	Project:	EQdkp-Plus
 *	Package:	Guildwars 2 game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Elementalist',
		2	=> 'Warrior',
		3	=> 'Ranger',
		4	=> 'Necromancer',
		5	=> 'Guardian',
		6	=> 'Thief',
		7	=> 'Mesmer',
		8	=> 'Engineer',
		9	=> 'Revenant',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Sylvari',
		2	=> 'Norn',
		3	=> 'Charr',
		4	=> 'Asura',
		5	=> 'Human',
	),
	'roles' => array(
		1 => 'Healer',
		2 => 'Tank',
		3 => 'Range-DD',
		4 => 'Melee',
	),
	'lang' => array(
		'guildwars2'				=> 'Guildwars 2',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Guildwars 2 Settings',
	),
);
?>
