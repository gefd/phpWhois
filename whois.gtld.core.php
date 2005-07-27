<?php

/*
  Whois2.php	PHP classes to conduct whois queries
  
  Copyright (C)1999,2000 easyDNS Technologies Inc. & Mark Jeftovic
  
  Maintained by Mark Jeftovic <markjr@easydns.com>          
  
  For the most recent version of this package: 
  
  http://www.easydns.com/~markjr/whois2/
  
  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.
  
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  
  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/* core.whois	1.0	mark jeftovic	1999/12/06	*/
/* Adapted from netsol.whois by Denny Reiter 2000/12/12	*/
/* core.whois   2.0     david@ols.es 2003/02/26 */

require_once('whois.parser.php');

if(!defined("__CORE_HANDLER__")) define("__CORE_HANDLER__",1);

class core_handler {

	function parse ($data_str,$query) {

		$items = array( "domain.handle" => "Domain ID:",
				"domain.name" => "Domain Name:",
				"domain.created" => "Creation Date:",
				"domain.expires" => "Expiration Date:",
				"domain.changed" => "Last Modification Date:",
				"domain.sponsor" => "Sponsoring Registrar:",
				"domain.nserver." => "Name Server:",
				"owner.organization" => "Registrant Organization:",
				"owner.name" => "Registrant Name:",
				"owner.address.street" => "Registrant Address:",
				"owner.address.street2" => "Registrant Address 2:",
				"owner.address.city" => "Registrant City:",
				"owner.address.state" => "Registrant State/Province:",
				"owner.address.pcode" => "Registrant Postal Code:",
				"owner.address.country" => "Registrant Country:",
				"owner.phone" => "Registrant Phone Number:",
				"owner.fax" => "Registrant Fax Number:",
				"owner.email" => "Registrant Email:",
				"admin.handle" => "Admin ID:",
				"admin.organization" => "Admin Organization:",
                                "admin.name" => "Admin Name:",
                                "admin.address.street" => "Admin Address:",
                                "admin.address.street2" => "Admin Address 2:",
                                "admin.address.city" => "Admin City:",
                                "admin.address.state" => "Admin State/Province:",
                                "admin.address.pcode" => "Admin Postal Code:",
                                "admin.address.country" => "Admin Country:",
                                "admin.phone" => "Admin Phone Number:",
                                "admin.fax" => "Admin Fax Number:",
                                "admin.email" => "Admin Email:",
				"tech.handle" => "Tech ID:",
                                "tech.organization" => "Tech Organization:",
                                "tech.name" => "Tech Name:",
                                "tech.address.street" => "Tech Address:",
                                "tech.address.street2" => "Tech Address 2:",
                                "tech.address.city" => "Tech City:",
                                "tech.address.state" => "Tech State/Province:",
                                "tech.address.pcode" => "Tech Postal Code:",
                                "tech.address.country" => "Tech Country:",
                                "tech.phone" => "Tech Phone Number:",
                                "tech.fax" => "Tech Fax Number:",
                                "tech.email" => "Tech Email:",
				"zone.handle" => "Zone ID:",
                                "zone.organization" => "Zone Organization:",
                                "zone.name" => "Zone Name:",
                                "zone.address.street" => "Zone Address:",
                                "zone.address.street2" => "Zone Address 2:",
                                "zone.address.city" => "Zone City:",
                                "zone.address.state" => "Zone State/Province:",
                                "zone.address.pcode" => "Zone Postal Code:",
                                "zone.address.country" => "Zone Country:",
                                "zone.phone" => "Zone Phone Number:",
                                "zone.fax" => "Zone Fax Number:",
                                "zone.email" => "Zone Email:"
			      );

		return generic_parser_b($data_str,$items);
	}

}

?>
