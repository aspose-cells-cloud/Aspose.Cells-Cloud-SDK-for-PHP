<?php
/**
 * TrimCharacters — Trim Whitespace & Control Characters
 *
 * Demonstrates character-level trimming operations:
 * - Trim whitespace between words (collapse to single space)
 * - Trim trailing spaces and extra line breaks
 * - Apply trimming to specific cell ranges
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\TrimCharacterRequest;

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Trim whitespace between words on range A1:C12
$request = new TrimCharacterRequest();
$request->setSpreadsheet("BookText.xlsx");
$request->setWorksheet("HumanResources");
$request->setRange("A1:C12");
$request->setTrimSpaceBetweenWordTo1("true");
$response = $instance->trimCharacter($request, "out-text1.xlsx");

// Trim whitespace on range J1:J6 (keep trailing spaces)
$request = new TrimCharacterRequest();
$request->setSpreadsheet("BookText.xlsx");
$request->setWorksheet("Text");
$request->setRange("J1:J6");
$request->setTrimTrailing("false");
$request->setTrimSpaceBetweenWordTo1("true");
$response = $instance->trimCharacter($request, "out-text2.xlsx");

// Trim whitespace and remove extra line breaks on cell J7
$request = new TrimCharacterRequest();
$request->setSpreadsheet("BookText.xlsx");
$request->setWorksheet("Text");
$request->setRange("J7:J7");
$request->setTrimTrailing("false");
$request->setTrimSpaceBetweenWordTo1("true");
$request->setRemoveExtraLineBreaks("true");
$response = $instance->trimCharacter($request, "out-text3.xlsx");
