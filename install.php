<?php

/**
 * This function is called on installation and is used to create database schema for the plugin
 */
function extension_install_driverslist()
{
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("CREATE TABLE IF NOT EXISTS `driverslist` (
                              `ID` INT(11) NOT NULL AUTO_INCREMENT,
                              `HARDWARE_ID` INT(11) NOT NULL,
                              `CATEGORY` VARCHAR(255) DEFAULT NULL,
                              `DESCRIPTION` VARCHAR(255) DEFAULT NULL,
                              `NAME` VARCHAR(255) DEFAULT NULL,
                              `PROVIDERNAME` VARCHAR(255) DEFAULT NULL,
                              `VERSION` VARCHAR(255) DEFAULT NULL,
                              `DATE` VARCHAR(255) DEFAULT NULL,
                              `INFNAME` VARCHAR(255) DEFAULT NULL,
                              `FRIENDLYNAME` VARCHAR(255) DEFAULT NULL,
                              `SIGNED` VARCHAR(255) DEFAULT NULL,
                              `DEVICEID` VARCHAR(255) DEFAULT NULL,
                              PRIMARY KEY  (`ID`,`HARDWARE_ID`)
                            ) ENGINE=INNODB ;");
}

/**
 * This function is called on removal and is used to destroy database schema for the plugin
 */
function extension_delete_driverslist()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE `driverslist`;");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_driverslist()
{

}
