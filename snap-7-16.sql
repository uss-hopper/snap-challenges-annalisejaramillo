ALTER DATABASE ajaramillo208 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS task;

CREATE TABLE task (
   taskId BINARY(20) NOT NULL,
   taskTitle VARCHAR(255) NOT NULL,
   taskStartDate DATETIME,
   taskDueDate DATETIME,
   taskStatus VARCHAR(64) NOT NULL,
   taskPriority VARCHAR(64) NOT NULL,
   taskDescription VARCHAR(256)
);

SELECT tweet.tweetContent, profile.profileAtHandle FROM tweet
	INNER JOIN 'like' on tweet.tweetId = like.likeTweetId
	INNER JOIN profile ON like.likeProfileId = profile.profileId;
	WHERE