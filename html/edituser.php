<?php
/**
 *
 * @package Legacy
 * @version $Id: edituser.php,v 1.3 2008/09/25 15:10:27 kilica Exp $
 * @copyright Copyright 2005-2007 XOOPS Cube Project  <https://github.com/xoopscube/legacy>
 * @license https://github.com/xoopscube/legacy/blob/master/docs/GPL_V2.txt GNU GENERAL PUBLIC LICENSE Version 2
 *
 */
/*------------------------------------------------------------------------*
 |  This file was entirely rewritten by the XOOPS Cube Legacy project for |
 |   keeping compatibility with XOOPS 2.0.x <https://www.xoops.org>        |
 *------------------------------------------------------------------------*/

require_once "mainfile.php";

XCube_DelegateUtils::call("Legacypage.Edituser.Access");
