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
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Veritabanı oluşturulamıyor.</p>
<p>Belirtilen veritabanı yok ve verilen kullanıcının veritabanı oluşturmak için izni yok.</p>
<p>Site yöneticisi veritabanı yapılandırmasını doğrulamalı.</p>';
$string['cannotcreatelangdir'] = 'Dil dizini oluşturulamıyor';
$string['cannotcreatetempdir'] = 'Geçici dizin oluşturulamıyor';
$string['cannotdownloadcomponents'] = 'Bileşenler indirilemedi';
$string['cannotdownloadzipfile'] = 'ZIP dosyası indirilemedi';
$string['cannotfindcomponent'] = 'Bileşen bulunamadı';
$string['cannotsavemd5file'] = 'md5 dosyası kaydedilemedi';
$string['cannotsavezipfile'] = 'ZIP dosyası kaydedilemedi';
$string['cannotunzipfile'] = 'Dosya arşivi açılamadı';
$string['componentisuptodate'] = 'Bileşen güncel';
$string['dmlexceptiononinstall'] = '<p>Bir veritabanı hatası oluştu [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'İndirilen dosya kontrolü hatası';
$string['invalidmd5'] = 'Kontrol değişkeni yanlış - yeniden deneyin';
$string['missingrequiredfield'] = 'Gerekli alanlardan bazıları eksik';
$string['remotedownloaderror'] = '<p>Bileşeni sunucunuza indirirken hata oluştu, lütfen proxy ayarlarını kontrol edin. PHP cURL eklentisi şiddetle tavsiye edilir.</p>
<p><a href="{$a->url}">{$a->url}</a> dosyasını kendiniz indirmeli ve indirdiğiniz dosyayı sunucunuzundaki "{$a->dest}" klasörüne kaydetmeli ve zip arşivini açmalısınız.
</p>';
$string['wrongdestpath'] = 'Yanlış hedef yolu';
$string['wrongsourcebase'] = 'Yanlış kaynak URL tabanı';
$string['wrongzipfilename'] = 'Yanlış ZIP dosya adı';
