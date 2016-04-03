<?php 
	include "../header.php";
	include "../modules/quiz.module";

	$questions = getData(QUESTIONS);
	$responses = getData(RESPONSES);

	$questionResponsesMap = getQuestionResponseHashMap($responses, $questions);

	$playerList = getPlayerIDList($responses);

	$tableHeaders = array(
		QUESTION_TEXT_HEADER => array(
			DATA => QUESTION_TEXT,
			HEADER_CLASS_NAME => CLASS_CELL_TEXT,
			DATA_CLASS_NAME => ''
			)
		);
	foreach ($playerList as $playerId) {
		$tableHeaders[$playerId] = array(
			DATA => $playerId,
			HEADER_CLASS_NAME => CLASS_CELL_TEXT,
			DATA_CLASS_NAME => CLASS_CELL_TEXT
			);
	}

	printTable($questionResponsesMap, $tableHeaders);
	include "../includes/footer.php";
?>
