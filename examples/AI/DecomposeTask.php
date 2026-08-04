<?php
/**
 * DecomposeTask — AI-Powered Task Decomposition
 *
 * Demonstrates using Aspose.Cells Cloud AI to decompose a user task
 * description into structured, actionable steps — exported as a spreadsheet.
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DecomposeUserTaskRequest;

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$cellsApi = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Decompose a natural language task into a structured spreadsheet
$response = $cellsApi->decomposeUserTask(
    new DecomposeUserTaskRequest(
        "Develop a web API for a task-splitting feature on the existing system."
    ),
    "decomposeUserTask.xlsx"
);
