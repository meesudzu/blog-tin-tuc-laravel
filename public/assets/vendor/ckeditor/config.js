/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.removePlugins = 'image';
    config.entities_latin = false;
    config.basicEntities = false;
    config.entities = false;
    config.entities_greek = false;
    config.forceSimpleAmpersand = false;
    config.entities_processNumerical = true;
    config.htmlEncodeOutput = false;
};
