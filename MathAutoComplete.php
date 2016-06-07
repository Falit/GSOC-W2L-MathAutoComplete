<?php 

$wgResourceModules['ext.MathAutoComplete']=array(
	'scripts' => ('ext.MathAutoComplete.js'),
	'localBasePath' =>  _DIR_
	'remoteExtPath' => 'MathAutoComplete'
);
 

// Register Hooks
wgHooks['MathFormulaPostRender'][] = 'autoFillMaths';

function autoFillMaths(OutputPage &$out) {

	// Add as ResourceLoader Module
 	&out->addModules('ext.MathAutoComplete');
	
	return true;
}

?>

