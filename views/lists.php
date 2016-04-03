<?php 
	include "../header.php";
	include "../modules/quiz.module";

	$questions = getData(QUESTIONS);
	$responses = getData(RESPONSES);

	$qlist = getList($questions,$responses, QUESTIONS);


	$questionsTableHeaders = array(
				QUESTION_INDEX_HEADER => array(
								DATA => INDEX,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				),
				QUESTION_TEXT_HEADER => array(
								DATA => QUESTION_TEXT,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => ''
				),
				CORRECT_RESPONSES_HEADER => array(
								DATA => CORRECT_RESPONSES,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				),
				INCORRECT_RESPONSES_HEADER => array(
								DATA => INCORRECT_RESPONSES,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				),
				PERCENT_CORRECT_HEADER => array(
								DATA => PERCENT_CORRECT,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				)
	);

	printTable($qlist, $questionsTableHeaders);

	$plist = getList($questions,$responses, PLAYERS);

	$playersTableHeaders = array(
				PLAYER_NAME_HEADER => array(
								DATA => PLAYER_ID,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				),
				CORRECT_RESPONSES_HEADER => array(
								DATA => CORRECT_RESPONSES,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				),
				INCORRECT_RESPONSES_HEADER => array(
								DATA => INCORRECT_RESPONSES,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				),
				PERCENT_CORRECT_HEADER => array(
								DATA => PERCENT_CORRECT,
								HEADER_CLASS_NAME => CLASS_CELL_TEXT,
								DATA_CLASS_NAME => CLASS_CELL_TEXT
				)
	);

	printTable($plist, $playersTableHeaders);
	include "../includes/footer.php";
?>