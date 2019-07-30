<?php

/**
 * gets the tweet by tweet date
 *
 * @param \PDO $pdo coneection object
 * @param string $tweetDate tweet date to search for
 * @return \splFixedArray splFixedArray of tweets found
 * @return \PDOException when mySQL related errors occur
 * @throws \TypeError when variables are not the correct data type
 */

public static function getTweetByTweetDate(\PDO $pdo, $tweetDate) : \SplFixedArray {

	try {
		$tweetDate = self::validateDate($tweetDate);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	//create a query template
	$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet WHERE tweetDate = :tweetDate ";
	$statement = $pdo->prepare($query);

	//biind the tweet profile id to the place holder in the template
	$parameters = ["tweetDate" => $tweetDate->getBytes()];
	$statement->execute($parameters);
	
}
