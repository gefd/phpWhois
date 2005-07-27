<?php

/*
  Whois2.php        PHP classes to conduct whois queries

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

/* aunic.whois 2.1 by David Saez <david@ols.es> update detection schema*/
/* aunic.whois 2.0 by David Saez <david@ols.es> common object model */
/* aunic.whois 1.0 by Edi Wibowo <edi@ausnik-it.com,http://www.ausnik-it.com> */  
/* check with telstra.com.au */

if(!defined("__AU_HANDLER__")) define("__AU_HANDLER__",1);

require_once('whois.parser.php');

class au_handler {
	
	function parse ($data_str) {
		
		$items = array( "domain.name"  => "Domain Name:",
				"domain.changed" => "Last Modified:",
				"domain.sponsor" => "Registrar Name:",
				"domain.status" => "Status:",
				"domain.handle" => "Domain ROID:",
				"owner.organization" => "Registrant:",
				"owner.handle" => "Registrant ID:",
				"owner.email" => "Registrant Email:",
				"owner.name" => "Registrant Contact Name:", 
				"tech.name" => "Tech Name:",
				"tech.email" => "Tech Email:",
				"tech.handle" => "Tech ID:",
				"domain.nserver." => "Name Server:"
				);

		$r["rawdata"] = $data_str["rawdata"];
		$r["regyinfo"] = array("referrer"=>"http://www.aunic.net",
				       "registrar"=>"AU-NIC");
		
		$r['regrinfo'] = generic_parser_b($data_str['rawdata'],$items);
		return $r;
	}
}

?>
