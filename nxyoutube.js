/*
	nx-YouTubefield Plugin
	Version 1.0
	
	Copyright (C) 2017 nx-designs
	
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
	
	THIS LICENSE MIGHT NOT APPLY TO OTHER FILES CONTAINED IN THE SAME PACKAGE.
	
	See COPYRIGHT.txt for more information.
	See LICENSE.txt for more information.
	
	nx-designs
	www.nx-designs.ch
*/
jQuery(document).ready(function(){
	'use strict';
	jQuery('.nx-youtubefieldBox').each(function(){
		var videoID = jQuery(this).attr('data-id'),
			settings = jQuery(this).attr('data-settings'),
			allowlist = jQuery(this).attr('data-allow'),
		 	iframe = '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/' + videoID + '?version=3' + settings + '" frameborder="0" allow=' + allowlist + ' allowfullscreen></iframe>';
		//console.log(videoID);
		jQuery(this).html(iframe);
	});
});
