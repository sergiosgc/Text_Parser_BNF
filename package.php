<?php
/**
 * This is the package.xml generator for Text_Parser_BNF
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Text
 * @package    Text_Parser
 * @author     Sergio Carvalho <sergiosgc@php.net>
 * @copyright  2005-2007 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    CVS: $Id: package.php,v 1.37 2007/11/20 20:04:24 farell Exp $
 * @link       http://pear.php.net/package/PEAR_PackageFileManager
 * @since      File available since Release 1.6.0
 */
require_once 'PEAR/PackageFileManager2.php';
PEAR::setErrorHandling(PEAR_ERROR_DIE);

$release_version = '0.2.0';
$release_state   = 'beta';
$api_version     = '0.1.0';
$api_state   = 'alpha';
$release_notes   = '* Initial version';

$packagexml = new PEAR_PackageFileManager2();
$packagexml->setOptions(
    array(
      'packagefile' => 'package.xml',
      'exceptions' => array(
          'ChangeLog' => 'doc',
          'NEWS' => 'doc'),
      'filelistgenerator' => 'file',
      'packagedirectory' => dirname(__FILE__),
      'changelogoldtonew' => false,
      'baseinstalldir' => '/',
      'simpleoutput' => true,
      'dirroles' => array('tests' => 'test'),
      'ignore' => array('package.php', '_MTN/'),
      ));
$packagexml->setPackage('Text_Parser_BNF');
$packagexml->setSummary('Parser class for parsing Backus-Naur form grammars');
$packagexml->setDescription(<<<EOS
Text_Parser_BNF is a parser for grammar descriptions written in Backus-Naur form. Given a description of a grammar, Text_Parser_BNF outputs a Structures_Grammar instance functionally equivalent to the described grammar, and suitable to being fed into Text_Parser_Generator.
EOS
);
$packagexml->addMaintainer('lead', 'sergiosgc', 'Sergio Carvalho', 'sergiosgc@php.net');
$packagexml->setNotes($release_notes);
$packagexml->addIgnore(array('package.php', '*.tgz'));
$packagexml->setPackageType('php');
$packagexml->addRelease();
$packagexml->clearDeps();
$packagexml->setChannel('pear.sergiocarvalho.com');
$packagexml->setLicense('PHP License 3.01', 'http://www.php.net/license/3_01.txt');
$packagexml->setReleaseVersion($release_version);
$packagexml->setAPIVersion($api_version);
$packagexml->setReleaseStability($release_state);
$packagexml->setAPIStability($api_state);
$packagexml->setPhpDep('5.1.0');
$packagexml->setPearinstallerDep('1.5.4');
$packagexml->generateContents();
$packagexml->writePackageFile();
?>
