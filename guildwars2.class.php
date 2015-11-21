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

if(!class_exists('guildwars2')) {
	class guildwars2 extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.2.0';
		protected $this_game		= 'guildwars2';
		protected $types			= array('classes', 'races', 'roles');
		protected $classes			= array();
		protected $races			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Sylvari
						2 	=> 'all',		// Norn
						3 	=> 'all',		// Charr
						4 	=> 'all',		// Asura
						5 	=> 'all',		// Human
					),
				),
			),
		);

		public $default_roles = array(
			1	=> array(8,3),
			2	=> array(5,9),
			3	=> array(1,2,4,6,7),
			4	=> array(1,8,5,7,4,2,6,3,9)
		);

		protected $class_colors = array(
			1	=> '#765BBA',
			2	=> '#FCCC12',
			3	=> '#9EB25D',
			4	=> '#188B48',
			5	=> '#1AAED2',
			6	=> '#FCCC12',
			7	=> '#D62ECB',
			8	=> '#A87943',
			9	=> '#ff0000',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function install($install=false){}

		protected function load_filters($langs){
			return array();
		}
	}
}
?>
